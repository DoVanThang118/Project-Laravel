@extends('layouts.app')

@section('content')
<!--DASHBOARD-->
<section>
    <div class="tr-register">
        <div class="tr-regi-form">
            <h4>Sign In</h4>
            <p>It's free and always will be.</p>
            <form  method="post"action="{{ route('login') }}">
                @csrf
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <input placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        <label>Email</label>
                    </div>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        <label>Password</label>
                    </div>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input type="submit" value="submit" class="waves-effect waves-light btn-large full-btn"> </div>
                </div>
            </form>
            <p>Are you a new user ? <a href="{{route("register")}}" class="text-center">Register</a>
            </p>
            <div class="soc-login">
                <h4>Sign in using</h4>
                <ul>
                    <li><a href="#"><i class="fa fa-facebook fb1"></i> Facebook</a> </li>
                    <li><a href="#"><i class="fa fa-twitter tw1"></i> Twitter</a> </li>
                    <li><a href="#"><i class="fa fa-google-plus gp1"></i> Google</a> </li>
                </ul>
            </div>
            </form>
        </div>
    </div>
</section>
<!--END DASHBOARD-->
@endsection
