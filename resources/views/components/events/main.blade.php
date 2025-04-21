<section class="blog_list_page pt-80 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                @if($events->isNotEmpty())
                    <div class="row">
                        @foreach($events as $event)
                            <div class="col-lg-4 col-md-6 mb-30">
                                <div class="single_blog_list">
                                    <div class="blog_list_image">
                                        <img src="{{ $event->banner_path ? (Str::startsWith($event->banner_path, 'banners/') ? asset('storage/' . $event->banner_path) : asset('frontend/assets/images/' . basename($event->banner_path))) : asset('frontend/assets/images/event-placeholder.jpg') }}" alt="{{ $event->title ?? 'Event' }}" onerror="this.src='{{ asset('frontend/assets/images/event-placeholder.jpg') }}';">
                                    </div>
                                    <div class="blog_list_content">
                                        <span class="date"><span>{{ \Carbon\Carbon::parse($event->date)->format('d') }}</span> {{ \Carbon\Carbon::parse($event->date)->format('M') }}</span>
                                        <div class="blog_content_wrapper">
                                            <ul class="blog_meta">
                                                <li><span>{{ ucfirst($event->type) }} Event</span></li>
                                                <li><span>{{ \Carbon\Carbon::parse($event->date)->format('d M Y') }} at {{ $event->time }}</span></li>
                                                @if($event->type === 'physical' && $event->location)
                                                    <li><span>Location: {{ $event->location }}</span></li>
                                                @elseif($event->type === 'virtual' && $event->zoom_link)
                                                    <li><a href="{{ $event->zoom_link }}" class="text-blue-500 hover:underline">Join via Zoom</a></li>
                                                @endif
                                                <li><span>Registrations: {{ $event->registrations->count() }}</span></li>
                                            </ul>
                                            <h4 class="blog_title"><a href="{{ route('events.show', $event->id) }}">{{ $event->title ?? 'Untitled Event' }}</a></h4>
                                            <p>{{ Str::limit(strip_tags($event->description), 150) }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            {{ $events->links('vendor.pagination.bootstrap-5') }}
                        </div>
                    </div>
                @else
                    <div class="text-center">
                        <p>No events scheduled at this time.</p>
                    </div>
                @endif
            </div>
        </div>
        @php
            \Log::info('Events Component Rendered', [
                'event_count' => $events->count(),
                'banner_paths' => $events->pluck('banner_path')->toArray(),
                'types' => $events->pluck('type')->toArray(),
                'registration_counts' => $events->pluck('registrations')->map->count()->toArray(),
            ]);
        @endphp
    </div>
</section>
