@extends("admin.layout")
@section("content")
    <div class="sb2-2">
        <div class="sb2-2-2">
            <ul>
                <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                </li>
                <li class="active-bre"><a href="#"> Add Flight</a>
                </li>
            </ul>
        </div>
        <div class="sb2-2-add-blog sb2-2-1">
            <h2>Add Flight</h2>
            <p>The Flight class adds basic styling (light padding and only horizontal dividers) to a table:</p>

            <ul class="nav nav-tabs tab-list">
                <li class="active"><a data-toggle="tab" href="#home"><i class="fa fa-info" aria-hidden="true"></i> <span>Detail</span></a>
                </li>

            </ul>

            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <div class="box-inn-sp">
                        <div class="inn-title">
                            <h4>Listing Information Of Flight</h4>

                        </div>
                        <div class="bor">
                            <form method="post" action="{{url("/admin/flight/flight-add")}}" role="form" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    @include("admin.html.form.input",[
                                    "label"=>"",
                                    "title"=>"Choose Takeof Time",
                                    "key"=>"takeoftime",
                                    "type"=>"datetime-local",
                                    "required"=>false])


                                    @include("admin.html.form.input",[
                                    "label"=>"",
                                    "title"=>"Choose Landing Time",
                                    "key"=>"landingtime",
                                    "type"=>"datetime-local",
                                    "required"=>false])
                                    @include("admin.html.form.input",[
                                    "label"=>"",
                                    "title"=>"Input Price Of VIP Ticket",
                                    "key"=>"vip",
                                    "type"=>"number",
                                    "required"=>true])
                                    @include("admin.html.form.input",[
                                   "label"=>"",
                                   "title"=>"Input Price Of NORMAL Ticket",
                                   "key"=>"normal",
                                   "type"=>"number",
                                   "required"=>true])
                                    @include("admin.html.form.input",[
                                   "label"=>"",
                                   "title"=>"Input Price Of CHEAP Ticket",
                                   "key"=>"cheap",
                                   "type"=>"number",
                                   "required"=>true])

                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <p>Descriptions:</p>
                                        @error("description")
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                        <input type="text" value="{{old("description")}}" name="description" class="materialize-textarea">

                                        <label for="textarea1"> </label>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <select name="airstrip_id"  required>
                                            @foreach($airstrip as $item)
                                                <option @if(old("airstrip_id")== $item->id) selected @endif  value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                        @error("airstrip_id")
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                        <label>Select AirStrip</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <select name="airplane_id"  required >
                                            @foreach($airplane as $item)
                                                <option @if(old("airplane_id")== $item->id) selected @endif  value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                        @error("airplane_id")
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                        <label>Select AirPlane</label>
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
    </div>
@endsection

