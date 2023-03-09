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
                            <h4>All Seat Type {{$type[0]->name}} Of Airplane {{$type[0]->Airplane->name}} </h4>
                            <div class="page-back"><a href="{{url("admin/airplane/airplane-view",["airplane"=>$type[0]->Airplane->id])}}"><i class="fa fa-backward" aria-hidden="true"></i> Back</a></div>


                            <!-- Dropdown Structure -->

                        </div>
                        <div class="tab-inn">
                            <div class="table-responsive table-desi">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>TypeOfSeat</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($seat as $item)
                                        <tr>

                                            <td>{{$item->id}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->description}}</td>
                                            <td>{{$item->TypeOfSeat->name}}</td>

                                            {{--                                    <td>--}}
                                            {{--                                        <a href="{{url("admin/airplane/airplane-view",["airplane"=>$item->id])}}"><i class="fa fa-eye" aria-hidden="true"></i></a>--}}
                                            {{--                                    </td>--}}

                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer clearfix">
                                {{--                                        <ul class="pagination pagination-sm m-0 float-right">--}}
                                {{--                                                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>--}}
                                {{--                                                <li class="page-item"><a class="page-link" href="#">1</a></li>--}}
                                {{--                                                <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
                                {{--                                                <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
                                {{--                                                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>--}}
                                {{--                                            </ul>--}}
                                {!! $seat->appends(app("request")->input())->links("pagination::bootstrap-4") !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
