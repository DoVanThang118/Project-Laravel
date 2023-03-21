@extends('layouts.app')
@section("title","Paris")
@section('content')
    <section>
        <div class="rows inner_banner inner_banner_2">
            <div class="container">
                <h2><span>Paris - The most picturesque capital ever</span></h2>
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
                        When it comes to comparing Europe to a classic symphony, the romantic French city, Paris, would be the opening movement full of sweetness and passion. Since the 17th century, the "City of Light" has been considered a major world center for finance, diplomacy, commerce, fashion, cuisine and the arts. The image of luxurious Paris is not only marked by iconic architectural works but also reflected in the poetic lifestyle of the people here. The best time to visit Paris is from April to June and September to November when the weather in Paris is relatively mild and pleasant.
                    </h3>
                </div>
                <hr>
                <div class="tour_head1 hotel-com-color" style="text-align: center">
                    <img src="/assets/images/gallery/paris1.jpg" alt="" >
                </div>
                <hr>
                <!--====== ROOMS: HOTEL BOOKING ==========-->
                <!--====== ABOUT THE TOUR ==========-->
                <div class="tour_head1 hotel-com-color">
                    <h3>1. Eiffel Tower:</h3>
                    <p>Officially opened in 1889, the Eiffel Tower used to be the tallest building in the world and has maintained this position for 40 years - a symbol of the light capital. Walking up the 300m high tower is a surprisingly astounding experience of French travel. With a panoramic view of the whole capital below, this is, without any doubt, a place that visitors cannot ignore when traveling to Paris.
                    </p>
                    <div style="text-align: center;margin-top: 15px">
                        <img src="/assets/images/gallery/paris2.jpg" alt="" style="height: 500px; width: 950px">
                    </div>

                    <h3>2. Arc de Triomphe: </h3>
                    <p>The Arc de Triomphe is located on the square Étoile, standing at the western end of the Champs-Élysées. In 1806, the Arc de Triomphe was started construction to honor the victory of the French army, according to the order of Emperor Napoleon Bonaparte. The sides of the work are carved with many reliefs, monuments and names of famous figures during the Revolution and Empire period. It’s not an exaggeration to say that the Arc de Triomphe is the illustrious place to mark the triumph in the history of France. Until now, this place is still the venue for important festivals and events of the city of Paris.
                    </p>
                    <div style="text-align: center;margin-top: 15px">
                        <img src="/assets/images/gallery/paris3.jpg" alt=""  style="height: 500px; width: 950px">
                    </div>
                </div>
                <hr>
                <div class="tour_head1 hotel-com-color">
                    <h3>Cuisine</h3>
                    <p>If you have traveled to Bangkok, you must definitely go to explore the street food here to experience the most typical flavors of the Golden Temple country.
                    </p>
                    <p>The most basic menu for a culinary experience in Bangkok is the trio of tom yum, pad thai and mango sticky rice. This is a "set menu" not to be missed when discovering Bangkok cuisine in particular and Thailand in general, even if you only stay here within an hour for transit at the airport.
                    </p>
                    <p>If you plan for a “food tour” of Bangkok cuisine, choose Khao San Road as the ideal destination for the purpose of filling your stomach and satisfying your taste buds. Khao San is especially bustling and noisy at night, a gathering place of street food from familiar to strange such as crispy fried insects. A typical taste for Thai people is the spicy taste found in Thai hot pot, tom yum, som tam, curry, etc. Otherwise, visitors can experience all of these dishes in some locations (for example: Banglamphu market, Soi 38 Sukhumvit area...) to feel the full flavor that can only be enjoyed in Thailand.
                    </p>
                    <div style="text-align: center;margin-top: 15px">
                        <img src="/assets/images/gallery/paris4.jpg" alt=""  style="height: 500px; width: 950px">
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
