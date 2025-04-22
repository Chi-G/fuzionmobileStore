@extends('layouts.app2')

@section('content')
<section class="courses_area pt-80 pb-130">
    <div class="container">
        <h2 class="title text-center mb-4">Your Cart</h2>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        @if (empty($cartItems))
            <p class="text-center">Your cart is empty. <a href="{{ route('products') }}">Shop now!</a></p>
        @else
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Image</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Subtotal</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cartItems as $item)
                                <tr>
                                    <td>{{ $item['product']->name }}</td>
                                    <td>
                                        <img src="{{ $item['product']->image_path }}" alt="{{ $item['product']->name }}" style="width: 50px; height: 50px; object-fit: cover;">
                                    </td>
                                    <td>${{ number_format($item['product']->price, 2) }}</td>
                                    <td>
                                        <form action="{{ route('cart.update', $item['product']->id) }}" method="POST">
                                            @csrf
                                            <input type="number" name="quantity" value="{{ $item['quantity'] }}" min="1" max="{{ $item['product']->stock }}" class="form-control d-inline-block w-25">
                                            <button type="submit" class="btn btn-sm btn-primary">Update</button>
                                        </form>
                                    </td>
                                    <td>${{ number_format($item['subtotal'], 2) }}</td>
                                    <td>
                                        <form action="{{ route('cart.remove', $item['product']->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-danger">Remove</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="text-right">
                        <h4>Total: ${{ number_format($total, 2) }}</h4>
                        <a href="{{ route('checkout') }}" class="main-btn mt-3">Proceed to Checkout</a>
                    </div>
                </div>
            </div>
        @endif
    </div>
</section>
@endsection
?>
