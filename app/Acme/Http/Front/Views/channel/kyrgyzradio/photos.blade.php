@extends('Front::channel.kyrgyzradio.default')
@section('title', $gallery->getName())
@section('styles')
<link rel="stylesheet" href="{{ asset('css/radios.css')}}">
<link rel="stylesheet" href="{{ asset('css/landing/main.css')}}">

<link rel="stylesheet" type="text/css" href="{{ asset('css/lightslider.css') }}">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.2.6/css/lightgallery.min.css">

@endsection
@section('content')
<body id="home" class="homepage">
@include('Front::channel.kyrgyzradio.nav')
    <!--/header-->
<div class="container" style="background: #fff;padding: 0px; margin: 20px auto;">
  
    <section id="portfolio" style="background: #fff; padding:20px 0px;">
        <div class="container">
            <div class="section-header2" style="margin:0px">
                <h2 class="section-title text-center wow fadeInDown">{{ $gallery->getName() }}</h2>

            </div>

               <div class="panel-body">
                  <div class="row" style="margin: 20px;">
                   <p style="text-align:center;color: #272727;font-size: 18px;">{{ $gallery->getDescription() }}</p>
                     <ul id="imageGallery">
                     @foreach($images as $image)

                        <li data-thumb="{{ asset('froala/uploads/'.$image->name) }}" data-src="{{ asset('froala/uploads/'.$image->name) }}">
                           <img class="resizegallery" src="{{ asset('froala/uploads/'.$image->name) }}" />
                        </li>
                     @endforeach
                        
                     </ul>
                  </div>
               </div>
        </div><!--/.container-->
    </section><!--/#portfolio-->
</div>
@stop
@section('footerscript2')

   <script src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>  

<script src="{{ asset('js/landing/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/landing/mousescroll.js') }}"></script>
<script src="{{ asset('js/landing/smoothscroll.js') }}"></script>
<script src="{{ asset('js/landing/jquery.prettyPhoto.js') }}"></script>
<script src="{{ asset('js/landing/jquery.isotope.min.js') }}"></script>
<script src="{{ asset('js/landing/jquery.inview.min.js') }}"></script>
<script src="{{ asset('js/landing/wow.min.js') }}"></script>
<script src="{{ asset('js/landing/main.js') }}"></script>
<script src="{{ asset('js/landing/jquery.js') }}"></script>
<script src="{{ asset('js/landing/fixed.js') }}"></script>
   <script src="{{ asset('js/jquery-migrate-1.2.1.min.js') }}"></script>
   <script src="{{ asset('slick/slick.min.js') }}"></script>
   <script src="{{ asset('js/lightslider.js') }}"></script>
   <script src="{{ asset('js/lightgallery/picturefill.min.js') }}"></script>
   <script src="{{ asset('js/lightgallery/lightgallery.js') }}"></script>
   <script src="{{ asset('js/lightgallery/lg-fullscreen.js') }}"></script>
   <script src="{{ asset('js/lightgallery/lg-thumbnail.js') }}"></script>
   <script src="{{ asset('js/lightgallery/lg-video.js') }}"></script>
   <script src="{{ asset('js/lightgallery/lg-autoplay.js') }}"></script>
   <script src="{{ asset('js/lightgallery/lg-zoom.js') }}"></script>
   <script src="{{ asset('js/lightgallery/lg-hash.js') }}"></script>
   <script src="{{ asset('js/lightgallery/lg-pager.js') }}"></script>
   <script src="{{ asset('jslightgallery/jquery.mousewheel.min.js') }}"></script>
   <script type="text/javascript">
      $(document).ready(function() {
      $('#imageGallery').lightSlider({
        gallery:true,
        item:1 ,
        loop:true,
        thumbItem:8,
        slideMargin:0,
        enableDrag: true,
        currentPagerPosition:'right',
        onSliderLoad: function(el) {
            el.lightGallery({
                selector: '#imageGallery .lslide'
            });
        }   
      });  
      });
   </script>

@stop