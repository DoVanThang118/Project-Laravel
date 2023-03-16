@extends('user.layout')
@section("title","Payment")
@section('center-content')
    <div class="db-2">
        <div class="db-2-com db-2-main">
            <h4>Enter Payment Details </h4>
            <div class="db-2-main-com db2-form-pay db2-form-com">
                <div class="db-pay-card">
                <form method="post" action="{{url("/checkout")}}">
                    @csrf
                    <div class="row">
                        @include("admin.html.form.input",[
                          "label"=>"",
                          "title"=>"Fill your username",
                          "key"=>"user_id",
                          "type"=>"text",
                          "required"=>true,
                          ])
                    </div>
                    <div class="row">
                        <span class="db-pay-amount">Total of ticket: {{$qty}}</span>
                    </div>
                    <div class="row">
                        <span class="db-pay-amount">Total money: ${{$grand_total}}</span>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="submit" value="SUBMIT" class="waves-effect waves-light full-btn">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
