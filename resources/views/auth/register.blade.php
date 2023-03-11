@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    </div>
</div>
<!--====== NAVIGATION MENU ==========-->
<!--DASHBOARD-->
<section>
    <div class="tr-register">
        <div class="tr-regi-form">
            <h4>Create an Account</h4>
            <p>It's free and always will be.</p>
            <form  class="col s12" method="post" action="{{ route('register') }}" >
                    @csrf
                <div class="row">
                    <div class="input-field col m12 s12">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Name" autofocus>
                        <label>Name</label>
                    </div>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
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
                        <input placeholder="Phone" id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required >
                        <label>Phone</label>
                    </div>
                    @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input placeholder="Address" id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required>
                        <label>Address</label>
                    </div>
                    @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
{{--                <div class="row">--}}
{{--                    <div class="input-field col s12">--}}
{{--                        <input placeholder="Sex" id="sex" type="text" class="form-control @error('sex') is-invalid  @enderror" name="sex"  required >--}}
{{--                            <label>--}}
{{--                                Sex--}}
{{--                            </label>--}}

{{--                    </div>--}}
{{--                    @error('sex')--}}
{{--                    <span class="invalid-feedback" role="alert">--}}
{{--                        <strong>{{ $message }}</strong>--}}
{{--                    </span>--}}
{{--                    @enderror--}}
{{--                </div>--}}
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
                        <input id="password-confirm" placeholder="Retype password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        <label>Confirm Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input type="submit" value="submit" class="waves-effect waves-light btn-large full-btn">
                    </div>
                </div>
            </form>
                <a href="{{route("login")}}" class="text-center">I already have a membership</a>
            </form>
        </div>
    </div>
</section>
<!--END DASHBOARD-->
@endsection
