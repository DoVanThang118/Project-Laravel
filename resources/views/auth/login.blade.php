@extends('layouts.app')

@section('content')
<!--DASHBOARD-->
<section>
    <div class="tr-register">
        <div class="tr-regi-form">
            <h4>Sign In</h4>
            <p>It's free and always will be.</p>
            <form class="col s12" method="POST" action="{{ route('login') }}">
                @csrf

                <div class="row">
                    <div class="input-field col s12">
                        <div class=" validate">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <div class="validate">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2 offset-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <button type="submit" class="waves-effect waves-light btn-large full-btn">
                            {{ __('Login') }}
                        </button>
                    </div>

                </div>
            </form>
            <p>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
                | Are you a new user ?
{{--                <a href="register.html">Register</a>--}}
                @if (Route::has('register'))
                    <a href="{{ route('register') }}">
                        {{ __('Register') }}</a>
                @endif
            </p>
            <div class="soc-login">
                <h4>Sign in using</h4>
                <ul>
                    <li><a href="#"><i class="fa fa-facebook fb1"></i> Facebook</a> </li>
                    <li><a href="#"><i class="fa fa-twitter tw1"></i> Twitter</a> </li>
                    <li><a href="#"><i class="fa fa-google-plus gp1"></i> Google</a> </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--END DASHBOARD-->
@endsection
