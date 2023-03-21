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
                                <td>Eamil</td>
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
                            <a href="{{url('/profile-edit')}}" class="waves-effect waves-light btn-large">Edit my profile</a>
                            <a style="margin-left: 30px" href="{{url("/profile")}}" class="waves-effect waves-light btn-large">Back To My Order</a>

                        </div>

                    </div>
                </div>
                <div class="db-2-com db-2-main">
                    <h4>Ticket No {{$ticket->id}}</h4>
                    <div class="db-2-main-com db-2-main-com-table">
                        <form method="post" action="{{url("/ticket-edit",["ticket"=>$ticket->id])}}" role="form" enctype="multipart/form-data">
                            @csrf
                        <table class="responsive-table">

                            <tbody>

                                <tr>
                                    <td>Ticket No {{$ticket->id}}</td>
                                    <td>Price {{$ticket->price}} / Flight From {{$ticket->TypeOfTicket->Flight->AirStrip->TakeofCity->name}} To {{$ticket->TypeOfTicket->Flight->AirStrip->LandingCity->name}} Type {{$ticket->TypeOfTicket->name}}
                                        <p>Takeoff Time: {{$ticket->TypeOfTicket->Flight->takeoftime}} / Landing Time: {{$ticket->TypeOfTicket->Flight->landingtime}}</p></td>
                                        <td><p>Name: {{$ticket->name}}</p>
                                        <p>CCCD: {{$ticket->cccd}}</p>
                                        <p>Phone: {{$ticket->phone}}</p>
                                        <p>Birthday: {{$ticket->birthday}}</p></td>
                                </tr>

                            <tr>
                               <td>@include("admin.html.form.input",[
                                "label"=>"",
                                "title"=>"Edit Name",
                                "key"=>"name",
                                "type"=>"text",
                                "required"=>true,
                                "value"=>$ticket->name ])
                               </td>
                                <td>
                                    @include("admin.html.form.input",[
                                    "label"=>"",
                                    "title"=>"Edit Phone",
                                    "key"=>"phone",
                                    "type"=>"text",
                                    "required"=>true,
                                    "value"=>$ticket->phone ])
                                </td>
                                <td>
                                    @include("admin.html.form.input",[
                                    "label"=>"",
                                    "title"=>"Edit Birthday",
                                    "key"=>"birthday",
                                    "type"=>"date",
                                    "required"=>true,
                                    "value"=>$ticket->birthday ])
                                </td>
                                <td>
                                    @include("admin.html.form.input",[
                                    "label"=>"",
                                    "title"=>"Edit CCCD",
                                    "key"=>"cccd",
                                    "type"=>"text",
                                    "required"=>true,
                                    "value"=>$ticket->cccd ])
                                </td>

                            </tr>

                            </tbody>
                        </table>

                        <div class="db-mak-pay-bot">
                            <button type="submit" class="waves-effect waves-light btn-large">Edit Ticket</button>
                        </div>

                        </form>


                        @if(session()->has("error"))
                            <div class="alert alert-warning alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h5><i class="icon fas fa-exclamation-triangle"></i> Alert!</h5>
                                {{session("error")}}
                            </div>
                        @endif
                        @if(session()->has("success"))
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h5><i class="icon fas fa-check"></i> Alert!</h5>
                                {{session("success")}}

                            </div>
                        @endif
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


