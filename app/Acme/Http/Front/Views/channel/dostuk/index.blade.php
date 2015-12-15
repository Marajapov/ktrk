<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Достук</title>

    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/font-awesome.css"/>
    <link rel="stylesheet" href="css/style.css"/>

    <link href="css/landing/animate.min.css" rel="stylesheet">
    <link href="css/landing/owl.carousel.css" rel="stylesheet">
    <link href="css/landing/owl.transitions.css" rel="stylesheet">
    <link href="css/landing/prettyPhoto.css" rel="stylesheet">
    <link href="css/landing/dostuk.css" rel="stylesheet">
    <link href="css/landing/responsive.css" rel="stylesheet">

</head>
<body id="home" class="homepage">
    <div class="container-fluid switch">
            <nav class="navbar">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
                        <span class="sr-only">Меню</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="{{ asset('images/channels/dostuk.png')}}"><h4>Достук</h4></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="menu">
                    <ul class="nav navbar-nav channel_switch">
                        <li class="sitemenu" id="site-channel1">
                            <a href="{{ route('front.home') }}"><img src="{{ asset('images/ktrk_last.svg')}}" style="height:40px;"><span>КТРК</span><h4>КТРК</h4></a></li>
                        <li class="sitemenu" id="site-channel1">
                            <a href="{{ route('birinchi.home') }}"><img src="{{ asset('images/channels/1-radio.png')}}" ><span>Биринчи радио</span><h4>Биринчи радио</h4></a></li>
                        <li class="sitemenu" id="site-channel1">
                            <a href="{{ route('minkiyal.home') }}"><img src="{{ asset('images/channels/min-kiyal.png')}}"><span>Миң кыял</span><h4>Миң кыял</h4></a></li>
                        <li class="sitemenu" id="site-channel1">
                            <a href="{{ route('kyrgyzradio.home') }}"><img src="{{ asset('images/channels/kg-radio.png')}}"><span>Кыргыз радиосу</span><h4>Кыргыз радиосу</h4></a></li>
                        <li class="sitemenu" id="site-channel1">
                            <a class="active" href="{{ route('dostuk.home') }}"><img src="{{ asset('images/channels/dostuk.png')}}"><span>Достук</span><h4>Достук</h4></a></li>    
                    </ul>   
                </div><!-- /.navbar-collapse -->
            </nav>
    </div>

    <header id="header">
        <nav id="main-menu" class="navbar navbar-default fixedheader2" role="banner">
            <div class="container" style="padding: 0px;">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Меню</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ route('dostuk.home') }}"><img src="{{ asset('images/channels/dostuk.png')}}" alt="logo">Достук</a>
                    <div class="onetime"><a href=""><button class="btn"><i class="fa fa-microphone"></i><span>Түз эфир</span></button></a></div>
              
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll active"><a href="#home">Башкы</a></li>

                        <li class="scroll"><a href="#services">Уктуруулар</a></li>
                        <li class="scroll"><a href="#portfolio">Фотогалерея</a></li>
                        <li class="scroll"><a href="#about">Радио жөнүндө</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->
