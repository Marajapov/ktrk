<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Главная страница</title>

    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/font-awesome.css"/>
    <link rel="stylesheet" href="filter/css/layout.css">
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" href="css/style.css"/>

</head>
<body class="balastan">

<div class="modal fade" id="tvModal" tabindex="-1" role="dialog" aria-labelledby="tvModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="tvModalLabel">Телеканалдар</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4 modal-block">
                        <div>
                            <a href="#">
                                <img src="images/channels/balastan.png" alt=""/>
                            </a>
                            <div class="options">
                                <a class="link" href="#">Баластан</a>
                                <span class="divider"></span>
                                <a class="live" href="#"><i class="fa fa-dot-circle-o"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 modal-block">
                       <div>
                           <a href="#">
                               <img src="images/channels/muztv.png" alt=""/>
                           </a>
                           <div class="options">
                               <a class="link" href="#">Музыка</a>
                               <span class="divider"></span>
                               <a class="live" href="#"><i class="fa fa-dot-circle-o"></i></a>
                           </div>
                       </div>
                    </div>
                    <div class="col-md-4 modal-block">
                        <div>
                            <a href="#">
                                <img src="images/channels/madaniyat.png" alt=""/>
                            </a>
                            <div class="options">
                                <a class="link" href="#">Маданият</a>
                                <span class="divider"></span>
                                <a class="live" href="#"><i class="fa fa-dot-circle-o"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="radioModal" tabindex="-1" role="dialog" aria-labelledby="radioModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="radioModalLabel">Радиостанциялар</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4 modal-block">
                        <a href="#">
                            <img src="images/channels/kg-radio.png" alt=""/>
                        </a>
                    </div>
                    <div class="col-md-4 modal-block">
                        <a href="#">
                            <img src="images/channels/1-radio.png" alt=""/>
                        </a>
                    </div>
                    <div class="col-md-4 modal-block">
                        <a href="#">
                            <img src="images/channels/dostuk.png" alt=""/>
                        </a>
                    </div>
                    <div class="col-md-4 modal-block">
                        <a href="#">
                            <img src="images/channels/min-kiyal.png" alt=""/>
                        </a>
                    </div>
                    <div class="col-md-4 modal-block">
                        <a href="#">
                            <img src="images/channels/baldar.png" alt=""/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid main-header">
    <div class="container">
        <div class="row">
            <header class="top-menu">
                <div class="top-header clearfix">
                    <div class="col-md-12 logo-block">
                        <div class="row">
                            <a class="logo" href="#">
                                <img src="images/channels/balastan.png" alt=""/>
                            </a>

                            <nav class="top-nav clearfix">
                                <ul class="clearfix">
                                    <li><a href="#">Башкы бет</a></li>
                                    <li>/</li>
                                    <li>
                                        <a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="100" data-close-others="false" role="button" aria-expanded="false">КТРК</a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Тарыхы</a></li>
                                            <li><a href="#">Жетекчилер</a></li>
                                            <li><a href="#">Стратегия</a></li>
                                            <li><a href="#">Нормативдик база</a></li>
                                            <li><a href="#">РРТЦ</a></li>
                                            <li><a href="#">Отчет</a></li>
                                        </ul>
                                    </li>
                                    <li>/</li>
                                    <li><a href="#">Видеопортал</a></li>
                                    <li>/</li>
                                    <li><a href="#">Телепрограмма</a></li>
                                    <li>/</li>
                                    <li><a href="#">Байкоочу кеңеш</a></li>
                                    <li>/</li>
                                    <li><a href="#">Редакциялык кеңешчи</a></li>
                                </ul>
                            </nav>

                            <ul class="soc">
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-odnoklassniki"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-vk"></i></a></li>
                            </ul>

                            <form class="form-search" action="" method="post">
                                <div class="form-group pull-right">
                                    <input type="text" class="form-control" placeholder="Издөө"/>
                                </div>

                                <button class="btn" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>

                            <button class="btn btn-danger btn-live">
                                <i class="fa fa-dot-circle-o"></i>
                                түз эфир
                            </button>

                            <div class="tv-radio">
                                <a id="tv" href="#" title="Телеканалдар" data-toggle="modal" data-target="#tvModal"><img src="images/tv.svg" alt=""/></a>
                                <div class="divider"></div>
                                <a href="#" title="Радиостанциялар" data-toggle="modal" data-target="#radioModal"><img src="images/radio.svg" alt=""/></a>
                            </div>

                            <div class="tv-radio hidden">
                                <div class="component component-tv">
                                    <!-- Start Nav Structure -->
                                    <button class="cn-button" id="cn-button-tv"><img src="images/tv.svg" alt=""/></button>
                                    <div class="cn-wrapper" id="cn-wrapper-tv">
                                        <ul>
                                            <li><a href="#"><img src="images/channels/balastan.svg" alt="Баластан"/></a></li>
                                            <li><a href="#"><img src="images/channels/muztv.png" alt="Муз ТВ"/></a></li>
                                            <li><a href="#"><img src="images/channels/madaniyat.png" alt="Маданият"/></a></li>
                                        </ul>
                                    </div>
                                    <div id="cn-overlay-tv" class="cn-overlay"></div>
                                    <!-- End Nav Structure -->
                                </div>
                                <div class="divider"></div>
                                <div class="component component-radio">
                                    <!-- Start Nav Structure -->
                                    <button class="cn-button" id="cn-button-radio"><img src="images/radio.svg" alt=""/></button>
                                    <div class="cn-wrapper" id="cn-wrapper-radio">
                                        <ul>
                                            <li><a href="#"><img src="images/channels/kg-radio.png" alt="Кыргыз радиосу"/></a></li>
                                            <li><a href="#"><img src="images/channels/1-radio.png" alt="Биринчи Радио"/></a></li>
                                            <li><a href="#"><img src="images/channels/dostuk.png" alt="Достук"/></a></li>
                                            <li><a href="#"><img src="images/channels/min-kiyal.png" alt="Мин Кыял"/></a></li>
                                            <li><a href="#"><img src="images/channels/baldar.png" alt="Балдар ФМ"/></a></li>
                                        </ul>
                                    </div>
                                    <div id="cn-overlay-radio" class="cn-overlay"></div>
                                    <!-- End Nav Structure -->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </header>
        </div>
    </div>
