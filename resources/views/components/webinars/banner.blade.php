<section class="events_area d-flex flex-wrap">
    <div class="events_left">
        @if($webinars->isNotEmpty())
            @foreach($webinars->take(2) as $webinar)
                <div class="single_events d-flex flex-wrap">
                    <div class="events_content bg_cover" style="background-image: url({{ $webinar->banner_path ? (Str::startsWith($webinar->banner_path, 'banners/') ? asset('storage/' . $webinar->banner_path) : asset('frontend/assets/images/' . basename($webinar->banner_path))) : asset('frontend/assets/images/webinar-placeholder.jpg') }})">
                        <div class="events_wrapper">
                            <ul class="events_meta">
                                <li><a class="color-1" href="{{ route('webinars.show', $webinar->id) }}"><i class="fa fa-calendar"></i> {{ \Carbon\Carbon::parse($webinar->date)->format('d M, Y') }} at {{ $webinar->time }}</a></li>
                                <li><a class="color-2" href="{{ $webinar->registration_link ?? $webinar->meeting_url ?? '#' }}"><i class="fa fa-video-camera"></i> {{ $webinar->platform }}</a></li>
                                @if($webinar->recording_url)
                                    <li><a class="color-3" href="{{ $webinar->recording_url }}"><i class="fa fa-play"></i> Watch Recording</a></li>
                                @endif
                            </ul>
                            <h4 class="events_title"><a href="{{ route('webinars.show', $webinar->id) }}">{{ $webinar->title }}</a></h4>
                        </div>
                    </div>
                    @if($loop->first)
                        <div class="events_content_title">
                            <div class="events_wrapper">
                                <h2 class="title">Our Webinars</h2>
                            </div>
                        </div>
                    @endif
                </div>
            @endforeach
        @endif
    </div>
    <div class="events_right bg_cover" style="background-image: url({{ $webinars->count() >= 3 ? ($webinars[2]->banner_path ? (Str::startsWith($webinars[2]->banner_path, 'banners/') ? asset('storage/' . $webinars[2]->banner_path) : asset('frontend/assets/images/' . basename($webinars[2]->banner_path))) : asset('frontend/assets/images/webinar-placeholder.jpg')) : asset('frontend/assets/images/webinar-placeholder.jpg') }})">
        @if($webinars->count() >= 3)
            <div class="events_content_3 text-center">
                <div class="events_wrapper">
                    <ul class="events_meta">
                        <li><a class="color-1" href="{{ route('webinars.show', $webinars[2]->id) }}"><i class="fa fa-calendar"></i> {{ \Carbon\Carbon::parse($webinars[2]->date)->format('d M, Y') }} at {{ $webinars[2]->time }}</a></li>
                        <li><a class="color-2" href="{{ $webinars[2]->registration_link ?? $webinars[2]->meeting_url ?? '#' }}"><i class="fa fa-video-camera"></i> {{ $webinars[2]->platform }}</a></li>
                        @if($webinars[2]->recording_url)
                            <li><a class="color-3" href="{{ $webinars[2]->recording_url }}"><i class="fa fa-play"></i> Watch Recording</a></li>
                        @endif
                    </ul>
                    <h4 class="events_title"><a href="{{ route('webinars.show', $webinars[2]->id) }}">{{ $webinars[2]->title }}</a></h4>
                </div>
            </div>
        @else
            <div class="events_content_3 text-center">
                <div class="events_wrapper">
                    <h4 class="events_title">No Featured Webinar</h4>
                </div>
            </div>
        @endif
    </div>
</section>
