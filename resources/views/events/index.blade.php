@extends('layouts.app')

@section('content')
    <section class="bg-gray-100 py-12">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl font-bold text-center mb-8">Upcoming Events</h1>
            @if($events->isNotEmpty())
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($events as $event)
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            @if($event->banner_path)
                                <img src="{{ asset('storage/' . $event->banner_path) }}" alt="{{ $event->title }}" class="w-full h-48 object-cover rounded-md mb-4">
                            @endif
                            <h3 class="text-xl font-semibold mb-2">{{ $event->title }}</h3>
                            <p class="text-gray-600 mb-2">{{ \Carbon\Carbon::parse($event->date)->format('F j, Y') }} at {{ $event->time }}</p>
                            <p class="text-gray-600 mb-2">{{ ucfirst($event->type) }} Event</p>
                            @if($event->type === 'physical' && $event->location)
                                <p class="text-gray-600 mb-2">Location: {{ $event->location }}</p>
                            @elseif($event->type === 'virtual' && $event->zoom_link)
                                <a href="{{ $event->zoom_link }}" class="text-blue-500 hover:underline mb-2 block">Join via Zoom</a>
                            @endif
                            <p class="text-gray-700">{{ Str::limit($event->description, 150) }}</p>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <p class="text-gray-700">No events scheduled at this time.</p>
                </div>
            @endif
        </div>
    </section>
@endsection
