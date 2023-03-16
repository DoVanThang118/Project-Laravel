@extends('layouts.app')
@section("title","Danh sách chuyến bay")
@section("custom_css")

@endsection
@section("custom_js")
    <script src="/assets/js/jquery-ui.js"></script>
    <script src="/assets/js/mail.js"></script>
@endsection
@section('content')


    <!--====== HOTELS LIST ==========-->
    <section class="hot-page2-alp hot-page2-pa-sp-top">
        <div class="container">
            <div class="row inner_banner inner_banner_3 bg-none">
                <div class="hot-page2-alp-tit">
                    <h1 style="color: black">Choose Flights</h1>
                    <ul>
                        <li><a href="{{url("/")}}">Home</a> </li>
                        <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                        <li><a href="#" class="bread-acti" >Select Flight</a> </li>
                    </ul>
                    <p style="color: black">Choose the flight you want to take </p>
                </div>
            </div>
            <div class="row">
                <!--LISTINGS START-->
                @foreach($data as $item)
                    <div class="hot-page2-alp-r-list">
                        <form method="post" action="{{route("add_to_cart",["flight"=>$item->id])}}"
                              role="form" enctype="multipart/form-data" >

                            @csrf
                            <div class="col-md-4 hot-page2-alp-r-list-re-sp">
                                <div class="hot-page2-alp-ri-p3 tour-alp-ri-p3">
                                    <span class="hot-list-p3-1">Plane: </span>
                                    <span class="hot-list-p3-2">{{$item->AirPlane->name}}</span>
                                    <span class="hot-list-p3-4">Operated by: The Travel</span>
                                </div>
                            </div>
                            <div style="margin-top: 32px" class="col-md-8">
                                <div class="trav-list-bod">
                                    <div class="col-md-6">
                                        <a><h3>From: {{$item->AirStrip->TakeofCity->name}} </h3> <h4>{{$item->takeoftime}} (Local time)</h4></a>
                                    </div>
                                    <div  class="col-md-6">
                                        <a><h3>To: {{$item->AirStrip->LandingCity->name}} </h3> <h4>{{$item->landingtime}}(Local time)</h4></a>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="trav-ami">
                                    <h4 style="font-size: 25px;font-weight: 600;padding: 10px 0px ">Select ticket</h4>
                                    <div class="ticket">
                                        <ul>
                                            <li class="col-md-3">
                                                <h4 style="color: #f1ba16 ">{{$item->TypeOfTickets[0]->name}} CLASS</h4>
                                                <h5 style=" font-size: 20px">{{$item->TypeOfTickets[0]->price}}</h5>
                                                <i style="color: #726b6b">Available ticket:{{$item->TypeOfTickets[0]->ticketinstock}}</i>
                                                <hr>
                                                <p style="text-align: center; margin-bottom:-7px ">Fill in the quantity</p>
                                                @include("admin.html.form.inputnumber",[
                                                  "label"=>"",
                                                  "title"=>"Input Qty",
                                                  "max"=>$item->TypeOfTickets[0]->ticketinstock,
                                                  "key"=>"vipqty",
                                                  "required"=>true])
                                            </li>

                                            <li class="col-md-3" >
                                                <h4 style="color: #0ad3e7">{{$item->TypeOfTickets[1]->name}} CLASS</h4>
                                                <h5 style=" font-size: 20px">{{$item->TypeOfTickets[1]->price}}</h5>
                                                <i style="color: #726b6b">Available ticket:{{$item->TypeOfTickets[1]->ticketinstock}}</i>
                                                <hr>
                                                <p style="text-align: center; margin-bottom:-7px ">Fill in the quantity</p>
                                                @include("admin.html.form.inputnumber",[
                                                      "label"=>"",
                                                      "title"=>"Input Qty",
                                                      "key"=>"normalqty",
                                                      "max"=>$item->TypeOfTickets[1]->ticketinstock,
                                                      "required"=>true])

                                            </li>
                                            <li class="col-md-3">
                                                <h4 style="color: #1fe119">{{$item->TypeOfTickets[2]->name}} CLASS</h4>
                                                <h5 style=" font-size: 20px">{{$item->TypeOfTickets[2]->price}}</h5>
                                                <i style="color: #726b6b">Available ticket:{{$item->TypeOfTickets[2]->ticketinstock}}</i>
                                                <hr>
                                                <p style="text-align: center; margin-bottom:-7px ">Fill in the quantity</p>
                                                @include("admin.html.form.inputnumber",[
                                                     "label"=>"",
                                                     "title"=>"Input Qty",
                                                     "key"=>"cheapqty",
                                                     "max"=>$item->TypeOfTickets[2]->ticketinstock,
                                                     "required"=>true])

                                            </li>
                                        </ul>
                                        <div class="col-md-2">
                                            <div style="margin-top: 160px">
                                                <button type="submit" class="btn hot-page2-alp-quot-btn">Buy now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                @endforeach
                @if(isset($data2))
                    <h1 class="bread-acti">Return</h1>
                    @foreach($data2 as $item)
                        <div class="hot-page2-alp-r-list">
                            <form method="post" action="{{route("add_to_cart",["flight"=>$item->id])}}"
                                  role="form" enctype="multipart/form-data" >

                                @csrf
                                <div class="col-md-4 hot-page2-alp-r-list-re-sp">
                                    <div class="hot-page2-alp-ri-p3 tour-alp-ri-p3">
                                        <span class="hot-list-p3-1">Plane: </span>
                                        <span class="hot-list-p3-2">{{$item->AirPlane->name}}</span>
                                        <span class="hot-list-p3-4">Operated by: The Travel</span>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="trav-list-bod">
                                        <a><h3>From: {{$item->AirStrip->TakeofCity->name}} </h3> <h4>{{$item->takeoftime}} (Local time)</h4></a>
                                        <a><h3>To: {{$item->AirStrip->LandingCity->name}} </h3> <h4>{{$item->landingtime}}(Local time)</h4></a>
                                    </div>
                                </div>

                                <div>
                                    <div class="trav-ami">
                                        <h4 style="font-size: 25px;font-weight: 600;padding: 10px 0px ">Select ticket</h4>
                                        <div class="ticket">
                                            <ul>
                                                <li class="col-md-3">
                                                    <h4 style="color: #f1ba16 ">{{$item->TypeOfTickets[0]->name}} CLASS</h4>
                                                    <h5 style=" font-size: 20px">{{$item->TypeOfTickets[0]->price}}</h5>
                                                    <i style="color: #726b6b">Available ticket:{{$item->TypeOfTickets[0]->ticketinstock}}</i>
                                                    <hr>
                                                    <p style="text-align: center; margin-bottom:-7px ">Fill in the quantity</p>
                                                    @include("admin.html.form.inputnumber",[
                                                      "label"=>"",
                                                      "title"=>"Input Qty",
                                                      "max"=>$item->TypeOfTickets[0]->ticketinstock,
                                                      "key"=>"vipqty",
                                                      "required"=>true])
                                                </li>

                                                <li class="col-md-3" >
                                                    <h4 style="color: #0ad3e7">{{$item->TypeOfTickets[1]->name}} CLASS</h4>
                                                    <h5 style=" font-size: 20px">{{$item->TypeOfTickets[1]->price}}</h5>
                                                    <i style="color: #726b6b">Available ticket:{{$item->TypeOfTickets[1]->ticketinstock}}</i>
                                                    <hr>
                                                    <p style="text-align: center; margin-bottom:-7px ">Fill in the quantity</p>
                                                    @include("admin.html.form.inputnumber",[
                                                          "label"=>"",
                                                          "title"=>"Input Qty",
                                                          "key"=>"normalqty",
                                                          "max"=>$item->TypeOfTickets[1]->ticketinstock,
                                                          "required"=>true])

                                                </li>
                                                <li class="col-md-3">
                                                    <h4 style="color: #1fe119">{{$item->TypeOfTickets[2]->name}} CLASS</h4>
                                                    <h5 style=" font-size: 20px">{{$item->TypeOfTickets[2]->price}}</h5>
                                                    <i style="color: #726b6b">Available ticket:{{$item->TypeOfTickets[2]->ticketinstock}}</i>
                                                    <hr>
                                                    <p style="text-align: center; margin-bottom:-7px ">Fill in the quantity</p>
                                                    @include("admin.html.form.inputnumber",[
                                                         "label"=>"",
                                                         "title"=>"Input Qty",
                                                         "key"=>"cheapqty",
                                                         "max"=>$item->TypeOfTickets[2]->ticketinstock,
                                                         "required"=>true])

                                                </li>
                                            </ul>
                                            <div class="col-md-2">
                                                <div style="margin-top: 160px">
                                                    <button type="submit" class="btn btn-primary">Buy now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    @endforeach
                @endif
                <!--END LISTINGS-->
            </div>
        </div>
        {{--                    </div>--}}
        {{--                    <!--END RIGHT LISTINGS-->--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
    </section>
@endsection
