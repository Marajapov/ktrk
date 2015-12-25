@extends('Front::channel.kyrgyzradio.default')
@section('title', "Достук Радиосу")
@section('styles')
<link rel="stylesheet" href="{{ asset('css/radios.css')}}">
<link rel="stylesheet" href="{{ asset('css/landing/dostuk.css')}}">

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
                    <a class="navbar-brand" href="#"><img src="{{ asset('images/channels/dostuk.png')}}"><h4>Достук</h4></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="menu">
                    <ul class="nav navbar-nav channel_switch">
                        <li class="sitemenu" id="site-channel1">
                            <a href="{{ route('front.home') }}"><img src="{{ asset('images/ktrk_last.svg')}}" style="height:40px;"><span>КТРК</span><h4>КТРК</h4></a></li>
                        <li class="sitemenu" id="site-channel1">
                            <a href="{{ route('birinchi.home') }}"><img src="{{ asset('images/channels/1-radio.png')}}" ><span>Биринчи радио</span><h4>Биринчи радио</h4></a></li>
                        <li class="sitemenu" id="site-channel1">
                            <a href="{{ route('kyrgyzradio.home') }}"><img src="{{ asset('images/channels/kg-radio.png')}}"><span>Кыргыз радиосу</span><h4>Кыргыз радиосу</h4></a></li>
                        <li class="sitemenu" id="site-channel1">
                            <a href="{{ route('minkiyal.home') }}"><img src="{{ asset('images/channels/min-kiyal.png')}}"><span>Миң кыял FM</span><h4>Миң кыял FM</h4></a></li>
                        <li class="sitemenu" id="site-channel1">
                            <a class="active" href="{{ route('dostuk.home') }}"><img src="{{ asset('images/channels/dostuk.png')}}"><span>Достук</span><h4>Достук</h4></a></li>    
                    </ul>   
                </div><!-- /.navbar-collapse -->
            </nav>
    </div>

    <header id="header">
        <nav id="main-menu" class="navbar navbar-default fixedheader2" role="banner">
            <div class="container" style="padding: 0px;">
                <div class="languages">
                    <ul>
                        <li @if(app()->getlocale() == 'kg') class="active" @endif><a href="/locale/kg">кырг <span></span></a></li>
                        <li @if(app()->getlocale() == 'ru') class="active" @endif><a href="/locale/ru">рус <span></span></a></li>
                    </ul>
                </div>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Меню</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ route('dostuk.home') }}"><img src="{{ asset('images/channels/dostuk.png')}}" alt="logo">Достук</a>
                    <div class="onetime"><a href=""><button class="btn"><i class="fa fa-microphone"></i><span>{{ trans('radiopages.Live') }}</span></button></a></div>
              
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll active"><a href="#home">{{ trans('radiopages.Home') }}</a></li>
                        <li class="scroll"><a href="#services">{{ trans('radiopages.Peredachi') }}</a></li>
                        <li class="scroll"><a href="#portfolio">{{ trans('radiopages.Photos') }}</a></li>  
                        <li class="scroll"><a href="#about">{{ trans('radiopages.About') }}</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->
