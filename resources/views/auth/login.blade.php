@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 mt-5 ">
            <div class="card">
              <p class="p-2" style="font-size: 20px;">Login</p>
                <div class="card-body shadow-lg">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-7">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-7">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-9 offset-md-8">
                                <button type="submit" class="btn btn-primary col-md-4">
                                   {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                        <div class="text-center mt-4" style="text-decoration: none;">
                           <a href="/register" style="text-decoration: none; font-size:15px;">Don't have an account? Sign Up</a>
                        </div>
                        @if (Route::has('password.request'))
                        <a class="btn btn-link text-danger" href="{{ route('password.request') }}" style="text-decoration: none;">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
