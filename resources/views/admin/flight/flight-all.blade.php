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
                            <h4>All Flight</h4>
                            <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                            <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-users"><i class="material-icons">more_vert</i></a>
                            <ul id="dr-users" class="dropdown-content">
                                <li><a href="{{url("admin/flight/flight-add")}}">Add New</a>
                                </li>
                                <li><a href="{{url("admin/flight/flight-all")}}">Update</a>
                                </li>
                            </ul>
                            <form action="{{url("admin/flight/flight-all")}}" method="get">
                                <div class="row">

                                <div style="width: 150px; margin-top: 45px" class="col-md-3">
                                    <select  name="takeofcity_id">
                                        <option value="0">Take Of City</option>
                                        @foreach($airstrip as $item)
                                            <option @if(app("request")->input("takeofcity_id")==$item->TakeofCity->id) selected @endif value="{{$item->TakeofCity->id}}">{{$item->TakeofCity->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div style="width: 150px; margin-top: 45px" class="col-md-3">
                                    <select  name="landingcity_id">

                                        <option value="0">Landing City</option>
                                        @foreach($airstrip as $item)
                                            <option @if(app("request")->input("landingcity_id")==$item->LandingCity->id) selected @endif value="{{$item->LandingCity->id}}">{{$item->LandingCity->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div  style="width: 175px;" class="col-md-3">

                                @include("admin.html.form.input",[
                                  "label"=>"",
                                  "title"=>"Takeof Time",
                                  "key"=>"takeoftime",
                                  "type"=>"date",
                                  "required"=>false])
                                </div>



                                <div class="input-group-append" class="col-md-3" style="margin-top: 53px">
                                    <button type="submit" class="btn btn-default">Search</button>
                                </div>

                                </div>
                            </form>


                        </div>
                        <div class="tab-inn">
                            <div class="table-responsive table-desi">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Takeof time</th>
                                        <th>Landing time</th>
                                        <th>Description</th>
                                        <th>Total Ticket</th>
                                        <th>Ticket Sold</th>
                                        <th>Airplane Name</th>
                                        <th>Take of city</th>
                                        <th>Landing City</th>
                                        <th>View</th>
                                        <th>Edit</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $item)
                                        <tr>

                                            <td>{{$item->id}}</td>
                                            <td>{{$item->takeoftime}}</td>
                                            <td>{{$item->landingtime}}</td>
                                            <td>{{$item->description}}</td>
                                            <td>{{$item->totalticket}}</td>
                                            <td></td>
                                            <td>{{$item->Airplane->name}}</td>
                                            <td>{{$item->AirStrip->TakeofCity->name}}</td>
                                            <td>{{$item->AirStrip->LandingCity->name}}</td>


                                            <td>
                                                <a href="{{url("admin/flight/flight-view",["flight"=>$item->id])}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            </td>
                                            <td>
                                                <a href="{{url("admin/flight/flight-edit",["flight"=>$item->id])}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                            </td>

                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer clearfix">
                                {{--                                            <ul class="pagination pagination-sm m-0 float-right">--}}
                                {{--                                                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>--}}
                                {{--                                                <li class="page-item"><a class="page-link" href="#">1</a></li>--}}
                                {{--                                                <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
                                {{--                                                <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
                                {{--                                                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>--}}
                                {{--                                            </ul>--}}
                                {!! $data->appends(app("request")->input())->links("pagination::bootstrap-4") !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
