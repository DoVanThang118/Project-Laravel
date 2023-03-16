@extends('user.layout')
@section("title","Payment")
@section('center-content')
    <div class="db-2">
        <div class="db-2-com db-2-main">
            <h4>Enter Customers Details </h4>
            <div class="db-2-main-com db2-form-pay db2-form-com">
                <form class="col s12"  method="post" action="{{url("/checkout")}}">
                    @csrf
                    @for($i=0;$i<$qty;$i++)
                        <p></p>
                        <p></p>
                        <h4>Custormer {{$i+1}}</h4>

                    <div class="row">
                        <div class="input-field col s12">
                            <h5>Name</h5>
                            <input name="name{{$i}}" type="text" class="validate" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m6">
                            <h5>Gender</h5>
                            <input name="gender{{$i}}" type="text" class="validate" required>
                        </div>
                        <div class="input-field col s12 m6">
                            <h5>Date of birth</h5>
                            <input name="birthday{{$i}}" type="date" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m6">
                            <h5>Email</h5>
                            <input name="emmail{{$i}}" type="email" class="validate" required>
                        </div>
                        <div class="input-field col s12 m6">
                            <h5>Phone Number</h5>
                            <input name="phone{{$i}}" type="text" class="validate">
                        </div>
                    </div>
                    <div class="row ">
                        <div class="input-field col s12 ">
                            <h5>Address</h5>
                            <input name="address{{$i}}" type="text" class="validate">
                        </div>
                    </div>
                    @endfor
                    <div class="row">
                        <span class="db-pay-amount">Total of ticket: {{$qty}}</span>
                    </div>
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
@endsection
