<!DOCTYPE html>
<html lang="ру">
<head>
    <meta charset="UTF-8">
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


    <link rel="stylesheet" type="text/css" href="{{ asset('css/custombox.css') }}"/>
    <link rel="stylesheet"  href="{{ asset('css/lightslider.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/gallery.css') }}"/>


    @yield('styles')

</head>
<body id="minkiyal">


    @yield('content')


<script src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

    @include('Front::channel.kyrgyzradio.footer')

    
