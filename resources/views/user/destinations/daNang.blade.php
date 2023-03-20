@extends('layouts.app')
@section("title","Danang")
@section('content')
    <section>
        <div class="rows inner_banner inner_banner_2">
            <div class="container">
                <h2><span>Da Nang – The best city to live in Vietnam</span></h2>
                <ul>
                    <li><a href="{{url("/")}}">Home</a>
                    </li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                    <li><a  class="bread-acti">Top Destination</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section>
        <div class="rows inn-page-bg com-colo">
            <div class="container inn-page-con-bg tb-space">
                <!--====== TOUR DESCRIPTION ==========-->
                <div class="tour_head1 hotel-com-color">
                    <h3>
                        As the largest city of the Central region, Danang is the symbol of  urban hustle and bustle - the largest economic and cultural center of the region. Surrounded by the sapphire blue water and undulating  mountains, the city is quite livable and never short of breathtaking scenery as well as its long standing cultural essence. locals are hospitable and genuine, further accentuating the reputation of this city.                    </h3>
                </div>
                <hr>
                <div class="tour_head1 hotel-com-color" style="text-align: center">
                    <img src="/assets/images/gallery/danang1.jpg" alt="" >
                </div>
                <hr>
                <!--====== ROOMS: HOTEL BOOKING ==========-->
                <!--====== ABOUT THE TOUR ==========-->
                <div class="tour_head1 hotel-com-color">
                    <h3>Han River:</h3>
                    <p>At the heart of Danang City and well-lit as darkness falls, Han River looks so radiant, fairylike and dreamy like a kaleidoscope at scale. Two bridges crossing the river, namely Han River Bridge and the Dragon Bridge, are definitely at their finest as night falls.
                    </p>
                    <div style="text-align: center;margin-top: 15px">
                        <img src="/assets/images/gallery/danang2.jpg" alt="" style="height: 500px; width: 950px">
                    </div>

                    <h3>My Khe Beach:</h3>
                    <p>The closest one to the city center, My Khe Beach, endowed with the crystalline blue water, velvety white sand and towering coconut rows moving to the wind are indeed a gorgeous destination. The beach by night offers visitors an opportunity to sit on the sand, listen to muttering waves and take a deep breath of the salty breezes blowing from afar.
                    </p>
                    <div style="text-align: center;margin-top: 15px">
                        <img src="/assets/images/gallery/danang3.jpg" alt=""  style="height: 500px; width: 950px">
                    </div>

                    <h3>The Marble Mountains:</h3>
                    <p>The Marble Mountains of Danang are draped in the mighty nature and steeped in sacred religious essence, through their mossy cliffs, overwhelming caves and old fashioned architectural masteries.
                    </p>
                    <div style="text-align: center;margin-top: 15px">
                        <img src="/assets/images/gallery/danang4.jpg" alt=""  style="height: 500px; width: 950px">
                    </div>

                    <h3>Son Tra Peninsula:</h3>
                    <p>Passengers should visit Son Tra Peninsula, which embraces a stretchy coastline that spares various fine beaches such as Tien Sa, Da Den, Buddha and dotting places of worship, notably Linh Ung Pagoda and the Chessboard Peak.
                    </p>
                    <div style="text-align: center;margin-top: 15px">
                        <img src="/assets/images/gallery/danang5.jpg" alt=""  style="height: 500px; width: 950px">
                    </div>

                </div>
                <hr>
                <div class="tour_head1 hotel-com-color">
                    <h3>Cuisine</h3>
                    <p>Those who have ever set foot in Danang can hardly escape its matrix of local, from Vietnamese rice crepes, fish terrine rice vermicelli, meaty stock rice vermicelli, spider crab soup and rice sheets with boiled pork to grilled pork skewers or chicken rice… In particular, a delicacy of the city that visitors can hardly miss out is signature Quang Nam noodles. Big, broad and thick noodle strands are mixed with a special, dense and fine broth steamed out of pork bones and served with corianders, bean sprouts and thinly sliced banana bulbs that altogether contribute to the dish’s harmonious blending of flavors.
                    </p>
                    <p>On a sunny day, a glass of durian compote immediately cools down and puts your mind at ease, thanks to the meaty, buttery durian combined with sweet, dense coconut extract, fresh milk and cool jelly. Durian compote is ubiquitous in every nook and cranny in Vietnam, but the signature taste of this kind in Danang is simply too hard to beat.
                    </p>

                    <div style="text-align: center;margin-top: 15px">
                        <img src="/assets/images/gallery/danang6.jpg" alt=""  style="height: 500px; width: 950px">
                    </div>
                </div>
                <hr>
                <div class="col-md-6">
                    <h4>Are you excited about what we introduce?</h4>
                    <h4>Let's experience it now!</h4>
                    <a href="{{url("/")}}"  class="col-md-3 hot-page2-alp-quot-btn spec-btn-text">Book Now</a>
                </div>

            </div>
        </div>
    </section>
@endsection
