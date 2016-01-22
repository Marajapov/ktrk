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
    
    <link rel="stylesheet" href="{{ asset('css/radios.css')}}">
    <link rel="stylesheet" href="{{ asset('css/articles.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/pages.css') }}"/>

    <link rel="stylesheet"  href="{{ asset('css/lightslider.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/gallery.css') }}"/>

    <script src="{{ asset('js/gallery/modernizr.custom.js') }}"></script>

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

    @include('Front::partials.footer')
    
    @yield('footerscript2')

    {{--<script src="{{ asset('js/newsslider.js') }}"></script>--}}
<script>
   $(document).ready(function(){
       $(".search-toggle").click(function(){
           $(".logo-block").addClass("search-show");
           $(".form-search").addClass("visible");
       });
       $(".close-search").click(function(){
           $(".logo-block").removeClass("search-show");
           $(".form-search").removeClass("visible");
       });
   
     var header = $('#videoTitle span');
     $('.slider-nav .slick-slide').each(function(){
       var videoTitle = $(this).children('.videoTitle').text();
       $(this).click(function () {
         header.text(videoTitle);
       });
     });
   });
</script>
<script>
   if ($(window).width() > 768) {
       $('.carousel-slick-birinchi').slick({
           infinite: true,
           slidesToShow: 4,
           slidesToScroll: 1
       });
   }
   
   
   if ($(window).width() < 768) {
       $('.carousel-slick-birinchi').slick({
           infinite: true,
           slidesToShow: 2,
           slidesToScroll: 1
       });
   }
</script>
<script>
   if ($(window).width() > 768) {
       $('.carousel-slick-peredacha').slick({
           infinite: true,
           slidesToShow: 4,
           slidesToScroll: 1
       });
   }
   if ($(window).width() < 768) {
       $('.carousel-slick-peredacha').slick({
           infinite: true,
           slidesToShow: 2,
           slidesToScroll: 1
       });
   }
</script>