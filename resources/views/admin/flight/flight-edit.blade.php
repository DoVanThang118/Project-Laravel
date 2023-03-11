@extends("admin.layout")
@section("content")
    <div class="sb2-2">
        <div class="sb2-2-2">
            <ul>
                <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                </li>
                <li class="active-bre"><a href="#"> Edit Flight No {{$flight->id}}</a>
                </li>
            </ul>
        </div>
        <div class="sb2-2-add-blog sb2-2-1">
            <h2>Edit Flight No {{$flight->id}}</h2>
            <p>The Flight class adds basic styling (light padding and only horizontal dividers) to a table:</p>

            <ul class="nav nav-tabs tab-list">
                <li class="active"><a data-toggle="tab" href="#home"><i class="fa fa-info" aria-hidden="true"></i> <span>Detail</span></a>
                </li>

            </ul>

            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <div class="box-inn-sp">
                        <div class="inn-title">
                            <h4>Listing Information Of Flight No {{$flight->id}}</h4>
                            <p>Flight No {{$flight->id}} from {{$flight->AirStrip->TakeOfCity->name}} to {{$flight->AirStrip->LandingCity->name}}</p>
                        </div>
                        <div class="bor">
                            <form method="post" action="{{url("/admin/flight/flight-edit",["flight"=>$flight->id])}}" role="form" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    @include("admin.html.form.input",[
                                    "label"=>"",
                                    "title"=>"Choose Takeof Time",
                                    "key"=>"takeoftime",
                                    "type"=>"datetime-local",
                                    "required"=>false,
                                    "value"=>$flight->takeoftime ])

                                    @include("admin.html.form.input",[
                                    "label"=>"",
                                    "title"=>"Choose Takeof Time",
                                    "key"=>"landingtime",
                                    "type"=>"datetime-local",
                                    "required"=>false,
                                    "value"=>$flight->landingtime ])

                                    <div class="input-field col s12">
                                        <input id="t2-price1" value="{{$flight->totalticket}}" type="number" class="validate" disabled>
                                        <label for="t2-price1">Total Ticket</label>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <p>Descriptions:</p>
                                        @error("description")
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                        <input type="text" value="{{$flight->description}}" name="description" class="materialize-textarea">

                                        <label for="textarea1"> </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <select name="airstrip_id"  required>
                                            <option value="{{$flight->AirStrip->id}} " >{{$flight->AirStrip->LandingCity->name}}{{$flight->AirStrip->TakeofCity->name}}</option>
                                            @foreach($airstrip as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                        @error("airstrip_id")
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                        <label>Select AirStrip</label>
                                    </div>
{{--                                    <div class="input-field col s6">--}}
{{--                                        <select name="airplane_id"  required >--}}
{{--                                            <option value="{{$flight->Airplane->id}}">{{$flight->Airplane->name}}</option>--}}
{{--                                            @foreach($airplane as $item)--}}
{{--                                                <option value="{{$item->id}}">{{$item->name}}</option>--}}
{{--                                            @endforeach--}}
{{--                                        </select>--}}
{{--                                        @error("airplane_id")--}}
{{--                                        <p class="text-danger">{{$message}}</p>--}}
{{--                                        @enderror--}}
{{--                                        <label>Select AirPlane</label>--}}
{{--                                    </div>--}}
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

