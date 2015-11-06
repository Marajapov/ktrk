<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Главная страница</title>

    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/font-awesome.css"/>
    <link rel="stylesheet" href="filter/css/layout.css">
    <link rel="stylesheet"  href="css/gallery/component.css" />
    <script src="js/gallery/modernizr.custom.js"></script>
    <link rel="stylesheet" href="css/style.css"/>

        <!-- <link rel="stylesheet" href="css/audio/reset.css" />
       <link rel="stylesheet" href="css/audio/main.css" /> -->
       <link rel="stylesheet"  href="css/lightslider.css"/>

       <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
       <script src="js/lightslider.js"></script>
       <script>
       	 $(document).ready(function() {
   			$("#content-slider").lightSlider({
                   loop:true,
                   keyPress:true
               });
               $('#image-gallery').lightSlider({
                   gallery:true,
                   item:1,
                   thumbItem:9,
                   slideMargin: 0,
                   speed:500,
                   auto:true,
                   loop:true,
                   onSliderLoad: function() {
                       $('#image-gallery').removeClass('cS-hidden');
                   }
               });
   		});
       </script>

</head>
<body class="music">

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
                                    <img src="images/channels/balastan.jpg" alt=""/>
                                </a>
                                <div class="options">
                                    <i class="fa fa-external-link-square"></i>
                                    <span class="divider"></span>
                                    <i class="fa fa-dot-circle-o"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 modal-block">
                            <a href="#">
                                <img src="images/channels/muztv.jpg" alt=""/>
                            </a>
                        </div>
                        <div class="col-md-4 modal-block">
                            <a href="#">
                                <img src="images/channels/madaniyat.jpg" alt=""/>
                            </a>
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
                                    <img src="images/channels/muztv.png" alt=""/>
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
                                    <a href="#">
                                        <img src="images/anons/1.jpg" alt="" class="slide" />
                                    </a>
                                    <a href="#">
                                        <img src="images/anons/2.jpg" alt="" class="slide" />
                                    </a>
                                    <a href="#">
                                        <img src="images/anons/3.jpg" alt="" class="slide" />
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="bottom-right-block col-md-8">
                    <div class="panel panel-default videoportal hit-parad">
                        <div class="panel-heading">
                            <h3 class="panel-title"><span> - Видеопортал - </span></h3>
                        </div>
                        <div class="panel-body">
                            <ul id="filters" class="clearfix">
                                <li><span class="filter" data-filter="all-videos"><i class="fa fa-play"></i>Жалпы</span></li>
                                <li><span class="filter" data-filter="new"><i class="fa fa-bell-o"></i>Жаңылар</span></li>
                                <li><span class="filter" data-filter="hitparad"><i class="fa fa-star-o"></i>Хит парад</span></li>
                            </ul>

                            <div id="portfoliolist">

                                <div class="portfolio all-videos new" data-cat="all-videos new">
                                    <div class="music-clip" id="clip-#" data-image="images/anons/3.jpg" data-video="#" data-counter="" data-age="">

                                        <a href="#" data-id="#" class="item-img"><img src="https://pp.vk.me/c411523/v411523588/80c5/frGFAOC5RpE.jpg" alt="Бегиш"></a>
                                        <div class="item-desc">
                                            <ul><a href="#">
                                                <li class="item-artist">Бегиш жана Баястан</li>
                                                <li class="item-song">Айтчы, айтпайсыңбы эми</li>
                                            </a>
                                        </ul>
                                    </div>
                                    <div class="isnew">Жаңы!</div>
                                    <div class="views"><i class="fa fa-eye"></i>&nbsp;2351</div>
                                </div>
                            </div>

                            <div class="portfolio all-videos hitparad" data-cat="all-videos hitparad">
                                <div class="music-clip" id="clip-#" data-image="images/anons/3.jpg" data-video="#" data-counter="" data-age="">

                                    <a href="#" data-id="#" class="item-img"><img src="http://i.ytimg.com/vi/Kwc5i5qD88o/maxresdefault.jpg" alt="Мирбек Атабеков"></a>
                                    <div class="item-desc">
                                        <ul><a href="#">
                                            <li class="item-artist">Атабеков Мирбек</li>
                                            <li class="item-song">Мөлмөлүм</li>
                                        </a>
                                    </ul>
                                </div>
                                <div class="ishit">Хит!</div>
                                <div class="views"><i class="fa fa-eye"></i>&nbsp;2351</div>
                            </div>
                        </div>

                        <div class="portfolio all-videos" data-cat="all-videos">
                            <div class="music-clip" id="clip-#" data-image="images/anons/3.jpg" data-video="#" data-counter="" data-age="">

                                <a href="#" data-id="#" class="item-img"><img src="http://data.vb.kg/image/big/2012-11-01_03-22-47_527900.jpg" alt="Калыков Гүлжигит"></a>
                                <div class="item-desc">
                                    <ul><a href="#">
                                        <li class="item-artist">Калыков Гүлжигит</li>
                                        <li class="item-song">Жамгыр төктү</li>
                                    </a>
                                </ul>
                            </div>
                            <div class="ishit">Хит!</div>
                            <div class="views"><i class="fa fa-eye"></i>&nbsp;2351</div>
                        </div>
                    </div>

                    <div class="portfolio all-videos" data-cat="all-videos">
                        <div class="music-clip" id="clip-#" data-image="images/anons/3.jpg" data-video="#" data-counter="" data-age="">

                            <a href="#" data-id="#" class="item-img"><img src="http://tumar.fm/uploads/posts/2014-10/1413603938_screenshot_81.png" alt="Анжелика"></a>
                            <div class="item-desc">
                                <ul><a href="#">
                                    <li class="item-artist">Анжелика</li>
                                    <li class="item-song">Менин сүйүүм</li>
                                </a>
                            </ul>
                        </div>
                        <div class="ishit">Хит!</div>
                        <div class="views"><i class="fa fa-eye"></i>&nbsp;2351</div>
                    </div>
                </div>

                <div class="portfolio all-videos hitparad" data-cat="all-videos hitparad">
                    <div class="music-clip" id="clip-#" data-image="images/anons/3.jpg" data-video="#" data-counter="" data-age="">

                        <a href="#" data-id="#" class="item-img"><img src="http://tumar.fm/uploads/posts/2015-02/1424795870_screenshot_2.png" alt="Арсен"></a>
                        <div class="item-desc">
                            <ul><a href="#">
                                <li class="item-artist">Арсен</li>
                                <li class="item-song">Тагдырым сага жазганда</li>
                            </a>
                        </ul>

                    </div>

                    <div class="views"><i class="fa fa-eye"></i>&nbsp;2351</div>
                </div>
            </div>

            <div class="portfolio all-videos" data-cat="all-videos">
                <div class="music-clip" id="clip-#" data-image="images/anons/3.jpg" data-video="#" data-counter="" data-age="">

                    <a href="#" data-id="#" class="item-img"><img src="http://data.vb.kg/kyrgyz/image/original/2015-03-12_12-25-35_386407_w.jpg" alt="Нурзат Садыкова"></a>
                    <div class="item-desc">
                        <ul><a href="#">
                            <li class="item-artist">Нурзат Садыкова</li>
                            <li class="item-song">Балалык</li>
                        </a>
                    </ul>
                </div>
                <div class="ishit">Хит!</div>
                <div class="views"><i class="fa fa-eye"></i>&nbsp;2351</div>
            </div>
        </div>

        <div class="portfolio all-videos new" data-cat="all-videos new">
            <div class="music-clip" id="clip-#" data-image="images/anons/3.jpg" data-video="#" data-counter="" data-age="">

                <a href="#" data-id="#" class="item-img"><img src="http://i.ytimg.com/vi/VR32pj_ulW8/maxresdefault.jpg" alt="НОН СТОП"></a>
                <div class="item-desc">
                    <ul><a href="#">
                        <li class="item-artist">НОН СТОП дуети</li>
                        <li class="item-song">Кыздар ай, балдар ай</li>
                    </a>
                </ul>
            </div>
            <div class="isnew">Жаңы!</div>
            <div class="views"><i class="fa fa-eye"></i>&nbsp;2351</div>
        </div>
    </div>

    <div class="portfolio all-videos hitparad" data-cat="all-videos hitparad">
        <div class="music-clip" id="clip-#" data-image="images/anons/3.jpg" data-video="#" data-counter="" data-age="">

            <a href="#" data-id="#" class="item-img"><img src="http://img.youtube.com/vi/_oPnqszMoHM/mqdefault.jpg" alt="Борбиев Бек"></a>
            <div class="item-desc">
                <ul><a href="#">
                    <li class="item-artist">Борбиев Бек</li>
                    <li class="item-song">Тамчы шүүдүрүм</li>
                </a>
            </ul>
        </div>
        <div class="ishit">Хит!</div>
        <div class="views"><i class="fa fa-eye"></i>&nbsp;2351</div>
    </div>
