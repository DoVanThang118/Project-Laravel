<!--== MAIN CONTRAINER ==-->
<div class="container-fluid sb1">
    <div class="row">
        <!--== LOGO ==-->
        <div class="col-md-2 col-sm-3 col-xs-6 sb1-1">
            <a href="#" class="btn-close-menu"><i class="fa fa-times" aria-hidden="true"></i></a>
            <a href="#" class="atab-menu"><i class="fa fa-bars tab-menu" aria-hidden="true"></i></a>
            <a href="index.html" class="logo"><img src="/admin/images/logo1.png" alt="" />
            </a>
        </div>
        <!--== SEARCH ==-->
        <div class="col-md-6 col-sm-6 mob-hide">

        </div>
        <!--== NOTIFICATION ==-->
        <div class="col-md-2 tab-hide" >
            <div class="top-not-cen" style="margin-bottom: 30px">
                <a class='waves-effect btn-noti' href='#'><i class="fa fa-commenting-o" aria-hidden="true"></i><span>5</span></a>
                <a class='waves-effect btn-noti' href='#'><i class="fa fa-envelope-o" aria-hidden="true"></i><span>5</span></a>
                <a class='waves-effect btn-noti' href='#'><i class="fa fa-tag" aria-hidden="true"></i><span>5</span></a>
            </div>
        </div>
        <!--== MY ACCCOUNT ==-->
        <div class="col-md-2 col-sm-3 col-xs-6">
            <div class="top-not-cen" style="margin-top: 10px">
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
    </div>
</div>
