<section class="courses_area pt-80 pb-130">
    <div class="container">
        <h3 class="text-3xl font-bold text-center mb-8">Our Dedicated Team</h3>
        @if($team->isNotEmpty())
            <div class="row">
                @foreach($team as $member)
                    <div class="col-lg-4 col-sm-6">
                        <div class="single_courses courses_gray mt-30 text-center">
                            <!-- Team Member Image -->
                            <div class="courses_image">
                                <img src="{{ $member->image_path && file_exists(public_path('frontend/assets/images/' . $member->image_path)) ? asset('frontend/assets/images/' . $member->image_path) : asset('frontend/assets/images/team-placeholder.jpg') }}" alt="{{ $member->name ?? 'Team Member' }}" class="w-32 h-32 rounded-full mx-auto mb-4 object-cover" onerror="this.src='{{ asset('frontend/assets/images/team-placeholder.jpg') }}';">
                            </div>
                            <!-- Name and Role -->
                            <div class="courses_content">
                                <h4 class="title">{{ $member->name ?? 'Unnamed Member' }}</h4>
                                <p class="text-gray-600 mb-4">{{ $member->role ?? 'No Role' }}</p>
                                <!-- Bio -->
                                <p class="text-gray-700 mb-4 line-clamp-3">{{ $member->bio ?? 'No bio available.' }}</p>
                                <!-- Social Links -->
                                @if($member->social_links && is_array($member->social_links))
                                    <ul class="social flex justify-center space-x-4">
                                        @foreach($member->social_links as $platform => $url)
                                            @if($url)
                                                <li>
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
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    {{ $team->links('vendor.pagination.bootstrap-5') }}
                </div>
            </div>
        @else
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p class="text-gray-700">No team members available at this time.</p>
                </div>
            </div>
        @endif
        @php
            \Log::info('Team Component Rendered', [
                'team_count' => $team->count(),
                'image_paths' => $team->pluck('image_path')->toArray(),
            ]);
        @endphp
    </div>
</section>
