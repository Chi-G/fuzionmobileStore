@extends('layouts.app')

@section('content')
    <x-webinars.banner :webinars="$webinars" />

    <section class="pt-80">
        <div class="container">
            <p class="text-gray-600 mb-8">Elevate your knowledge with FuzionMobile's professional webinar platform.
                Access our seamlessly integrated live sessions through Zoom, Webex, or Google Meet with just a simple registration.
                Can't make it to the live event? No problem—our comprehensive library of recorded webinars is available on-demand
                through our YouTube and Vimeo integrations, allowing you to learn at your own pace. Our automated reminder system
                ensures you'll never miss an important session with timely email notifications. Whether you're seeking in-depth product
                tutorials or industry insights, our webinar platform delivers expert knowledge directly to your screen, wherever and whenever it suits you best.
            </p>
            <x-webinars.main :webinars="$webinars" />
        </div>
    </section>
@endsection
