@extends('Front::channel.kyrgyzradio.default')
@section('title', $post->getTitleRuOrKg())
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
                  <li><a href="{{ route('kyrgyzradio.home') }}">{{ trans('radiopages.Home') }}</a></li>                  
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->
<div class="container" style="background: #fff;padding: 0px; margin: 20px auto;">
  
    <section id="services" style="padding: 0px; margin: 20px -15px 20px -15px;">
         <div class="container">
            <div class="row">
                <div class="top-left-block col-md-9">  
                    <div>
                       
                       <div class="panel-heading">
                          <h3 class="panel-title">
                             <a href="{{ route('front.media.index') }}">{{ trans('radiopages.Peredachi') }}</a>
                             <span>{{ $post->getTitleRuOrKg() }}</span>
                          </h3>
                       </div>
                          <div class="col-md-12">
                             <h2>{{ $post->getTitleRuOrKg() }}</h2>
                             <div class="muzimg">
                                <img src="@if(empty($post->getFile()))images/2.jpg @else {{  asset($post->getFile()) }} @endif" alt="" data-toggle="tooltip" data-placement="top" title="Бул жөн гана сүрөт эмес">
                             </div>
                             <article>
                                {!! $post->getContent() !!}
                 
                                 <div class="carousel-post whitefix">
                                   @if($images)
                                   @foreach($images as $image)
                                   <div class="col-md-4">
                                      <a href="#">

                                      <img src="{{ asset('froala/uploads/'.$image->name) }}" alt=""/>
                                      </a>
                                   </div>
                                   @endforeach
                                   @endif
                                </div>                                  
                             </article>
                          </div>
                             <footer>
                             <a class="pull-right" href="{{ route('kyrgyzradio.allnews') }}">{{ trans('radiopages.Morenews') }}</a>
                            </footer>        
                    </div>
                </div>
                <div class="top-right-block col-md-3">
                    <div class="panel ctg-panel media-ctg-panel">
                       <div class="panel-heading">
                          <h3 class="panel-title"><span>{{ trans('radiopages.Peredachi') }}</span></h3>
                       </div>
                       <div class="panel-body">
                          <div class="col-md-12">
                             <div class="row">
                                <ul class="list-group">
                                   @if($kyrgyzradioProjects) 
                                   @foreach($kyrgyzradioProjects as $key=> $project)
                                   <li class="list-group-item">
                                      <a href="{{ route('kyrgyzradio.project', $project) }}">{{ $project->getName() }}</a>
                                   </li>
                                   @endforeach
                                   @endif
                                </ul>
                             </div>
                          </div>
                       </div>
                    </div>
                </div>
            </div>
         </div>
         <!--/.container-->
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
</div>
@stop
@section('footerscript2')

   <script src="{{ asset('js/landing/mousescroll.js') }}"></script>
   <script src="{{ asset('js/landing/smoothscroll.js') }}"></script>
   <script src="{{ asset('js/landing/jquery.prettyPhoto.js') }}"></script>
   <script src="{{ asset('js/landing/jquery.isotope.min.js') }}"></script>
   <script src="{{ asset('js/landing/jquery.inview.min.js') }}"></script>
   <script src="{{ asset('js/landing/fixed.js') }}"></script>

@stop