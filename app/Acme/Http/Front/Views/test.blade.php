@extends('Front::layouts.defaultTest')

@section('title', trans('site.Homepage').' - КТРК' )

@section('styles')
    <!-- <link rel="stylesheet" href="{{ asset('css/test2.css') }}"/> -->
    <link rel="stylesheet" href="{{ asset('css/test3.css') }}"/>
@endsection

@section('content')

    @include('Front::home.slider')

    @include('Front::home.mainNews')

    @include('Front::home.carouselVideos')

    @include('Front::home.gallery')

    <div class="section light-section middle-section">
        <div class="container">
            <div class="row">

                @include('Front::home.lastNews')
                @include('Front::home.videoportal')

            </div>
        </div>
    </div>    

    @include('Front::home.reporter')

    @include('Front::home.footerChannels')

@stop

@section('footerScript')
    <script>
        $(function(){

            // Carousels
            $('.reporter-slider').slick({
                infinite: true,
                slidesToShow: 3,
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

            $('.main-slider-2').slick({
                dots: true,
                infinite: true,
                speed: 500,
                fade: true,
                cssEase: 'linear',
                arrows: false,

                appendArrows: '.slider-control',
                prevArrow: '<button class="slick-arrow arrow-prev"><svg x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve"><g><path d="M13.7,26.8c0-0.4-0.1-0.7-0.4-1L5,17.5h25.6c0.8,0,1.5-0.7,1.5-1.5s-0.7-1.5-1.5-1.5H5l8.3-8.3c0.3-0.3,0.4-0.7,0.4-1c0-0.4-0.1-0.7-0.4-1c-0.6-0.6-1.5-0.6-2,0L0.4,14.9c-0.6,0.6-0.6,1.5,0,2l10.8,10.9c0.6,0.6,1.5,0.6,2,0C13.6,27.6,13.7,27.3,13.7,26.8z"/></g></svg></button>',
                nextArrow: '<button class="slick-arrow arrow-next"><svg x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve"><g><path d="M18.3,5.2c0,0.4,0.1,0.7,0.4,1l8.3,8.3H1.5C0.7,14.6,0,15.2,0,16c0,0.8,0.7,1.5,1.5,1.5H27l-8.3,8.3c-0.3,0.3-0.4,0.7-0.4,1c0,0.4,0.1,0.7,0.4,1c0.6,0.6,1.5,0.6,2,0l10.8-10.8c0.6-0.6,0.6-1.5,0-2L20.7,4.1c-0.6-0.6-1.5-0.6-2,0C18.4,4.4,18.3,4.8,18.3,5.2z"/></g></svg></button>'
            });

            $('.main-slider-for').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                asNavFor: '.main-slider-nav'
            });
            $('.main-slider-nav').slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                centerPadding: '30px',
                asNavFor: '.main-slider-for',
                dots: false,
                arrows: false,
                centerMode: true,
                focusOnSelect: true
            });           

            // Videoportal filter
            $('.filter').click(function(){
                if(!$(this).hasClass('active')){
                    $(this).addClass('active');
                    $(this).siblings().removeClass('active');

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
                });$('.carousel-videos figcaption').show();
                
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
            var video = $('.video-section .video');
            video.height(video.width()*0.5625);
        }
    </script>
@endsection