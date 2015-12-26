@extends('Front::channel.kyrgyzradio.default')
@section('title', trans('radiopages.Allphotos'))
@section('styles')
<link rel="stylesheet" href="{{ asset('css/radios.css')}}">
<link rel="stylesheet" href="{{ asset('css/landing/main.css')}}">

<link rel="stylesheet" href="{{ asset('css/articles.css') }}"/>
<link rel="stylesheet" href="{{ asset('css/pages.css') }}"/>

<link rel="stylesheet" type="text/css" href="{{ asset('css/lightslider.css') }}">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.2.6/css/lightgallery.min.css">

@endsection
@section('content')
<body id="home" class="homepage">
    <div class="container-fluid switch">
            <nav class="navbar">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
                        <span class="sr-only">Меню</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="{{ asset('images/channels/kg-radio.png')}}"><h4>Кыргыз радиосу</h4></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="menu">
                    <ul class="nav navbar-nav channel_switch">
                        <li class="sitemenu" id="site-channel1">
                            <a href="{{ route('front.home') }}"><img src="{{ asset('images/ktrk_last.svg')}}" style="height:40px;"><span>КТРК</span><h4>КТРК</h4></a></li>
                        <li class="sitemenu" id="site-channel1">
                            <a href="{{ route('birinchi.home') }}"><img src="{{ asset('images/channels/1-radio.png')}}" ><span>Биринчи радио</span><h4>Биринчи радио</h4></a></li>
                        <li class="sitemenu" id="site-channel1">
                            <a class="active" href="{{ route('kyrgyzradio.home') }}"><img src="{{ asset('images/channels/kg-radio.png')}}"><span>Кыргыз радиосу</span><h4>Кыргыз радиосу</h4></a></li>
                        <li class="sitemenu" id="site-channel1">
                            <a href="{{ route('minkiyal.home') }}"><img src="{{ asset('images/channels/min-kiyal.png')}}"><span>Миң кыял FM</span><h4>Миң кыял FM</h4></a></li>
                        <li class="sitemenu" id="site-channel1">
                            <a href="{{ route('dostuk.home') }}"><img src="{{ asset('images/channels/dostuk.png')}}"><span>Достук</span><h4>Достук</h4></a></li>    
                    </ul>   
                </div><!-- /.navbar-collapse -->
            </nav>
    </div>

    <header id="header">

        <nav id="main-menu" class="container-fluid navbar navbar-default fixedheader2 " role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Меню</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ route('kyrgyzradio.home') }}"><img src="{{asset('images/channels/kg-radio.png')}}" alt="logo">Кыргыз Радиосу</a>
                    <div class="onetime"><a href=""><button class="btn"><i class="fa fa-microphone"></i><span>Түз эфир</span></button></a></div>

                </div>
               <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll"><a href="#portfolio">{{ trans('radiopages.Photos') }}</a></li>                   
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->
<div class="container" style="background: #fff;padding: 0px; margin: 20px auto;">
  
    <section id="portfolio" style="padding:20px 0px;background:#fff;" >
        <div class="container">
            <div class="section-header2">
                <h2 class="section-title text-center wow fadeInDown">{{ trans('radiopages.Photos') }}</h2>
            </div>

               <div class="panel-body imagegrid">
                  <div class="row">
                     <div class="col-md-12 otherphotos">
                      <section>
                        @if($photoGalleries != null)
                          @foreach($photoGalleries as $photoGallery)

                            <div class="col-md-4">

                              <div class="gallery-item">
                                <a href="{{ route('kyrgyzradio.photos', $photoGallery) }}" class="thumb">
                                  <img src="{{ asset($photoGallery->status) }}" alt="..." class="img-thumbnail">
                                  <i class="fa fa-camera"></i>
                                </a>
                                <h2>
                                  <div class="extra">
                                    <span class="e-datetime">{{ $photoGallery->getDay() }} {{ $photoGallery->getMonthRu() }}, {{ $photoGallery->getTime() }}</span>
                                  </div>
                                  <a href="{{ route('kyrgyzradio.photos', $photoGallery) }}">{{ $photoGallery->getName() }}</a>
                                </h2>
                              </div>

                            </div>
                          @endforeach
                        @endif

                      </section>

                     </div>
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