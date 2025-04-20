@extends('layouts.app')

@section('content')
    <!-- Page Banner -->
    <x-services.banner />

    <!-- Services Section -->
    <x-services.main :services="$services" />
@endsection
 