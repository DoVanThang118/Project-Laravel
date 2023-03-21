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

                                        <select id="airplane_id" name="airplane_id"  required >
                                            @foreach($airplane as $item)
                                                <option   @if(old("airplane_id")== $item->id) selected @endif  value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>

                                        @error("airplane_id")
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                        <label>Select AirPlane</label>

                                    </div>
                                </div>

                                <div class="row" onclick="findAirplane()">
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
                                </div>
                                <div class="row" >

                                    <div class="col-md-4">
                                        <p>Quantity Vip</p>
                                        <input style="height: 20px" type="button" id="qtyvip" value="">
                                    </div>
                                    <div class="col-md-4">
                                    <p>Quantity Normal</p>
                                        <input style="height: 20px" type="button" id="qtynormal" value="">
                                    </div>
                                    <div class="col-md-4">
                                    <p>Quantity Cheap</p>
                                        <input style="height: 20px" type="button" id="qtycheap" value="">
                                    </div>

                                    @include("admin.html.form.input",[
                                    "label"=>"",
                                    "title"=>"Input Price VIP Ticket ",
                                    "key"=>"vip",
                                    "type"=>"number",
                                    "required"=>true])

                                </div>
                                <div class="row">
                                    @include("admin.html.form.input",[
                                   "label"=>"",
                                   "title"=>"Input Price Of NORMAL Ticket",
                                   "key"=>"normal",
                                   "type"=>"number",
                                   "required"=>true])
                                </div>
                                <div class="row">
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

@section('custom_js')

    <script>

        function findAirplane() {
            var airplane_id = $( "#airplane_id" ).val();

            $.ajax({
                url:"/findAirplane"+"?airplane_id="+airplane_id,
                method:"get",
                success: function (rs){
                    $("#qtyvip").val(rs.qtyvip),
                    $("#qtycheap").val(rs.qtycheap),
                    $("#qtynormal").val(rs.qtynormal)


                }
            })
        }

    </script>
@endsection

{{--@extends("layouts.header-footer-layout2")--}}
{{--<base href="{{ url("/") }}"/>--}}
{{--@section("title")--}}
{{--    Thông tin chuyển khoản--}}
{{--@endsection--}}
{{--@section("main_content")--}}

{{--    <div class="container">--}}
{{--        <!-- Steps Progress bar -->--}}
{{--        <div class="row mt-4 mb-5">--}}
{{--            <div class="col-lg-11 mx-auto">--}}
{{--                <div class="row widget-steps">--}}
{{--                    <div class="col-4 step active">--}}
{{--                        <div class="step-name">Thông tin chuyển khoản</div>--}}
{{--                        <div class="progress">--}}
{{--                            <div class="progress-bar"></div>--}}
{{--                        </div>--}}
{{--                        <a href="" class="step-dot"></a> </div>--}}
{{--                    <div class="col-4 step disabled">--}}
{{--                        <div class="step-name">Xác nhận chuyển khoản</div>--}}
{{--                        <div class="progress">--}}
{{--                            <div class="progress-bar"></div>--}}
{{--                        </div>--}}
{{--                        <a href="" class="step-dot"></a> </div>--}}
{{--                    <div class="col-4 step disabled">--}}
{{--                        <div class="step-name">Trạng thái giao dịch</div>--}}
{{--                        <div class="progress">--}}
{{--                            <div class="progress-bar"></div>--}}
{{--                        </div>--}}
{{--                        <a href="" class="step-dot"></a> </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- Steps Progress bar End -->--}}

