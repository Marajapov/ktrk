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
                                                        <div class="ishit">Экслюзив!</div>
                                                    @endif
                                                    <div class="views"><i class="fa fa-eye"></i>{{ $newVideo->getViewed() }}</div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                <nav class="muzpaginate">
                                    <ul class="pagination">
                                        <li>
                                            <a href="{{ route('muzkanal.videos', ['page' => 1]) }}" class="btn btn-default @if($MediaNew->currentPage() == 1) disabled @endif">{{ trans('site.Start') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ $MediaNew->previousPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span></a>
                                        </li>
                                        <li>
                                            <a href="{{ $MediaNew->nextPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-right"></span></a>
                                        </li>
                                        @for($i = 0, $j = 1; $i < $MediaNew->total(); $i+=$perPage)
                                            <li>
                                                <a href="{{ route('muzkanal.videos', ['page' => $j]) }}" class="btn btn-default @if($MediaNew->currentPage() == $j) active @endif">{{ $j++ }}</a>
                                            </li>
                                        @endfor
                                        <li>
                                            <a href="{{ route('muzkanal.videos', ['page' => ceil($MediaNew->total()/$perPage)]) }}" class="btn btn-default @if($MediaNew->currentPage() == ceil($MediaNew->total()/$perPage)) disabled @endif">{{ trans('site.End') }}</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
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
                                                        <div class="ishit">Экслюзив!</div>
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
                                            <a href="{{ route('muzkanal.videos', ['topPage' => 1]) }}" class="btn btn-default @if($MediaTop->currentPage() == 1) disabled @endif">{{ trans('site.Start') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ $MediaTop->previousPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span></a>
                                        </li>
                                        <li>
                                            <a href="{{ $MediaTop->nextPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-right"></span></a>
                                        </li>
                                        @for($i = 0, $j = 1; $i < $MediaTop->total(); $i+=$perPage)
                                            <li>
                                                <a href="{{ route('muzkanal.videos', ['topPage' => $j]) }}" class="btn btn-default @if($MediaTop->currentPage() == $j) active @endif">{{ $j++ }}</a>
                                            </li>
                                        @endfor
                                        <li>
                                            <a href="{{ route('muzkanal.videos', ['topPage' => ceil($MediaTop->total()/$perPage)]) }}" class="btn btn-default @if($MediaTop->currentPage() == ceil($MediaTop->total()/$perPage)) disabled @endif">{{ trans('site.End') }}</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row topvideos videostyle">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><span>Экслюзив</span></h3>
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
                                <nav class="muzpaginate">
                                    <ul class="pagination">
                                        <li>
                                            <a href="{{ route('muzkanal.videos', ['page' => 1]) }}" class="btn btn-default @if($MediaLive->currentPage() == 1) disabled @endif">{{ trans('site.Start') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ $MediaLive->previousPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span></a>
                                        </li>
                                        <li>
                                            <a href="{{ $MediaLive->nextPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-right"></span></a>
                                        </li>
                                        @for($i = 0, $j = 1; $i < $MediaLive->total(); $i+=$perPage)
                                            <li>
                                                <a href="{{ route('muzkanal.videos', ['page' => $j]) }}" class="btn btn-default @if($MediaLive->currentPage() == $j) active @endif">{{ $j++ }}</a>
                                            </li>
                                        @endfor
                                        <li>
                                            <a href="{{ route('muzkanal.videos', ['page' => ceil($MediaLive->total()/$perPage)]) }}" class="btn btn-default @if($MediaLive->currentPage() == ceil($MediaLive->total()/$perPage)) disabled @endif">{{ trans('site.End') }}</a>
                                        </li>
                                    </ul>
                                </nav>
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
                                <nav class="muzpaginate">
                                    <ul class="pagination">
                                        <li>
                                            <a href="{{ route('muzkanal.videos', ['page' => 1]) }}" class="btn btn-default @if($Concert->currentPage() == 1) disabled @endif">{{ trans('site.Start') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ $Concert->previousPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span></a>
                                        </li>
                                        <li>
                                            <a href="{{ $Concert->nextPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-right"></span></a>
                                        </li>
                                        @for($i = 0, $j = 1; $i < $Concert->total(); $i+=$perPage)
                                            <li>
                                                <a href="{{ route('muzkanal.videos', ['page' => $j]) }}" class="btn btn-default @if($Concert->currentPage() == $j) active @endif">{{ $j++ }}</a>
                                            </li>
                                        @endfor
                                        <li>
                                            <a href="{{ route('muzkanal.videos', ['page' => ceil($Concert->total()/$perPage)]) }}" class="btn btn-default @if($Concert->currentPage() == ceil($Concert->total()/$perPage)) disabled @endif">{{ trans('site.End') }}</a>
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


        <!-- Fixed Sticky header -->
        <script type ="text/javascript" src ="{{ asset('js/script.js') }}"></script>
        <!-- Fixed Sticky header -->
@stop