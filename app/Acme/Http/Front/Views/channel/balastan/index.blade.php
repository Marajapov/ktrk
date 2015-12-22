@extends('Front::channel.balastan.default')
@section('title', "Баластан")
@section('styles')
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
   <div class="container">
      <div class="row">
         <div class="col-md-12  logocenter">
            <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12 clouds">
                  <div class="sun">
                     <img src="images/channels/balastan/sun-icon.png" alt=""/>
                     <!--          <img class="balastanlogo" src="images/channels/balastan_white.png" alt=""/> -->
                  </div>
                  <div class="langs">
                    <ul>
                        <li @if(app()->getlocale() == 'kg') class="active" @endif><a href="/locale/kg">кырг <span></span></a></li>
                        <li @if(app()->getlocale() == 'ru') class="active" @endif><a href="/locale/ru">рус <span></span></a></li>
                    </ul>
                </div>
                  <img src="images/channels/balastan/clouds.png" alt=""/> 
                  <nav class="cloudlinks">
                     <ul>
                        <li><a class="active" href="{{ route('balastan.home') }}">{{ trans('radiopages.Home') }}</a></li>
                        <li><a href="{{ route('balastan.about') }}">{{ trans('radiopages.BAbout') }}</a></li>
                        <li><a href="{{ route('balastan.world') }}">{{ trans('radiopages.Bworld') }}</a></li>
                        <li><a href="{{ route('balastan.video') }}">Видео</a></li>
                        <li><a href="{{ route('balastan.allphotos') }}">{{ trans('radiopages.Photos') }}</a></li>
                     </ul>
                  </nav>
               </div>
            </div>
         </div>
      </div>
      <div class="row tvblock">
         <div class="col-md-2"> 
            <img src="{{ asset('images/channels/balastan/taalim2.png')}}" alt="" class="leftcloud">
            <img class="iconleft" src="{{ asset('images/channels/balastan/akylay.png')}}" alt="">                    
         </div>
         <div class="col-md-8" style="text-align:center;">
            <img class="tvthree" src="{{ asset('images/channels/balastan/tv3.png')}}" alt="">
            @if($firstMedia != null)
            <div class="iconcenter">
               <iframe width="495" height="360" src="https://www.youtube.com/embed/{{$firstMedia->getUrl()}}?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" controls=0 allowfullscreen></iframe>
            </div>
            @else
            <div class="iconcenter">
               <iframe width="495" height="360" src="https://www.youtube.com/embed/rYEDA3JcQqw?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" controls=0 allowfullscreen></iframe>
            </div>
            @endif
            <img class="tvtop" src="{{ asset('images/channels/balastan/tvtop.png')}}" alt="">
            <img class="tvbottom" src="{{ asset('images/channels/balastan/tvbottom.png')}}" alt="">
            <img class="tvleft" src="{{ asset('images/channels/balastan/tvleft.png')}}" alt="">
            <img class="tvright" src="{{ asset('images/channels/balastan/tvright.png')}}" alt="">
         </div>
         <div class="col-md-2">
            <img src="{{ asset('images/channels/balastan/taalim.png')}}" alt="" class="rightcloud">
            <img class="iconright" src="{{ asset('images/channels/balastan/aktan.png')}}" alt="">
         </div>
      </div>
      <div class="row">
         <div class="col-md-12 kidsvblock">
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
      <div class="row">
         <div class="col-md-12 kidsvblock kidgallery">
            <div class="panel panel-default panel-carousel ">
               <div class="panel-heading">
                  <h3 class="panel-title"><span>{{ trans('radiopages.Photos') }}</span></h3>
               </div>
               <div class="panel-body" style="margin-top:20px;">
                  <div class="col-md-12 broadimages">
                     <div class="carousel-slick">

                     @if($photoGalleries != null)

                      @foreach($photoGalleries as $photoGallery)
                        
                        <div class="col-md-4">
                          <a href="{{ route('balastan.photos', $photoGallery) }}">
                            <img src="{{ asset($photoGallery->status) }}" alt=""/><span>{{ $photoGallery->getName() }}</span>
                          </a>
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
   <script src="js/jquery-1.11.2.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script type="text/javascript" src="filter/js/jquery.easing.min.js"></script>
   <script type="text/javascript" src="filter/js/jquery.mixitup.min.js"></script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
   <script type="text/javascript" src="slick/slick.min.js"></script>
   <script type="text/javascript" src="js/jquery.roundabout.js"></script>
   <script>
      if ($(window).width() > 768) {
      
          $('.carousel-slick').slick({
              infinite: true,
              slidesToShow: 4,
              slidesToScroll: 1,
      
          });
      }
      
      if ($(window).width() < 768) {
          $('.carousel-slick').slick({
              infinite: true,
              slidesToShow: 2,
              slidesToScroll: 1,
      
          });
      }
      
   </script>
   @stop