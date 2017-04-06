@extends('Front::layouts.defaultTest')

@section('title', trans('site.Homepage').' | КТРК' )

@section('styles')
    <link rel="stylesheet" href="{{ asset('filter/css/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jasny-bootstrap.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/fileinput.css') }}"/>
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
                                    @foreach($generalPosts as $post)
                                        @if($post)
                                            <div class="main-news-item">
                                                <figure>
                                                    <a href="#" class="main-news-thumb">
                                                        <img src="{{ asset($post->thumbnail_big) }}" alt="{{ asset($post->getTitleRuOrKg()) }}">
                                                    </a>
                                                    <figcaption>
                                                        <div class="inner">
                                                            <div class="main-news-category clearfix">
                                                                <a href="{{ route('front.category', $post->category) }}">
                                                                    {{ $post->category('category_id')->first()->getTitle() }}
                                                                </a>
                                                            </div>
                                                            <a class="main-news-title" href="{{ route('front.post', [$post, $lc]) }}">
                                                                {{$post->getTitleRuOrKg()}}
                                                            </a>
                                                            <div class="main-news-extra clearfix">
                                                                <span class="main-news-date">{{ $post->getDay() }} {{ $post->getMonthRu() }}, {{ $post->getTime()}}</span>
                                                                <span class="main-news-views"><i class="fa-view"></i> {{ $post->getViewed() }}</span>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif
                            </div>

                            <div class="carousel-news hidden">
                                <div class="slider-for">
                                    @if($generalPosts)
                                        @foreach($generalPosts as $post)
                                            @if($post)
                                                <div>
                                                    <figure>
                                                        <a href="{{ route('front.post', [$post, $lc]) }}">
                                                            <img class="img" src="{{ asset($post->thumbnail_big) }}" alt=""/>
                                                        </a>
                                                        <figcaption>
                                                            <div class="inner">
                                                                <a class="post-title" href="{{ route('front.post', [$post, $lc]) }}">
                                                                    {{$post->getTitleRuOrKg()}}
                                                                </a>
                                                                <div class="extra clearfix">
                                                                    <span class="post-date">{{ $post->getDay() }} {{ $post->getMonthRu() }}, {{ $post->getTime()}}</span>
                                                                    <span class="post-views"><i class="fa-view"></i> {{ $post->getViewed() }}</span>
                                                                </div>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                            @endif
                                        @endforeach
                                    @endif
                                </div>

                                <div class="slider-nav col-md-12">
                                    @if($generalPosts)
                                        @foreach($generalPosts as $post)
                                            @if($post)
                                                <div>
                                                    <figure>
                                                        <figcaption>
                                                            <div class="categories clearfix">
                                                                <a href="{{ route('front.category', $post->category) }}">
                                                                    {{ $post->category('category_id')->first()->getTitle() }}
                                                                </a>
                                                            </div>
                                                            <p>
                                                                {{$post->getTitleRuOrKg()}}
                                                            </p>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                            @endif
                                        @endforeach
                                    @endif
                                </div>
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
                                <div>
                                    <div class="embed-youtube embed-responsive embed-responsive-16by9">
                                        <figure>
                                            <iframe class="embed-responsive-item" src="//www.youtube.com/embed/@if($dayVideo1){{$dayVideo1->getUrl()}}@else{{$defaultVideo}}@endif?enablejsapi=1&version=3&playerapiid=ytplayer&rel=0&showinfo=0" allowfullscreen=""></iframe>
                                            <figcaption>
                                                <div class="video-thumb">
                                                    <img src="@if($dayVideo1->thumbnail_big) {{ asset($dayVideo1->thumbnail_big)  }} @else http://img.youtube.com/vi/{{ $dayVideo1->getUrl() }}/hqdefault.jpg @endif" alt="{{ $dayVideo1->getName() }}" />
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
                                                    <i class="fa-video"></i>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>

                                {{--Day Video 2--}}
                                <div>
                                    <div class="embed-youtube embed-responsive embed-responsive-16by9">
                                        <figure>
                                            <iframe class="embed-responsive-item" src="//www.youtube.com/embed/@if($dayVideo2){{$dayVideo2->getUrl()}}@else{{$defaultVideo}}@endif?enablejsapi=1&version=3&playerapiid=ytplayer&rel=0&showinfo=0" allowfullscreen=""></iframe>
                                            <figcaption>
                                                <div class="video-thumb">
                                                    <img src="@if($dayVideo2->thumbnail_big) {{ asset($dayVideo2->thumbnail_big)  }} @else http://img.youtube.com/vi/{{ $dayVideo2->getUrl() }}/hqdefault.jpg @endif" alt="{{ $dayVideo2->getName() }}" />
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
                                                    <i class="fa-video"></i>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>

                                {{--Day Video 3--}}
                                <div>
                                    <div class="embed-youtube embed-responsive embed-responsive-16by9">
                                        <figure>
                                            <iframe class="embed-responsive-item" src="//www.youtube.com/embed/@if($dayVideo3){{$dayVideo3->getUrl()}}@else{{$defaultVideo}}@endif?enablejsapi=1&version=3&playerapiid=ytplayer&rel=0&showinfo=0" allowfullscreen=""></iframe>
                                            <figcaption>
                                                <div class="video-thumb">
                                                    <img src="@if($dayVideo3->thumbnail_big) {{ asset($dayVideo3->thumbnail_big)  }} @else http://img.youtube.com/vi/{{ $dayVideo3->getUrl() }}/hqdefault.jpg @endif" alt="{{ $dayVideo3->getName() }}" />
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
                                                    <i class="fa-video"></i>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>

                                {{--Day Video 4--}}
                                <div>
                                    <div class="embed-youtube embed-responsive embed-responsive-16by9">
                                        <figure>
                                            <iframe class="embed-responsive-item" src="//www.youtube.com/embed/@if($dayVideo4){{$dayVideo4->getUrl()}}@else{{$defaultVideo}}@endif?enablejsapi=1&version=3&playerapiid=ytplayer&rel=0&showinfo=0" allowfullscreen=""></iframe>
                                            <figcaption>
                                                <div class="video-thumb">
                                                    <img src="@if($dayVideo4->thumbnail_big) {{ asset($dayVideo4->thumbnail_big)  }} @else http://img.youtube.com/vi/{{ $dayVideo4->getUrl() }}/hqdefault.jpg @endif" alt="{{ $dayVideo4->getName() }}" />
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
                                                    <i class="fa-video"></i>
                                                </div>
                                            </figcaption>
                                        </figure>
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

