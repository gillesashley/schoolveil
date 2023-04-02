<!doctype html>
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    {{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}

    {{--    <title>{{ config('app.name', 'Laravel') }}</title>--}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('assets/images/favicon.ico" type="image/x-icon')}}">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome/css/fontawesome-all.min.css')}}">
    <!-- animation css -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/animation/css/animate.min.css')}}">
    <!-- notification css -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/notification/css/notification.min.css')}}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    @stack('styles')
</head>
<body>
<div id="app">
    @include('layouts/inc/sidenav')
    @include('layouts/inc/header')

    <main>
        @yield('content')
    </main>
</div>

<!-- Required Js -->
<script src="{{asset('assets/js/vendor-all.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

<script src="{{asset('assets/js/pcoded.min.js')}}"></script>

@stack('script')
</body>
</html>
