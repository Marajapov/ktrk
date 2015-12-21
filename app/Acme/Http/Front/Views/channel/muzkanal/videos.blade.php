@extends('Front::channel.muzkanal.default')
@section('title', trans('radiopages.Clips'))
@section('styles')
<link rel="stylesheet" href="{{ asset('css/audio/muzslider.css') }}"/>
@endsection
@section('content')
<body class="music">
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
               <img src="{{ asset('images/channels/muz_white_notext.png')}}">
               <h4>Музыка</h4>
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
                  <a class="active" href="{{ route('muzkanal.home') }}">
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
                  <a href="{{ route('balastan.home') }}">
                     <img src="{{ asset('images/channels/balastan_white_notext.png')}}"><span>Баластан</span>
                     <h4>Баластан</h4>
                  </a>
               </li>
            </ul>
         </div>
         <!-- /.navbar-collapse -->
      </nav>
   </div>
   <div class="container main-header">
      <div class="row">
         <div class="col-md-12">
            <div class="row fixedheader">
               <nav class="navbar">
                  <div class="container-fluid">
                     <!-- Brand and toggle get grouped for better mobile display -->
                     <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Меню</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <div class="logo-block search-block">
                           <a class="search-toggle"><i class="fa fa-search"></i></a>
                           <form class="form-search" action="{{ route('front.search') }}" method="get">
                              <div class="form-group pull-right">
                                 <input type="text" name="search" class="form-control" placeholder="Издөө"/>
                              </div>
                              <a class="btn close-search">
                              <i class="fa fa-close"></i>
                              </a>
                              <button class="btn submit-search" type="submit">
                              <i class="fa fa-search"></i>
                              </button>
                           </form>
                        </div>
                        <a class="navbar-brand" href="{{ route('muzkanal.home') }}"> <i class="fa fa-home"></i>{{ trans('radiopages.Home') }}</a>
                     </div>
                     <!-- Collect the nav links, forms, and other content for toggling -->
                     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                           <li><a href="{{ route('muzkanal.about') }}"></i>{{ trans('radiopages.Mabout') }}</a></li>
                           <li>
                              <a href="{{ route('muzkanal.hitparad') }}">
                                 <i class="fa fa-microphone"></i>Хит-Парад <!-- <span class="caret"></span> -->
                              </a>
                           </li>
                           <li><a href="{{ route('muzkanal.photos') }}"><i class="fa fa-picture-o"></i>{{ trans('radiopages.Photos') }}</a></li>
                           <li><a class="active" href="{{ route('muzkanal.videos') }}"><i class="fa fa-youtube-play"></i>{{ trans('radiopages.Clips') }}</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right logo-block">
                           <ul class="soc socmuz">
                              <li class="tw"><a href="#" title="Twitter"><i class="fa fa-twitter"></i> </a>  </li>
                              <li class="fb"><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                              <li class="ok"><a href="#" title="Odnoklassniki"><i class="fa fa-odnoklassniki"></i></a></li>
                              <li class="yt"><a href="#" title="YouTube"><i class="fa fa-youtube"></i></a></li>
                              <li class="in"><a href="#" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                           </ul>
                           <a class="search-toggle"><i class="fa fa-search"></i></a>
                           <form class="form-search" action="{{ route('front.search') }}" method="get">
                              <div class="form-group pull-right">
                                 <input type="text" name="search" class="form-control" placeholder="Издөө"/>
                              </div>
                              <a class="btn close-search">
                              <i class="fa fa-close"></i>
                              </a>
                              <button class="btn submit-search" type="submit">
                              <i class="fa fa-search"></i>
                              </button>
                           </form>
                           <div class="clangs">
                              <ul>
                                 <li @if(app()->getlocale() == 'kg') class="active" @endif><a href="/locale/kg">кырг <span></span></a></li>
                                 <li @if(app()->getlocale() == 'ru') class="active" @endif><a href="/locale/ru">рус <span></span></a></li>
                              </ul>
                           </div>
                           <!--                                         <button class="btn btn-danger btn-live" data-toggle="modal" data-target="#liveModal">
                              <i class="fa fa-dot-circle-o"></i>
                              түз эфир
                              </button> -->
                        </ul>
                     </div>
                     <!-- /.navbar-collapse -->
                  </div>
                  <!-- /.container-fluid -->
               </nav>
            </div>
         </div>
      </div>
   </div>

   <!-- Main slider -->
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="row topvideos videostyle">
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <h3 class="panel-title"><span>{{ trans('radiopages.AllVideos') }}</span></h3>
                  </div>
                  <div class="panel-body">
                     <div class="col-md-12 videofix">
                        <div class="row" style="margin:-11px;">
                        @if($postAll)
                           @foreach($postAll as $allVideo)   
                           <div class="col-md-3 muzvideomain col-sm-6 col-xs-12">
                           <div class="muzvideoall">
                              <a href="{{ route('muzkanal.video', $allVideo)}}">
                              <img src="http://img.youtube.com/vi/{{ $allVideo->getUrl()}}/mqdefault.jpg" alt=""/></a>
                              <div class="item-desc">
                                 <ul>
                                    <a href="{{ route('muzkanal.video', $allVideo)}}">
                                       <li class="item-artist">{{ $allVideo->getName() }}</li>
                                    </a>
                                 </ul>
                              </div>
                              <div class="views"><i class="fa fa-eye"></i>{{ $allVideo->getViewed() }}</div>
                           </div>
                           </div>
                           @endforeach
                        @endif                            
                        </div>
                  <nav class="muzpaginate">
                    <ul class="pagination">

                      <li>
                        <a href="{{ route('muzkanal.videos', ['page' => 1]) }}" class="btn btn-default @if($postAll->currentPage() == 1) disabled @endif">{{ trans('site.Start') }}</a>
                      </li>
                      <li>
                        <a href="{{ $postAll->previousPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span></a>
                      </li>
                      <li>
                        <a href="{{ $postAll->nextPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-right"></span></a>
                      </li>

                      @for($i = 0, $j = 1; $i < $postAll->total(); $i+=$perPage)
                        <li>
                          <a href="{{ route('muzkanal.videos', ['page' => $j]) }}" class="btn btn-default @if($postAll->currentPage() == $j) active @endif">{{ $j++ }}</a>
                        </li>
                      @endfor

                      <li>
                        <a href="{{ route('muzkanal.videos', ['page' => ceil($postAll->total()/$perPage)]) }}" class="btn btn-default @if($postAll->currentPage() == ceil($postAll->total()/$perPage)) disabled @endif">{{ trans('site.End') }}</a>
                      </li>

                    </ul>
                  </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

   </div>
   @stop
   @section('footerscript2')
   <script src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>
   <script src="{{ asset('js/bootstrap.min.js') }}"></script> 
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
   <script type="text/javascript" src="{{ asset('filter/js/jquery.easing.min.js') }}"></script>
   <script type="text/javascript" src="{{ asset('filter/js/jquery.mixitup.min.js') }}"></script>
   <script type="text/javascript" src="{{ asset('js/jquery-migrate-1.2.1.min.js') }}"></script>
   <script type="text/javascript" src="{{ asset('slick/slick.min.js') }}"></script>
   <script type="text/javascript" src="{{ asset('js/jquery.roundabout.js') }}"></script>
   <!-- Fixed Sticky header -->
   <script type ="text/javascript" src ="{{ asset('js/script.js') }}"></script>   
   <!-- Fixed Sticky header -->
   <!-- Programm title Anima -->
   <script src="{{ asset('js/audio/jquery.newsTicker.js') }}"></script>
   <script>
      var nt_title = $('#nt-title').newsTicker({
          row_height: 30,
          max_rows: 1,
          duration: 3000,
          pauseOnHover: 0
      });
      var nt_example1 = $('#nt-example1').newsTicker({
          row_height: 30,
          max_rows: 3,
          duration: 4000,
          prevButton: $('#nt-example1-prev'),
          nextButton: $('#nt-example1-next')
      });
      
      var state = 'stopped';
      var speed;
      var add;
      
   </script>
   <!-- Ptogramm title Anima -->
   <!--Carousel-->
   <script>
      if ($(window).width() > 768) {
          $('.carousel-slick').slick({
              infinite: true,
              slidesToShow: 4,
              slidesToScroll: 1,
              autoplay: false,
              autoplaySpeed: 4500
          });
          $('.carousel-slick1').slick({
              infinite: true,
              slidesToShow: 3,
              slidesToScroll: 1,
              autoplay: false,
              autoplaySpeed: 4500
          });
      }
      
      if ($(window).width() < 768) {
          $('.carousel-slick1').slick({
              infinite: true,
              slidesToShow: 2,
              slidesToScroll: 1,
              autoplay: false,
              autoplaySpeed: 4500
          });
      }
      
      if ($(window).width() < 768) {
          $('.carousel-slick').slick({
              infinite: true,
              slidesToShow: 2,
              slidesToScroll: 1,
              autoplay: false,
              autoplaySpeed: 4500
          });
      }
      
   </script>
   @stop