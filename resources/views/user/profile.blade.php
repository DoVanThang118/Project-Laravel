@extends('layouts.app')
@section("title","Profile")
@section('content')
    <section>
        <div class="db">
            <!--LEFT SECTION-->
            <div class="db-l">
                <div class="db-l-1">

                    <ul>
                        @if($user->thumbnail == null)
                            <li>
                                <img src="/assets/images/db-profile.jpg" alt="" />
                            </li>
                        @else
                        <li>
                            <img src="{{$user->thumbnail}}" alt="" />
                        </li>
                        @endif
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
            <div class="db-2">
                <div class="db-2-com db-2-main">
                    @if(isset($mes))
                        <h3 style="text-align: center">{{$mes}}</h3>
                    @endif
                    <h4>My Profile</h4>
                    <div class="db-2-main-com db-2-main-com-table">
                        <table class="responsive-table">
                            <tbody>
                            <tr>
                                <td>User Name</td>
                                <td>:</td>
                                <td>{{$user->name}}</td>
                            </tr>
{{--                            <tr>--}}
{{--                                <td>Date of birth</td>--}}
{{--                                <td>:</td>--}}
{{--                                @if($user->birthday == null)--}}
{{--                                    <td style="color: red">The information has not been updated</td>--}}
{{--                                @else--}}
{{--                                    <td>{{$user->birthday}}</td>--}}
{{--                                @endif--}}

{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <td>Gender</td>--}}
{{--                                <td>:</td>--}}
{{--                                @if($user->sex == null)--}}
{{--                                    <td style="color: red">The information has not been updated</td>--}}
{{--                                @else--}}
{{--                                    <td>{{$user->sex}}</td>--}}
{{--                                @endif--}}
{{--                            </tr>--}}
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td>{{$user->email}}</td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td>:</td>
                                <td>{{$user->phone}}</td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>:</td>
                                @if($user->address == null)
                                    <td style="color: red">The information has not been updated</td>
                                @else
                                    <td>{{$user->address}}</td>
                                @endif
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>


                @forelse($order as $od)
                <div class="db-2-com db-2-main">
                    <h4>My Order No {{$od->id}}</h4>
                    <div class="db-2-main-com db-2-main-com-table">
                        <table class="responsive-table">
                            <tbody>
                            <tr>
                                <td>Date</td>
                                <td>:</td>
                                <td>{{$od->order_date}}</td>
                            </tr>
                            <tr>
                                <td>Qty Ticket</td>
                                <td>:</td>
                                    <td>{{$od->qty}}</td>
                            </tr>
                            <tr>
                                <td>Total Money</td>
                                <td>:</td>
                                    <td>{{$od->totalmoney}}</td>
                            </tr>
{{--                            <tr>--}}
{{--                                <td>Detail Ticket</td>--}}
{{--                            </tr>--}}
{{--                            @for($i=0;$i<$od->count();$i++)--}}
{{--                            <tr>--}}
{{--                                <td>{{$od->Tickets[5]->TypeOfTicket->name}}</td>--}}
{{--                                <td></td>--}}
{{--                                <td></td>--}}
{{--                            </tr>--}}
{{--                            @endfor--}}
{{--                            <tr>--}}
{{--                                <td>Phone</td>--}}
{{--                                <td>:</td>--}}
{{--                                <td></td>--}}
{{--                            </tr>--}}

                            </tbody>
                        </table>
                        <div class="db-mak-pay-bot">
                            <a href="{{url('/detail-order',["order"=>$od->id])}}" class="waves-effect waves-light btn-large">Detail Order No {{$od->id}}</a>
                        </div>
                    </div>
                </div>
                @empty
                    <h3>Not found yours order</h3>

                @endforelse



            </div>




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

@endsection
