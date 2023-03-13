@extends("admin.layout")
@section("content")
    <!--== BODY INNER CONTAINER ==-->
    <div class="sb2-2">
        <!--== breadcrumbs ==-->
        <div class="sb2-2-2">
            <ul>
                <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                </li>
                <li class="active-bre"><a href="#"> Dashboard</a>
                </li>

            </ul>
        </div>
        <!--== DASHBOARD INFO ==-->
        <div class="ad-v2-hom-info">
            <div class="ad-v2-hom-info-inn">
                <ul>
                    <li>
                        <div class="ad-hom-box ad-hom-box-1">
                            <span class="ad-hom-col-com ad-hom-col-1"><i class="fa fa-bar-chart"></i></span>
                            <div class="ad-hom-view-com">
                                <p><i class="fa  fa-arrow-up up"></i> Total Ticket</p>
                                <h3>{{$ticket->count()}}</h3>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ad-hom-box ad-hom-box-2">
                            <span class="ad-hom-col-com ad-hom-col-2"><i class="fa fa-usd"></i></span>
                            <div class="ad-hom-view-com">
                                <p><i class="fa  fa-arrow-down down"></i> Tickets sold</p>
                                <h3>{{$ticketsold->count()}}</h3>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ad-hom-box ad-hom-box-4">
                            <span class="ad-hom-col-com ad-hom-col-4"><i class="fa fa-envelope-open-o"></i></span>
                            <div class="ad-hom-view-com">
                                <p><i class="fa  fa-arrow-up up"></i> Expected</p>
                                <h3>{{$expected}}</h3>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ad-hom-box ad-hom-box-2">
                            <span class="ad-hom-col-com ad-hom-col-2"><i class="fa fa-usd"></i></span>
                            <div class="ad-hom-view-com">
                                <p><i class="fa  fa-arrow-down down"></i> Revenue</p>
                                <h3>{{$revenue}}</h3>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
        <div class="sb2-2-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="box-inn-sp">
                        <div class="inn-title">
                            <h4>All Flight</h4>

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
                                        <th>In Stock</th>
                                        <th>Airplane Name</th>
                                        <th>Take of city</th>
                                        <th>Landing City</th>
                                        <th>View</th>
                                        <th>Edit</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($flight as $item)
                                        <tr>

                                            <td>{{$item->id}}</td>
                                            <td>{{$item->takeoftime}}</td>
                                            <td>{{$item->landingtime}}</td>
                                            <td>{{$item->description}}</td>
                                            <td>{{$item->totalticket}}
                                            </td>
                                            <td> @for($i=0;$i<count($f);$i++)
                                                    @if($f[$i][0]==$item)
                                                        {{$f[$i][1]}}
                                                    @endif
                                                @endfor</td>
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
                                {!! $flight->appends(app("request")->input())->links("pagination::bootstrap-4") !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--== User Details ==-->
        <div class="sb2-2-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="box-inn-sp">
                        <div class="inn-title">
                            <h4>Google Map</h4>
                            <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>

                            <!-- Dropdown Structure -->

                        </div>
                        <div class="tab-inn">
                            <div class="table-responsive table-desi tab-map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6290413.804893654!2d-93.99620524741552!3d39.66116578737809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880b2d386f6e2619%3A0x7f15825064115956!2sIllinois%2C+USA!5e0!3m2!1sen!2sin!4v1469954001005" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
