@extends('Front::channel.muzkanal.default')
@section('title', trans('radiopages.Clips'))
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/audio/muzslider.css') }}"/>
@endsection
@section('content')
    <body class="music">
@include('Front::channel.muzkanal.nav')
    <!-- Main slider -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row topvideos videostyle">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><span>{{ trans('radiopages.NewClips') }}</span></h3>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-12 videofix">
                                <div class="row" style="margin:-11px;">
                                    @if($MediaNew)
                                        @foreach($MediaNew as $newVideo)
                                            <div class="col-md-3 muzvideomain col-sm-6 col-xs-12">
                                                <div class="muzvideoall">
                                                    <a href="{{ route('muzkanal.video', $newVideo)}}">
                                                        <img src="http://img.youtube.com/vi/{{ $newVideo->getUrl()}}/mqdefault.jpg" alt=""/></a>
                                                    <div class="item-desc">
                                                        <ul>
                                                            <a href="{{ route('muzkanal.video', $newVideo)}}">
                                                                <li class="item-artist">{{ $newVideo->getName() }}</li>
                                                            </a>
                                                        </ul>
                                                    </div>
                                                    @if($newVideo->exclusive == 1)
                                                        <div class="ishit">Эксклюзив!</div>
                                                    @endif
                                                    <div class="views"><i class="fa fa-eye"></i>{{ $newVideo->getViewed() }}</div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                          <footer>
                            <a href="{{ route('muzkanal.videos.newvideos')}}">
                              <span>{{ trans('radiopages.AllVideos') }} <i class="fa fa-arrow-circle-right"></i></span>
                            </a>
                          </footer>
                        </div>
                    </div>
                </div>
            </div>
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
                            </div>
                          <footer>
                            <a href="{{ route('muzkanal.videos.popular')}}">
                              <span>{{ trans('radiopages.AllVideos') }} <i class="fa fa-arrow-circle-right"></i></span>
                            </a>
                          </footer>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row topvideos videostyle">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><span>Эксклюзив</span></h3>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-12 videofix">
                                <div class="row" style="margin:-11px;">
                                    @if($MediaLive)
                                        @foreach($MediaLive as $liveVideo)
                                            <div class="col-md-3 muzvideomain col-sm-6 col-xs-12">
                                                <div class="muzvideoall">
                                                    <a href="{{ route('muzkanal.video', $liveVideo)}}">
                                                        <img src="http://img.youtube.com/vi/{{ $liveVideo->getUrl()}}/mqdefault.jpg" alt=""/></a>
                                                    <div class="item-desc">
                                                        <ul>
                                                            <a href="{{ route('muzkanal.video', $liveVideo)}}">
                                                                <li class="item-artist">{{ $liveVideo->getName() }}</li>
                                                            </a>
                                                        </ul>
                                                    </div>
                                                    <div class="views"><i class="fa fa-eye"></i>{{ $liveVideo->getViewed() }}</div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                              <footer>
                                <a href="{{ route('muzkanal.videos.exclusive')}}">
                                  <span>{{ trans('radiopages.AllVideos') }} <i class="fa fa-arrow-circle-right"></i></span>
                                </a>
                              </footer>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row topvideos videostyle">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><span>Концерт</span></h3>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-12 videofix">
                                <div class="row" style="margin:-11px;">
                                    @if($Concert)
                                        @foreach($Concert as $show)
                                            <div class="col-md-3 muzvideomain col-sm-6 col-xs-12">
                                                <div class="muzvideoall">
                                                    <a href="{{ route('muzkanal.video', $show)}}">
                                                        <img src="http://img.youtube.com/vi/{{ $show->getUrl()}}/mqdefault.jpg" alt=""/></a>
                                                    <div class="item-desc">
                                                        <ul>
                                                            <a href="{{ route('muzkanal.video', $show)}}">
                                                                <li class="item-artist">{{ $show->getName() }}</li>
                                                            </a>
                                                        </ul>
                                                    </div>
                                                    <div class="views"><i class="fa fa-eye"></i>{{ $show->getViewed() }}</div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                              <footer>
                                <a href="{{ route('muzkanal.videos.concert')}}">
                                  <span>{{ trans('radiopages.AllVideos') }} <i class="fa fa-arrow-circle-right"></i></span>
                                </a>
                              </footer>
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


        <!-- Fixed Sticky header -->
        <script type ="text/javascript" src ="{{ asset('js/script.js') }}"></script>
        <!-- Fixed Sticky header -->
@stop