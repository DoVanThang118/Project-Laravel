@extends('layouts.app')
@section("title","Payment")
@section('content')
    <section>
        <div class="db">

            <div class="db-l">
                <div class="db-l-1">
                    <ul>
                        <li>
                            <img src="/assets/images/db-profile.jpg" alt="" />
                        </li>
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

            <div class="db-2">
                <div class="db-2-com db-2-main">
                    <h4>Enter Customers Details </h4>
                    <div class="db-2-main-com db2-form-pay db2-form-com">
                        <form style="background-color: #fafafa"  class="col s12"  method="post" action="{{route('placeOrder')}}">
                            @csrf
                            @for($i=0;$i<2;$i++)
                                <p></p>
                                <p></p>
                                <h4>Custormer {{$i+1}}</h4>

                                <div class="row">
                                    <div class="input-field col s12">
                                        <h5>Name</h5>
                                        <input name="order[{{$i}}][name]" type="text" class="validate">
                                    </div>
                                    <div class="input-field col s12 ">
                                        <h5>Address</h5>
                                        <input name="order[{{$i}}][cccd]" type="text" class="validate">
                                    </div>
                                </div>
    {{--                                <div style="margin-bottom: 30px" class="row">--}}
    {{--                                    <div class="input-field col s12 m6">--}}
    {{--                                        <h5>Phone Number</h5>--}}
    {{--                                        <input name="phone[]" type="text" class="validate">--}}
    {{--                                    </div>--}}
    {{--                                    <div class="input-field col s12 m6">--}}
    {{--                                        <h5>Date of birth</h5>--}}
    {{--                                        <input name="birthday[]" type="date" required>--}}
    {{--                                    </div>--}}
                                {{--                                </div>--}}
                                <hr>
                            @endfor

                            <div class="row">
                                <span class="db-pay-amount">Total money: ${{$grand_total}}</span>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <button type="submit"  class="waves-effect waves-light full-btn">SUBMIT</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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

@endsection
