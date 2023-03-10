@extends("admin.layout")
@section("content")
    <div class="sb2-2">
        <div class="sb2-2-2">
            <ul>
                <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                </li>
                <li class="active-bre"><a href="#"> Add Airplane</a>
                </li>
            </ul>
        </div>
        <div class="sb2-2-add-blog sb2-2-1">
            <h2>Add Airplane</h2>
            <p>Add Airplane class adds basic styling (light padding and only horizontal dividers) to a table:</p>

            <ul class="nav nav-tabs tab-list">
                <li class="active"><a data-toggle="tab" href="#home"><i class="fa fa-info" aria-hidden="true"></i> <span>Detail</span></a>
                </li>

            </ul>

            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <div class="box-inn-sp">
                        <div class="inn-title">
                            <h4>Listing Information Of Airplane</h4>

                        </div>
                        <div class="bor">
                            <form method="post" action="{{url("/admin/airplane/airplane-add")}}" role="form" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    @include("admin.html.form.input",[
                                    "label"=>"",
                                    "title"=>"Name",
                                    "key"=>"name",
                                    "type"=>"text",
                                    "required"=>true])
                                    @include("admin.html.form.input",[
                                    "label"=>"",
                                    "title"=>"Brand",
                                    "key"=>"brand",
                                    "type"=>"text",
                                    "required"=>true])

                                    @include("admin.html.form.input",[
                                    "label"=>"",
                                    "title"=>"Desciption",
                                    "key"=>"description",
                                    "type"=>"text",
                                    "required"=>true])


                                    @include("admin.html.form.input",[
                                    "label"=>"",
                                    "title"=>"Image",
                                    "key"=>"thumbnail",
                                    "type"=>"file",
                                    "required"=>true])


                                    @include("admin.html.form.input",[
                                    "label"=>"",
                                    "title"=>"Input Quantity Of VIP Ticket",
                                    "key"=>"vip",
                                    "type"=>"number",
                                    "required"=>true])

                                    @include("admin.html.form.input",[
                                   "label"=>"",
                                   "title"=>"Input Quantity Of NORMAL Ticket",
                                   "key"=>"normal",
                                   "type"=>"number",
                                   "required"=>true])

                                    @include("admin.html.form.input",[
                                   "label"=>"",
                                   "title"=>"Input Quantity Of CHEAP Ticket",
                                   "key"=>"cheap",
                                   "type"=>"number",
                                   "required"=>true])

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
