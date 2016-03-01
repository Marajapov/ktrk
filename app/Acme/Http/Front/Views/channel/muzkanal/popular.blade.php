@extends('Front::channel.muzkanal.default')
@section('styles')
@endsection
@section('content')
  @include('Front::channel.muzkanal.nav')
  <!-- Main slider -->
  <div class="container">

    <div class="row">
      <div class="col-md-12">
        <div class="row topvideos videostyle">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title"><span>{{ trans('radiopages.TopCLips') }}</span></h3>
            </div>
            <div class="panel-body">
              <div class="col-md-12 videofix">
                <div class="row" style="margin:-11px;">
                  @if($MediaTop)
                    @foreach($MediaTop as $topVideo)
                      <div class="col-md-3 muzvideomain col-sm-6 col-xs-12">
                        <div class="muzvideoall">
                          <a href="{{ route('muzkanal.video', $topVideo)}}">
                            <img src="http://img.youtube.com/vi/{{ $topVideo->getUrl()}}/mqdefault.jpg" alt=""/></a>
                          <div class="item-desc">
                            <ul>
                              <a href="{{ route('muzkanal.video', $topVideo)}}">
                                <li class="item-artist">{{ $topVideo->getName() }}</li>
                              </a>
                            </ul>
                          </div>
                          @if($topVideo->exclusive == 1)
                            <div class="ishit">Эксклюзив!</div>
                          @endif
                          <div class="views"><i class="fa fa-eye"></i>{{ $topVideo->getViewed() }}</div>
                        </div>
                      </div>
                    @endforeach
                  @endif
                </div>

                <nav class="muzpaginate">
                  <ul class="pagination">
                    <li>
                      <a href="{{ route('muzkanal.videos.popular', ['page' => 1]) }}" class="btn btn-default @if($MediaLive->currentPage() == 1) disabled @endif">{{ trans('site.Start') }}</a>
                    </li>
                    <li>
                      <a href="{{ $MediaLive->previousPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span></a>
                    </li>
                    <li>
                      <a href="{{ $MediaLive->nextPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-right"></span></a>
                    </li>
                    @for($i = 0, $j = 1; $i < $MediaLive->total(); $i+=$perPage)
                      <li>
                        <a href="{{ route('muzkanal.videos.popular', ['page' => $j]) }}" class="btn btn-default @if($MediaLive->currentPage() == $j) active @endif">{{ $j++ }}</a>
                      </li>
                    @endfor
                    <li>
                      <a href="{{ route('muzkanal.videos.popular', ['page' => ceil($MediaLive->total()/$perPage)]) }}" class="btn btn-default @if($MediaLive->currentPage() == ceil($MediaLive->total()/$perPage)) disabled @endif">{{ trans('site.End') }}</a>
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

@stop
@section('footerScript')
  <script src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>

  <script type ="text/javascript" src ="{{ asset('js/script.js') }}"></script>

  <script>
    $(document).ready(function () {
      $(".search-toggle").click(function () {
        $(".logo-block").addClass("search-show");
        $(".form-search").addClass("visible");
      });
      $(".close-search").click(function () {
        $(".logo-block").removeClass("search-show");
        $(".form-search").removeClass("visible");
      });
    });
  </script>
@stop