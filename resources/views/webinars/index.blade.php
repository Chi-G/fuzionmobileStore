{{-- @extends('layouts.app')

@section('content')
    <x-webinars.banner :webinars="$webinars" />
    <x-webinars.main :webinars="$webinars" />
@endsection --}}


@extends('layouts.app')

@section('content')
    <section class="pt-80">
        <div class="container">
            <h3 class="text-3xl font-bold mb-4">Our Webinars</h3>
            <p class="text-gray-600 mb-8">Explore our interactive webinars on various topics, available live or on-demand for your convenience.</p>
            <x-webinars.main :webinars="$webinars" />
        </div>
    </section>
@endsection