</div>

<a href="#" class="col-md-12 text-center ads">
    <img src="images/ads_1.jpg" alt=""/>
</a>

<div class="container">

    <div class="row">
        <section class="content clearfix">

            <div class="col-md-12">
                <div class="panel panel-default" style="background-color: transparent">
                    <div class="panel-heading">

                    </div>
                    <div class="panel-body">
                        <div class="col-md-12 block">
                            <div id="carousel">
                                <a href="http://google.com">
                                    <img src="images/anons/1.jpg" alt="" class="slide" />
                                </a>
                                <a href="http://google.com">
                                    <img src="images/anons/2.jpg" alt="" class="slide" />
                                </a>
                                <a href="http://google.com">
                                    <img src="images/anons/3.jpg" alt="" class="slide" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="bottom-right-block col-md-8">
                <div class="panel panel-default videoportal">
                    <div class="panel-heading">
                        <h3 class="panel-title"><span>Видеопортал</span></h3>
                    </div>
                    <div class="panel-body">
                        <ul id="filters" class="clearfix">
                            <li><span class="filter" data-filter="all-videos">Жалпы</span></li>
                            <li><span class="filter" data-filter="app">Телеберүүлөр</span></li>
                            <li><span class="filter" data-filter="card">Сериалдар</span></li>
                            <li><span class="filter" data-filter="icon">Көркөм тасма</span></li>
                            <li><span class="filter" data-filter="tele">Маанайшат</span></li>
                            <li><span class="filter" data-filter="web">Спорт</span></li>
                        </ul>

                        <div id="portfoliolist">

                            <div class="portfolio all-videos" data-cat="all-videos">
                                <div class="portfolio-wrapper">
                                    <img src="filter/img/portfolios/logo/1.jpg" alt="" />
                                    <div class="label">
                                        <div class="label-text">
                                            <a class="text-title">Эфир 14.08.2015</a>
                                            <span class="text-category">Телеберүүлөр</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio all-videos" data-cat="all-videos">
                                <div class="portfolio-wrapper">
                                    <img src="filter/img/portfolios/logo/1.jpg" alt="" />
                                    <div class="label">
                                        <div class="label-text">
                                            <a class="text-title">Эфир 14.08.2015</a>
                                            <span class="text-category">Телеберүүлөр</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio all-videos" data-cat="all-videos">
                                <div class="portfolio-wrapper">
                                    <img src="filter/img/portfolios/logo/1.jpg" alt="" />
                                    <div class="label">
                                        <div class="label-text">
                                            <a class="text-title">Эфир 14.08.2015</a>
                                            <span class="text-category">Телеберүүлөр</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio all-videos" data-cat="all-videos">
                                <div class="portfolio-wrapper">
                                    <img src="filter/img/portfolios/logo/1.jpg" alt="" />
                                    <div class="label">
                                        <div class="label-text">
                                            <a class="text-title">Эфир 14.08.2015</a>
                                            <span class="text-category">Телеберүүлөр</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio all-videos" data-cat="all-videos">
                                <div class="portfolio-wrapper">
                                    <img src="filter/img/portfolios/logo/1.jpg" alt="" />
                                    <div class="label">
                                        <div class="label-text">
                                            <a class="text-title">Эфир 14.08.2015</a>
                                            <span class="text-category">Телеберүүлөр</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio all-videos" data-cat="all-videos">
                                <div class="portfolio-wrapper">
                                    <img src="filter/img/portfolios/logo/1.jpg" alt="" />
                                    <div class="label">
                                        <div class="label-text">
                                            <a class="text-title">Эфир 14.08.2015</a>
                                            <span class="text-category">Телеберүүлөр</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio all-videos" data-cat="all-videos">
                                <div class="portfolio-wrapper">
                                    <img src="filter/img/portfolios/logo/1.jpg" alt="" />
                                    <div class="label">
                                        <div class="label-text">
                                            <a class="text-title">Эфир 14.08.2015</a>
                                            <span class="text-category">Телеберүүлөр</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio all-videos" data-cat="all-videos">
                                <div class="portfolio-wrapper">
                                    <img src="filter/img/portfolios/logo/1.jpg" alt="" />
                                    <div class="label">
                                        <div class="label-text">
                                            <a class="text-title">Эфир 14.08.2015</a>
                                            <span class="text-category">Телеберүүлөр</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio all-videos" data-cat="all-videos">
                                <div class="portfolio-wrapper">
                                    <img src="filter/img/portfolios/logo/1.jpg" alt="" />
                                    <div class="label">
                                        <div class="label-text">
                                            <a class="text-title">Эфир 14.08.2015</a>
                                            <span class="text-category">Телеберүүлөр</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>


                            <div class="portfolio tele" data-cat="tele">
                                <div class="portfolio-wrapper">
                                    <img src="filter/img/portfolios/logo/5.jpg" alt="" />
                                    <div class="label">
                                        <div class="label-text">
                                            <a class="text-title">Эфир 14.08.2015</a>
                                            <span class="text-category">Телеберүүлөр</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio tele" data-cat="tele">
                                <div class="portfolio-wrapper">
                                    <img src="filter/img/portfolios/logo/5.jpg" alt="" />
                                    <div class="label">
                                        <div class="label-text">
                                            <a class="text-title">Эфир 14.08.2015</a>
                                            <span class="text-category">Телеберүүлөр</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio tele" data-cat="tele">
                                <div class="portfolio-wrapper">
                                    <img src="filter/img/portfolios/logo/5.jpg" alt="" />
                                    <div class="label">
                                        <div class="label-text">
                                            <a class="text-title">Эфир 14.08.2015</a>
                                            <span class="text-category">Телеберүүлөр</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio tele" data-cat="tele">
                                <div class="portfolio-wrapper">
                                    <img src="filter/img/portfolios/logo/5.jpg" alt="" />
                                    <div class="label">
                                        <div class="label-text">
                                            <a class="text-title">Эфир 14.08.2015</a>
                                            <span class="text-category">Телеберүүлөр</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio tele" data-cat="tele">
                                <div class="portfolio-wrapper">
                                    <img src="filter/img/portfolios/logo/5.jpg" alt="" />
                                    <div class="label">
                                        <div class="label-text">
                                            <a class="text-title">Эфир 14.08.2015</a>
                                            <span class="text-category">Телеберүүлөр</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio tele" data-cat="tele">
                                <div class="portfolio-wrapper">
                                    <img src="filter/img/portfolios/logo/5.jpg" alt="" />
                                    <div class="label">
                                        <div class="label-text">
                                            <a class="text-title">Эфир 14.08.2015</a>
                                            <span class="text-category">Телеберүүлөр</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio tele" data-cat="tele">
                                <div class="portfolio-wrapper">
                                    <img src="filter/img/portfolios/logo/5.jpg" alt="" />
                                    <div class="label">
                                        <div class="label-text">
                                            <a class="text-title">Эфир 14.08.2015</a>
                                            <span class="text-category">Телеберүүлөр</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio tele" data-cat="tele">
                                <div class="portfolio-wrapper">
                                    <img src="filter/img/portfolios/logo/5.jpg" alt="" />
                                    <div class="label">
                                        <div class="label-text">
                                            <a class="text-title">Эфир 14.08.2015</a>
                                            <span class="text-category">Телеберүүлөр</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio tele" data-cat="tele">
                                <div class="portfolio-wrapper">
                                    <img src="filter/img/portfolios/logo/5.jpg" alt="" />
                                    <div class="label">
                                        <div class="label-text">
                                            <a class="text-title">Эфир 14.08.2015</a>
                                            <span class="text-category">Телеберүүлөр</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio app" data-cat="app">
                                <div class="portfolio-wrapper">
                                    <img src="filter/img/portfolios/app/1.jpg" alt="" />
                                    <div class="label">
                                        <div class="label-text">
                                            <a class="text-title">Visual Infography</a>
                                            <span class="text-category">APP</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio app" data-cat="app">
                                <div class="portfolio-wrapper">
                                    <img src="filter/img/portfolios/app/1.jpg" alt="" />
                                    <div class="label">
                                        <div class="label-text">
                                            <a class="text-title">Visual Infography</a>
                                            <span class="text-category">APP</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio app" data-cat="app">
                                <div class="portfolio-wrapper">
                                    <img src="filter/img/portfolios/app/1.jpg" alt="" />
                                    <div class="label">
                                        <div class="label-text">
                                            <a class="text-title">Visual Infography</a>
                                            <span class="text-category">APP</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio app" data-cat="app">
                                <div class="portfolio-wrapper">
                                    <img src="filter/img/portfolios/app/1.jpg" alt="" />
                                    <div class="label">
                                        <div class="label-text">
                                            <a class="text-title">Visual Infography</a>
                                            <span class="text-category">APP</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio app" data-cat="app">
                                <div class="portfolio-wrapper">
                                    <img src="filter/img/portfolios/app/1.jpg" alt="" />
                                    <div class="label">
                                        <div class="label-text">
                                            <a class="text-title">Visual Infography</a>
                                            <span class="text-category">APP</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio app" data-cat="app">
                                <div class="portfolio-wrapper">
                                    <img src="filter/img/portfolios/app/1.jpg" alt="" />
                                    <div class="label">
                                        <div class="label-text">
                                            <a class="text-title">Visual Infography</a>
                                            <span class="text-category">APP</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio app" data-cat="app">
                                <div class="portfolio-wrapper">
                                    <img src="filter/img/portfolios/app/1.jpg" alt="" />
                                    <div class="label">
                                        <div class="label-text">
                                            <a class="text-title">Visual Infography</a>
                                            <span class="text-category">APP</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio app" data-cat="app">
                                <div class="portfolio-wrapper">
                                    <img src="filter/img/portfolios/app/1.jpg" alt="" />
                                    <div class="label">
                                        <div class="label-text">
                                            <a class="text-title">Visual Infography</a>
                                            <span class="text-category">APP</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio app" data-cat="app">
                                <div class="portfolio-wrapper">
                                    <img src="filter/img/portfolios/app/1.jpg" alt="" />
                                    <div class="label">
                                        <div class="label-text">
                                            <a class="text-title">Visual Infography</a>
                                            <span class="text-category">APP</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio web" data-cat="web">
                                <div class="portfolio-wrapper">
                                    <img src="filter/img/portfolios/web/4.jpg" alt="" />
                                    <div class="label">
                                        <div class="label-text">
                                            <a class="text-title">Sonor's Design</a>
                                            <span class="text-category">Web design</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio web" data-cat="web">
                                <div class="portfolio-wrapper">
                                    <img src="filter/img/portfolios/web/4.jpg" alt="" />
                                    <div class="label">
                                        <div class="label-text">
                                            <a class="text-title">Sonor's Design</a>
                                            <span class="text-category">Web design</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio web" data-cat="web">
                                <div class="portfolio-wrapper">
                                    <img src="filter/img/portfolios/web/4.jpg" alt="" />
                                    <div class="label">
                                        <div class="label-text">
                                            <a class="text-title">Sonor's Design</a>
                                            <span class="text-category">Web design</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio web" data-cat="web">
                                <div class="portfolio-wrapper">
                                    <img src="filter/img/portfolios/web/4.jpg" alt="" />
                                    <div class="label">
                                        <div class="label-text">
                                            <a class="text-title">Sonor's Design</a>
                                            <span class="text-category">Web design</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio web" data-cat="web">
                                <div class="portfolio-wrapper">
                                    <img src="filter/img/portfolios/web/4.jpg" alt="" />
                                    <div class="label">
                                        <div class="label-text">
                                            <a class="text-title">Sonor's Design</a>
                                            <span class="text-category">Web design</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio web" data-cat="web">
                                <div class="portfolio-wrapper">
                                    <img src="filter/img/portfolios/web/4.jpg" alt="" />
                                    <div class="label">
                                        <div class="label-text">
                                            <a class="text-title">Sonor's Design</a>
                                            <span class="text-category">Web design</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio web" data-cat="web">
                                <div class="portfolio-wrapper">
                                    <img src="filter/img/portfolios/web/4.jpg" alt="" />
                                    <div class="label">
                                        <div class="label-text">
                                            <a class="text-title">Sonor's Design</a>
                                            <span class="text-category">Web design</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio web" data-cat="web">
                                <div class="portfolio-wrapper">
                                    <img src="filter/img/portfolios/web/4.jpg" alt="" />
                                    <div class="label">
                                        <div class="label-text">
                                            <a class="text-title">Sonor's Design</a>
                                            <span class="text-category">Web design</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio web" data-cat="web">
                                <div class="portfolio-wrapper">
                                    <img src="filter/img/portfolios/web/4.jpg" alt="" />
                                    <div class="label">
                                        <div class="label-text">
                                            <a class="text-title">Sonor's Design</a>
                                            <span class="text-category">Web design</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio card" data-cat="card">
                                <div class="portfolio-wrapper">
                                    <img src="filter/img/portfolios/card/1.jpg" alt="" />
                                    <div class="label">
                                        <div class="label-text">
                                            <a class="text-title">Typography Company</a>
                                            <span class="text-category">Business card</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio card" data-cat="card">
                                <div class="portfolio-wrapper">
                                    <img src="filter/img/portfolios/card/1.jpg" alt="" />
                                    <div class="label">
                                        <div class="label-text">
                                            <a class="text-title">Typography Company</a>
                                            <span class="text-category">Business card</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio card" data-cat="card">
                                <div class="portfolio-wrapper">
                                    <img src="filter/img/portfolios/card/1.jpg" alt="" />
                                    <div class="label">
                                        <div class="label-text">
                                            <a class="text-title">Typography Company</a>
                                            <span class="text-category">Business card</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio card" data-cat="card">
                                <div class="portfolio-wrapper">
                                    <img src="filter/img/portfolios/card/1.jpg" alt="" />
                                    <div class="label">
                                        <div class="label-text">
                                            <a class="text-title">Typography Company</a>
                                            <span class="text-category">Business card</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio card" data-cat="card">
                                <div class="portfolio-wrapper">
                                    <img src="filter/img/portfolios/card/1.jpg" alt="" />
                                    <div class="label">
                                        <div class="label-text">
                                            <a class="text-title">Typography Company</a>
                                            <span class="text-category">Business card</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio card" data-cat="card">
                                <div class="portfolio-wrapper">
                                    <img src="filter/img/portfolios/card/1.jpg" alt="" />
                                    <div class="label">
                                        <div class="label-text">
                                            <a class="text-title">Typography Company</a>
                                            <span class="text-category">Business card</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio card" data-cat="card">
                                <div class="portfolio-wrapper">
                                    <img src="filter/img/portfolios/card/1.jpg" alt="" />
                                    <div class="label">
                                        <div class="label-text">
                                            <a class="text-title">Typography Company</a>
                                            <span class="text-category">Business card</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio card" data-cat="card">
                                <div class="portfolio-wrapper">
                                    <img src="filter/img/portfolios/card/1.jpg" alt="" />
                                    <div class="label">
                                        <div class="label-text">
                                            <a class="text-title">Typography Company</a>
                                            <span class="text-category">Business card</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio card" data-cat="card">
                                <div class="portfolio-wrapper">
                                    <img src="filter/img/portfolios/card/1.jpg" alt="" />
                                    <div class="label">
                                        <div class="label-text">
                                            <a class="text-title">Typography Company</a>
                                            <span class="text-category">Business card</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio icon" data-cat="icon">
                                <div class="portfolio-wrapper">
                                    <img src="filter/img/portfolios/icon/4.jpg" alt="" />
                                    <div class="label">
                                        <div class="label-text">
                                            <a class="text-title">Domino's Pizza</a>
                                            <span class="text-category">Icon</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio icon" data-cat="icon">
                                <div class="portfolio-wrapper">
                                    <img src="filter/img/portfolios/icon/4.jpg" alt="" />
                                    <div class="label">
                                        <div class="label-text">
                                            <a class="text-title">Domino's Pizza</a>
                                            <span class="text-category">Icon</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio icon" data-cat="icon">
                                <div class="portfolio-wrapper">
                                    <img src="filter/img/portfolios/icon/4.jpg" alt="" />
                                    <div class="label">
                                        <div class="label-text">
                                            <a class="text-title">Domino's Pizza</a>
                                            <span class="text-category">Icon</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio icon" data-cat="icon">
                                <div class="portfolio-wrapper">
                                    <img src="filter/img/portfolios/icon/4.jpg" alt="" />
                                    <div class="label">
                                        <div class="label-text">
                                            <a class="text-title">Domino's Pizza</a>
                                            <span class="text-category">Icon</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio icon" data-cat="icon">
                                <div class="portfolio-wrapper">
                                    <img src="filter/img/portfolios/icon/4.jpg" alt="" />
                                    <div class="label">
                                        <div class="label-text">
                                            <a class="text-title">Domino's Pizza</a>
                                            <span class="text-category">Icon</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio icon" data-cat="icon">
                                <div class="portfolio-wrapper">
                                    <img src="filter/img/portfolios/icon/4.jpg" alt="" />
                                    <div class="label">
                                        <div class="label-text">
                                            <a class="text-title">Domino's Pizza</a>
                                            <span class="text-category">Icon</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio icon" data-cat="icon">
                                <div class="portfolio-wrapper">
                                    <img src="filter/img/portfolios/icon/4.jpg" alt="" />
                                    <div class="label">
                                        <div class="label-text">
                                            <a class="text-title">Domino's Pizza</a>
                                            <span class="text-category">Icon</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio icon" data-cat="icon">
                                <div class="portfolio-wrapper">
                                    <img src="filter/img/portfolios/icon/4.jpg" alt="" />
                                    <div class="label">
                                        <div class="label-text">
                                            <a class="text-title">Domino's Pizza</a>
                                            <span class="text-category">Icon</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio icon" data-cat="icon">
                                <div class="portfolio-wrapper">
                                    <img src="filter/img/portfolios/icon/4.jpg" alt="" />
                                    <div class="label">
                                        <div class="label-text">
                                            <a class="text-title">Domino's Pizza</a>
                                            <span class="text-category">Icon</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <footer>
                            <a href="#">
                                <span>Архив <i class="fa fa-arrow-circle-right"></i></span>
                            </a>
                        </footer>

                    </div>
                </div>
            </div>

            <div class="bottom-left-block col-md-4">
                <div class="panel panel-default latest-news">
                    <div class="panel-heading">
                        <h3 class="panel-title"><span>Акыркы жаңылыктар</span></h3>
                    </div>
                    <div class="panel-body">
                        <ul class="list-group">
                            <li class="list-group-item news-item">
                                <div class="news-body clearfix">
                                    <a href="#">
                                        <p class="news-title">В Бишкеке проходит внеочередной съезд партии "Республика Ата-Журт"</p>
                                        <span class="ctg"><img src="images/logo_notext.png" alt=""/></span>
                                    </a>
                                </div>
                                <div class="news-adds clearfix">
                                    <a href="#" class="">Политика</a>
                                    <span class="news-file"><i class="fa fa-play-circle-o"></i></span>

                                    <span class="news-time pull-right">10:10</span>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                            <li class="list-group-item news-item">
                                <div class="news-body clearfix">
                                    <a href="#">
                                        <p class="news-title">В Бишкеке проходит внеочередной съезд партии "Республика Ата-Журт"</p>
                                        <span class="ctg"><img src="images/logo_notext.png" alt=""/></span>
                                    </a>
                                </div>
                                <div class="news-adds clearfix">
                                    <a href="#">Политика</a>
                                    <span class="news-file"><i class="fa fa-image"></i></span>

                                    <span class="news-time pull-right">10:10</span>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                            <li class="list-group-item news-item">
                                <div class="news-body clearfix">
                                    <a href="#">
                                        <p class="news-title">В Бишкеке проходит внеочередной съезд партии "Республика Ата-Журт"</p>
                                        <span class="ctg"><img src="images/logo_notext.png" alt=""/></span>
                                    </a>
                                </div>
                                <div class="news-adds clearfix">
                                    <a href="#" class="">Политика</a>
                                    <span class="news-file"><i class="fa fa-play-circle-o"></i></span>

                                    <span class="news-time pull-right">10:10</span>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                            <li class="list-group-item news-item">
                                <div class="news-body clearfix">
                                    <a href="#">
                                        <p class="news-title">В Бишкеке проходит внеочередной съезд партии "Республика Ата-Журт"</p>
                                        <span class="ctg"><img src="images/logo_notext.png" alt=""/></span>
                                    </a>
                                </div>
                                <div class="news-adds clearfix">
                                    <a href="#" class="">Политика</a>
                                    <span class="news-file"><i class="fa fa-play-circle-o"></i></span>

                                    <span class="news-time pull-right">10:10</span>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                            <li class="list-group-item news-item">
                                <div class="news-body clearfix">
                                    <a href="#">
                                        <p class="news-title">В Бишкеке проходит внеочередной съезд партии "Республика Ата-Журт"</p>
                                        <span class="ctg"><img src="images/logo_notext.png" alt=""/></span>
                                    </a>
                                </div>
                                <div class="news-adds clearfix">
                                    <a href="#" class="">Политика</a>
                                    <span class="news-file"><i class="fa fa-play-circle-o"></i></span>

                                    <span class="news-time pull-right">10:10</span>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                            <li class="list-group-item news-item">
                                <div class="news-body clearfix">
                                    <a href="#">
                                        <p class="news-title">В Бишкеке проходит внеочередной съезд партии "Республика Ата-Журт"</p>
                                        <span class="ctg"><img src="images/logo_notext.png" alt=""/></span>
                                    </a>
                                </div>
                                <div class="news-adds clearfix">
                                    <a href="#" class="">Политика</a>
                                    <span class="news-file"><i class="fa fa-play-circle-o"></i></span>

                                    <span class="news-time pull-right">10:10</span>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                        </ul>

                        <footer>
                            <a href="#">
                                <span>Бардык жаңылыктар <i class="fa fa-arrow-circle-right"></i></span>
                            </a>
                        </footer>
                    </div>
                </div>

            </div>

            <div class="col-md-12">
                <div class="panel panel-default panel-carousel">
                    <div class="panel-heading">
                        <h3 class="panel-title"><span>Фотогалерея</span></h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-12">
                            <div class="carousel-slick">
                                <div class="col-md-4"><a href="#"><img src="images/gallery/001.jpg" alt=""/></a></div>
                                <div class="col-md-4"><a href="#"><img src="images/gallery/002.jpg" alt=""/></a></div>
                                <div class="col-md-4"><a href="#"><img src="images/gallery/003.jpg" alt=""/></a></div>
                                <div class="col-md-4"><a href="#"><img src="images/gallery/004.jpg" alt=""/></a></div>
                                <div class="col-md-4"><a href="#"><img src="images/gallery/005.jpg" alt=""/></a></div>
                                <div class="col-md-4"><a href="#"><img src="images/gallery/006.jpg" alt=""/></a></div>
                                <div class="col-md-4"><a href="#"><img src="images/gallery/007.jpg" alt=""/></a></div>
                                <div class="col-md-4"><a href="#"><img src="images/gallery/008.jpg" alt=""/></a></div>
                                <div class="col-md-4"><a href="#"><img src="images/gallery/009.jpg" alt=""/></a></div>
                                <div class="col-md-4"><a href="#"><img src="images/gallery/010.jpg" alt=""/></a></div>
                                <div class="col-md-4"><a href="#"><img src="images/gallery/011.jpg" alt=""/></a></div>
                                <div class="col-md-4"><a href="#"><img src="images/gallery/012.jpg" alt=""/></a></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>
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

