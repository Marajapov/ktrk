@extends('Front::channel.sport.default')
@section('title', $project->getNameOne())
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
                  <div class="panel panel-default">
                     <div class="panel-heading  panel-cat clearfix">
                        <div class="heading-title">
                           <span class="name">{{ $project->getNameOne() }}</span>
                           <div class="border"></div>
                        </div>
                        <div class="video-cat">
                          <ul class="nav navbar-nav navbar-right sport-nav navbar-cat">
                              @foreach($projectList as $project)
                              <li><a href="{{ route('sport.videos.project', $project) }}">{{ $project->getNameOne() }}</a></li>
                              @endforeach
                          </ul>
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
                        <div class="col-sm-12 margin-with-bottom">
                          <nav>
                             <ul class="pagination">
                                <li>
                                   <a href="{{ route('sport.videos.project', ['page' => 1]) }}" class="btn btn-default @if($allVideos->currentPage() == 1) disabled @endif">{{ trans('site.Start') }}</a>
                                </li>
                                <li>
                                   <a href="{{ $allVideos->previousPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span></a>
                                </li>
                                @for($i = 0, $j = 1; $i < $allVideos->total(); $i+=$perPage)
                                <li class="@if(($j > $allVideos->currentPage()+3) || ($j < $allVideos->currentPage()-3)) hidden @endif">
                                   <a href="{{ route('sport.videos.project', ['page' => $j]) }}" class="btn btn-default @if($allVideos->currentPage() == $j) active @endif">
                                   {{ $j++ }}
                                   </a>
                                </li>
                                @endfor
                                <li>
                                   <a href="{{ $allVideos->nextPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-right"></span></a>
                                </li>
                                <li>
                                   <a href="{{ route('sport.videos', ['page' => ceil($allVideos->total()/$perPage)]) }}" class="btn btn-default @if($allVideos->currentPage() == ceil($allVideos->total()/$perPage)) disabled @endif">{{ trans('site.End') }}</a>
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
   </div>
</div>
@stop
@section('footerscript2')

@endsection