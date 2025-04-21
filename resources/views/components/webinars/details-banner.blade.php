<section class="blog_details_page pt-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="blog_details_image">
                    <img src="{{ $webinar->banner_path ? (Str::startsWith($webinar->banner_path, 'banners/') ? asset('storage/' . $webinar->banner_path) : asset('frontend/assets/images/' . basename($webinar->banner_path))) : asset('frontend/assets/images/webinar-placeholder.jpg') }}" alt="{{ $webinar->title ?? 'Webinar' }}" onerror="this.src='{{ asset('frontend/assets/images/webinar-placeholder.jpg') }}';">
                </div>
                <h1 class="blog_details_title">{{ $webinar->title ?? 'Untitled Webinar' }}</h1>
                <ul class="blog_meta">
                    <li><span><i class="fa fa-calendar"></i> {{ \Carbon\Carbon::parse($webinar->date)->format('d M, Y') }} at {{ $webinar->time }}</span></li>
                    <li><span><i class="fa fa-video-camera"></i> {{ $webinar->platform }}</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>