@section('footerScript')

    <script type="text/javascript">
        $(function () {
            var filterList = {
                init: function () {
                    $('#portfoliolist').mixitup({
                        showOnLoad: 'total',
                        targetSelector: '.portfolio',
                        filterSelector: '.filter',
                        effects: ['fade'],
                        easing: 'snap'
                    });
                }
            };
            filterList.init();

            $('.video-play').on('click', function(ev) {

                var ytid = $(this).attr('data-ytid');

                // hide all
                $('.main-video figcaption').show();
                $('.main-video .embed-responsive-item').each(function(){
                    $(this)[0].contentWindow.postMessage('{"event":"command","func":"' + 'stopVideo' + '","args":""}', '*');
                });

                // show current
                $(this).parent().hide();
                $(this).parent().parent().children('iframe')[0].src += '&autoplay=1';
                ev.preventDefault();

            });
        });

        $('.filter').each(function () {
            $(this).click(function () {

                var id = $(this).data('id');
                if(id==0){
                    $('#videoFooter').attr('href','{{ route('front.media.all') }}');
                } else if(id==2){
                    $('#videoFooter').attr('href','{{ route('front.media.category', 2) }}');
                }else if(id==3){
                    $('#videoFooter').attr('href','{{ route('front.media.category', 3) }}');
                }else if(id==4){
                    $('#videoFooter').attr('href','{{ route('front.media.category', 4) }}');
                }else if(id==5){
                    $('#videoFooter').attr('href','{{ route('front.media.category', 5) }}');
                }else if(id==6){
                    $('#videoFooter').attr('href','{{ route('front.media.category', 6) }}');
                }
            });
        });

    </script>
    <script>
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

        $('.carousel-news .slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            fade: true,
            asNavFor: '.carousel-news .slider-nav',
            arrows: false
        });
        $('.carousel-news .slider-nav').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            asNavFor: '.carousel-news .slider-for',
            focusOnSelect: true,
            vertical:true,
            arrows:false
        });
    </script>
    <script>
        $('.banner-ads').slick({
            dots: false,
            infinite: true,
            arrows: false,
            speed: 500,
            fade: true,
            autoplay: true,
            autoplaySpeed: 3500,
            cssEase: 'linear'
        });
    </script>
@endsection