<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>


<script type="text/javascript" src="filter/js/jquery.easing.min.js"></script>
<script type="text/javascript" src="filter/js/jquery.mixitup.min.js"></script>

<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
<script type="text/javascript" src="js/jquery.roundabout.js"></script>

<script>
    $('.carousel-slick').slick({
        infinite: true,
        slidesToShow: 6,
        slidesToScroll: 1
    });
</script>

<script type="text/javascript">
    (function($) {

        var $descriptions = $('#carousel-descriptions').children('li'),
                $controls = $('#carousel-controls').find('span'),
                $carousel = $('#carousel')
                        .roundabout({childSelector:"a", minOpacity:1, autoplay:false})
                        .on('focus', 'img', function() {
                            var slideNum = $carousel.roundabout("getChildInFocus");

                            $descriptions.add($controls).removeClass('current');
                            $($descriptions.get(slideNum)).addClass('current');
                            $($controls.get(slideNum)).addClass('current');
                        });

        $controls.on('click dblclick', function() {
            var slideNum = -1,
                    i = 0, len = $controls.length;

            for (; i<len; i++) {
                if (this === $controls.get(i)) {
                    slideNum = i;
                    break;
                }
            }

            if (slideNum >= 0) {
                $controls.removeClass('current');
                $(this).addClass('current');
                $carousel.roundabout('animateToChild', slideNum);
            }
        });
    }(jQuery));
</script>


<script type="text/javascript">
    $(function () {

        var filterList = {

            init: function () {

                // MixItUp plugin
                // http://mixitup.io
                $('#portfoliolist').mixitup({
                    showOnLoad: 'all-videos',
                    targetSelector: '.portfolio',
                    filterSelector: '.filter',
                    effects: ['fade'],
                    easing: 'snap',
                    // call the hover effect
                    onMixEnd: filterList.hoverEffect()
                });

            },

            hoverEffect: function () {

                // Simple parallax effect
                $('#portfoliolist .portfolio').hover(
                        function () {
                            $(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
                            $(this).find('img').stop().animate({top: -40}, 250, 'easeOutQuad');
                        },
                        function () {
                            $(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
                            $(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');
                        }
                );

            }

        };
        // Run the show!
        filterList.init();
    });
</script>
</body>
</html>