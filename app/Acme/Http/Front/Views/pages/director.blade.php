<html>
    <head lang="en">
        <meta charset="UTF-8">
        <title>Генеральный директор КТРК: Карыпбеков Илим Майрамбекович </title>

        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/font-awesome.css"/>
        <link rel="stylesheet" href="filter/css/layout.css">
        <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
        <!--<link rel="stylesheet" type="text/css" href="css/custombox.css"/>-->
        <link rel="stylesheet" href="css/style.css"/>

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

        <div class="container main-wrapper">

            <div class="row">
                <section class="content clearfix">
                    <div class="top-left-block col-md-8">
                        <div class="panel panel-default panel-top-news">
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
                                                </tbody>                                                 
                                            </table>
                                        </div>
                                    </div>  
                                    <br/>
                                    <div class="row years">                                        

                                        <div class="col-md-12">
                                            <div class="panel-heading">
                                                <h3 class="panel-title"><span>Билими</span></h3>
                                            </div>
                                            <table class="table table-hover borderless">                               
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">2001</th>
                                                        <td>Кыргыз мамлекеттик улуттук университетинин укук факультетин артыкчылык менен бүтүргөн</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2007</th>
                                                        <td>Варшавадагы (Польша) адам укуктары боюнча жогорку эл аралык мектепти аяктаган</td>                                               
                                                    </tr>                                                  
                                                </tbody>
                                            </table>
                                            <div class="panel-heading">
                                                <h3 class="panel-title"><span>Эмгек жолу</span></h3>
                                            </div>
                                            <table class="table table-condensed secondtd table-hover borderless ">                               
                                                <tbody>
                                                    <tr>
                                                        <th scope="row"><h5>март</h5> 2015</th>
                                                <td>КТРК башкы директору</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"><h5>Февраль</h5>2015</th>
                                                <td>КТРКнын башкы директордун милдетин аткаруучу</td>                                               
                                                </tr>
                                                <tr>
                                                    <th scope="row"><h5>Апрель</h5> 2013<h5>Февраль</h5>2015</th>
                                                <td>«Эл аралык  «Манас» аэропорту» ААК, президенттин кеңешчиси</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"><h5>Октябрь</h5>2009<h5>Апрель</h5>2010</th>
                                                <td>КыргызРеспубликасынын президентинин катчылыгы, көмөк көрсөтүү кызматынын жетекчиси</td>                                               
                                                </tr>

                                                <tr>
                                                    <th scope="row"><h5>Октябрь</h5> 2011<h5>учурда</h5></th>
                                                <td>Кыргыз мамлекеттик юридикалык академиясы, ага окутуучу  (Экономикалык сот, Инвестициялык укук)</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"><h5>июль</h5> 2011<h5>февраль</h5>2012</th>
                                                <td>Кыргыз Республикасынын мамлекеттик мүлк министрлиги, «Альфа Телеком» ЖАК сырттан башкаруучу</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"><h5>Апрель</h5> 2010 2013</th>
                                                <td>Америка Борбор Азия университети, окутуучу (адвокатура,  укук клиникасы, ишкерлер укугу)</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"><h5>Апрель</h5> 2010<h5>учурда</h5></th>
                                                <td>«Кеңеш берүү жана укук институту» Коомдук фондунун директору</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"><h5>февраль</h5>2011 <h5>июль</h5>2011</th>
                                                <td>«Альфа Телеком» (соода маркасы «MegaCom») Жабык акционердик коому, «Альфа Телеком» Жабык акционердик коомунун укук маселелери боюнча башкы директорунун орун басары</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"><h5>октябрь</h5>2009<h5>апрель</h5> 2010</th>
                                                <td>КыргызРеспубликасынын президентинин катчылыгы, көмөк көрсөтүү кызматынын жетекчиси</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"><h5>февраль</h5> 2009<h5>январь</h5>2009</th>
                                                <td>Кыргыз Республикасынын президентинин катчылыгынын референти</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"><h5>июнь</h5> 2008<h5>февраль</h5>2009</th>
                                                <td>КР акыйкатчысынын медиа-өкүлү</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"><h5>июнь</h5> 2006<h5>февраль</h5>2009</th>
                                                <td>«Медиа-өкүл институту» коомдук фондунун директору</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"><h5>июнь</h5> 2006<h5>учурда</h5></th>
                                                <td>КР президентине караштуу башкаруу академиясы, окутуучу. (Жарандык жана эмгек укугу, бейөкмөт уюмдардын укуктук негиздери)</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"><h5>июнь</h5> 2004<h5>июнь</h5>2006</th>
                                                <td>Медиаөкүл институту/ Интерньюс-Кыргызстан, ага юрист.</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"><h5>январь</h5> 2004<h5>июнь</h5>2004</th>
                                                <td>«ЛАРК» АК филиалынын директору, Түп району</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"><h5>июль</h5> 2003<h5></h5></th>
                                                <td>Адвокат болуп иштөөгө укук берүү  лицензиясы № 1051, Бишкек шаары</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"><h5>январь</h5> 2003<h5></h5>2004</th>
                                                <td>«LARC» укуктук долбоорунун юристи, Кара-Балта</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"><h5>февраль</h5> 2002<h5>январь</h5>2003</th>
                                                <td>«Сорос-Кыргызстан» фонду, Бишкек. «Коомдук башкаруу»,«Этникалык азчылык», «Коомдук саясатты иштеп чыгуу» программаларынын кызматкери.</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"><h5>июнь</h5> 2001<h5>октябрь</h5>2001</th>
                                                <td>БУУнун өнүктүрүү программасы,Кочкор району. БУУнун улуттук ыктыярчысы</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"><h5>июнь</h5> 2000<h5>июнь</h5>2001</th>
                                                <td>Сорос-Кыргызстан фондунун укуктук программалары боюнча кызматкери.</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"><h5>январь</h5> 1999<h5>июнь</h5>2000</th>
                                                <td>«BNS - Securities» ЖЧКнун юристи, Бишкек</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"><h5></h5> 1997 1999<h5></h5></th>
                                                <td>«Ренессанс» студенттик илимий коомунун президенти, Бишкек</td>
                                                </tr>                                     
                                                </tbody>
                                            </table>                                            
                                        </div> 

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="top-right-block col-md-4 ">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span>Кошумча маалымат</span></h3>
                            </div>
                            <table class="table rightblock">                               
                                <tbody>
                                    <tr>
                                        <td>«K-News», www.knews.kg маалымат агенттигинин негиздөөчүсү</td>
                                    </tr>
                                    <tr>
                                        <td> «Svoboda», www.svoboda.kg укук коргоо сайтынын негиздөөчүсү</td>                                               
                                    </tr>
                                    <tr>
                                        <td>  «Институт Медиа Полиси» коомдук фондунун уюштуруучусу</td>                                               
                                    </tr> 
                                    <tr>
                                        <td>  «Институт Консалтинга и Права» коомдук фондунун уюштуруучусу</td>                                               
                                    </tr> 
                                    <tr>
                                        <td> «Де-Факто»  гезитинин уюштуруучусу</td>                                               
                                    </tr> 
                                </tbody>
                            </table>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span>Коомдук иштери</span></h3>
                            </div>
                            <table class="table rightblock">                               
                                <tbody>
                                    <tr>
                                        <td>Бишкек шаары жана Чүй облусунун адвокаттар  коллегиясынын мүчөсү</td>
                                    </tr>
                                    <tr>
                                        <td>Бишкек пресс-клубунун мүчөсү</td>                                               
                                    </tr>
                                    <tr>
                                        <td>Маалымдоо каражаттарына келген арыздарды кароочу комиссия мүчөсү</td>                                               
                                    </tr> 
                                    <tr>
                                        <td>Сорос-Кыргызстан фондунун башкармалыгынын мүчөсү</td>                                               
                                    </tr> 
                                    <tr>
                                        <td>КТРК көркөм кеңешинин мүчөсү</td>                                               
                                    </tr>
                                    <tr>
                                        <td>КР маданият жана маалымат министрлигинин алдындагы “Телекорсөтүү жана радиоуктуруулар жөнүндө” мыйзамдаргаөзгөртүүлөр жана оңдоолорду иштеп чыгуу боюнча жумушчу топтун мүчөсү</td>                                               
                                    </tr> 
                                    <tr>
                                        <td>КТРКны реформалоо боюнча жумушчу топтун төрагасы</td>                                               
                                    </tr> 
                                    <tr>
                                        <td>Адам укуктары жана эл аралык укуктар боюнча эксперт</td>                                               
                                    </tr> 
                                    <tr>
                                        <td>КР президент  институтун реформалоо боюнча жумушчу топтун мүчөсү</td>                                               
                                    </tr> 
                                    <tr>
                                        <td>Санариптик берүүгө өтүү боюнча мамлекеттик программаны иштеп чыгуу жумушчу тобунун төрагасы</td>                                               
                                    </tr> 
                                    <tr>
                                        <td>КР өкмөтүн реформалоо боюнча жумушчу топтун мүчөсү</td>                                               
                                    </tr>  
                                    <tr>
                                        <td>КР жаштар саясатын өнүктүрүү стратегиясын иштеп чыгуу боюнча жумушчу топтун төрагасы</td>                                               
                                    </tr> 
                                    <tr>
                                        <td>КР Коомдук телерадиоберүү корпорациясынын Байкоочу кеңешинин төрагасы</td>                                               
                                    </tr> 
                                </tbody>
                            </table>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span>Видео маалымат</span></h3>
                            </div>
                            <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="//www.youtube.com/embed/k2w8UII9cgI" allowfullscreen=""></iframe>
                                </div>
                        </div>

                        <a href="#" class="text-center ads ads-300x250">
                            <img src="images/ads_300x250.gif" alt=""/>
                        </a>

                    </div>
            </div>
        </div>
    </body>
</html>