</div>
</div>
@include('Front::partials.prefooter')

<script src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('slick/slick.min.js') }}"></script>
<script src="{{ asset('js/audio/jquery.newsTicker.js')}}"></script> 

<script>

 $('.quotes-hidden').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.quotes'
});
$('.quotes').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  asNavFor: '.quotes-hidden',
  dots: true,
  centerMode: true,
  focusOnSelect: true
});
</script>

<script src="{{ asset('js/landing/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/landing/mousescroll.js') }}"></script>
<script src="{{ asset('js/landing/smoothscroll.js') }}"></script>
<script src="{{ asset('js/landing/jquery.prettyPhoto.js') }}"></script>
<script src="{{ asset('js/landing/jquery.isotope.min.js') }}"></script>
<script src="{{ asset('js/landing/jquery.inview.min.js') }}"></script>
<script src="{{ asset('js/landing/wow.min.js') }}"></script>
<script src="{{ asset('js/landing/main.js') }}"></script>
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