<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Title -->
        <title>@yield('title')</title>

        <!-- Styles -->
        <link href="{{asset('css/front/front-custom.css')}}" rel="stylesheet">
        <link href="{{asset('css/front/main.css')}}" rel="stylesheet">
    </head>
    <body>
        <!-- Header start -->
        @include('front.layouts.front-header')
        <!-- Header end -->
        
        <!-- Main start -->
        @yield('content')
        <!-- Main end -->
        
        <!-- Footer start -->
        @include('front.layouts.front-footer')
        <!-- Footer end -->
    </body>
    <script src="{{asset('js/front/front.js')}}"></script>
    <script src="{{asset('js/front/main.js')}}"></script>
</html>
