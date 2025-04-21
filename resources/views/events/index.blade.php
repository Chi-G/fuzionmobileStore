@extends('layouts.app')

@section('content')
    <x-events.banner :events="$events" />
    <x-events.main :events="$events" />
@endsection
