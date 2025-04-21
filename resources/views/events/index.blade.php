@extends('layouts.app')

@section('content')

    <x-events.banner :events="$events" />

    <section class="pt-80">
        <div class="container">
            <h3 class="text-3xl font-bold mb-4">Upcoming Events</h3>
            <p class="text-gray-600 mb-8">Discover FuzionMobile's dynamic event experiences designed with your convenience in mind.
                Our events platform offers seamless registration for both virtual sessions (via Zoom/Google Meet) and in-person gatherings
                with detailed location maps. Each event features comprehensive information including precise dates, times, and
                rich descriptions to help you choose the perfect fit for your interests. Browse our high-quality event banners,
                register with just a few clicks, and easily share events with colleagues through integrated social media connections
                to Facebook, LinkedIn, and Twitter. Whether you're looking to enhance your technical skills or expand your professional
                network, our streamlined event system ensures you'll never miss an opportunity to connect with the FuzionMobile community.
            </p>
            <x-events.main :events="$events" />
        </div>
    </section>
@endsection
