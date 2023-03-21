@extends('layouts.app')
@section("title","All Booking")
@section('content')
    @include('admin.html.notification')

    <section class="hot-page2-alp hot-page2-pa-sp-top">
        <div class="container">
            <div class="row inner_banner inner_banner_3 bg-none">
                <div class="hot-page2-alp-tit">
                    <h1 style="color: black">Your Booking</h1>
                    <ul>
                        <li><a href="{{url("/")}}">Home</a> </li>
                        <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                        <li><a href="#" class="bread-acti" >Select Flight</a> </li>
                        <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                        <li><a href="#" class="bread-acti" >All Booking</a> </li>
                    </ul>
                </div>
            </div>
            <div class="row">

                <div class="hot-page2-alp-con">
                    <div class="col-md-9 hot-page2-alp-con-right">
                        <div class="hot-page2-alp-con-right-1">
                            <!--LISTINGS-->
                            <div class="row">
                                <!--LISTINGS START-->
                                @forelse( $cart as $item)
                                <div class="hot-page2-alp-r-list">
                                    <div class="col-md-3 hot-page2-alp-r-list-re-sp">
                                        <a href="javascript:void(0);">
                                            <div class="hot-page2-hli-1">
                                                <img src="/{{$item->Flight->Airplane->thumbnail}}" alt="">

                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="trav-list-bod">
                                            <a><h3>Flight No {{$item->Flight->id}} - Airplane {{$item->Flight->Airplane->name}}</h3></a>
                                            <a><h4>From: {{$item->Flight->AirStrip->TakeofCity->name}}
                                                    -----  To: {{$item->Flight->AirStrip->LandingCity->name}}</h4></a>
                                            <h4><span>Takeoff Time: </span>{{$item->Flight->takeoftime}}</h4>
                                            <h4><span> Landing Time: </span>{{$item->Flight->landingtime}}</h4>
                                            <hr>
                                            <h3><span>Type of ticket: </span>{{$item->name}}</h3>
                                            <h4><span>Unit Price: </span>{{$item->price}}</h4>
                                            <h4><span>Quantity: </span>{{$item->buy_qty}}</h4>
                                            <div class="hot-page2-alp-r-hot-page-rat">
                                                <a href="{{url("/remove-cart",["typeOfTicket"=>$item->id])}}">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--END LISTINGS-->
                                <!--LISTINGS START-->
                                @empty
                                <h1>No ticket</h1>
                                @endforelse
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 hot-page2-alp-con-left">
                        <!--PART 1 : LEFT LISTINGS-->
                        <div class="hot-page2-alp-con-left-1">
                            <h3>Payment Information</h3>
                        </div>
                        <!--PART 2 : LEFT LISTINGS-->
                        @if($grand_total > 0)
                        <div class="hot-page2-hom-pre hot-page2-alp-left-ner-notb">
                            <ul>
                                <li>
                                    <span>Please check the ticket information, if you are sure that the ticket is correct,
                                        please press the <b>done</b> button to proceed to the next step</span>
                                </li>
                                <!--LISTINGS-->
                                <li>
                                    <a href="#">
                                        <h4>Total: {{$grand_total}}</h4>
                                    </a>
                                </li>

                                <li>
                                    <form method="get" action="{{url("/checkout")}}">
                                        <button href="{{url("/checkout")}}" style="width: 100px; margin-left: 65px" class="btn btn-warning">CONTINUE</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                        <!--PART 7 : LEFT LISTINGS-->
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </section>

{{--    <div class="db-2">--}}
{{--            <div class="db-2-com db-2-main">--}}
{{--                <h4>Your ticket</h4>--}}
{{--                <div class="db-2-main-com db-2-main-com-table db2-form-pay db2-form-com">--}}
{{--                    <table class="responsive-table">--}}
{{--                        <thead>--}}
{{--                        <tr>--}}
{{--                            <th>No</th>--}}
{{--                            <th>From</th>--}}
{{--                            <th>To</th>--}}
{{--                            <th>Time</th>--}}
{{--                            <th>Type</th>--}}
{{--                            <th>Price</th>--}}
{{--                            <th>Quantity</th>--}}
{{--                            <th>Action</th>--}}
{{--                        </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody>--}}
{{--                        @forelse( $cart as $item)--}}
{{--                            <tr>--}}
{{--                                <td>{{$item->id}}</td>--}}
{{--                                <td>{{$item->Flight->AirStrip->TakeofCity->name}}</td>--}}
{{--                                <td>{{$item->Flight->AirStrip->LandingCity->name}}</td>--}}
{{--                                <td>{{$item->Flight->takeoftime}} - {{$item->Flight->landingtime}} </td>--}}
{{--                                <td>{{$item->name}}</td>--}}
{{--                                <td>{{$item->price}}</td>--}}
{{--                                <td>{{$item->buy_qty}}</td>--}}
{{--                                <td>--}}
{{--                                    <a href="{{url("/remove-cart",["typeOfTicket"=>$item->id])}}">Delete</a>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                        @empty--}}
{{--                            <tr>--}}
{{--                                <td>--}}
{{--                                    <p>No ticket</p>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                        @endforelse--}}

{{--                        </tbody>--}}

{{--                    </table>--}}


{{--                    <div class="col-md-6">--}}
{{--                        <h5>Discount</h5>--}}
{{--                        <input style="height: 30px" type="text"  class="validate" name="discount" required>--}}
{{--                        <p style="font-size: 12px">If you have a discount code please enter the code</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                @if($grand_total > 0)--}}

{{--                    <div class="row">--}}
{{--                        <div class="col-md-4" style="float: right;margin-right: 30px">--}}

{{--                            <span class="db-pay-amount" style="color: rgba(255,0,0,0.89)">Total: {{$grand_total}}</span>--}}
{{--                            <form method="get" action="{{url("/checkout")}}">--}}
{{--                                @csrf--}}

{{--                                <button type="submit" style="width: 100px;margin-bottom: 10px" class="btn btn-warning">CHECKOUT</button>--}}

{{--                            </form>--}}

{{--                        </div>--}}
{{--

{{--                    </div>--}}
{{--                @endif--}}

{{--            </div>--}}
{{--    </div>--}}
@endsection
