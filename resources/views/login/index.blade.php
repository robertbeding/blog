@extends('layouts.main')


@section('container')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <div class="row justify-content-center ">
        <div class="col-md-7">
            {{-- allert success login --}}
            {{-- @if (session()->has('success'))
                <div class="alert alert-success  alert-dismissible fade-show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif --}}

            {{-- allert error login --}}
            {{-- @if (session()->has('loginError'))
                <div class="alert alert-danger  alert-dismissible fade-show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif --}}

                <div class="conta" id="conta">
                    <div class="form-conta sign-up-conta ">
                        <form action="/register" method="POST">
                            @csrf
                            <h1>Create Account</h1>
                            {{-- validasi data --}}
                            {{-- <input type="text" name="name" id="name" class="form-control @error('nama')
                        is-invalid @enderror" required value="{{ old('name') }}" placeholder="Name" />
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror --}}
                            <input type="text" name="name" id="name" placeholder="Name" />
                            <input type="text" name="username" id="username" placeholder="Username" />
                            <input type="email" name="email" id="email" placeholder="Name@example.com" />
                            <input type="password" name="password" id="password" placeholder="Password" />
                            <button>Sign Up</button>
                        </form>
                    </div>
                    <div class="form-conta sign-in-conta">
                        <form action="/login" method="POST">
                            @csrf
                            <h1>Sign in</h1>
                            <input type="email" name="email" id="email" class="@error('email')
                            is-invalid @enderror" required value="{{ old('email') }}" placeholder="Email" />
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <input type="password" name="password" id="password" placeholder="Password" />
                            <a href="#" class="text-decoration-none">Forgot your password?</a>
                            <button>Sign In</button>
                        </form>
                    </div>
                    <div class="overlay-conta">
                        <div class="overlay">
                            <div class="overlay-panel overlay-left">
                                <h1>Welcome Back!</h1>
                                <p>To keep connected with us please login with your personal info</p>
                                <button class="ghost" id="signIn">Sign In</button>
                            </div>
                            <div class="overlay-panel overlay-right">
                                <h1>Hello, Friend!</h1>
                                <p>Enter your personal details and start journey with us</p>
                                <button class="ghost" id="signUp">Sign Up</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('sweetalert::alert')
<script src="{{ asset('js/login.js')}}"></script>
@endsection
