@extends('layouts.app')
@section("title","Bangkok")
@section('content')
    <section>
        <div class="rows inner_banner inner_banner_2">
            <div class="container">
                <h2><span>Bangkok - Southeast Asia's heaven off shopping & amusements</span></h2>
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
                        If you are in the most beautiful youth with "moving" energy overflowing in your veins, let’s travel to Thailand and get yourself lost in the heart of Bangkok by all means. It is hard to find a second Bangkok, where you can both peace your mind in the sacred atmosphere of the temples and unwind your mind freely at busy shopping centers and local night markets. The best time to visit Bangkok is from November to April every year when many exciting festivals are held.
                    </h3>
                </div>
                <hr>
                <div class="tour_head1 hotel-com-color" style="text-align: center">
                    <img src="/assets/images/gallery/bangcoc1.jpg" alt="" >
                </div>
                <hr>
                <!--====== ROOMS: HOTEL BOOKING ==========-->
                <!--====== ABOUT THE TOUR ==========-->
                <div class="tour_head1 hotel-com-color">
                    <h3>1. Thai Royal Palace & Temple of the Emerald Buddha (Wat Phra Kaew):</h3>
                    <p>These are two iconic landmarks of Bangkok's tourism industry, located right next to each other, convenient for visitors to visit. At a glance, the Thai Royal Palace exudes a grandeur and majesty, but if you look closely, you will find that the architecture here is also a combination of the quintessence of China, France, Italy and ancient Thailand, representing a century's work. Next to the Palace is the Temple of the Emerald Buddha with a jade Buddha statue - a treasure that brings a prosperous and happy life to the country. Please note that when visiting these two sacred places, visitors should wear long and polite clothes.
                    </p>
                    <p>Prenn Pass leads you to the city center. Here visitors should roam Lang Biang Mountain, Cu Lan Village, strawberry farms, Love Valley, Cau Dat tea hills, Datanla Waterfall, Pongour Waterfall and surrounding pine forests to fully make the most of the city’s superb wilderness.</p>
                    <div style="text-align: center;margin-top: 15px">
                        <img src="/assets/images/gallery/bangcoc2.jpg" alt="" style="height: 500px; width: 950px">
                    </div>

                    <h3>2. Temple of Dawn (Wat Arun):</h3>
                    <p>Wat Arun is known as the most stunning temple among the beautiful temples in Bangkok. The temple is located on the west bank of the Chao Phraya River, with a majestic architecture of more than 70m of height, surrounded by a wide range of small pieces of stained glass and ceramics. Although the name is Temple of Dawn, Wat Arun is prominent for its moving sunset scene thanks to its prime location. Visitors can combine the experience of watching the sunset at the temple in a cruise on the Chao Phraya River to fully appreciate the brilliant sunset of Bangkok.
                    </p>
                    <div style="text-align: center;margin-top: 15px">
                        <img src="/assets/images/gallery/bangcoc3.jpg" alt=""  style="height: 500px; width: 950px">
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
                        <img src="/assets/images/gallery/bangcoc4.jpg" alt=""  style="height: 500px; width: 950px">
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
