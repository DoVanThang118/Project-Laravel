@extends('layouts.app')
@section("title","Profile")
@section('content')
<section>

    <div class="db">
        <!--LEFT SECTION-->
        <!--CENTER SECTION-->
        <div class="db-2">
            <div class="db-2-com db-2-main">
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
                    <div class="db-mak-pay-bot">
                        <a style="margin-left: 30px" href="{{url("/profile")}}" class="waves-effect waves-light btn-large">Back To My Order</a>

                    </div>
                </div>
            </div>


            <div class="db-2-com db-2-main">
                <h4>My Order No {{$order->id}}</h4>
                <div class="db-2-main-com db-2-main-com-table">
                    <table class="responsive-table">
                        <tbody>
                        <tr>
                            <td>Date</td>
                            <td>:</td>
                            <td>{{$order->order_date}}</td>
                        </tr>
                        <tr>
                            <td>Qty Ticket</td>
                            <td>:</td>
                            <td>{{$order->qty}}</td>
                        </tr>
                        <tr>
                            <td>Total Money</td>
                            <td>:</td>
                            <td>{{$order->totalmoney}}</td>
                        </tr>
                        <tr>
                            <td>Detail Ticket</td>
                        </tr>
                        @for($i=0;$i<$ticket->count();$i++)
                            <tr>
                                <td>Ticket No {{$i+1}}</td>
                                <td>:</td>
                                <td>Price {{$ticket[$i]->price}} / Flight From {{$ticket[$i]->TypeOfTicket->Flight->AirStrip->TakeofCity->name}} To {{$ticket[$i]->TypeOfTicket->Flight->AirStrip->LandingCity->name}} Type {{$ticket[$i]->TypeOfTicket->name}}
                                    <p>Takeoff Time: {{$ticket[$i]->TypeOfTicket->Flight->takeoftime}} / Landing Time: {{$ticket[$i]->TypeOfTicket->Flight->landingtime}}</p>
                                <p>Name: {{$ticket[$i]->name}}</p>
                                <p>CCCD: {{$ticket[$i]->cccd}}</p>
                                <p>Phone: {{$ticket[$i]->phone}}</p>
                                <p>Birthday: {{$ticket[$i]->birthday}}</p>

                                </td>
                                <td><a href="{{url("/ticket-edit",["ticket"=>$ticket[$i]->id])}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                </td>
                            </tr>

                        @endfor


                        </tbody>
                    </table>
{{--                    <div class="db-mak-pay-bot">--}}
{{--                        <a href="{{url('/detail-order')}}" class="waves-effect waves-light btn-large">Detail Order No {{$od->id}}</a>--}}
{{--                    </div>--}}
                </div>
            </div>




        </div>




        <!--RIGHT SECTION-->

    </div>
</section>

@endsection

