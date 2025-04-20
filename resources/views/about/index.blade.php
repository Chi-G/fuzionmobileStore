@extends('layouts.app')

@section('content')
    <section class="bg-gray-100 py-12">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl font-bold text-center mb-8">About Us</h1>

            @if($info)
                <!-- Company Logo -->
                @if($info->logo_path)
                    <div class="flex justify-center mb-6">
                        <img src="{{ asset('storage/' . $info->logo_path) }}" alt="Company Logo" class="max-w-xs h-auto rounded-lg shadow-md">
                    </div>
                @endif

                <!-- Description -->
                <div class="bg-white p-6 rounded-lg shadow-md mb-6">
                    <h2 class="text-2xl font-semibold mb-4">Our Story</h2>
                    <p class="text-gray-700">{{ $info->description }}</p>
                </div>

                <!-- Mission -->
                <div class="bg-white p-6 rounded-lg shadow-md mb-6">
                    <h2 class="text-2xl font-semibold mb-4">Our Mission</h2>
                    <p class="text-gray-700">{{ $info->mission }}</p>
                </div>

                <!-- Vision -->
                <div class="bg-white p-6 rounded-lg shadow-md mb-6">
                    <h2 class="text-2xl font-semibold mb-4">Our Vision</h2>
                    <p class="text-gray-700">{{ $info->vision }}</p>
                </div>

                <!-- Video -->
                @if($info->video_url)
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h2 class="text-2xl font-semibold mb-4">Watch Our Story</h2>
                        <div class="aspect-w-16 aspect-h-9">
                            <iframe src="{{ $info->video_url }}" class="w-full h-full rounded-lg" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                @endif
            @else
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <p class="text-gray-700">No company information available at this time.</p>
                </div>
            @endif
        </div>
    </section>
@endsection
