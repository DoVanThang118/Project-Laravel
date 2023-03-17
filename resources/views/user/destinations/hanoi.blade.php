@extends('layouts.app')
@section("title","Hanoi")
@section('content')
    <section>
        <div class="rows inner_banner inner_banner_2">
            <div class="container">
                <h2><span>Hanoi - A thousand year old capital</span></h2>
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
                        Hanoi is located on the convergence of the Red River and  the Northern delta, hence  a political, economic and cultural hub of Vietnam. For generations, the imperial citadel has always maintained  its romantic essence , as well as  the bustle  of a metropolis, in addition to thousands of intact architectural gems that speak volumes of the nation’s history. The cultural charm of Hanoi is best demonstrated by  the elegant mannerism  of the city dwellers.
                    </h3>
                </div>
                <hr>
                <div class="tour_head1 hotel-com-color" style="text-align: center">
                    <img src="/assets/images/gallery/hn1.jpg" alt="" >
                </div>
                <hr>
                <!--====== ROOMS: HOTEL BOOKING ==========-->
                <!--====== ABOUT THE TOUR ==========-->
                <div class="tour_head1 hotel-com-color">
                    <h3>Temple of Literature – the Imperial University: It is the first academy of </h3>
                    <p>It is the first academy of Vietnam, hence  a symbol of lifelong learning. There are  82 stone stelae that hold  honorary
                        titles of doctorate candidates over centuries of imperial examination. Annually, in preparation for the much-vaunted
                        national examination, candidates come here and pray for stellar results.

                    </p>
                    <div style="text-align: center;margin-top: 15px">
                        <img src="/assets/images/gallery/hn2.jpg" alt="" style="height: 500px; width: 950px">
                    </div>

                    <h3>Thang Long Imperial Citadel:</h3>
                    <p>At the heart of the glamorous capital, this long surviving complex appears ancient and quiet,
                        in the name of Thang Long Imperial Citadel. The citadel was the host of  many powerful dynastic clans over centuries of
                        feudal history, with inner palaces, colossal and solid forts, walls and bastions, notably Doan Gate, the North Gate,
                        Kinh Thien Palace and Hanoi Flagstaff…</p>
                    <div style="text-align: center;margin-top: 15px">
                        <img src="/assets/images/gallery/hn3.jpg" alt=""  style="height: 500px; width: 950px">
                    </div>

                    <h3>Old Quarter:</h3>
                    <p>The iconic 36 streets of Hanoi form the Old Quarter encircling Hoan Kiem Lake.
                        Their names  typically start with “Hàng” (Workshop): The Votives, The Silversmith, The Crimson Silk, etc.
                        These streets were originally planned by the French and now are the venues of recreations, cultural shows and sports.
                        Visitors would be overwhelmed by a matrix of homestay units, bars, pubs, lounges, cafés,
                        restaurants and souvenir boutiques. </p>
                    <div style="text-align: center;margin-top: 15px">
                        <img src="/assets/images/gallery/hn4.jpg" alt=""  style="height: 500px; width: 950px">
                    </div>

                    <h3>Ba Vi National Park:</h3>
                    <p>Moving to the suburbs, it would be an amazing experience to spend a day in Ba Vi National Park.
                        It’s an ideal getaway given its pure air, moderate weather  and beautiful nature. In November,
                        Mexican sunflowers cover the hills in bright gold, making up a breathtaking picture of nature</p>
                    <div style="text-align: center;margin-top: 15px">
                        <img src="/assets/images/gallery/hn5.jpg" alt=""  style="height: 500px; width: 950px">
                    </div>

                </div>
                <hr>
                <div class="tour_head1 hotel-com-color">
                    <h3>Cuisine</h3>
                    <p>Hanoian cuisine is a league of its own, as the city dwellers hold their foods to very high standards,
                        on a seasonal basis and rely on sophisticated mixes of ingredients and fulfilling enjoyments of a delicacy.
                        There are countless Hanoian treats that one can’t afford to miss, including the phở, rice vermicelli soup,
                        Vong Village baby green rice, La Vong fish terrine or West Lake shrimp cakes…
                    </p>
                    <p>Hanoian phở is basically centered on beef. The broth must be smoke hot, sweetened with signature spicy cinnamons and anises and densed with pure white, chewy phở strands and soft, thinly sliced beef. Once served, a bit of spring onions, chili sauce, vinegar or lemon extract is added to garnish the accentuated flavors.</p>
                    <p>While the phở must be served hot, baby green rice is a gentle reminder of autumn’s blessings, made of baby rice grains just after ear growing phase. The grains are green, soft, buttery and chewy, of course mildly sweet aftertaste that keep lingering and obsessing any first-time guests.</p>

                    <div style="text-align: center;margin-top: 15px">
                        <img src="/assets/images/gallery/hn6.jpg" alt=""  style="height: 500px; width: 950px">
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


