@extends("admin.layout")
@section("content")
    <div class="sb2-2">
        <div class="sb2-2-2">
            <ul>
                <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                </li>
                <li class="active-bre"><a href="#"> All Airplane</a>
                </li>
            </ul>
        </div>
        <div class="sb2-2-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="box-inn-sp">
                        <div class="inn-title">
                            <h4>All Airplane</h4>
                            <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                            <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-users"><i class="material-icons">more_vert</i></a>
                            <ul id="dr-users" class="dropdown-content">
                                <li><a href="{{url("admin/airplane/airplane-add")}}">Add New</a>
                                </li>

                                <li><a href="#!">Update</a>
                                </li>

                            </ul>

                            <!-- Dropdown Structure -->

                        </div>
                        <div class="tab-inn">
                            <div class="table-responsive table-desi">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Brand</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Total Seat</th>
                                        <th>View</th>
                                        <th>Edit</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $item)
                                    <tr>

                                            <td>{{$item->id}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->brand}}</td>
                                            <td>{{$item->description}}</td>
                                        <td><img width="75" style="border-radius: 5px;"  src="/{{$item->thumbnail}}" /></td>
                                           <td>{{$item->totalseat}}</td>


                                            <td>
                                            <a href="{{url("admin/airplane/airplane-view",["airplane"=>$item->id])}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            </td>
                                        <td>
                                            <a href="{{url("admin/airplane/airplane-edit",["airplane"=>$item->id])}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
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
