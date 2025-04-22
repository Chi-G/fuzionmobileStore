@extends('layouts.app')

@section('content')
    <x-products.banner />

    <section class="pt-80">
        <div class="container">
            <h3 class="text-3xl font-bold mb-4">Our Store</h3>
            <p class="text-gray-600 mb-8 max-w-4xl">
                Discover our premium mobile products, from smartphones and VR technology to SD cards and software licenses. Shop securely with Stripe and PayPal.
            </p>
            <x-products.main :products="$products" />
        </div>
    </section>
@endsection
