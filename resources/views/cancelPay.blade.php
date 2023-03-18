@extends('layouts.app')
@section("title","Danh sách chuyến bay")
@section('content')
    <section>
    <div class="form form-spac">
        <div class="rows container">
            <div class="nf">Payment</div>
            <div class="nf1">Canceled</div>
            <div class="links">
                <h4>Buy tickets again?</h4>
                <ul>
                    <li><a href="{{url("/")}}">Repurchase</a> </li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection