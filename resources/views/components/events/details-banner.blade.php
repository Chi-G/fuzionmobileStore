<section class="blog_details_page pt-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="blog_details_image">
                    <img src="{{ $event->banner_path ? (Str::startsWith($event->banner_path, 'banners/') ? asset('storage/' . $event->banner_path) : asset('frontend/assets/images/' . basename($event->banner_path))) : asset('frontend/assets/images/event-placeholder.jpg') }}" alt="{{ $event->title ?? 'Event' }}" onerror="this.src='{{ asset('frontend/assets/images/event-placeholder.jpg') }}';">
                </div>
                <h1 class="blog_details_title">{{ $event->title ?? 'Untitled Event' }}</h1>
                <ul class="blog_meta">
                    <li><span><i class="fa fa-calendar"></i> {{ \Carbon\Carbon::parse($event->date)->format('d M, Y') }} at {{ $event->time }}</span></li>
                    <li><span><i class="fa {{ $event->type === 'virtual' ? 'fa-video-camera' : 'fa-map-marker' }}"></i> {{ ucfirst($event->type) }} Event</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>
