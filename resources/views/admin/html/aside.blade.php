<div class="sb2-1">
    <!--== USER INFO ==-->
    <div class="sb2-12" >
        <ul>
            <li><img src="/assets/images/face.jpg" alt="">
            </li>
            <li>
                <h5>ADMIN</h5>
            </li>


        </ul>
    </div>
    <!--== LEFT MENU ==-->
    <div class="sb2-13">
        <ul class="collapsible" data-collapsible="accordion">
            <li><a href="{{url("admin/dashboard")}}" class="menu-active"><i class="fa fa-bar-chart" aria-hidden="true"></i> Dashboard</a>
            </li>
            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-ticket" aria-hidden="true"></i>Airplanes</a>
                <div class="collapsible-body left-sub-menu">
                    <ul>
                        <li><a href="{{url("admin/airplane/airplane-all")}}">All Airplanes</a>
                        </li>
                        <li><a href="{{url("admin/airplane/airplane-add")}}">Add New Airplanes</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-umbrella" aria-hidden="true"></i> Flight</a>
                <div class="collapsible-body left-sub-menu">
                    <ul>
                        <li><a href="{{url("admin/flight/flight-all")}}">All Flights</a>
                        </li>
                        <li><a href="{{url("admin/flight/flight-add")}}">Add New Flights</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-picture-o" aria-hidden="true"></i> AirStrip</a>
                <div class="collapsible-body left-sub-menu">
                    <ul>
                        <li><a href="{{url("admin/airstrip/airstrip-all")}}">All AirStrip</a>
                        </li>
                        <li><a href="{{url("admin/airstrip/airstrip-add")}}">Add New AirStrip</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-usd" aria-hidden="true"></i> Discounts</a>
                <div class="collapsible-body left-sub-menu">
                    <ul>
                        <li><a href="{{url("admin/discount/discount-all")}}">All Discounts</a>
                        </li>
                        <li><a href="{{url("admin/discount/discount-add")}}">Add New Discounts</a>
                        </li>
                    </ul>
                </div>
            </li>


{{--            <li><a href="login.html" target="_blank"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>--}}
{{--            </li>--}}
        </ul>
    </div>
</div>

