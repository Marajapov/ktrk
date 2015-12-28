@extends('Front::channel.muzkanal.default')
@section('title', "Хит-Парад")
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
                          <li><a class="active" href="{{ route('muzkanal.hitparad') }}"><i class="fa fa-microphone"></i>Хит-Парад</a></li>
                          <li><a href="{{ route('muzkanal.allphotos') }}"><i class="fa fa-picture-o"></i>{{ trans('radiopages.Photos') }}</a></li>
                          <li><a href="{{ route('muzkanal.videos') }}"><i class="fa fa-youtube-play"></i>{{ trans('radiopages.Clips') }}</a></li>
                          <li><a href="{{ route('muzkanal.teleprogram') }}"><i class="fa fa-television"></i>{{ trans('site.Teleprogram') }}</a></li>
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
         <div class="col-md-8 topchart">
            <div class="panel">
               <div class="panel-heading">
                  <div class="panel-title">
                     <h4 class="show-title">
                        <a href="#">Музыка</a>
                        <i class="fa fa-caret-right"></i>
                        <span>Хит-Парад ТОП-10</span>
                     </h4>
                  </div>
               </div>
               <div class="panel-body">
                  <div class="col-xs-12 toplist videofix">
                  @if($hitNumbers)
                  @foreach($hitNumbers as $hit)

                  <div class="row topborder">
                     <div class="col-xs-1 topnumber" style="height:50px;">
                        <h2>{{ $hit->hitnumber }}</h2>
                     </div>
                     <div class="col-xs-1 topimg" style="height:50px;">
                        <img src="http://img.youtube.com/vi/{{ $hit->getUrl()}}/mqdefault.jpg" alt="">
                     </div>
                     <div class="col-xs-8 topartist" style="height:50px;">
                        <a href="#"><h3>{{ $hit->getName() }}</h3></a>
                     </div>
                     <div class="col-xs-1 topclip" style="height:50px;">
                        <a href="#"><i class="glyphicon glyphicon-play"></i> </a>
                     </div>
                  </div>
                  @endforeach
                  @endif

                     
                     
                     
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-4 topchart">
            <div class="panel">
               <div class="panel-heading">
                  <div class="panel-title">
                     <h4 class="show-title">
                        <a href="#">Промо</a> 
                        <!--  <i class="fa fa-caret-right"></i> -->
                        <span>.</span>                              
                     </h4>
                  </div>
               </div>
               @if($promo != null)
               <iframe width="100%" height="300" src="https://www.youtube.com/embed/{{ $promo->getUrl()}}" frameborder="0" allowfullscreen></iframe>
               @else
               <iframe width="100%" height="300" src="https://www.youtube.com/embed/t8r7ifqRViY" frameborder="0" allowfullscreen></iframe>    
               @endif

            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="row topvideos videostyle">
               <div class="panel panel-default panel-carousel gallery">
                  <div class="panel-heading">
                     <h3 class="panel-title"><span>{{ trans('radiopages.TopCLips') }}</span></h3>
                  </div>
                  <div class="panel-body">
                     <div class="col-md-12 videofix">
                        <div class="carousel-slick">
                           
                           @if($MediaTop1)
                           @foreach($MediaTop1 as $top1)

                           <div class="col-md-4 col-xs-12">
                              <a href="{{ route('muzkanal.video', $top1)}}">
                              <img src="http://img.youtube.com/vi/{{ $top1->getUrl() }}/mqdefault.jpg" alt=""/></a>
                              <div class="item-desc">
                                 <ul>
                                    <a href="{{ route('muzkanal.video', $top1)}}">
                                       <li class="item-artist">{{ $top1->getName() }}</li>
                                    </a>
                                 </ul>
                              </div>
                              <div class="views"><i class="fa fa-eye"></i>{{ $top1->getViewed() }}</div>
                           </div>
                           @endforeach
                           @endif

                           
                         
                        </div>
                        <footer>
                           <a href="#">
                           <span>{{ trans('radiopages.AllVideos') }}<i class="fa fa-arrow-circle-right"></i></span>
                           </a>
                        </footer>
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
   <script src="{{ asset('js/gallery/imagesloaded.pkgd.min.js') }}"></script>
   <script src="{{ asset('js/gallery/masonry.pkgd.min.js') }}"></script>
   <script src="{{ asset('js/gallery/classie.js') }}"></script>
   <script src="{{ asset('js/gallery/cbpGridGallery.js') }}"></script>
   <script>
      new CBPGridGallery(document.getElementById('grid-gallery'));
              
   </script>
   <script>
      var serverTZoffset = 360;
   </script>
   <script src="{{ asset('js/lightslider.js') }}"></script>
   <script>
      $(document).ready(function () {
          $("#content-slider").lightSlider({
              loop: true,
              keyPress: true
          });
          $('#image-gallery').lightSlider({
              gallery: true,
              item: 1,
              thumbItem: 9,
              slideMargin: 0,
              speed: 500,
              auto: true,
              loop: true,
              onSliderLoad: function () {
                  $('#image-gallery').removeClass('cS-hidden');
              }
          });
      });
   </script>
   <script src="{{ asset('js/audio/dkp.min.js') }}"></script>
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
   <script type="text/javascript">
      $(function () {
      
          var filterList = {
              init: function () {
      
                  // MixItUp plugin
                  // http://mixitup.io
                  $('#portfoliolist').mixitup({
                      showOnLoad: 'all-videos',
                      targetSelector: '.portfolio',
                      filterSelector: '.filter',
                      effects: ['fade'],
                      easing: 'snap',
                      // call the hover effect
                      onMixEnd: filterList.hoverEffect()
                  });
      
              },
              hoverEffect: function () {
      
                  // Simple parallax effect
                  $('#portfoliolist .portfolio').hover(
                          function () {
                              $(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
                              $(this).find('img').stop().animate({top: -40}, 250, 'easeOutQuad');
                          },
                          function () {
                              $(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
                              $(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');
                          }
                  );
      
              }
      
          };
          // Run the show!
          filterList.init();
      });
   </script>
   <script src="{{ asset('jwplayer/jwplayer.js') }}"></script>
   <script>jwplayer.key = "tmEO2SU8NzqLBoHr2Vq6nV13XCyfo8xbdiCb/Q==";</script>
   <script type="text/javascript">
      var playerInstance = jwplayer("player");
      
      //    $('#playerPlay').click(function(){
      //        playerInstance.play();
      //    });
      
      playerInstance.setup({
          playlist: [{
                  image: "{{ asset('images/channels/muztv.png') }}",
                  sources: [{
                          file: "rtmp://212.112.96.233:1936/live/ktrk.stream"
                      }]
              }],
          width: "100%",
          height: "100%",
          aspectratio: "16:9",
          primary: "flash",
          skin: {
              name: "five"
          },
          stretching: "exactfit"
      });
   </script>
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
   <script>
      $(document).ready(function () {
          var likes = 12;
          var dislikes = 6;
          $('.like').attr('data-likes', likes);
          $('.dislike').attr('data-dislikes', dislikes);
          $('.text').click(function () {
              $('.like').toggleClass('like_active');
              $('.dislike').toggleClass('dislike_active');
              if ($('.text').text() == 'Vote') {
                  $('.text').text('Cancel');
              } else {
                  $('.text').text('Vote');
              }
          })
          $('.like').click(function () {
              likes++;
              $('.like').attr('data-likes', likes);
              $('.like').removeClass('like_active');
              $('.dislike').removeClass('dislike_active');
              $('.text').text('Vote');
          })
          $('.dislike').click(function () {
              dislikes++;
              $('.dislike').attr('data-dislikes', dislikes);
              $('.like').removeClass('like_active');
              $('.dislike').removeClass('dislike_active');
              $('.text').text('Vote');
          })
      })
   </script>
   @stop