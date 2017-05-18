@extends('Front::layouts.defaultTest')

@section('title', trans('site.Homepage').' - КТРК' )

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/test2.css') }}"/>
@endsection

@section('content')

    <div class="top-block">
        <div class="container main-wrapper">
            <div class="row">
                <div class="top-left-block col-md-12">
                    <div class="panel panel-default panel-top-news">
                        <div class="panel-heading">
                            <h3 class="panel-title"><span>{{ trans('site.Top news') }}</span></h3>
                        </div>
                        <div class="panel-body">

                            <div class="main-news">
                                @if($generalPosts)
                                    @foreach($generalPosts as $key=>$post)
                                        @if($post)
                                            @if($key == 2)
                                                <div class="main-news-item main-news-live">
                                                    <figure>
                                                        <a href="{{ route('front.vertex.post', [$post, $lc]) }}" class="main-news-thumb">
                                                            <img src="{{ asset($post->thumbnail_big) }}" alt="{{ asset($post->getTitleRuOrKg()) }}">
                                                        </a>
                                                        <figcaption>
                                                            <div class="inner">
                                                                <div class="main-news-category clearfix">
                                                                    <svg version="1.1" x="0px" y="0px" viewBox="0 0 205 105.1" xml:space="preserve">
                                                                        <style type="text/css">
                                                                            .st0{fill:none;stroke:#ffffff;stroke-width:5;stroke-miterlimit:10;}
                                                                            .st1{fill:none;stroke:#ffffff;stroke-width:5;stroke-miterlimit:10;}
                                                                            .st2{fill:none;stroke:#ffffff;stroke-width:5;stroke-miterlimit:10;}
                                                                            .st3{fill:#ffffff;}
                                                                        </style>
                                                                        <g>
                                                                            <path class="st0" d="M152.5,2.6c27.6,0,50,22.4,50,50c0,27.6-22.4,50-50,50"/>
                                                                            <path class="st0" d="M52.5,102.6c-27.6,0-50-22.4-50-50c0-27.6,22.4-50,50-50"/>
                                                                            <line class="st1" x1="52.5" y1="62.6" x2="52.5" y2="42.6"/>
                                                                            <line class="st2" x1="152.5" y1="102.6" x2="52.5" y2="102.6"/>
                                                                            <line class="st2" x1="152.5" y1="2.6" x2="52.5" y2="2.6"/>
                                                                            <g>
                                                                                <path class="st3" d="M90.2,60h10v7.2H82.8V38.1h7.4V60z"/>
                                                                                <path class="st3" d="M102.9,38.1h7.4v29.1h-7.4V38.1z"/>
                                                                                <path class="st3" d="M122,67.2l-9.4-29.1h8.1l5.7,20l5.7-20h8.1l-9.4,29.1H122z"/>
                                                                                <path class="st3" d="M150,60.2h11.3v7h-18.7V38.1h18.5v6.9H150v4h10V56h-10V60.2z"/>
                                                                            </g>
                                                                            <circle class="st3" cx="52.5" cy="53.7" r="12.5"/>
                                                                        </g>
                                                                    </svg>
                                                                </div>
                                                                <a class="main-news-title" href="{{ route('front.vertex.post', [$post, $lc]) }}">
                                                                    {{$post->getTitleRuOrKg()}}
                                                                </a>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                            @else
                                                <div class="main-news-item">
                                                    <figure>
                                                        <a href="{{ route('front.vertex.post', [$post, $lc]) }}" class="main-news-thumb">
                                                            <img src="{{ asset($post->thumbnail_big) }}" alt="{{ asset($post->getTitleRuOrKg()) }}">
                                                        </a>
                                                        <figcaption>
                                                            <div class="inner">
                                                                <div class="main-news-category clearfix">
                                                                    <a href="{{ route('front.category', $post->category) }}">
                                                                        {{ $post->category('category_id')->first()->getTitle() }}
                                                                    </a>
                                                                </div>
                                                                <a class="main-news-title" href="{{ route('front.vertex.post', [$post, $lc]) }}">
                                                                    {{$post->getTitleRuOrKg()}}
                                                                </a>
                                                                <div class="main-news-extra clearfix">
                                                                    <span class="main-news-date">{{ $post->getDay() }} {{ $post->getMonthRu() }}, {{ $post->getTime()}}</span>
                                                                    <span class="main-news-views">                                                                    
                                                                        <svg class="fa-view" x="0px" y="0px" viewBox="0 0 22 14" xml:space="preserve">
                                                                            <g>
                                                                                <path d="M17.7,2.3C15.5,0.7,12.9,0,11,0S6.5,0.7,4.3,2.3C1.9,4.2,0,6.4,0,7s1.9,2.8,4.3,4.7C6.5,13.3,9.1,14,11,14s4.5-0.7,6.7-2.3
                                                                                    C20.1,9.8,22,7.6,22,7S20.1,4.2,17.7,2.3z M11,10c-1.7,0-3-1.3-3-3s1.3-3,3-3s3,1.3,3,3S12.7,10,11,10z"/>
                                                                            </g>
                                                                        </svg>
                                                                        {{ $post->getViewed() }}
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                            @endif
                                        @endif
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="panel-footer">
                            <a href="{{ route('front.general') }}">
                                {{ trans('site.FrontPostAll') }}
                            </a>
                        </div>
                    </div>
                </div>

                <div class="top-right-block col-md-12">
                    <div class="panel panel-default panel-promo">
                        <div class="panel-body main-video">
                            <div class="carousel-videos">

                                {{--Day Video 1--}}
                                @if($dayVideo1)
                                    <div>
                                        <div class="embed-youtube embed-responsive embed-responsive-16by9">
                                            <figure>
                                                <iframe class="embed-responsive-item" src="//www.youtube.com/embed/@if($dayVideo1){{$dayVideo1->getUrl()}}@else{{$defaultVideo}}@endif?enablejsapi=1&version=3&playerapiid=ytplayer&rel=0&showinfo=0" allowfullscreen=""></iframe>
                                                <figcaption>
                                                    <div class="video-thumb">
                                                        <img src="@if($dayVideo1->thumbnail) {{ asset($dayVideo1->thumbnail)  }} @else http://img.youtube.com/vi/{{ $dayVideo1->getUrl() }}/hqdefault.jpg @endif" alt="{{ $dayVideo1->getName() }}" />
                                                    </div>
                                                    <div class="video-type">
                                                        <h3 id="videoTitle">
                                                            <span>{{ trans('site.FrontPostDaysNews') }}</span>
                                                        </h3>
                                                    </div>
                                                    <div class="video-info">
                                                        <a href="{{route('front.media.video',$dayVideo1)}}">
                                                            @if($dayVideo1){{ $dayVideo1->getName() }} @else {{ trans('site.FrontPostDaysNews') }} @endif
                                                        </a>
                                                    </div>
                                                    <div class="video-play">
                                                        <svg class="play-button" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
     viewBox="0 0 81 100" xml:space="preserve">
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <g>
                                                                                    <g>
                                                                                        <g>
                                                                                            <g>
                                                                                                <g>
                                                                                                    <g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <path d="M7,12.6L67.7,50L7,87.4V12.6 M0,0v100l81-50L0,0L0,0z"/>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                @endif

                                {{--Day Video 2--}}
                                @if($dayVideo2)
                                    <div>
                                        <div class="embed-youtube embed-responsive embed-responsive-16by9">
                                            <figure>
                                                <iframe class="embed-responsive-item" src="//www.youtube.com/embed/@if($dayVideo2){{$dayVideo2->getUrl()}}@else{{$defaultVideo}}@endif?enablejsapi=1&version=3&playerapiid=ytplayer&rel=0&showinfo=0" allowfullscreen=""></iframe>
                                                <figcaption>
                                                    <div class="video-thumb">
                                                        <img src="@if($dayVideo2->thumbnail){{ asset($dayVideo2->thumbnail)  }} @else http://img.youtube.com/vi/{{ $dayVideo2->getUrl() }}/hqdefault.jpg @endif" alt="{{ $dayVideo2->getName() }}" />
                                                    </div>
                                                    <div class="video-type">
                                                        <h3 id="videoTitle">
                                                            <span>{{ trans('site.FrontPostDaysEpisode') }}</span>
                                                        </h3>
                                                    </div>
                                                    <div class="video-info">
                                                        <a href="{{route('front.media.video',$dayVideo2)}}">
                                                            @if($dayVideo2){{ $dayVideo2->getName() }} @else {{ trans('site.FrontPostDaysNews') }} @endif
                                                        </a>
                                                    </div>
                                                    <div class="video-play">
                                                        <svg class="play-button" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
     viewBox="0 0 81 100" xml:space="preserve">
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <g>
                                                                                    <g>
                                                                                        <g>
                                                                                            <g>
                                                                                                <g>
                                                                                                    <g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <path d="M7,12.6L67.7,50L7,87.4V12.6 M0,0v100l81-50L0,0L0,0z"/>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                @endif

                                {{--Day Video 3--}}
                                @if($dayVideo3)
                                    <div>
                                        <div class="embed-youtube embed-responsive embed-responsive-16by9">
                                            <figure>
                                                <iframe class="embed-responsive-item" src="//www.youtube.com/embed/@if($dayVideo3){{$dayVideo3->getUrl()}}@else{{$defaultVideo}}@endif?enablejsapi=1&version=3&playerapiid=ytplayer&rel=0&showinfo=0" allowfullscreen=""></iframe>
                                                <figcaption>
                                                    <div class="video-thumb">
                                                        <img src="@if($dayVideo3->thumbnail) {{ asset($dayVideo3->thumbnail)  }} @else http://img.youtube.com/vi/{{ $dayVideo3->getUrl() }}/hqdefault.jpg @endif" alt="{{ $dayVideo3->getName() }}" />
                                                    </div>
                                                    <div class="video-type">
                                                        <h3 id="videoTitle">
                                                            <span>{{ trans('site.FrontPostDaysAnons') }}</span>
                                                        </h3>
                                                    </div>
                                                    <div class="video-info">
                                                        <a href="{{route('front.media.video',$dayVideo3)}}">
                                                            @if($dayVideo3){{ $dayVideo3->getName() }} @else {{ trans('site.FrontPostDaysNews') }} @endif
                                                        </a>
                                                    </div>
                                                    <div class="video-play">
                                                        <svg class="play-button" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
     viewBox="0 0 81 100" xml:space="preserve">
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <g>
                                                                                    <g>
                                                                                        <g>
                                                                                            <g>
                                                                                                <g>
                                                                                                    <g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <path d="M7,12.6L67.7,50L7,87.4V12.6 M0,0v100l81-50L0,0L0,0z"/>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                @endif

                                {{--Day Video 4--}}
                                @if($dayVideo4)
                                    <div>
                                        <div class="embed-youtube embed-responsive embed-responsive-16by9">
                                            <figure>
                                                <iframe class="embed-responsive-item" src="//www.youtube.com/embed/@if($dayVideo4){{$dayVideo4->getUrl()}}@else{{$defaultVideo}}@endif?enablejsapi=1&version=3&playerapiid=ytplayer&rel=0&showinfo=0" allowfullscreen=""></iframe>
                                                <figcaption>
                                                    <div class="video-thumb">
                                                        <img src="@if($dayVideo4->thumbnail) {{ asset($dayVideo4->thumbnail)  }} @else http://img.youtube.com/vi/{{ $dayVideo4->getUrl() }}/hqdefault.jpg @endif" alt="{{ $dayVideo4->getName() }}" />
                                                    </div>
                                                    <div class="video-type">
                                                        <h3 id="videoTitle">
                                                            <span>{{ trans('site.FrontPostDaysMaanai') }}</span>
                                                        </h3>
                                                    </div>
                                                    <div class="video-info">
                                                        <a href="{{route('front.media.video',$dayVideo4)}}">
                                                            @if($dayVideo4){{ $dayVideo4->getName() }} @else {{ trans('site.FrontPostDaysNews') }} @endif
                                                        </a>
                                                    </div>
                                                    <div class="video-play">
                                                        <svg class="play-button" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
     viewBox="0 0 81 100" xml:space="preserve">
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <g>
                                                                                    <g>
                                                                                        <g>
                                                                                            <g>
                                                                                                <g>
                                                                                                    <g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <path d="M7,12.6L67.7,50L7,87.4V12.6 M0,0v100l81-50L0,0L0,0z"/>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                @endif

                            </div>

                        </div>
                    </div>

                </div>
                <div class="ad-block col-md-12">
                    <div class="text-center ads top-ad">
                        <a href="@if(!empty($positionLeft->file)) {{ $positionLeft->linkTo }} @else # @endif" target="_blank">
                            <img src="@if(!empty($positionLeft->file)) {{ asset($positionLeft->file) }} @else {{ asset('images/banner_default_728x90.png') }} @endif"/>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="mid-block">
        <div class="container">
            <div class="row">

                <div class="gallery col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a href="{{ route('front.gallery.galleries') }}"><span>{{trans('site.BaikoochuKeneshGallery')}}</span></a>
                            </h3>
                        </div>
                        <div class="panel-body">
                            @if($photoGalleryFirst)
                                <div class="col-md-6 gallery-left">
                                    <div class="row">
                                        <a class="gallery-item" href="{{ route('front.gallery', $photoGalleryFirst) }}">
                                            <figure>
                                                <img src="{{ asset($photoGalleryFirst->thumbnail_big) }}" alt=""/>
                                                <figcaption>
                                                    <svg version="1.1" class="gallery-button" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
     viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
                                                        <g>
                                                            <path d="M60,0H4C1.8,0,0,1.8,0,4v56c0,2.2,1.8,4,4,4h56c2.2,0,4-1.8,4-4V4C64,1.8,62.3,0,60,0z M61,50.4c0,3.6-4.3,5.4-6.9,2.8
                                                                l-3.5-3.5c-1.5-1.5-4.1-1.5-5.7,0c-1.6,1.5-4.1,1.5-5.7,0L29.1,39.5c-1.5-1.5-4.1-1.5-5.7,0L9.8,53.1C7.3,55.6,3,53.8,3,50.2V4.4
                                                                C3,3.6,3.6,3,4.4,3h55.1C60.4,3,61,3.6,61,4.4V50.4z"/>
                                                            <circle cx="48.6" cy="14.7" r="5"/>
                                                        </g>
                                                    </svg>
                                                    <span class="gallery-title">
                                                        {{ $photoGalleryFirst->getName() }}
                                                    </span>
                                                </figcaption>
                                            </figure>
                                        </a>
                                    </div>
                                </div>                                
                            @endif

                            <div class="col-md-6 gallery-right">
                                <div class="row">
                                @if($photoGalleries)
                                    @foreach($photoGalleries as $photoGallery)
                                        <div class="col-md-6">
                                            <div class="row">
                                                <a class="gallery-item" href="{{ route('front.gallery', $photoGallery) }}">
                                                    <figure>
                                                        <img src="{{ asset($photoGallery->thumbnail_big) }}" alt=""/>
                                                        <figcaption>
                                                            <svg version="1.1" class="gallery-button" x="0px" y="0px"
     viewBox="0 0 64 64" xml:space="preserve">
                                                                <g>
                                                                    <path d="M60,0H4C1.8,0,0,1.8,0,4v56c0,2.2,1.8,4,4,4h56c2.2,0,4-1.8,4-4V4C64,1.8,62.3,0,60,0z M61,50.4c0,3.6-4.3,5.4-6.9,2.8
                                                                        l-3.5-3.5c-1.5-1.5-4.1-1.5-5.7,0c-1.6,1.5-4.1,1.5-5.7,0L29.1,39.5c-1.5-1.5-4.1-1.5-5.7,0L9.8,53.1C7.3,55.6,3,53.8,3,50.2V4.4
                                                                        C3,3.6,3.6,3,4.4,3h55.1C60.4,3,61,3.6,61,4.4V50.4z"/>
                                                                    <circle cx="48.6" cy="14.7" r="5"/>
                                                                </g>
                                                            </svg>
                                                            <span class="gallery-title">
                                                                {{ $photoGallery->getName() }}
                                                            </span>
                                                        </figcaption>
                                                    </figure>
                                                </a>
                                            </div>    
                                        </div>
                                    @endforeach
                                @endif
                                </div>
                            </div>

                            <footer>
                                <a href="{{ route('front.gallery.galleries') }}">
                                    <span>{{ trans('site.FrontGalleryAll') }}</span>
                                </a>

                            </footer>

                        </div>
                    </div>                    
                </div>
                
            </div>
        </div>
    </div>

    <div class="bottom-block">
        <div class="container main-wrapper">
            <div class="row">
                <div class="bottom-left-block col-md-4">

                    <div class="panel panel-default latest-news">
                        <div class="panel-heading">
                            <h3 class="panel-title"><span>{{ trans('site.FrontLastNews') }}</span></h3>
                        </div>
                        <div class="panel-body">
                            <ul class="list-group">
                                @if($latestPosts)
                                    @foreach($latestPosts as $post)
                                        <li class="list-group-item news-item">
                                            <div class="news-body clearfix">

                                                <div class="post-extra clearfix">
                                                    <a href="{{ route('front.category', $post->category) }}" class="post-category">{{ $post->category('category_id')->first()->getTitle() }}</a>
                                                    <span class="post-date">{{ $post->getDay() }} {{ $post->getMonthRu() }}, {{ $post->getTime()}}</span>
                                                    <span class="post-views">                                                        
                                                        <svg class="fa-view" x="0px" y="0px" viewBox="0 0 22 14" xml:space="preserve">
                                                            <g>
                                                                <path d="M17.7,2.3C15.5,0.7,12.9,0,11,0S6.5,0.7,4.3,2.3C1.9,4.2,0,6.4,0,7s1.9,2.8,4.3,4.7C6.5,13.3,9.1,14,11,14s4.5-0.7,6.7-2.3
                                                                    C20.1,9.8,22,7.6,22,7S20.1,4.2,17.7,2.3z M11,10c-1.7,0-3-1.3-3-3s1.3-3,3-3s3,1.3,3,3S12.7,10,11,10z"/>
                                                            </g>
                                                        </svg>
                                                        {{ $post->getViewed() }}
                                                    </span>
                                                    @if($post->getIsVideo() == 'yes' || $post->getIsPhoto() == 'yes')
                                                        <span class="post-file">                                                        
                                                            @if($post->getIsPhoto() == 'yes')
                                                                <svg version="1.1" class="gallery-button" x="0px" y="0px" viewBox="0 0 64 64" xml:space="preserve">
                                                                    <g>
                                                                        <path d="M60,0H4C1.8,0,0,1.8,0,4v56c0,2.2,1.8,4,4,4h56c2.2,0,4-1.8,4-4V4C64,1.8,62.3,0,60,0z M61,50.4c0,3.6-4.3,5.4-6.9,2.8
                                                                            l-3.5-3.5c-1.5-1.5-4.1-1.5-5.7,0c-1.6,1.5-4.1,1.5-5.7,0L29.1,39.5c-1.5-1.5-4.1-1.5-5.7,0L9.8,53.1C7.3,55.6,3,53.8,3,50.2V4.4
                                                                            C3,3.6,3.6,3,4.4,3h55.1C60.4,3,61,3.6,61,4.4V50.4z"/>
                                                                        <circle cx="48.6" cy="14.7" r="5"/>
                                                                    </g>
                                                                </svg>
                                                            @endif
                                                            @if($post->getIsVideo() == 'yes')
                                                                <svg class="play-button" x="0px" y="0px" viewBox="0 0 81 100" xml:space="preserve">
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <g>
                                                                                    <g>
                                                                                        <g>
                                                                                            <g>
                                                                                                <g>
                                                                                                    <g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <g>
                                                                                                                    <g>
                                                                                                                        <path d="M7,12.6L67.7,50L7,87.4V12.6 M0,0v100l81-50L0,0L0,0z"/>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </svg>
                                                            @endif
                                                        </span>
                                                    @endif
                                                </div>
                                                <a class="post-title" href="{{ route('front.vertex.post', [$post, $lc]) }}">
                                                    {{ $post->getTitleRuOrKg() }}
                                                </a>
                                            </div>
                                        </li>
                                    @endforeach
                                @endif

                            </ul>

                            <footer>
                                <a href="{{ route('front.general') }}">
                                    <span>{{ trans('site.FrontPostAll') }}</span>
                                </a>
                            </footer>

                        </div>
                    </div>

                    <div class="panel panel-default panel-director">
                        <div class="panel-heading">
                            <h3 class="panel-title director-title">
                                <a class="director-img" href="{{ route('front.pages.director') }}">
                                    <img src="{{ asset('images/manager.png') }}" alt="директор"/>
                                </a>
                                <a class="director-text" href="{{ route('front.pages.director') }}">{{ trans('site.FrontDirectorPage') }}</a>
                            </h3>
                        </div>
                        <div class="panel-body">

                            <div class="carousel carousel-director">

                                @if($directorPosts)
                                    @foreach($directorPosts as $post)
                                        <div>

                                            <a href="{{ route('front.pages.directorPost', [$post, $lc]) }}">
                                                <img src="@if(!($post->thumbnail_big))images/live_bg.png @else {{ asset($post->thumbnail_big) }} @endif" alt=""/>
                                            </a>
                                            <a href="{{ route('front.pages.directorPost', [$post, $lc]) }}" class="post-title">
                                                {{ $post->getTitleRuOrKg() }}
                                            </a>
                                        </div>
                                    @endforeach
                                @endif

                            </div>

                            <footer>
                                <a href="{{ route('front.pages.director') }}">
                                    <span>{{ trans('site.FrontToDirectorPage') }}</span>
                                </a>
                            </footer>
                        </div>
                    </div>

                </div>

                <div class="bottom-right-block col-md-8">

                    <div class="panel panel-default videoportal">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a href="{{ route('front.media.index') }}"><span>Видеопортал</span></a>
                            </h3>
                        </div>
                        <div class="panel-body">

                            <ul class="filters clearfix">
                                <li class="filter active" data-id="0" data-filter="total">
                                    <span>{{ trans('site.AllVideos') }}</span>
                                </li>
                                @foreach($MediaCategories as $key => $MediaCategory)
                                    <li class="filter" data-id="{{ $MediaCategory->id }}" data-filter="{{ $MediaCategory->getVideoType() }}">
                                        <span>{{ $MediaCategory->getGlobalName() }}</span>
                                    </li>
                                @endforeach
                            </ul>

                            <div id="portfoliolist" class="clearfix">
                                @foreach($mediaLastVideos as $key=>$media)
                                    <div class="portfolio">
                                        <div class="portfolio-wrapper">
                                            <div class="media-image">
                                                <a href="{{ route('front.media.video', $media) }}">
                                                    <img src="@if($media->thumbnail) {{ asset($media->thumbnail)  }} @else http://img.youtube.com/vi/{{ $media->getUrl() }}/hqdefault.jpg @endif" alt="{{ $media->getName() }}" />
                                                    <div class="overlay">
                                                        <div class="media-extra">
                                                            <span class="media-date">{{ $media->getDay() }} {{ $media->getMonthRu() }}, {{ $media->getTime()}}</span>
                                                            <svg class="fa-view" x="0px" y="0px" viewBox="0 0 22 14" xml:space="preserve">
                                                                <g>
                                                                    <path d="M17.7,2.3C15.5,0.7,12.9,0,11,0S6.5,0.7,4.3,2.3C1.9,4.2,0,6.4,0,7s1.9,2.8,4.3,4.7C6.5,13.3,9.1,14,11,14s4.5-0.7,6.7-2.3
                                                                        C20.1,9.8,22,7.6,22,7S20.1,4.2,17.7,2.3z M11,10c-1.7,0-3-1.3-3-3s1.3-3,3-3s3,1.3,3,3S12.7,10,11,10z"/>
                                                                </g>
                                                            </svg>
                                                            <span class="media-view">{{ $media->viewed }}</span>
                                                        </div>
                                                    </div>                                                    
                                                    <svg class="play-button" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
 viewBox="0 0 81 100" xml:space="preserve">
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <g>
                                                                                    <g>
                                                                                        <g>
                                                                                            <g>
                                                                                                <g>
                                                                                                    <g>
                                                                                                        <g>
                                                                                                            <path d="M7,12.6L67.7,50L7,87.4V12.6 M0,0v100l81-50L0,0L0,0z"/>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="media-title">
                                                <a href="{{ route('front.media.video', $media) }}">
                                                    {{ $media->getName() }}
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                @endforeach                               

                            </div>
                            <footer>
                                <a id="videoFooter" href="{{ route('front.media.all') }}">
                                    <span>{{ trans('site.AllVideos') }}</span>
                                </a>
                            </footer>

                        </div>
                    </div>

                    <a target="_blank" href="@if(!empty($positionCenter)) {{ $positionCenter->linkTo }} @else # @endif" class="text-center ads">
                        <img src="@if(!empty($positionCenter->file)) {{ asset($positionCenter->file) }} @else {{ asset('images/banner_default_728x90.png') }} @endif" alt="123"/>
                    </a>

                </div>          

            </div>
        </div>
    </div>

    <div class="last-block">
        <div class="container">
            <div class="row">
                <div class="middle-left-block col-md-8">

                    <div class="row">

                        <div class="panel panel-default panel-carousel peoplereporter">

                            <div class="panel-heading">
                                <h3 class="panel-title"><span>{{ trans('site.Reporter') }}</span></h3>
                            </div>

                            <div class="panel-body">

                                <div class="carousel carousel-reporter">
                                    @if($reporterPosts)
                                        @foreach($reporterPosts as $post)
                                            <div class="col-md-4 rep-post">
                                                <a class="rep-thumb" href="{{ route('front.post', [$post, $lc]) }}">
                                                    <img src="@if(!($post->getFile()))images/live_bg.png @else {{ asset($post->getFile()) }} @endif" alt=""/>
                                                    <div class="overlay">
                                                        <span class="rep-name">{{ $post->getTitleRuOrKg() }}</span>
                                                        <span class="rep-date">{{ $post->getDay() }} {{ $post->getMonthRu() }}, {{ $post->getYear() }}</span>
                                                        <span class="rep-view">{{ $post->getViewed() }}</span>
                                                        <svg class="fa-view" x="0px" y="0px" viewBox="0 0 22 14" xml:space="preserve">
                                                            <g>
                                                                <path d="M17.7,2.3C15.5,0.7,12.9,0,11,0S6.5,0.7,4.3,2.3C1.9,4.2,0,6.4,0,7s1.9,2.8,4.3,4.7C6.5,13.3,9.1,14,11,14s4.5-0.7,6.7-2.3
                                                                    C20.1,9.8,22,7.6,22,7S20.1,4.2,17.7,2.3z M11,10c-1.7,0-3-1.3-3-3s1.3-3,3-3s3,1.3,3,3S12.7,10,11,10z"/>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                </a>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>

                            </div>
                        </div>

                    </div>

                </div>

                <div class="middle-right-block col-md-4">

                    <div class="row">
                        <a target="_blank" href="@if($positionRight) {{ $positionRight->linkTo }} @else # @endif" class="text-right ads ads-300x250 middle-ad">
                            <img src="@if(!empty($positionRight->file)) {{ asset($positionRight->file) }} @else {{ asset('images/banner_300x250.png') }} @endif" alt="phot1"/>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

@stop

@section('footerScript')
    <script>
        $(function(){

            // Carousels
            $('.carousel-reporter').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                prevArrow: '<svg class="arrow-prev" x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve"><g><path d="M13.7,26.8c0-0.4-0.1-0.7-0.4-1L5,17.5h25.6c0.8,0,1.5-0.7,1.5-1.5s-0.7-1.5-1.5-1.5H5l8.3-8.3c0.3-0.3,0.4-0.7,0.4-1c0-0.4-0.1-0.7-0.4-1c-0.6-0.6-1.5-0.6-2,0L0.4,14.9c-0.6,0.6-0.6,1.5,0,2l10.8,10.9c0.6,0.6,1.5,0.6,2,0C13.6,27.6,13.7,27.3,13.7,26.8z"/></g></svg>',
                nextArrow: '<svg class="arrow-next" x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve"><g><path d="M18.3,5.2c0,0.4,0.1,0.7,0.4,1l8.3,8.3H1.5C0.7,14.6,0,15.2,0,16c0,0.8,0.7,1.5,1.5,1.5H27l-8.3,8.3c-0.3,0.3-0.4,0.7-0.4,1c0,0.4,0.1,0.7,0.4,1c0.6,0.6,1.5,0.6,2,0l10.8-10.8c0.6-0.6,0.6-1.5,0-2L20.7,4.1c-0.6-0.6-1.5-0.6-2,0C18.4,4.4,18.3,4.8,18.3,5.2z"/></g></svg>'
            });

            $('.carousel-director').slick({
                arrows: true,
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: false, // set 'true' after test
                autoplaySpeed: 3000
            });
            $('.carousel-slick').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: false,
                autoplaySpeed: 2500
            });
            $('.carousel-videos').slick({
                centerMode: true,
                centerPadding: '60px',
                slidesToShow: 3,
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            arrows: true,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 1
                        }
                    }
                ]
            });

            // Videoportal filter
            $('.filter').click(function(){
                if(!$(this).hasClass('active')){
                    $(this).addClass('active');
                    $(this).siblings().removeClass('active');

                    $.ajaxSetup({
                        headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
                    });

                    var type = $(this).attr('data-filter');
                    var dataString = 'type='+type;

                    var url = "{{ route('front.homeVideoportal') }}";
                    var parent = $('#portfoliolist');

                    $.ajax({
                        type: "POST",
                        url: url,
                        data: dataString,
                        cache: false,
                        success: function(data)
                        {
                            if(data){
                                parent.html(data);
                            }
                        }
                    });
                }
            });

            // Day videos play youtube player            
            $('.carousel-videos .video-play').click(function (e) {
                var iframe = $(this).parent().siblings('iframe');
                $('.carousel-videos iframe').each(function(){
                    $(this)[0].contentWindow.postMessage('{"event":"command","func":"' + 'stopVideo' + '","args":""}', '*')
                });    
                $('.carousel-videos figcaption').show();
                
                iframe[0].src += "&autoplay=1";
                $(this).parent().hide();
                e.preventDefault();
            });
        })
    </script>
@endsection