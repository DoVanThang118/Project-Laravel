@extends('user.layout')
@section("title","Payment")
@section('center-content')
    <div class="db-2">
        <div class="db-2-com db-2-main">
            <h4>Enter Customers Details </h4>
            <div class="db-2-main-com db2-form-pay db2-form-com">
                <div class="db-2-main-com db2-form-pay db2-form-com">
                    <form style="background-color: #fafafa"  class="col s12"  method="post" action="{{route('placeOrder')}}">
                        @csrf
                        @for($i=0;$i<$buy_qty;$i++)
                        <p></p>
                        <p></p>
                        <h4>Custormer {{$i+1}}</h4>

                        <div class="row">
                            <div class="input-field col s12">
                                <h5>Name</h5>
                                <input name="payment_info[{{$i}}][name]" type="text" class="validate">
                                @if(session()->has('error') && session('error')['key'] == 'name' && session('error')['offset'] == $i)
                                    <span class="text-danger">{{session('error')['message']}}</span>
                                @endif
                            </div>
                            <div class="input-field col s12 ">
                                <h5>Address</h5>
                                <input name="payment_info[{{$i}}][cccd]" type="text" class="validate">
                                @if(session()->has('error') && session('error')['key'] == 'cccd' && session('error')['offset'] == $i)
                                    <span class="text-danger">{{session('error')['message']}}</span>
                                @endif
                            </div>
                        </div>
                        <div style="margin-bottom: 30px" class="row">
                            <div class="input-field col s12 m6">
                                <h5>Phone Number</h5>
                                <input name="payment_info[{{$i}}][phone]" type="text" class="validate">
                                @if(session()->has('error') && session('error')['key'] == 'cccd' && session('error')['offset'] == $i)
                                    <span class="text-danger">{{session('error')['message']}}</span>
                                @endif
                            </div>
                            <div class="input-field col s12 m6">
                                <h5>Date of birth</h5>
                                <input name="payment_info[{{$i}}][birthday]" type="date" required>
                                @if(session()->has('error') && session('error')['key'] == 'cccd' && session('error')['offset'] == $i)
                                    <span class="text-danger">{{session('error')['message']}}</span>
                                @endif
                            </div>
                        </div>
                        <hr>
                    @endfor

                    <div class="row">
                                                        <span class="db-pay-amount">Total money: ${{$grand_total}}</span>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <button type="submit"  class="waves-effect waves-light full-btn">SUBMIT</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
