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
<!--     
    <link rel="stylesheet" href="{{ asset('css/radios2.css')}}"> -->
    <link rel="stylesheet" href="{{ asset('css/landing/main.css')}}">
    <link rel="stylesheet" href="{{ asset('css/articles.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/pages.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css') }}"/>

    <link rel="stylesheet" href="{{asset('css/landing/animate.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/landing/owl.carousel.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/landing/owl.transitions.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/landing/prettyPhoto.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/landing/responsive.css')}}"/>
    

    <link rel="stylesheet" type="text/css" href="{{ asset('css/custombox.css') }}"/>
    <link rel="stylesheet"  href="{{ asset('css/lightslider.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/gallery.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/goodshare.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/sweetalert.css') }}">

    @yield('styles')

    <style>
       body{
         @if($backgroundMain != null) 
         background: rgba(0, 0, 0, 0) url('{{ asset($backgroundMain->getFile()) }}') 50% 50% no-repeat fixed;         
         @endif
       }
     </style>

</head>
<body id="kyrgyzradio">


    @yield('content')




@include('Front::channel.kyrgyzradio.footer')

    