</div>

<div class="portfolio all-videos" data-cat="all-videos">
    <div class="music-clip" id="clip-#" data-image="images/anons/3.jpg" data-video="#" data-counter="" data-age="">

        <a href="#" data-id="#" class="item-img"><img src="http://tumar.fm/uploads/posts/2014-08/1407962381_screenshot_4.png" alt="Садыралиев Султан"></a>
        <div class="item-desc">
            <ul><a href="#">
                <li class="item-artist">Садыралиев Султан</li>
                <li class="item-song">Кыялкеч</li>
            </a>
        </ul>
    </div>
    <div class="ishit">Хит!</div>
    <div class="views"><i class="fa fa-eye"></i>&nbsp;2351</div>
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

<div class="panel panel-default muzarticle hit-parad">
    <div class="panel-heading">
        <h3 class="panel-title"><span> - Жаңылыктар - </span></h3>
    </div>
    <div class="panel-body">
        <div class="col-md-12 clearfix">
            <h2>Кыргызская келин Оливия!</h2>

            <div class="muzimg">
                <img src="images/2.jpg" alt="" data-toggle="tooltip" data-placement="top" title="Бул жөн гана сүрөт эмес">
                <p>
                    <audio preload="auto" controls>
                        <source src="css/audio/audio.mp3" />
                        <source src="css/audio/audio.ogg" />
                        <source src="css/audio/audio.wav" />
                    </audio>
                </p>
                <div class="audioinfo">
                    <p><h4>Тема:</h4><h5>Кыргыз келини Оливия</h5></p>
                    <p><h4>Алып баруучу:</h4><h5>Кыргыз кызы Кыргызгүл</h5></p>
                    <p><h4>Маектешкен:</h4><h5>Оливия Браун</h5></p>
                    <p><h4>Аудиону көчүрүп алуу:</h4><a style="text-decoration:underline" title="Маустун оң жагын басып көчүрүп алсаңыз болот" href="css/audio/audio.mp3" >Бактылуу Оливия <i class="fa fa-download"></i></a></p>
                </div>
            </div>



            <article>
                <p>
                    Межнациональные браки в мире – тема давняя и уже привычная. Однако некоторые союзы разных этносов и культур все же еще способны удивить. Как например, история жительницы Пенсильвании Оливия Стивенс, которая вышла замуж за кыргызстанца Каната и стала настоящей кыргызской келинкой. Предлагаем вам узнать, как необычная влюбленная пара живет вместе.</p>

                    <p>Канат несколько лет работает гидом, именно во время одного из туристических походов он встретился со своей будущей супругой Оливией.</p>


                    <blockquote> «Канат предложил не только руку, но и целый комплект» </blockquote>

                    <p>История Каната и Оливии начиналась просто - сначала общие встречи с друзьями и проводы домой, потом романтические отношения. Канат признается, что не делал предложение руки и сердца на закате солнца как в американских фильмах, он просто объяснил Оливии, что у него нет времени на пустые отношения и ему пора создавать семью.</p>

                    <p>По словам Оливии, разговор с Канатом был открытый, он откровенно сказал, что хочет жениться:</p>
                    <blockquote>- Он единственный сын и живет с мамой. И это означало, что если я выхожу замуж за Каната, мы будем жить в Кыргызстане. Он предложил мне не только руку, но и целый комплект (смеется). Откровенность дала мне возможность оценить и выбрать. Я ведь даже не думала, что выйду за муж за кыргызстанца. Канат покорил меня своими личными качествами, он откровенный человек и с ним не бывает скучно. Он отличный муж, относится ко мне как к человеку, это очень редко можно встретить. Вся семья такая, они золотые. Это был для меня важный фактор.</blockquote>
                </article>

                <div class="photoslider">
                      <div class="item">
                          <div class="clearfix" style="max-width:100%;">
                              <ul id="image-gallery" class="gallery list-unstyled cS-hidden img-list">
                                  <li data-thumb="images/logo_notext.png">
                                      <img src="images/logo_notext.png" />
                                      <span class="text-content"><span>Кереметүү биздин дүйнө</span></span>
                                       </li>
                                  <li data-thumb="img/cS-3.jpg">
                                      <img src="img/cS-3.jpg" />
                                      <span class="text-content"><span>Кереметүү биздин дүйнө</span></span>
                                      </li>
                                  <li data-thumb="img/thumb/cS-3.jpg">
                                      <img src="img/cS-3.jpg" />
                                      <span class="text-content"><span>Кереметүү биздин дүйнө</span></span>
                                       </li>
                                  <li data-thumb="img/thumb/cS-4.jpg">
                                      <img src="img/cS-4.jpg" />
                                      <span class="text-content"><span>Кереметүү биздин дүйнө</span></span>
                                       </li>
                                  <li data-thumb="images/2.jpg">
                                      <img src="images/2.jpg" />
                                      <span class="text-content"><span>Кереметүү биздин дүйнө</span></span>
                                       </li>
                                  <li data-thumb="img/thumb/cS-6.jpg">
                                      <img src="img/cS-6.jpg" />
                                      <span class="text-content"><span>Кереметүү биздин дүйнө</span></span>
                                       </li>
                                  <li data-thumb="images/main_bg.jpg">
                                      <img src="images/main_bg.jpg" />
                                      <span class="text-content"><span>Кереметүү биздин дүйнө</span></span>
                                       </li>
                                  <li data-thumb="img/thumb/cS-8.jpg">
                                      <img src="img/cS-8.jpg" />
                                      <span class="text-content"><span>Кереметүү биздин дүйнө</span></span>
                                       </li>
                                  <li data-thumb="img/thumb/cS-9.jpg">
                                      <img src="img/cS-9.jpg" />
                                      <span class="text-content"><span>Кереметүү биздин дүйнө</span></span>
                                       </li>
                                  <li data-thumb="img/thumb/cS-10.jpg">
                                      <img src="img/cS-10.jpg" />
                                      <span class="text-content"><span>Кереметүү биздин дүйнө</span></span>
                                       </li>
                                  <li data-thumb="img/thumb/cS-11.jpg">
                                      <img src="img/cS-11.jpg" />
                                      <span class="text-content"><span>Кереметүү биздин дүйнө</span></span>
                                       </li>
                                  <li data-thumb="img/thumb/cS-12.jpg">
                                      <img src="img/cS-12.jpg" />
                                      <span class="text-content"><span>Кереметүү биздин дүйнө</span></span>
                                       </li>
                                  <li data-thumb="img/thumb/cS-13.jpg">
                                      <img src="img/cS-13.jpg" />
                                      <span class="text-content"><span>Кереметүү биздин дүйнө</span></span>
                                       </li>
                                  <li data-thumb="img/thumb/cS-14.jpg">
                                      <img src="img/cS-14.jpg" />
                                      <span class="text-content"><span>Кереметүү биздин дүйнө</span></span>
                                       </li>
                                  <li data-thumb="img/thumb/cS-15.jpg">
                                      <img src="img/cS-15.jpg" />
                                      <span class="text-content"><span>Кереметүү биздин дүйнө</span></span>
                                       </li>
                              </ul>
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
    <div class="panel panel-default hit-parad">
        <div class="panel-heading">
            <h3 class="panel-title"><span> - Хит парад - </span></h3>
        </div>
        <div class="panel-body">
            <ul class="list-group" >
                <li class="list-group-item clearfix"> <a href="#" class="pull-right"> <i class="glyphicon glyphicon-play"></i> </a>
                    <a href="#" class="pull-left"> <img src="{{ asset('images/1.jpg') }}" class="hitimg"> </a>
                    <a class="clear" href="#"> <span>Атабеков Мирбек</span><p> <small>Мөлмөлүм</small></p></a>
                    <span class="numeric">1</span>
                    <span class="starRating">
                        <input id="rating5" type="radio" name="rating" value="5">
                        <label for="rating5">5</label>
                        <input id="rating4" type="radio" name="rating" value="4">
                        <label for="rating4">4</label>
                        <input id="rating3" type="radio" name="rating" value="3" checked>
                        <label for="rating3">3</label>
                        <input id="rating2" type="radio" name="rating" value="2">
                        <label for="rating2">2</label>
                        <input id="rating1" type="radio" name="rating" value="1">
                        <label for="rating1">1</label>
                    </span>
                </li>
                <li class="list-group-item clearfix"><a href="#" class="pull-right"> <i class="glyphicon glyphicon-play"></i> </a>
                    <a href="#" class="pull-left"> <img src="{{ asset('images/2.jpg') }}" class="hitimg"> </a>
                    <a class="clear" href="#"> <span>Борбиев Бек</span><p> <small>Шамал</small></p></a> <span class="numeric">2</span>
                    <span class="starRating">
                        <input id="rating5" type="radio" name="rating" value="5">
                        <label for="rating5">5</label>
                        <input id="rating4" type="radio" name="rating" value="4">
                        <label for="rating4">4</label>
                        <input id="rating3" type="radio" name="rating" value="3" checked>
                        <label for="rating3">3</label>
                        <input id="rating2" type="radio" name="rating" value="2">
                        <label for="rating2">2</label>
                        <input id="rating1" type="radio" name="rating" value="1">
                        <label for="rating1">1</label>
                    </span></li>
                    <li class="list-group-item clearfix"> <a href="#" class="pull-right"> <i class="glyphicon glyphicon-play"></i> </a>
                        <a href="#" class="pull-left"> <img src="{{ asset('images/3.jpg') }}" class="hitimg"> </a>
                        <a class="clear" href="#"> <span>Бегиш жана Баястан </span><p> <small>Айтчы</small></p></a> <span class="numeric">3</span>
                        <span class="starRating">
                            <input id="rating5" type="radio" name="rating" value="5">
                            <label for="rating5">5</label>
                            <input id="rating4" type="radio" name="rating" value="4">
                            <label for="rating4">4</label>
                            <input id="rating3" type="radio" name="rating" value="3" checked>
                            <label for="rating3">3</label>
                            <input id="rating2" type="radio" name="rating" value="2">
                            <label for="rating2">2</label>
                            <input id="rating1" type="radio" name="rating" value="1">
                            <label for="rating1">1</label>
                        </span></li>
                        <li class="list-group-item clearfix"><a href="#" class="pull-right"> <i class="glyphicon glyphicon-play"></i> </a>
                            <a href="#" class="pull-left"> <img src="{{ asset('images/4.jpg') }}" class="hitimg"> </a>
                            <a class="clear" href="#"> <span>Примбердиев Кайрат</span><p> <small>Поезддеги Махабат</small></p></a> <span class="numeric">4</span>
                            <span class="starRating">
                                <input id="rating5" type="radio" name="rating" value="5">
                                <label for="rating5">5</label>
                                <input id="rating4" type="radio" name="rating" value="4">
                                <label for="rating4">4</label>
                                <input id="rating3" type="radio" name="rating" value="3" checked>
                                <label for="rating3">3</label>
                                <input id="rating2" type="radio" name="rating" value="2">
                                <label for="rating2">2</label>
                                <input id="rating1" type="radio" name="rating" value="1">
                                <label for="rating1">1</label>
                            </span></li>
                            <li class="list-group-item clearfix"><a href="#" class="pull-right"> <i class="glyphicon glyphicon-play"></i> </a>
                                <a href="#" class="pull-left"> <img src="{{ asset('images/5.jpg') }}" class="hitimg"> </a>
                                <a class="clear" href="#"> <span>Акулова Динара</span><p> <small>Ай кызым</small></p></a> <span class="numeric">5</span>
                                <span class="starRating">
                                    <input id="rating5" type="radio" name="rating" value="5">
                                    <label for="rating5">5</label>
                                    <input id="rating4" type="radio" name="rating" value="4">
                                    <label for="rating4">4</label>
                                    <input id="rating3" type="radio" name="rating" value="3" checked>
                                    <label for="rating3">3</label>
                                    <input id="rating2" type="radio" name="rating" value="2">
                                    <label for="rating2">2</label>
                                    <input id="rating1" type="radio" name="rating" value="1">
                                    <label for="rating1">1</label>
                                </span></li>

                            </div>
                        </div>

                    </div>

                    <div class="bottom-left-block col-md-4">
                      <div class="panel panel-default hit-parad">
                        <div class="panel-heading">
                          <h3 class="panel-title"><span> - Музыкалдык жаңылыктар - </span></h3>
                        </div>
                        <div class="panel-body">
                          <div class="media">
                            <div class="media-left media-middle">
                              <a href="#">
                                <img class="media-object" src="images/1.jpg" alt="">
                              </a>
                            </div>
                            <div class="media-body">
                              <h4 class="media-heading"><a href="#">Нуртас жана Насип тартуулайт  </a></h4>
                              Айтылуу Нурлан Насип жакында Кайрат Нуртас менен биргеликте концерт берет
                            </div>
                            <div class="news-adds clearfix">
                                <span class="news-time pull-left">10:10</span>
                            </div>
                          </div>
                          <div class="media">
                            <div class="media-left media-middle">
                              <a href="#">
                                <img class="media-object" src="images/2.jpg" alt="">
                              </a>
                            </div>
                            <div class="media-body">
                              <h4 class="media-heading"><a href="#">Профессионалдык концерт  </a></h4>
                              Кечөө Филармонияда легендарлуу Инсан тобунун концерти болуп өттү.
                            </div>
                            <div class="news-adds clearfix">
                                <span class="news-time pull-left">10:10</span>
                            </div>
                          </div>
                          <div class="media">
                            <div class="media-left media-middle">
                              <a href="#">
                                <img class="media-object" src="images/3.jpg" alt="">
                              </a>
                            </div>
                            <div class="media-body">
                              <h4 class="media-heading"><a href="#">М. Иманбеков кайда жүрөт?  </a></h4>
                              Кызыктуу суроо, бирок эч кандай кызыктуу деле эмес.
                            </div>
                            <div class="news-adds clearfix">
                                <span class="news-time pull-left">10:10</span>
                            </div>
                          </div>
                          <div class="media">
                            <div class="media-left media-middle">
                              <a href="#">
                                <img class="media-object" src="images/4.jpg" alt="">
                              </a>
                            </div>
                            <div class="media-body">
                              <h4 class="media-heading"><a href="#">С. Султандын жаңы клиби  </a></h4>
                              Аркы жумада С.Садыралиевдин жаңы чыгармасын угабыз
                            </div>
                            <div class="news-adds clearfix">
                                <span class="news-time pull-left">10:10</span>
                            </div>
                          </div>
                          <div class="media">
                            <div class="media-left media-middle">
                              <a href="#">
                                <img class="media-object" src="images/5.jpg" alt="">
                              </a>
                            </div>
                            <div class="media-body">
                              <h4 class="media-heading"><a href="#">Күз келди, а жок концерт келди  </a></h4>
                              Күз күрөш дечү мурда, азыр болсо күз күрөйт дейт.
                            </div>
                            <div class="news-adds clearfix">
                                <span class="news-time pull-left">10:10</span>
                            </div>
                          </div>
                          <div class="media">
                            <div class="media-left media-middle">
                              <a href="#">
                                <img class="media-object" src="images/6.jpg" alt="">
                              </a>
                            </div>
                            <div class="media-body">
                              <h4 class="media-heading"><a href="#"> Ырчылардын гонорарлары</a></h4>
                             Ким көп сурайт, ким аз сурайт, ким той ээсине жараша алат.
                            </div>
                            <div class="news-adds clearfix">
                                <span class="news-time pull-left">10:10</span>
                            </div>
                          </div>
                          <footer>
                              <a href="#">
                                  <span>Бардык жаңылыктар <i class="fa fa-arrow-circle-right"></i></span>
                              </a>
                          </footer>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-12 hit-parad" style="padding: 10px;">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span> - Фотогалерея - </span></h3>
                            </div>
                            <div id="grid-gallery" class="grid-gallery">
                                <section class="grid-wrap">
                                    <ul class="grid">
                                        <li>
                                            <figure>
                                                <img src="images/logo_notext.png" alt="img01"/>

                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="images/4.jpg" alt="img02"/>

                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="images/3.jpg" alt="img03"/>

                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="images/3.jpg" alt="img04"/>

                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="images/6.jpg" alt="img04"/>

                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="images/7.jpg" alt="img04"/>

                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="images/6.jpg" alt="img04"/>

                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="images/7.jpg" alt="img04"/>

                                            </figure>
                                        </li>

                                    </ul>
                                </section><!-- // grid-wrap -->
                                <section class="slideshow tofront">
                                    <ul>
                                        <li>
                                            <figure>
                                                <figcaption>
                                                    <h3>Таң калыштуу</h3>
                                                    <p>Дүйнөдө эмне деген ган укмуштар болуп жатат.</p>
                                                </figcaption>
                                                <img src="images/logo_notext.png" alt="img01"/>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <figcaption>
                                                    <h3>Күн кайрадан тийүүдө</h3>
                                                    <p>Бүгүн аяабай жакшы күн анткени күн бар, демек күн аябагандай жакшы болот</p>
                                                </figcaption>
                                                <img src="images/4.jpg" alt="img02"/>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <figcaption>
                                                    <h3>Булуттар бар, демек маанай да бар</h3>
                                                    <p>Булуттар табияттын укмуш белеги, жөн эле карап аларадын учупу атканы керемет.</p>
                                                </figcaption>
                                                <img src="images/3.jpg" alt="img03"/>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <figcaption>
                                                    <h3>Chillwave nihil occupy</h3>
                                                    <p>Vice cliche locavore mumblecore vegan wayfarers asymmetrical letterpress hoodie mustache. Shabby chic lomo polaroid, scenester 8-bit Portland Pitchfork VHS tote bag.</p>
                                                </figcaption>
                                                <img src="images/3.jpg" alt="img04"/>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <figcaption>
                                                    <h3>Chillwave nihil occupy</h3>
                                                    <p>Vice cliche locavore mumblecore vegan wayfarers asymmetrical letterpress hoodie mustache. Shabby chic lomo polaroid, scenester 8-bit Portland Pitchfork VHS tote bag.</p>
                                                </figcaption>
                                                <img src="images/6.jpg" alt="img04"/>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <figcaption>
                                                    <h3>Chillwave nihil occupy</h3>
                                                    <p>Vice cliche locavore mumblecore vegan wayfarers asymmetrical letterpress hoodie mustache. Shabby chic lomo polaroid, scenester 8-bit Portland Pitchfork VHS tote bag.</p>
                                                </figcaption>
                                                <img src="images/7.jpg" alt="img04"/>
                                            </figure>
                                        </li>
                                           <li>
                                            <figure>
                                                <figcaption>
                                                    <h3>Chillwave nihil occupy</h3>
                                                    <p>Vice cliche locavore mumblecore vegan wayfarers asymmetrical letterpress hoodie mustache. Shabby chic lomo polaroid, scenester 8-bit Portland Pitchfork VHS tote bag.</p>
                                                </figcaption>
                                                <img src="images/4.jpg" alt="img04"/>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <figcaption>
                                                    <h3>Chillwave nihil occupy</h3>
                                                    <p>Vice cliche locavore mumblecore vegan wayfarers asymmetrical letterpress hoodie mustache. Shabby chic lomo polaroid, scenester 8-bit Portland Pitchfork VHS tote bag.</p>
                                                </figcaption>
                                                <img src="images/7.jpg" alt="img04"/>
                                            </figure>
                                        </li>


                                    </ul>
                                    <nav>
                                        <span class="icon nav-prev"><i class="fa fa-arrow-left"></i>
                                        </span>
                                        <span class="icon nav-next"><i class="fa fa-arrow-right"></i>
                                        </span>
                                        <span class="icon nav-close"><i class="fa fa-times"></i>

                                        </span>
                                    </nav>
                                    <div class="info-keys"><i class="fa fa-info"></i>
                                        Клавитауранын белгилери менен башкарсаңыз болот</div>
                                    </section><!-- // slideshow -->
                                </div><!-- // grid-gallery -->


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



                <script src="js/bootstrap.min.js"></script>

                <script src="js/gallery/imagesloaded.pkgd.min.js"></script>
                <script src="js/gallery/masonry.pkgd.min.js"></script>
                <script src="js/gallery/classie.js"></script>
                <script src="js/gallery/cbpGridGallery.js"></script>

                <script>
                    new CBPGridGallery(document.getElementById('grid-gallery'));
                </script>

                <script src="js/audio/audioplayer.js"></script>
                <script>
                    $(function ()
                    {
                        $('audio').audioPlayer();
                    });
                </script>


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
                    (function ($) {

                        var $descriptions = $('#carousel-descriptions').children('li'),
                        $controls = $('#carousel-controls').find('span'),
                        $carousel = $('#carousel')
                        .roundabout({childSelector: "a", minOpacity: 1, autoplay: false})
                        .on('focus', 'img', function () {
                            var slideNum = $carousel.roundabout("getChildInFocus");

                            $descriptions.add($controls).removeClass('current');
                            $($descriptions.get(slideNum)).addClass('current');
                            $($controls.get(slideNum)).addClass('current');
                        });

                        $controls.on('click dblclick', function () {
                            var slideNum = -1,
                            i = 0, len = $controls.length;

                            for (; i < len; i++) {
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
