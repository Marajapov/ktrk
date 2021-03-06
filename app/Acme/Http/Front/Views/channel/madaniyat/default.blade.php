<!DOCTYPE html>
<html lang="ру">
<head>
  <meta charset="UTF-8">
  <title>
    @yield('title')
  </title>
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/bootstrap-datetimepicker.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/style2.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/reveal-menu.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/madaniyat.css') }}"/>
  
  @yield('styles')
  <!-- GLOBAL SCRIPTS -->
  <script src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>
  <script src="{{ asset('js/jasny-bootstrap.js') }}"></script>
  <script src="{{ asset('js/fileinput.js') }}"></script>
  <script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>
  <script src="{{ asset('js/classie.js') }}"></script>
  <script>
      function init() {
          window.addEventListener('scroll', function(e){
              var distanceY = window.pageYOffset || document.documentElement.scrollTop,
                  shrinkOn = 50,
                  header = document.querySelector(".main-header");
              if (distanceY > shrinkOn) {
                  classie.add(header,"smaller");
              } else {
                  if (classie.has(header,"smaller")) {
                      classie.remove(header,"smaller");
                  }
              }
          });
      }
      window.onload = init();
  </script>
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
<body>
<body>
<div id="wrapper" style="padding-top: 160px">
<div id="overlay"></div>

@include('Front::partials.sidebar')
@yield('content')
@include('Front::channel.madaniyat.footer')