@extends('layouts.app')

@section('content')
<div class="container">
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
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--====== NAVIGATION MENU ==========-->
<section>
    <div class="rows main_menu">
        <div class="container res-menu">
            <nav class="navbar navbar-inverse">
                <div>
                    <!-- Brand and toggle get grouped for better mobile display(MOBILE MENU) -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <img src="images/logo.png" alt="" class="mob_logo" /> </div>
                    <!-- NAVIGATION MENU -->
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li><a href="main.html">Home</a> </li>
                            <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">Packages <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="family-package.html">Family Package</a> </li>
                                    <li><a href="honeymoon-package.html">Honeymoon Package</a> </li>
                                    <li><a href="group-package.html">Group Package</a> </li>
                                    <li><a href="weekend-package.html">WeekEnd Package</a> </li>
                                    <li><a href="regular-package.html">Regular Package</a> </li>
                                </ul>
                            </li>
                            <li><a href="hotels-list.html">Hotels</a> </li>
                            <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">Sight Seeing <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="places.html">Tour Place - 1</a> </li>
                                    <li><a href="places-1.html">Tour Place - 2</a> </li>
                                    <li><a href="places-2.html">Tour Place - 3</a> </li>
                                </ul>
                            </li>
                            <li><a href="events.html">Events</a> </li>
                            <li><a href="blog.html">Blog</a> </li>
                            <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">Pages <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="about.html">About Us</a> </li>
                                    <li><a href="testimonials.html">Testimonials</a> </li>
                                    <li><a href="events.html">Events</a> </li>
                                    <li><a href="tips.html">Tips Before Travel</a> </li>
                                    <li><a href="price-list.html">Price List</a> </li>
                                    <li><a href="discount.html">Discount</a> </li>
                                    <li><a href="faq.html">FAQ</a> </li>
                                    <li><a href="sitemap.html">Site map</a> </li>
                                    <li><a href="404.html">404 Page</a> </li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact Us</a> </li>
                        </ul>
                        <div class="menu_book"><a href="booking.html">Book Your Package</a> </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</section>
<!--DASHBOARD-->
<section>
    <div class="tr-register">
        <div class="tr-regi-form">
            <h4>Create an Account</h4>
            <p>It's free and always will be.</p>
            <form class="col s12">
                <div class="row">
                    <div class="input-field col m6 s12">
                        <input type="text" class="validate">
                        <label>First Name</label>
                    </div>
                    <div class="input-field col m6 s12">
                        <input type="text" class="validate">
                        <label>Last Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input type="number" class="validate">
                        <label>Mobile</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input type="email" class="validate">
                        <label>Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input type="password" class="validate">
                        <label>Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input type="password" class="validate">
                        <label>Confirm Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input type="submit" value="submit" class="waves-effect waves-light btn-large full-btn"> </div>
                </div>
            </form>
            <p>Are you a already member ? <a href="login.html">Click to Login</a>
            </p>
        </div>
    </div>
</section>
<!--END DASHBOARD-->
@endsection
