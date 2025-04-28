@extends('layouts.app2')

@section('content')
<section class="flowbite-container py-8 md:py-16">
    <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
        <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Shopping Cart</h2>

        @if (empty($cartItems))
            <p class="mt-6 text-gray-500 dark:text-gray-400">Your cart is empty. <a href="{{ route('products') }}" class="text-primary-700 underline hover:no-underline dark:text-primary-500">Browse products</a>.</p>
        @else
            <div class="mt-6 space-y-6">
                <div class="rounded-lg border border-gray-200 bg-gray-50 p-4 dark:border-gray-700 dark:bg-gray-800">
                    @foreach ($cartItems as $item)
                        <div class="flex items-center justify-between py-3">
                            <div class="flex items-center gap-4">
                                <img src="{{ \Str::startsWith($item['product']->image_path, 'http') ? $item['product']->image_path : ($item['product']->image_path ? asset('frontend/assets/images/' . $item['product']->image_path) : asset('frontend/assets/images/product-placeholder.jpg')) }}" alt="{{ $item['product']->name ?? 'Product' }}" class="h-12 w-12 object-cover rounded-md" onerror="this.src='{{ asset('frontend/assets/images/product-placeholder.jpg') }}';">
                                <div>
                                    <p class="text-sm font-medium text-gray-900 dark:text-white">{{ $item['product']->name }}</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">Price: ${{ number_format($item['product']->price, 2) }}</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <form action="{{ route('cart.update', $item['product']->id) }}" method="POST" class="flex items-center">
                                    @csrf
                                    <input type="number" name="quantity" value="{{ $item['quantity'] }}" min="1" max="{{ $item['product']->stock }}" class="w-20 rounded-lg border border-gray-300 bg-gray-50 p-2 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white">
                                    <button type="submit" class="ml-2 text-sm font-medium text-primary-700 hover:underline dark:text-primary-500">Update</button>
                                </form>
                                <form action="{{ route('cart.remove', $item['product']->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="text-sm font-medium text-red-600 hover:underline dark:text-red-500">Remove</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="rounded-lg border border-gray-200 bg-gray-50 p-4 dark:border-gray-700 dark:bg-gray-800">
                    <div class="flex justify-center items-center gap-4">
                        <div class="w-full max-w-xs">
                            <dl class="space-y-2">
                                <div class="flex justify-between">
                                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Subtotal</dt>
                                    <dd class="text-sm font-medium text-gray-900 dark:text-white">${{ number_format($total, 2) }}</dd>
                                </div>
                                <div class="flex justify-between">
                                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Tax</dt>
                                    <dd class="text-sm font-medium text-gray-900 dark:text-white">$0.00</dd>
                                </div>
                                <div class="flex justify-between">
                                    <dt class="text-base font-bold text-gray-900 dark:text-white">Total</dt>
                                    <dd class="text-base font-bold text-gray-900 dark:text-white">${{ number_format($total, 2) }}</dd>
                                </div>
                            </dl>
                            <a href="{{ route('checkout') }}" class="mt-4 block rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 text-center">Proceed to Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</section>
@endsection
