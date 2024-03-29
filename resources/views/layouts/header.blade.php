<section>
    <!-- TOP BAR -->
    <div class="ed-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ed-com-t1-left">
                        <ul>
                            <li><a href="#">Contact: Lake Road, Suite 180 Farmington Hills, U.S.A.</a>
                            </li>
                            <li><a href="#">Phone: +101-1231-1231</a>
                            </li>
                        </ul>
                    </div>
                    <div class="ed-com-t1-right row">
                        <div class="col">
                            @guest
                                <a href="{{route("login")}}" class="btn btn-default">Login</a>
                            @endguest

                            @auth
                                <form action="{{route("logout")}}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-default">Logout</button>
                                </form>
                            @endauth
                        </div>
                        <div class="col">
                            <a>
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="ed-com-t1-social">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- LOGO AND MENU SECTION -->
    <div class="top-logo" data-spy="affix" data-offset-top="250">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wed-logo">
                        <a href="{{ url('/') }}"><img src="/assets/images/logo.png" alt="" />
                        </a>
                    </div>
                    <div class="main-menu">
                        <ul>
                            <li class="about-menu">
                                <a href="#" class="mm-arr">Endow</a><!--các ưu đãi-->
                                <!-- MEGA MENU 1 -->
                                <div class="mm-pos">
                                    <div class="about-mm m-menu">
                                        <div class="m-menu-inn">
                                            <div class="mm1-com mm1-s1">
                                                <div class="ed-course-in">
                                                    <a class="course-overlay menu-about" href="#">
                                                        <img src="/assets/images/sight/5.jpg" alt="">
                                                        <span>Popular Flights</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="mm1-com mm1-s3">
                                                <h4>Best Fare Finder</h4><!--ưu đãi theo chuyến bay-->
                                                <ul>
                                                    <li><a href="#">Hanoi to Da Nang</a></li>
                                                    <li><a href="#">Hanoi to Ho Chi Minh city</a></li>
                                                    <li><a href="#">Ho Chi Minh city to Hanoi</a></li>
                                                    <li><a href="#">Ho Chi Minh city to Da Nang</a></li>
                                                    <li><a href="#">Da Nang to Ho Chi Minh city</a></li>
                                                    <li><a href="#">All Routes</a></li>
                                                </ul>
                                            </div>
                                            <div class="mm1-com mm1-s3">
                                                <h4>Top Destinations</h4><!--những điểm đến hấp dẫn trong nước-->
                                                <ul>
                                                    <li><a href="#">Hanoi</a></li>
                                                    <li><a href="#">Ho Chi Minh city</a></li>
                                                    <li><a href="#">Da Nang</a></li>
                                                    <li><a href="#">Phu Quoc</a></li>
                                                    <li><a href="#">Nha Trang</a></li>
                                                    <li><a href="#">Explore all destinations</a></li>
                                                </ul>
                                            </div>
                                            <div class="mm1-com mm1-s4">
                                                <h4>Popular Countries</h4><!--các quốc gia phổ biến-->
                                                <ul>
                                                    <li><a href="#">Flights To Australia</a></li>
                                                    <li><a href="#">Flights to Singapore</a></li>
                                                    <li><a href="#">Flights to France</a></li>
                                                    <li><a href="#">Flights to Japan</a></li>
                                                    <li><a href="#">Flights to Korea</a></li>
                                                    <li><a href="#">All Countries</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!--<li><a class='dropdown-button ed-sub-menu' href='#' data-activates='dropdown1'>Courses</a></li>-->
                            <li class="cour-menu">
                                <a href="#" class="mm-arr">Booking information</a>
                                <!-- MEGA MENU 1 -->
                                <div class="mm-pos">
                                    <div class="cour-mm m-menu">
                                        <div class="m-menu-inn">
                                            <div class="mm1-com mm1-s3">
                                                <h4>Flight & Additional Services</h4>
                                                <!--vé máy bay và dịch vụ bổ trợ-->
                                                <ul>
                                                    <li><a href="#">Fare Types & Rules</a></li><!--dịch vụ vé-->
                                                    <li><a href="#">Additional Services</a></li><!--dịch vụ bổ trợ-->
                                                </ul>
                                            </div>
                                            <div class="mm1-com mm1-s3">
                                                <h4>The Experience</h4><!--các trải nghệm-->
                                                <ul>
                                                    <li><a href="#">Business Class</a></li><!--hạng thương gia-->
                                                    <li><a href="#">Premium Economy Class</a></li><!--hạng phổ thông cao cấp-->
                                                    <li><a href="#">Economy Class</a></li><!--hạng phổ thông-->
                                                </ul>
                                            </div>
                                            <div class="mm1-com mm1-s3">
                                                <h4>Timetable & Route Map</h4><!--Tra cứu lịch trình và thời gian chuyến bay-->
                                                <ul>
                                                    <li><a href="#">Timetable</a></li><!--lịch bay-->
                                                    <li><a href="#">Worldwide Routemap</a></li><!--bản đồ đường bay thế giới-->
                                                </ul>
                                            </div>
                                            <div class="mm1-com mm1-s4">
                                                <h4>Affiliate Products</h4><!--Sản phẩm liên kết-->
                                                <ul>
                                                    <li><a href="#">Rail & Fly</a></li><!--máy bay kết hợp tàu-->
                                                    <li><a href="#">Deals From Partners</a></li><!--dịch vụ của nhà tài trợ-->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="admi-menu">
                                <a href="{{url("/all-booking")}}" class="mm-arr">All booking</a>
                            </li>
                            <li>
                                <a href="{{url("/profile")}}">Profile</a>
                            </li>
                            <li><a href="#">Contact us</a><!--thông tin thêm về công ty -->
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- TOP SEARCH BOX -->
    <div class="search-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="search-form">
                        <form class="tourz-search-form">
                            <div class="input-field">
                                <input type="text" id="select-city" class="autocomplete">
                                <label for="select-city">Enter city</label>
                            </div>
                            <div class="input-field">
                                <input type="text" id="select-search" class="autocomplete">
                                <label for="select-search" class="search-hotel-type">Search.....</label>
                            </div>
                            <div class="input-field">
                                <input type="submit" value="search" class="waves-effect waves-light tourz-sear-btn"> </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END TOP SEARCH BOX -->
</section>
