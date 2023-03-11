@extends('layouts.app')
@section("title","Trang Chủ")
@section('content')
    <!--HEADER SECTION-->
    <section>
        <div class="v2-hom-search">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="v2-ho-se-ri">
                            <h5>World's leading tour and travels template</h5>
                            <h1>Flight Booking to your travel!</h1>
                            <p>Experience the various exciting tour and travel packages and Make hotel reservations, find vacation packages, search cheap hotels and events</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="">
                            <form class="contact__form v2-search-form" method="post" action="{{url("/")}}"  role="form" enctype="multipart/form-data">
                                @csrf
                                <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                    Thank you message
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <select name="noofadults">
                                            <option value="" disabled selected>Return</option>
                                            <option value="1">One-way</option>
                                            <option value="2">Return</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s8">
                                        <select name="takeofcity_id">
                                            <option value="0">From</option>
                                            @foreach($city as $item)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="input-field col s4">
                                        @include("admin.html.form.input",[
                                  "label"=>"",
                                  "title"=>"Takeof Time",
                                  "key"=>"takeoftime",
                                  "type"=>"date",
                                  "required"=>false])
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s8">
                                        <select name="landingcity_id">
                                            <option value="0">To</option>
                                            @foreach($city as $item)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="input-field col s4">
                                        @include("admin.html.form.input",[
                                  "label"=>"",
                                  "title"=>"Landing Time",
                                  "key"=>"landingtime",
                                  "type"=>"date",
                                  "required"=>false])
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <p>Adults</p>
                                        @include("user.form.input",[
                                          "label"=>"",
                                          "key"=>"adults",
                                          "type"=>"number",
                                          "required"=>false])
                                    </div>
                                    <div class="input-field col s6">
                                        <p>Children</p>
                                        @include("user.form.input",[
                                         "label"=>"",
                                         "key"=>"children",
                                         "type"=>"number",
                                         "required"=>false])
                                    </div>
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
    <!--====== HOME PLACES ==========-->
    <section>
        <div class="rows pad-bot-redu tb-space">
            <div class="container">
                <!-- TITLE & DESCRIPTION -->
                <div class="spe-title">
                    <h2>Top <span>Tour Packages</span></h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide.</p>
                </div>
                <div>
                    <!-- TOUR PLACE 1 -->
                    <div class="col-md-4 col-sm-6 col-xs-12 b_packages">
                        <!-- OFFER BRAND -->
                        <div class="band"> <img src="/assets/images/band.png" alt="" /> </div>
                        <!-- IMAGE -->
                        <div class="v_place_img"> <img src="/assets/images/t5.png" alt="Tour Booking" title="Tour Booking" /> </div>
                        <!-- TOUR TITLE & ICONS -->
                        <div class="b_pack rows">
                            <!-- TOUR TITLE -->
                            <div class="col-md-8 col-sm-8">
                                <h4><a href="tour-details.html">Rio de Janeiro<span class="v_pl_name">(Brazil)</span></a></h4> </div>
                            <!-- TOUR ICONS -->
                            <div class="col-md-4 col-sm-4 pack_icon">
                                <ul>
                                    <li>
                                        <a href="#"><img src="/assets/images/clock.png" alt="Date" title="Tour Timing" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="/assets/images/info.png" alt="Details" title="View more details" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="/assets/images/price.png" alt="Price" title="Price" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="/assets/images/map.png" alt="Location" title="Location" /> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- TOUR PLACE 2 -->
                    <div class="col-md-4 col-sm-6 col-xs-12 b_packages">
                        <!-- OFFER BRAND -->
                        <div class="band"> <img src="/assets/images/band1.png" alt="" /> </div>
                        <!-- IMAGE -->
                        <div class="v_place_img"> <img src="/assets/images/t1.png" alt="Tour Booking" title="Tour Booking" /> </div>
                        <!-- TOUR TITLE & ICONS -->
                        <div class="b_pack rows">
                            <!-- TOUR TITLE -->
                            <div class="col-md-8 col-sm-8">
                                <h4><a href="tour-details.html">Paris<span class="v_pl_name">(England)</span></a></h4> </div>
                            <!-- TOUR ICONS -->
                            <div class="col-md-4 col-sm-4 pack_icon">
                                <ul>
                                    <li>
                                        <a href="#"><img src="/assets/images/clock.png" alt="Date" title="Tour Timing" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="/assets/images/info.png" alt="Details" title="View more details" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="/assets/images/price.png" alt="Price" title="Price" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="/assets/images/map.png" alt="Location" title="Location" /> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- TOUR PLACE 3 -->
                    <div class="col-md-4 col-sm-6 col-xs-12 b_packages">
                        <div class="v_place_img"><img src="/assets/images/t2.png" alt="Tour Booking" title="Tour Booking" /> </div>
                        <div class="b_pack rows">
                            <div class="col-md-8 col-sm-8">
                                <h4><a href="tour-details.html">South India<span class="v_pl_name">(India)</span></a></h4> </div>
                            <div class="col-md-4 col-sm-4 pack_icon">
                                <ul>
                                    <li>
                                        <a href="#"><img src="/assets/images/clock.png" alt="Date" title="Tour Timing" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="/assets/images/info.png" alt="Details" title="View more details" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="/assets/images/price.png" alt="Price" title="Price" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="/assets/images/map.png" alt="Location" title="Location" /> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- TOUR PLACE 4 -->
                    <div class="col-md-4 col-sm-6 col-xs-12 b_packages">
                        <div class="v_place_img"><img src="/assets/images/t3.png" alt="Tour Booking" title="Tour Booking" /> </div>
                        <div class="b_pack rows">
                            <div class="col-md-8 col-sm-8">
                                <h4><a href="tour-details.html">The Great Wall<span class="v_pl_name">(China)</span></a></h4> </div>
                            <div class="col-md-4 col-sm-4 pack_icon">
                                <ul>
                                    <li>
                                        <a href="#"><img src="/assets/images/clock.png" alt="Date" title="Tour Timing" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="/assets/images/info.png" alt="Details" title="View more details" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="/assets/images/price.png" alt="Price" title="Price" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="/assets/images/map.png" alt="Location" title="Location" /> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- TOUR PLACE 5 -->
                    <div class="col-md-4 col-sm-6 col-xs-12 b_packages">
                        <div class="v_place_img"><img src="/assets/images/t4.png" alt="Tour Booking" title="Tour Booking" /> </div>
                        <div class="b_pack rows">
                            <div class="col-md-8 col-sm-8">
                                <h4><a href="tour-details.html">Nail Island<span class="v_pl_name">(Andaman)</span></a></h4> </div>
                            <div class="col-md-4 col-sm-4 pack_icon">
                                <ul>
                                    <li>
                                        <a href="#"><img src="/assets/images/clock.png" alt="Date" title="Tour Timing" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="/assets/images/info.png" alt="Details" title="View more details" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="/assets/images/price.png" alt="Price" title="Price" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="/assets/images/map.png" alt="Location" title="Location" /> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- TOUR PLACE 6 -->
                    <div class="col-md-4 col-sm-6 col-xs-12 b_packages">
                        <div class="v_place_img"><img src="/assets/images/t6.png" alt="Tour Booking" title="Tour Booking" /> </div>
                        <div class="b_pack rows">
                            <div class="col-md-8 col-sm-8">
                                <h4><a href="tour-details.html">Mauritius<span class="v_pl_name">(Indiana)</span></a></h4> </div>
                            <div class="col-md-4 col-sm-4 pack_icon">
                                <ul>
                                    <li>
                                        <a href="#"><img src="/assets/images/clock.png" alt="Date" title="Tour Timing" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="/assets/images/info.png" alt="Details" title="View more details" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="/assets/images/price.png" alt="Price" title="Price" /> </a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="/assets/images/map.png" alt="Location" title="Location" /> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== HOME HOTELS ==========-->
    <section>
        <div class="rows tb-space pad-top-o pad-bot-redu">
            <div class="container">
                <!-- TITLE & DESCRIPTION -->
                <div class="spe-title">
                    <h2>Popular <span>Cities</span> </h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p>World's leading Hotel Booking website,Over 30,000 Hotel rooms worldwide. Book Hotel rooms and enjoy your holidays with distinctive experience</p>
                </div>
                <!-- CITY -->
                <div class="col-md-6">
                    <a href="tour-details.html">
                        <div class="tour-mig-like-com">
                            <div class="tour-mig-lc-img"> <img src="/assets/images/listing/home.jpg" alt=""> </div>
                            <div class="tour-mig-lc-con">
                                <h5>Europe</h5>
                                <p><span>12 Packages</span> Starting from $2400</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="tour-details.html">
                        <div class="tour-mig-like-com">
                            <div class="tour-mig-lc-img"> <img src="/assets/images/listing/home3.jpg" alt=""> </div>
                            <div class="tour-mig-lc-con tour-mig-lc-con2">
                                <h5>Dubai</h5>
                                <p>Starting from $2400</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="tour-details.html">
                        <div class="tour-mig-like-com">
                            <div class="tour-mig-lc-img"> <img src="/assets/images/listing/home2.jpg" alt=""> </div>
                            <div class="tour-mig-lc-con tour-mig-lc-con2">
                                <h5>India</h5>
                                <p>Starting from $2400</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="tour-details.html">
                        <div class="tour-mig-like-com">
                            <div class="tour-mig-lc-img"> <img src="/assets/images/listing/home1.jpg" alt=""> </div>
                            <div class="tour-mig-lc-con tour-mig-lc-con2">
                                <h5>Usa</h5>
                                <p>Starting from $2400</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="tour-details.html">
                        <div class="tour-mig-like-com">
                            <div class="tour-mig-lc-img"> <img src="/assets/images/listing/home4.jpg" alt=""> </div>
                            <div class="tour-mig-lc-con tour-mig-lc-con2">
                                <h5>London</h5>
                                <p>Starting from $2400</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--====== HOME HOTELS ==========-->
    <section>
        <div class="rows tb-space pad-top-o pad-bot-redu">
            <div class="container">
                <!-- TITLE & DESCRIPTION -->
                <div class="spe-title">
                    <h2>Hotels <span>booking open now! </span> </h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p>World's leading Hotel Booking website,Over 30,000 Hotel rooms worldwide. Book Hotel rooms and enjoy your holidays with distinctive experience</p>
                </div>
                <!-- HOTEL GRID -->
                <div class="to-ho-hotel">
                    <!-- HOTEL GRID -->
                    <div class="col-md-4">
                        <div class="to-ho-hotel-con">
                            <div class="to-ho-hotel-con-1">
                                <div class="hot-page2-hli-3"> <img src="/assets/images/hci1.png" alt=""> </div>
                                <div class="hom-hot-av-tic"> Available Tickets: 42 </div> <img src="/assets/images/hotels/1.jpg" alt=""> </div>
                            <div class="to-ho-hotel-con-23">
                                <div class="to-ho-hotel-con-2"> <a href="hotel-details.html"><h4>GTC Grand Chola</h4></a> </div>
                                <div class="to-ho-hotel-con-3">
                                    <ul>
                                        <li>City: illunois,united states
                                            <div class="dir-rat-star ho-hot-rat-star"> Rating: <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </div>
                                        </li>
                                        <li><span class="ho-hot-pri-dis">$720</span><span class="ho-hot-pri">$420</span> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- HOTEL GRID -->
                    <div class="col-md-4">
                        <div class="to-ho-hotel-con">
                            <div class="to-ho-hotel-con-1">
                                <div class="hot-page2-hli-3"> <img src="/assets/images/hci1.png" alt=""> </div>
                                <div class="hom-hot-av-tic"> Available Tickets: 520 </div> <img src="/assets/images/hotels/2.jpg" alt=""> </div>
                            <div class="to-ho-hotel-con-23">
                                <div class="to-ho-hotel-con-2"> <a href="hotel-details.html"><h4>Taaj Grand Resorts</h4></a> </div>
                                <div class="to-ho-hotel-con-3">
                                    <ul>
                                        <li>City: illunois,united states
                                            <div class="dir-rat-star ho-hot-rat-star"> Rating: <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </div>
                                        </li>
                                        <li><span class="ho-hot-pri-dis">$840</span><span class="ho-hot-pri">$540</span> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- HOTEL GRID -->
                    <div class="col-md-4">
                        <div class="to-ho-hotel-con">
                            <div class="to-ho-hotel-con-1">
                                <div class="hot-page2-hli-3"> <img src="/assets/images/hci1.png" alt=""> </div>
                                <div class="hom-hot-av-tic"> Available Tickets: 92 </div> <img src="/assets/images/hotels/3.jpg" alt=""> </div>
                            <div class="to-ho-hotel-con-23">
                                <div class="to-ho-hotel-con-2"> <a href="hotel-details.html"><h4>Keep Grand Hotels</h4></a> </div>
                                <div class="to-ho-hotel-con-3">
                                    <ul>
                                        <li>City: illunois,united states
                                            <div class="dir-rat-star ho-hot-rat-star"> Rating: <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </div>
                                        </li>
                                        <li><span class="ho-hot-pri-dis">$680</span><span class="ho-hot-pri">$380</span> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== SECTION: FREE CONSULTANT ==========-->
    <section>
        <div class="tb-space tour-consul">
            <div class="container">
                <div class="col-md-6"> <span class="to-con-1">Get in touch with us</span>
                    <h2>Get best travel deals</h2>
                    <p>Get best travel deals for hotels, holidays, trains.Donec eget odio a nunc lacinia rhoncus. Vivamus dignissim magna quis nisl fermentum porttitor. Maecenas venenatis mattis dui at pharetra.Nullam rutrum odio eu viverra accumsan. Nam orci elit, scelerisque eget dui non, sagittis tristique metus. Fusce nec nulla dapibus, fringilla nulla eu, vehicula odio. </p>
                    <span class="to-con-2">Help line: +001 21745 12345</span>
                    <div class="ho-con-cont">
                        <a href="hotels-list.html" class="to-con-3 link-btn">Book Now</a>
                        <a href="contact.html" class="to-con-4 link-btn">Contact Now</a>
                    </div>
                </div>
                <div class="col-md-6 ho-vid"> <img src="/assets/images/video.png" alt=""> </div>
            </div>
        </div>
    </section>
    <!--====== EVENTS ==========-->
    <section>
        <div class="rows tb-space">
            <div class="container events events-1" id="inner-page-title">
                <!-- TITLE & DESCRIPTION -->
                <div class="spe-title">
                    <h2>Top <span>Events</span> in this month</h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel packages and enjoy your holidays with distinctive experience</p>
                </div>
                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search Event Name.." title="Type in a name">
                <table id="myTable">
                    <tbody>
                    <tr>
                        <th>#</th>
                        <th>Event Name</th>
                        <th class="e_h1">Date</th>
                        <th class="e_h1">Time</th>
                        <th class="e_h1">Location</th>
                        <th>Book</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><img src="/assets/images/iplace-1.jpg" alt="" /><a href="hotels-list.html" class="events-title">Taj Mahal,Agra, India</a> </td>
                        <td class="e_h1">16.12.2016</td>
                        <td class="e_h1">10.00 PM</td>
                        <td class="e_h1">Australia</td>
                        <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><img src="/assets/images/iplace-2.jpg" alt="" /><a href="hotels-list.html" class="events-title">Salesforce Summer, Dubai</a> </td>
                        <td class="e_h1">16.12.2016</td>
                        <td class="e_h1">10.00 PM</td>
                        <td class="e_h1">Dubai</td>
                        <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><img src="/assets/images/iplace-3.jpg" alt="" /><a href="hotels-list.html" class="events-title">God Towers, TOKYO, JAPAN</a> </td>
                        <td class="e_h1">16.12.2016</td>
                        <td class="e_h1">10.00 PM</td>
                        <td class="e_h1">JAPAN</td>
                        <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><img src="/assets/images/iplace-4.jpg" alt="" /><a href="hotels-list.html" class="events-title">TOUR DE ROMANDIE, Switzerland</a> </td>
                        <td class="e_h1">16.12.2016</td>
                        <td class="e_h1">10.00 PM</td>
                        <td class="e_h1">Switzerland</td>
                        <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td><img src="/assets/images/iplace-5.jpg" alt="" /><a href="hotels-list.html" class="events-title">TOUR DE POLOGNE, Poland</a> </td>
                        <td class="e_h1">16.12.2016</td>
                        <td class="e_h1">10.00 PM</td>
                        <td class="e_h1">Poland</td>
                        <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td><img src="/assets/images/iplace-6.jpg" alt="" /><a href="hotels-list.html" class="events-title">Future of Marketing,Sydney, Australia</a> </td>
                        <td class="e_h1">16.12.2016</td>
                        <td class="e_h1">10.00 PM</td>
                        <td class="e_h1">Australia</td>
                        <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td><img src="/assets/images/iplace-7.jpg" alt="" /><a href="hotels-list.html" class="events-title">Eiffel Tower, Paris</a> </td>
                        <td class="e_h1">16.12.2016</td>
                        <td class="e_h1">10.00 PM</td>
                        <td class="e_h1">France</td>
                        <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td><img src="/assets/images/iplace-8.jpg" alt="" /><a href="hotels-list.html" class="events-title">PARIS - ROUBAIX, England</a> </td>
                        <td class="e_h1">16.12.2016</td>
                        <td class="e_h1">10.00 PM</td>
                        <td class="e_h1">England</td>
                        <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td><img src="/assets/images/iplace-9.jpg" alt="" /><a href="hotels-list.html" class="events-title">Dubai Beach Resort, Dubai</a> </td>
                        <td class="e_h1">16.12.2016</td>
                        <td class="e_h1">10.00 PM</td>
                        <td class="e_h1">Dubai</td>
                        <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td><img src="/assets/images/iplace-4.jpg" alt="" /><a href="hotels-list.html" class="events-title">TOUR DE POLOGNE, Poland</a> </td>
                        <td class="e_h1">16.12.2016</td>
                        <td class="e_h1">10.00 PM</td>
                        <td class="e_h1">Poland</td>
                        <td><a href="booking.html" class="link-btn">Book Now</a> </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!--====== POPULAR TOUR PLACES ==========-->
    <section>
        <div class="rows pla pad-bot-redu tb-space">
            <div class="pla1 p-home container">
                <!-- TITLE & DESCRIPTION -->
                <div class="spe-title spe-title-1">
                    <h2>Top <span>Sight Seeing</span> in this month</h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel packages and enjoy your holidays with distinctive experience</p>
                </div>
                <div class="popu-places-home">
                    <!-- POPULAR PLACES 1 -->
                    <div class="col-md-6 col-sm-6 col-xs-12 place">
                        <div class="col-md-6 col-sm-12 col-xs-12"> <img src="/assets/images/place2.jpg" alt="" /> </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <h3><span>Honeymoon Package</span> 7 Days / 6 Nights</h3>
                            <p>lorem ipsum simplelorem ipsum simplelorem ipsum simplelorem ipsum simple</p> <a href="tour-details.html" class="link-btn">more info</a> </div>
                    </div>
                    <!-- POPULAR PLACES 2 -->
                    <div class="col-md-6 col-sm-6 col-xs-12 place">
                        <div class="col-md-6 col-sm-12 col-xs-12"> <img src="/assets/images/place1.jpg" alt="" /> </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <h3><span>Family package</span> 14 Days / 13 Nights</h3>
                            <p>lorem ipsum simplelorem ipsum simplelorem ipsum simplelorem ipsum simple</p> <a href="tour-details.html" class="link-btn">more info</a> </div>
                    </div>
                </div>
                <div class="popu-places-home">
                    <!-- POPULAR PLACES 3 -->
                    <div class="col-md-6 col-sm-6 col-xs-12 place">
                        <div class="col-md-6 col-sm-12 col-xs-12"> <img src="/assets/images/place3.jpg" alt="" /> </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <h3><span>Weekend Package </span> 3 Days / 2 Nights</h3>
                            <p>lorem ipsum simplelorem ipsum simplelorem ipsum simplelorem ipsum simple</p> <a href="tour-details.html" class="link-btn">more info</a> </div>
                    </div>
                    <!-- POPULAR PLACES 4 -->
                    <div class="col-md-6 col-sm-6 col-xs-12 place">
                        <div class="col-md-6 col-sm-12 col-xs-12"> <img src="/assets/images/place4.jpg" alt="" /> </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <h3><span>Group Package</span> 10 Days / 9 Nights</h3>
                            <p>lorem ipsum simplelorem ipsum simplelorem ipsum simplelorem ipsum simple</p> <a href="tour-details.html" class="link-btn">more info</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== REQUEST A QUOTE ==========-->
    <section>
        <div class="ho-popu tb-space pad-bot-redu">
            <div class="rows container">
                <!-- TITLE & DESCRIPTION -->
                <div class="spe-title">
                    <h2>Top <span>Branding</span> for this month</h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel packages and enjoy your holidays with distinctive experience</p>
                </div>
                <div class="ho-popu-bod">
                    <div class="col-md-4">
                        <div class="hot-page2-hom-pre-head">
                            <h4>Top Branding <span>Hotels</span></h4> </div>
                        <div class="hot-page2-hom-pre">
                            <ul>
                                <!--LISTINGS-->
                                <li>
                                    <a href="hotels-list.html">
                                        <div class="hot-page2-hom-pre-1"> <img src="/assets/images/hotels/1.jpg" alt=""> </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Taaj Club House</h5> <span>City: illunois, United States</span> </div>
                                        <div class="hot-page2-hom-pre-3"> <span>4.5</span> </div>
                                    </a>
                                </li>
                                <!--LISTINGS-->
                                <li>
                                    <a href="hotels-list.html">
                                        <div class="hot-page2-hom-pre-1"> <img src="/assets/images/hotels/2.jpg" alt=""> </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Universal luxury Grand Hotel</h5> <span>City: Rio,Brazil</span> </div>
                                        <div class="hot-page2-hom-pre-3"> <span>4.2</span> </div>
                                    </a>
                                </li>
                                <!--LISTINGS-->
                                <li>
                                    <a href="hotels-list.html">
                                        <div class="hot-page2-hom-pre-1"> <img src="/assets/images/hotels/3.jpg" alt=""> </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Barcelona Grand Pales</h5> <span>City: Chennai,India</span> </div>
                                        <div class="hot-page2-hom-pre-3"> <span>5.0</span> </div>
                                    </a>
                                </li>
                                <!--LISTINGS-->
                                <li>
                                    <a href="hotels-list.html">
                                        <div class="hot-page2-hom-pre-1"> <img src="/assets/images/hotels/4.jpg" alt=""> </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Lake Palace view Hotel</h5> <span>City: Beijing,China</span> </div>
                                        <div class="hot-page2-hom-pre-3"> <span>2.5</span> </div>
                                    </a>
                                </li>
                                <!--LISTINGS-->
                                <li>
                                    <a href="hotels-list.html">
                                        <div class="hot-page2-hom-pre-1"> <img src="/assets/images/hotels/8.jpg" alt=""> </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>First Class Grandd Hotel</h5> <span>City: Berlin,Germany</span> </div>
                                        <div class="hot-page2-hom-pre-3"> <span>4.0</span> </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="hot-page2-hom-pre-head">
                            <h4>Top Branding <span>Packages</span></h4> </div>
                        <div class="hot-page2-hom-pre">
                            <ul>
                                <!--LISTINGS-->
                                <li>
                                    <a href="hotels-list.html">
                                        <div class="hot-page2-hom-pre-1"> <img src="/assets/images/trends/1.jpg" alt=""> </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Family Package Luxury</h5> <span>Duration: 7 Days and 6 Nights</span> </div>
                                        <div class="hot-page2-hom-pre-3"> <span>4.1</span> </div>
                                    </a>
                                </li>
                                <!--LISTINGS-->
                                <li>
                                    <a href="hotels-list.html">
                                        <div class="hot-page2-hom-pre-1"> <img src="/assets/images/trends/2.jpg" alt=""> </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Honeymoon Package Luxury</h5> <span>Duration: 14 Days and 13 Nights</span> </div>
                                        <div class="hot-page2-hom-pre-3"> <span>4.4</span> </div>
                                    </a>
                                </li>
                                <!--LISTINGS-->
                                <li>
                                    <a href="hotels-list.html">
                                        <div class="hot-page2-hom-pre-1"> <img src="/assets/images/trends/3.jpg" alt=""> </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Group Package Luxury</h5> <span>Duration: 28 Days and 29 Nights</span> </div>
                                        <div class="hot-page2-hom-pre-3"> <span>3.0</span> </div>
                                    </a>
                                </li>
                                <!--LISTINGS-->
                                <li>
                                    <a href="hotels-list.html">
                                        <div class="hot-page2-hom-pre-1"> <img src="/assets/images/trends/4.jpg" alt=""> </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Regular Package Luxury</h5> <span>Duration: 12 Days and 11 Nights</span> </div>
                                        <div class="hot-page2-hom-pre-3"> <span>3.5</span> </div>
                                    </a>
                                </li>
                                <!--LISTINGS-->
                                <li>
                                    <a href="hotels-list.html">
                                        <div class="hot-page2-hom-pre-1"> <img src="/assets/images/trends/1.jpg" alt=""> </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Custom Package Luxury</h5> <span>Duration: 10 Days and 10 Nights</span> </div>
                                        <div class="hot-page2-hom-pre-3"> <span>5.0</span> </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="hot-page2-hom-pre-head">
                            <h4>Top Branding <span>Reviewers</span></h4> </div>
                        <div class="hot-page2-hom-pre">
                            <ul>
                                <!--LISTINGS-->
                                <li>
                                    <a href="hotels-list.html">
                                        <div class="hot-page2-hom-pre-1"> <img src="/assets/images/reviewer/1.jpg" alt=""> </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Christopher</h5> <span>No of Reviews: 620, City: illunois</span> </div>
                                        <div class="hot-page2-hom-pre-3"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> </div>
                                    </a>
                                </li>
                                <!--LISTINGS-->
                                <li>
                                    <a href="hotels-list.html">
                                        <div class="hot-page2-hom-pre-1"> <img src="/assets/images/reviewer/2.png" alt=""> </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Matthew</h5> <span>No of Reviews: 48, City: Rio</span> </div>
                                        <div class="hot-page2-hom-pre-3"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> </div>
                                    </a>
                                </li>
                                <!--LISTINGS-->
                                <li>
                                    <a href="hotels-list.html">
                                        <div class="hot-page2-hom-pre-1"> <img src="/assets/images/reviewer/3.jpeg" alt=""> </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Stephanie</h5> <span>No of Reviews: 560, City: Chennai</span> </div>
                                        <div class="hot-page2-hom-pre-3"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> </div>
                                    </a>
                                </li>
                                <!--LISTINGS-->
                                <li>
                                    <a href="hotels-list.html">
                                        <div class="hot-page2-hom-pre-1"> <img src="/assets/images/reviewer/4.jpeg" alt=""> </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Robert</h5> <span>No of Reviews: 920, City: Beijing</span> </div>
                                        <div class="hot-page2-hom-pre-3"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> </div>
                                    </a>
                                </li>
                                <!--LISTINGS-->
                                <li>
                                    <a href="hotels-list.html">
                                        <div class="hot-page2-hom-pre-1"> <img src="/assets/images/reviewer/5.jpeg" alt=""> </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Danielle</h5> <span>No of Reviews: 768, City: Berlin</span> </div>
                                        <div class="hot-page2-hom-pre-3"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== REQUEST A QUOTE ==========-->
    <!--====== REQUEST A QUOTE ==========-->
    <!--<section>
        <div class="form tb-space">
            <div class="rows container">
                <div class="spe-title">
                    <h2>Book your <span>favourite Package</span> Now!</h2>
                    <div class="title-line">
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                        <div class="tl-3"></div>
                    </div>
                    <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel packages and enjoy your holidays with distinctive experience</p>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 form_1">
                    <div class="succ_mess">Thank you for contacting us we will get back to you soon.</div>
                    <form id="home_form" name="home_form" action="mail/send.php">
                        <ul>
                            <li>
<input type="text" name="ename" value="" id="ename" placeholder="Name" required>
                            </li>
                            <li>
                                <input type="tel" name="emobile" value="" id="emobile" placeholder="Mobile" required>
                            </li>
                            <li>
                                <input type="email" name="eemail" value="" id="eemail" placeholder="Email id" required>
                            </li>
                            <li>
                                <input type="text" name="esubject" value="" id="esubject" placeholder="Subject" required>
                            </li>
                            <li>
                                <input type="text" name="ecity" value="" id="ecity" placeholder="City" required>
                            </li>
                            <li>
                                <input type="text" name="ecount" value="" id="ecount" placeholder="Country" required>
                            </li>
                            <li>
                                <textarea name="emess" cols="40" rows="3" id="text-comment" placeholder="Enter your message"></textarea>
                            </li>
                            <li>
                                <input type="submit" value="Submit" id="send_button">
                            </li>
                        </ul>
                    </form>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 family">
                    <img src="images/family.png" alt="" />
                </div>
            </div>
        </div>
    </section>-->
@endsection
