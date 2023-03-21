@extends('layouts.app')
@section("title","Profile")
@section('content')
    <section>
        <div class=" db">
            <!--LEFT SECTION-->
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

        </div>
    </section>

@endsection
