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
                  <div class="panel panel-default">
                     <div class="panel-heading">
                        <div class="heading-title">
                           <span class="name">{{ trans('site.AllVideos') }}</span>
                           <div class="border"></div>
                        </div>
                     </div>
                     <div class="clearfix videos-padding">
                        @if($anons)
                        @foreach($anons as $anonses)
               
                        <article class="col-md-4 col-sm-12 video-item">
                          <div class="box-video">
                             <div class="img">
                                <a class="clearfix" href="{{ route('sport.announcement', $anonses) }}">
                                   <img src="{{ asset($anonses->thumbnail_big) }}" alt="">          
                                
                                </a>                                
                             </div>
                             <div class="box-info">
                                <span class="date">{{ $anonses->getDay() }} {{ $anonses->getMonthRu() }}, {{ $anonses->getTime() }}</span>
                             </div>  
                             <div class="media-title">
                                <a href="{{ route('sport.announcement', $anonses) }}">
                                   {{ $anonses->getName() }}
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
                                   <a href="{{ route('sport.announcement', ['page' => 1]) }}" class="btn btn-default @if($anons->currentPage() == 1) disabled @endif">{{ trans('site.Start') }}</a>
                                </li>
                                <li>
                                   <a href="{{ $anons->previousPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span></a>
                                </li>
                                @for($i = 0, $j = 1; $i < $anons->total(); $i+=$perPage)
                                <li class="@if(($j > $anons->currentPage()+3) || ($j < $anons->currentPage()-3)) hidden @endif">
                                   <a href="{{ route('sport.announcement', ['page' => $j]) }}" class="btn btn-default @if($anons->currentPage() == $j) active @endif">
                                   {{ $j++ }}
                                   </a>
                                </li>
                                @endfor
                                <li>
                                   <a href="{{ $anons->nextPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-right"></span></a>
                                </li>
                                <li>
                                   <a href="{{ route('sport.announcement', ['page' => ceil($anons->total()/$perPage)]) }}" class="btn btn-default @if($anons->currentPage() == ceil($anons->total()/$perPage)) disabled @endif">{{ trans('site.End') }}</a>
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