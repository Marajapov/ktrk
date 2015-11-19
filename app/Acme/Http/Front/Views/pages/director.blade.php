<html>
    <head lang="en">
        <meta charset="UTF-8">
        <title>Генеральный директор КТРК: Карыпбеков Илим Майрамбекович </title>

        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <link rel="stylesheet" href="css/font-awesome.css"/>
        <link rel="stylesheet" href="filter/css/layout.css">
        <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
        <!--<link rel="stylesheet" type="text/css" href="css/custombox.css"/>-->
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="css/articles.css"/>

        <script src="js/modernizr-2.6.2.min.js"></script>

        <script type="text/javascript" src="bitdashplayer/bitdashplayer.min.js"></script>

    </head>
    <body>

        <!-- Modals -->
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
                                <a href="#">
                                    <img src="images/channels/balastan.jpg" alt=""/>
                                </a>
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

        <div class="modal fade" id="liveModal" tabindex="-1" role="dialog" aria-labelledby="liveModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="liveModalLabel">Түз эфир</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-4 modal-block">
                                <div id="player"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <header class="top-menu">
                    <div class="top-header clearfix">
                        <div class="col-md-12 logo-block">
                            <div class="row">
                                <a class="logo" href="http://ktrk.dev">
                                    <img src="images/logo_kg.png" alt=""/>
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

                                <button class="btn btn-danger btn-live" data-toggle="modal" data-target="#liveModal">
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

        <div class="clearfix">
            <a href="#" class="col-md-12 text-center ads">
                <img src="images/ads_1.jpg" alt=""/>
            </a>
        </div>

        <div class="container main-wrapper directorpages">

            <div class="row">
                <section class="content clearfix">
                    <div class="top-left-block col-md-8">
                        <div class="panel panel-default directorposts panel-articles">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span>Генеральный директор КТРК: Карыпбеков Илим Майрамбекович</span></h3>
                            </div>
                            <div class="panel-body">
                                <div class="persons">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="images/chief.jpg" class="img-circle"> 
                                        </div>
                                        <div class="col-md-8 borders">
                                            <table class="table table-hover borderless">
                                                <br/><br/>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">Аты жөнү:</th>
                                                        <td>Карыпбеков Илим Майрамбекович</td>                                                                           
                                                    </tr>
                                                    <tr >                                           
                                                        <th scope="row">Иш орду:</th>
                                                        <td>Башкы директор</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Туулган датасы:</th>
                                                        <td>1979-жылы 13 - август</td>                                               
                                                    </tr>                                                
                                                    <tr>
                                                        <th scope="row">Facebook баракчасы:</th>
                                                        <td class="textunder"><i class="fa fa-facebook-official"></i><a href="https://www.facebook.com/ilim.karypbekov">facebook.com/ilim.karypbekov</a></td>                                               
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Twitter баракчасы:</th>
                                                        <td class="textunder"><i class="fa fa-twitter"></i><a href="https://twitter.com/ilimkm">twitter.com/ilimkm</a></td>                                               
                                                    </tr>
                                                </tbody>                                                 
                                            </table>

                                        </div>
                                    </div>  
                                    <br/>
                                    <div class="row">                                       
                                        <div class="panel-heading">
                                            <h3 class="panel-title"><span>Жаңылыктар</span></h3>
                                        </div>
                                        <div class="panel-body">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object thumb" src="http://sputnik.kg/images/102017/14/1020171449.jpg" alt="image">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <div class="extra">
                                                        <span class="e-datetime">18 Нояб , 12:22</span>                                               
                                                        <span class="e-views"><i class="fa fa-eye"></i>17</span>
                                                    </div>
                                                     <a class="media-heading" href="http://1000.ktrk.kg/post/1">КТРК: из-за работы я стал изгоем для родственников</a>
                                                                                                
                                                    <h5 class="media-desc">
                                                        <p>Кабинет, как у бизнесмена средней руки. Нет ни мебели красного дерева, как в вотчинах других чиновников высокого ранга, ни канцелярского набора из бирюзы. Из роскоши — 6 плазменных телевизоров на стене. Под столом склад жестянок с безалкогольным энергетиком.
                                                        </p></h5>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object thumb" src="http://ktrk.kg/sites/default/files/styles/juicebox_medium/public/gallery/album/fotos/_mg_9802.jpg?itok=YROMXAeD" alt="image">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <div class="extra">
                                                        <span class="e-datetime">18 Нояб , 12:22</span>                                               
                                                        <span class="e-views"><i class="fa fa-eye"></i>17</span>
                                                    </div>
                                                     <a class="media-heading" href="http://1000.ktrk.kg/post/1">КТРКнын жаңыланган заманбап кеңсеси</a>
                                                                                                  
                                                    <h5 class="media-desc">
                                                        <p>Бүгүн, 6-ноябрда Коомдук телерадиоберүү корпорациясында жаңыланган заманбап үлгүдөгү иш кабинеттеринин ачылышы болду.
                                                        </p></h5>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object thumb" src="http://1000.ktrk.kg/img/thumbnail/11447849392.png" alt="image">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                   <div class="extra">
                                                        <span class="e-datetime">18 Нояб , 12:22</span>                                               
                                                        <span class="e-views"><i class="fa fa-eye"></i>17</span>
                                                    </div>
                                                     <a class="media-heading" href="http://1000.ktrk.kg/post/1">КМЮА: ректор шайланды</a>
                                                                                                   
                                                    <h5 class="media-desc">
                                                        <p>Кыргызстандын жогорку окуу жайларында ректорду шайлоо өтүп жатат. Бүгүн кыргыз мамлекеттик юридикалык академиясы өзүнүн жетекчисин шайлады. Ага беш талапкер катышып, ар бири өзүнүн иш пландары менен тааныштырды.
                                                        </p></h5>
                                                </div>
                                            </div>
                                             <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object thumb" src="http://sputnik.kg/images/102017/14/1020171449.jpg" alt="image">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <div class="extra">
                                                        <span class="e-datetime">18 Нояб , 12:22</span>                                               
                                                        <span class="e-views"><i class="fa fa-eye"></i>17</span>
                                                    </div> 
                                                     <a class="media-heading" href="http://1000.ktrk.kg/post/1">КТРК: из-за работы я стал изгоем для родственников</a>
                                                                                                 
                                                    <h5 class="media-desc">
                                                        <p>Кабинет, как у бизнесмена средней руки. Нет ни мебели красного дерева, как в вотчинах других чиновников высокого ранга, ни канцелярского набора из бирюзы. Из роскоши — 6 плазменных телевизоров на стене. Под столом склад жестянок с безалкогольным энергетиком.
                                                        </p></h5>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object thumb" src="http://ktrk.kg/sites/default/files/styles/juicebox_medium/public/gallery/album/fotos/_mg_9802.jpg?itok=YROMXAeD" alt="image">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <div class="extra">
                                                        <span class="e-datetime">18 Нояб , 12:22</span>                                               
                                                        <span class="e-views"><i class="fa fa-eye"></i>17</span>
                                                    </div>
                                                    <a class="media-heading" href="http://1000.ktrk.kg/post/1">КТРКнын жаңыланган заманбап кеңсеси</a>
                                                                                                   
                                                    <h5 class="media-desc">
                                                        <p>Бүгүн, 6-ноябрда Коомдук телерадиоберүү корпорациясында жаңыланган заманбап үлгүдөгү иш кабинеттеринин ачылышы болду.
                                                        </p></h5>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="top-right-block col-md-4 ">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span>Твиттер</span></h3>
                            </div>
                            <div class="panel-body">
                                <a class="twitter-timeline" href="https://twitter.com/beles_media" data-widget-id="667225139168337920">Твиты от @beles_media</a>
                                <script>!function (d, s, id) {
                                        var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                                        if (!d.getElementById(id)) {
                                            js = d.createElement(s);
                                            js.id = id;
                                            js.src = p + "://platform.twitter.com/widgets.js";
                                            fjs.parentNode.insertBefore(js, fjs);
                                        }
                                    }(document, "script", "twitter-wjs");
                                </script>
                            </div>

                            <div class="panel-heading">
                                <h3 class="panel-title"><span>Facebook</span></h3>
                            </div>
                            <div class="panel-body">
                             <div class="fb-post" data-href="https://www.facebook.com/ilim.karypbekov/posts/10153204500493016?pnref=story" data-width="300">

                                 </div>

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
                                        <li><a href="{{ route('front.home') }}">Башкы бет</a></li>
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

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.5&appId=977320525631518";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
        <script src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>


    </body>
</html>