@extends('layouts.app')

@section('content')
    <x-webinars.details-banner :webinar="$webinar" />
    <x-webinars.details-main :webinar="$webinar" />
@endsection
