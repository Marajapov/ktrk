
<script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap-hover-dropdown.js') }}"></script>


<script type="text/javascript" src="{{ asset('filter/js/jquery.easing.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('filter/js/jquery.mixitup.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('js/jquery-migrate-1.2.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('slick/slick.min.js') }}"></script>

<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover(); 
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
                file: "http://85.113.29.234/live/7001.flv"
            }]
        }],
        width: "640",
        height: "360",
        aspectratio: "",
        primary: "flash",
        skin: {
            name: "glow"
        },
        stretching: "exactfit"
    });
</script>

<script src="{{ asset('js/sweetalert.min.js') }}"></script>
<!-- @if(session('flag2') == 0)
    <script>
        $(document).ready(function(){
            $('#btnLive').click(function(){
                swal("", "Трансляция заблокирована в Вашей стране!", "error");
            });
        });
    </script>
@endif -->
<script type="text/javascript">
	$(function () {
	    var flag = false;
	    $("#soon").css("color", "#CB363F");
	    setTimeout(function () {
	        $("#soon").css("color", "#CB363F");
	        setInterval(function () {
	            $("#soon").css("color", flag? "#CB363F":"#222");
	            flag = !flag;
	        }, 500)
	    }, 3000);
	});
</script>

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

</body>
</html>