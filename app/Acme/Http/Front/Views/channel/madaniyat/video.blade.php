@extends('Front::channel.madaniyat.default')
@if($videoProject)
    @section('title', $videoName.' | '.  $videoProject.' | Телеберүүлөр | Маданият')
@else
@section('title', $videoName.' | '.$getVideoTypeName.' | Маданият')
@endif

@section('styles')
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
    <link rel="stylesheet" href="{{ asset('css/goodshare.css') }}"/>
@endsection

@section('content')
<body class="madaniyat">
   @include('Front::channel.madaniyat.nav')

    <div class="container main-wrapper m-footer" style="margin-top: 160px;">

        <div class="row">

            <section class="content clearfix">

                <div class="clearfix">
                    <div class="col-md-9 no-padding">
                        <div class="panel panel-default panel-video">
                            <div class="panel-heading madaniyatcolor">
                                <h3 class="panel-title">
                                    <a href="{{ route('madaniyat.media.project', $video->program) }}">{{ $videoProject}}</a>
                                </h3>
                            </div>
                            <div class="panel-body">

                                <article data-cat="all-videos">
                                    <h4 class="show-title">          
                                        <span>{{ $videoName }}</span>

                                        <span class="show-extra">
                                            <span class="show-date">{{ $video->getDay() }} {{ $video->getMonthRu() }}, {{ $video->getYear() }}</span>
                                            <span class="show-view">
                                                <i class="fa-view"></i>{{ $video->viewed }}
                                            </span>
                                        </span>
                                    </h4>
                                    <div class="embed-responsive embed-responsive-16by9 show-video">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $video->getUrl()}}?rel=0&amp;showinfo=0" allowfullscreen></iframe>
                                    </div>
                                    <p class="video-desc">
                                        {!! $video->getContent()!!}
                                    </p>
                                </article>

                                <footer class="with-share">

                                    @if(auth()->user())
                                        <a class="post-edit" href="{{ route('admin.media.edit', $video) }}" target="_blank">
                                            <i class="fa fa-pencil"></i>
                                            {{ trans('site.AdminPostEdit') }}
                                        </a>
                                    @endif

                                    <div class="pluso share-buttons">
                                        <button class="goodshare btn-fb" data-type="fb">
                                            <i class="fa fa-facebook"></i>
                                            <span data-counter="fb"></span>
                                        </button>
                                        <!-- Button with share to Facebook & share counter -->
                                        <button class="goodshare btn-vk" data-type="vk">
                                            <i class="fa fa-vk"></i>
                                            <span data-counter="vk"></span>
                                        </button>
                                        <button class="goodshare btn-ok" data-type="ok">
                                            <i class="fa fa-odnoklassniki"></i>
                                            <span data-counter="ok"></span>
                                        </button>
                                        <button class="goodshare btn-gp" data-type="gp">
                                            <i class="fa fa-google-plus"></i>
                                            <span data-counter="gp"></span>
                                        </button>
                                        <button class="goodshare btn-tw" data-type="tw">
                                            <i class="fa fa-twitter"></i>
                                            {{--<span data-counter="tw"></span>--}}
                                        </button>
                                    </div>

                                    <a href="{{ route('madaniyat.media.all') }}">
                                        <span>{{ trans('site.AllVideos') }}<i class="fa fa-arrow-circle-right"></i></span>
                                    </a>
                                </footer>
                            </div>
                        </div>

                        <div class="panel panel-default panel-related-videos ">
                            <div class="panel-heading madaniyatcolor">
                                <h3 class="panel-title">
                                    Тектеш чыгаруулар
                                </h3>
                            </div>
                            <div class="panel-body" id="relatedVideos">
                                @foreach($relatedVideos as $relatedVideo)
                                    <div class="col-md-4 block">
                                        <a href="{{ route('madaniyat.media.video', $relatedVideo) }}" class="video-thumb">
                                            <img src="http://img.youtube.com/vi/{{ $relatedVideo->getUrl() }}/mqdefault.jpg" alt=""/>
                                            <div class="overlay">
                                                <i class="fa-view"></i>
                                                <span class="media-view">{{ $relatedVideo->viewed }}</span>
                                                @if(($relatedVideo->getProgramName()))
                                                    <span class="media-project">
                                                        {{ $relatedVideo->getProgramName() }}
                                                    </span>
                                                @endif
                                                <span class="media-date">{{ $relatedVideo->getDay() }} {{ $relatedVideo->getMonthRu() }}, {{ $relatedVideo->getYear() }}</span>
                                            </div>
                                            <i class="fa-video"></i>
                                        </a>
                                        <div class="video-title">
                                            <a href="{{ route('madaniyat.media.video', $relatedVideo) }}">
                                                {{ $relatedVideo->getName() }}
                                            </a>
                                        </div>
                                    </div>
                                @endforeach


                                <div class="col-md-12">
                                    <button class="loadMore btn btn-default">
                                        {{ trans('site.LoadMore') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 no-padding">
                      <div class="panel panel-default">
                        <div class="panel-heading madaniyatcolor">
                          <h3 class="panel-title"><span>{{ trans('radiopages.Korsotuu') }}</span></h3>
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

            </section>
        </div>

    </div>

@stop

@section('footerscript2')

    {{--SHARE BUTTONS--}}
    <script src="{{ asset('js/goodshare.js') }}"></script>
    <script>
        $(window).load(function(){
            $('.goodshare').each(function(){
                var span = $(this).children('span');
                var counter = span.text();
                if((counter==0) || (counter=='')){
                    $(this).addClass('empty');
                }
            });
        });
    </script>

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
