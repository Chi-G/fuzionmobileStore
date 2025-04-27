<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use Illuminate\Support\Facades\Log;
use Stripe\Exception\CardException;

class CartController extends Controller
{
    /**
     * Display the cart with all items.
     *
     * @return \Illuminate\View\View
     */
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

    /**
     * Add a product to the cart.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function add(Request $request, $id)
    {
        $quantity = $request->input('quantity', 1);
        $request->validate([
            'quantity' => 'integer|min:1',
        ]);

        $product = Product::findOrFail($id);
        if ($quantity > $product->stock) {
            return redirect()->back()->with('error', 'Requested quantity exceeds available stock.');
        }

        $cart = session('cart', []);
        $cart[$id] = isset($cart[$id]) ? $cart[$id] + $quantity : $quantity;
        session(['cart' => $cart]);

        return redirect()->route('products.show', $product->id)->with('success', 'Product added to cart successfully.');
    }

    /**
     * Update the quantity of a product in the cart.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
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

    /**
     * Remove a product from the cart.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function remove($id)
    {
        $cart = session('cart', []);
        unset($cart[$id]);
        session(['cart' => $cart]);

        return redirect()->route('cart.index')->with('success', 'Item removed from cart.');
    }

    /**
     * Display the checkout page with cart items.
     *
     * @return \Illuminate\View\View|\Illuminate\Http\RedirectResponse
     */
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

    /**
     * Process the checkout and save the order.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function processCheckout(Request $request)
    {
        $request->validate([
            'delivery.name' => 'required|string|max:255',
            'delivery.email' => 'required|email|max:255',
            'delivery.country' => 'required|string|max:2',
            'delivery.city' => 'required|string|max:255',
            'delivery.phone' => 'required|string|regex:/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/',
            'delivery.company_name' => 'nullable|string|max:255',
            'delivery.vat_number' => 'nullable|string|max:50',
            'payment_method' => 'required|string|in:credit_card,paypal',
            'delivery_method' => 'required|string|in:dhl,fedex',
            'payment_method_id' => 'required_if:payment_method,credit_card|string',
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
        $order = $this->saveOrder($request, $items, $total);

        // Process Stripe payment
        if ($request->payment_method === 'credit_card') {
            Stripe::setApiKey(config('services.stripe.secret'));

            try {
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
                return redirect()->route('checkout')->with('error', 'Payment failed: ' . $e->getMessage());
            }
        }

        // Placeholder for other payment methods
        return redirect()->route('checkout')->with('error', 'Selected payment method is not available.');
    }

    /**
     * Handle "Buy Now" for a single product.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $productId
     * @return \Illuminate\Http\RedirectResponse
     */
    public function buyNow(Request $request, $productId)
    {
        $quantity = $request->input('quantity', 1); // Default to 1 if not provided
        $request->validate([
            'quantity' => 'integer|min:1',
        ]);

        $product = Product::findOrFail($productId);
        if ($quantity > $product->stock) {
            return redirect()->back()->with('error', 'Requested quantity exceeds available stock.');
        }

        // Store single item in session for checkout
        session(['buy_now' => [
            'product_id' => $product->id,
            'quantity' => $quantity,
        ]]);

        return redirect()->route('cart.buy-now-checkout');
    }

    /**
     * Display checkout for "Buy Now" purchase.
     *
     * @return \Illuminate\View\View|\Illuminate\Http\RedirectResponse
     */
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

    /**
     * Process "Buy Now" checkout and save the order.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function processBuyNowCheckout(Request $request)
    {
        $request->validate([
            'delivery.name' => 'required|string|max:255',
            'delivery.email' => 'required|email|max:255',
            'delivery.country' => 'required|string|max:2',
            'delivery.city' => 'required|string|max:255',
            'delivery.phone' => 'required|string|regex:/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/',
            'delivery.company_name' => 'nullable|string|max:255',
            'delivery.vat_number' => 'nullable|string|max:50',
            'payment_method' => 'required|string|in:credit_card,paypal',
            'delivery_method' => 'required|string|in:dhl,fedex',
            'payment_method_id' => 'required_if:payment_method,credit_card|string',
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
        $order = $this->saveOrder($request, $items, $total);

        // Process Stripe payment
        if ($request->payment_method === 'credit_card') {
            Stripe::setApiKey(config('services.stripe.secret'));

            try {
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
                return redirect()->route('cart.buy-now-checkout')->with('error', 'Payment failed: ' . $e->getMessage());
            }
        }

        // Placeholder for other payment methods
        return redirect()->route('cart.buy-now-checkout')->with('error', 'Selected payment method is not available.');
    }

    /**
     * Save order to the database.
     *
     * @param \Illuminate\Http\Request $request
     * @param array $items
     * @param float $total
     * @return \App\Models\Order
     */
    protected function saveOrder(Request $request, array $items, float $total)
    {
        return Order::create([
            'user_id' => Auth::id(),
            'products' => json_encode($items),
            'total' => $total,
            'name' => $request->delivery['name'],
            'email' => $request->delivery['email'],
            'country' => $request->delivery['country'],
            'city' => $request->delivery['city'],
            'phone' => $request->delivery['phone'],
            'company_name' => $request->delivery['company_name'] ?? null,
            'vat_number' => $request->delivery['vat_number'] ?? null,
            'payment_method' => $request->payment_method,
            'delivery_method' => $request->delivery_method,
            'status' => 'pending',
        ]);
    }

    /**
     * Display the order confirmation page.
     *
     * @param \App\Models\Order $order
     * @return \Illuminate\View\View|\Illuminate\Http\RedirectResponse
     */
    public function confirmation(Order $order)
    {
        if ($order->user_id !== Auth::id()) {
            return redirect()->route('home')->with('error', 'You are not authorized to view this order.');
        }

        return view('cart.confirmation', compact('order'));
    }
}
?>
