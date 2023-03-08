<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>@yield("title","The Travel")</title>

    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    @include("layouts.css")
    @yield("custom_css")
</head>
<body>
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>

    <!-- MOBILE MENU -->
    @include("layouts.mobile-menu")
    <!--HEADER SECTION-->
    @include("layouts.header")
    <!--END HEADER SECTION-->

    @yield('content')

    <!--====== TIPS BEFORE TRAVEL ==========-->

    <!--====== FOOTER ==========-->
    @include("layouts.footer")

    <!--========= Scripts ===========-->
    @include("layouts.js")
    @yield("custom_js")
</body>
</html>
