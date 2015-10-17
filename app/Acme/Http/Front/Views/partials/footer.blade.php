<footer class="footer">
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <ul>
                                <li><a href="#">Башкы бет</a></li>
                                <li><a href="#">КТРК</a></li>
                                <li><a href="#">Видеопортал</a></li>
                                <li><a href="#">Телепрограмма</a></li>
                                <li><a href="#">Байкоочу кеңеш</a></li>
                                <li><a href="#">Редакциялык кеңешчи</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-12 copy"><i class="fa fa-copyright"></i> 2015 Кыргыз Республикасынын Коомдук телерадиоберүү корпорациясы</div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap-hover-dropdown.js') }}"></script>

<script src="{{ asset('js/masonry.pkgd.min.js') }}"></script>
<script src="{{ asset('js/imagesloaded.js') }}"></script>
<script src="{{ asset('js/classie.js') }}"></script>

<!--Menu concept-->
<!--<script src="js/polyfills.js"></script>-->
<!--<script src="js/demo1.js"></script>-->

<script type="text/javascript" src="{{ asset('filter/js/jquery.easing.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('filter/js/jquery.mixitup.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('js/jquery-migrate-1.2.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('slick/slick.min.js') }}"></script>

<!--Carousel-->
<script>
    $('.carousel').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1
    });
    $('.carousel-post').slick({
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear'
    });
</script>

<script type="text/javascript">
    $('#myTabs a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
    })

</script>

<!--Photo slider-->
<script>
    $("#slideshow > div:gt(0)").hide();

    setInterval(function() {
        $('#slideshow > div:first')
                .fadeOut(1000)
                .next()
                .fadeIn(1000)
                .end()
                .appendTo('#slideshow');
    },  3000);
</script>

</body>
</html>