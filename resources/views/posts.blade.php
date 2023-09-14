@extends('layouts.main')

@section('container')
    <h1 class="mb-3">Semua Post</h1>

    @if ($posts->count())
        <div class="card mb-3">
            <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top"
                alt="...">
            <div class="card-body text-center">
                <h3 class="card-title"><a href="/post/{{ $posts[0]->slug }}"
                        class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
                <p>
                    <small class="text-muted">
                        By. <a href="/author/{{ $posts[0]->user->username }}"
                            class="text-decoration-none">{{ $posts[0]->user->name }}</a> in
                        <a href="/category/{{ $posts[0]->category->slug }}"
                            class="text-decoration-none">{{ $posts[0]->category->name }}</a>
                    </small>
                </p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read More...</a>
                <p class="card-text"><small class="text-muted">Created at
                        {{ $posts[0]->created_at->diffForHumans() }}</small></p>
            </div>
        </div>
    @else
        <p class="text-center fs-4">No Posts Found</p>
    @endif

    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top"
                            alt="{{ $post->category->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p>
                                <small class="text-muted">
                                    By. <a href="/author/{{ $post->user->username }}"
                                        class="text-decoration-none">{{ $posts[0]->user->name }}</a> in
                                    <a href="/category/{{ $post->category->slug }}"
                                        class="text-decoration-none">{{ $post->category->name }}</a>
                                </small>
                            </p>
                            <p class="card-text">{{ $post->excerpt }}</p>
                            <p class="card-text"><small class="text-muted">Created at
                                    {{ $post->created_at->diffForHumans() }}</small></p>
                            <a href="/post/{{ $post->slug }}" class="btn btn-primary">Read More..</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
