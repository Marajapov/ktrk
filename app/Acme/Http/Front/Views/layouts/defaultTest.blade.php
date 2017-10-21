<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Кыргыз Республикасынын Коомдук телерадиоберүү корпорациясынын расмий сайты | Официальный сайт Общественной Телерадиовещательной корпорации Кыргызской Республики">
    <meta name="keywords" content="КТРК,ОТРК,телевидение,радиовещание,общественная телерадиовещательная корпорация,телерадиоберүү корпорациясы,Кыргызская Республика,Кыргыз Республикасы,сайт,официальный сайт,расмий сайт,улут,народ,новости,жаңылыктар,видео,медиа,фото,сүрөт,онлайн ктрк,генеральный директор,Ulut Soft">
    <meta name="author" content="КТРК">
    <title>@yield('title')</title>

    <!-- For Ajax -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- FAVICON -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">

    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}"/>

    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css') }}"/>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/sweetalert.css') }}">

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

</head>
<body>

<!-- include('Front::partials.preloader') -->

<div id="wrapper">

    <div id="overlay"></div>
        <!-- include('Front::partials.sidebar') -->
        <!-- Page Content -->
            <div id="page-content-wrapper">
                @include('Front::partials.headerTest')

                @yield('content')

@include('Front::partials.footerTest')