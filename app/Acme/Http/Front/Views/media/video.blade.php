@extends('Front::layouts.default')
@if($videoProject)
    @section('title', $videoName.' | '.  $videoProject.' | Телеберүүлөр | КТРК')
@else
@section('title', $videoName.' | '.$getVideoTypeName.' | КТРК')
@endif

@section('styles')
    <meta property="fb:app_id"             content="564062523746973" />
    <meta property="og:url"                content="{{ Request::url()}}" />
    <meta property="og:site_name"          content="{{ trans('site.TradeMark') }}" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="{{ $videoName }}" />
    <meta property="og:description"        content="" />
    @if($video->thumbnail_big)
        <meta property="og:image"              content="{{ asset($video->thumbnail_big) }}" />
    @else
        <meta property="og:image"              content="http://img.youtube.com/vi/{{ $video->getUrl() }}" />
    @endif

    <link rel="stylesheet" href="{{ asset('css/videoportal.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/articles.css') }}"/>
@endsection

@section('content')
    <div class="container main-wrapper">

        <div class="row">

            <section class="content clearfix">

                <div class="clearfix">
                    <div class="top-left-block col-md-9">
                        <div class="panel panel-default panel-video">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <a href="{{ route('front.media.index') }}">Видеопортал</a>
                                    <span class="divider"><i class="fa fa-circle"></i></span>
                                    <a href="#"><span class="ctg">@if(!empty($getVideoTypeName)) {{ $getVideoTypeName }}@endif</span></a>
                                </h3>
                            </div>
                            <div class="panel-body">

                                <article data-cat="all-videos">
                                    <h4 class="show-title">
                                        <a href="#">{{ $videoProject}}</a>
                                        @if($videoProject)
                                            <i class="fa fa-circle"></i>
                                        @endif
                                        <span>{{ $videoName }}</span>
                                    </h4>
                                    <div class="embed-responsive embed-responsive-16by9 show-video">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $video->getUrl()}}?rel=0&amp;showinfo=0"></iframe>
                                    </div>
                                    <p class="video-desc">
                                        {{ $video->getContent()}}
                                    </p>
                                </article>

                                <footer class="with-share">

                                    @if(auth()->user())
                                        <a class="post-edit" href="{{ route('admin.media.edit', $video) }}" target="_blank">
                                            <i class="fa fa-pencil"></i>
                                            {{ trans('site.AdminPostEdit') }}
                                        </a>
                                    @endif

                                    <script type="text/javascript">(function() {
                                            if (window.pluso)if (typeof window.pluso.start == "function") return;
                                            if (window.ifpluso==undefined) { window.ifpluso = 1;
                                                var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
                                                s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
                                                s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
                                                var h=d[g]('body')[0];
                                                h.appendChild(s);
                                            }})();</script>
                                    <div class="pluso" data-background="transparent" data-options="medium,square,line,horizontal,nocounter,theme=06" data-services="vkontakte,odnoklassniki,facebook,twitter,google"></div>

                                    <a href="{{ route('front.media.all') }}">
                                        <span>{{ trans('site.AllVideos') }}<i class="fa fa-arrow-circle-right"></i></span>
                                    </a>
                                </footer>

                            </div>
                        </div>

                        @include('Front::partials.postBanner')

                        <div class="panel panel-default panel-related-videos">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    Тектеш чыгаруулар
                                </h3>
                            </div>
                            <div class="panel-body" id="relatedVideos">
                                @foreach($relatedVideos as $relatedVideo)
                                    <div class="col-md-4 block">
                                        <a href="#" class="video-thumb">
                                            <img src="http://img.youtube.com/vi/{{ $relatedVideo->getUrl() }}/mqdefault.jpg" alt=""/>
                                            <i class="fa fa-play-circle-o"></i>
                                        </a>
                                        <div class="video-title">
                                            <a href="#">
                                                {{ $relatedVideo->getName() }}
                                            </a>
                                        </div>
                                    </div>
                                @endforeach


                                <div class="col-md-12">
                                    <button class="loadMore btn btn-default">Показать еще</button>
                                </div>
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
