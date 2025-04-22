@extends('layouts.app')

@section('content')
    <!-- Details Banner -->
    <x-products.details-banner :product="$product" />

    <!-- Details Main -->
    <x-products.details-main :product="$product" />
@endsection
