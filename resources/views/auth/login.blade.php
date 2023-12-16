@extends('layouts.apps')
@include('sweetalert::alert')
@section('content')

<div class="" style="margin: 0px 0px">
    <div class="row justify-content-center">
        <div class="col-md-8">
    <div class="login">
            <div class="login__content">
                <div class="login__img">
                    <img src="{{ asset('assets-login/img/img-login.svg') }}" alt="">
                </div>

                <div class="login__forms">
                    <form method="POST" action="{{ route('login') }}" class="login__registre" id="login-in">
                        @csrf
                        <h1 class="login__title text">Sign In</h1>
    
                        <div class="login__box row">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror login__input" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Username">
                            @error('email')
                                        <strong class="invalid-feedback" role="alert">{{ $message }}</strong>
                            @enderror
                        </div>
                        
                        <div class="login__box row">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror login__input" name="password" required autocomplete="current-password" placeholder="Password">
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div>
                            <div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <p class="text-left">Remember me</p>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="login__button text-decoration-none m-auto d-block w-100">Sign In</button> 
                            @if (Route::has('password.request'))
                            <a class="login__account" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                            </a>
                            @endif
                    </form>
                </div>
            </div>
    </div>
</div>
</div>
</div>


<!-- <div class="container" style="margin: 110px 100px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
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

                            <div class="col-md-6">
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
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn bg-primary text-white">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn bg-primary text-white" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
