
@extends('layouts.main')

@section('container')

<h1 class="mb-4">{{ $title }}</h1>

@if ($posts->count())
<div class="card mb-3">
    <img src="https://via.placeholder.com/1200x300?{{ $posts[0]->category->name }}" class="card-img-top" alt="...">
    <div class="card-body text-center">
      <h3 class="card-title"><a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
    <p>
      <small class="text-muted">
        By. <a href="/authors/{{ $posts[0]->author->username }}"
             class="text-decoration-none">{{ $posts[0]->author->name }}</a> in<a href="/
             categories/{{ $posts[0]->category->slug }}" class="text-decoration-none">
             {{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
      </small>
    </p>

    <p class="card-text">{{ $posts[0]->excerpt }}</p>

    <a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>

    </div>
</div>
@else
    <p class="text-center fs-4">No post found</p>
@endif

<div class="container">
  <div class="row">
    <div class="col-md-4">

    </div>
  </div>
</div>

@foreach ($posts->skip(1) as $post )
<article class="mb-5 border-bottom">
    <h4>
        <a href="/post/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
    </h4>
    <p>{{ $post->excerpt }}</p>
    <a href="/post/{{ $post->slug }}" class="text-decoration-none">Read more...</a>
</article>
@endforeach
@endsection
