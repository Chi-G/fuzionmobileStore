<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use Illuminate\Support\Facades\Log;

class CartController extends Controller
{
    public function index()
    {
        $cart = session('cart', []);
        $cartItems = [];
        $total = 0;

        foreach ($cart as $productId => $quantity) {
            $product = Product::find($productId);
            if ($product) {
                $subtotal = $product->price * $quantity;
                $cartItems[] = [
                    'product' => $product,
                    'quantity' => $quantity,
                    'subtotal' => $subtotal,
                ];
                $total += $subtotal;
            }
        }

        return view('cart.index', compact('cartItems', 'total'));
    }

    public function add(Request $request)
    {
        $request->validate([
            'product_id' => 'required|integer|exists:products,id',
            'quantity' => 'nullable|integer|min:1',
        ]);

        $productId = $request->input('product_id');
        $quantity = $request->input('quantity', 1);

        $product = Product::findOrFail($productId);
        if ($quantity > $product->stock) {
            return redirect()->back()->with('error', 'Requested quantity exceeds available stock.');
        }

        $cart = session('cart', []);
        $cart[$productId] = isset($cart[$productId]) ? $cart[$productId] + $quantity : $quantity;
        session(['cart' => $cart]);

        return redirect()->route('products.show', $productId)->with('success', 'Product added to cart successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        $product = Product::findOrFail($id);
        if ($request->quantity > $product->stock) {
            return redirect()->route('cart.index')->with('error', 'Requested quantity exceeds available stock.');
        }

        $cart = session('cart', []);
        $cart[$id] = $request->quantity;
        session(['cart' => $cart]);

        return redirect()->route('cart.index')->with('success', 'Cart updated successfully.');
    }

    public function remove($id)
    {
        $cart = session('cart', []);
        unset($cart[$id]);
        session(['cart' => $cart]);

        return redirect()->route('cart.index')->with('success', 'Item removed from cart.');
    }

    public function checkout()
    {
        $cart = session('cart', []);
        $items = [];
        $total = 0;

        foreach ($cart as $productId => $quantity) {
            $product = Product::find($productId);
            if ($product) {
                $subtotal = $product->price * $quantity;
                $items[] = [
                    'product' => $product,
                    'quantity' => $quantity,
                    'subtotal' => $subtotal,
                ];
                $total += $subtotal;
            }
        }

        if (empty($items)) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty.');
        }

        return view('cart.checkout', compact('items', 'total'));
    }

    public function processCheckout(Request $request)
    {
        $request->validate([
            'delivery.name' => 'required|string|max:255',
            'delivery.email' => 'required|email|max:255',
            'delivery.country' => 'required|string|max:255',
            'delivery.city' => 'required|string|max:255',
            'delivery.phone' => 'required|string',
            'delivery.company_name' => 'nullable|string|max:255',
            'delivery.vat_number' => 'nullable|string|max:50',
            'payment_method' => 'required|string|in:credit_card',
            'delivery_method' => 'required|string|in:dhl,fedex',
            'payment_method_id' => 'required|string',
        ]);

        $cart = session('cart', []);
        if (empty($cart)) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty.');
        }

        // Prepare order data
        $items = [];
        $total = 0;
        foreach ($cart as $productId => $quantity) {
            $product = Product::find($productId);
            if ($product) {
                $subtotal = $product->price * $quantity;
                $items[] = [
                    'product_id' => $product->id,
                    'name' => $product->name,
                    'quantity' => $quantity,
                    'price' => $product->price,
                    'subtotal' => $subtotal,
                ];
                $total += $subtotal;
            }
        }

        if (empty($items)) {
            return redirect()->route('cart.index')->with('error', 'No valid products found in cart.');
        }

