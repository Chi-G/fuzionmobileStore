<section class="blog_details_page pb-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog_details_content">
                    <p>{!! $webinar->description !!}</p>
                    @if($webinar->registration_link)
                        <p><strong>Register:</strong> <a href="{{ $webinar->registration_link }}" class="text-blue-500 hover:underline">Register Now</a></p>
                    @elseif($webinar->meeting_url)
                        <p><strong>Join:</strong> <a href="{{ $webinar->meeting_url }}" class="text-blue-500 hover:underline">Join Webinar</a></p>
                    @endif
                    @if($webinar->meeting_id)
                        <p><strong>Meeting ID:</strong> {{ $webinar->meeting_id }}</p>
                    @endif
                    @if($webinar->meeting_password)
                        <p><strong>Meeting Password:</strong> {{ $webinar->meeting_password }}</p>
                    @endif
                    @if($webinar->recording_url)
                        <p><strong>Recording:</strong> <a href="{{ $webinar->recording_url }}" class="text-blue-500 hover:underline">Watch Recording</a></p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
