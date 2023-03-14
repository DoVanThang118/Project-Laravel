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
                    <!--LEFT LISTINGS-->
                    <div class="col-md-3 hot-page2-alp-con-left">
                        <!--PART 1 : LEFT LISTINGS-->
                        <div class="hot-page2-alp-con-left-1">
                            <h3>Suggesting Packages</h3> </div>
                        <!--PART 2 : LEFT LISTINGS-->
                        <div class="hot-page2-hom-pre hot-page2-alp-left-ner-notb">
                            <ul>
                                <!--LISTINGS-->

                                <li>
                                    <a href="#">
                                        <div class="hot-page2-hom-pre-1 hot-page2-alp-cl-1-1"> <img src="assets/images/package/1.jpg" alt=""> </div>
                                        <div class="hot-page2-hom-pre-2 hot-page2-alp-cl-1-2">
                                            <h5></h5> <span>Bali is a living postcard</span> </div>
                                        <div class="hot-page2-hom-pre-3 hot-page2-alp-cl-1-3"> <span>4.2</span> </div>
                                    </a>
                                </li>

                                <!--LISTINGS-->

                                <li>
                                    <a href="#">
                                        <div class="hot-page2-hom-pre-1 hot-page2-alp-cl-1-1"> <img src="assets/images/package/2.jpg" alt=""> </div>
                                        <div class="hot-page2-hom-pre-2 hot-page2-alp-cl-1-2">
                                            <h5></h5> <span>There's so much to see and do in London</span> </div>
                                        <div class="hot-page2-hom-pre-3 hot-page2-alp-cl-1-3"> <span>4.4</span> </div>
                                    </a>
                                </li>

                                <!--LISTINGS-->
                                <li>
                                    <a href="#">
                                        <div class="hot-page2-hom-pre-1 hot-page2-alp-cl-1-1"> <img src="assets/images/package/3.jpg" alt=""> </div>
                                        <div class="hot-page2-hom-pre-2 hot-page2-alp-cl-1-2">
                                            <h5>Paris, France</h5> <span>Everyone who visits Paris for the first time probably </span> </div>
                                        <div class="hot-page2-hom-pre-3 hot-page2-alp-cl-1-3"> <span>5.0</span> </div>
                                    </a>
                                </li>
                                <!--LISTINGS-->
                                <li>
                                    <a href="#">
                                        <div class="hot-page2-hom-pre-1 hot-page2-alp-cl-1-1"> <img src="assets/images/package/4.jpg" alt=""> </div>
                                        <div class="hot-page2-hom-pre-2 hot-page2-alp-cl-1-2">
                                            <h5>Rome, Italy</h5> <span>It’s nicknamed the Eternal City for a reason.</span> </div>
                                        <div class="hot-page2-hom-pre-3 hot-page2-alp-cl-1-3"> <span>4.4</span> </div>
                                    </a>
                                </li>
                                <!--LISTINGS-->
                                <li>
                                    <a href="#">
                                        <div class="hot-page2-hom-pre-1 hot-page2-alp-cl-1-1"> <img src="assets/images/package/5.jpg" alt=""> </div>
                                        <div class="hot-page2-hom-pre-2 hot-page2-alp-cl-1-2">
                                            <h5>New York City, New York</h5> <span>The first time you go to New York</span> </div>
                                        <div class="hot-page2-hom-pre-3 hot-page2-alp-cl-1-3"> <span>3.4</span> </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!--PART 7 : LEFT LISTINGS-->
                    </div>
                    <!--END LEFT LISTINGS-->
                    <!--RIGHT LISTINGS-->
                    <div class="col-md-9 hot-page2-alp-con-right">
                        <div class="hot-page2-alp-con-right-1">
                            <!--LISTINGS-->
                            <div class="row">
                                <!--LISTINGS START-->
                                <form >
                                    @csrf
                                    @foreach($data as $item)
                                        <div class="hot-page2-alp-r-list">
                                            <div class="col-md-3 hot-page2-alp-r-list-re-sp" >
                                                <a href="javascript:void(0);">
                                                    <div class="hot-page2-hli-1"> <img src="public/assets/images/listing/home1.jpg" alt=""> </div>
                                                </a>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="trav-list-bod">
                                                    <a href="#"><h3>Flight from {{$item->AirStrip->TakeofCity->name}} to {{$item->AirStrip->LandingCity->name}} </h3></a>
                                                    <p><b>Take off time: </b>{{$item->takeoftime}}</p>
                                                    <p><b>Landing time: </b>{{$item->landingtime}}</p>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="trav-ami">
                                                    <h4>Select ticket</h4>
                                                    <div class="ticket">
                                                        <ul>
                                                            <li>
                                                                <h4>{{$item->TypeOfTickets[0]->name}}</h4>
                                                                <h5>Available ticket:{{$item->TypeOfTickets[0]->ticketinstock}}</h5>
                                                                @include("admin.html.form.input",[
                                                                  "label"=>"",
                                                                  "title"=>"Input Qty",
                                                                  "key"=>"vipqty",
                                                                  "type"=>"number",
                                                                  "required"=>true])
                                                            </li>
                                                            <li>
                                                                <h4>{{$item->TypeOfTickets[1]->name}}</h4>
                                                                <h5>Available ticket:{{$item->TypeOfTickets[1]->ticketinstock}}</h5>
                                                                @include("admin.html.form.input",[
                                                                      "label"=>"",
                                                                      "title"=>"Input Qty",
                                                                      "key"=>"normalqty",
                                                                      "type"=>"number",
                                                                      "required"=>true])

                                                            </li>
                                                            <li>
                                                                <h4>{{$item->TypeOfTickets[2]->name}}</h4>
                                                                <h5>Available ticket:{{$item->TypeOfTickets[2]->ticketinstock}}</h5>
                                                                @include("admin.html.form.input",[
                                                                     "label"=>"",
                                                                     "title"=>"Input Qty",
                                                                     "key"=>"cheapqty",
                                                                     "type"=>"number",
                                                                     "required"=>true])
                                                            </li>
                                                        </ul>
                                                        <div class="col-md-3">
                                                            <div class="hot-page2-alp-ri-p3 tour-alp-ri-p3">
                                                                <a href="tour-details.html" class="hot-page2-alp-quot-btn">Book Now</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                    <!--END LISTINGS-->
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--END RIGHT LISTINGS-->
                </div>
            </div>
        </div>
    </section>
@endsection
