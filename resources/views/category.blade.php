@extends('layouts.main')

@section('container')
    <h3>Category: {{ $category->name }}</h3>

    @foreach ($category->posts as $post)
        <h4>Judul : {{ $post->title }}</h4>
        <p>{{ $post->body }}</p>
    @endforeach
@endsection
