@extends('layouts.app')
@section("title")
    @yield("title","The Travel")
@endsection
@section('content')
    <!--DASHBOARD-->
    <section>
        <div class="db">
            <!--LEFT SECTION-->
            <div class="db-l">
                <div class="db-l-1">
                    <ul>
                        <li><img src="/assets/images/db-profile.jpg" alt="" />
                        </li>
                        <li><span>80%</span> profile compl</li>
                        <li><span>18</span> Notifications</li>
                    </ul>
                </div>
                <div class="db-l-2">
                    <ul>
                        <li>
                            <a href="{{url("/profile")}}"><img src="/assets/images/icon/dbl6.png" alt="" /> My Profile</a>
                        </li>
                        <li>
                            <a href="{{url("/user/cart")}}"><img src="/assets/images/icon/dbl1.png" alt="" /> Your Bookings</a>
                        </li>
                        <li>
                            <a href="{{url("/checkout")}}"><img src="/assets/images/icon/dbl9.png" alt="" /> Payments</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--CENTER SECTION-->
            @yield('center-content')
            <!--RIGHT SECTION-->
            <div class="db-3">
                <h4>Notifications</h4>
                <ul>
                    <li>
                        <a href="#!"> <img src="/assets/images/icon/dbr1.jpg" alt="" />
                            <h5>50% Discount Offer</h5>
                            <p>All the Lorem Ipsum generators on the</p>
                        </a>
                    </li>
                    <li>
                        <a href="#!"> <img src="/assets/images/icon/dbr2.jpg" alt="" />
                            <h5>paris travel package</h5>
                            <p>All the Lorem Ipsum generators on the</p>
                        </a>
                    </li>
                    <li>
                        <a href="#!"> <img src="/assets/images/icon/dbr3.jpg" alt="" />
                            <h5>Group Trip - Available</h5>
                            <p>All the Lorem Ipsum generators on the</p>
                        </a>
                    </li>
                    <li>
                        <a href="#!"> <img src="/assets/images/icon/dbr4.jpg" alt="" />
                            <h5>world best travel agency</h5>
                            <p>All the Lorem Ipsum generators on the</p>
                        </a>
                    </li>
                    <li>
                        <a href="#!"> <img src="/assets/images/icon/dbr5.jpg" alt="" />
                            <h5>special travel coupons</h5>
                            <p>All the Lorem Ipsum generators on the</p>
                        </a>
                    </li>
                    <li>
                        <a href="#!"> <img src="/assets/images/icon/dbr6.jpg" alt="" />
                            <h5>70% Offer 2018</h5>
                            <p>All the Lorem Ipsum generators on the</p>
                        </a>
                    </li>
                    <li>
                        <a href="#!"> <img src="/assets/images/icon/dbr7.jpg" alt="" />
                            <h5>Popular Cities</h5>
                            <p>All the Lorem Ipsum generators on the</p>
                        </a>
                    </li>
                    <li>
                        <a href="#!"> <img src="/assets/images/icon/dbr8.jpg" alt="" />
                            <h5>variations of passages</h5>
                            <p>All the Lorem Ipsum generators on the</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--END DASHBOARD-->
@endsection
