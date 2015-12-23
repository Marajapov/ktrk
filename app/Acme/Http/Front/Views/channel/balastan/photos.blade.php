@extends('Front::channel.balastan.default')
@section('title', "Баластан")
@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/lightslider.css') }}">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.2.6/css/lightgallery.min.css">
@endsection
@section('content')
<body class="balastan">
   <div class="switch">
      <nav class="navbar">
         <!-- Brand and toggle get grouped for better mobile display -->
         <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
            <span class="sr-only">Меню</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
               <img src="{{ asset('images/channels/balastan_white_notext.png')}}">
               <h4>Баластан</h4>
            </a>
         </div>
         <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse" id="menu">
            <ul class="nav navbar-nav channel_switch">
               <li class="sitemenu" id="site-channel1">
                  <a href="{{ route('front.home') }}">
                     <img src="{{ asset('images/ktrk_last.svg')}}" style="height:40px;"><span>КТРК</span>
                     <h4>КТРК</h4>
                  </a>
               </li>
               <li class="sitemenu" id="site-channel1">
                  <a href="{{ route('muzkanal.home') }}">
                     <img src="{{ asset('images/channels/muz_white_notext.png')}}" ><span>Музыка</span>
                     <h4>Музыка</h4>
                  </a>
               </li>
               <li class="sitemenu" id="site-channel1">
                  <a href="{{ route('madaniyat.home') }}">
                     <img src="{{ asset('images/channels/madaniyat_white_notext.png')}}"><span>Маданият</span>
                     <h4>Маданият</h4>
                  </a>
               </li>
               <li class="sitemenu" id="site-channel1">
                  <a class="active" href="{{ route('balastan.home') }}">
                     <img src="{{ asset('images/channels/balastan_white_notext.png')}}"><span>Баластан</span>
                     <h4>Баластан</h4>
                  </a>
               </li>
            </ul>
         </div>
         <!-- /.navbar-collapse -->
      </nav>
   </div>
   <div class="container" style="padding:0px">
      <div class="row">
         <div class="col-md-12 logo-block logocenter">
            <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12 clouds">
                  <div class="sun">
                     <img src="{{asset('images/channels/balastan/sun-icon.png')}}" alt=""/>
                     <!--          <img class="balastanlogo" src="images/channels/balastan_white.png" alt=""/> -->
                  </div>
                  <div class="langs">
                     <ul>
                        <li @if(app()->getlocale() == 'kg') class="active" @endif><a href="/locale/kg">кырг <span></span></a></li>
                        <li @if(app()->getlocale() == 'ru') class="active" @endif><a href="/locale/ru">рус <span></span></a></li>
                     </ul>
                  </div>
                  <img src="{{asset('images/channels/balastan/clouds.png')}}" alt=""/> 
                  <nav class="cloudlinks">
                     <ul>
                        <li><a href="{{ route('balastan.home') }}">{{ trans('radiopages.Home') }}</a></li>
                        <li><a href="{{ route('balastan.about') }}">{{ trans('radiopages.BAbout') }}</a></li>
                        <li><a href="{{ route('balastan.world') }}">{{ trans('radiopages.Bworld') }}</a></li>
                        <li><a href="{{ route('balastan.video') }}">Видео</a></li>
                        <li><a class="active" href="{{ route('balastan.allphotos') }}">{{ trans('radiopages.Photos') }}</a></li>
                     </ul>
                  </nav>
               </div>
            </div>
         </div>
      </div>
      <div class="row" style="margin-top: 50px;">
         <div class="col-md-12">
            <div class="panel" style="background:none">
               <!--                         <div class="panel-heading">
                  <h3 class="panel-title"><span>Фотогалерея</span></h3>
                  </div> -->
               <div class="panel-body kidphotos">
                  <div class="row" style="margin: 20px;">
                     <ul id="imageGallery">
                     @foreach($images as $image)
                        <li data-thumb="{{ asset('froala/uploads/'.$image->name) }}" data-src="{{ asset('froala/uploads/'.$image->name) }}">
                           <img class="resizegallery" src="{{ asset('froala/uploads/'.$image->name) }}" />
                        </li>
                     @endforeach
                        
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   @stop
   @section('footerscript2')
   <script src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>  
   <script type="text/javascript" src="{{ asset('js/jquery-migrate-1.2.1.min.js') }}"></script>
   <script type="text/javascript" src="{{ asset('slick/slick.min.js') }}"></script>
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