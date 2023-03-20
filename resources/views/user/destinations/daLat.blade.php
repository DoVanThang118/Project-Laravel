@extends('layouts.app')
@section("title","Dalat")
@section('content')
    <section>
        <div class="rows inner_banner inner_banner_2">
            <div class="container">
                <h2><span>Da Lat – A little Paris of Vietnam</span></h2>
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
                        Located on Lam Vien Highlands at the height of 1,500m from sea level, Dalat is compared to a romantic and elegant lady, adorned with vast patches of beaming radiant blossoms, and drenched in the eerie frost. Dalat is a little Paris, dotted with old fashioned French structures that have survived over a century. The city was the first and most complete resort town of the French in Vietnam, as originally  planned in the first half of the 19th century and also the largest resort town of Indochina.  </h3>
                </div>
                <hr>
                <div class="tour_head1 hotel-com-color" style="text-align: center">
                    <img src="/assets/images/gallery/dalat1.jpg" alt="" >
                </div>
                <hr>
                <!--====== ROOMS: HOTEL BOOKING ==========-->
                <!--====== ABOUT THE TOUR ==========-->
                <div class="tour_head1 hotel-com-color">
                    <h3>Prenn Pass:</h3>
                    <p>Walking along the meandering trek of Prenn Pass encircled by muttering green pine forests, one can play with mischievous rays of the sun that gently dapple through the foliage and fall on the way, touch your shoulders and hair, while breezes swirl and sing a rhyme of natural freshness and inner peace from within.
                    </p>
                    <p>Prenn Pass leads you to the city center. Here visitors should roam Lang Biang Mountain, Cu Lan Village, strawberry farms, Love Valley, Cau Dat tea hills, Datanla Waterfall, Pongour Waterfall and surrounding pine forests to fully make the most of the city’s superb wilderness.</p>
                    <div style="text-align: center;margin-top: 15px">
                        <img src="/assets/images/gallery/dalat2.jpg" alt="" style="height: 500px; width: 950px">
                    </div>

                    <h3>The Lonesome Pines:</h3>
                    <p>Let’s do the check-in by the Lonesome Pines on Thien Phuc Hill or by Dan Kia Lake – Golden Fountain. They are pine trees growing by themselves, which  attract swarms of couples owing to their romantic  surroundings and widespread rumors that every couple after the visit is meant for a split.</p>
                    <div style="text-align: center;margin-top: 15px">
                        <img src="/assets/images/gallery/dalat3.jpg" alt=""  style="height: 500px; width: 950px">
                    </div>

                    <h3>Old French structures:</h3>
                    <p>A must-see in Dalat is unique French architecture that came to define the cityscape. The Rooster Church, Dalat Pedagogical College, Dalat Train Station, Bao Dai Mansion, etc. are all characterized by  iconic architectural patterns and intriguing anecdotes.</p>
                    <div style="text-align: center;margin-top: 15px">
                        <img src="/assets/images/gallery/dalat4.jpg" alt=""  style="height: 500px; width: 950px">
                    </div>

                    <h3>Old French villas:</h3>
                   <p>At the heart of the city, looming under leafy pine glade are thousands of old villas of the former resort town, which still preserve French essences through their tiles, brick walls and window panes.
                   </p>
                    <div style="text-align: center;margin-top: 15px">
                        <img src="/assets/images/gallery/dalat5.jpg" alt=""  style="height: 500px; width: 950px">
                    </div>

                </div>
                <hr>
                <div class="tour_head1 hotel-com-color">
                    <h3>Cuisine</h3>
                    <p>Dalat cuisine earned its  reputation  for  snack vendors and unique bazaars. Starchy căn cakes, chicken gizzard wet cakes, avocado ice cream, grilled Vietnamese rice sheets, artichoke soup with steamed pork thigh, Dalat vegetables hotpot and Dalat sturgeon hotpot are some must-tries of the highland city. Amidst the frosty breezes, it’s perfect to take a  lazy stroll through the heart of the town to relish good treats, their signature salty, spicy, fatty and meaty flavor,  Given its moderate climate, Dalat is home to fruit abundance, particularly strawberries. One should definitely pick some strawberry baskets that prove to be so  tempting  to friends and families. Lustrous and velvety red strawberries can melt and sweeten even most hardened mortal hearts. Dalat locals even make zillions of good treats out of strawberries, notably jam, ice cream and shaken strawberry mix to take all gourmands by storm.</p>

                    <div style="text-align: center;margin-top: 15px">
                        <img src="/assets/images/gallery/dalat6.jpg" alt=""  style="height: 500px; width: 950px">
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
