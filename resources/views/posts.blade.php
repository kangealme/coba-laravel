@extends('layouts.main')

@section('container')
    @foreach ($posts as $post)
        <article class="mb-5">
            <a href="/post/{{ $post->slug }}">
                <h3 >{{ $post->title }}</h3>
            </a>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
@endsection

