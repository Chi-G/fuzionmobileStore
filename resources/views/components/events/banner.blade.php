<section class="events_area d-flex flex-wrap">
    <div class="events_left">
        @if($events->isNotEmpty())
            @foreach($events->take(2) as $event)
                <div class="single_events d-flex flex-wrap">
                    <div class="events_content bg_cover" style="background-image: url({{ $event->banner_path ? (Str::startsWith($event->banner_path, 'banners/') ? asset('storage/' . $event->banner_path) : asset('frontend/assets/images/' . basename($event->banner_path))) : asset('frontend/assets/images/event-placeholder.jpg') }})">
                        <div class="events_wrapper">
                            <ul class="events_meta">
                                <li><a class="color-1" href="{{ route('events.show', $event->id) }}"><i class="fa fa-calendar"></i> {{ \Carbon\Carbon::parse($event->date)->format('d M, Y') }}</a></li>
                                <li><a class="color-2" href="{{ $event->type === 'virtual' && $event->zoom_link ? $event->zoom_link : '#' }}"><i class="fa {{ $event->type === 'virtual' ? 'fa-video-camera' : 'fa-map-marker' }}"></i> {{ $event->type === 'virtual' ? 'Virtual (Zoom)' : ($event->location ?? 'TBD') }}</a></li>
                            </ul>
                            <h4 class="events_title"><a href="{{ route('events.show', $event->id) }}">{{ $event->title }}</a></h4>
                        </div>
                    </div>
                    @if($loop->first)
                        <div class="events_content_title">
                            <div class="events_wrapper">
                                <h2 class="title">Upcoming Events</h2>
                            </div>
                        </div>
                    @endif
                </div>
            @endforeach
        @endif
    </div>
    <div class="events_right bg_cover" style="background-image: url({{ $events->count() >= 3 ? ($events[2]->banner_path ? (Str::startsWith($events[2]->banner_path, 'banners/') ? asset('storage/' . $events[2]->banner_path) : asset('frontend/assets/images/' . basename($events[2]->banner_path))) : asset('frontend/assets/images/event-placeholder.jpg')) : asset('frontend/assets/images/event-placeholder.jpg') }})">
        @if($events->count() >= 3)
            <div class="events_content_3 text-center">
                <div class="events_wrapper">
                    <ul class="events_meta">
                        <li><a class="color-1" href="{{ route('events.show', $events[2]->id) }}"><i class="fa fa-calendar"></i> {{ \Carbon\Carbon::parse($events[2]->date)->format('d M, Y') }}</a></li>
                        <li><a class="color-2" href="{{ $events[2]->type === 'virtual' && $events[2]->zoom_link ? $events[2]->zoom_link : '#' }}"><i class="fa {{ $events[2]->type === 'virtual' ? 'fa-video-camera' : 'fa-map-marker' }}"></i> {{ $events[2]->type === 'virtual' ? 'Virtual (Google Meet)' : ($events[2]->location ?? 'TBD') }}</a></li>
                    </ul>
                    <h4 class="events_title"><a href="{{ route('events.show', $events[2]->id) }}">{{ $events[2]->title }}</a></h4>
                </div>
            </div>
        @else
            <div class="events_content_3 text-center">
                <div class="events_wrapper">
                    <h4 class="events_title">No Featured Event</h4>
                </div>
            </div>
        @endif
    </div>
</section>
