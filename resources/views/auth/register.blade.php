@extends('layouts.apps')

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

                    <form method="POST" action="{{ route('register') }}" class="login__create block" id="login-up">
                        @csrf
                        <h1 class="login__title">Create Account</h1>
    
                        <div class="login__box row">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">
                            @error('name')
                                <strong class="invalid-feedback" role="alert">{{ $message }}</strong>
                            @enderror
                        </div>
    
                        <div class="login__box row">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                            @error('email')
                                        <strong class="invalid-feedback" role="alert">{{ $message }}</strong>
                            @enderror
                        </div>

                        <div class="login__box row">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                            @error('password')
                                        <strong class="invalid-feedback" role="alert">{{ $message }}</strong>
                            @enderror
                        </div>

                        <div class="login__box row">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                            @error('password')
                                        <strong class="invalid-feedback" role="alert">{{ $message }}</strong>
                            @enderror
                        </div>

                        <button type="submit" class="login__button text-decoration-none m-auto d-block w-100">{{ __('Register') }}</button> 

                        <div>
                            <span class="login__account">Already have an Account ?</span>
                            <a href="{{ route('login') }}" class="login__signup">Sign In</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

<!-- <div class="" style="margin: 0px 0px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn bg-primary text-white">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
