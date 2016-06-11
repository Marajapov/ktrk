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
  <link rel="stylesheet" href="{{ asset('css/madaniyat.css') }}"/>
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

  <script src="{{asset('js/jquery-1.11.2.min.js')}}"></script>

</head>
<body>
@yield('content')
@include('Front::channel.madaniyat.footer')