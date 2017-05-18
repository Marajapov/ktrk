@extends('Front::channel.muzkanal.default')
@section('title', trans('radiopages.Homepage') .' | Музыка')
@section('styles')
<link rel="stylesheet" href="css/audio/muzslider.css">
<link rel="stylesheet" href="css/slicebox.css">
@endsection
@section('content')
@include('Front::channel.muzkanal.nav')
<div class="container">
   <!-- BEGIN Main slider slicebox-->
   <div class="row">
      <div class="wrapper">
         <ul id="sb-slider" class="sb-slider">
         @if($anonsslide->first()) 
            @foreach($anonsslide as $anons)
            <li>
               <a href="{{ $anons->getUrl() }}" target="_blank"><img src="{{asset($anons->thumbnail)}}" alt="{{ $anons->getNameOne() }}"/></a>
            </li>
            @endforeach
         @endif
         </ul>
         <div id="nav-arrows" class="nav-arrows">
            <a href="#">Next</a>
            <a href="#">Previous</a>
         </div>
      </div>
      <!-- /wrapper -->
   </div>
   <!-- END Main slider slicebox-->
   <!-- BEGIN ANONS-->
   <div class="row dkp-big-3now ">
      @if($anons1)
      <div class="col-xs-4 rowfix" >
         <a href="#" data-toggle="modal" data-target="#myModal" class="dkp-anonce dkp-anonce-small  dkp-border">
            <img class="modalpromo" src="{{asset($anons1->thumbnail_big)}}" alt="{{$anons1->getName()}}"/>        
            <div class="dkp-3now-item-wrapper">
               <div class="dkp-3now-item-time">
                  <span>
                  <span>{{$anons1->getAnonsTime1()}}</span>
                  </span>
               </div>
               <div class="dkp-3now-item-title">
                  <span>{{$anons1->getName()}}</span>
               </div>
            </div>
         </a>
         <!-- Анонс Модал-->
         <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <h4 class="modal-title" id="myModalLabel">{{$anons1->getName()}}</h4>
                  </div>
                  <div class="modal-body" style="padding-bottom: 15px;">
                     {!! $anons1->getContent()!!}
                     <div class="embed-responsive embed-responsive-16by9 show-video">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $anons1->getUrl()}}"></iframe>
                     </div>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('radiopages.Close') }}</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
      @endif
      @if($anons2)
      <div class="col-xs-4 rowfix" >
         <a href="#" data-toggle="modal" data-target="#myModal2" class="dkp-anonce dkp-anonce-small  dkp-border" data-id="12269">
            <img class="modalpromo" src="{{asset($anons2->thumbnail_big)}}" alt="{{$anons2->getName()}}"/>
            <div class="dkp-3now-item-wrapper">
               <div class="dkp-3now-item-time">
                  <span>
                  <span>{{$anons2->getAnonsTime2()}}</span>
                  </span>
               </div>
               <div class="dkp-3now-item-title">
                  <span>{{$anons2->getName()}}</span>
               </div>
            </div>
         </a>
         <!-- Анонс Модал-->
         <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <h4 class="modal-title" id="myModalLabel">{{$anons2->getName()}}</h4>
                  </div>
                  <div class="modal-body" style="padding-bottom: 15px;">
                     {!!$anons2->getContent()!!}
                     <div class="embed-responsive embed-responsive-16by9 show-video">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $anons2->getUrl()}}"></iframe>
                     </div>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('radiopages.Close') }}</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
      @endif
      @if($anons3)
      <div class="col-xs-4 rowfix" >
         <a href="#" data-toggle="modal" data-target="#myModal3" class="dkp-anonce dkp-anonce-small  dkp-border" data-id="12269">
            <img class="modalpromo" src="{{asset($anons3->thumbnail_big)}}" alt="{{$anons3->getName()}}"/>
            <div class="dkp-3now-item-wrapper">
               <div class="dkp-3now-item-time">
                  <span>
                  <span>{{$anons3->getAnonsTime3()}}</span>
                  </span>
               </div>
               <div class="dkp-3now-item-title">
                  <span>{{$anons3->getName()}}</span>
               </div>
            </div>
         </a>
         <!-- Анонс Модал-->
         <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <h4 class="modal-title" id="myModalLabel">{{$anons3->getName()}}</h4>
                  </div>
                  <div class="modal-body" style="padding-bottom: 15px;">
                     {!!$anons3->getContent()!!}
                     <div class="embed-responsive embed-responsive-16by9 show-video">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $anons3->getUrl()}}"></iframe>
                     </div>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('radiopages.Close') }}</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
      @endif
   </div>
   <!-- END ANONS-->
   <!-- BEGIN LIVE AND PROGRAMM-->
   <div class="row">
      <div class="col-md-8 onairmuz">
         <div class="panel">
            <div class="panel-heading">
               <h3 class="panel-title"><span>{{ trans('radiopages.Live') }}</span></h3>
            </div>
            <div id="player"></div>
         </div>
      </div>
      <div class="col-md-4 promo">
         <div class="panel panel-default promorolik">
            <div class="panel-heading">
               <h3 class="panel-title"><span>Промо</span></h3>
            </div>
            @if($promo != null)
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/{{ $promo->getUrl()}}" frameborder="0" allowfullscreen></iframe>
            @else
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/t8r7ifqRViY" frameborder="0" allowfullscreen></iframe>
            @endif
         </div>
         <div class="panel panel-default programtitle">
            <div class="panel-heading">
               <h3 class="panel-title"><span>{{ trans('radiopages.KorsotuuList') }}</span></h3>
            </div>
            @if($program)
            <div class="centered">
               <div id="nt-example1-container" >
                  <i class="fa fa-arrow-up" id="nt-example1-prev"></i>
                  <i class="fa fa-arrow-down" id="nt-example1-next" style="right:25px;"></i>
                  <ul id="nt-example1" data-tabs="nt-example1">
                     @foreach($program as $row)
                     <li style="">
                        <span>{{ $row->time }}</span>
                        <h4>
                           <p>{{ $row->name }}</p>
                        </h4>
                     </li>
                     @endforeach
                  </ul>
               </div>
            </div>
            @endif
         </div>
      </div>
   </div>
   <!-- END LIVE AND PROGRAMM-->
   <!-- BEGIN NEW CLIPS AND TOP-CHART-->
   <div class="row">
      <div class="col-md-8">
         <div class="row newvideos">
            <div class="panel panel-default panel-carousel">
               <div class="panel-heading">
                  <h3 class="panel-title"><span>{{ trans('radiopages.NewClips') }}</span></h3>
               </div>
               <div class="panel-body">
                  <div class="col-md-12">
                     <div class="newclips">
                        @if($MediaPop1)
                        @foreach($MediaPop1 as $pop1)
                        <div class="col-md-4 col-xs-12">
                           <a href="{{ route('muzkanal.video', $pop1)}}">
                           <img src="http://img.youtube.com/vi/{{ $pop1->getUrl()}}/hqdefault.jpg" alt=""/></a>
                           <div class="item-desc">
                              <ul>
                                 <a href="{{ route('muzkanal.video', $pop1)}}">
                                    <li class="item-artist">{{ $pop1->getName() }}</li>
                                 </a>
                              </ul>
                           </div>
                           @if($pop1->exclusive == 1)
                           <div class="ishit">Эксклюзив!</div>
                           @endif
                           <div class="views"><i class="fa fa-eye"></i>{{ $pop1->getViewed() }}</div>
                        </div>
                        @endforeach
                        @endif
                     </div>
                     <div class="newclips videosfix">
                        @if($MediaPop2)
                        @foreach($MediaPop2 as $pop2)
                        <div class="col-md-4">
                           <a href="{{ route('muzkanal.video', $pop2)}}"><img src="http://img.youtube.com/vi/{{ $pop2->getUrl()}}/hqdefault.jpg" alt=""/></a>
                           <div class="item-desc">
                              <ul>
                                 <a href="{{ route('muzkanal.video', $pop2)}}">
                                    <li class="item-artist">{{ $pop2->getName() }}</li>
                                 </a>
                              </ul>
                           </div>
                           @if($pop2->exclusive == 1)
                           <div class="ishit">Эксклюзив!</div>
                           @endif
                           <div class="views"><i class="fa fa-eye"></i>{{ $pop2->getViewed() }}</div>
                        </div>
                        @endforeach
                        @endif
                     </div>
                     <div class="newclips videosfix">
                        @if($MediaPop3)
                        @foreach($MediaPop3 as $pop3)
                        <div class="col-md-4">
                           <a href="{{ route('muzkanal.video', $pop3)}}"><img src="http://img.youtube.com/vi/{{ $pop3->getUrl()}}/hqdefault.jpg" alt=""/></a>
                           <div class="item-desc">
                              <ul>
                                 <a href="{{ route('muzkanal.video', $pop3)}}">
                                    <li class="item-artist">{{ $pop3->getName() }}</li>
                                 </a>
                              </ul>
                           </div>
                           @if($pop3->exclusive == 1)
                           <div class="ishit">Эксклюзив!</div>
                           @endif
                           <div class="views"><i class="fa fa-eye"></i>{{ $pop3->getViewed() }}</div>
                        </div>
                        @endforeach
                        @endif
                     </div>
                     <footer>
                        <a href="{{ route('muzkanal.videos') }}">
                        <span>{{ trans('radiopages.AllVideos') }} <i class="fa fa-arrow-circle-right"></i></span>
                        </a>
                     </footer>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-md-4 hittop">
         <div class="panel panel-default hit-parad">
            <div class="panel-heading">
               <h3 class="panel-title"><span>{{ trans('radiopages.WeekSelect') }}</span></h3>
            </div>
            <div class="panel-body">
               <ul class="list-group" >
                  @if($hitNumbers)
                  @foreach($hitNumbers as $key => $hit)
                  <li class="list-group-item clearfix">
                     <span class="numeric">{{ $key+1 }}</span>
                     <!--  <a href="#" class="pull-right"> <i class="glyphicon glyphicon-play"></i> </a> -->
                     <a href="{{ route('muzkanal.video', $hit)}}" class="pull-left"> <img src="http://img.youtube.com/vi/{{ $hit->getUrl()}}/hqdefault.jpg" class="hitimg"> </a>
                     <a class="clear" href="{{ route('muzkanal.video', $hit)}}">
                     <span class="song-name">{{ $hit->getName() }}</span>
                     </a>
                     <div>
                        <div class="vote toplike">
                           {!! Form::open(['route' => ['muzkanal.like', $hit], 'method' => 'GET']) !!}                         
                           <input type="hidden" value="1" name="like">
                           <span class="topcounts">{{$hit->like}}</span>
                           <button type="submit" class="like-button" data-container="body" data-toggle="popover" data-placement="left" data-content="{{ trans('radiopages.VoteYes') }} ">
                              <i class="fa fa-star red-tooltip" ></i> 
                              <!-- data-toggle="tooltip" data-placement="right" title="Like"                            -->
                           </button>
                           {!! Form::close() !!}
                        </div>
                     </div>
                  </li>
                  @endforeach
                  @endif
               </ul>
            </div>
         </div>
      </div>
   </div>
   <!-- END NEW CLIPS AND TOP-CHART-->
   <!-- BEGIN TOP CLIPS-->
   <div class="row">
      <div class="col-md-12">
         <div class="row topvideos">
            <div class="panel panel-default panel-carousel">
               <div class="panel-heading">
                  <h3 class="panel-title"><span>{{ trans('radiopages.TopCLips') }}</span></h3>
               </div>
               <div class="panel-body">
                  <div class="col-md-12">
                     <div class="topclips">
                        @if($MediaTop1)
                        @foreach($MediaTop1 as $top1)
                        <div class="col-md-4">
                           <a href="{{ route('muzkanal.video', $top1)}}">
                           <img src="http://img.youtube.com/vi/{{ $top1->getUrl() }}/hqdefault.jpg" alt=""/></a>
                           <div class="item-desc">
                              <ul>
                                 <a href="{{ route('muzkanal.video', $top1)}}">
                                    <li class="item-artist">{{ $top1->getName() }}</li>
                                 </a>
                              </ul>
                           </div>
                           @if($top1->exclusive == 1)
                           <div class="ishit">Эксклюзив!</div>
                           @endif
                           <div class="views"><i class="fa fa-eye"></i>{{ $top1->getViewed() }}</div>
                        </div>
                        @endforeach
                        @endif
                     </div>
                     <div class="topclips videosfix">
                        @if($MediaTop2)
                        @foreach($MediaTop2 as $top2)
                        <div class="col-md-4">
                           <a href="{{ route('muzkanal.video', $top2)}}"><img src="http://img.youtube.com/vi/{{ $top2->getUrl() }}/hqdefault.jpg" alt=""/></a>
                           <div class="item-desc">
                              <ul>
                                 <a href="{{ route('muzkanal.video', $top2)}}">
                                    <li class="item-artist">{{ $top2->getName() }}</li>
                                 </a>
                              </ul>
                           </div>
                           @if($top2->exclusive == 1)
                           <div class="ishit">Эксклюзив!</div>
                           @endif
                           <div class="views"><i class="fa fa-eye"></i>{{ $top2->getViewed() }}</div>
                        </div>
                        @endforeach
                        @endif
                     </div>
                     <footer>
                        <a href="{{ route('muzkanal.videos')}}">
                        <span>{{ trans('radiopages.AllVideos') }} <i class="fa fa-arrow-circle-right"></i></span>
                        </a>
                     </footer>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- END TOP CLIPS-->
   <!-- BEGIN CONCERT-->
   <div class="row">
      <div class="col-md-12">
         <div class="row topvideos">
            <div class="panel panel-default panel-carousel">
               <div class="panel-heading">
                  <h3 class="panel-title"><span>Концерт</span></h3>
               </div>
               <div class="panel-body">
                  <div class="col-md-12">
                     <div class="concert">
                        @if($Concert)
                        @foreach($Concert as $show)
                        <div class="col-md-4">
                           <a href="{{ route('muzkanal.video', $show)}}">
                           <img src="http://img.youtube.com/vi/{{ $show->getUrl() }}/hqdefault.jpg" alt=""/></a>
                           <div class="item-desc">
                              <ul>
                                 <a href="{{ route('muzkanal.video', $show)}}">
                                    <li class="item-artist">{{ $show->getName() }}</li>
                                 </a>
                              </ul>
                           </div>
                        </div>
                        @endforeach
                        @endif
                     </div>
                     <footer>
                        <a href="{{ route('muzkanal.videos')}}">
                        <span>{{ trans('radiopages.AllVideos') }} <i class="fa fa-arrow-circle-right"></i></span>
                        </a>
                     </footer>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- END CONCERT-->
   <!-- BEGIN GALLERY-->
   <div class="row">
      <div class="col-md-12 ">
         <div class="row imgmuz">
            <div class="panel panel-default">
               <div class="panel-heading">
                  <h3 class="panel-title"><span>{{ trans('radiopages.Photos') }}</span></h3>
               </div>
               <div class="ia-container">
                  @if($photoGalleries != null)
                  @foreach($photoGalleries as $key=>$photoGallery)
                  <figure>
                     <img src="{{ asset($photoGallery->thumbnail_big) }}" />
                     <input type="radio" name="radio-set" @if($key == 0) checked="checked" @endif/>
                     <figcaption><a href="{{ route('muzkanal.photos', $photoGallery) }}"><span>{{ $photoGallery->getName() }}</span></a></figcaption>
                     @endforeach
                     @endif
                  </figure>
               </div>
               <!-- ia-container -->
            </div>
         </div>
      </div>
   </div>
   <!-- END GALLERY -->
   <!-- BEGIN SOCIAL -->
   <div class="row">
      <div class="col-md-12">
         <div class="row imgmuz">
            <div class="panel panel-default">
               <div class="panel-heading">
                  <h3 class="panel-title"><span>{{ trans('radiopages.Wearesocial')}}</span></h3>
               </div>
               <div class="panel-body social-muschannel">
                  <div class="col-sm-3">
                     <div class="fb-page" style="height: 460px;overflow: hidden;" data-href="https://www.facebook.com/ktrkmuzyka" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                        <div class="fb-xfbml-parse-ignore">
                           <blockquote cite="https://www.facebook.com/ktrkmuzyka"><a href="https://www.facebook.com/ktrkmuzyka/">КТРК Музыка</a></blockquote>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-3">
                     <script src="https://apis.google.com/js/platform.js"></script>
                     <div class="g-ytsubscribe" data-channelid="UCPYuDx0G3WgGH3SR86VUnlA" data-layout="full" data-count="default"></div>
                     <div class="music-youtube"></div>
                  </div>
                  <div class="col-sm-3">
                     <div id="ok_group_widget"></div>
                     <script>
                        !function (d, id, did, st) {
                            var js = d.createElement("script");
                            js.src = "https://connect.ok.ru/connect.js";
                            js.onload = js.onreadystatechange = function () {
                                if (!this.readyState || this.readyState == "loaded" || this.readyState == "complete") {
                                    if (!this.executed) {
                                        this.executed = true;
                                        setTimeout(function () {
                                            OK.CONNECT.insertGroupWidget(id,did,st);
                                        }, 0);
                                    }
                                }}
                            d.documentElement.appendChild(js);
                        }(document,"ok_group_widget","52901559140520","{width:263,height:460}");
                     </script>
                  </div>
                  <div class="col-sm-3">
                     <iframe src="{{asset('images/channels/muzkanal/inwidget/index.php?height=460&inline=3')}}" scrolling='no' frameborder='no' style='border:none;width:263px;height:455px;overflow:hidden;'></iframe>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- END SOCIAL -->
