<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>@yield('title',"Admin")</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    @include("admin.html.css")
    @yield("custom_css")
</head>
<body>
@include("admin.html.header")

<!--== BODY CONTNAINER ==-->
<div class="container-fluid sb2">
    <div class="row">
        @include("admin.html.aside")
        @yield("content")
    </div>
</div>

@include("admin.html.js")
@yield("custom_js")
</body>
</html>
