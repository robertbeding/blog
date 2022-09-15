@extends('layouts.main')

@section('container')
    <article class="mb-4">
        <h1>Halaman About</h1>
        <h3>{{ $name }}</h3>
        <p>{{ $email }}</p>
        <img src="img/{{ $image }}" alt="{{ $name }}" width="150" class="img-thumbnail rounded-circle">
    </article>
@endsection
