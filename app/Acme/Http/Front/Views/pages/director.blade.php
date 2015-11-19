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
       <div class="bottom-bg"></div>

<div class="container-fluid main-header">
    <div class="container">

    <div class="row">
        <header class="top-menu">
            <div class="top-header clearfix">
                <div class="col-md-12 logo-block">
                    <div class="row">
                        <a class="logo" href="{{ route('front.home') }}">
                            <img src="{{ asset('images/ktrk_last.svg') }}" alt=""/>
                        </a>

                        <nav class="top-nav clearfix">
                            <ul class="clearfix">
                                @foreach(\Model\Menu\ModelName::code('main')->parent()->get() as $menu)
                                    @if(count($menu->submenus) > 0)
                                    <li>
                                        <a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="100" data-close-others="false" role="button" aria-expanded="false">{{ $menu->getName() }}</a>
                                        <ul class="dropdown-menu" role="menu">
                                            @foreach($menu->submenus as $submenu)
                                            <li><a href="{{ $submenu->getUrl() }}">{{ $submenu->getName() }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li><li> / </li>
                                    
                                    @else
                                    <li><a href="{{ $menu->getUrl() }}">{{ $menu->getName() }}</a></li> <li> / </li>
                                    @endif
                                @endforeach
                            </ul>
                        </nav>

                        <ul class="soc">
                            <li class="tw"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="fb"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="ok"><a href="#"><i class="fa fa-odnoklassniki"></i></a></li>
                            <li class="yt"><a href="#"><i class="fa fa-youtube"></i></a></li>
                            <li class="in"><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <!--<li class="lang-title"><a>Язык:</a></li>-->
                            <!--<li class="dropdown lang">-->
                                <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">-->
                                    <!--<span class="lang-type">KG</span>-->
                                    <!--<i class="fa fa-chevron-right"></i>-->
                                <!--</a>-->
                                <!--<ul class="dropdown-menu">-->
                                    <!--<li><a href="#">KG</a></li>-->
                                    <!--<li><a href="#">RU</a></li>-->
                                <!--</ul>-->
                            <!--</li>-->
                            <!--<li class="lang ru"><a href="#"><i class="ru"></i></a></li>-->
                            <!--<li class="lang kg"><a href="#"><i class="kg"></i></a></li>-->
                        </ul>

                        <a class="search-toggle"><i class="fa fa-search"></i></a>

                        <form class="form-search" action="{{ route('front.search') }}" method="get">
                            <div class="form-group pull-right">
                                <input type="text" name="search" class="form-control" placeholder="Издөө"/>
                            </div>

                            <a class="btn close-search">
                                <i class="fa fa-close"></i>
                            </a>

                            <button class="btn submit-search" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>

                        <button class="btn btn-danger btn-live" data-toggle="modal" data-target="#liveModal">
                            <i class="fa fa-dot-circle-o"></i>
                            {{ trans('site.Live') }}
                        </button>

                        @include ("Front::partials.mainNav")         

                        <div class="lang">
                            <ul>
                                <li @if(app()->getlocale() == 'kg') class="active" @endif><a href="/locale/kg">кырг <span></span></a></li>
                                <li @if(app()->getlocale() == 'ru') class="active" @endif><a href="/locale/ru">рус <span></span></a></li>
                            </ul>
                        </div>                                     

                    </div>
                </div>
            </div>
        </header>
    </div>
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