@extends('Front::channel.muzkanal.default')
@section('title', trans('radiopages.Homepage') .' | Музыка')
@section('styles')
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.0/css/iziModal.min.css">
@endsection
@section('content')
@include('Front::channel.muzkanal.nav')
<div class="container newmusic">
   <!-- BEGIN Main slider slicebox-->
   <div class="row mb20">
      <div class="slick-projects">
         @foreach($anonsslide as $row)
            <div class="slick-project">
               <a href="{{ $row->getUrl() }}" target="_blank">
                  <img src="{{asset($row->thumbnail)}}" alt="{{ $row->getNameOne() }}"/>
               </a>
            </div>
         @endforeach
      </div>
   </div>
   <!-- END Main slider slicebox-->

   <!-- BEGIN ANONS-->  
   <div class="row anons-blocks mb20">
      @if($anons1)
      <div class="col-xs-4 anons-block" >
         <figure class="trigger-anons1">
            <img src="{{asset($anons1->thumbnail_big)}}" alt="{{$anons1->getName()}}"/>
            <figcaption>
               <div class="anons-time">
                  {{$anons1->getAnonsTime2()}}
               </div>
               <div class="anons-title">
                  {{$anons1->getName()}}
               </div>
               <svg  class="play-button" x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve">
                        <g transform="translate(0,-952.36218)">
                            <path d="M16,952.4c-8.8,0-16,7.2-16,16s7.2,16,16,16s16-7.2,16-16C32,959.5,24.8,952.4,16,952.4L16,952.4z M16,954.7
                                c7.6,0,13.7,6.1,13.7,13.7c0,7.6-6.1,13.7-13.7,13.7s-13.7-6.1-13.7-13.7S8.4,954.7,16,954.7L16,954.7z M11.7,961.3v14l11.7-7
                                L11.7,961.3z"/>
                        </g>
                    </svg>
            </figcaption>
         </figure>
      </div>
      @endif
      @if($anons2)
      <div class="col-xs-4 anons-block" >
         <figure class="trigger-anons2">
            <img src="{{asset($anons2->thumbnail_big)}}" alt="{{$anons2->getName()}}"/>
            <figcaption>
               <div class="anons-time">
                  {{$anons2->getAnonsTime2()}}
               </div>
               <div class="anons-title">
                  {{$anons2->getName()}}
               </div>
               <svg class="play-button" x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve">
                        <g transform="translate(0,-952.36218)">
                            <path d="M16,952.4c-8.8,0-16,7.2-16,16s7.2,16,16,16s16-7.2,16-16C32,959.5,24.8,952.4,16,952.4L16,952.4z M16,954.7
                                c7.6,0,13.7,6.1,13.7,13.7c0,7.6-6.1,13.7-13.7,13.7s-13.7-6.1-13.7-13.7S8.4,954.7,16,954.7L16,954.7z M11.7,961.3v14l11.7-7
                                L11.7,961.3z"/>
                        </g>
                    </svg>
            </figcaption>
         </figure>
      </div>
      @endif
      @if($anons3)
      <div class="col-xs-4 anons-block" >
         <figure class="trigger-anons3">
            <img src="{{asset($anons3->thumbnail_big)}}" alt="{{$anons3->getName()}}"/>
            <figcaption>
               <div class="anons-time">
                  {{$anons3->getAnonsTime2()}}
               </div>
               <div class="anons-title">
                  {{$anons3->getName()}}
               </div>
               <svg class="play-button" x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve">
                        <g transform="translate(0,-952.36218)">
                            <path d="M16,952.4c-8.8,0-16,7.2-16,16s7.2,16,16,16s16-7.2,16-16C32,959.5,24.8,952.4,16,952.4L16,952.4z M16,954.7
                                c7.6,0,13.7,6.1,13.7,13.7c0,7.6-6.1,13.7-13.7,13.7s-13.7-6.1-13.7-13.7S8.4,954.7,16,954.7L16,954.7z M11.7,961.3v14l11.7-7
                                L11.7,961.3z"/>
                        </g>
                    </svg>
            </figcaption>
         </figure>
      </div>
      @endif
   </div>
   <!-- END ANONS-->

   <!-- BEGIN LIVE AND PROGRAMM-->
   <div class="row mb20">
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
   <div class="row mb20">
      <div class="col-md-8">
         <div class="row m-blocks l-blocks newvideos">
            <div class="panel panel-default panel-carousel">
               <div class="panel-heading">
                  <h3 class="panel-title"><span>{{ trans('radiopages.NewClips') }}</span></h3>
               </div>
               <div class="panel-body">
                  @if($lastVideos)
                     @foreach($lastVideos as $pop1)
                     <div class="m-block l-block">
                        <a class="m-thumb l-thumb" href="{{ route('muzkanal.video', $pop1)}}">
                           <img src="http://img.youtube.com/vi/{{ $pop1->getUrl()}}/mqdefault.jpg" alt="{{ $pop1->getName() }}"/>
                        </a>
                        <div class="m-extra l-extra clearfix">
                           @if($pop1->program)
                                <a class="m-project p-project" href="{{route('muzkanal.project', $pop1->hasProject)}}">
                                    {{$pop1->hasProject->getNameOne()}}
                                </a>
                            @endif                               
                           @if($pop1->exclusive == 1)
                              <div class="m-hit l-hit">Эксклюзив</div>
                           @endif
                           <div class="m-view l-view">
                              <svg class="view" x="0px" y="0px" viewBox="0 0 22 14" xml:space="preserve">
                                   <g>
                                       <path d="M17.7,2.3C15.5,0.7,12.9,0,11,0S6.5,0.7,4.3,2.3C1.9,4.2,0,6.4,0,7s1.9,2.8,4.3,4.7C6.5,13.3,9.1,14,11,14s4.5-0.7,6.7-2.3
                                           C20.1,9.8,22,7.6,22,7S20.1,4.2,17.7,2.3z M11,10c-1.7,0-3-1.3-3-3s1.3-3,3-3s3,1.3,3,3S12.7,10,11,10z"/>
                                   </g>
                               </svg>
                              {{ $pop1->getViewed() }}
                           </div>
                        </div>
                        <div class="m-title l-title">
                           <a href="{{ route('muzkanal.video', $pop1)}}">
                              {{ $pop1->getName() }}
                           </a>
                        </div>
                     </div>
                     @endforeach
                  @endif
                  <footer>
                     <a class="m-btn" href="{{ route('muzkanal.videos') }}">
                        {{ trans('radiopages.AllVideos') }}
                     </a>
                  </footer>
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
                     <li class="hit-block list-group-item clearfix">
                        <div class="media">
                           <div class="media-left media-middle">
                              <a class="hit-thumb" href="{{ route('muzkanal.video', $hit)}}">
                                 <img src="http://img.youtube.com/vi/{{ $hit->getUrl()}}/mqdefault.jpg">
                              </a>
                           </div>
                           <div class="media-body media-middle">
                              <span class="hit-position">{{ $key+1 }}</span>
                              <a class="hit-title" href="{{ route('muzkanal.video', $hit)}}">
                                 {{ $hit->getName() }}
                              </a>
                           </div>
                           <div class="media-right media-middle">
                              {!! Form::open(['route' => ['muzkanal.like', $hit], 'method' => 'GET', 'class' => 'clearfix']) !!}                         
                                 <input type="hidden" value="1" name="like">
                                 <!-- <span class="hit-counts">{{$hit->like}}</span> -->
                                 <button type="submit" class="hit-button" data-container="body" data-toggle="popover" data-placement="left" data-content="{{ trans('radiopages.VoteYes') }} ">
                                    <i class="fa fa-star hit-star" ></i>
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
   <div class="row mb20">
      <div class="col-md-12">
         <div class="row p-blocks topvideos">
            <div class="panel panel-default panel-carousel">
               <div class="panel-body">
                  <div class="panel-subbody">
                     <div class="panel-subheading clearfix">
                        <span>{{ trans('radiopages.TopCLips') }}</span>
                     </div>
                     <div class="topclips">
                        @if($MediaTop1)
                           @foreach($MediaTop1 as $top1)
                           <div class="m-block p-block">
                              <a class="m-thumb p-thumb" href="{{ route('muzkanal.video', $top1)}}">
                                 <img src="http://img.youtube.com/vi/{{ $top1->getUrl() }}/mqdefault.jpg" alt=""/>
                              </a>
                              <div class="m-desc p-desc">
                                 <div class="m-extra p-extra clearfix">
                                    @if($pop1->program)
                                       <a class="m-project p-project" href="{{route('muzkanal.project', $pop1->hasProject)}}">
                                          {{$pop1->hasProject->getNameOne()}}
                                       </a>
                                    @endif 
                                    @if($top1->exclusive == 1)
                                       <div class="m-hit p-hit">Эксклюзив!</div>
                                    @endif
                                    <div class="m-view p-view">
                                       <svg class="view" x="0px" y="0px" viewBox="0 0 22 14" xml:space="preserve">
                                          <g>
                                             <path d="M17.7,2.3C15.5,0.7,12.9,0,11,0S6.5,0.7,4.3,2.3C1.9,4.2,0,6.4,0,7s1.9,2.8,4.3,4.7C6.5,13.3,9.1,14,11,14s4.5-0.7,6.7-2.3
                                                    C20.1,9.8,22,7.6,22,7S20.1,4.2,17.7,2.3z M11,10c-1.7,0-3-1.3-3-3s1.3-3,3-3s3,1.3,3,3S12.7,10,11,10z"/>
                                          </g>
                                       </svg>
                                       {{ $top1->getViewed() }}
                                    </div>
                                 </div>
                                 <div class="m-title p-title">
                                    <a href="{{ route('muzkanal.video', $top1)}}">
                                       {{ $top1->getName() }}
                                    </a>
                                 </div>
                              </div>
                           </div>
                           @endforeach
                        @endif
                     </div>
                  </div>
                  <div class="panel-subbody">
                     <div class="panel-subheading clearfix">
                        <span>{{ trans('site.Projects') }}</span>
                     </div>
                     <div class="topclips">
                        @if($projectVideos)
                           @foreach($projectVideos as $row)
                           <div class="m-block p-block">
                              <a class="m-thumb p-thumb" href="{{ route('muzkanal.video', $row)}}">
                                 <img src="http://img.youtube.com/vi/{{ $row->getUrl() }}/mqdefault.jpg" alt=""/>
                              </a>
                              <div class="m-desc p-desc">
                                 <div class="m-extra clearfix">
                                    @if($pop1->program)
                                       <a class="m-project p-project" href="{{route('muzkanal.project', $pop1->hasProject)}}">
                                          {{$pop1->hasProject->getNameOne()}}
                                       </a>
                                    @endif
                                 </div>
                                 <div class="m-title p-title">
                                    <a href="{{ route('muzkanal.video', $row)}}">
                                       {{ $row->getName() }}
                                    </a>
                                 </div>
                              </div>
                           </div>
                           @endforeach
                        @endif
                     </div>
                  </div>

                  <div class="panel-subbody">
                     <div class="panel-subheading clearfix">
                        <span>{{ trans('site.Concerts') }}</span>
                     </div>
                     <div class="topclips">
                        @if($Concert)
                           @foreach($Concert as $show)
                           <div class="m-block p-block">
                              <a class="m-thumb p-thumb" href="{{ route('muzkanal.video', $show)}}">
                                 <img src="http://img.youtube.com/vi/{{ $show->getUrl() }}/mqdefault.jpg" alt=""/>
                              </a>
                              <div class="m-desc p-desc">
                                 <div class="m-title p-title">
                                    <a href="{{ route('muzkanal.video', $show)}}">
                                       {{ $show->getName() }}
                                    </a>
                                 </div>
                              </div>
                           </div>
                           @endforeach
                        @endif
                     </div>
                  </div>
                  <footer>
                     <a class="m-btn" href="{{ route('muzkanal.videos')}}">
                        {{ trans('radiopages.AllVideos') }}
                     </a>
                  </footer>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- END TOP CLIPS-->

   <!-- BEGIN GALLERY-->
   <div class="row mb20">
      <div class="col-md-12">
         <div class="row g-blocks imgmuz">
            <div class="panel panel-default">
               <div class="panel-heading">
                  <h3 class="panel-title"><span>{{ trans('site.Galleries') }}</span></h3>
               </div>
               <div class="panel-body">
                  @if($photoGalleries != null)
                     @foreach($photoGalleries as $key=>$photoGallery)
                        <figure class="m-block g-block">
                           <a class="m-thumb g-thumb" href="{{ route('muzkanal.photos', $photoGallery) }}">
                              <img src="{{ asset($photoGallery->thumbnail_big) }}" />
                           </a>
                           <figcaption class="m-extra g-extra">
                              <svg class="gallery-button" x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve">
                                            <g>
                                                <g transform="translate(-428.000000, -532.000000)">
                                                    <g transform="translate(428.000000, 532.000000)">
                                                        <g>
                                                            <path d="M16,0C7.2,0,0,7.2,0,16s7.2,16,16,16s16-7.2,16-16S24.8,0,16,0L16,0z M26.8,20.8c-0.8,0.2-1.7-0.2-2.5-0.9
                                                                c-1.6-1.4-4-5.9-4-5.9c-0.4-0.7-1-0.7-1.4,0c0,0-1.2,2-1.8,3c-0.9,1.4-2.9,4-2.9,4c-0.1,0.2-0.4,0.2-0.5,0c0,0-1.1-1-1.5-1.6
                                                                C11.8,19,11.1,18,11.1,18c-0.2-0.3-0.6-0.3-0.9,0c0,0-0.9,1.2-2,2.5c-1.1,1.3-1.9,1.9-2.7,1.8c-0.7-0.1-1.2-0.5-1.6-1.2
                                                                c-0.6-1.5-1-3.2-1-5C2.9,8.8,8.8,2.9,16,2.9c7.2,0,13.1,5.9,13.1,13.1c0,0.8-0.1,1.6-0.2,2.3C28.6,19.5,27.9,20.4,26.8,20.8
                                                                L26.8,20.8z M25.1,24.6c-0.6,0.8-1.8,1.3-2.5,0.8c-0.7-0.5,0.2-1.2,0.9-1.9c0.8-0.9,1.3-1.1,1.7-0.9
                                                                C25.7,22.9,25.5,24,25.1,24.6 M21.1,27c-0.6,0.4-1.4,0.5-1.8,0.1c-0.4-0.5,0.4-0.7,0.9-1.1c0.7-0.5,1-0.5,1.3-0.3
                                                                C21.8,26,21.5,26.7,21.1,27L21.1,27z M8,8.6C7.3,9.5,7.1,11,7.9,11.5c0.6,0.3,1.4,0.1,2.5-1.2c0.9-1,2.2-2,1.2-2.7
                                                                C10.6,6.8,8.9,7.4,8,8.6L8,8.6z"/>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                              <div class="m-title g-title">
                                 <a href="{{ route('muzkanal.photos', $photoGallery) }}">
                                    {{ $photoGallery->getName() }}
                                 </a>
                              </div>
                           </figcaption>
                        </figure>                        
                     @endforeach
                  @endif
                  <footer>
                     <a class="m-btn" href="{{ route('muzkanal.allphotos')}}">
                        {{ trans('site.AllGalleries') }}
                     </a>
                  </footer>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- END GALLERY -->

   <!-- BEGIN SOCIAL -->
   <div class="row mb20">
      <div class="col-md-12">
         <div class="row imgmuz">
            <div class="panel panel-default">
               <div class="panel-heading">
                  <h3 class="panel-title"><span>{{ trans('radiopages.Wearesocial')}}</span></h3>
               </div>
               <div class="panel-body social-muschannel">
                  <div class="col-sm-3">
                     <div class="fb-page" style="height: 460px;overflow: hidden;" data-href="https://www.facebook.com/ktrkmuzyka" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                        
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


