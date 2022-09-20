@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-5">
        <div class="col-lg-8">

            <h2 class="mb-4">{{ $post->title }}</h2>

            <a href="/dashboard/posts" class="btn btn-success">Back to all my posts <span data-feather="arrow-left">
            </span></a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning">Edit <span data-feather="edit">
            </span></a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger border-0" onclick="return confirm('Are You sure?')"><span
                data-feather="trash"></span>Delete</button>
            </form>
            <img src="https://via.placeholder.com/1200x400?{{ $post->category->name }}"
                alt="{{ $post->category->name }}" class="img-fluid mt-3">

            <article class="my-3 fs-5">
                <p>{!! $post->body !!}</p>
                <article class="my-3">

        </div>
    </div>
</div>
@endsection
