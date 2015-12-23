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
    

    <link rel="stylesheet" href="{{asset('css/landing/animate.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/landing/owl.carousel.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/landing/owl.transitions.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/landing/prettyPhoto.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/landing/responsive.css')}}"/>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/custombox.css') }}"/>
    <link rel="stylesheet"  href="{{ asset('css/lightslider.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/gallery.css') }}"/>



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


    @yield('content')

    <div class="container">
      <div class="col-md-12 apps-logo">
        <div class="row">
          <div class="col-md-3 col-md-offset-3">
            <a href="#" class="android">
              <img src="{{ asset('images/android.png') }}" alt=""/>
            </a>
          </div>
          <div class="col-md-3">
            <a href="#" class="ios">
              <img src="{{ asset('images/ios.png') }}" alt=""/>
            </a>
          </div>
        </div>
      </div>
    </div>

    @include('Front::partials.footer')
    @yield('footerscript2')