</div>
@stop
@section('footerScript')
<script type="text/javascript" src="{{ asset('js/jquery.slicebox.js') }}"></script>
<!-- Fixed Sticky header -->
<script>
   $(function(){
       var url = $('#myModal iframe').attr('src');
       $('.modal').click(function() {
           $('#myModal iframe').show();
           $('#myModal iframe').attr('src', url);
       });
       $('button.close').click(function() {
           $('#myModal').hide();
           $('#myModal').attr('src', '');
       });
   });
   
   $(function(){
       var url = $('#myModal2 iframe').attr('src');
       $('.modal').click(function() {
           $('#myModal2 iframe').show();
           $('#myModal2 iframe').attr('src', url);
       });
       $('button.close').click(function() {
           $('#myModal2').hide();
           $('#myModal2').attr('src', '');
       });
   });
   
   $(function(){
       var url = $('#myModal3 iframe').attr('src');
       $('.modal').click(function() {
           $('#myModal3 iframe').show();
           $('#myModal3 iframe').attr('src', url);
       });
       $('button.close').click(function() {
           $('#myModal3').hide();
           $('#myModal3').attr('src', '');
       });
   });
</script>
<script>
   function like() {
       alert("Clik");
   }
</script>
<script type ="text/javascript" src ="{{ asset('js/script.js') }}"></script>
<!-- Fixed Sticky header -->
<!-- Programm title Anima -->
<script src="{{ asset('js/audio/jquery.newsTicker.js') }}"></script>
<script>
   var nt_title = $('#nt-title').newsTicker({
       row_height: 30,
       max_rows: 1,
       duration: 3000,
       pauseOnHover: 1
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
<script type="text/javascript">
   var playerInstance = jwplayer("player");
   
   //    $('#playerPlay').click(function(){
   //        playerInstance.play();
   //    });
   
   playerInstance.setup({
       autostart: true,
       playlist: [{
           image: "{{ asset('images/channels/muzkanal/online.jpg') }} ",
           sources: [{
               file: "http://85.113.29.234:80/live/4002.flv"
           }]
       }],
       width: "100%",
       height: "100%",
       aspectratio: "16:9",
       primary: "flash",
   //          skin: {
   //              name: "bekle"
   //          },
       stretching: "exactfit"
   });
</script>
<!--Carousel-->
<script>
   if ($(window).width() > 768) {
       $('.newclips').slick({
           infinite: true,
           slidesToShow: 3,
           slidesToScroll: 1,
           autoplay: false,
           autoplaySpeed: 4500
       });
       $('.topclips').slick({
           infinite: true,
           slidesToShow: 4,
           slidesToScroll: 1,
           autoplay: false,
           autoplaySpeed: 4500
       });
       $('.concert').slick({
           infinite: true,
           slidesToShow: 4,
           slidesToScroll: 1,
           autoplay: false,
           autoplaySpeed: 4500
       });
   }
   
   if ($(window).width() < 768) {
       $('.newclips').slick({
           infinite: true,
           slidesToShow: 2,
           slidesToScroll: 1,
           autoplay: false,
           autoplaySpeed: 4500
       });
       $('.topclips').slick({
           infinite: true,
           slidesToShow: 2,
           slidesToScroll: 1,
           autoplay: false,
           autoplaySpeed: 4500
       });
       $('.concert').slick({
           infinite: true,
           slidesToShow: 2,
           slidesToScroll: 1,
           autoplay: false,
           autoplaySpeed: 4500
       });
   }
   
</script>
<script type="text/javascript">
   $(function() {
       var Page = (function() {
           var $navArrows = $( '#nav-arrows' ).hide(),
               $shadow = $( '#shadow' ).hide(),
               slicebox = $( '#sb-slider' ).slicebox( {
                   onReady : function() {
                       $navArrows.show();
                       $shadow.show();
                   },
                   orientation : 'r',
                   cuboidsRandom : true,
                   disperseFactor : 30,
                   autoplay : true,
                   interval: 5000
               } ),
               init = function() {
                   initEvents();
               },
               initEvents = function() {
                   // add navigation events
                   $navArrows.children( ':first' ).on( 'click', function() {
                       slicebox.next();
                       return false;
                   } );
                   $navArrows.children( ':last' ).on( 'click', function() {
                       slicebox.previous();
                       return false;
                   } );
               };
           return { init : init };
       })();
       Page.init();
   });
</script>
<script>
   $(document).ready(function(){
       $('[data-toggle="popover"]').popover();
   });
</script>
@stop