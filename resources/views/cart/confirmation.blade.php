@extends('layouts.app2')

@section('content')
<section class="flowbite-container py-8 md:py-16">
    <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
        <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Order Confirmation</h2>
        @if (session('success'))
            <div class="mt-4 rounded-lg bg-green-50 p-4 text-sm text-green-800 dark:bg-green-800 dark:text-green-400">{{ session('success') }}</div>
        @endif
        <div class="mt-6 space-y-4">
            <p class="text-gray-900 dark:text-white">Thank you for your order! Your order #{{ $order->id }} has been placed successfully.</p>
            <div class="rounded-lg border border-gray-200 bg-gray-50 p-4 dark:border-gray-700 dark:bg-gray-800">
                <h3 class="text-lg font-medium text-gray-900 dark:text-white">Order Details</h3>
                <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Name: {{ $order->name }}</p>
                <p class="text-sm text-gray-500 dark:text-gray-400">Email: {{ $order->email }}</p>
                <p class="text-sm text-gray-500 dark:text-gray-400">Total: ${{ number_format($order->total, 2) }}</p>
                <p class="text-sm text-gray-500 dark:text-gray-400">Status: {{ ucfirst($order->status) }}</p>
            </div>
            <div class="flex justify-end">
                <a href="{{ route('products') }}" class="rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Continue Shopping</a>
            </div>
        </div>
    </div>
</section>
@endsection