<div class="container" style="background: #fff;padding: 0px; margin-top: 20px;">
    <section id="main-slider">
        <div class="owl-carousel">
            <div class="item">
            <img src="{{asset('images/channels/kyrgyzradio/2.jpg')}}" height="358" width="1600" alt="">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2><span>Залкар инсандар</span></h2>
                                    <p>Биздин замандын баатырлары</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
             <div class="item">
            <img src="{{asset('images/channels/kyrgyzradio/1.jpg')}}" height="358" width="1600" alt="">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2><span>Биз билген Айтматов</span> </h2>
                                    <p>Манас жана Айтматов</p>   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
            <div class="item">
            <img src="{{asset('images/channels/kyrgyzradio/3.jpg')}}" height="358" width="1600" alt="">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2><span>Улуу манасчылар</span></h2>
                                    <p>Дүйнө аларга багынган</p>    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.owl-carousel-->
    </section><!--/#main-slider-->

    <section id="cta2">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown"></h2>
                <h2 data-wow-duration="300ms" data-wow-delay="0ms"><span>“Биримдигибиз ынтымакта!” </span></h2>
                <h2 class="section-title text-center wow fadeInDown"></h2>  
            </div>
        </div>
    </section>

    <section id="services" >
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Уктуруулар</h2>
                <p class="text-center wow fadeInDown">Достук радиосу 6 тилде программаларын жасап эфирге берип келет. Алар: орус, поляк, татар, түрк, украин, дунган тилдеринде. <br> Бул тилдерде этностордун маданиятын, салтын, улуттук майрамдарын чагылдырган уктуруулар даярдалып келет. Уктуруулар төмөнкү тилдерде которуусу менен берилип келет. </p>
          </div>

            <div class="row">
                <div class="features">

                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-bullhorn"></i>
                            </div>
                            <div class="media-body">
                                <div role="tabpanel">
                                    <ul class="nav main-tab nav-justified" role="tablist">
                                        <li role="presentation" class="active">
                                            <a href="#tab01" role="tab" data-toggle="tab" aria-controls="tab01" aria-expanded="true">Наш человек</a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#tab02" role="tab" data-toggle="tab" aria-controls="tab02" aria-expanded="false">Уктуруу жөнүндө</a>
                                        </li>
                                    </ul>
                                    <div id="tab-content" class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade active in" id="tab01" aria-labelledby="tab01">
                                            <p><iframe width="100%" height="100" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/235888059&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe></p>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab02" aria-labelledby="tab02">
                                           <p>Кыргызстанга салымын кошуп жаткан белгилүү адамдар тууралуу. </p>
                                       </div>
                                   </div>
                               </div>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-bullhorn"></i>
                            </div>
                            <div class="media-body">
                                <div role="tabpanel">
                                    <ul class="nav main-tab nav-justified" role="tablist">
                                        <li role="presentation" class="active">
                                            <a href="#tab5" role="tab" data-toggle="tab" aria-controls="tab5" aria-expanded="true">Звезды мировой музыки</a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#tab6" role="tab" data-toggle="tab" aria-controls="tab6" aria-expanded="false">Уктуруу жөнүндө</a>
                                        </li>
                                    </ul>
                                    <div id="tab-content" class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade active in" id="tab5" aria-labelledby="tab5">
                                            <p><iframe width="100%" height="100" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/235888059&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe></p>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab6" aria-labelledby="tab6">
                                           <p>Бул программа дүйнөнүн белгилүү композиторлору, чыгармалары тууралуу</p>
                                       </div>
                                   </div>
                               </div>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->                    

                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-bullhorn"></i>
                            </div>
                            <div class="media-body">
                                <div role="tabpanel">
                                    <ul class="nav main-tab nav-justified" role="tablist">
                                        <li role="presentation" class="active">
                                            <a href="#tab7" role="tab" data-toggle="tab" aria-controls="tab7" aria-expanded="true">Бар бол достук</a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#tab8" role="tab" data-toggle="tab" aria-controls="tab8" aria-expanded="false">Уктуруу жөнүндө</a>
                                        </li>
                                    </ul>
                                    <div id="tab-content" class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade active in" id="tab7" aria-labelledby="tab7">
                                            <p><iframe width="100%" height="100" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/235888059&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe></p>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab8" aria-labelledby="tab8">
                                            <p>Кыргызстанда жашаган этностордун ар кандай маданий-майрамдык кечелерин чагылдырат</p>
                                        </div>
                                   </div>
                               </div>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-bullhorn"></i>
                            </div>
                            <div class="media-body">
                                <div role="tabpanel">
                                    <ul class="nav main-tab nav-justified" role="tablist">
                                        <li role="presentation" class="active">
                                            <a href="#tab9" role="tab" data-toggle="tab" aria-controls="tab9" aria-expanded="true">Дүйнөлүк поэзия</a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#tab10" role="tab" data-toggle="tab" aria-controls="tab10" aria-expanded="false">Уктуруу жөнүндө</a>
                                        </li>
                                    </ul>
                                    <div id="tab-content" class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade active in" id="tab9" aria-labelledby="tab9">
                                            <p><iframe width="100%" height="100" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/235888059&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe></p>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab10" aria-labelledby="tab10">
                                            <p>Бул берүүдө дүйнөлүк классикалык поэзияны айтып берет.</p>
                                        </div>
                                   </div>
                               </div>
                            </div>
                        </div>
                    </div><!--/.col-md-4--> 

                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-bullhorn"></i>
                            </div>
                            <div class="media-body">
                                <div role="tabpanel">
                                    <ul class="nav main-tab nav-justified" role="tablist">
                                        <li role="presentation" class="active">
                                            <a href="#tab11" role="tab" data-toggle="tab" aria-controls="tab11" aria-expanded="true">Данакер</a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#tab12" role="tab" data-toggle="tab" aria-controls="tab12" aria-expanded="false">Уктуруу жөнүндө</a>
                                        </li>
                                    </ul>
                                    <div id="tab-content" class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade active in" id="tab11" aria-labelledby="tab11">
                                            <p><iframe width="100%" height="100" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/235888059&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe></p>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab12" aria-labelledby="tab12">
                                            <p>Бул программа дуйнонун жана Кыргызстандын эки элге копуро болгон адамдары менен маек</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->


                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-bullhorn"></i>
                            </div>
                            <div class="media-body">
                                <div role="tabpanel">
                                    <ul class="nav main-tab nav-justified" role="tablist">
                                        <li role="presentation" class="active">
                                            <a href="#tab13" role="tab" data-toggle="tab" aria-controls="tab13" aria-expanded="true">Ашкана ажары</a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#tab14" role="tab" data-toggle="tab" aria-controls="tab14" aria-expanded="false">Уктуруу жөнүндө</a>
                                        </li>
                                    </ul>
                                    <div id="tab-content" class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade active in" id="tab13" aria-labelledby="tab13">
                                            <p><iframe width="100%" height="100" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/235888059&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe></p>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab14" aria-labelledby="tab14">
                                            <p>Бул программада улуттардын ашканасы тууралуу.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-bullhorn"></i>
                            </div>
                            <div class="media-body">
                                <div role="tabpanel">
                                    <ul class="nav main-tab nav-justified" role="tablist">
                                        <li role="presentation" class="active">
                                            <a href="#tab15" role="tab" data-toggle="tab" aria-controls="tab15" aria-expanded="true">Түрк тилин үйрөнөбүз</a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#tab16" role="tab" data-toggle="tab" aria-controls="tab16" aria-expanded="false">Уктуруу жөнүндө</a>
                                        </li>
                                    </ul>
                                    <div id="tab-content" class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade active in" id="tab15" aria-labelledby="tab15">
                                            <p><iframe width="100%" height="100" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/235888059&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe></p>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab16" aria-labelledby="tab16">
                                            <p>Тил үйрөтүүчү радио курс. Ошондой эле улуттар аралык мамилени бекемдөө максатында да бир топ уктуруулар программага киргизилген. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->    

                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-bullhorn"></i>
                            </div>
                            <div class="media-body">
                                <div role="tabpanel">
                                    <ul class="nav main-tab nav-justified" role="tablist">
                                        <li role="presentation" class="active">
                                            <a href="#tab17" role="tab" data-toggle="tab" aria-controls="tab17" aria-expanded="true">“Адеп</a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#tab18" role="tab" data-toggle="tab" aria-controls="tab18" aria-expanded="false">Эгиз тилдеги эргүүлөр</a>
                                        </li>
                                    </ul>
                                    <div id="tab-content" class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade active in" id="tab17" aria-labelledby="tab17">
                                            <p><iframe width="100%" height="100" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/235888059&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe></p>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab18" aria-labelledby="tab18">
                                            <p>Казак-кыргыз музыкалык берүүлөрү</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-bullhorn"></i>
                            </div>
                            <div class="media-body">
                                <div role="tabpanel">
                                    <ul class="nav main-tab nav-justified" role="tablist">
                                        <li role="presentation" class="active">
                                            <a href="#tab19" role="tab" data-toggle="tab" aria-controls="tab19" aria-expanded="true">Древо дружбы</a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#tab20" role="tab" data-toggle="tab" aria-controls="tab20" aria-expanded="false">Уктуруу жөнүндө</a>
                                        </li>
                                    </ul>
                                    <div id="tab-content" class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade active in" id="tab19" aria-labelledby="tab19">
                                            <p><iframe width="100%" height="100" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/235888059&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe></p>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab20" aria-labelledby="tab20">
                                            <p>Ар этностун өкүлдөүрүнү өздөрүнүн баяндоосу</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--/.col-md-4--> 

                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-bullhorn"></i>
                            </div>
                            <div class="media-body">
                                <div role="tabpanel">
                                    <ul class="nav main-tab nav-justified" role="tablist">
                                        <li role="presentation" class="active">
                                            <a href="#tab21" role="tab" data-toggle="tab" aria-controls="tab21" aria-expanded="true">Эл ынтымагы ыйык</a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#tab22" role="tab" data-toggle="tab" aria-controls="tab22" aria-expanded="false">Уктуруу жөнүндө</a>
                                        </li>
                                    </ul>
                                    <div id="tab-content" class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade active in" id="tab21" aria-labelledby="tab21">
                                            <p><iframe width="100%" height="100" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/235888059&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe></p>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab22" aria-labelledby="tab22">
                                            <p>Дүйнө элдеринин салты, маданияты, кенири маалымат.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->       

                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-bullhorn"></i>
                            </div>
                            <div class="media-body">
                                <div role="tabpanel">
                                    <ul class="nav main-tab nav-justified" role="tablist">
                                        <li role="presentation" class="active">
                                            <a href="#tab23" role="tab" data-toggle="tab" aria-controls="tab23" aria-expanded="true">Закымадаган замандар</a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#tab24" role="tab" data-toggle="tab" aria-controls="tab24" aria-expanded="false">Уктуруу жөнүндө</a>
                                        </li>
                                    </ul>
                                    <div id="tab-content" class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade active in" id="tab23" aria-labelledby="tab23">
                                            <p><iframe width="100%" height="100" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/235888059&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe></p>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab24" aria-labelledby="tab24">
                                            <p>Белгилүү адамдардын жетишкендиги, эмгектери, дуйнөлүк даанышмандардын ой толгоолору ( Ойчулдардын орошон ойлору, Ду Фунун ырга берген сырлары, Мао Цзы ж.б)  деген биздин радио сыяктуу көп тилдүү радио дүйнө жүзүндө саналуу гана өлкөлөрдө бар</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->                                       
                </div>
            </div><!--/.row-->    
        </div><!--/.container-->
    </section><!--/#services-->

    <section id="portfolio">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Сүрөт галереясы</h2>
            </div>

            <div class="portfolio-items">
                <div class="portfolio-item">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{asset('images/channels/kyrgyzradio/ny.jpg')}}" alt="">
                        <div class="portfolio-info">
                            <h3>Галерея</h3>
                            <a class="preview" href="{{asset('images/channels/kyrgyzradio/ny.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{asset('images/channels/kyrgyzradio/ny.jpg')}}" alt="">
                        <div class="portfolio-info">
                            <h3>Галерея</h3>
                            <a class="preview" href="{{asset('images/channels/kyrgyzradio/ny.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{asset('images/channels/kyrgyzradio/ny.jpg')}}" alt="">
                        <div class="portfolio-info">
                            <h3>Галерея</h3>
                            <a class="preview" href="{{asset('images/channels/kyrgyzradio/ny.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{asset('images/channels/kyrgyzradio/ny.jpg')}}" alt="">
                        <div class="portfolio-info">
                            <h3>Галерея</h3>
                            <a class="preview" href="{{asset('images/channels/kyrgyzradio/ny.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{asset('images/channels/kyrgyzradio/ny.jpg')}}" alt="">
                        <div class="portfolio-info">
                            <h3>Галерея</h3>
                            <a class="preview" href="{{asset('images/channels/kyrgyzradio/ny.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{asset('images/channels/kyrgyzradio/ny.jpg')}}" alt="">
                        <div class="portfolio-info">
                            <h3>Галерея</h3>
                            <a class="preview" href="{{asset('images/channels/kyrgyzradio/ny.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{asset('images/channels/kyrgyzradio/ny.jpg')}}" alt="">
                        <div class="portfolio-info">
                            <h3>Галерея</h3>
                            <a class="preview" href="{{asset('images/channels/kyrgyzradio/ny.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{asset('images/channels/kyrgyzradio/ny.jpg')}}" alt="">
                        <div class="portfolio-info">
                            <h3>Галерея</h3>
                            <a class="preview" href="{{asset('images/channels/kyrgyzradio/ny.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
            </div>
        </div><!--/.container-->
    </section><!--/#portfolio-->

    <section id="about">
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Достук радиосу тууралуу</h2>
                <p class="text-center wow fadeInDown">Кыргыз Республикасынын Коомдук телерадиоберүү корпорациясынын “Достук” радиосу корпорациянын структуралык түзүлүшү болуп саналат. радионун урааны бул “Биримдигибиз ынтымакта!” же орус тилинде “Наша сила в единстве!” </p>
            </div>

            <div class="row">
                <div class="col-sm-6 wow fadeInLeft">
                    <h3 class="column-title">Промо</h3>
               
                    <div class="img-responsive">
                      <img src="{{asset('images/channels/dostuk.png')}}" alt="">
                    </div>
                    <p>Улуттар аралык ынтымакты бекемдөө максатында “Достук” радиосу ар этностун маданиятын, салтын угармандарга тартуулап келет. Маданият этносторду бириктирип, мамлекеттин ынтымагы, бейкуттугу үчүн чогуу күрөшүү деген ойду элге жеткирет. Албетте этникалык аралашууга алып келет. Ар этностун бир уй-було куруусу, Этностор аралык ынтымак бекем болуунун дагы бир жолу этностун маданияты, тили, салтынын сакталуусу да. </p>   
                </div>

                <div class="col-sm-6 wow fadeInRight">
                    <h3 class="column-title">Милдеттери:</h3>
                    <p>-жогорку сапаттагы радио программаларды жаратуу таанып-билуучу адабий, музыкалык көңүл-ачуучу программаларды радионун толкундарында турууну жүзөгө ашыруу; </p>
                    <p>-радиоугуучулар менен баарлашууну тереңдетүү жана кеңейтүү </p>
                    <p>-Кыргызстанда ынтымакты жана достук мамилелерди өнүктүрүүгө көмөктөшүү</p>
                    <p>-Кыргызстандын этникалык азчылыктарынын музыкасына багыт алуу, ата-мекендик аткаруучуларга колдоо көрсөтүү </p>
                    <p>-КР аракеттиги мыйзамдарына жана ушул жобого ылайык жарнамалык коммерциялык жана башка чарбалык ишмердүүлүктү жүргүзүү </p>
                    <p>-Кыргызстан көп улуттуу өлкө, жана бир нече этностор жашап, иштеп келет. Этностор аралык ынтымак бекем болуу учун КТРКнын Достук радиосу 2013- жылы ноябрь айында ачылды. </p>
                    <p>Достук радиосу 6 тилде программаларын жасап эфирге берип келет. Алар: орус, поляк, татар, түрк, украин, дунган тилдеринде. Бул тилдерде этностордун маданиятын, салтын, улуттук майрамдарын чагылдырган уктуруулар даярдалып келет. Уктуруулар төмөнкү тилдерде которуусу менен берилип келет</p> 
                </div>
            </div>
        </div>
    </section><!--/#about-->
        <section id="get-in-touch">
        <div class="container">
            <div class="section-header">            
                <h2 class="section-title text-center wow fadeInDown">Адрес</h2>
                <p class="text-center wow fadeInDown">Кыргызстан, город Бишкек, бульвар Молодой Гвардии, 59</p>
            </div>
            <div class="section-header">            
                <h2 class="section-title text-center wow fadeInDown">Телефон студии:</h2>
                <p class="text-center wow fadeInDown">0312 65 67 04 <br> 0312 65 66 10</p>
            </div>
            <div class="section-header">            
                <h2 class="section-title text-center wow fadeInDown">На волне 106.9 </h2>
            </div>            
        </div>
    </section><!--/#get-in-touch-->

</div>
<div class="container" style="padding: 0px; margin-top: 20px;">
    <footer class="footer">
        <div class="panel panel-default">
            <div class="panel-body">
           
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
    </footer>
</div>

<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/landing/owl.carousel.min.js"></script>
<script src="js/landing/mousescroll.js"></script>
<script src="js/landing/smoothscroll.js"></script>
<script src="js/landing/jquery.prettyPhoto.js"></script>
<script src="js/landing/jquery.isotope.min.js"></script>
<script src="js/landing/jquery.inview.min.js"></script>
<script src="js/landing/wow.min.js"></script>
<script src="js/landing/main.js"></script>
<script src="js/landing/jquery.js"></script>
<script src="js/landing/fixed.js"></script>
</body>
</html>