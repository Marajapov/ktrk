<!DOCTYPE html>
<html lang="ру">
<head>
    <meta charset="UTF-8">
    <title>
        @yield('title')
    </title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>

    <link rel="stylesheet"  href="{{ asset('css/lightslider.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/gallery.css') }}"/>

    <script src="{{ asset('js/gallery/modernizr.custom.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('css/style2.css') }}"/>

    <script src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>
    <script src="{{ asset('js/admin/jasny/jasny-bootstrap.min.js') }}"></script>

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