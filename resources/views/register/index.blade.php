@extends('layouts.main')


@section('container')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
<div class="row justify-content-center">
    <div class="conta" id="conta">
        <div class="form-conta sign-up-conta">
            <form action="/login" method="POST">
                @csrf
                <h1>Create Account</h1>
                {{-- <div class="social-conta">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registration</span> --}}
                <input type="text" name="name" id="name"  placeholder="Name" />
                <input type="text" name="username" id="username"  placeholder="Username" />
                <input type="email" name="email" id="email" placeholder="Name@example.com" />
                <input type="password" name="password" id="password" placeholder="Password" />
                <button>Sign Up</button>
            </form>
        </div>
        <div class="form-conta sign-in-conta">
            <form action="#">
                <h1>Sign in</h1>
                {{-- <div class="social-conta">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your account</span> --}}
                <input type="email" name="email" id="email" placeholder="Email" />
                <input type="password" placeholder="Password" />
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

{{-- <div class="row justify-content-center">
    <div class="col-md-4">
        <img class="mb-4 " src="{{ asset('img/logo.png') }}" alt="" width="72" height="72">
        <main class="form-signin">
              <h1 class="h3 mb-3 fw-normal text-center">Please sign in</h1>
            <form>
              <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>

              <div class="checkbox mb-3">
                <label>
                  <input type="checkbox" value="remember-me"> Remember me
                </label>
              </div>
              <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
              <small class="d-block text-center mt-3">Not registered? <a href="/register" class="text-decoration-none">Register Now!</a></small>
            </form>
          </main>
    </div>
</div> --}}
@endsection
