@extends('Front::channel.kyrgyzradio.default')
@section('title', "Кыргыз Радиосу")
@section('styles')
<link rel="stylesheet" href="{{ asset('css/radios.css')}}">
<link rel="stylesheet" href="{{ asset('css/landing/main.css')}}">

<link rel="stylesheet" href="{{ asset('css/articles.css') }}"/>
<link rel="stylesheet" href="{{ asset('css/pages.css') }}"/>

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
                         <li class="scroll active"><a href="#home">Башкы</a></li>
                         <li class="scroll"><a href="#services">Уктуруулар</a></li>
                         <li class="scroll"><a href="#portfolio">Фотогалерея</a></li>
                         <li class="scroll"><a href="#about">Радио жөнүндө</a></li>                    
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->
<div class="container" style="background: #fff;padding: 0px; margin: 20px auto;">
    <section id="main-slider">
        <div class="owl-carousel">
            <div class="item">
            <img src="{{asset('images/channels/kyrgyzradio/2.jpg')}}" height="358" width="1600" alt="">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2><span>Залкар инсандар</span></h2>
                                    <p>Биздин замандын баатырлары</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
             <div class="item">
            <img src="{{asset('images/channels/kyrgyzradio/1.jpg')}}" height="358" width="1600" alt="">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2><span>Биз билген Айтматов</span> </h2>
                                    <p>Манас жана Айтматов</p>   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
            <div class="item">
            <img src="{{asset('images/channels/kyrgyzradio/3.jpg')}}" height="358" width="1600" alt="">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2><span>Улуу манасчылар</span></h2>
                                    <p>Дүйнө аларга багынган</p>    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.owl-carousel-->
    </section><!--/#main-slider-->

    <section id="cta2">
        <div class="container">
            <div class="text-center">
                <h2 class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms"><span>Кыргыз радиосу</span> - жан дүйнөнүн азыгы </h2>
                <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">“Кыргыз радиосу көөнөрбөс мурастар казынасы</p>
            </div>
        </div>
    </section>
    

    <section id="cta" class="wow fadeIn">
        <div class="container">
            <div class="row">
            <div class="col-md-6 col-xs-12">            
                <div class="col-xs-9">
                    <h2>Чынгыз Айтматов</h2>
                    <p><span></span>Дос, кыйынчылыкта билинет дешет. Менимче, бактылуу кезиңде да билинет.. 
                    </p>
                </div>
                <div class="righter"><i class="fa fa-play"></i></div>
            <div class="col-xs-3">
                <img class="img-responsive" src="{{asset('images/channels/kyrgyzradio/aitmatov.jpg')}}" height="100" width="100" alt="">
                    
                </div>
            </div>  
            <div class="col-md-6 col-xs-12">            
                <div class="col-xs-9">
                    <h2>Чынгыз Айтматов</h2>
                    <p><span></span>«Человек не умирает до тех пор, пока живут знавшие его». </p>
                </div>
                <div class="righter"><i class="fa fa-play"></i></div>
                <div class="col-xs-3">
                <img class="img-responsive" src="{{asset('images/channels/kyrgyzradio/aitmatov.jpg')}}" height="100" width="100" alt="">
                    
                </div>
            </div>
            </div>

        </div>
    </section><!--/#cta-->

    <section id="services" >
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Уктуруулар</h2>
          </div>

            <div class="row">
                <div class="features">
    
                    @if($kyrgyzradioProjects) 
                    @foreach($kyrgyzradioProjects as $key=> $project)
                    @foreach($project->kgprogram()->get() as $post)

                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-bullhorn"></i>
                            </div>
                            <div class="media-body">
                                <div role="tabpanel">
                                    <ul class="nav main-tab nav-justified" role="tablist">
                                        <li role="presentation" class="active"> 

                                            <a href="#{{ $project->id+ $project->kgprogram()->first()->id}}" role="tab" data-toggle="tab" aria-controls="{{ $project->id+ $project->kgprogram()->first()->id }}" aria-expanded="true">{{ $project->getName() }}</a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#{{ $key+99 }}" role="tab" data-toggle="tab" aria-controls="{{ $key+99 }}" aria-expanded="false">{{ trans('radiopages.OPeredachi') }}</a>
                                        </li>
                                    </ul>
                                    <div id="tab-content" class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade active in" id="{{ $project->id+ $project->kgprogram()->first()->id }}" aria-labelledby="{{ $project->id+ $project->kgprogram()->first()->id }}">
                                            <div class="onenews">
                                               <div class="panel panel-articles">                                                
                                                     <div class="panel-body">
                                                     @foreach($project->kgprogram()->get() as $post)
                                                        <div class="media">
                                                           <div class="media-left">
                                                              <a href="{{ route('kyrgyzradio.news', $post) }}">
                                                              <img class="media-object thumb" src="@if(!($post->getFile()))images/live_bg.png @else {{ asset($post->getFile()) }} @endif" alt="image">
                                                              </a>
                                                           </div>
                                                           <div class="media-body">
                                                              <div class="extra">
                                                                 <span class="e-datetime">{{ $post->getDay() }} , {{ $post->getMonthRu() }}, {{ $post->getTime()}}</span>
                                                                 <span class="e-views"><i class="fa fa-eye"></i>{{ $post->getViewed() }}</span>
                                                              </div>
                                                              <a class="media-heading" href="{{ route('kyrgyzradio.news', $post) }}">{{ $post->getTitleRuOrKg() }}</a>
                                                              
                                                           </div>
                                                        </div>
                                                        @endforeach
                                                        
                                                        <footer>
                                                           <a href="{{ route('kyrgyzradio.allnews') }}">{{ trans('site.FrontPostAll') }}</a>
                                                        </footer>
                                                     </div>
                                              
                                               </div>
                                            </div>

                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="{{ $key+99 }}" aria-labelledby="{{ $key+99 }}">
                                           <p>{{ $project->description }}</p>
                                       </div>
                                   </div>
                               </div>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                    @endforeach
                    @endforeach
                    @endif                             

                </div>
            </div><!--/.row-->    
        </div><!--/.container-->
    </section><!--/#services-->

    <section id="cta" class="wow fadeIn">
        <div class="container">
            <div class="row">
            <div class="col-md-6 col-xs-12">            
                <div class="col-xs-9">
                    <h2>Чынгыз Айтматов</h2>
                    <p><span></span>Дос, кыйынчылыкта билинет дешет. Менимче, бактылуу кезиңде да билинет.. 
                    </p>
                </div>
                <div class="righter"><i class="fa fa-play"></i></div>
            <div class="col-xs-3">
                <img class="img-responsive" src="{{asset('images/channels/kyrgyzradio/aitmatov.jpg')}}" height="100" width="100" alt="">
                    
                </div>
            </div>  
            <div class="col-md-6 col-xs-12">            
                <div class="col-xs-9">
                    <h2>Чынгыз Айтматов</h2>
                    <p><span></span>«Человек не умирает до тех пор, пока живут знавшие его». </p>
                </div>
                <div class="righter"><i class="fa fa-play"></i></div>
                <div class="col-xs-3">
                <img class="img-responsive" src="{{asset('images/channels/kyrgyzradio/aitmatov.jpg')}}" height="100" width="100" alt="">
                    
                </div>
            </div>
            </div>

        </div>
    </section><!--/#cta-->

    <section id="portfolio">
        <div class="container">
            <div class="section-header2">
                <h2 class="section-title text-center wow fadeInDown">{{ trans('radiopages.Photos') }}</h2>
            </div>
            <div class="panel-body">

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
              <footer>
              <a href="{{ route('kyrgyzradio.allphotos') }}">
                     <span>{{ trans('radiopages.Allphotos') }} <i class="fa fa-arrow-circle-right"></i></span>
                 </a>
             </footer>
              </div>
        </div><!--/.container-->
    </section><!--/#portfolio-->

    <section id="cta" class="wow fadeIn">
        <div class="container">
            <div class="row">
            <div class="col-md-6 col-xs-12">            
                <div class="col-xs-9">
                    <h2>Чынгыз Айтматов</h2>
                    <p><span></span>Дос, кыйынчылыкта билинет дешет. Менимче, бактылуу кезиңде да билинет.. 
                    </p>
                </div>
                <div class="righter"><i class="fa fa-play"></i></div>
            <div class="col-xs-3">
                <img class="img-responsive" src="{{asset('images/channels/kyrgyzradio/aitmatov.jpg')}}" height="100" width="100" alt="">
                    
                </div>
            </div>  
            <div class="col-md-6 col-xs-12">            
                <div class="col-xs-9">
                    <h2>Чынгыз Айтматов</h2>
                    <p><span></span>«Человек не умирает до тех пор, пока живут знавшие его». </p>
                </div>
                <div class="righter"><i class="fa fa-play"></i></div>
                <div class="col-xs-3">
                <img class="img-responsive" src="{{asset('images/channels/kyrgyzradio/aitmatov.jpg')}}" height="100" width="100" alt="">
                    
                </div>
            </div>
            </div>

        </div>
    </section><!--/#cta-->

    <section id="about">
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Кыргыз Радиосу жөнүндө</h2>
                <p class="text-center wow fadeInDown">Радионун негизги урааны “Кыргыз радиосу - жан дүйнөнүн азыгы”. <br> “Кыргыз радиосу көөнөрбөс мурастар казынасы!”</p>
            </div>

            <div class="row">
                <div class="col-sm-3 wow fadeInLeft">
                    <h3 class="column-title">Логотип</h3>
                    <!-- 16:9 aspect ratio -->               
                    <div class="img-responsive">
                      <img src="{{asset('images/channels/kg-radio.png')}}" alt="">
                    </div>
                </div>

                <div class="col-sm-9 wow fadeInRight">
                    <h3 class="column-title">Тарыхы</h3>
                        <p>Кыргыз радиосу мурдагы Улуттук мамлекеттик радионун курамынан 2009-жылы июнь айында өзүнчө адабий-музыкалык канал катары бөлүнүп чыккан. Кыргыз радиосу улуттук идеологияны жүргүзгөн, калкка рухий азык тараткан, элибиздин көркөм дөөлөттөрүн жайылткан, адабий-музыкалык багытта жан дүйнөнү тазарткан, адеп-ахлак, каада-салттын мектеби болгон уникалдуу радио. Кыргыз радиосунун концепциясы  - көркөм өнөрдүн таасири аркылуу жалпы угармандардын жан дүйнөсүн байытуу, тарбиялоо. </p> 
                        <p>Ырасында эле “Адабият –элдин сезими, элдин рухий турмушунун жемиши” (В.Белинский) же болбосо музыканын тили көтөрүлбөй турган тил. Ал жандын тили (А.Ауэрбах) - деп таамай айтылгандай, адабият менен музыка бүтүндөй элди тазалыкка, адамгерчиликке тарбиялай турган курал. Кыргыз радиосу ушул улуу максатты аркалайт. </p>
                        <p>Күн сайын 12(он эки) саттык уктуруулар эфирге чыгат. Уктуруулар жалаң кыргыз тилинде даярдалат. Уктуруулардын сапатын жакшыртып, угармандардын катарын көбөйтүү максатында редакция жамааты ар убакта талкууларды, талдоолорду өткөрүп, өз кызматын өтөп бүткөн уктурууларды жаап, жаңы долбоорлордун үстүндө изденип, эфирге даярдап келишет. Ошол эле учурда Радионун жүзүн чагылдырып турган роликтер маал-маалы менен жаңыланып турат. Бүгүнкүдөй саясатташкан , күнүмдүк көйгөйлөр адамдын адамдын акыл-эсин чарчатып турган кымгуут заманда угармандардын жан дүйнөсүнө азык берип, эс алууга багыттап, жакшылыкка үндөп келаткан Кыргыз Радиосунун келечеги алдыда</p>
                </div>                
            </div>
             <div class="section-header">             
                <p class="text-justify wow fadeInDown">.</p>
            </div>
        </div>
    </section><!--/#about-->