<!-- Anons Modals -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.0/js/iziModal.min.js" type="text/javascript"></script>
<script>
   @if($anons1)
      $("#modal-anons1").iziModal({
          overlayClose: true,
          iframe : true,
          iframeURL: 'https://www.youtube.com/embed/{{ $anons1->getUrl()}}?autoplay=1'
      });
   @endif
   @if($anons2)
      $("#modal-anons2").iziModal({
          overlayClose: true,
          iframe : true,
          iframeURL: 'https://www.youtube.com/embed/{{ $anons2->getUrl()}}?autoplay=1'
      });
   @endif
   @if($anons3)
      $("#modal-anons3").iziModal({
          overlayClose: true,
          iframe : true,
          iframeURL: 'https://www.youtube.com/embed/{{ $anons3->getUrl()}}?autoplay=1'
      });
   @endif
   
   $(document).on('click', '.trigger-anons1', function (event) {
       event.preventDefault();
       $("#modal-anons1").iziModal('open', event);
   });   
   $(document).on('click', '.trigger-anons2', function (event) {
       event.preventDefault();
       $("#modal-anons2").iziModal('open', event);
   });   
   $(document).on('click', '.trigger-anons3', function (event) {
       event.preventDefault();
       $("#modal-anons3").iziModal('open', event);
   });
</script>

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
   
      $('#playerPlay').click(function(){
          playerInstance.play();
      });
   
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
   $(function(){
      $('.slick-projects').slick({
         infinite: true,
         slidesToShow: 1,
         slidesToScroll: 1,
         autoplay: false,
         autoplaySpeed: 4500,
         fade: true,
         cssEase: 'linear'
      });
   });
   if ($(window).width() > 768) {
       $('.topclips').slick({
           infinite: true,
           slidesToShow: 3,
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
<script>
   $(document).ready(function(){
       $('[data-toggle="popover"]').popover();
   });
</script>
@stop