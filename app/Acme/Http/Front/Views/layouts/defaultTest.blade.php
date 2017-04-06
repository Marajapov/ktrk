<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Кыргыз Республикасынын Коомдук телерадиоберүү корпорациясынын расмий сайты | Официальный сайт Общественной Телерадиовещательной корпорации Кыргызской Республики">
    <meta name="keywords" content="КТРК,ОТРК,телевидение,радиовещание,общественная телерадиовещательная корпорация,телерадиоберүү корпорациясы,Кыргызская Республика,Кыргыз Республикасы,сайт,официальный сайт,расмий сайт,улут,народ,новости,жаңылыктар,видео,медиа,фото,сүрөт,онлайн ктрк,генеральный директор,Ulut Soft">
    <meta name="author" content="КТРК">
    <title>@yield('title')</title>

    <!-- FAVICON -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">

    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}"/>

    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css') }}"/>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/sweetalert.css') }}">

    <link rel="stylesheet" href="{{ asset('filter/css/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/reveal-menu.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/test.css') }}"/>

    <!-- GLOBAL SCRIPTS -->
    <script src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>
    <script src="{{ asset('js/jasny-bootstrap.js') }}"></script>
    <script src="{{ asset('js/fileinput.js') }}"></script>
    <script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>
    <script src="{{ asset('js/classie.js') }}"></script>

    @yield('styles')
    <style>
        body{
            @if($backgroundMain != null)
            background: rgba(0, 0, 0, 0) url('{{ asset($backgroundMain->getFile()) }}') 50% 50% no-repeat fixed;
        @endif
      }
    </style>

    <script src="{{ asset('js/jquery.scrollspeed.js') }}"></script>

</head>
<body>

{{--<div id="preloader">--}}
    {{--<div id="status" class="">--}}

        {{--<svg id="logo" class="line-drawing" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 138 92.2">--}}
            {{--<path class="st0" d="M81.1,41.5v50.1c34.1-0.9,55-4.3,55.5-9c1.3-12,1.2-30.5-0.7-38.4c-1.9-7.7-7.8-19.4-45.4-38.1--}}
                    {{--c-18.6-9.2-32-5.7-43,0C19.4,20.7,5.4,31.3,2.3,44c-3,12.3-1.4,37.2-0.9,38.5c0.5,1.3,1.3,7.2,52.4,9V55.1L81.1,41.5z"/>--}}
        {{--</svg>--}}
        {{--<div data-svg="logo" class="ktrk-logo hi"></div>--}}
    {{--</div>--}}
{{--</div>--}}

<script>
    // $fn.scrollSpeed(step, speed, easing);
    jQuery.scrollSpeed(100, 800);
</script>

<div id="wrapper">

    <div id="overlay"></div>
        @include('Front::partials.sidebar')
        <!-- Page Content -->
            <div id="page-content-wrapper">
                @include('Front::partials.headerTest')
                @include('Front::partials.banner')

                @yield('content')

@include('Front::partials.footerTest')