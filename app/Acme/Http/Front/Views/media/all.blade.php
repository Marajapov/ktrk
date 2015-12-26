@extends('Front::layouts.default')
@section('title', trans('site.AllVideos').'Видеопортал | КТРК')

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/videoportal.css') }}"/>
@endsection

@section('content')

  <div class="container main-wrapper">

    <div class="row">

      <section class="content clearfix">

        <div class="clearfix">
          <div class="top-left-block col-md-9">
            <div class="panel panel-default panel-show panel-related-videos panel-all-videos">
              <div class="panel-heading">
                <h3 class="panel-title">
                  <a href="{{ route('front.media.index') }}">Видеопортал</a>
                  <span class="divider"><i class="fa fa-circle"></i></span>
                  <span>{{ trans('site.AllVideos') }}</span>
                </h3>
              </div>

              <div class="panel-body">

                @if($allVideos)
                  @foreach($allVideos as $video)
                    <div class="col-md-4 block">
                      <div class="video-thumb">
                        <a href="{{ route('front.media.video',$video) }}">
                          <img src="http://img.youtube.com/vi/{{$video->url}}/mqdefault.jpg" alt=""/>
                        </a>
                        @if($video->program)
                        <a href="{{ route('front.media.project', $video->program) }}">
                          <span>
                          <i class="fa fa-play-circle-o"></i>

                              {{ $video->getProgramName() }}

                        </span>
                        </a>
                        @else
                          <i class="fa fa-play-circle-o"></i>
                        @endif
                      </div>
                      <div class="media-box">
                        <a href="{{ route('front.media.video',$video) }}" class="">
                          <h4>{{$video->getName()}}</h4>
                        </a>
                      </div>
                    </div>
                  @endforeach
                @endif

                  <nav>
                    <ul class="pagination">

                      <li>
                        <a href="{{ route('front.media.all', ['page' => 1]) }}" class="btn btn-default @if($allVideos->currentPage() == 1) disabled @endif">{{ trans('site.Start') }}</a>
                      </li>
                      <li>
                        <a href="{{ $allVideos->previousPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span></a>
                      </li>
                      <li>
                        <a href="{{ $allVideos->nextPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-right"></span></a>
                      </li>

                      @for($i = 0, $j = 1; $i < $allVideos->total(); $i+=$perPage)
                        <li>
                          <a href="{{ route('front.media.all', ['page' => $j]) }}" class="btn btn-default @if($allVideos->currentPage() == $j) active @endif">{{ $j++ }}</a>
                        </li>
                      @endfor

                      <li>
                        <a href="{{ route('front.media.all', ['page' => ceil($allVideos->total()/$perPage)]) }}" class="btn btn-default @if($allVideos->currentPage() == ceil($allVideos->total()/$perPage)) disabled @endif">{{ trans('site.End') }}</a>
                      </li>

                    </ul>
                  </nav>

              </div>

            </div>

          </div>

          <div class="top-right-block col-md-3">

            @include('Front::partials.leftMediaCategories')

          </div>

        </div>

      </section>
    </div>

  </div>

@stop

@section('footerScript')
  <script>
    $(function(){
      $("#relatedVideos .block").slice(0, 12).show(); // select the first ten
      $("#relatedVideos .loadMore").click(function(e){ // click event for load more
        e.preventDefault();
        $("#relatedVideos .block:hidden").slice(0, 12).show(); // select next 10 hidden divs and show them
        if($("#relatedVideos .block:hidden").length == 0){ // check if any hidden divs still exist
          $("#relatedVideos .loadMore").hide();
        }
      });
      if($("#relatedVideos .block:hidden").length == 0){ // check if any hidden divs still exist
        $("#relatedVideos .loadMore").hide();
      }
    });
  </script>
@stop
