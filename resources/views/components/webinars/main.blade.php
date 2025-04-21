<section class="blog_list_page pt-80 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                @if($webinars->isNotEmpty())
                    <div class="row">
                        @foreach($webinars as $webinar)
                            <div class="col-lg-4 col-md-6 mb-30">
                                <div class="single_blog_list">
                                    <div class="blog_list_image">
                                        <img src="{{ $webinar->banner_path ? (Str::startsWith($webinar->banner_path, 'banners/') ? asset('storage/' . $webinar->banner_path) : asset('frontend/assets/images/' . basename($webinar->banner_path))) : asset('frontend/assets/images/webinar-placeholder.jpg') }}" alt="{{ $webinar->title ?? 'Webinar' }}" onerror="this.src='{{ asset('frontend/assets/images/webinar-placeholder.jpg') }}';">
                                    </div>
                                    <div class="blog_list_content">
                                        <span class="date"><span>{{ \Carbon\Carbon::parse($webinar->date)->format('d') }}</span> {{ \Carbon\Carbon::parse($webinar->date)->format('M') }}</span>
                                        <div class="blog_content_wrapper">
                                            <ul class="blog_meta">
                                                <li><span>Platform: {{ $webinar->platform }}</span></li>
                                                <li><span>{{ \Carbon\Carbon::parse($webinar->date)->format('d M Y') }} at {{ $webinar->time }}</span></li>
                                                @if($webinar->registration_link)
                                                    <li><a href="{{ $webinar->registration_link }}" class="text-blue-500 hover:underline">Register Now</a></li>
                                                @elseif($webinar->meeting_url)
                                                    <li><a href="{{ $webinar->meeting_url }}" class="text-blue-500 hover:underline">Join Webinar</a></li>
                                                @endif
                                                @if($webinar->recording_url)
                                                    <li><a href="{{ $webinar->recording_url }}" class="text-blue-500 hover:underline">Watch Recording</a></li>
                                                @endif
                                            </ul>
                                            <h4 class="blog_title"><a href="{{ route('webinars.show', $webinar->id) }}">{{ $webinar->title ?? 'Untitled Webinar' }}</a></h4>
                                            <p>{{ Str::limit(strip_tags($webinar->description), 150) }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            {{ $webinars->links('vendor.pagination.bootstrap-5') }}
                        </div>
                    </div>
                @else
                    <div class="text-center">
                        <p>No webinars available at this time.</p>
                    </div>
                @endif
            </div>
        </div>
        @php
            \Log::info('Webinars Component Rendered', [
                'webinar_count' => $webinars->count(),
                'banner_paths' => $webinars->pluck('banner_path')->toArray(),
                'platforms' => $webinars->pluck('platform')->toArray(),
                'recording_urls' => $webinars->pluck('recording_url')->toArray(),
                'registration_links' => $webinars->pluck('registration_link')->toArray(),
            ]);
        @endphp
    </div>
</section>
