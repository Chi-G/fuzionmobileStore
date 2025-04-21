{{-- @extends('layouts.app')

@section('content')
    <x-events.banner :events="$events" />
    <x-events.main :events="$events" />
@endsection --}}


@extends('layouts.app')

@section('content')
    <section class="pt-80">
        <div class="container">
            <h3 class="text-3xl font-bold mb-4">Upcoming Events</h3>
            <p class="text-gray-600 mb-8">Join our exciting lineup of physical and virtual events to connect, learn, and grow with our community.</p>
            <x-events.main :events="$events" />
        </div>
    </section>
@endsection
