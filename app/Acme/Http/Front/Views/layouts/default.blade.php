<!DOCTYPE html>
<html lang="ру">
<head>
  <meta charset="UTF-8">
  <title>
    @yield('title')
  </title>

  <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
  <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">

  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/bootstrap-datetimepicker.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}"/>
  <link rel="stylesheet" href="{{ asset('filter/css/layout.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>

  <link rel="stylesheet" href="{{ asset('css/date-filter.css') }}"/>

  <link rel="stylesheet" href="{{ asset('css/admin/jasny/jasny-bootstrap.min.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/fileinput.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/style2.css') }}"/>


  <script src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>
  <script src="{{ asset('js/admin/jasny/jasny-bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/fileinput.js') }}"></script>

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

  <!-- 1. skin -->
  <link rel="stylesheet" href="{{ asset('flowplayer/skin/functional.css') }}">

  <!-- 3. flowplayer -->
  <script src="{{ asset('flowplayer/flowplayer.min.js') }}"></script>

</head>
<body>

@include('Front::partials.modal')
@include('Front::partials.header')

@include('Front::partials.banner')
@yield('content')
@include('Front::partials.footer')
@yield('footerscript2')
