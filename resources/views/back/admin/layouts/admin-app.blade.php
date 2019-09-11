<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Title -->
        <title>@yield('title')</title>

        <!-- Styles -->
        <link href="{{asset('css/back/back-custom.css')}}" rel="stylesheet">
        <link href="{{asset('css/back/main.css')}}" rel="stylesheet">

        <!-- Additional styles -->
        @yield('additional-styles')
    </head>
    <body>
        <!-- Header start -->
        @include('back.admin.layouts.admin-header')
        <!-- Header end -->
        
        <!-- Main start -->
        @yield('content')
        <!-- Main end -->
        
        <!-- Footer start -->
        @include('back.admin.layouts.admin-footer')
        <!-- Footer end -->
    </body>
    <script src="{{asset('js/back/back.js')}}"></script>
    <script src="{{asset('js/back/main.js')}}"></script>
</html>
