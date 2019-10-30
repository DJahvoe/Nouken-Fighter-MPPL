<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <!-- CSRF Token -->
            <meta name="csrf-token" content="{{ csrf_token() }}">

            <!-- Scripts -->
            <script src="{{ asset('js/app.js') }}" defer></script>

            <!-- Fonts -->
            <link rel="dns-prefetch" href="//fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

            <!-- Styles -->
            <link href="{{ asset('css/app.css') }}" rel="stylesheet">

            <title>{{ config('app.name', 'NoukenFighter') }}</title>
            <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap4/bootstrap.min.css') }}">
            <link href="{{ asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
            <link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
            <link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
            <link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/animate.css') }}">
            <link rel="stylesheet" type="text/css" href="{{ asset('css/main_styles.css') }}">
            <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
            @yield('custom-css')
    </head>
    <body>
        @include('inc.navbar')
        @include('inc.messages')
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
