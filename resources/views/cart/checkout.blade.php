@extends('layouts.app')

@section('content')
<section class="courses_area pt-80 pb-130">
    <div class="container">
        <h2 class="title text-center mb-4">Checkout</h2>
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <div class="row">
            <div class="col-lg-8">
                <h4>Order Summary</h4>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            <tr>
                                <td>{{ $item['product']->name }}</td>
                                <td>${{ number_format($item['product']->price, 2) }}</td>
                                <td>{{ $item['quantity'] }}</td>
                                <td>${{ number_format($item['subtotal'], 2) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <h4>Total: ${{ number_format($total, 2) }}</h4>
            </div>
            <div class="col-lg-4">
                <h4>Payment Details</h4>
                <form id="payment-form" action="{{ route('checkout.process') }}" method="POST">
                    @csrf
                    <div id="card-element" class="form-control"></div>
                    <div id="card-errors" class="text-danger mt-2"></div>
                    <button type="submit" class="main-btn mt-3 w-100">Pay Now</button>
                </form>
            </div>
        </div>
    </div>
</section>

@section('scripts')
<script src="https://js.stripe.com/v3/"></script>
<script>
    const stripe = Stripe('{{ config('services.stripe.key') }}');
    const elements = stripe.elements();
    const cardElement = elements.create('card');
    cardElement.mount('#card-element');

    const form = document.getElementById('payment-form');
    const cardErrors = document.getElementById('card-errors');

    form.addEventListener('submit', async (event) => {
        event.preventDefault();
        const { paymentMethod, error } = await stripe.createPaymentMethod({
            type: 'card',
            card: cardElement,
        });

        if (error) {
            cardErrors.textContent = error.message;
        } else {
            // Form will submit to processCheckout
            form.submit();
        }
    });
</script>
@endsection
?>