{{--        <h2 class="fw-400 text-center mt-3">Chuyển Khoản Qua Số Tài Khoản</h2>--}}
{{--        <p class="lead text-center mb-4">An toàn, Nhanh chóng, Thuận tiện.</p>--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-9 col-lg-7 col-xl-6 mx-auto">--}}
{{--                <div class="bg-white shadow-sm rounded p-3 pt-sm-4 pb-sm-5 px-sm-5 mb-4">--}}
{{--                    <h3 class="text-5 fw-400 mb-3 mb-sm-4">Thông tin chuyển khoản</h3>--}}
{{--                    <hr class="mx-n3 mx-sm-n5 mb-4">--}}
{{--                    <!-- Send Money Form--}}
{{--                    ============================ -->--}}
{{--                    <form id="form-send-money" action="{{url("/transfer-confirm")}}" method="get">--}}
{{--                        @csrf--}}
{{--                        <div class="mb-3">--}}
{{--                            <label for="bankID" class="form-label">Chọn Ngân Hàng</label>--}}
{{--                            <select class="form-select" id="bank_id" aria-label="Default select example">--}}
{{--                                <option selected>Vui Lòng Chọn Ngân Hàng</option>--}}
{{--                                @foreach($bank as $b)--}}
{{--                                    <option name="bank_id" value="{{$b->id}}">{{$b->name}}</option>--}}
{{--                                @endforeach--}}
{{--                            </select></div>--}}
{{--                        <div class="mb-3">--}}
{{--                            <label for="recieverID" class="form-label">Số Tài Khoản</label>--}}
{{--                            <div class="input-group">--}}
{{--                                <input type="text" required class="form-control" data-bv-field="ReceiverID" id="receiverID" name="account" placeholder="Số tài khoản">--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="mb-3">--}}
{{--                            <label for="recieverID" class="form-label">Tên Tài Khoản</label>--}}
{{--                            <input type="button" onclick="findName()" class="form-control" value="" id="userName">--}}

{{--                        </div>--}}
{{--                        <div class="mb-3">--}}
{{--                            <label for="recipientGets" class="form-label">Số tiền</label>--}}
{{--                            <div class="input-group">--}}
{{--                                <span class="input-group-text">VNĐ</span>--}}
{{--                                <input type="number" required class="form-control" name="money" data-bv-field="recipientGets" id="recipientGets" min="0" onkeyup="showMoney()"  placeholder="">--}}
{{--                                <span class="input-group-text p-0">--}}
{{--                    </span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="mb-4 mb-sm-5">--}}
{{--                            <label for="description" class="form-label">Nội dung chuyển khoản</label>--}}
{{--                            <textarea class="form-control" rows="4" name="description"  required placeholder="Nhập nội dung chuyển khoản"></textarea>--}}
{{--                        </div><hr>--}}

{{--                        <p class="text-4 fw-500">Số tiền bằng chữ<span class="float-end"> đồng</span></p>--}}
{{--                        <div class="btn-group" style="width:100%">--}}
{{--                            <button class="btn btn-outline-primary btn-lg" onclick="history.go(-1);">Quay lại</button>--}}
{{--                            <button class="btn btn-outline-primary btn-lg" type="submit" >Tiếp tục</button>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                    <!-- Send Money Form end -->--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- Content end -->--}}
{{--@endsection--}}
{{--@section('custom_js')--}}
{{--    <script>--}}
{{--        function findName() {--}}
{{--            var bank = $( "#bank_id" ).val();--}}
{{--            var account = $("#receiverID").val();--}}
{{--            $.ajax({--}}
{{--                url:"/findname"+"?bank_id="+bank+"&account="+account,--}}
{{--                method:"get",--}}
{{--                success: function (rs){--}}
{{--                    $("#userName").val(rs.user)--}}
{{--                }--}}
{{--            })--}}
{{--        }--}}
{{--        function showMoney(){--}}
{{--            var phi = $("#phi").val()--}}
{{--            var money = $("#recipientGets").val()--}}
{{--            var total =--}}
{{--                $.ajax({--}}
{{--                    url:"/showmoney",--}}
{{--                    method:"get",--}}
{{--                    success: function (rs){--}}
{{--                        var totalmoney = $("#totalMoney").text(money)--}}
{{--                    }--}}
{{--                })--}}
{{--        }--}}
{{--    </script>--}}
{{--@endsection--}}



