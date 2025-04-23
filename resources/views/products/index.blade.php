@extends('layouts.app')

@section('content')
    <x-products.banner />

    <section class="pt-30">
        <div class="container">
            <h3 class="text-3xl font-bold mb-4">Premium Mobile Technology</h3>
            <p class="text-gray-600 mb-8 max-w-4xl">
                Browse our curated collection of industry-leading mobile solutions, including flagship smartphones,
                immersive VR experiences, high-performance storage solutions, and exclusive software licenses.
                Experience secure, seamless transactions with trusted payment partners Stripe and PayPal.
            </p>
            <x-products.main :products="$products" />
        </div>
    </section>
@endsection
