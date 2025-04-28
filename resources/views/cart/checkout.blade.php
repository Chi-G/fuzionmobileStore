@extends('layouts.app2')

@section('content')
<section class="flowbite-container py-4 md:py-8">
    <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
        <h2 class="text-xl font-semibold text-gray-900 dark:text-white mt-0">Checkout</h2>

        @if (empty($items))
            <p class="mt-6 text-gray-500 dark:text-gray-400">Your cart is empty. <a href="{{ route('products') }}" class="text-primary-700 underline hover:no-underline dark:text-primary-500">Browse products</a>.</p>
        @else
            <div class="mt-6 space-y-6">
                <!-- Cart Items -->
                <div class="rounded-lg border border-gray-200 bg-gray-50 p-4 dark:border-gray-700 dark:bg-gray-800">
                    @foreach ($items as $item)
                        <div class="flex items-center justify-between py-3">
                            <div class="flex items-center gap-4">
                                <img src="{{ \Str::startsWith($item['product']->image_path, 'http') ? $item['product']->image_path : ($item['product']->image_path ? asset('frontend/assets/images/' . $item['product']->image_path) : asset('frontend/assets/images/product-placeholder.jpg')) }}" alt="{{ $item['product']->name ?? 'Product' }}" class="h-12 w-12 object-cover rounded-md" onerror="this.src='{{ asset('frontend/assets/images/product-placeholder.jpg') }}';">
                                <div>
                                    <p class="text-sm font-medium text-gray-900 dark:text-white">{{ $item['product']->name }}</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">Price: ${{ number_format($item['product']->price, 2) }} x {{ $item['quantity'] }}</p>
                                </div>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-900 dark:text-white">${{ number_format($item['subtotal'], 2) }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Delivery and Payment Form -->
                <div class="rounded-lg border border-gray-200 bg-gray-50 p-4 dark:border-gray-700 dark:bg-gray-800">
                    <form id="checkout-form" action="{{ route('checkout.process') }}" method="POST" class="space-y-6">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Delivery Details -->
                            <div>
                                <h3 class="text-lg font-medium text-gray-900 dark:text-white">Delivery Details</h3>
                                <div class="mt-4 space-y-4">
                                    <div>
                                        <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Name</label>
                                        <input type="text" name="delivery[name]" id="name" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white" required>
                                        @error('delivery.name')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                                        <input type="email" name="delivery[email]" id="email" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white" required>
                                        @error('delivery.email')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="country" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Country</label>
                                        <input type="text" name="delivery[country]" id="country" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white" required>
                                        @error('delivery.country')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="city" class="block text-sm font-medium text-gray-700 dark:text-gray-300">City</label>
                                        <input type="text" name="delivery[city]" id="city" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white" required>
                                        @error('delivery.city')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="phone" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Phone</label>
                                        <input type="text" name="delivery[phone]" id="phone" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white" required>
                                        @error('delivery.phone')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="company_name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Company Name (Optional)</label>
                                        <input type="text" name="delivery[company_name]" id="company_name" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                        @error('delivery.company_name')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="vat_number" class="block text-sm font-medium text-gray-700 dark:text-gray-300">VAT Number (Optional)</label>
                                        <input type="text" name="delivery[vat_number]" id="vat_number" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                        @error('delivery.vat_number')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <!-- Payment and Delivery Method -->
                            <div>
                                <h3 class="text-lg font-medium text-gray-900 dark:text-white">Payment & Delivery Method</h3>
                                <div class="mt-4 space-y-4">
                                    <input type="hidden" name="payment_method" value="credit_card">
                                    <div>
                                        <label for="delivery_method" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Delivery Method</label>
                                        <select name="delivery_method" id="delivery_method" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white" required>
                                            <option value="dhl">DHL</option>
                                            <option value="fedex">FedEx</option>
                                        </select>
                                        @error('delivery_method')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div id="credit-card-fields" class="mt-4 space-y-6">
                                        <div class="p-4 bg-white dark:bg-gray-700 rounded-lg">
                                            <label for="card-number" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Card Number</label>
                                            <div id="card-number" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white p-2"></div>
                                            @error('card_number')
                                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="grid grid-cols-2 gap-4">
                                            <div class="p-4 bg-white dark:bg-gray-700 rounded-lg">
                                                <label for="card-expiry" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Expiry Date</label>
                                                <div id="card-expiry" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white p-2"></div>
                                                @error('card_expiry')
                                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="p-4 bg-white dark:bg-gray-700 rounded-lg">
                                                <label for="card-cvc" class="block text-sm font-medium text-gray-700 dark:text-gray-300">CVV</label>
                                                <div id="card-cvc" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white p-2"></div>
                                                @error('card_cvc')
                                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <input type="hidden" name="payment_method_id" id="payment_method_id">
                                        @error('payment_method_id')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="flex justify-center mt-6">
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
                                        <button type="submit" id="submit-button" class="mt-4 block w-full rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Complete Purchase</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        @endif
    </div>
