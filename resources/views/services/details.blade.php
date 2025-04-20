@extends('layouts.app')

@section('content')
    <!-- Details Banner -->
    <x-services.details-banner :service="$service" />

    <!-- Details Main -->
    <x-services.details-main :service="$service" />
@endsection
