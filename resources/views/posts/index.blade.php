@extends('layouts.app')

@section('title', 'Posts')

@section('content')
    <h1>Posts</h1>
    <!-- Loop through posts and display them -->
    @foreach ($posts as $post)
        <div>
            <h2><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></h2>
            <p>{{ $post->content }}</p>
        </div>
    @endforeach
    <a href="{{ route('posts.create') }}">Create New Post</a>
@endsection
