@extends("admin.layout")
@section("content")
    <div class="sb2-2">
        <div class="sb2-2-2">
            <ul>
                <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                </li>
                <li class="active-bre"><a href="#"> Add AirStrip</a>
                </li>
            </ul>
        </div>
        <div class="sb2-2-add-blog sb2-2-1">
            <h2>Add AirStrip</h2>
            <p>Add Airstrip class adds basic styling (light padding and only horizontal dividers) to a table:</p>

            <ul class="nav nav-tabs tab-list">
                <li class="active"><a data-toggle="tab" href="#home"><i class="fa fa-info" aria-hidden="true"></i> <span>Detail</span></a>
                </li>

            </ul>

            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <div class="box-inn-sp">
                        <div class="inn-title">
                            <h4>Listing Information Of AirStrip</h4>

                        </div>
                        <div class="bor">
                            <form method="post" action="{{url("/admin/airstrip/airstrip-add")}}" role="form" enctype="multipart/form-data">
                                @csrf
                                <div class="row">

                                    @include("admin.html.form.input",[
                                   "label"=>"",
                                   "title"=>"Name Of AirStrip",
                                   "key"=>"name",
                                   "type"=>"text",
                                   "required"=>true])

                                </div>

                                <div class="row">
                                    <div class="input-field col s6">
                                        <select name="takeofcity_id"  required>
                                            @foreach($cities as $item)
                                                <option @if(old("takeofcity_id")== $item->id) selected @endif  value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                        @error("takeofcity_id")
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                        <label>Select Takeof City</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <select name="landingcity_id"  required >
                                            @foreach($cities as $item)
                                                <option @if(old("landingcity_id")== $item->id) selected @endif  value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                        @error("landingcity_id")
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                        <label>Select Landing City</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="submit" class="waves-effect waves-light btn-large">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
@endsection
