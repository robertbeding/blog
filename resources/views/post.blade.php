@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <h2 class="mb-4">{{ $post->title }}</h2>
                <p>
                    By. <a href="/blog?author={{ $post->author->username }}"
                        class="text-decoration-none">{{ $post->author->name }}</a> in <a
                        href="/blog?category={{ $post->category->slug }}"
                        class="text-decoration-none">{{ $post->category->name }}</a>
                    {{ $post->created_at->diffForHumans() }}
                </p>

                @if ($post->image)
                    <div style="max-height: 350px; overflow:hidden">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                            class="img-fluid mt-3">
                    </div>
                @else
                    <img src="https://via.placeholder.com/1200x400?{{ $post->category->name }}"
                        alt="{{ $post->category->name }}" class="img-fluid mt-3">
                @endif

                <article class="my-3 fs-5">
                    <p>{!! $post->body !!}</p>
                    <article class="my-3">

                        <a href="/blog" class="text-decoration-none d-block mt-3"> Back to post</a>

            </div>
        </div>
    </div>
@endsection
