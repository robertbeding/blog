@extends('layouts.main')

@section('container')
<article class="mb-5">
    <h2>{{ $post->title }}</h2>

    <p>By. <a href="/authors/{{ $post->author->usrname }}" class="text-decoration-none">{{$post->author->name}}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none"> {{ $post->category->name }}</a></p>

    <p>{!! $post->body !!}</p>

    <a href="/blog" class="text-decoration-none d-block mt-3"> Back to post</a>


</article>
@endsection