</section>
@endsection

@section('scripts')
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const stripe = Stripe('{{ config('services.stripe.key') }}');
            const elements = stripe.elements();

            // Create Stripe Elements for card fields
            const cardNumber = elements.create('cardNumber', {
                placeholder: '1234 1234 1234 1234',
                classes: { base: 'mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white p-2' }
            });
            const cardExpiry = elements.create('cardExpiry', {
                classes: { base: 'mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white p-2' }
            });
            const cardCvc = elements.create('cardCvc', {
                placeholder: '123',
                classes: { base: 'mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white p-2' }
            });

            // Mount Stripe Elements
            cardNumber.mount('#card-number');
            cardExpiry.mount('#card-expiry');
            cardCvc.mount('#card-cvc');

            const form = document.getElementById('checkout-form');
            const submitButton = document.getElementById('submit-button');

            form.addEventListener('submit', async (event) => {
                event.preventDefault();
                submitButton.disabled = true;

                try {
                    const { error: paymentMethodError, paymentMethod } = await stripe.createPaymentMethod({
                        type: 'card',
                        card: cardNumber,
                        billing_details: {
                            email: document.getElementById('email').value,
                        },
                    });

                    if (paymentMethodError) {
                        console.error('Stripe PaymentMethod Error:', paymentMethodError);
                        toastr.error(paymentMethodError.message || 'Failed to process payment. Please check your card details.');
                        submitButton.disabled = false;
                        return;
                    }

                    document.getElementById('payment_method_id').value = paymentMethod.id;

                    // Submit form to server
                    const formData = new FormData(form);
                    const response = await fetch('{{ route('checkout.process') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                            'Accept': 'application/json',
                        },
                        body: new URLSearchParams(formData),
                    });

                    // Log response for debugging
                    const responseText = await response.text();
                    console.log('Response Status:', response.status);
                    console.log('Response Text:', responseText);

                    let result;
                    try {
                        result = JSON.parse(responseText);
                    } catch (e) {
                        console.error('JSON Parse Error:', e, responseText);
                        toastr.error('Server returned invalid response. Please try again.');
                        submitButton.disabled = false;
                        return;
                    }

                    if (result.error) {
                        console.error('Server Error:', result.error);
                        toastr.error(result.error);
                        submitButton.disabled = false;
                        return;
                    }

                    if (result.requires_action) {
                        const { error: confirmError, paymentIntent } = await stripe.confirmCardPayment(result.client_secret, {
                            payment_method: paymentMethod.id,
                        });

                        if (confirmError) {
                            console.error('Stripe Confirm Error:', confirmError);
                            toastr.error(confirmError.message || 'Payment authentication failed.');
                            submitButton.disabled = false;
                            return;
                        }

                        if (paymentIntent.status === 'succeeded') {
                            formData.append('order_id', result.order_id);
                            const resubmitResponse = await fetch('{{ route('checkout.process') }}', {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/x-www-form-urlencoded',
                                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                                    'Accept': 'application/json',
                                },
                                body: new URLSearchParams(formData),
                            });

                            const resubmitText = await resubmitResponse.text();
                            console.log('Resubmit Response Status:', resubmitResponse.status);
                            console.log('Resubmit Response Text:', resubmitText);

                            let resubmitResult;
                            try {
                                resubmitResult = JSON.parse(resubmitText);
                            } catch (e) {
                                console.error('Resubmit JSON Parse Error:', e, resubmitText);
                                toastr.error('Server returned invalid response on resubmission. Please try again.');
                                submitButton.disabled = false;
                                return;
                            }

                            if (resubmitResult.error) {
                                console.error('Resubmit Server Error:', resubmitResult.error);
                                toastr.error(resubmitResult.error);
                                submitButton.disabled = false;
                                return;
                            }

                            if (resubmitResult.success) {
                                window.location.href = resubmitResult.redirect;
                            }
                        }
                    } else if (result.success) {
                        window.location.href = result.redirect;
                    }
                } catch (err) {
                    console.error('Unexpected Error:', err);
                    toastr.error('An unexpected error occurred: ' + err.message);
                    submitButton.disabled = false;
                }
            });
        });
    </script>
@endsection

@section('head')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
