@extends('layouts.app')
@section("title","Payment")
@section('content')
    <section>
        <div class="hot-page2-alp1">
            <div class="tr-regi-form v2-search-form">
                    <h4 >Enter Customers Information</h4>
                    <p >Please fill out all information.</p>
                    <p >This information will be displayed on your ticket</p>
                <br>
                <form style="background-color: #fafafa"  class="col s12"  method="post" action="{{url('/checkout')}}">
                    @csrf
                    @for($i=0;$i<$buy_qty;$i++)
                        <p></p>
                        <p></p>
                        <h4 style="font-size: 30px; color: #0D47A1">Custormer {{$i+1}}</h4>

                        <div class="row" style="padding: 0px 15px">
                            <div class="input-field col s12 m6">
                                <h5>Name</h5>
                                <input name="payment_info[{{$i}}][name]" type="text" class="validate">
                                @if(session()->has('error') && session('error')['key'] == 'name' && session('error')['offset'] == $i)
                                    <span class="text-danger">{{session('error')['message']}}</span>
                                @endif
                            </div>
                            <div class="input-field col s12 m6" >
                                <h5>Số CCCD</h5>
                                <input name="payment_info[{{$i}}][cccd]" type="text" class="validate">
                                @if(session()->has('error') && session('error')['key'] == 'cccd' && session('error')['offset'] == $i)
                                    <span class="text-danger">{{session('error')['message']}}</span>
                                @endif
                            </div>
                        </div>
                        <div style="margin-bottom: 30px;padding: 0px 15px" class="row" >
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
                        <hr style="border-bottom: 1px solid black">
                    @endfor

                    <div class="row">
                        <div class="col-md-6">
                            <button type="submit"  class="waves-effect waves-light full-btn ">SUBMIT</button>
                        </div>
                        <div class="col-md-6">
                            <h5 class="db-pay-amount" >Total money: ${{$grand_total}}</h5>
                        </div>

                    </div>

                </form>
            </div>
        </div>
    </section>

@endsection
