@extends('layouts.app')

@section('content')
    <section class="bg-gray-100 py-12">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl font-bold text-center mb-8">Our Products</h1>
            @if($products->isNotEmpty())
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($products as $product)
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            @if($product->image_path)
                                <img src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->name }}" class="w-full h-48 object-cover rounded-md mb-4">
                            @endif
                            <h3 class="text-xl font-semibold mb-2">{{ $product->name }}</h3>
                            <p class="text-gray-600 mb-2">{{ ucfirst($product->type) }}</p>
                            <p class="text-gray-600 mb-2">Price: ${{ number_format($product->price, 2) }}</p>
                            <p class="text-gray-600 mb-2">Stock: {{ $product->stock }}</p>
                            <p class="text-gray-700">{{ Str::limit($product->description, 150) }}</p>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <p class="text-gray-700">No products available at this time.</p>
                </div>
            @endif
        </div>
    </section>
@endsection