<div class="container" style="background: #fff;padding: 0px; margin-top: 20px;">
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
            <div class="section-header2">
                <h2 class="section-title text-center wow fadeInDown"></h2>
                <h2 data-wow-duration="300ms" data-wow-delay="0ms"><span>{{ trans('radiopages.DostukSlogan') }}</span></h2>
                <h2 class="section-title text-center wow fadeInDown"></h2>  
            </div>
        </div>
    </section>

    <section id="services" >
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">{{ trans('radiopages.Peredachi') }}</h2>
                <p class="text-center wow fadeInDown">{{ trans('radiopages.Dostuklangs') }}<br>{{ trans('radiopages.Dostuklangs2') }}</p>
          </div>

            <div class="row">
                <div class="features">
                    @if($dostukProjects) 
                    @foreach($dostukProjects as $key=> $project)

                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-bullhorn"></i>
                            </div>
                            <div class="media-body">
                                <div role="tabpanel">
                                    <ul class="nav main-tab nav-justified" role="tablist">
                                        <li role="presentation" class="active">
                                            <a href="#{{ $project->id+ $project->program()->first()->id}}" role="tab" data-toggle="tab" aria-controls="{{ $project->id+ $project->program()->first()->id }}" aria-expanded="true">{{ $project->getName() }}</a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#{{ $key+99 }}" role="tab" data-toggle="tab" aria-controls="{{ $key+99 }}" aria-expanded="false">{{ trans('radiopages.OPeredachi') }}</a>
                                        </li>
                                    </ul>
                                    <div id="tab-content" class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade active in" id="{{ $project->id+ $project->program()->first()->id }}" aria-labelledby="{{ $project->id+ $project->program()->first()->id }}">
                                            <div class="onenews">
                                               <div class="panel panel-articles">

                                                
                                                     <div class="panel-body">
                                                     @foreach($project->program()->get() as $post)
                                                        <div class="media">
                                                           <div class="media-left">
                                                              <a href="{{ route('dostuk.news', $post) }}">
                                                              <img class="media-object thumb" src="@if(!($post->getFile()))images/live_bg.png @else {{ asset($post->getFile()) }} @endif" alt="image">
                                                              </a>
                                                           </div>
                                                           <div class="media-body">
                                                              <div class="extra">
                                                                 <span class="e-datetime">{{ $post->getDay() }} , {{ $post->getMonthRu() }}, {{ $post->getTime()}}</span>
                                                                 <span class="e-views"><i class="fa fa-eye"></i>{{ $post->getViewed() }}</span>
                                                              </div>
                                                              <a class="media-heading" href="{{ route('dostuk.news', $post) }}">{{ $post->getTitleRuOrKg() }}</a>
                                                              
                                                           </div>
                                                        </div>
                                                        @endforeach
                                                        
                                                        <footer>
                                                           <a href="{{ route('dostuk.allnews') }}">{{ trans('site.FrontPostAll') }}</a>
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
                    @endif
                                      
                </div>
            </div><!--/.row-->    
        </div><!--/.container-->
    </section><!--/#services-->

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
                          <a href="{{ route('dostuk.photos', $photoGallery) }}" class="thumb">
                            <img src="{{ asset($photoGallery->status) }}" alt="..." class="img-thumbnail">
                            <i class="fa fa-camera"></i>
                          </a>
                          <h2>
                            <div class="extra">
                              <span class="e-datetime">{{ $photoGallery->getDay() }} {{ $photoGallery->getMonthRu() }}, {{ $photoGallery->getTime() }}</span>
                            </div>
                            <a href="{{ route('dostuk.photos', $photoGallery) }}">{{ $photoGallery->getName() }}</a>
                          </h2>
                        </div>

                      </div>
                    @endforeach
                  @endif

                </section>
              <footer>
              <a href="{{ route('dostuk.allphotos') }}">
                     <span>{{ trans('radiopages.Allphotos') }} <i class="fa fa-arrow-circle-right"></i></span>
                 </a>
             </footer>
              </div>
        </div><!--/.container-->
    </section><!--/#portfolio-->

    <section id="about">
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">{{ trans('radiopages.AboutDostuk') }}</h2>
                <p class="text-center wow fadeInDown">{{ trans('radiopages.AboutDostukup') }}</p>
            </div>

            <div class="row">
                <div class="col-sm-4 wow fadeInLeft">
                    <h3 class="column-title">Логотип</h3>
               
                    <div class="img-responsive">
                      <img src="{{asset('images/channels/dostuk.png')}}" alt="">
                    </div>
                    <p>{{ trans('radiopages.AboutPromo') }}</p>   
                </div>

                <div class="col-sm-8 wow fadeInRight">
                    <h3 class="column-title">{{ trans('radiopages.AboutAim') }}</h3>
                    <p>{{ trans('radiopages.DostukText1') }}</p>
                    <p>{{ trans('radiopages.DostukText2') }}</p>
                    <p>{{ trans('radiopages.DostukText3') }}</p>
                    <p>{{ trans('radiopages.DostukText4') }}</p>
                    <p>{{ trans('radiopages.DostukText5') }}</p>
                    <p>{{ trans('radiopages.DostukText6') }}</p>
                    <p>{{ trans('radiopages.DostukText7') }}</p>
                    <p>{{ trans('radiopages.DostukText8') }}</p>
                    <p>{{ trans('radiopages.DostukText9') }}</p>
                    <p>{{ trans('radiopages.DostukText10') }}</p>
                    <p>{{ trans('radiopages.DostukText11') }}</p>
                </div>
            </div>
        </div>
    </section><!--/#about-->
        <section id="get-in-touch">
        <div class="container">
            <div class="section-header2">            
                <h2 class="section-title text-center wow fadeInDown">{{ trans('radiopages.Address') }}</h2>
                <p class="text-center wow fadeInDown">{{ trans('radiopages.AddressName') }}</p>
            </div>
            <div class="section-header2">            
                <h2 class="section-title text-center wow fadeInDown">{{ trans('radiopages.Phone') }}</h2>
                <p class="text-center wow fadeInDown">0312 65 67 04 <br> 0312 65 66 10</p>
            </div>
            <div class="section-header2">            
                <h2 class="section-title text-center wow fadeInDown">{{ trans('radiopages.Volna') }}</h2>
            </div>            
        </div>
    </section><!--/#get-in-touch-->

</div>

@stop
@section('footerscript2')
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>

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