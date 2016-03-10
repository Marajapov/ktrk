</div>
</div>
<div class="container prefooter clearfix">

    <div class="footer-info clearfix">
        <div class="col-md-4 apps-logo">
            <p>
                {{ trans('site.KtrkApp') }}
            </p>
            <ul>
                <li>
                    <a href="https://play.google.com/store/apps/details?id=ktrk.kg.app">
                        <img src="{{ asset('images/android.png') }}" alt="ktrk_adnroid"/>
                    </a>
                </li>
                <li>
                    <a href="https://itunes.apple.com/kg/app/ktrk-official/id1004194204">
                        <img src="{{ asset('images/ios.png') }}" alt="ktrk_ios"/>
                    </a>
                </li>
            </ul>
        </div>

        <div class="col-md-8 footer-menu">

            <ul>
                <li><a href="{{ route('front.home') }}">{{ trans('site.Homepage') }}</a></li>
                <li>/</li>
                <li><a href="{{ route('front.media.index') }}">Видеопортал</a></li><li>/</li>
                <li><a href="{{ route('front.pages.program') }}">Программа</a></li><li>/</li>
                {{--<li><a href="#">{{ trans('site.Ads') }}</a></li><li>/</li>--}}
                <li><a href="{{ route('front.pages.reklama') }}">{{ trans('site.Ads') }}</a></li><li>/</li>
                {{--<li><a href="#">{{ trans('site.Contacts') }}</a></li>--}}
                <li><a href="{{ route('front.pages.contacts') }}">{{ trans('site.Contacts') }}</a></li>
            </ul>

            <h4 class="copyright"><i class="fa fa-copyright"></i>{{ trans('site.TradeMark') }}, 2010-<?php echo date("Y"); ?>. {{ trans('site.TradeMarkAll') }} </h4>
            <h4 class="copyright">{{ trans('site.TradeMarkRegulations') }} </h4>
        </div>
            <h4 class="copyright">{{ trans('site.TradeMarkAddress') }} / {{ trans('site.TradeMarkTel') }} / {{ trans('site.TradeMarkEmail') }} / {{ trans('site.TradeMarkPart') }}</h4>
            <h4 class="copyright">{{ trans('site.TradeMarkKtrk') }} </h4>

            <p class="text-center" style="margin: 5px 0 0; font-size: 13px;">{{ trans('site.Developed') }} <a href="http://ulut.kg/" target="_blank">Улут Софт</a></p>

        </div>
    </div>

</div>
<script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap-hover-dropdown.js') }}"></script>

<script type="text/javascript" src="{{ asset('js/jquery-migrate-1.2.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('slick/slick.min.js') }}"></script>

<script src="{{ asset('jwplayer/jwplayer.js') }}"></script>
<script>jwplayer.key="tmEO2SU8NzqLBoHr2Vq6nV13XCyfo8xbdiCb/Q==";</script>

@yield('footerScript')

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

</body>
</html>