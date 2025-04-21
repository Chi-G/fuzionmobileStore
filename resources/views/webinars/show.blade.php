@extends('layouts.app')

@section('content')
    <section class="blog_details_page pt-80 pb-130">
        <div class="container">
            <h1>{{ $webinar->title }}</h1>
            <img src="{{ $webinar->banner_path ? (Str::startsWith($webinar->banner_path, 'banners/') ? asset('storage/' . $webinar->banner_path) : asset('frontend/assets/images/' . basename($webinar->banner_path))) : asset('frontend/assets/images/webinar-placeholder.jpg') }}" alt="{{ $webinar->title }}">
            <p><strong>Date:</strong> {{ \Carbon\Carbon::parse($webinar->date)->format('d M, Y') }} at {{ $webinar->time }}</p>
            <p><strong>Platform:</strong> {{ $webinar->platform }}</p>
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
            <p>{!! $webinar->description !!}</p>
        </div>
    </section>
@endsection
