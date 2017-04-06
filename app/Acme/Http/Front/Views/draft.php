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
                        @if($generalPosts)
                        @foreach($generalPosts as $post)
                        @if($post)
                        <div class="col-md-4">
                            <div class="row">
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
                        </div>
                        @endif
                        @endforeach
                        @endif

                    </div>
                    <div class="panel-footer">
                        <a href="{{ route('front.general') }}">
                            {{ trans('site.FrontPostAll') }}
                        </a>
                    </div>
                </div>
            </div>

            <div class="top-right-block col-md-4">
                <div class="panel panel-default panel-promo">
                    <div class="panel-heading">
                        <h3 class="panel-title" id="videoTitle"><span>{{ trans('site.FrontPostDaysNews') }}</span></h3>
                    </div>
                    <div class="panel-body main-video">
                        <div class="slider slider-for">
                            <div> <!-- video1 -->
                                <div class="embed-youtube embed-responsive embed-responsive-16by9 slider-text">
                                    <figure>
                                        <iframe class="embed-responsive-item" src="//www.youtube.com/embed/@if($dayVideo1){{$dayVideo1->getUrl()}}@else{{$defaultVideo}}@endif?enablejsapi=1&version=3&playerapiid=ytplayer&rel=0&showinfo=0" allowfullscreen=""></iframe>
                                        <figcaption>
                                            <img src="http://img.youtube.com/vi/@if($dayVideo1){{$dayVideo1->getUrl()}}@else{{$defaultVideo}}@endif/maxresdefault.jpg" alt="" />
                                            <div class="">
                                                <h3 id="videoTitle">
                                                    <span>{{ trans('site.FrontPostDaysNews') }}</span>
                                                </h3>
                                                <h4>
                                                    @if($dayVideo1){{ $dayVideo1->getName() }} @else {{ trans('site.FrontPostDaysNews') }} @endif
                                                </h4>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>

                            <div> <!-- video2 -->
                                <div class="embed-youtube embed-responsive embed-responsive-16by9 slider-text">
                                    <figure>
                                        <iframe class="embed-responsive-item" src="//www.youtube.com/embed/@if($dayVideo2){{$dayVideo2->getUrl()}}@else{{$defaultVideo}}@endif?enablejsapi=1&version=3&playerapiid=ytplayer&rel=0&showinfo=0" allowfullscreen=""></iframe>
                                        <figcaption>
                                            <img src="http://img.youtube.com/vi/@if($dayVideo2){{$dayVideo2->getUrl()}}@else{{$defaultVideo}}@endif/maxresdefault.jpg" alt="" />
                                            <div class="">
                                                <h3 id="videoTitle">
                                                    <span>{{ trans('site.FrontPostDaysNews') }}</span>
                                                </h3>
                                                <h4>
                                                    @if($dayVideo2){{ $dayVideo2->getName() }} @else {{ trans('site.FrontPostDaysNews') }} @endif
                                                </h4>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>

                            <div> <!-- video3 -->
                                <div class="embed-youtube embed-responsive embed-responsive-16by9 slider-text">
                                    <figure>
                                        <iframe class="embed-responsive-item" src="//www.youtube.com/embed/@if($dayVideo3){{$dayVideo3->getUrl()}}@else{{$defaultVideo}}@endif?enablejsapi=1&version=3&playerapiid=ytplayer&rel=0&showinfo=0" allowfullscreen=""></iframe>
                                        <figcaption>
                                            <img src="http://img.youtube.com/vi/@if($dayVideo3){{$dayVideo3->getUrl()}}@else{{$defaultVideo}}@endif/maxresdefault.jpg" alt="" />
                                            <div class="">
                                                <h3 id="videoTitle">
                                                    <span>{{ trans('site.FrontPostDaysNews') }}</span>
                                                </h3>
                                                <h4>
                                                    @if($dayVideo3){{ $dayVideo3->getName() }} @else {{ trans('site.FrontPostDaysNews') }} @endif
                                                </h4>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>

                            <div> <!-- video4 -->
                                <div class="embed-youtube embed-responsive embed-responsive-16by9 slider-text">
                                    <figure>
                                        <iframe class="embed-responsive-item" src="//www.youtube.com/embed/@if($dayVideo4){{$dayVideo4->getUrl()}}@else{{$defaultVideo}}@endif?enablejsapi=1&version=3&playerapiid=ytplayer&rel=0&showinfo=0" allowfullscreen=""></iframe>
                                        <figcaption>
                                            <img src="http://img.youtube.com/vi/@if($dayVideo4){{$dayVideo4->getUrl()}}@else{{$defaultVideo}}@endif/maxresdefault.jpg" alt="" />
                                            <div class="">
                                                <h3 id="videoTitle">
                                                    <span>{{ trans('site.FrontPostDaysNews') }}</span>
                                                </h3>
                                                <h4>
                                                    @if($dayVideo4){{ $dayVideo4->getName() }} @else {{ trans('site.FrontPostDaysNews') }} @endif
                                                </h4>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>

                        </div>
                        <div class="slider slider-nav">
                            <div>
                                <span class="videoTitle hidden">{{ trans('site.FrontPostDaysNews') }}</span>
                                <h5>@if($dayVideo1){{ $dayVideo1->getName() }} @else {{ trans('site.FrontPostDaysMaanai') }} @endif</h5>
                            </div>
                            <div>
                                <span class="videoTitle hidden">{{ trans('site.FrontPostDaysEpisode') }}</span>
                                <h5>@if($dayVideo2){{ $dayVideo2->getName() }} @else {{ trans('site.FrontPostDaysMaanai') }} @endif</h5>
                            </div>
                            <div>
                                <span class="videoTitle hidden">{{ trans('site.FrontPostDaysAnons') }}</span>
                                <h5>@if($dayVideo3){{ $dayVideo3->getName() }} @else {{ trans('site.FrontPostDaysMaanai') }} @endif</h5>
                            </div>

                            <div>
                                <span class="videoTitle hidden">{{ trans('site.FrontPostDaysMaanai') }}</span>
                                <h5>@if($dayVideo4){{ $dayVideo4->getName() }} @else {{ trans('site.FrontPostDaysMaanai') }} @endif</h5>
                            </div>
                        </div>

                        <footer>
                            <a href="{{ route('front.media.index') }}">
                                <span>{{ trans('site.FrontVideoAll') }} <i class="fa fa-arrow-circle-right"></i></span>
                            </a>
                        </footer>

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
    $('.panel-promo .slider-for').slick({
        slidesToShow: 1,
        fade: true,
        arrows: false,
        autoplay:false
    });
    $('.panel-promo .slider-nav').slick({
        slidesToShow: 4,
        asNavFor: '.panel-promo .slider-for',
        focusOnSelect: true
    });
    $('.panel-promo .slider-nav .slick-slide').each(function () {
        $(this).click(function (i, el) {
            $('.panel-promo .slider-for .embed-responsive-item').each(function () {
                $(this)[0].contentWindow.postMessage('{"event":"command","func":"' + 'stopVideo' + '","args":""}', '*');
            });
        });
    });

    $('.carousel-news .slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        asNavFor: '.carousel-news .slider-nav',
        arrows: false
    });
    $('.carousel-news .slider-nav').slick({
        slidesToShow: 3,
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