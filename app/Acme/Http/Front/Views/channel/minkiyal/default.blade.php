<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8"/>
    <title>
        @yield('title')
    </title>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css') }}"/>
    
    <link rel="stylesheet" href="{{ asset('css/radios.css')}}">
    <link rel="stylesheet" href="{{ asset('css/animation.css')}}">
    <link rel="stylesheet" href="{{ asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('css/minkiyal.css')}}">


    <link rel="stylesheet" type="text/css" href="{{ asset('css/custombox.css') }}"/>
    <link rel="stylesheet"  href="{{ asset('css/lightslider.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/gallery.css') }}"/>

    <script src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>
    <script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>
    @yield('styles')
    <style>
    body{
     @if($backgroundMain != null) background: url('{{ asset($backgroundMain->getFile()) }}') no-repeat;
         background-repeat: no-repeat;
         background-attachment: fixed;
         background-position: center;
         background-size: cover;
         @endif
    }
    </style>

</head>
<body id="minkiyal" class="home">

    @yield('content')

    @include('Front::channel.minkiyal.footer')

    
