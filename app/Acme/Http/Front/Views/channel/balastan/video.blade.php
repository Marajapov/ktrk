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
      <div class="container" style="padding:0px;">
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
                           <li><a class="active" href="{{ route('balastan.video') }}">Видео</a></li>
                           <li><a href="{{ route('balastan.allphotos') }}">{{ trans('radiopages.Photos') }}</a></li>
                        </ul>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
         <div class="row" style="margin-top: 50px;">
            <div class="col-md-12 kidsvideoblock">
               <div class="panel panel-default">
                  <!--                                      <div class="panel-heading">
                     <h3 class="panel-title"><span>Видео</span></h3>
                     </div> -->
                  <div class="panel-body" style="padding:0px;">
                     <div class="row">
                     <div class="row">
                     <div class="col-md-12 kidspered text-center">
                         <h2>{{ trans('radiopages.Bperedachi') }}</h2> 
                         @if($balastanProjects)
                         @foreach($balastanProjects as $project)                                                         
                         <nav>
                           <ul>

                             <li><a class="kid1" href="{{ route('balastan.projectVideos', $project) }}"><i class="fa fa-envelope"></i>{{ $project->getName() }}</a></li>
                             {{-- <li><a class="kid2" href=""><i class="fa fa-envelope"></i>Баарын билгим келет</a></li>
                             <li><a class="kid3" href=""><i class="fa fa-envelope"></i>Манас таануу</a></li>
                             <li><a class="kid4" href=""><i class="fa fa-envelope"></i>Таалимтай</a></li>
                             <li><a class="kid5" href=""><i class="fa fa-envelope"></i>Күн балдары</a></li> --}}

                          </ul>
                       </nav>
                       @endforeach
                       @endif
                    </div>
                     </div>
                        
                        <div class="row" style="margin:0px;">

                           
                           <div class="col-md-offset-1 col-md-10 col-md-offset-1" >
                           
                              @if($balastanLastVideo)
                              <div class="mainboardimg"> 
                                 <iframe width="854px" height="480px" src="https://www.youtube.com/embed/{{$balastanLastVideo->getUrl()}}?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" controls=0 allowfullscreen></iframe>                                           
                              </div>
                              <img class="mainboarddesc"  src="{{asset('images/channels/balastan/chalkboard.png')}}" alt="">
                                 <div class="item-desc2">
                                    <ul>                                  
                                          <li class="item-artist">{{ $balastanLastVideo->getName() }}</li>
                                 
                                    </ul>
                                 </div>
                              @endif                         
                           </div>                         
                        
                        </div>
                        @if($balastanMedias)
                        @foreach($balastanMedias as $media)
                            <div class="col-md-3 col-sm-4 col-xs-6 boardaim">
                              <div class="boardimg">                              
                                 <a href="{{ route('balastan.video', $media)}}">
                                 <img src="http://img.youtube.com/vi/{{ $media->getUrl()}}/mqdefault.jpg" alt=""/></a>                        
                              </div>
                              <img class="boarddesc"  src="{{asset('images/channels/balastan/chalkboard.png')}}" alt="">
                                 <div class="item-desc">
                                    <ul>
                                       <a href="{{ route('balastan.video', $media)}}">
                                          <li class="item-artist">{{ $media->getName() }}</li>
                                       </a>
                                    </ul>
                                 </div>
                           </div>
                           @endforeach
                        @endif
                        
                    
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   @stop
   @section('footerscript2')
   @stop