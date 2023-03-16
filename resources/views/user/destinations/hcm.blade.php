@extends('layouts.app')
@section("title","HoChiMinhCity")
@section('content')
    <section>
        <div class="rows inner_banner inner_banner_2">
            <div class="container">
                <h2><span>Ho Chi Minh City – The city that never sleeps</span></h2>
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
                            Ho Chi Minh City is the largest metropolis of Vietnam, a political, economic and cultural hub of the south.
                            It is called “The city that never sleeps” because of  its bustling lifestyle and colorful charm of well-lit neon
                            lights at night. This glamorous city attracts visitors by quintessentially Western architecture dating back to the
                            19th century and a variety of local cultural and historical sites, as well as its enviable culinary diversity.
                        </h3>
                    </div>
                <hr>
                <div class="tour_head1 hotel-com-color" style="text-align: center">
                <img src="/assets/images/listing/home1.jpg" alt="" >
                </div>
                <hr>
                    <!--====== ROOMS: HOTEL BOOKING ==========-->
                    <!--====== ABOUT THE TOUR ==========-->
                <div class="tour_head1 hotel-com-color">
                            <h3>Palace of Independence:</h3>
                            <p>Palace of Independence is a historical landmark that is tied to
                                various milestones  of the nation. On the 15th of November, 1975, there was a Political Consultative
                                Conference featuring delegates from North and South Vietnam to discuss the reunification of Vietnam,
                                hence its name the Palace of Unification.</p>
                    <div style="text-align: center;margin-top: 15px">
                        <img src="/assets/images/gallery/s1.jpg" alt="" style="height: 500px; width: 950px">
                    </div>

                    <h3>Notre Dame de Saigon:</h3>
                    <p>Ho Chi Minh City is famous for French colonial buildings, including the People’s Committee City Hall, Notre Dame,
                        the Municipal Theater and the Central Post Office… Notre Dame is defined by its hybrid Roman and Gothic architecture,
                        most notably red brick walls and two towering steeples. </p>
                    <div style="text-align: center;margin-top: 15px">
                        <img src="/assets/images/gallery/s2.jpg" alt=""  style="height: 500px; width: 950px">
                    </div>

                    <h3>Buu Long Pagoda:</h3>
                    <p>In addition to traditional pagodas, Buu Long pagoda is a unique religious place. It perfectly blends Thai,
                        Indian and Vietnamese influences, with white as the primary tone  and golden top designed in a royal manner. </p>
                    <div style="text-align: center;margin-top: 15px">
                        <img src="/assets/images/gallery/s3.jpg" alt=""  style="height: 500px; width: 950px">
                    </div>

                    <h3>Cu Chi Tunnel:</h3>
                    <p>Discover local history  by visiting Cu Chi Tunnel, a deep underground matrix. It was the military base of
                        Cu Chi soldiers  during the Vietnam War. It has a network of tunnels that stretches for 200km,
                        looking like a gigantic underground spider web with moats, barracks and functional cells..</p>
                    <div style="text-align: center;margin-top: 15px">
                        <img src="/assets/images/gallery/s4.jpg" alt=""  style="height: 500px; width: 950px">
                    </div>

                </div>
                <hr>
                <div class="tour_head1 hotel-com-color">
                    <h3>Cuisine</h3>
                    <p>Ho Chi Minh City is a food haven of countless treats that reflect  the cultural diversity of Vietnam.
                        Some recommended dishes are  Saigonese steamed broken rice, Phnom Penh kuy teav and Cu Chi calves.</p>
                    <p>Simple as it is, steamed broken rice incorporates all culinary essence here. The rice is broken, which once cooked yields the sweet, flaky and aromatic flavors, served  with grilled pork ribs, grated pork skin, pork terrine, omelets and several slices of tomato and cucumber. Pork ribs are so tender that their sour and sweet taste keeps us going again and again.
                    </p>
                    <p>A stroll around the city inevitably leads you to various rice crepes, rice sheets, steamed snail and grilled cheesy quail egg vendors. The typical southern rice crepes are bright yellow, crunchy and generously stuffed with minced pork, prawns and cool bean sprouts, which are collectively bundled with corianders and dipped in fish sauce. Their meaty and fresh raw taste goes well with mild corianders and a bit of spicy and sweet dipping sauce.
                    </p>

                    <div style="text-align: center;margin-top: 15px">
                        <img src="/assets/images/gallery/s5.jpg" alt=""  style="height: 500px; width: 950px">
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

