@extends('Front::layouts.defaultTest')
@if($videoProject)
    @section('title', $videoName.' | '.  $videoProject.' | Телеберүүлөр | КТРК')
@else
@section('title', $videoName.' | '.$getVideoTypeName.' | КТРК')
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

    <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/test3.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/goodshare.css') }}"/>
@endsection

@section('content')

    <div class="section light-section media-section">
        <div class="container">
            <div class="row">
                <div class="left-section col-md-9">
                    <div class="section video-section">
                        <div class="section-title">
                            <h4>
                                <a href="{{route('front.media.index')}}">
                                    Видеопортал
                                </a>
                                @if($videoProject)   
                                    <span class="divider"><i class="fa fa-circle"></i></span>                                                           
                                    <a href="{{ route('front.media.project', $video->program) }}">
                                        {{$videoProject}}
                                    </a> 
                                @endif
                            </h4>
                        </div>
                        <div class="section-body">
                            <div class="media-info">
                                <h4 class="media-title">
                                    {{$video->name}}                                    
                                </h4>
                                <div class="media-extra clearfix">
                                    <div class="pluso share-buttons pull-right">
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
                                            <!-- <span data-counter="tw"></span> -->
                                        </button>
                                    </div>
                                    <div class="post-extra pull-left">
                                        <span class="post-date">{{ $video->getDay() }} {{ $video->getMonthRu() }} @if(date('Y') != $video->getYear()) {{ $video->getYear() }} @endif, {{ $video->getTime()}}</span>
                                        <span class="post-views">
                                            <svg class="fa-view" x="0px" y="0px" viewBox="0 0 22 14" xml:space="preserve">
                                                <g>
                                                    <path d="M17.7,2.3C15.5,0.7,12.9,0,11,0S6.5,0.7,4.3,2.3C1.9,4.2,0,6.4,0,7s1.9,2.8,4.3,4.7C6.5,13.3,9.1,14,11,14s4.5-0.7,6.7-2.3
                                                        C20.1,9.8,22,7.6,22,7S20.1,4.2,17.7,2.3z M11,10c-1.7,0-3-1.3-3-3s1.3-3,3-3s3,1.3,3,3S12.7,10,11,10z"/>
                                                </g>
                                            </svg>
                                            {{ $video->getViewed() }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="embed-responsive embed-responsive-16by9 video-emded">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $video->getUrl()}}?rel=0&amp;showinfo=0" allowfullscreen></iframe>
                            </div>
                            @if($video->getContent())
                                <div class="media-content">
                                    {!! $video->getContent() !!}                                
                                </div>
                            @endif                            
                            <footer class="@if($video->getContent()) with-top-border @endif">
                                @if(auth()->user())
                                    <a class="post-edit" href="{{ route('admin.media.edit', $video) }}" target="_blank">
                                        <i class="fa fa-pencil"></i>
                                        {{ trans('site.AdminPostEdit') }}
                                    </a>
                                @endif                                

                                <a href="{{ route('front.media.all') }}">
                                    <span>{{ trans('site.AllVideos') }}</span>
                                </a>
                            </footer>
                        </div>
                    </div>

                    @include('Front::partials.postBanner')
                </div>

                <div class="right-section col-md-3 related-section">
                    <div class="section-title">
                        <h4>{{ trans('site.RelatedMedia') }}</h4>
                    </div>
                    <div class="section-body">
                        @foreach($relatedVideos as $relatedVideo)
                            <div class="portfolio">
                                <div class="portfolio-wrapper">
                                    <div class="media-image">
                                        <a href="{{ route('front.media.video', $relatedVideo) }}">
                                            <img src="@if($relatedVideo->thumbnail_big) {{ asset($relatedVideo->thumbnail_big)  }} @else http://img.youtube.com/vi/{{ $relatedVideo->getUrl() }}/hqdefault.jpg @endif" alt="{{ $relatedVideo->getName() }}" />
                                            <div class="overlay">
                                                <div class="media-extra">
                                                    <span class="media-date">{{ $relatedVideo->getDay() }} {{ $relatedVideo->getMonthRu() }}, {{ $relatedVideo->getTime()}}</span>
                                                    <svg class="fa-view" x="0px" y="0px" viewBox="0 0 22 14" xml:space="preserve">
                                                        <g>
                                                            <path d="M17.7,2.3C15.5,0.7,12.9,0,11,0S6.5,0.7,4.3,2.3C1.9,4.2,0,6.4,0,7s1.9,2.8,4.3,4.7C6.5,13.3,9.1,14,11,14s4.5-0.7,6.7-2.3
                                                                C20.1,9.8,22,7.6,22,7S20.1,4.2,17.7,2.3z M11,10c-1.7,0-3-1.3-3-3s1.3-3,3-3s3,1.3,3,3S12.7,10,11,10z"/>
                                                        </g>
                                                    </svg>
                                                    <span class="media-view">{{ $relatedVideo->viewed }}</span>
                                                </div>
                                            </div>
                                            <svg class="play-button" x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve">
                                                <g transform="translate(0,-952.36218)">
                                                    <path d="M16,952.4c-8.8,0-16,7.2-16,16s7.2,16,16,16s16-7.2,16-16C32,959.5,24.8,952.4,16,952.4L16,952.4z M16,954.7
                                                        c7.6,0,13.7,6.1,13.7,13.7c0,7.6-6.1,13.7-13.7,13.7s-13.7-6.1-13.7-13.7S8.4,954.7,16,954.7L16,954.7z M11.7,961.3v14l11.7-7
                                                        L11.7,961.3z"/>
                                                </g>
                                            </svg>                                                  
                                        </a>
                                    </div>
                                    <div class="media-title">
                                        <a href="{{ route('front.media.video', $relatedVideo) }}">
                                            {{ $relatedVideo->getName() }}
                                        </a>
                                    </div>

                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

@section('footerScript')

    <!-- SHARE BUTTONS -->
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

    <!-- Custom scrollbar -->
    <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>  

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
