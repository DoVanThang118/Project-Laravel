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
                                        <div class="hot-page2-hom-pre-1 hot-page2-alp-cl-1-1"> <img src="images/package/1.jpg" alt=""> </div>
                                        <div class="hot-page2-hom-pre-2 hot-page2-alp-cl-1-2">
                                            <h5></h5> <span>Bali is a living postcard</span> </div>
                                        <div class="hot-page2-hom-pre-3 hot-page2-alp-cl-1-3"> <span>4.2</span> </div>
                                    </a>
                                </li>

                                <!--LISTINGS-->

                                <li>
                                    <a href="#">
                                        <div class="hot-page2-hom-pre-1 hot-page2-alp-cl-1-1"> <img src="images/package/2.jpg" alt=""> </div>
                                        <div class="hot-page2-hom-pre-2 hot-page2-alp-cl-1-2">
                                            <h5></h5> <span>There's so much to see and do in London</span> </div>
                                        <div class="hot-page2-hom-pre-3 hot-page2-alp-cl-1-3"> <span>4.4</span> </div>
                                    </a>
                                </li>

                                <!--LISTINGS-->
                                <li>
                                    <a href="#">
                                        <div class="hot-page2-hom-pre-1 hot-page2-alp-cl-1-1"> <img src="images/package/3.jpg" alt=""> </div>
                                        <div class="hot-page2-hom-pre-2 hot-page2-alp-cl-1-2">
                                            <h5>Paris, France</h5> <span>Everyone who visits Paris for the first time probably </span> </div>
                                        <div class="hot-page2-hom-pre-3 hot-page2-alp-cl-1-3"> <span>5.0</span> </div>
                                    </a>
                                </li>
                                <!--LISTINGS-->
                                <li>
                                    <a href="#">
                                        <div class="hot-page2-hom-pre-1 hot-page2-alp-cl-1-1"> <img src="images/package/4.jpg" alt=""> </div>
                                        <div class="hot-page2-hom-pre-2 hot-page2-alp-cl-1-2">
                                            <h5>Rome, Italy</h5> <span>It’s nicknamed the Eternal City for a reason.</span> </div>
                                        <div class="hot-page2-hom-pre-3 hot-page2-alp-cl-1-3"> <span>4.4</span> </div>
                                    </a>
                                </li>
                                <!--LISTINGS-->
                                <li>
                                    <a href="#">
                                        <div class="hot-page2-hom-pre-1 hot-page2-alp-cl-1-1"> <img src="images/package/5.jpg" alt=""> </div>
                                        <div class="hot-page2-hom-pre-2 hot-page2-alp-cl-1-2">
                                            <h5>New York City, New York</h5> <span>The first time you go to New York</span> </div>
                                        <div class="hot-page2-hom-pre-3 hot-page2-alp-cl-1-3"> <span>3.4</span> </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!--PART 7 : LEFT LISTINGS-->
                        <div class="hot-page2-alp-l3 hot-page2-alp-l-com">
                            <h4><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Travel Available Check</h4>
                            <div class="hot-page2-alp-l-com1 hot-room-ava-check">
                                <form class="v2-search-form package-form">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input type="text" id="select-city-1" class="autocomplete validate">
                                            <label for="select-city-1">Select City or Place</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <select>
                                                <option value="" disabled selected>Select your package</option>
                                                <option value="1">Honeymoon Package</option>
                                                <option value="2">Family Package</option>
                                                <option value="3">Holiday Package</option>
                                                <option value="1">Group Package</option>
                                                <option value="1">Regular Package</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <input type="text" id="from" name="from">
                                            <label for="from">Arrival Date</label>
                                        </div>
                                        <div class="input-field col s6">
                                            <input type="text" id="to" name="to">
                                            <label for="to">Departure Date</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <select>
                                                <option value="" disabled selected>No of adults</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="1">4</option>
                                                <option value="1">5</option>
                                                <option value="1">6</option>
                                            </select>
                                        </div>
                                        <div class="input-field col s6">
                                            <select>
                                                <option value="" disabled selected>No of childrens</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="1">4</option>
                                                <option value="1">5</option>
                                                <option value="1">6</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col s6">
                                            <select>
                                                <option value="" disabled selected>Min Price</option>
                                                <option value="1">$200</option>
                                                <option value="2">$500</option>
                                                <option value="3">$1000</option>
                                                <option value="1">$5000</option>
                                                <option value="1">$10,000</option>
                                                <option value="1">$50,000</option>
                                            </select>
                                        </div>
                                        <div class="input-field col s6">
                                            <select>
                                                <option value="" disabled selected>Max Price</option>
                                                <option value="1">$200</option>
                                                <option value="2">$500</option>
                                                <option value="3">$1000</option>
                                                <option value="1">$5000</option>
                                                <option value="1">$10,000</option>
                                                <option value="1">$50,000</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input type="submit" value="search" class="waves-effect waves-light tourz-sear-btn v2-ser-btn">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--PART 4 : LEFT LISTINGS-->
                        <div class="hot-page2-alp-l3 hot-page2-alp-l-com">
                            <h4><i class="fa fa-map-marker" aria-hidden="true"></i> Select City & Country</h4>
                            <div class="hot-page2-alp-l-com1 hot-page2-alp-p4">
                                <form>
                                    <ul>
                                        <li>
                                            <div class="checkbox checkbox-info checkbox-circle">
                                                <input id="chp41" class="styled" type="checkbox" checked="">
                                                <label for="chp41"> Nashville, USA </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox checkbox-info checkbox-circle">
                                                <input id="chp42" class="styled" type="checkbox">
                                                <label for="chp42"> Hull, England </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox checkbox-info checkbox-circle">
                                                <input id="chp43" class="styled" type="checkbox">
                                                <label for="chp43"> Seoul, South Korea </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox checkbox-info checkbox-circle">
                                                <input id="chp44" class="styled" type="checkbox">
                                                <label for="chp44"> Ljubljana, Slovenia </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox checkbox-info checkbox-circle">
                                                <input id="chp45" class="styled" type="checkbox">
                                                <label for="chp45"> Wroclaw, Poland </label>
                                            </div>
                                        </li>
                                    </ul>
                                </form> <a href="javascript:void(0);" class="hot-page2-alp-p4-btn-s">view more</a> </div>
                        </div>
                        <!--END PART 4 : LEFT LISTINGS-->
                        <!--PART 5 : LEFT LISTINGS-->
                        <div class="hot-page2-alp-l3 hot-page2-alp-l-com">
                            <h4><i class="fa fa-dollar" aria-hidden="true"></i> Select Price Range</h4>
                            <div class="hot-page2-alp-l-com1 hot-page2-alp-p5">
                                <form>
                                    <ul>
                                        <li>
                                            <div class="checkbox checkbox-info checkbox-circle">
                                                <input id="chp51" class="styled" type="checkbox" checked="">
                                                <label for="chp51"> $5000 - Above </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox checkbox-info checkbox-circle">
                                                <input id="chp52" class="styled" type="checkbox">
                                                <label for="chp52"> $4000 - $5000 </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox checkbox-info checkbox-circle">
                                                <input id="chp53" class="styled" type="checkbox">
                                                <label for="chp53"> $3000 - $4000 </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox checkbox-info checkbox-circle">
                                                <input id="chp54" class="styled" type="checkbox">
                                                <label for="chp54"> $2000 - $3000 </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox checkbox-info checkbox-circle">
                                                <input id="chp55" class="styled" type="checkbox">
                                                <label for="chp55"> $2000 - Below </label>
                                            </div>
                                        </li>
                                    </ul>
                                </form> <a href="javascript:void(0);" class="hot-page2-alp-p5-btn-s">view more</a> </div>
                        </div>
                        <!--END PART 5 : LEFT LISTINGS-->
                        <!--PART 6 : LEFT LISTINGS-->
                        <div class="hot-page2-alp-l3 hot-page2-alp-l-com">
                            <h4><i class="fa fa-star-o" aria-hidden="true"></i> Select Ratings</h4>
                            <div class="hot-page2-alp-l-com1 hot-page2-alp-p5">
                                <form>
                                    <ul>
                                        <li>
                                            <div class="checkbox checkbox-info checkbox-circle">
                                                <input id="chp61" class="styled" type="checkbox" checked="">
                                                <label for="chp61"> <span class="ho-hot-rat-star-list">
                                                        <span class="hot-list-left-part-rat">5.0</span> <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i> </span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox checkbox-info checkbox-circle">
                                                <input id="chp62" class="styled" type="checkbox">
                                                <label for="chp62"> <span class="ho-hot-rat-star-list">
                                                        <span class="hot-list-left-part-rat">4.0</span> <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox checkbox-info checkbox-circle">
                                                <input id="chp63" class="styled" type="checkbox">
                                                <label for="chp63"> <span class="ho-hot-rat-star-list">
                                                        <span class="hot-list-left-part-rat">3.0</span> <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox checkbox-info checkbox-circle">
                                                <input id="chp64" class="styled" type="checkbox">
                                                <label for="chp64"> <span class="ho-hot-rat-star-list">
                                                        <span class="hot-list-left-part-rat">2.0</span> <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox checkbox-info checkbox-circle">
                                                <input id="chp65" class="styled" type="checkbox">
                                                <label for="chp65"> <span class="ho-hot-rat-star-list">
                                                        <span class="hot-list-left-part-rat">1.0</span> <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </span>
                                                </label>
                                            </div>
                                        </li>
                                    </ul>
                                </form> <a href="javascript:void(0);" class="hot-page2-alp-p5-btn-s">view more</a> </div>
                        </div>
                        <!--END PART 5 : LEFT LISTINGS-->
                        <!--PART 6 : LEFT LISTINGS-->
                        <div class="hot-page2-alp-l3 hot-page2-alp-l-com">
                            <h4><i class="fa fa-heart-o" aria-hidden="true"></i> Travel Amenities</h4>
                            <div class="hot-page2-alp-l-com1 hot-page2-alp-p5">
                                <form>
                                    <ul>
                                        <li>
                                            <div class="checkbox checkbox-info checkbox-circle">
                                                <input id="chp71" class="styled" type="checkbox" checked="">
                                                <label for="chp71"> Swimming pools </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox checkbox-info checkbox-circle">
                                                <input id="chp72" class="styled" type="checkbox">
                                                <label for="chp72"> Wi-Fi & Computer </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox checkbox-info checkbox-circle">
                                                <input id="chp73" class="styled" type="checkbox">
                                                <label for="chp73"> Kitchen facilities </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox checkbox-info checkbox-circle">
                                                <input id="chp74" class="styled" type="checkbox">
                                                <label for="chp74"> Music & GYM </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox checkbox-info checkbox-circle">
                                                <input id="chp75" class="styled" type="checkbox">
                                                <label for="chp75"> Dining </label>
                                            </div>
                                        </li>
                                    </ul>
                                </form> <a href="javascript:void(0);" class="hot-page2-alp-p5-btn-s">view more</a> </div>
                        </div>
                        <!--END PART 7 : LEFT LISTINGS-->
                    </div>
                    <!--END LEFT LISTINGS-->
                    <!--RIGHT LISTINGS-->
                    <div class="col-md-9 hot-page2-alp-con-right">
                        <div class="hot-page2-alp-con-right-1">
                            <!--LISTINGS-->
                            <div class="row">
                                <!--LISTINGS START-->

                                    @foreach($data as $item)
                                <div class="hot-page2-alp-r-list">
                                    <form method="post" action="{{url("/",["flight"=>$item->id])}}" role="form" enctype="multipart/form-data" >
                                        @csrf

                                    <div class="col-md-3 hot-page2-alp-r-list-re-sp">
                                        <a href="javascript:void(0);">
                                            <div class="hotel-list-score">4.5</div>
                                            <div class="hot-page2-hli-1"> <img src="public/assets/images/package/1.jpg" alt=""> </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="trav-list-bod">
                                            <a href="tour-details.html"><h3>Flight No {{$item->id}} from {{$item->AirStrip->TakeofCity->name}} to {{$item->AirStrip->LandingCity->name}} </h3></a>
                                            <p>Home to numerous lakes, villages and high peaks of the Alps, Switzerland is a dreamy mountainous Central European country that lures tourists from all over the world.</p>
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
                                    </form>
                                </div>
                                    @endforeach
                                    @if(isset($data2))
                                        <h1>Return</h1>
                                        @foreach($data2 as $item)
                                            <div class="hot-page2-alp-r-list">
                                                <form  method="post" action="{{url("/",["flight"=>$item->id])}}" role="form" enctype="multipart/form-data" >
                                                    @csrf

                                                <div class="col-md-3 hot-page2-alp-r-list-re-sp">
                                                    <a href="javascript:void(0);">
                                                        <div class="hotel-list-score">4.5</div>
                                                        <div class="hot-page2-hli-1"> <img src="public/assets/images/package/1.jpg" alt=""> </div>
                                                    </a>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="trav-list-bod">
                                                        <a href="tour-details.html"><h3>Flight No {{$item->id}} from {{$item->AirStrip->TakeofCity->name}} to {{$item->AirStrip->LandingCity->name}} </h3></a>
                                                        <p>Home to numerous lakes, villages and high peaks of the Alps, Switzerland is a dreamy mountainous Central European country that lures tourists from all over the world.</p>
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

                                                </form>
                                            </div>
                                        @endforeach
                                        @endif




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
