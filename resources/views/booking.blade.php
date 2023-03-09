
@extends('layouts.app')
@section("title","Booking")
@section("custom_css")

@endsection
@section("custom_js")
    <script src="/assets/js/jquery-ui.js"></script>
    <script src="/assets/js/mail.js"></script>
@endsection
@section('content')
    <!--DASHBOARD-->
    <section>
        <div class="tr-register">
            <div class="col-md-2">
                <a href="{{url("/ticket-list")}}" class="btn btn-warning">Back</a>
            </div>
            <div class="tr-regi-form v2-search-form">
                <h4>Passenger information</h4>
                <p>Please fill out the information carefully</p>
                <form class="contact__form" method="post" action="mail/tourbooking.php">
                    <div class="alert alert-success contact__msg" style="display: none" role="alert">
                        Thank you for arranging a wonderful trip for us! Our team will contact you shortly!
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input type="text"  class="validate" name="name" required>
                            <label>Family name</label>
                        </div>
                        <div class="input-field col s6">
                            <input type="text"  class="validate" name="name" required>
                            <label>Middle name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s4">
                            <select name="gender">
                                <option value="" disabled selected>Select gender</option>
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                                <option value="3">Other</option>
                            </select>
                        </div>
                        <div class="input-field col s4">
                            <input type="text" id="from" name="arrival" readonly>
                            <label for="from">Date of birth</label>
                        </div>
                        <div class="input-field col s4">
                            <input type="text" id="select-city-1" class="autocomplete validate" name="city" value="Vietnam">
                            <label for="select-city-1">Country</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input type="text"  class="validate" name="phone" required>
                            <label>Enter your phone</label>
                        </div>
                        <div class="input-field col s6">
                            <input type="email"  class="validate" name="email" required>
                            <label>Enter your email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text"  class="validate" name="address" required>
                            <label>Address</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text"  class="validate" name="discount" required>
                            <label>Discount</label>
                            <p style="font-size: 12px">If you have a discount code please enter the code</p>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md-3">
                            <a href="{{url("/payment")}}">
                                <input type="submit" value="Continue" class="waves-effect waves-light tourz-sear-btn v2-ser-btn">
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--END DASHBOARD-->
@endsection