</div>
@stop
@section('footerscript2')
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>

   <script src="{{ asset('jwplayer/jwplayer.js') }}"></script>
   // <script>jwplayer.key = "tmEO2SU8NzqLBoHr2Vq6nV13XCyfo8xbdiCb/Q==";</script>
   <!-- <script type="text/javascript">
      var playerInstance = jwplayer("player");
      
      //    $('#playerPlay').click(function(){
      //        playerInstance.play();
      //    });
      
      playerInstance.setup({
          autostart: true,
          playlist: [{
                  image: "{{ asset('images/channels/muztv.png') }}",
                  sources: [{
                          file: "http://212.112.96.232:8083;stream.nsv"
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



<script type='text/javascript'>
jwplayer('player').setup({
'author': 'Kyrgyz',
'description': 'Kyrgyz',
'file': 'http://server1.cityedv.at:9036/64kbps',
'type': 'mp3',
'provider': 'sound',
'autostart': 'true',
'controlbar': 'bottom',
'width': '470',
'height': '20',
'skin': 'bekle',
});
</script>-->

<script type='text/javascript'>
jwplayer('player').setup({
'author': 'Kyrgyz',
'description': 'Kyrgyz',
'file': 'http://server1.cityedv.at:9036/64kbps',
'type': 'mp3',
'provider': 'sound',
'autostart': 'true',
'controlbar': 'bottom',
'width': '470',
'height': '20',
'skin': 'bekle',
});
</script>

<script src="js/landing/owl.carousel.min.js"></script>
<script src="js/landing/mousescroll.js"></script>
<script src="js/landing/smoothscroll.js"></script>
<script src="js/landing/jquery.prettyPhoto.js"></script>
<script src="js/landing/jquery.isotope.min.js"></script>
<script src="js/landing/jquery.inview.min.js"></script>
<script src="js/landing/wow.min.js"></script>
<script src="js/landing/main.js"></script>
<script src="js/landing/jquery.js"></script>
<script src="js/landing/fixed.js"></script>

@stop