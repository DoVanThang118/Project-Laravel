@extends('layouts.app')
@section("title","Danh sách chuyến bay")
@section("custom_css")
@endsection
@section("custom_js")
    <script src="/assets/js/jquery-ui.js"></script>
    <script src="/assets/js/mail.js"></script>
    <script>
        var x = document.getElementsByClassName('click1');
        for (var i =0; i< x.length; i++){
            x[i].onclick = function (){
                alert('If your flight is round trip please select ticket for round trip.' +
                    'If your flight is one way please click on All booking to go to cart and pay')
            }
        }
    </script>
@endsection
@section('content')

    @include("admin.html.notification")

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
                <div class="hot-page2-alp-con">
                    <!--LEFT LISTINGS-->
                    <!--END LEFT LISTINGS-->
                    <!--RIGHT LISTINGS-->
                    <div class=" hot-page2-alp-con-right">
                        <div class="hot-page2-alp-con-right-1">
                            <!--LISTINGS-->
                            <div class="row">
                                @if(!empty($data))
                                <h3 style=" margin-left: 30px; border-radius: 3px; background: #a2dd2f; width: 230px  ">Filghts --></h3>
                                @endif
                                <!--LISTINGS START-->
                                @forelse($data as $item)
                                    <div class="hot-page2-alp-r-list">
                                            <div class="col-md-3 hot-page2-alp-r-list-re-sp">
                                                <a href="javascript:void(0);">
                                                    <div class="hot-page2-hli-1"> <img src="/{{$item->Airplane->thumbnail}}" alt=""> </div>
                                                </a>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="trav-list-bod">
                                                    <a><h3>Flight No {{$item->id}} Airplane {{$item->Airplane->name}}</h3></a>
                                                    <h4><span>From: </span>{{$item->AirStrip->TakeofCity->name}} <span> --- To: </span>{{$item->AirStrip->LandingCity->name}} </h4>
                                                    <h4><span>Takeoff Time: </span>{{$item->takeoftime}}<span> - Landing Time: </span>{{$item->landingtime}}  </h4>
                                                </div>
                                            </div>

                                            <div class="col-md-12" style="border-top: 1px dashed black; margin-top: 15px; padding: 15px">
                                                <form method="post" action="{{route("add_to_cart",["flight"=>$item->id])}}"
                                                      role="form" enctype="multipart/form-data" >

                                                    @csrf
                                                <div class="col-md-4" >
                                                    <div class="hot-page2-alp-ri-p3 tour-alp-ri-p3">
                                                        <span class="ticket" style="background: #a2dd2f; margin-bottom:25px; margin-top: -20px;border-radius: 3px">
                                                            Available Tickets : {{$item->TypeOfTickets[0]->ticketinstock}}</span>
                                                        <span class="hot-list-p3-1">{{$item->TypeOfTickets[0]->name}} Class</span>
                                                        <span class="hot-list-p3-2">{{$item->TypeOfTickets[0]->price}}</span>

                                                        <span class="hot-list-p3-4">
                                                            @if($item->TypeOfTickets[0]->ticketinstock>=$adults)
                                                                <input type="hidden" name="qty" value="{{$adults}}">
                                                                <input type="hidden" name="type" value="{{$item->TypeOfTickets[0]->id}}">
                                                                <button  style="margin-left: 120px" type="submit" class="hot-page2-alp-quot-btn click1">Book Now</button>

                                                            @endif
                                                        </span>
                                                    </div>
                                                </div>
                                            </form>

                                                <form method="post" action="{{route("add_to_cart",["flight"=>$item->id])}}"
                                                      role="form" enctype="multipart/form-data" >

                                                    @csrf
                                                <div class="col-md-4">
                                                    <div class="hot-page2-alp-ri-p3 tour-alp-ri-p3">
                                                        <span class="ticket" style="background: #a2dd2f; margin-bottom:25px; margin-top: -20px;border-radius: 3px">
                                                            Available Tickets : {{$item->TypeOfTickets[1]->ticketinstock}}</span>

                                                        <span class="hot-list-p3-1">{{$item->TypeOfTickets[1]->name}} Class</span>
                                                        <span class="hot-list-p3-2">{{$item->TypeOfTickets[1]->price}}</span>
                                                        <span class="hot-list-p3-4">
                                                                @if($item->TypeOfTickets[1]->ticketinstock>=$adults)
                                                                <input type="hidden" name="qty" value="{{$adults}}">
                                                                <input type="hidden" name="type" value="{{$item->TypeOfTickets[1]->id}}">
                                                                <button  style="margin-left: 120px" type="submit"  class="hot-page2-alp-quot-btn click1">Book Now</button>
                                                            @endif
											</span> </div>
                                                </div>
                                                </form>
                                                <form method="post" action="{{route("add_to_cart",["flight"=>$item->id])}}"
                                                      role="form" enctype="multipart/form-data" >

                                                    @csrf
                                                <div class="col-md-4">
                                                    <div class="hot-page2-alp-ri-p3 tour-alp-ri-p3">
                                                        <span class="ticket" style="background: #a2dd2f; margin-bottom:25px; margin-top: -20px;border-radius: 3px">Available Tickets : {{$item->TypeOfTickets[2]->ticketinstock}}</span>

                                                        <span class="hot-list-p3-1">{{$item->TypeOfTickets[2]->name}} Class</span>
                                                        <span class="hot-list-p3-2">{{$item->TypeOfTickets[2]->price}}</span>
                                                        <span class="hot-list-p3-4">
                                                                @if($item->TypeOfTickets[2]->ticketinstock>=$adults)
                                                                <input type="hidden" name="qty" value="{{$adults}}">
                                                                <input type="hidden" name="type" value="{{$item->TypeOfTickets[2]->id}}">
                                                                <button  style="margin-left: 120px" type="submit"  class="hot-page2-alp-quot-btn click1">Book Now</button>
                                                            @endif
											</span> </div>
                                                </div>
                                                </form>
                                            </div>

                                        </div>
                                @empty
                                    <h4 style="margin-left: 30px;">Not found flight</h4>

                                @endforelse
                                <!--END LISTINGS-->
                                @if(!empty($data2))

                                <h3 style=" margin-left: 30px; border-radius: 3px; background: #f4364f; width: 230px  ">Return Filghts <--</h3>
                                @endif
                            @forelse($data2 as $item)


                                    <div class="hot-page2-alp-r-list">
                                        <div class="col-md-3 hot-page2-alp-r-list-re-sp">
                                            <a href="javascript:void(0);">
                                                <div class="hot-page2-hli-1"> <img src="/{{$item->Airplane->thumbnail}}" alt=""> </div>
                                            </a>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="trav-list-bod">
                                                <a><h3>Flight No {{$item->id}} Airplane {{$item->Airplane->name}}</h3></a>
                                                <h4><span>From: </span>{{$item->AirStrip->TakeofCity->name}} <span> --- To: </span>{{$item->AirStrip->LandingCity->name}} </h4>
                                                <h4><span>Takeoff Time: </span>{{$item->takeoftime}}<span> - Landing Time: </span>{{$item->landingtime}}  </h4>
                                            </div>
                                        </div>

                                        <div class="col-md-12" style="border-top: 1px dashed black; margin-top: 15px; padding: 15px">
                                            <form method="post" action="{{route("add_to_cart",["flight"=>$item->id])}}"
                                                  role="form" enctype="multipart/form-data" >

                                                @csrf
                                                <div class="col-md-4" >
                                                    <div class="hot-page2-alp-ri-p3 tour-alp-ri-p3">
                                                        <span class="ticket" style="background: #a2dd2f; margin-bottom:25px; margin-top: -20px;border-radius: 3px">Available Tickets : {{$item->TypeOfTickets[0]->ticketinstock}}</span>

                                                        <span class="hot-list-p3-1">{{$item->TypeOfTickets[0]->name}} Class</span>
                                                        <span class="hot-list-p3-2">{{$item->TypeOfTickets[0]->price}}</span>
                                                        <span class="hot-list-p3-4">
                                                                @if($item->TypeOfTickets[0]->ticketinstock>=$adults)
                                                                <input type="hidden" name="qty" value="{{$adults}}">
                                                                <input type="hidden" name="type" value="{{$item->TypeOfTickets[0]->id}}">
                                                                <button style="margin-left: 120px" type="submit"  class="hot-page2-alp-quot-btn click1">Book Now</button>
                                                            @endif
                                                            </span>
                                                    </div>
                                                </div>
                                            </form>
                                            <form method="post" action="{{route("add_to_cart",["flight"=>$item->id])}}"
                                                  role="form" enctype="multipart/form-data" >

                                                @csrf
                                                <div class="col-md-4">
                                                    <div class="hot-page2-alp-ri-p3 tour-alp-ri-p3">
                                                        <span class="ticket" style="background: #a2dd2f; margin-bottom:25px; margin-top: -20px;border-radius: 3px">Available Tickets : {{$item->TypeOfTickets[1]->ticketinstock}}</span>

                                                        <span class="hot-list-p3-1">{{$item->TypeOfTickets[1]->name}} Class</span>
                                                        <span class="hot-list-p3-2">{{$item->TypeOfTickets[1]->price}}</span>
                                                        <span class="hot-list-p3-4">
                                                                @if($item->TypeOfTickets[1]->ticketinstock>=$adults)
                                                                <input type="hidden" name="qty" value="{{$adults}}">
                                                                <input type="hidden" name="type" value="{{$item->TypeOfTickets[1]->id}}">
                                                                <button style="margin-left: 120px" type="submit"  class="hot-page2-alp-quot-btn click1">Book Now</button>
                                                            @endif
											</span> </div>
                                                </div>
                                            </form>
                                            <form method="post" action="{{route("add_to_cart",["flight"=>$item->id])}}"
                                                  role="form" enctype="multipart/form-data" >

                                                @csrf
                                                <div class="col-md-4">
                                                    <div class="hot-page2-alp-ri-p3 tour-alp-ri-p3">
                                                        <span class="ticket" style="background: #a2dd2f; margin-bottom:25px; margin-top: -20px;border-radius: 3px">Available Tickets : {{$item->TypeOfTickets[2]->ticketinstock}}</span>

                                                        <span class="hot-list-p3-1">{{$item->TypeOfTickets[2]->name}} Class</span>
                                                        <span class="hot-list-p3-2">{{$item->TypeOfTickets[2]->price}}</span>
                                                        <span class="hot-list-p3-4">
                                                                @if($item->TypeOfTickets[2]->ticketinstock>=$adults)
                                                                <input type="hidden" name="qty" value="{{$adults}}">
                                                                <input type="hidden" name="type" value="{{$item->TypeOfTickets[2]->id}}">
                                                                <button style="margin-left: 102px" type="submit"  class="hot-page2-alp-quot-btn click1">Book Now</button>
                                                            @endif
											</span> </div>
                                                </div>
                                            </form>
                                        </div>


                                        {{--                                    <div>--}}
                                        {{--                                        <div class="trav-ami">--}}
                                        {{--                                            <h4>Detail Type Of Ticket</h4>--}}
                                        {{--                                            <ul>--}}
                                        {{--                                                <li><img src="/assets/images/icon/a14.png" alt=""> <span>Sightseeing</span></li>--}}
                                        {{--                                                <li><img src="/assets/images/icon/a15.png" alt=""> <span>Hotel</span></li>--}}
                                        {{--                                                <li><img src="/assets/images/icon/a16.png" alt=""> <span>Transfer</span></li>--}}
                                        {{--                                                <li><img src="/assets/images/icon/a17.png" alt=""> <span>Luggage</span></li>--}}
                                        {{--                                                <li><img src="/assets/images/icon/a18.png" alt=""> <span>Duration 8N/9D</span></li>--}}
                                        {{--                                                <li><img src="/assets/images/icon/a19.png" alt=""> <span>Location : Rio,Brazil</span></li>--}}
                                        {{--                                                <li><img src="/assets/images/icon/dbl4.png" alt=""> <span>Stay Plan</span></li>--}}
                                        {{--                                            </ul>--}}
                                        {{--                                        </div>--}}
                                        {{--                                    </div>--}}
                                    </div>
                                @empty
                                        <h4 style="margin-left: 30px;">Not found flight return</h4>

                                       @endforelse


                            </div>
                        </div>
                    </div>
                    <!--END RIGHT LISTINGS-->
                </div>
            </div>
        </div>
        {{--                    </div>--}}
        {{--                    <!--END RIGHT LISTINGS-->--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
    </section>
@endsection
