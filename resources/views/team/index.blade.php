@extends('layouts.app')

@section('content')
    <section class="bg-gray-100 py-12">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl font-bold text-center mb-8">Our Team</h1>

            @if($team->isNotEmpty())
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($team as $member)
                        <div class="bg-white p-6 rounded-lg shadow-md flex flex-col items-center">
                            <!-- Team Member Image -->
                            @if($member->image_path)
                                <img src="{{ asset('storage/' . $member->image_path) }}" alt="{{ $member->name }}" class="w-32 h-32 rounded-full mb-4 object-cover">
                            @else
                                <div class="w-32 h-32 rounded-full bg-gray-200 mb-4 flex items-center justify-center">
                                    <span class="text-gray-500 text-2xl">{{ substr($member->name, 0, 1) }}</span>
                                </div>
                            @endif

                            <!-- Name and Role -->
                            <h3 class="text-xl font-semibold mb-2">{{ $member->name }}</h3>
                            <p class="text-gray-600 mb-4">{{ $member->role }}</p>

                            <!-- Bio -->
                            <p class="text-gray-700 text-center mb-4">{{ $member->bio }}</p>

                            <!-- Social Links -->
                            @if($member->social_links && is_array($member->social_links))
                                <div class="flex space-x-4">
                                    @foreach($member->social_links as $platform => $url)
                                        @if($url)
                                            <a href="{{ $url }}" target="_blank" class="text-blue-500 hover:text-blue-700">
                                                @if($platform === 'twitter')
                                                    <i class="fab fa-twitter"></i>
                                                @elseif($platform === 'linkedin')
                                                    <i class="fab fa-linkedin"></i>
                                                @elseif($platform === 'facebook')
                                                    <i class="fab fa-facebook"></i>
                                                @else
                                                    <i class="fas fa-link"></i>
                                                @endif
                                            </a>
                                        @endif
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            @else
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <p class="text-gray-700">No team members available at this time.</p>
                </div>
            @endif
        </div>
    </section>
@endsection
