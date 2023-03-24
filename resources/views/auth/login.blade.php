@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6 side-image"></div>
    <div class="col-md-6 right">
        <div class="input-box">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                
                <header>{{ __('Sign in') }}</header>
                <div class="input-field">
                    <input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <label for="email">{{ __('Email') }}</label>
                    @error('email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="input-field">
                    <input id="password" type="password" class="input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    <label for="password">{{ __('Password') }}</label>
                    @error('password')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="input-field mb-5">
                    <label class="form-check-label" for="remember">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        {{ __('Remember Me') }}
                    </label>
                </div>

                <div class="input-field">
                    <input type="submit" class="submit" value="{{ __('Login') }}">
                </div>
                <div class="signin">
                    <span>Don't have an account? <a href="/register">Sign up here</a></span>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
