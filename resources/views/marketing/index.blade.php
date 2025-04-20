@extends('layouts.app')

@section('content')
    <section class="bg-gray-100 py-12">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl font-bold text-center mb-8">Marketing Strategies</h1>
            @if($strategies->isNotEmpty())
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($strategies as $strategy)
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <h3 class="text-xl font-semibold mb-2">{{ $strategy->title }}</h3>
                            <p class="text-gray-700 mb-4">{{ Str::limit($strategy->description, 150) }}</p>
                            @if($strategy->brochure_path)
                                <a href="{{ asset('storage/' . $strategy->brochure_path) }}" class="text-blue-500 hover:underline" target="_blank">Download Brochure</a>
                            @endif
                        </div>
                    @endforeach
                </div>
            @else
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <p class="text-gray-700">No marketing strategies available at this time.</p>
                </div>
            @endif
        </div>
    </section>
@endsection
