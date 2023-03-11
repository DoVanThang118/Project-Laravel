@extends("admin.layout")
@section("content")
    <div class="sb2-2">
        <div class="sb2-2-2">
            <ul>
                <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                </li>
                <li class="active-bre"><a href="#"> Edit Airplane No {{$airplane->id}}</a>
                </li>
            </ul>
        </div>
        <div class="sb2-2-add-blog sb2-2-1">
            <h2>Edit Airplane No {{$airplane->id}}</h2>
            <p>The Airplane class adds basic styling (light padding and only horizontal dividers) to a table:</p>

            <ul class="nav nav-tabs tab-list">
                <li class="active"><a data-toggle="tab" href="#home"><i class="fa fa-info" aria-hidden="true"></i> <span>Detail</span></a>
                </li>

            </ul>

            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <div class="box-inn-sp">
                        <div class="inn-title">
                            <h4>Listing Information Of Airplane No {{$airplane->id}}</h4>

                        </div>
                        <div class="bor">
                            <form method="post" action="{{url("/admin/airplane/airplane-edit",["airplane"=>$airplane->id])}}" role="form" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    @include("admin.html.form.input",[
                                    "label"=>"",
                                    "title"=>"Name",
                                    "key"=>"name",
                                    "type"=>"text",
                                    "required"=>true,
                                    "value"=>$airplane->name ])
                                    @include("admin.html.form.input",[
                                  "label"=>"",
                                  "title"=>"Brand",
                                  "key"=>"brand",
                                  "type"=>"text",
                                  "required"=>true,
                                  "value"=>$airplane->brand ])



                                    <div class="input-field col s12">
                                        <input id="t2-price1" value="{{$airplane->totalseat}}" type="number" class="validate" disabled>
                                        <label for="t2-price1">Total Seat</label>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <p>Descriptions:</p>
                                        @error("description")
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                        <input type="text" value="{{$airplane->description}}" name="description" class="materialize-textarea">

                                        <label for="textarea1"> </label>
                                    </div>
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
