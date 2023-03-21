@extends('layouts.app')
@section("title","San Francisco")
@section('content')
    <section>
        <div class="rows inner_banner inner_banner_2">
            <div class="container">
                <h2><span>San Francisco - The golden gate to American dream</span></h2>
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
                        As part of the famous state of California, the city of San Francisco has a bold American imprint with its hippie culture and cutting-edge technological revolutions. Compared to familiar destinations such as New York or the capital Washington, D.C., San Francisco is younger and "cooler". Americans still say "If you haven't traveled to San Francisco, you haven't been to America". The best time to pack up your stuff to explore this dynamic city is from June to August yearly, when the weather in San Francisco is sunny, it is suitable for visitors to set foot on the Golden Gate Bridge and reach the American dream.
                    </h3>
                </div>
                <hr>
                <div class="tour_head1 hotel-com-color" style="text-align: center">
                    <img src="/assets/images/gallery/sanfrancisco1.jpg" alt="" >
                </div>
                <hr>
                <!--====== ROOMS: HOTEL BOOKING ==========-->
                <!--====== ABOUT THE TOUR ==========-->
                <div class="tour_head1 hotel-com-color">
                    <h3>1. Golden Gate Bridge:</h3>
                    <p>This is the most outstanding symbol, approved by the Association of Civil Engineers and recognized by the United States as one of the wonders of the modern world. This iconic 2,700-meter-long suspension bridge connects San Francisco at the northern tip with Marin County near the town of Sausalito in the south. Visitors with lots of San Francisco travel experience often visit the Golden Gate Bridge early in the morning, through Presidio Park to enjoy the multi-angle beauty of the bridge in the radiant sunrise.
                    </p>
                    <div style="text-align: center;margin-top: 15px">
                        <img src="/assets/images/gallery/sanfrancisco2.jpg" alt="" style="height: 500px; width: 950px">
                    </div>

                    <h3>2. Alcatraz Island:</h3>
                    <p>One of the tourist attractions in San Francisco that appeal to people from all walks of life the most. This island was once a military stronghold, then became the famous federal prison of the United States. The curiosity about the mysteries urges visitors to find the answers for themselves.
                    </p>
                    <div style="text-align: center;margin-top: 15px">
                        <img src="/assets/images/gallery/sanfrancisco3.jpg" alt=""  style="height: 500px; width: 950px">
                    </div>
                </div>
                <hr>
                <div class="tour_head1 hotel-com-color">
                    <h3>Cuisine</h3>
                    <p>America is a country with diverse ethnicities and cultures, it’s not an exaggeration to say that "specialties" in the cities are more than rich. The best one in the city of San Francisco is probably the sandwich, one-of-a-kind street food, which is tasty and far from expensive. The price only starts from 10 to 15 dollars, surprisingly, visitors can enjoy up to 200 different types of sandwiches with tons of unique flavors within the city of San Francisco.
                    </p>
                    <p>Dungeness crab in San Francisco is another one that should be added to your bucket list. The soft, fragrant crab meat and the crab roe mixed in a rich sauce will be an unforgettable culinary experience during a visit to San Francisco. This distinctive dish is often served with a glass of white wine and should be served by hand to fully enjoy the flavor.
                    </p>
                    <div style="text-align: center;margin-top: 15px">
                        <img src="/assets/images/gallery/sanfrancisco4.jpg" alt=""  style="height: 500px; width: 950px">
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
