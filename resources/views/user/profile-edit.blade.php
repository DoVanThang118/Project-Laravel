@extends('layouts.app')
@section("title","Profile-Edit")
@section('content')
    <section>
        <div class="db">
            <div class="db-l">
                <div class="db-l-1">
                    <ul>
                        <li>
                            <img src="/assets/images/db-profile.jpg" alt="" />
                        </li>
                    </ul>
                </div>
                <div class="db-l-2">
                    <ul>
                        <li>
                            <a href="{{url("/profile")}}"><img src="/assets/images/icon/dbl6.png" alt="" /> My Profile</a>
                        </li>
                        <li>
                            <a href="{{url("/user/cart")}}"><img src="/assets/images/icon/dbl1.png" alt="" /> Your Bookings</a>
                        </li>
                        <li>
                            <a href="{{url("/checkout")}}"><img src="/assets/images/icon/dbl9.png" alt="" /> Payments</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="db-2">
                <div class="db-2-com db-2-main">
                    <h4>Edit My Profile </h4>
                    <div class="db-2-main-com db2-form-pay db2-form-com">
                        <form class="col s12" method="post" action="{{url("/profile-edit")}}">
                            @csrf
                            <div class="row">
                                <div class="input-field col s12">
                                    <label for="name"><strong>Name:</strong></label>
                                    <input type="text" class="form-control" id ="name" name="name" value="{{Auth::user()->name}}">
                                    @error("name")
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12 m6">
                                    <label for="name"><strong>Gender:</strong></label>
                                    <input type="text" class="form-control" id ="name" name="name" value="{{Auth::user()->sex}}">
                                    @error("sex")
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="input-field col s12 m6">
                                    <label for="name"><strong>Birthday:</strong></label>
                                    <input type="date" class="form-control" id ="name" name="name" value="{{Auth::user()->birthday}}">
                                    @error("birthday")
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12 m6">
                                    <label for="name"><strong>Email:</strong></label>
                                    <input type="text" class="form-control" id ="name" name="name" value="{{Auth::user()->email}}">
                                    @error("email")
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="input-field col s12 m6">
                                    <label for="name"><strong>Phone:</strong></label>
                                    <input type="text" class="form-control" id ="name" name="name" value="{{Auth::user()->phone}}">
                                    @error("phone")
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row ">
                                <label for="name"><strong>Address:</strong></label>
                                <input type="text" class="form-control" id ="name" name="name" value="{{Auth::user()->address}}">
                                @error("address")
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
{{--                            <div class="row ">--}}
{{--                                @include('user.form.input',[--}}
{{--                                       "label"=>"",--}}
{{--                                         "title"=>"Avatar",--}}
{{--                                         "key"=>"thumbnail",--}}
{{--                                         "type"=>"file",--}}
{{--                                         "required"=>false,--}}
{{--                                    ])--}}
{{--                                @error("thumbnail")--}}
{{--                                <p class="text-danger">{{$message}}</p>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="submit" value="SUBMIT" class="waves-effect waves-light full-btn"> </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="db-3">
                <h4>Notifications</h4>
                <ul>
                    <li>
                        <a href="#!"> <img src="/assets/images/icon/dbr1.jpg" alt="" />
                            <h5>50% Discount Offer</h5>
                            <p>All the Lorem Ipsum generators on the</p>
                        </a>
                    </li>
                    <li>
                        <a href="#!"> <img src="/assets/images/icon/dbr2.jpg" alt="" />
                            <h5>paris travel package</h5>
                            <p>All the Lorem Ipsum generators on the</p>
                        </a>
                    </li>
                    <li>
                        <a href="#!"> <img src="/assets/images/icon/dbr3.jpg" alt="" />
                            <h5>Group Trip - Available</h5>
                            <p>All the Lorem Ipsum generators on the</p>
                        </a>
                    </li>
                    <li>
                        <a href="#!"> <img src="/assets/images/icon/dbr4.jpg" alt="" />
                            <h5>world best travel agency</h5>
                            <p>All the Lorem Ipsum generators on the</p>
                        </a>
                    </li>
                    <li>
                        <a href="#!"> <img src="/assets/images/icon/dbr5.jpg" alt="" />
                            <h5>special travel coupons</h5>
                            <p>All the Lorem Ipsum generators on the</p>
                        </a>
                    </li>
                    <li>
                        <a href="#!"> <img src="/assets/images/icon/dbr6.jpg" alt="" />
                            <h5>70% Offer 2018</h5>
                            <p>All the Lorem Ipsum generators on the</p>
                        </a>
                    </li>
                    <li>
                        <a href="#!"> <img src="/assets/images/icon/dbr7.jpg" alt="" />
                            <h5>Popular Cities</h5>
                            <p>All the Lorem Ipsum generators on the</p>
                        </a>
                    </li>
                    <li>
                        <a href="#!"> <img src="/assets/images/icon/dbr8.jpg" alt="" />
                            <h5>variations of passages</h5>
                            <p>All the Lorem Ipsum generators on the</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

@endsection
