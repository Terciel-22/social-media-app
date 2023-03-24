@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6 side-image"></div>
    <div class="col-md-6 right">
        <div class="input-box">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                
                <header>{{ __('Create Account') }}</header>
                
                <div class="input-field">
                    <input id="name" type="name" class="input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    <label for="name">{{ __('Name') }}</label>
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="input-field">
                    <input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    <label for="email">{{ __('Email') }}</label>
                    @error('email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="input-field">
                    <input id="password" type="password" class="input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    <label for="password">{{ __('Password') }}</label>
                    @error('password')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="input-field">
                    <input id="password-confirm" type="password" class="input @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password">
                    <label for="password-confirm">{{ __('Confirm Password') }}</label>
                </div>

                <div class="input-field">
                    <input type="submit" class="submit" value="{{ __('Register') }}">
                </div>
                <div class="signin">
                    <span>Already have an account? <a href="/login">Sign in here</a></span>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
