
@extends('layouts.main')

@section('container')

<h1 class="mb-4">Post Category : {{ $category }}</h1>

@foreach ($posts as $post )
<article class="mb-4">
    <h3>
        <a href="/post/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
    </h3>
    <p>{{ $post->excerpt }}</p>
</article>
@endforeach
@endsection
