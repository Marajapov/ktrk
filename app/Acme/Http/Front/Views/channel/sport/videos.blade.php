@extends('Front::channel.sport.default')
@section('title', trans('radiopages.AllVideos'))
@section('styles')
@endsection
@section('content')
@include('Front::channel.sport.nav')
<div class="container">
   <div class="row">
      <div class="col-md-12 video-all">
         <div class="panel panel-default">
            <div class="panel-body no-padding">
               <div class="col-md-12 col-sm-12 panel-videos no-padding">
                  <div class="panel panel-default panel-top-videos">
                     <div class="panel-heading">
                        <div class="heading-title">
                           <span class="name">{{ trans('site.TopVideos') }}</span>
                           <div class="border"></div>
                        </div>
                     </div>
                     <div class="clearfix videos-padding">
                       <div class="col-md-9">
                          <div class="row">
                            @if($topVideos1)
                            @foreach($topVideos1 as $topVideos1)
                              <div class="col-md-8 video-three">
                                <a href="{{ route('sport.video', $topVideos1) }}">
                                  <div class="video-box margin-with-bottom2 imgsize">
                                    <img src="@if($topVideos1->thumbnail_big) {{ asset($topVideos1->thumbnail_big) }} @else http://img.youtube.com/vi/{{ $topVideos1->getUrl() }}/hqdefault.jpg @endif" alt="" />
                                    <div class="overlay"></div>
                                    <div class="video-info">
                                      <span class="date">{{ $topVideos1->getDateFormatted() }}<span class="eye"><i class="fa fa-eye"></i>{{ $topVideos1->viewed }}</span> </span>
                                      <span class="title">{{ $topVideos1->getName() }}</span>
                                    </div>
                                  </div>
                                </a>
                              </div>
                              @endforeach
                              @endif
                              @if($topVideos2)
                              @foreach($topVideos2 as $topVideos2)    
                              <div class="col-md-4 video-three">
                                <a href="{{ route('sport.video', $topVideos2) }}">
                                  <div class="video-box margin-with-bottom2 imgsize">
                                    <img src="@if($topVideos2->thumbnail_big) {{ asset($topVideos2->thumbnail_big) }} @else http://img.youtube.com/vi/{{ $topVideos2->getUrl() }}/hqdefault.jpg "class="youtube-img"" @endif" alt="" />
                                    <div class="overlay"></div>
                                    <div class="video-info">
                                      <span class="date">{{ $topVideos2->getDateFormatted() }}<span class="eye"><i class="fa fa-eye"></i>{{ $topVideos2->viewed }}</span> </span>
                                      <span class="title">{{ $topVideos2->getName() }}</span>
                                    </div>
                                  </div>
                                </a>
                              </div>
                              @endforeach
                              @endif
                          </div>
                         </div>
                       <div class="col-md-3">
                         <div class="row">
                              @if($topVideos3)
                              @foreach($topVideos3 as $topVideos3)    
                              <div class="col-md-12 video-three">
                                <a href="{{ route('sport.video', $topVideos3) }}">
                                  <div class="video-box margin-with-bottom2 imgsize">
                                    <img src="@if($topVideos3->thumbnail_big) {{ asset($topVideos3->thumbnail) }} @else http://img.youtube.com/vi/{{ $topVideos3->getUrl() }}/hqdefault.jpg "class="youtube-img"" @endif" alt="" />
                                    <div class="overlay"></div>
                                    <div class="video-info">
                                      <span class="date">{{ $topVideos3->getDateFormatted() }}<span class="eye"><i class="fa fa-eye"></i>{{ $topVideos3->viewed }}</span> </span>
                                      <span class="title">{{ $topVideos3->getName() }}</span>
                                    </div>
                                  </div>
                                </a>
                              </div>
                              @endforeach
                              @endif
                         </div>
                       </div>
                     </div>
                  </div>
               </div>              
              <div class="banner-top">
                <img src="{{asset('images/channels/sport/banner.png')}}" alt="">
              </div>
               <div class="col-md-12 col-sm-12 panel-videos no-padding">
                  <div class="panel panel-default">
                     <div class="panel-heading">
                        <div class="heading-title">
                           <span class="name">{{ trans('site.LastVideos') }}</span>
                           <div class="border"></div>
                        </div>
                     </div>
                     <div class="clearfix videos-padding">
                        @if($allVideos)
                        @foreach($allVideos as $media)
                        <article class="col-md-3 col-sm-12 video-item">
                          <div class="box-video">
                             <div class="img">
                                <a class="clearfix" href="{{ route('sport.video', $media) }}">
                                   <img src="@if($media->thumbnail_big) {{ asset($media->thumbnail) }} @else http://img.youtube.com/vi/{{ $media->getUrl() }}/hqdefault.jpg @endif" alt="">                                                                
                                <div class="overlay-button"></div>
                                </a>                                
                             </div>
                             <div class="box-info">
                                <span class="date">{{ $media->getDateFormatted() }}</span>
                                <span class="eye"><i class="fa-view"></i>{{ $media->viewed }}</span>  
                             </div>  
                             <div class="media-title">
                                <a href="{{ route('sport.video', $media) }}">
                                   {{ $media->getName() }}
                                </a>
                             </div>
                          </div>
                        </article>
                        @endforeach
                        @endif                        
                       <div class="col-md-12">
                         <footer class="morelink">
                           <a href="{{ route('sport.videos.all') }}">
                             <span>{{ trans('site.AllVideos') }}<i class="fa fa-arrow-circle-right"></i></span>
                           </a>
                         </footer>
                       </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@stop
@section('footerscript2')

@endsection