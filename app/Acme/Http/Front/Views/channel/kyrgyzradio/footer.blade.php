</div>
</div>
@include('Front::partials.prefooter')

<script src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/audio/jquery.newsTicker.js')}}"></script> 
    <script>
  	$(document).ready(function(){
      	var nt_example2 = $('#nt-example2').newsTicker({
         	row_height: 40,
         	max_rows: 1,
         	speed: 300,
         	duration: 6000,
         	autostart:0,
         	prevButton: $('#nt-example2-prev'),
         	nextButton: $('#nt-example2-next'),
			hasMoved: function() {
            	$('#nt-example2-infos-container').fadeOut(0, function(){
           			$('#nt-example2-infos .infos-author').html($('#nt-example2 li:first span').html());
           			$('#nt-example2-infos .name').text($('#nt-example2 li:first span').text());
               		$('#nt-example2-infos .infos-text').text($('#nt-example2 li:first').data('infos'));
               		$(this).fadeIn(0);
            	});
     		},
	    	pause: function() {
	            $('#nt-example2 li i').removeClass('fa-play').addClass('fa-pause');
	        },
	        unpause: function() {
	    	   	$('#nt-example2 li i').removeClass('fa-pause').addClass('fa-play');
	     	}
  		});
      	$('#nt-example2-infos').hover(function() {
         	nt_example2.newsTicker('pause');
      	}, function() {
         	nt_example2.newsTicker('unpause');
      	});
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

<script type="text/javascript" src="{{ asset('js/bootstrap-hover-dropdown.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-migrate-1.2.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('slick/slick.min.js') }}"></script>

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