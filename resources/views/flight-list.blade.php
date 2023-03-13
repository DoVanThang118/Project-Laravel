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
                    <h1>Choose Flights</h1>
                    <ul>
                        <li><a href="{{url("/")}}">Home</a> </li>
                        <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                        <li><a href="#" class="bread-acti" >Select Flight</a> </li>
                    </ul>
                    <p style="color: black">Choose the flight you want to take </p>
                </div>
            </div>
            <div class="row">
                <div class="hot-page2-alp-con">
                    <div class="col-md-3 hot-page2-alp-con-left">
                        <!--PART 1 : LEFT LISTINGS-->
                        @foreach($data as $item)
                        <div class="hot-page2-alp-con-left-1">
                                <h3>{{$item->AirStrip->TakeOfCity->name}}</h3>
                                <h3>{{$item->AirStrip->LandingCity->name}}</h3>
                        </div>
                        <!--PART 2 : LEFT LISTINGS-->
                        <div class="hot-page2-hom-pre hot-page2-alp-left-ner-notb">
                            <ul>
                                <li><h4>Take-off time:</h4> {{$item->takeoftime}}</li>
                                <li><h4>Landing time:</h4> {{$item->landingtime}}</li>
                                <li><h4>Airplane:</h4> {{$item->Airplane->name}}</li>
                                <li><h4>Operated by:</h4> The Travel</li>
                            </ul>
                        </div>
                        @endforeach
                    </div>
                    <!--RIGHT LISTINGS-->
                    <div class="col-md-9 hot-page2-alp-con-right">
                        <div class="hot-page2-alp-con-right-1">
                            <!--LISTINGS-->
                            <div class="row">
                                <!--LISTINGS START-->
                                <div class="sb2-2-add-blog sb2-2-1">
                                    <ul class="nav nav-tabs tab-list">
                                        <li class="active"><a data-toggle="tab" href="#home"><span style="font-size: 25px; color: #d7a307">Business class</span></a>
                                        </li>
                                        <li><a data-toggle="tab" href="#menu1"><span style="font-size: 25px; color: #1aa5d8">Economy class</span></a>
                                        </li>
                                        <li><a data-toggle="tab" href="#menu2"><span style="font-size: 25px; color: #33ac33">Cheap class</span></a>
                                        </li>
                                    </ul>

                                    <div class="tab-content">
                                        <div id="home" class="tab-pane fade in active">
                                            <div class="box-inn-sp">
                                                <div class="inn-title">
                                                    <h3 class="hot-list-p3-2">3.690 VND</h3>
                                                    <ul>
                                                        <li>Hand baggage: 14kg for routes to Australia, Kazakhstan; 10kg for the remaining routes and 01 small bag not exceeding 02kg.</li>
                                                        <li>Checked baggage: 50kg for routes between Australia and Kazakhstan; 30kg for remaining routes and 01 golf kit (if any)</li>
                                                        <li>Luxury lounge (not applicable on Thai domestic flights, and at airports where standard lounge service is not available)</li>
                                                        <li>Priority at check-in</li>
                                                        <li>Baggage handling service privilege</li>
                                                        <li>Priority at security checkpoints (depending on airport conditions and facilities)</li>
                                                        <li>Private car service between departure or arrival gate and the aircraft (in the event that there is no access to airbridge for the flight)</li>
                                                        <li>Priority for seat selection</li>
                                                    </ul>
                                                </div>
                                                <div class="bor">
                                                    <div class="row">
                                                        <div class="input-field col s12">
                                                            <a href="{{url("/booking")}}" class="col-md-2 hot-page2-alp-quot-btn">Select</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="menu1" class="tab-pane fade">
                                            <div class="inn-title">
                                                <h3 class="hot-list-p3-2">1.093 VND</h3>
                                                <ul>
                                                    <li>7kg or 10kg (Australia/Kazakhstan routes) carry-on baggage and 01 small bag not exceeding 02 Kg</li>
                                                    <li>40kg (Australia/Kazakhstan routes) of checked baggage; 20kg for the rest of the routes.</li>
                                                    <li>Food & beverage (applicable on routes Australia/Kazakhstan)</li>
                                                    <li>Seat selection (upon availability, excluding SkyBoss and SkyBoss Business seats)</li>
                                                    <li>Change of flight, date or route are all permitted (fare difference applied, if any)</li>
                                                    <li>Complimentary Deluxe Flight Care (not eligible for flights operated by Thai Vietjet)</li>
                                                </ul>
                                            </div>
                                            <div class="bor">
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <a href="{{url("/booking")}}" class="col-md-2 hot-page2-alp-quot-btn">Select</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="menu2" class="tab-pane fade">
                                            <div class="inn-title">
                                                <h3 class="hot-list-p3-2">890 VND</h3>
                                                <ul>
                                                    <li>7kg or 10kg (Australia/Kazakhstan routes) carry-on baggage and 01 small bag not exceeding 02 Kg</li>
                                                    <li>40kg (Australia/Kazakhstan routes) of checked baggage; 20kg for the rest of the routes.</li>
                                                    <li>Food & beverage (applicable on routes Australia/Kazakhstan)</li>
                                                </ul>
                                            </div>
                                            <div class="bor">
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <a href="{{url("/booking")}}" class="col-md-2 hot-page2-alp-quot-btn">Select</a>
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
