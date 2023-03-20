@extends('layouts.app')
@section("title","Singapore")
@section('content')
    <section>
        <div class="rows inner_banner inner_banner_2">
            <div class="container">
                <h2><span>Singapore - Asia paradise for party lover</span></h2>
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
                        If you are looking for a dynamic experience and cultural explosion but don't want to travel a very long distance, Singapore is the perfect choice then. Being the smallest country in Southeast Asia, Singapore is known as one of the four Asian dragons because of its miraculous economic development. Coming to Singapore, you can expect experiences from enjoying the breathtaking skyline at Marina Bay, shopping at Bugis Street and interacting with the multi-ethnic people here. The right time to have fun in Singapore is from February to April when the rainy season has just ended.
                    </h3>
                </div>
                <hr>
                <div class="tour_head1 hotel-com-color" style="text-align: center">
                    <img src="/assets/images/gallery/singapore1.jpg" alt="" >
                </div>
                <hr>
                <!--====== ROOMS: HOTEL BOOKING ==========-->
                <!--====== ABOUT THE TOUR ==========-->
                <div class="tour_head1 hotel-com-color">
                    <h3>1. Gardens by the Bay:</h3>
                    <p>As one of the unique symbols of the city of Singapore, the scenario of Gardens by the Bay is like an alien garden with giant Supertree Groves. These 30m tall supertrees capture light energy from the sun during the day and turn the garden into a vibrantly colorful light show when night falls. There are also many types of flowers and plants from tropical and temperate regions, allowing visitors to explore in the space of a unique and strange "alien garden".
                    </p>
                    <div style="text-align: center;margin-top: 15px">
                        <img src="/assets/images/gallery/singapore2.jpg" alt="" style="height: 500px; width: 950px">
                    </div>

                    <h3>2. Botanic Gardens:</h3>
                    <p>Setting foot in the Garden City without visiting the Botanical Gardens is a pity when traveling to Singapore. This complex is more than 74 hectares wide and is divided into many small gardens such as National Orchid Garden, Ginger Garden, Rainforest, Evolution Garden and Children's Garden. Serving rich flora species as well as significant historical and cultural development, Singapore Botanic Gardens has been recognized by UNESCO as a World Cultural Heritage.
                    </p>
                    <div style="text-align: center;margin-top: 15px">
                        <img src="/assets/images/gallery/singapore3.jpg" alt=""  style="height: 500px; width: 950px">
                    </div>
                </div>
                <hr>
                <div class="tour_head1 hotel-com-color">
                    <h3>Cuisine</h3>
                    <p>Singapore's population is only about 6 million people, but it includes many different ethnic groups (Indian, Chinese, Malay, Arab,...), followed by a diversity in the cuisine here.
                    </p>
                    <p>If you only have one day to discover specialties in Singapore, plan a reasonable schedule so you can enjoy the most outstanding dishes while still giving your stomach needed time to digest. Start your day like a local with a Singaporean breakfast of kaya toast and a strong cup of coffee. There are plenty of options for lunch, but make sure you don't miss out on Chilli Crab, Laksa (spicy coconut vermicelli) or Singapore chicken rice. Finally, roll it up with a dimsum dinner at Din Tai Fung to embrace yourself for a day of multi-ethnic cuisine and a feast of taste buds.
                    </p>
                    <p>Singapore also owns Michelin-starred restaurants with the cheapest prices in the world. Surely you would never think that a Michelin-starred restaurant is a small stall in a shopping center, serving you a single dish of chicken (with rice or noodles) and costs you only 2 SGD.
                    </p>
                    <div style="text-align: center;margin-top: 15px">
                        <img src="/assets/images/gallery/singapore5.jpg" alt=""  style="height: 500px; width: 950px">
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
