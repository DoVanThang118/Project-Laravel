@extends('user.layout')
@section("title","Cart")
@section('center-content')
    <div class="db-2">
            <div class="db-2-com db-2-main">
                <h4>Your ticket</h4>
                <div class="db-2-main-com db-2-main-com-table db2-form-pay db2-form-com">
                    <table class="responsive-table">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>From</th>
                            <th>To</th>
                            <th>Time</th>
                            <th>Type</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse( $cart as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->Flight->AirStrip->TakeofCity->name}}</td>
                                <td>{{$item->Flight->AirStrip->LandingCity->name}}</td>
                                <td>{{$item->Flight->takeoftime}} - {{$item->Flight->landingtime}} </td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->price}}</td>
                                <td>{{$item->buy_qty}}</td>
                                <td>
                                    <a href="{{url("/remove-cart",["typeOfTicket"=>$item->id])}}">Delete</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td>
                                    <p>No ticket</p>
                                </td>
                            </tr>
                        @endforelse

                        </tbody>

                    </table>


{{--                    <div class="col-md-6">--}}
{{--                        <h5>Discount</h5>--}}
{{--                        <input style="height: 30px" type="text"  class="validate" name="discount" required>--}}
{{--                        <p style="font-size: 12px">If you have a discount code please enter the code</p>--}}
{{--                    </div>--}}
                </div>
                @if($grand_total > 0)

                    <div class="row">
                        <div class="col-md-4" style="float: right;margin-right: 30px">

                            <span class="db-pay-amount" style="color: rgba(255,0,0,0.89)">Total: {{$grand_total}}</span>
                            <form method="get" action="{{url("/checkout")}}">
                                @csrf

                                <button type="submit" style="width: 100px;margin-bottom: 10px" class="btn btn-warning">CHECKOUT</button>

                            </form>

                        </div>
{{--                        @if($can_checkout)--}}
{{--                            <a href="{{url("")}}" class="primary-btn">PROCEED TO CHECKOUT</a>--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-2" style="float: right;margin-right: 30px">--}}
{{--                                    <div class="hot-page2-alp-ri-p3 tour-alp-ri-p3">--}}
{{--                                        <a href="{{url("/checkout")}}" style="width: 100px" class="btn btn-warning">Done</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @else--}}
{{--                            <a href="javascript:void(0);" style="background-color: gray;" class="primary-btn disabled">PROCEED TO CHECKOUT</a>--}}
{{--                        @endif--}}

                    </div>
                @endif

            </div>
    </div>
@endsection
