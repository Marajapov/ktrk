<!DOCTYPE html>
<html lang="ру">
<head>
    <meta charset="UTF-8">
    <title>
        @yield('title')
    </title>

    <link rel="shortcut icon" href="{{ asset('images/muz-favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/muz-favicon.ico') }}" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datetimepicker.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}"/>
    <link rel="stylesheet" href="{{ asset('filter/css/layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/test3.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/goodshare.css') }}"/>


    <link rel="stylesheet" type="text/css" href="{{ asset('css/custombox.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/audio/muzslider.css') }}"/>

    <script src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>
    <script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>


    @yield('styles')

    <script>
        $(document).ready(function () {
            $(".search-toggle").click(function () {
                $(".logo-block").addClass("search-show");
                $(".form-search").addClass("visible");
                $(".soc").addClass("hidden");
                $(".clangs").addClass("hidden");

            });
            $(".close-search").click(function () {
                $(".logo-block").removeClass("search-show");
                $(".form-search").removeClass("visible");
                $(".soc").removeClass("hidden");
                $(".clangs").removeClass("hidden");

            });
        });
    </script>

    <style>
       body{
         @if($backgroundMain != null) 
         background: rgba(0, 0, 0, 0) url('{{ asset($backgroundMain->getFile()) }}') 50% 50% no-repeat fixed !important;         
         @endif
       }
    </style>

</head>
<body class="music">

@yield('content')

@include('Front::channel.muzkanal.footer')