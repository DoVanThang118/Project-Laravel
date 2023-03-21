@extends('layouts.app')
@section("title","London")
@section('content')
    <section>
        <div class="rows inner_banner inner_banner_2">
            <div class="container">
                <h2><span>London - The mits city of England</span></h2>
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
                        Situated on the poetic Thames River, the United Kingdom’s capital, London, is a masterpiece of a classic, luxurious European city. However, being hidden inside the 2000-year-old capital is the vibrant and prosperous life of the world's leading financial and economic center. Unexpected rain and signature frog is characteristic weather here. Therefore, in order to get once-in-a-lifetime experience, visitors should spend time visiting the British capital between March and August every year, when London's temperature is mild and pleasant. “The land of fog” sometimes has a sudden rain; a small umbrella at your disposal will be surely essential for a perfect visit to London.
                    </h3>
                </div>
                <hr>
                <div class="tour_head1 hotel-com-color" style="text-align: center">
                    <img src="/assets/images/gallery/london1.jpg" alt="" >
                </div>
                <hr>
                <!--====== ROOMS: HOTEL BOOKING ==========-->
                <!--====== ABOUT THE TOUR ==========-->
                <div class="tour_head1 hotel-com-color">
                    <h3>1. Big Ben clock tower:</h3>
                   <p>Considered the iconic architecture of the city of London, it is a must-see destination in the UK. Big Ben clock tower is a historical witness. Having been through many ups and downs, it is still as glorious as an English aristocrat. This famous structure has also been recognized by UNESCO as a World Heritage Site since 1987.
                   </p>
                    <div style="text-align: center;margin-top: 15px">
                        <img src="/assets/images/gallery/london2.jpg" alt="" style="height: 500px; width: 950px">
                    </div>

                    <h3>2. London Eye Wheel:</h3>
                    <p>Referring to the beautiful scenes in London, it is impossible to miss the wheel called London Eye, located on the south bank of the River Thames. On the wheel, visitors will have the opportunity to admire the panoramic view of London. Famous buildings namely Tower of London, Buckingham Palace, London Bridge, Parliament building,... appear right in front of your eyes. In particular, watching the sunset covering the whole city while sitting on the London Eye will be a moment not to be missed in a London trip.
                    </p>
                    <div style="text-align: center;margin-top: 15px">
                        <img src="/assets/images/gallery/london3.jpg" alt=""  style="height: 500px; width: 950px">
                    </div>
                </div>
                <hr>
                <div class="tour_head1 hotel-com-color">
                    <h3>Cuisine</h3>
                    <p>Those who have a lot of London travel experience have certainly fallen in love with traditional restaurants like fish and chips. The dish consists of cod fish filtered into filets, rolled in a mixture of flours and deep fried in oil with small but not too thin potato slices. The combination of flavors comes from the typical British sauce recipe: the fleshy taste of mashed green beans, the sweet and sour taste of ketchup and the slight sourness of a small lemon slice. You can easily find London's traditional fish and chips wrapped in newspaper at fast food restaurants or small street food shops.
                    </p>
                   <p>To experience a day like a true British, visitors here will not be able to miss the famous English breakfast, showing the luxurious and sophisticated lifestyle of the people of the foggy country. A traditional English breakfast consists of bacon, grilled tomatoes, fried or omelet, fried mushrooms, fried or toasted bread with butter, sausage, served with English tea or coffee. In addition, for luxurious check-in photos, visitors can visit tea shops in the late afternoon to enjoy a cup of English tea and experience how to enjoy tea in the real London nobility.
                   </p>
                    <div style="text-align: center;margin-top: 15px">
                        <img src="/assets/images/gallery/london4.jpg" alt=""  style="height: 500px; width: 950px">
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
