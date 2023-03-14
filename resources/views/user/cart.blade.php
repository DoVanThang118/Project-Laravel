@extends('user.layout')
@section("title","Payment All")
@section('center-content')
    <div class="db-2">
        <form>
            <div class="db-2-com db-2-main">
                <h4>Your ticket</h4>
                <div class="db-2-main-com db-2-main-com-table db2-form-pay db2-form-com">
                    <table class="responsive-table">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>From</th>
                            <th>To</th>
                            <th>Time</th>
                            <th>Type</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total money</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Ha Noi</td>
                            <td>Ho Chi Minh</td>
                            <td>11:00:00 - 13:00:00</td>
                            <td>VIP</td>
                            <td>300.000</td>
                            <td>1</td>
                            <td>300.000</td>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="col-md-6">
                        <h5>Discount</h5>
                        <input style="height: 30px" type="text"  class="validate" name="discount" required>
                        <p style="font-size: 12px">If you have a discount code please enter the code</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4" style="float: right;margin-right: 30px">
                        <span class="db-pay-amount" style="color: rgba(255,0,0,0.89)">Total: 300.000</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2" style="float: right;margin-right: 30px">
                        <div class="hot-page2-alp-ri-p3 tour-alp-ri-p3">
                            <a href="{{url("/payment")}}" style="width: 100px" class="btn btn-warning">Done</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
