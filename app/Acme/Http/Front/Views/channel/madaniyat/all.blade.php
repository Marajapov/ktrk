@extends('Front::channel.madaniyat.default')
@section('title', trans('radiopages.Homepage'))
@section('styles')
<link rel="stylesheet" href="{{ asset('css/videoportal.css') }}"/>
@endsection
@section('content')
<body class="madaniyat">
   @include('Front::channel.madaniyat.nav')
   <div class="container m-container m-footer">
      <div class="row">
         <div class="col-md-12 video-block">
            <div class="panel panel-default">
               <div class="panel-body no-padding">
                  <div class="col-md-9 panel-videos no-padding">
                     <div class="panel panel-default">
                        <div class="panel-heading madaniyatcolor">
                           <h3 class="panel-title"><span>{{ trans('site.AllVideos') }}</span></h3>
                        </div>
                        <div class="panel-body">
                           @if($allVideos)
                           @foreach($allVideos as $media)
                           <article class="col-md-4" data-cat="all-videos">
                              <div class="img">
                                 <a href="{{ route('madaniyat.media.video', $media) }}">
                                    <img src="@if($media->thumbnail_big) {{ asset($media->thumbnail) }} @else http://img.youtube.com/vi/{{ $media->getUrl() }}/hqdefault.jpg @endif" alt="">
                                    <div class="overlay">
                                       <i class="fa-view"></i>
                                       <span class="media-view">{{ $media->viewed }}</span>
                                       @if(($media->getProgramName()))
                                       <span class="media-project">
                                       {{ $media->getProgramName() }}
                                       </span>
                                       @endif
                                       <span class="media-date">{{ $media->getDateFormatted() }}</span>
                                    </div>
                                    <i class="fa-video"></i>
                                 </a>
                              </div>
                              <div class="media-title">
                                 <a href="{{ route('madaniyat.media.video', $media) }}">
                                    <h4>{{ $media->getName() }}</h4>
                                 </a>
                              </div>
                           </article>
                           @endforeach
                           @endif
                           <nav>
                              <ul class="pagination">
                                 <li>
                                    <a href="{{ route('madaniyat.media.all', ['page' => 1]) }}" class="btn btn-default @if($allVideos->currentPage() == 1) disabled @endif">{{ trans('site.Start') }}</a>
                                 </li>
                                 <li>
                                    <a href="{{ $allVideos->previousPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span></a>
                                 </li>
                                 @for($i = 0, $j = 1; $i < $allVideos->total(); $i+=$perPage)
                                 <li class="@if(($j > $allVideos->currentPage()+3) || ($j < $allVideos->currentPage()-3)) hidden @endif">
                                    <a href="{{ route('madaniyat.media.all', ['page' => $j]) }}" class="btn btn-default @if($allVideos->currentPage() == $j) active @endif">
                                    {{ $j++ }}
                                    </a>
                                 </li>
                                 @endfor
                                 <li>
                                    <a href="{{ $allVideos->nextPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-right"></span></a>
                                 </li>
                                 <li>
                                    <a href="{{ route('madaniyat.media.all', ['page' => ceil($allVideos->total()/$perPage)]) }}" class="btn btn-default @if($allVideos->currentPage() == ceil($allVideos->total()/$perPage)) disabled @endif">{{ trans('site.End') }}</a>
                                 </li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3 no-padding">
                     <div class="panel panel-default">
                        <div class="panel-heading madaniyatcolor">
                           <h3 class="panel-title"><span>{{ trans('radiopages.Peredachi') }}</span></h3>
                        </div>
                        <div class="panel-body ctg-panel">
                           <ul class="list-group">
                              @foreach($projectList as $project)
                              <li class="list-group-item">
                                 <a href="{{ route('madaniyat.media.project', $project) }}">{{ $project->getNameOne() }}</a>
                              </li>
                              @endforeach
                           </ul>
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
   @stop