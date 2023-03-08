@extends("admin.layout")
@section("content")
    <div class="sb2-2">
        <div class="sb2-2-2">
            <ul>
                <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                </li>
                <li class="active-bre"><a href="#"> Ui Form</a>
                </li>
            </ul>
        </div>
        <div class="sb2-2-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="box-inn-sp">
                        <div class="inn-title">
                            <h4>Flight No {{$flight->id}}</h4>
                            <p>Flight from {{$flight->AirStrip->TakeofCity->name}} to {{$flight->AirStrip->LandingCity->name}}</p>
                            <form action="{{url("admin/flight/flight-view",["flight"=>$flight->id])}}" method="get">

                                <div  style="width: 150px;">
                                    <select  name="typeofticket_id">
                                        <option value="0">Type Ticket</option>
                                        @foreach($type as $item)
                                            <option @if(app("request")->input("typeofticket_id")==$item->id) selected @endif value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>

                                </div>
                                <div  style="width: 150px;">
                                    <input value="{{app("request")->input("maxprice")}}" type="number" name="maxprice" class="form-control float-right" placeholder="MaxPrice">

                                </div>
                                <div  style="width: 150px;">
                                    <input value="{{app("request")->input("minprice")}}" type="number" name="minprice" class="form-control float-right" placeholder="MinPrice">

                                </div>
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">SEND</button>
                                </div>
                            </form>

                            <!-- Dropdown Structure -->

                        </div>
                        <div class="tab-inn">
                            <div class="table-responsive table-desi">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Status</th>
                                        <th>Price</th>
                                        <th>Type Of Ticket ID</th>
                                        <th>Order ID</th>
                                        <th>Seat ID</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $item)
                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->status}}</td>
                                            <td>{{$item->price}}</td>
                                            <td>{{$item->TypeOfTicket->name}}</td>
                                            <td>{{$item->order_id}}</td>
                                            <td>{{$item->seat_id}}</td>

                                            {{--                                                                                <td>--}}
                                            {{--                                                                                    <a href="{{url("admin/airplane/airplane-view",["airplane"=>$item->id])}}"><i class="fa fa-eye" aria-hidden="true"></i></a>--}}
                                            {{--                                                                                </td>--}}

                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer clearfix">
                                {{--                                --}}{{--            <ul class="pagination pagination-sm m-0 float-right">--}}
                                {{--                                --}}{{--                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>--}}
                                {{--                                --}}{{--                <li class="page-item"><a class="page-link" href="#">1</a></li>--}}
                                {{--                                --}}{{--                <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
                                {{--                                --}}{{--                <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
                                {{--                                --}}{{--                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>--}}
                                {{--                                --}}{{--            </ul>--}}
                                {!! $data->appends(app("request")->input())->links("pagination::bootstrap-4") !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
