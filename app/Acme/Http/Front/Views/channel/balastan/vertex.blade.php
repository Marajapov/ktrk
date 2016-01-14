@extends('Front::channel.balastan.default')
@section('title', "Vertex")
@section('styles')
@endsection
@section('content')
<body class="balastan" id="balastan">
   <!--BEGIN MAIN HEADER MENU for all channels  -->
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
   <!--END -->
   <!-- BEGIN Home video -->
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <nav class="kidstopheader">
               <ul>
                  <li><a class="active" href="{{ route('balastan.home') }}"><i class="fa fa-home i1"></i>{{ trans('radiopages.Home') }}</a></li>
                  <li><a href="{{ route('balastan.about') }}"><i class="fa fa-hand-o-up i2"></i>{{ trans('radiopages.BAbout') }}</a></li>
                  <li><a href="{{ route('balastan.world') }}"><i class="fa fa-star i3"></i>{{ trans('radiopages.Bworld') }}</a></li>
                  <li><a href="{{ route('balastan.video') }}"><i class="fa fa-play i4 "></i>Видео</a></li>
                  <li><a href="{{ route('balastan.allphotos') }}"><i class="fa fa-picture-o i5"></i>{{ trans('radiopages.Photos') }}</a></li>
                  <li><a href="#"><i class="fa fa-search i6"></i></a></li>
               </ul>
            </nav>
         </div>
      </div>
      <div class="row firsteye">
         <div class="col-md-8 homevideo">
            @if($firstMedia)
            <h2 class="homevideocat"><img src="{{asset('images/channels/balastan/aktan_min.png')}}" alt="" class="keremet">Керемет көч</h2>
            <iframe width="100%" height="500px" src="https://www.youtube.com/embed/{{$firstMedia->getUrl()}}?rel=0&amp;controls=1&amp;showinfo=0" frameborder="0" controls=0 allowfullscreen></iframe>
            <h3 class="homevideoname">{{ $firstMedia->getName() }}</h3>
            @endif
         </div>
         <div class="col-md-4">
            <div class="right">
               <a href="">
                  <h2 class="cat">Билгим келет</h2>
                  <img src="{{ asset('images/channels/balastan/keremet.jpg')}}" alt=""/> 
                  <h3 class="name">24.04.2016</h3>
               </a>
            </div> 
            <div class="rightbottom">
               <a href="">
                  <h2 class="cat">Билгим келет</h2>
                   <img src="{{ asset('images/channels/balastan/sun-kids.jpg')}}" alt=""/>
                  <h3 class="name">24.04.2016</h3>
               </a>
            </div>                    
         </div>
      </div>
   </div>
   <!-- END Home video -->
   <!-- BEGIN Programms slide -->
   <div class="container-fluid programs-slide">
      <div class="col-md-12">
         <div class="kids-slide">
            <div class="col-md-3">
               <a href="#"><img src="{{ asset('images/channels/balastan/keremet.jpg')}}" alt=""/>
                  <h3 class="programmcat">Керемет көч</h3>   
               </a>
            </div>
            <div class="col-md-3">
               <a href="#"><img src="{{ asset('images/channels/balastan/sun-kids.jpg')}}" alt=""/>
                  <h3 class="programmcat">Күн балдары</h3>   
               </a>
            </div>
            <div class="col-md-3">
               <a href="#"><img src="{{ asset('images/channels/balastan/baaryn.png')}}" alt=""/>
                  <h3 class="programmcat">Акыл ордо</h3>   
               </a>
            </div>
            <div class="col-md-3">
               <a href="#"><img src="{{ asset('images/channels/balastan/birge2.png')}}" alt=""/>
                  <h3 class="programmcat">Бирге окуйбуз</h3>   
               </a>
            </div>
            <div class="col-md-3">
               <a href="#"><img src="{{ asset('images/channels/balastan/manastaanuu.jpg')}}" alt=""/>
                  <h3 class="programmcat">Манас Таануу</h3>   
               </a>
            </div>
            <div class="col-md-3">
               <a href="#"><img src="{{ asset('images/channels/balastan/taalimtay.png')}}" alt=""/>
                  <h3 class="programmcat">Таалимтай</h3>   
               </a>
            </div>
         </div>
      </div>
   </div>
   <!-- END Programms slide -->
   <div class="container">
      <div class="row">
         <div class="col-md-12 kidsvblock text-center">
            <div class="panel panel-default">
               <div class="panel-heading">
                  <h3 class="panel-title"><span>Видео</span></h3>
               </div>
               <div class="panel-body">
                  <div class="row ">
                     @if($medias != null)
                     @foreach($medias as $media)
                     <div class="col-md-4 col-sm-6">
                        <div class="kidsvideo kidsboard">
                           <a href="{{ route('balastan.video', $media) }}">
                           <img width="100%" height="180px" src="http://img.youtube.com/vi/{{ $media->getUrl()}}/mqdefault.jpg" alt="" />                       
                           </a>
                        </div>
                        <h3>{{ $media->getName() }}</h3>
                     </div>
                     @endforeach
                     @else
                     <div class="col-md-4 col-sm-6">
                        <div class="kidsvideo kidsboard">
                           <a href="#">
                           <img width="100%" height="180px" src="http://img.youtube.com/vi/rYEDA3JcQqw/mqdefault.jpg" alt="" />                  
                           </a>
                        </div>
                        <h3>adele rolling in the deep</h3>
                     </div>
                     @endif
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row" style="margin-bottom: 40px;">
         <div class="col-md-12 kidsvblock kidgallery">
            <div class="panel panel-default panel-carousel ">
               <div class="panel-heading">
                  <h3 class="panel-title"><span>{{ trans('radiopages.Photos') }}</span></h3>
               </div>
               <div class="panel-body" style="margin-top:20px;">
                  <div class="col-md-12 broadimages">
                     <div class="carousel-slickkid">
                        @if($photoGalleries)
                        @foreach($photoGalleries as $photoGallery)
                        <div>
                           <a href="{{ route('balastan.photos', $photoGallery) }}">
                           <img src="{{ asset($photoGallery->status) }}" alt=""/>
                           </a>
                           <div class="desc">
                              <a href="{{route('balastan.photos', $photoGallery)}}">{{ $photoGallery->getName() }}</a>
                           </div>
                        </div>
                        @endforeach
                        @else
                        <div class="col-md-4">
                           <a href="#">
                              <img src="" alt=""/><span>aba</span>
                              <div class="overlay"></div>
                              <i class="fa fa-camera"></i>
                           </a>
                        </div>
                        @endif
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   @stop
   @section('footerscript2')
   <script src="{{ asset('js/jquery-1.11.2.min.js')}}"></script>
   <script src="{{ asset('js/bootstrap.min.js')}}"></script>
   <script>
      $(document).ready(function () {
          $(".search-toggle").click(function () {
              $(".logo-block").addClass("search-show");
              $(".form-search").addClass("visible");
      
          });
          $(".close-search").click(function () {
              $(".logo-block").removeClass("search-show");
              $(".form-search").removeClass("visible");
             
          });
      });
   </script>
   <script type="text/javascript" src="{{ asset('filter/js/jquery.easing.min.js')}}"></script>
   <script type="text/javascript" src="{{ asset('filter/js/jquery.mixitup.min.js')}}"></script>
   <script type="text/javascript" src="{{ asset('js/jquery-migrate-1.2.1.min.js')}}"></script>
   <script type="text/javascript" src="{{ asset('slick/slick.min.js')}}"></script>
   <script type="text/javascript" src="{{ asset('js/jquery.roundabout.js')}}"></script>
   <script>
      if ($(window).width() > 768) {
          $('.kids-slide').slick({
              infinite: true,
              slidesToShow: 4,
              slidesToScroll: 1,        
          });
      }      
      
      if ($(window).width() < 768) {
          $('.kids-slide').slick({
              infinite: true,
              slidesToShow: 2,
              slidesToScroll: 1,
      
          });
      }
      
   </script> 
   @stop