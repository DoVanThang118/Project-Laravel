@extends('layouts.app')
@section("title","Home")
@section('content')
@include('admin.html.notification')
    <!--HEADER SECTION-->
    <section>
        <div class="v2-hom-search">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="v2-ho-se-ri">

                            <h1>Flight Booking to your travel!</h1>
                            <br>
                            <h3 style="color:#ffffff;"><i>GOING PLACES TOGETHER</i></h3>
                            <p>We always strive to bring customers the most complete experience,
                                aiming to become an airline with 5-star service quality.
                                In the near future, the airline will be among the leading airlines in Asia.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="">
                            <form class="contact__form v2-search-form" method="get" action="{{url("/flightList")}}"  role="form" enctype="multipart/form-data">

                                <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                    Thank you message
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <select name="direction" required>
                                            <option value="1">One-way</option>
                                            <option value="2">Round-trip</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s8">
                                        <div class="input-field col s12">
                                        <h4>Choose departure </h4>
                                        <select name="takeofcity_id" required>
                                            <option value="0">From</option>
                                            @foreach($city as $item)
                                                <option @if(old("takeofcity_id")== $item->id) selected @endif value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                            @error("takeofcity_id")
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="input-field col s4">
                                        @include("admin.html.form.input",[
                                  "label"=>"",
                                  "title"=>"Takeoff Time",
                                  "key"=>"takeoftime",
                                  "min"=> today()->format('Y-m-d'),
                                  "type"=>"date",
                                  "required"=>true])
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s8">
                                        <div class="input-field col s12">
                                        <h4>Choose destination</h4>
                                        <select name="landingcity_id" required>
                                            <option value="0">To</option>
                                            @foreach($city as $item)
                                                <option @if(old("landingcity_id")== $item->id) selected @endif value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                            @error("landingcity_id")
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="input-field col s4" id="content">
                                        @include("admin.html.form.input",[
                                  "label"=>"",
                                  "title"=>"Return Day",
                                  "key"=>"returnday",
                                  "min"=> today()->format('Y-m-d'),
                                  "type"=>"date",
                                  "required"=>false])
                                    </div>


                                </div>
                                <div class="row">
                                        @include("admin.html.form.input",[
                                          "label"=>"",
                                          "title"=>"QtyTicket",
                                          "key"=>"adults",
                                          "type"=>"number",
                                          "required"=>true,
                                          ])
                                        @error("adults")
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="submit" value="Let's go" class="waves-effect waves-light tourz-sear-btn v2-ser-btn">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END HEADER SECTION-->

    <section>
        <div class=" rows pad-bot-redu tb-space ">
            <div class="container">
                <!-- TITLE & DESCRIPTION -->
                <div class="spe-title">
                    <h2>TOP <span> DESTINATIONS IN VIETNAM</span> </h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                </div>
                <!-- CITY -->
                <div class="col-md-6">
                    <a href="{{url("/hoChiMinhCity")}}">
                        <div class="tour-mig-like-com">
                            <div class="v_place_img"> <img src="/assets/images/listing/home1.jpg" alt=""> </div>
                            <div class="tour-mig-lc-con">
                                <h5>Ho Chi Minh City</h5>
                                <a href="{{url("/hoChiMinhCity")}}"><p>Discover</p></a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="{{url("/HaNoi")}}">
                        <div class="tour-mig-like-com">
                            <div class="tour-mig-lc-img"> <img src="/assets/images/listing/home.jpg" alt=""> </div>
                            <div class="tour-mig-lc-con tour-mig-lc-con2">
                                <h5>Ha Noi</h5>
                                <a href="{{url('/HaNoi')}}" ><p>Discover</p></a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="{{url("/phuQuoc")}}">
                        <div class="tour-mig-like-com">
                            <div class="tour-mig-lc-img"> <img src="/assets/images/listing/home2.jpg" alt=""> </div>
                            <div class="tour-mig-lc-con tour-mig-lc-con2">
                                <h5>Phu Quoc</h5>
                                <a href="{{url("/phuQuoc")}}"><p>Discover</p></a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="{{url('/daNang')}}">
                        <div class="tour-mig-like-com">
                            <div class="tour-mig-lc-img"> <img src="/assets/images/listing/home3.jpg" alt=""> </div>
                            <div class="tour-mig-lc-con tour-mig-lc-con2">
                                <h5>Da Nang</h5>
                                <a href="{{url("/daNang")}}" ><p>Discover</p></a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="{{url('/daLat')}}">
                        <div class="tour-mig-like-com">
                            <div class="tour-mig-lc-img"> <img src="/assets/images/listing/home4.jpg" alt=""> </div>
                            <div class="tour-mig-lc-con tour-mig-lc-con2">
                                <h5>Da Lat</h5>
                                <a href="{{url("/daLat")}}" ><p>Discover</p></a>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--====== HOME HOTELS ==========-->

    <!--====== HOME PLACES ==========-->
    <section>
        <div class="rows tb-space pad-top-o pad-bot-redu">
            <div class="container">
                <!-- TITLE & DESCRIPTION -->
                <div class="spe-title">
                    <h2>TOP <span> DESTINATIONS AROUND THE WORLD</span> </h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <a href="{{url("/london")}}">
                        <div class="tour-mig-like-com">
                            <div class="v_place_img"> <img src="/assets/images/t1.jpg" alt=""> </div>
                            <div class="tour-mig-lc-con">
                                <h5>London</h5>
                                <a href="{{url("/london")}}"><p>Discover</p></a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="{{url("/paris")}}">
                        <div class="tour-mig-like-com">
                            <div class="tour-mig-lc-img"> <img src="/assets/images/t2.jpg" alt=""> </div>
                            <div class="tour-mig-lc-con tour-mig-lc-con2">
                                <h5>Paris</h5>
                                <a href="{{url('/paris')}}" ><p>Discover</p></a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="{{url('/newYork')}}">
                        <div class="tour-mig-like-com">
                            <div class="tour-mig-lc-img"> <img src="/assets/images/t3.jpg" alt=""> </div>
                            <div class="tour-mig-lc-con tour-mig-lc-con2">
                                <h5>New York City</h5>
                                <a href="{{url('/newYork')}}" ><p>Discover</p></a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="{{url('/bangkok')}}">
                        <div class="tour-mig-like-com">
                            <div class="tour-mig-lc-img"> <img src="/assets/images/t4.jpg" alt=""> </div>
                            <div class="tour-mig-lc-con tour-mig-lc-con2">
                                <h5>Bangkok</h5>
                                <a href="{{url('/bangkok')}}" ><p>Discover</p></a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="{{url('/singapore')}}">
                        <div class="tour-mig-like-com">
                            <div class="tour-mig-lc-img"> <img src="/assets/images/t5.jpg" alt=""> </div>
                            <div class="tour-mig-lc-con tour-mig-lc-con2">
                                <h5>Singapore</h5>
                                <a href="{{url('/singapore')}}" ><p>Discover</p></a>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
   >
    <section>
        <div class="tb-space tour-consul" style="padding-top: 75px">
            <div class="container">
                <div class="col-md-6"> <span class="to-con-1">Get in touch with us</span>
                    <h2>The Travel</h2>
                    <p>We always strive to bring customers the most complete experience,
                        aiming to become an airline with 5-star service quality.
                        In the near future, the airline will be among the leading airlines in Asia.</p>
                    <span class="to-con-2">Help line: +001 21745 12345</span>
                    <div class="ho-con-cont">
                        <a href="{{url("/contactus")}}" class="to-con-4 link-btn">Contact Now</a>
                    </div>
                </div>
                <div class="col-md-6 ho-vid"> <img style="border-radius: 10px" src="/assets/images/video.jpg" alt=""> </div>
            </div>
        </div>
    </section>
    <!--====== EVENTS ==========-->

    <section>
        <div class="rows tb-space pad-top-o pad-bot-redu">
        <div class="rows inn-page-bg com-colo pad-top-o">
                <div class=" inn-page-con-bg tb-space pad-bot-redu" id="inner-page-title">
                    <!-- TITLE & DESCRIPTION -->
                    <div class="container">
                    <div class="spe-title col-md-12" style="margin-top: 30px">
                        <h2>TOP <span>FREQUENTLY ASKED QUESTION</span></h2>
                        <div class="title-line">
                            <div class="tl-1"></div>
                            <div class="tl-2"></div>
                            <div class="tl-3"></div>
                        </div>
                    </div>
                    <div class="tips_travel_1">
                        <ul>
                            <!--TIPS LIST-->
                            <li class="col-md-4 col-sm-4">
                                <div class="tips_travel_2">
                                    <h5>I'm the main contact of group booking reservation.
                                        However, Im not able to travel, so can the rest of passenger fly with that reservation booking?
                                    </h5>
                                    <hr>
                                    <p>
                                        In this situation, the rest passengers can make a flight. However,
                                        If you are unable to travel, you can't request refund for your ticket according to the terms and conditions of The Travel and your
                                        erservation code is not valid anymore
                                    </p>
                                </div>
                            </li>
                            <!--TIPS LIST-->
                            <li class="col-md-4 col-sm-4">
                                <div class="tips_travel_2">
                                    <h5>May I be served food and beverage free of charge while taking a flight?
                                    </h5>
                                    <hr>
                                    <p>
                                        You will be served free meals on the flight when you buy The Travel's VIP ticket.
                                        The remaining ticket classes do not include meals and drinks on the plane.
                                        However, The Travel sells meals, drinks and souvenirs on the flight.
                                    </p>
                                </div>
                            </li>
                            <!--TIPS LIST-->
                            <li class="col-md-4 col-sm-4">
                                <div class="tips_travel_2">
                                    <h5>
                                        Has The Travel flight schedule changed after the publication? Why?
                                    </h5>
                                    <hr>
                                    <p>
                                        The flight schedule can be changed after the publication due to many reasons such as: bad weather, technical check, sercurity, e.g...
                                        Thus we ask you to provide accurate contact number and email address that will help The Travel quickly to update informations about
                                        flight schedule and other relevant informations in case of nessesary.
                                    </p>
                                </div>
                            </li>
                            <!--TIPS LIST-->
                        </ul>
                    </div>
                    </div>
                </div>
        </div>
        </div>
        <script>

        document.getElementById("btn1").onclick = function () {
        document.getElementById("content").style.display = 'none';
        };

        document.getElementById("btn2").onclick = function () {
        document.getElementById("content").style.display = 'block';
        };

        </script>
</section>

@endsection
