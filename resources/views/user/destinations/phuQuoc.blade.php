@extends('layouts.app')
@section("title","Phu Quoc")
@section('content')
    <section>
        <div class="rows inner_banner inner_banner_2">
            <div class="container">
                <h2><span>Phu Quoc – The Emerald Island</span></h2>
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
                        Nested in the southwest of Vietnam in the Gulf of Thailand, Phu Quoc Island is indeed the cherished gem of Vietnam. Its tranquil and heavenly charm is further accentuated by the sapphire blue sea, crescent white sandy beaches on which rise green coconut rows, ever changing kaleidoscopic coral reefs and dark green perennial forests. In the middle of nature, human figures modestly adorn the picture, in fishing villages and on borderless pepper farms.
                    </h3>
                </div>
                <hr>
                <div class="tour_head1 hotel-com-color" style="text-align: center">
                    <img src="/assets/images/gallery/pq1.jpg" alt="" >
                </div>
                <hr>
                <!--====== ROOMS: HOTEL BOOKING ==========-->
                <!--====== ABOUT THE TOUR ==========-->
                <div class="tour_head1 hotel-com-color">
                    <h3>Long Beach: </h3>
                    <p>Phu Quoc is famous for its untouched, peaceful islets and breathtaking beaches. Having the longest and finest coastline of Phu Quoc, the Long Beach attracts surfers and beach goers with its rippling waves against the gleaming golden sand, muttering coconut rows in the winds, rapids and looming fishing villages amidst the sea. At sunset, the sky and the sea are shining bright red.
                    </p>
                    <div style="text-align: center;margin-top: 15px">
                        <img src="/assets/images/gallery/pq2.jpg" alt="" style="height: 500px; width: 950px">
                    </div>

                    <h3>Phu Quoc National Park:</h3>
                    <p>On the northeast of the island lies Phu Quoc National Park. In the recess of plying perennial roots, a crystalline stream flows through, a waterfall tosses bubbles and wild animals roam. There are three major cordilleras, namely Ham Ninh, Ham Rong and Ganh Dau bordering a breathtaking coastline.
                    </p>
                    <div style="text-align: center;margin-top: 15px">
                        <img src="/assets/images/gallery/pq3.jpg" alt=""  style="height: 500px; width: 950px">
                    </div>

                    <h3>Ham Ninh Fishing Village:</h3>
                    <p> At the base of Ham Ninh Mountain lies a calm fishing village In the middle of  the tawdry dusk. From the undulating roofs by the coast and floating rafters off the shore, fishermen get aboard their vessels to embark on a voyage against the waves and harvest bountiful resources of the sea.
                    </p>
                    <div style="text-align: center;margin-top: 15px">
                        <img src="/assets/images/gallery/pq4.jpg" alt=""  style="height: 500px; width: 950px">
                    </div>

                    <h3>Phu Quoc Prison::</h3>
                    <p>Beside beautiful nature, Phu Quoc is richly filled with historical and cultural values. Phu Quoc Prison once held revolutionary political prisoners in captivity during the Vietnam War, and was named the Hell on Earth owing to numerous brutal torture practice here. These days, the torture is reenacted through wax figures that shake visitors to their core.
                    </p>
                    <div style="text-align: center;margin-top: 15px">
                        <img src="/assets/images/gallery/pq5.jpg" alt=""  style="height: 500px; width: 950px">
                    </div>

                </div>
                <hr>
                <div class="tour_head1 hotel-com-color">
                    <h3>Cuisine</h3>
                    <p>Phu Quoc cuisine is mostly famous for fresh seafood such as steamed lobsters, steamed spider crabs with lemongrass, sea cucumber porridge, grilled urchins, grilled abalones, saurels, tram mushroom soup with seafood, grilled groupers or herring salad rolls…
                    </p>
                    <p>Phu Quoc boasts a signature  specialty  from the sea, called fish sauce which is made from the best anchovies. Phu Quoc fish sauce is amber brown, characteristically aromatic, pungent, salty and naturally fatty. The fish sauce is used as spice to amplify the distinct tastes of food.
                    </p>
                    <p>Walking Around the island, you will discover  delicious cuisine, such as “horn” rice vermicelli, steamed chicken with green chili, palmyra palm sweetened sponge cakes, khéo cakes, fish terrine soupy cakes and myrtle liquor… “Horn” rice vermicelli is a common dish  among local families, which is made from  well-pounded northern yellowtail scads and deep fried with garlic. Fleshy scads and buttery coconut juice are mixed with mildly spicy chili to perfect the senses.</p>

                    <div style="text-align: center;margin-top: 15px">
                        <img src="/assets/images/gallery/pq6.jpg" alt=""  style="height: 500px; width: 950px">
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


