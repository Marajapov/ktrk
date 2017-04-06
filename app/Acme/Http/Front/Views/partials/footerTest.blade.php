<footer class="footer hidden">
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <ul>
                                <li><a href="#">{{ trans('site.Homepage') }}</a></li>
                                <li><a href="#">КТРК</a></li>
                                <li><a href="#">Видеопортал</a></li>
                                <li><a href="#">Программа передач</a></li>
                                <li><a href="#">{{ trans('site.BaikoochuKenesh') }}</a></li>
                                <li><a href="#">{{ trans('site.RedKenesh') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

@include('Front::partials.prefooter')

</div>

</div>

<script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap-hover-dropdown.js') }}"></script>

<script>
    $(document).ready(function(){
        $(".search-toggle").click(function(){
            $(".logo-block").addClass("search-show");
            $(".form-search").addClass("visible");
        });
        $(".close-search").click(function(){
            $(".logo-block").removeClass("search-show");
            $(".form-search").removeClass("visible");
        });

        var header = $('#videoTitle span');
        $('.main-video .slider-nav .slick-slide').each(function(){
            var videoTitle = $(this).children('.videoTitle').text();
            $(this).click(function () {
                header.text(videoTitle);
            });
        });

        // header search form
        var searchForm = $('#searchForm');
        var searchToggle = $('#searchToggle');
        var searchClose = $('#searchClose');

        searchToggle.click(function (e) {
            $(this).addClass('hidden');
            searchForm.removeClass('hidden');
        });
        searchClose.click(function (e) {
            if(searchToggle.hasClass('hidden')){
                searchForm.addClass('hidden');
                searchToggle.removeClass('hidden');
            }
        });
    });

    function headerResize(){
        var containerWidth = $('.container').outerWidth();
        var windowWidth = $(window).width();

        $('.header-decor-r').css('margin-left',-(370+(windowWidth-containerWidth)/2));
        $('.header-decor-l').css('right',460+(windowWidth-containerWidth)/2);
    }
    headerResize();
</script>

<script type="text/javascript" src="{{ asset('filter/js/jquery.easing.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('filter/js/jquery.mixitup.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('js/jquery-migrate-1.2.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('slick/slick.min.js') }}"></script>

<!--Carousel-->
<script>
    $('.carousel-post').slick({
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear'
    });
    $('.carousel-reporter').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1
    });
    $('.carousel-slick').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2500
    });
    $('.carousel-director').slick({
        arrows: false,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000
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

<script src="{{ asset('jwplayer/jwplayer.js') }}"></script>
<script>jwplayer.key="tmEO2SU8NzqLBoHr2Vq6nV13XCyfo8xbdiCb/Q==";</script>

<script type="text/javascript">

    var playerInstance = jwplayer("player");

    //    $('#playerPlay').click(function(){
    //        playerInstance.play();
    //    });
    $('#playerStop').click(function(){
        playerInstance.stop();
    });

    playerInstance.setup({
        autostart: true,
        playlist: [{
            image: "{{-- asset('images/live_bg.png') --}}",
            sources: [{
                file: "rtmp://85.113.29.233:1936/live/ktrk.stream"
//		  file: "rtsp://85.113.29.245:8000/live"
            }]
        }],
        width: "640",
        height: "360",
        aspectratio: "",
        primary: "flash",
        skin: {
            name: "five"
        },
        stretching: "exactfit"
    });
</script>

<script>
    $(document).ready(function () {
        var trigger = $('.hamburger'),
            overlay = $('.overlay'),
            isClosed = false;

        trigger.click(function () {
            hamburger_cross();
        });

        function hamburger_cross() {

            if (isClosed == true) {
                overlay.hide();
                trigger.removeClass('is-open');
                trigger.addClass('is-closed');
                isClosed = false;
            } else {
                overlay.show();
                trigger.removeClass('is-closed');
                trigger.addClass('is-open');
                isClosed = true;
            }
        }

        $('[data-toggle="offcanvas"]').click(function () {
            $('#wrapper').toggleClass('toggled');
        });
    });
</script>

<script src="{{ asset('js/sweetalert.min.js') }}"></script>
@yield('footerScript')

@yield('footerscript2')

<!-- Google Analytics -->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-71814746-1', 'auto');
    ga('send', 'pageview');

</script>
<!-- end Google Analytics -->

{{--<script src="{{asset('js/svg.js')}}"></script>--}}
<script>
    //<![CDATA[
    $(window).load(function() { // makes sure the whole site is loaded
        $('#preloader').fadeOut('slow'); // will fade out the white DIV that covers the website.
        $('#status').fadeOut(); // will first fade out the loading animation
        $('body').addClass('load-anim'); // will first fade out the loading animation
    })

    $(window).resize(function(){
        headerResize();
    });
    //]]>
</script>

</body>
</html>
