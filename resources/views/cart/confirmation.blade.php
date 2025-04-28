@extends('layouts.app2')

@section('content')
<section class="flowbite-container py-4 md:py-8">
    <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
        <h2 class="text-xl font-semibold text-gray-900 dark:text-white mt-0">Order Confirmation</h2>
        <div class="mt-6 space-y-6">
            <div class="rounded-lg border border-gray-200 bg-gray-50 p-4 dark:border-gray-700 dark:bg-gray-800">
                <h3 class="text-lg font-medium text-gray-900 dark:text-white">Thank You for Your Order!</h3>
                <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Order ID: {{ $order->id }}</p>
                <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Status: {{ ucfirst($order->status) }}</p>
                <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Total: ${{ number_format($order->total, 2) }}</p>

                <h4 class="mt-4 text-md font-medium text-gray-900 dark:text-white">Delivery Details</h4>
                <dl class="mt-2 space-y-2">
                    <div class="flex justify-between">
                        <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Name</dt>
                        <dd class="text-sm text-gray-900 dark:text-white">{{ $order->delivery_name }}</dd>
                    </div>
                    <div class="flex justify-between">
                        <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Email</dt>
                        <dd class="text-sm text-gray-900 dark:text-white">{{ $order->delivery_email }}</dd>
                    </div>
                    <div class="flex justify-between">
                        <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Country</dt>
                        <dd class="text-sm text-gray-900 dark:text-white">{{ $order->delivery_country }}</dd>
                    </div>
                    <div class="flex justify-between">
                        <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">City</dt>
                        <dd class="text-sm text-gray-900 dark:text-white">{{ $order->delivery_city }}</dd>
                    </div>
                    <div class="flex justify-between">
                        <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Phone</dt>
                        <dd class="text-sm text-gray-900 dark:text-white">{{ $order->delivery_phone }}</dd>
                    </div>
                    @if($order->delivery_company_name)
                    <div class="flex justify-between">
                        <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Company Name</dt>
                        <dd class="text-sm text-gray-900 dark:text-white">{{ $order->delivery_company_name }}</dd>
                    </div>
                    @endif
                    @if($order->delivery_vat_number)
                    <div class="flex justify-between">
                        <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">VAT Number</dt>
                        <dd class="text-sm text-gray-900 dark:text-white">{{ $order->delivery_vat_number }}</dd>
                    </div>
                    @endif
                </dl>

                <h4 class="mt-4 text-md font-medium text-gray-900 dark:text-white">Order Items</h4>
                <div class="mt-2 space-y-3">
                    @foreach($order->items as $item)
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-4">
                            <img src="{{ \Str::startsWith($item->product->image_path, 'http') ? $item->product->image_path : ($item->product->image_path ? asset('frontend/assets/images/' . $item->product->image_path) : asset('frontend/assets/images/product-placeholder.jpg')) }}" alt="{{ $item->product->name ?? 'Product' }}" class="h-12 w-12 object-cover rounded-md" onerror="this.src='{{ asset('frontend/assets/images/product-placeholder.jpg') }}';">
                            <div>
                                <p class="text-sm font-medium text-gray-900 dark:text-white">{{ $item->product->name }}</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">Price: ${{ number_format($item->price, 2) }} x {{ $item->quantity }}</p>
                            </div>
                        </div>
                        <p class="text-sm font-medium text-gray-900 dark:text-white">${{ number_format($item->subtotal, 2) }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
            <a href="{{ route('products') }}" class="text-primary-700 underline hover:no-underline dark:text-primary-500">Continue Shopping</a>
        </div>
    </div>
</section>
@endsection
