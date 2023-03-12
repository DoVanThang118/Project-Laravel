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
                    <!--RIGHT LISTINGS-->
                    <div class="hot-page2-alp-con-right">
                        <div class="hot-page2-alp-con-right-1">
                            <h4></h4>
                            <!--LISTINGS-->

                                <!--LISTINGS START-->
                                @foreach($data as $item)
                                <div class="hot-page2-alp-r-list">
                                    <div class="col-md-3 hot-page2-alp-r-list-re-sp">
                                        <a href="javascript:void(0);">
                                            <div class="hot-page2-hli-1">
                                                <img src="/assets/images/hotels/l1.jpeg" alt=""> </div>
{{--                                            <div class="hom-hot-av-tic hom-hot-av-tic-list"> Seats left: 42 </div>--}}
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="hot-page2-alp-ri-p2"> <a href="#"><h3>{{$item->AirStrip->LandingCity->name}}</h3><h3>{{$item->AirStrip->TakeOfCity->name}}</h3></a>
                                            <ul>
                                                <li>{{$item->takeoftime}} to {{$item->landingtime}}</li>
                                                <li>Airplane: {{$item->Airplane->name}}</li>
                                                <li>Operated by: The Travel</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="hot-page2-alp-ri-p3">
                                             <span class="hot-list-p3-1">Flight No</span>
                                                <span class="hot-list-p3-2">{{$item->Airplane->name}}</span><span class="hot-list-p3-4">
												<a href="{{url("/ticket-list",["flight"=>$item->id])}}" class="hot-page2-alp-quot-btn">Book Now</a>
											</span> </div>
                                    </div>
                                </div>
                                @endforeach
                                <!--END LISTINGS-->


                        </div>
                    </div>
                    <!--END RIGHT LISTINGS-->
                </div>
            </div>
        </div>
    </section>
@endsection
