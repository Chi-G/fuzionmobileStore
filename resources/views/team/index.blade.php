@extends('layouts.app')

@section('content')
    <x-teams.banner />

    <x-teams.main :team="$team" />
@endsection
