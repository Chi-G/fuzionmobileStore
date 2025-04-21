@extends('layouts.app')

@section('content')
    <x-events.details-banner :event="$event" />
    <x-events.details-main :event="$event" />
@endsection
