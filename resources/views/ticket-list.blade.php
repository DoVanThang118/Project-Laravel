@extends('layouts.app')
@section("title","Danh sách chuyến bay")
@section("custom_css")

@endsection
@section("custom_js")
    <script src="/assets/js/jquery-ui.js"></script>
    <script src="/assets/js/mail.js"></script>
@endsection
@section('content')
    <!--====== HOTELS LIST ==========-->
    <section class="hot-page2-alp hot-page2-pa-sp-top">
        <div class="container">
            <div class="row inner_banner inner_banner_3 bg-none">
                <div class="hot-page2-alp-tit">
                    <h1>Choose Ticket</h1>
                    <ul>
                        <li><a href="#inner-page-title">Home</a> </li>
                        <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                        <li><a href="#inner-page-title" class="bread-acti">Select Flight</a> </li>
                        <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                        <li><a href="#inner-page-title" class="bread-acti">Select Ticket</a></li>
                    </ul>
                    <p style="color: black">Choose the ticket you want to take </p>
                </div>
            </div>
            <div class="row">
                <div class="hot-page2-alp-con">
                    <!--RIGHT LISTINGS-->
                    <div class=" hot-page2-alp-con-right">
                        <div class="hot-page2-alp-con-right-1">
                            <!--LISTINGS-->
                            <div class="row">
                                <!--LISTINGS START-->
                                <div class="sb2-2-add-blog sb2-2-1">
                                    <h2>Ticket</h2>
                                    <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>

                                    <ul class="nav nav-tabs tab-list">
                                        <li class="active"><a data-toggle="tab" href="#home"><span>Detail</span></a>
                                        </li>
                                        <li><a data-toggle="tab" href="#menu1"><span>Room Type</span></a>
                                        </li>
                                        <li><a data-toggle="tab" href="#menu2"><span>Photo Gallery</span></a>
                                        </li>
                                    </ul>

                                    <div class="tab-content">
                                        <div id="home" class="tab-pane fade in active">
                                            <div class="box-inn-sp">
                                                <div class="inn-title">
                                                    <h4>Listing Information</h4>
                                                    <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                                                </div>
                                                <div class="bor">
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <input type="submit" class="waves-effect waves-light btn-large" value="Submit">
                                                            </div>
                                                        </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div id="menu1" class="tab-pane fade">
                                            <div class="inn-title">
                                                <h4>Hotel Room Details</h4>
                                                <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                                            </div>
                                            <div class="bor">
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <input type="submit" class="waves-effect waves-light btn-large" value="Submit">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="menu2" class="tab-pane fade">
                                            <div class="inn-title">
                                                <h4>Hotel Room Details</h4>
                                                <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                                            </div>
                                            <div class="bor">
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <input type="submit" class="waves-effect waves-light btn-large" value="Submit">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--END LISTINGS-->

                            </div>
                        </div>
                    </div>
                    <!--END RIGHT LISTINGS-->
                </div>
            </div>
        </div>
    </section>
@endsection
