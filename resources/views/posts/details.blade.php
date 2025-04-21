@extends('layouts.app')

@section('content')

    <x-posts.details-banner />

    <x-posts.details-main :post="$post" :popularPosts="$popularPosts" :archives="$archives" :tags="$tags" />

@endsection
