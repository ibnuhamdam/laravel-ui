@extends('layouts.auth')

@section('content')

    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url({{ asset('admin/assets/images/big/auth-bg.jpg') }}) no-repeat center center;">
        <div class="auth-box">
            <div id="loginform">
                <div class="logo">
                    <span class="db" style="margin-bottom: 16px;"><img src="{{ asset('assets/logo/logo.png') }}" height="16" alt="logo" /></span>
                    <h5 class="font-medium m-b-20">{{ __('Login') }} Form</h5>
                </div>

                <div class="row">
                    <form method="POST" class="col s12" action="{{ route('login') }}">

                        @csrf
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="email" type="email" name="email" class="validate @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <label for="email">{{ __('Email Address') }}</label>
                                @error('email')
                                    <span class="invalid-feedback red-text text-darken-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="password" name="password" type="password" class="validate @error('password') is-invalid @enderror" required autocomplete="current-password">
                                <label for="password">{{ __('Password') }}</label>
                                @error('password')
                                    <span class="invalid-feedback red-text text-darken-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row m-t-5">
                            <div class="col s7">
                                <label>
                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}/>
                                    <span>{{ __('Remember Me ?') }}</span>
                                </label>
                            </div>
                            @if (Route::has('password.request'))
                                <div class="col s5 right-align">
                                    <a href="#" class="link" id="to-recover">Forgot Pwd?</a>
                                </div>
                            @endif
                        </div>
                        <div class="row m-t-40">
                            <div class="col s12">
                                <button class="btn-large w100 blue accent-4" type="submit">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
                @if (Route::has('register'))
                <div class="center-align m-t-20 db">
                    Don't have an account? <a href="{{ route('register') }}">Sign Up!</a>
                </div>
                @endif
            </div>
            <div id="recoverform">
                <div class="logo">
                    <span class="db"><img src="{{asset('admin/assets/images/logo-icon.png')}}" alt="logo" /></span>
                    <h5 class="font-medium m-b-20">Recover Password</h5>
                    <span>Enter your Email and instructions will be sent to you!</span>
                </div>
                <div class="row">
                    <!-- Form -->
                    <form class="col s12" action="index.html">
                        <!-- email -->
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="email1" type="email" class="validate" required>
                                <label for="email1">Email</label>
                            </div>
                        </div>
                        <!-- pwd -->
                        <div class="row m-t-20">
                            <div class="col s12">
                                <button class="btn-large w100 red" type="submit" name="action">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
