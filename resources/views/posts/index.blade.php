@extends('layouts.app')

@section('content')

    <x-posts.banner />

    <x-posts.main :posts="$posts" :popularPosts="$popularPosts" :archives="$archives" :tags="$tags" />
    
@endsection

