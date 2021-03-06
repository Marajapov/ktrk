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
      
      <link rel="stylesheet" href="{{ asset('css/landing/dostuk.css')}}">
      <link rel="stylesheet" href="{{ asset('css/radios.css')}}">
      <link rel="stylesheet" href="{{ asset('css/articles.css') }}"/>
      <link rel="stylesheet" href="{{ asset('css/pages.css') }}"/>

      <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css') }}"/>
      <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css') }}"/>

      <link rel="stylesheet" href="{{asset('css/landing/animate.min.css')}}"/>
      <link rel="stylesheet" href="{{asset('css/landing/owl.carousel.css')}}"/>
      <link rel="stylesheet" href="{{asset('css/landing/owl.transitions.css')}}"/>
      <link rel="stylesheet" href="{{asset('css/landing/prettyPhoto.css')}}"/>
      <link rel="stylesheet" href="{{asset('css/landing/responsive.css')}}"/>
      
      @yield('styles')
   </head>
   <body id="dostuk">
      @yield('content')
      @include('Front::channel.dostuk.footer')