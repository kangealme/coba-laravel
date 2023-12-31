@extends('layouts.main')

@section('container')
    <h1 class="mb-3 text-center">{{ $title }}</h1>

    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/posts">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}"/>
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}"/>
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari Artikel.." name="search" value="{{ request('search') }}"/>
                    <button class="btn btn-danger " type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
        <div class="card mb-3">
            <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top"
                alt="...">
            <div class="card-body text-center">
                <h3 class="card-title"><a href="/post/{{ $posts[0]->slug }}"
                        class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
                <p>
                    <small class="text-muted">
                        By. <a href="posts?author={{ $posts[0]->user->username }}"
                            class="text-decoration-none">{{ $posts[0]->user->name }}</a> in
                        <a href="/posts?category=   {{ $posts[0]->category->slug }}"
                            class="text-decoration-none">{{ $posts[0]->category->name }}</a>
                    </small>
                </p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read More...</a>
                <p class="card-text"><small class="text-muted">Created at
                        {{ $posts[0]->created_at->diffForHumans() }}</small></p>
            </div>
        </div>


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
                                        By. <a href="posts?author={{ $post->user->username }}"
                                            class="text-decoration-none">{{ $post->user->username }}</a> in
                                        <a href="/posts?category={{ $post->category->slug }}"
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
    @else
        <p class="text-center fs-4">No Posts Found</p>
    @endif

    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>
@endsection
