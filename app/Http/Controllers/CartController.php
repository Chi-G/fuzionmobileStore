<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Stripe\Checkout\Session;
use Stripe\Stripe;

class CartController extends Controller
{
    public function index()
    {
        $cart = session('cart', []);
        $cartItems = [];
        $total = 0;

        foreach ($cart as $id => $quantity) {
            $product = Product::find($id);
            if ($product && $product->stock >= $quantity) {
                $cartItems[] = [
                    'product' => $product,
                    'quantity' => $quantity,
                    'subtotal' => $product->price * $quantity,
                ];
                $total += $product->price * $quantity;
            }
        }

        return view('cart.index', compact('cartItems', 'total'));
    }

    public function add(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        if ($product->stock < 1) {
            return redirect()->back()->with('error', 'Product is out of stock.');
        }

        $cart = session('cart', []);
        $cart[$id] = isset($cart[$id]) ? $cart[$id] + 1 : 1;

        if ($product->stock < $cart[$id]) {
            return redirect()->back()->with('error', 'Not enough stock available.');
        }

        session(['cart' => $cart]);
        return redirect()->back()->with('success', 'Product added to cart!');
    }

    public function remove(Request $request, $id)
    {
        $cart = session('cart', []);
        if (isset($cart[$id])) {
            unset($cart[$id]);
            session(['cart' => $cart]);
            return redirect()->route('cart.index')->with('success', 'Product removed from cart!');
        }
        return redirect()->route('cart.index')->with('error', 'Product not found in cart.');
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $quantity = $request->input('quantity', 1);

        if ($quantity < 1) {
            return redirect()->route('cart.index')->with('error', 'Quantity must be at least 1.');
        }

        if ($product->stock < $quantity) {
            return redirect()->route('cart.index')->with('error', 'Not enough stock available.');
        }

        $cart = session('cart', []);
        if (isset($cart[$id])) {
            $cart[$id] = $quantity;
            session(['cart' => $cart]);
            return redirect()->route('cart.index')->with('success', 'Cart updated successfully!');
        }

        return redirect()->route('cart.index')->with('error', 'Product not found in cart.');
    }

    public function buyNow(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        if ($product->stock < 1) {
            return redirect()->back()->with('error', 'Product is out of stock.');
        }

        // Store single product in session for checkout
        session(['buy_now' => ['id' => $id, 'quantity' => 1]]);
        return redirect()->route('checkout');
    }

    public function checkout()
    {
        $buyNow = session('buy_now');
        $cart = session('cart', []);
        $items = [];
        $total = 0;

        if ($buyNow) {
            $product = Product::findOrFail($buyNow['id']);
            if ($product->stock < $buyNow['quantity']) {
                return redirect()->route('cart.index')->with('error', 'Product is out of stock.');
            }
            $items[] = [
                'product' => $product,
                'quantity' => $buyNow['quantity'],
                'subtotal' => $product->price * $buyNow['quantity'],
            ];
            $total = $product->price * $buyNow['quantity'];
        } else {
            foreach ($cart as $id => $quantity) {
                $product = Product::find($id);
                if ($product && $product->stock >= $quantity) {
                    $items[] = [
                        'product' => $product,
                        'quantity' => $quantity,
                        'subtotal' => $product->price * $quantity,
                    ];
                    $total += $product->price * $quantity;
                }
            }
        }

        if (empty($items)) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty.');
        }

        return view('cart.checkout', compact('items', 'total'));
    }

    public function processCheckout(Request $request)
    {
        Stripe::setApiKey(config('services.stripe.secret'));

        $buyNow = session('buy_now');
        $cart = session('cart', []);
        $lineItems = [];

        if ($buyNow) {
            $product = Product::findOrFail($buyNow['id']);
            $lineItems[] = [
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => $product->name,
                    ],
                    'unit_amount' => $product->price * 100,
                ],
                'quantity' => $buyNow['quantity'],
            ];
        } else {
            foreach ($cart as $id => $quantity) {
                $product = Product::find($id);
                if ($product && $product->stock >= $quantity) {
                    $lineItems[] = [
                        'price_data' => [
                            'currency' => 'usd',
                            'product_data' => [
                                'name' => $product->name,
                            ],
                            'unit_amount' => $product->price * 100,
                        ],
                        'quantity' => $quantity,
                    ];
                }
            }
        }

        if (empty($lineItems)) {
            return redirect()->route('cart.index')->with('error', 'No items to checkout.');
        }

        try {
            $session = Session::create([
                'payment_method_types' => ['card'],
                'line_items' => $lineItems,
                'mode' => 'payment',
                'success_url' => route('checkout.success') . '?session_id={CHECKOUT_SESSION_ID}',
                'cancel_url' => route('checkout.cancel'),
            ]);

            // Update stock
            if ($buyNow) {
                $product = Product::find($buyNow['id']);
                $product->decrement('stock', $buyNow['quantity']);
                session()->forget('buy_now');
            } else {
                foreach ($cart as $id => $quantity) {
                    $product = Product::find($id);
                    if ($product) {
                        $product->decrement('stock', $quantity);
                    }
                }
                session()->forget('cart');
            }

            return redirect($session->url);
        } catch (\Exception $e) {
            return redirect()->route('checkout')->with('error', 'Payment processing failed: ' . $e->getMessage());
        }
    }

    public function success(Request $request)
    {
        // Verify Stripe session if needed
        return redirect()->route('products')->with('success', 'Payment successful! Thank you for your purchase.');
    }

    public function cancel()
    {
        return redirect()->route('checkout')->with('error', 'Payment was cancelled.');
    }
}
?>
