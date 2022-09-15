@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-5">
        <div class="col-lg-8">

            <h2 class="mb-4">{{ $post->title }}</h2>

            <a href="/dashboard/posts" class="btn btn-success">Back to all my posts <span data-feather="arrow-left">
            </span></a>
            <a href="" class="btn btn-warning">Edit <span data-feather="edit">
            </span></a>
            <a href="" class="btn btn-danger">Delete <span data-feather="trash">
            </span></a>

            <img src="https://via.placeholder.com/1200x400?{{ $post->category->name }}"
                alt="{{ $post->category->name }}" class="img-fluid mt-3">

            <article class="my-3 fs-5">
                <p>{!! $post->body !!}</p>
                <article class="my-3">

        </div>
    </div>
</div>
@endsection
