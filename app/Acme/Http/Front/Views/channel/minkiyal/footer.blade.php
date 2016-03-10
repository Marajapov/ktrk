<div class="container prefooter clearfix">

    <div class="footer-info clearfix">
        <div class="col-md-12 footer-menu">

          <div class="footer-trademark" style="background: none;">
            <div class="container footer-top">
              <div class="col-md-8">
                <h4 class="copyright"><i class="fa fa-copyright"></i>{{ trans('site.TradeMark') }}, 2010-<?php echo date("Y"); ?>. {{ trans('site.TradeMarkAll') }} </h4>
                <h4 class="copyright">{{ trans('site.TradeMarkRegulations') }} </h4>
                <h4 class="copyright">{{ trans('site.TradeMarkRegulations2') }} </h4>
                <h4 class="copyright">{{ trans('site.TradeMarkRegulations3') }} </h4>
                <h4 class="copyright">{{ trans('site.TradeMarkRegulations4') }} </h4>
              </div>
              <div class="col-md-4">
                <h4 class="copyrightSide">{{ trans('site.TradeMarkAddress') }}</h4>
                <h4 class="copyrightSide">{{ trans('site.TradeMarkTel') }} </h4>
                <h4 class="copyrightSide">{{ trans('site.TradeMarkPart') }} </h4>
                <h4 class="copyrightSide">{{ trans('site.TradeMarkEmail') }} </h4>
                <h4 class="copyrightSide">{{ trans('site.TradeMarkKtrk') }} </h4>
                <h4 class="copyrightSide"><p class="text-right" style="margin: 5px 0 0; font-size: 14px;">{{ trans('site.Developed') }} <a href="http://ulut.kg/" target="_blank">Улут Софт</a></p> </h4>
              </div>
            </div>
            <div class="container footer-bottom">

            </div>
          </div>

        </div>
    </div>

</div>


<script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap-hover-dropdown.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-migrate-1.2.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('slick/slick.min.js') }}"></script>
<script src="{{ asset('js/landing/fixed.js') }}"></script>

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