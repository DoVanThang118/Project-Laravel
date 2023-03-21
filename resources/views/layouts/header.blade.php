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
                            <!--<li><a class='dropdown-button ed-sub-menu' href='#' data-activates='dropdown1'>Courses</a></li>-->
                            <li class="cour-menu">
                                <a href="{{url('/')}}" class="mm-arr">Home</a>
                            </li>
                            <li class="admi-menu">
                                <a href="{{url("/user/cart")}}" class="mm-arr">All booking <span>{{session()->has("cart")&&is_array(session("cart"))?count(session("cart")):0}} </a>
                            </li>
                            <li>
                                <a href="{{url("/profile")}}">Profile</a>
                            </li>
                            <li><a href="{{url("/aboutus")}}">About us</a><!--thông tin thêm về công ty -->
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- TOP SEARCH BOX -->
    <!-- END TOP SEARCH BOX -->
</section>
