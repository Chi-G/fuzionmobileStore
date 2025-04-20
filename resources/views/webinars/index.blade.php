@extends('layouts.app')

@section('content')
    <section class="bg-gray-100 py-12">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl font-bold text-center mb-8">Our Webinars</h1>
            @if($webinars->isNotEmpty())
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($webinars as $webinar)
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <h3 class="text-xl font-semibold mb-2">{{ $webinar->title }}</h3>
                            <p class="text-gray-600 mb-2">{{ \Carbon\Carbon::parse($webinar->date)->format('F j, Y') }} at {{ $webinar->time }}</p>
                            <p class="text-gray-600 mb-2">Platform: {{ $webinar->platform }}</p>
                            @if($webinar->meeting_url)
                                <a href="{{ $webinar->meeting_url }}" class="text-blue-500 hover:underline mb-2 block">Join Webinar</a>
                            @endif
                            <p class="text-gray-700">{{ Str::limit($webinar->description, 150) }}</p>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <p class="text-gray-700">No webinars available at this time.</p>
                </div>
            @endif
        </div>
    </section>
@endsection
