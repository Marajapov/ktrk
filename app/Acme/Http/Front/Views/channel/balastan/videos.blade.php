@extends('Front::channel.balastan.default')
@section('title', "Видеоло")
@section('styles')
@endsection
@section('content')
<div class="container-fluid pages-header">
   <div class="row">

         @include('Front::channel.balastan.nav')

      <div class="container pages-title">
         <div class="row">
            <div class="title col-md-12">
               <h3>{{ trans('site.AllVideos') }}</h3>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="container-fluid allvideos">
   <div class="row">
         <div class="container">
            <div class="row">

               <div class="col-md-12">
                  <a class="show-btn category" href="{{ route('balastan.videos') }}">Все</a> 
                  @if($balastanProjects)
                  @foreach($balastanProjects as $row)                   
                     <a class="show-btn category @if($project && $row->id == $project->id) active @endif" href="{{ route('balastan.videos', $row) }}">
                        {{ $row->getName() }}
                     </a>            
                  @endforeach
                  @endif
               </div>

                @if($balastanMedias)
                @foreach($balastanMedias as $media)
               <div class="col-md-4 video-block">
                  <a href="{{ route('balastan.video', $media)}}" class="video-img">
                      <img src="http://img.youtube.com/vi/{{ $media->getUrl()}}/0.jpg" alt="" />
                      <span class="video-overlay"></span>
                  </a>
                      @if($media->hasProject()->first())
                        <h5 class="video-category">{{ $media->hasProject()->first()->getNameOne() }}</h5>
                      @endif
                  <div class="video-info">
                      <div class="media">
                          <div class="media-left media-middle">
                              <a href="{{ route('balastan.video', $media)}}">
                                  <i class="fa fa-youtube-play video-icon"></i>
                              </a>
                          </div>
                          <div class="media-body media-middle">
                              <h4 class="media-heading video-name"><a href="{{ route('balastan.video', $media)}}">{{ $media->getName() }}</a></h4>
                          </div>
                      </div>
                  </div>
               </div>
               @endforeach
                  <div class="col-md-12">
                     <a class="show-btn loadMore" href="#">
                        {{ trans('site.LoadMore') }}
                     </a>
                  </div>
               @endif


            </div>
         </div>
   </div>
</div>
@stop


@section('footerScript')
@stop