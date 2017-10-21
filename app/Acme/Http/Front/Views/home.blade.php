@extends('Front::layouts.defaultTest')

@section('title', trans('site.Homepage').' - КТРК' )

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/test3.css') }}"/>
@endsection

@section('content')

    @include('Front::home.slider')

    @include('Front::home.mainNews')

    @include('Front::home.carouselVideos')

    @include('Front::home.gallery')

    <div class="section grey-section middle-section">
        <div class="container">
            <div class="row">

                @include('Front::home.lastNews')
                @include('Front::home.news')

                <div class="col-md-12 ad-block">
                    <a target="_blank" href="@if(!empty($positionCenter)) {{ $positionCenter->linkTo }} @else # @endif">
                        <img src="@if(!empty($positionCenter->file)) {{ asset($positionCenter->file) }} @else {{ asset('images/banner_default_728x90.png') }} @endif" alt="123"/>
                    </a>
                </div>

            </div>
        </div>
    </div>    

    @include('Front::home.multimedia')

    @include('Front::home.footerChannels')

@stop

@section('footerScript')
    <script>
        $(function(){

            // Carousels
            $('.reporter-slider').slick({
                infinite: true,
                slidesToShow: 2,
                slidesToScroll: 1,
                prevArrow: '<button class="slick-arrow arrow-prev"><svg x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve"><g><path d="M13.7,26.8c0-0.4-0.1-0.7-0.4-1L5,17.5h25.6c0.8,0,1.5-0.7,1.5-1.5s-0.7-1.5-1.5-1.5H5l8.3-8.3c0.3-0.3,0.4-0.7,0.4-1c0-0.4-0.1-0.7-0.4-1c-0.6-0.6-1.5-0.6-2,0L0.4,14.9c-0.6,0.6-0.6,1.5,0,2l10.8,10.9c0.6,0.6,1.5,0.6,2,0C13.6,27.6,13.7,27.3,13.7,26.8z"/></g></svg></button>',
                nextArrow: '<button class="slick-arrow arrow-next"><svg x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve"><g><path d="M18.3,5.2c0,0.4,0.1,0.7,0.4,1l8.3,8.3H1.5C0.7,14.6,0,15.2,0,16c0,0.8,0.7,1.5,1.5,1.5H27l-8.3,8.3c-0.3,0.3-0.4,0.7-0.4,1c0,0.4,0.1,0.7,0.4,1c0.6,0.6,1.5,0.6,2,0l10.8-10.8c0.6-0.6,0.6-1.5,0-2L20.7,4.1c-0.6-0.6-1.5-0.6-2,0C18.4,4.4,18.3,4.8,18.3,5.2z"/></g></svg></button>'
            });
            $('.carousel-director').slick({
                arrows: true,
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: false, // set 'true' after test
                autoplaySpeed: 3000,
                prevArrow: '<button class="slick-arrow arrow-prev"><svg x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve"><g><path d="M13.7,26.8c0-0.4-0.1-0.7-0.4-1L5,17.5h25.6c0.8,0,1.5-0.7,1.5-1.5s-0.7-1.5-1.5-1.5H5l8.3-8.3c0.3-0.3,0.4-0.7,0.4-1c0-0.4-0.1-0.7-0.4-1c-0.6-0.6-1.5-0.6-2,0L0.4,14.9c-0.6,0.6-0.6,1.5,0,2l10.8,10.9c0.6,0.6,1.5,0.6,2,0C13.6,27.6,13.7,27.3,13.7,26.8z"/></g></svg></button>',
                nextArrow: '<button class="slick-arrow arrow-next"><svg x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve"><g><path d="M18.3,5.2c0,0.4,0.1,0.7,0.4,1l8.3,8.3H1.5C0.7,14.6,0,15.2,0,16c0,0.8,0.7,1.5,1.5,1.5H27l-8.3,8.3c-0.3,0.3-0.4,0.7-0.4,1c0,0.4,0.1,0.7,0.4,1c0.6,0.6,1.5,0.6,2,0l10.8-10.8c0.6-0.6,0.6-1.5,0-2L20.7,4.1c-0.6-0.6-1.5-0.6-2,0C18.4,4.4,18.3,4.8,18.3,5.2z"/></g></svg></button>'
            });

            $('.main-slider').slick({
                centerMode: true,
                centerPadding: '0',
                slidesToShow: 1,
                autoplay: true,
                autoplaySpeed: 3000,

                // appendArrows: '.slider-control',
                prevArrow: '<button class="slick-arrow arrow-prev"><svg x="0px" y="0px" viewBox="0 0 64 64" xml:space="preserve"><g transform="translate(0,-952.36218)"><path d="M16,984.4c0-1.2,0.4-1.6,0.7-2c8.8-9.2,19-19.4,28.9-29.7c0.6-0.6,1.4-0.5,1.9,0.2c0.5,0.7,0.6,1.9,0.3,2.8l-11,28.6c3.4,8.9,7.7,19.4,11.2,29.7c0,0.8-0.3,1.5-0.7,1.9c-0.7,0.4-1,0.5-1.7-0.1c-8.9-9.1-19-19.6-28.9-29.7C16.3,985.8,16,985.1,16,984.4z"/></g></svg></button>',
                nextArrow: '<button class="slick-arrow arrow-next"><svg x="0px" y="0px" viewBox="0 0 64 64" xml:space="preserve"><g transform="translate(0,-952.36218)"><path d="M48,984.4c0,1.2-0.4,1.6-0.7,2c-8.8,9.2-19,19.4-28.9,29.7c-0.6,0.6-1.4,0.5-1.9-0.2c-0.5-0.7-0.6-1.9-0.3-2.8l11-28.6c-3.4-8.9-7.7-19.4-11.2-29.7c0-0.8,0.3-1.5,0.7-1.9c0.7-0.4,1-0.5,1.7,0.1c8.9,9.1,19,19.6,28.9,29.7C47.7,982.9,48,983.6,48,984.4z"/></g></svg></button>'
            });

            // Day videos play youtube player            
            $('.video-item .video-play').click(function (e) {
                var iframe = $(this).parent().siblings('iframe');
                $('.video-item iframe').each(function(){
                    $(this)[0].contentWindow.postMessage('{"event":"command","func":"' + 'stopVideo' + '","args":""}', '*')
                });$('.video-item figcaption').show();
                
                iframe[0].src += "&autoplay=1";
                $(this).parent().hide();
                e.preventDefault();
            });

            videosThumb();
        });

        $(window).resize(function(){
            videosThumb();
        });

        function videosThumb(){
            var video = $('.video-section .video-item');
            video.height(video.width()*0.5625);
        }
    </script>
@endsection