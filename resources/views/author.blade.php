@extends('layouts.main')

@section('container')
    <h3>Author: {{ $author->name }}</h3>

    @foreach ($author->posts as $post)
        <h4>Judul : {{ $post->title }}</h4>
        <p>{{ $post->body }}</p>
    @endforeach

    <a href="/posts">Back to Posts</a>
@endsection
