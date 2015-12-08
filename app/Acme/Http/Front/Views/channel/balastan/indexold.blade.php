<!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <title>Баластан</title>

        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/font-awesome.css"/>
        <link rel="stylesheet" href="filter/css/layout.css">
        <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
        <link rel="stylesheet" href="css/style.css"/>

    </head>
    
    <body class="balastan">
        <div class="switch">
            <nav class="navbar">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
                        <span class="sr-only">Меню</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="{{ asset('images/channels/balastan_white_notext.png')}}"><h4>Баластан</h4></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="menu">
                    <ul class="nav navbar-nav channel_switch">
                        <li class="sitemenu" id="site-channel1">
                            <a href="{{ route('front.home') }}"><img src="{{ asset('images/ktrk_last.svg')}}" style="height:40px;"><span>КТРК</span><h4>КТРК</h4></a></li>
                        <li class="sitemenu" id="site-channel1">
                            <a href="{{ route('muzkanal.home') }}"><img src="{{ asset('images/channels/muz_white_notext.png')}}" ><span>Музыка</span><h4>Музыка</h4></a></li>
                        <li class="sitemenu" id="site-channel1">
                            <a href="{{ route('madaniyat.home') }}"><img src="{{ asset('images/channels/madaniyat_white_notext.png')}}"><span>Маданият</span><h4>Маданият</h4></a></li>
                        <li class="sitemenu" id="site-channel1">
                            <a class="active" href="{{ route('balastan.home') }}"><img src="{{ asset('images/channels/balastan_white_notext.png')}}"><span>Баластан</span><h4>Баластан</h4></a></li>
                    </ul>  
                </div><!-- /.navbar-collapse -->
            </nav>
        </div>


        <div class="container">
            <div class="row">      
                <div class="col-md-12 logo-block logocenter">
                    <div class="row">

                        <div class="col-xs-5">
                            <div id="axis" class="one firstcloud">

                                <img class="object van move-right " src="{{ asset('images/channels/balastan/cloud.png')}}" alt="" />
                                <a class="menuaanim move-right menuposition" href="#">О канале</a>                               
                            </div>
                            <div id="axis" class="one cloudstanleft">

                                <img class="object van move-right " src="{{ asset('images/channels/balastan/cloudleft.png')}}" alt="" />
                                <a class="menuaanim move-right menuposition" href="#">Видео</a>                               
                            </div>
                        </div>
                        <div class="col-xs-2">
                            <a class="logo" href="#" style="position:relative;">
                                <img src="images/channels/balastan_white.png" alt=""/>
                            </a>
                        </div>
                        <div class="col-xs-5">
                            <div id="axis" class="one pull-left">

                                <img class="object van move-right" src="{{ asset('images/channels/balastan/cloudleft.png')}}" alt="" />
                                <a class="menuaanim move-right menuposition" href="#">Передачи</a>                               
                            </div>
                            <div id="axis" class="one pull-left cloudstanright">

                                <img class="object van move-right" src="{{ asset('images/channels/balastan/cloud.png')}}" alt="" />
                                <a class="menuaanim2 move-right menuposition2" href="#">Программы</a>                               
                            </div>
                        </div>      
                    </div>
                </div>   
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="row ">
                        <div class="col-md-2"> 
                            <img class="iconleft" src="{{ asset('images/channels/balastan/akylay.png')}}" alt="">
                        </div>
                        <div class="col-md-8" style="text-align:center;">
                            <img class="tvthree" src="{{ asset('images/channels/balastan/tv3.png')}}" alt="">
                            <div class="iconcenter">                            
                                <iframe width="495" height="360" src="https://www.youtube.com/embed/2tV6RFYqCZg?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" controls=0 allowfullscreen></iframe>
                            </div>
                            <img class="tvtop" src="{{ asset('images/channels/balastan/tvtop.png')}}" alt="">
                            <img class="tvbottom" src="{{ asset('images/channels/balastan/tvbottom.png')}}" alt="">
                            <img class="tvleft" src="{{ asset('images/channels/balastan/tvleft.png')}}" alt="">
                            <img class="tvright" src="{{ asset('images/channels/balastan/tvright.png')}}" alt="">


                        </div>
                        <div class="col-md-2">
                            <img class="iconright" src="{{ asset('images/channels/balastan/aktan.png')}}" alt="">
                        </div>
                    </div>      
                </div>
            </div>
        </div>

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

        <div class="container-fluid footerimg">
            <img src="{{ asset('images/channels/balastan/footer.png')}}" alt="">
        </div>

        <script src="js/jquery-1.11.2.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

    </body>
</html>