        // Save order to database
        try {
            $order = $this->saveOrder($request, $items, $total);

            // Process Stripe payment
            Stripe::setApiKey(config('services.stripe.secret'));
            $paymentIntent = PaymentIntent::create([
                'amount' => $total * 100, // Convert to cents
                'currency' => 'usd',
                'payment_method' => $request->payment_method_id,
                'confirmation_method' => 'manual',
                'confirm' => true,
                'metadata' => ['order_id' => $order->id],
            ]);

            // Update order status
            $order->update(['status' => 'completed']);

            // Clear session
            session()->forget(['cart', 'delivery', 'payment_method', 'delivery_method', 'buy_now']);

            return redirect()->route('order.confirmation', $order->id)->with('success', 'Payment successful! Your order has been placed.');
        } catch (\Exception $e) {
            Log::error('Checkout Error', ['error' => $e->getMessage(), 'trace' => $e->getTraceAsString()]);
            return redirect()->route('checkout')->with('error', 'Checkout failed: ' . $e->getMessage());
        }
    }

    public function buyNow(Request $request, $productId)
    {
        $quantity = $request->input('quantity', 1);
        $request->validate([
            'quantity' => 'integer|min:1',
        ]);

        $product = Product::findOrFail($productId);
        if ($quantity > $product->stock) {
            return redirect()->back()->with('error', 'Requested quantity exceeds available stock.');
        }

        session(['buy_now' => [
            'product_id' => $product->id,
            'quantity' => $quantity,
        ]]);

        return redirect()->route('cart.buy-now-checkout');
    }

    public function buyNowCheckout()
    {
        $buyNow = session('buy_now');
        if (!$buyNow) {
            return redirect()->route('products')->with('error', 'No product selected for purchase.');
        }

        $product = Product::find($buyNow['product_id']);
        if (!$product) {
            return redirect()->route('products')->with('error', 'Selected product is no longer available.');
        }

        $subtotal = $product->price * $buyNow['quantity'];
        $items = [[
            'product' => $product,
            'quantity' => $buyNow['quantity'],
            'subtotal' => $subtotal,
        ]];
        $total = $subtotal;

        return view('cart.buy-now', compact('items', 'total'));
    }

    public function processBuyNowCheckout(Request $request)
    {
        $request->validate([
            'delivery.name' => 'required|string|max:255',
            'delivery.email' => 'required|email|max:255',
            'delivery.country' => 'required|string|max:255',
            'delivery.city' => 'required|string|max:255',
            'delivery.phone' => 'required|string',
            'delivery.company_name' => 'nullable|string|max:255',
            'delivery.vat_number' => 'nullable|string|max:50',
            'payment_method' => 'required|string|in:credit_card',
            'delivery_method' => 'required|string|in:dhl,fedex',
            'payment_method_id' => 'required|string',
        ]);

        $buyNow = session('buy_now');
        if (!$buyNow) {
            return redirect()->route('products')->with('error', 'No product selected for purchase.');
        }

        $product = Product::find($buyNow['product_id']);
        if (!$product) {
            return redirect()->route('products')->with('error', 'Selected product is no longer available.');
        }

        // Prepare order data
        $quantity = $buyNow['quantity'];
        $subtotal = $product->price * $quantity;
        $items = [[
            'product_id' => $product->id,
            'name' => $product->name,
            'quantity' => $quantity,
            'price' => $product->price,
            'subtotal' => $subtotal,
        ]];
        $total = $subtotal;

        // Save order to database
        try {
            $order = $this->saveOrder($request, $items, $total);

            // Process Stripe payment
            Stripe::setApiKey(config('services.stripe.secret'));
            $paymentIntent = PaymentIntent::create([
                'amount' => $total * 100, // Convert to cents
                'currency' => 'usd',
                'payment_method' => $request->payment_method_id,
                'confirmation_method' => 'manual',
                'confirm' => true,
                'metadata' => ['order_id' => $order->id],
            ]);

            // Update order status
            $order->update(['status' => 'completed']);

            // Clear session
            session()->forget(['buy_now', 'delivery', 'payment_method', 'delivery_method']);

            return redirect()->route('order.confirmation', $order->id)->with('success', 'Payment successful! Your order has been placed.');
        } catch (\Exception $e) {
            Log::error('Buy Now Checkout Error', ['error' => $e->getMessage(), 'trace' => $e->getTraceAsString()]);
            return redirect()->route('cart.buy-now-checkout')->with('error', 'Checkout failed: ' . $e->getMessage());
        }
    }

    protected function saveOrder(Request $request, array $items, float $total)
    {
        $orderData = [
            'user_id' => Auth::id() ?? null, // Allow guest orders
            'total' => $total,
            'status' => 'pending',
            'delivery_name' => $request->delivery['name'],
            'delivery_email' => $request->delivery['email'],
            'delivery_country' => $request->delivery['country'],
            'delivery_city' => $request->delivery['city'],
            'delivery_phone' => $request->delivery['phone'],
            'delivery_company_name' => $request->delivery['company_name'] ?? null,
            'delivery_vat_number' => $request->delivery['vat_number'] ?? null,
            'payment_method' => $request->payment_method,
            'delivery_method' => $request->delivery_method,
        ];

        $order = Order::create($orderData);

        foreach ($items as $item) {
            $order->items()->create([
                'product_id' => $item['product_id'],
                'quantity' => $item['quantity'],
                'price' => $item['price'],
                'subtotal' => $item['subtotal'],
            ]);
        }

        return $order;
    }

    public function confirmation(Order $order)
    {
        if ($order->user_id !== Auth::id() && Auth::id() !== null) {
            return redirect()->route('home')->with('error', 'You are not authorized to view this order.');
        }

        return view('cart.confirmation', compact('order'));
    }
}
