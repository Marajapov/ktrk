<!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <title>О нас</title>

        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}"/>
        <link rel="stylesheet" href="{{ asset('filter/css/layout.css') }}">        
        <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css') }}"/>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>


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

                        <div class="col-md-12 clouds">
                            <div class="sun">
                                <img src="{{asset('images/channels/balastan/sun-icon.png')}}" alt=""/>
                                <!--          <img class="balastanlogo" src="images/channels/balastan_white.png" alt=""/> -->

                            </div>
                            <img src="{{asset('images/channels/balastan/clouds.png')}}" alt=""/> 
                             <nav class="cloudlinks"> 
                               <ul>
                                   <li><a href="{{ route('balastan.home') }}">Главная</a></li>
                                   <li><a class="active" href="{{ route('balastan.about') }}">О нас</a></li>
                                   <li><a href="{{ route('balastan.world') }}">В мире Баластана</a></li>
                                   <li><a href="{{ route('balastan.video') }}">Видео</a></li>
                                   <li><a href="{{ route('balastan.photos') }}">Фотогалерея</a></li>
                               </ul>
                           </nav>                        
                        </div>

                    </div>

                </div>   
            </div> 



            <div class="row" style="margin-top: 50px;">               
                <div class="col-md-12 aboutkids">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><span>О нас</span></h3>
                        </div>
                        <div class="panel-body">                  
                            <div class="row">
                                <img class="forabout" src="{{asset('images/channels/balastan/forabout.png')}}" alt="">
                                <div class="col-md-4">
                                    <img class="leftrightimg" src="{{asset('images/channels/balastan/birge3.png')}}" alt="" style="margin-left: 25px;">

                                </div>
                                <div class="col-md-offset-4 col-md-4">
                                    <img class="leftrightimg" src="{{asset('images/channels/balastan/birge2.png')}}" alt="" style="margin-left: -25px;">

                                </div>
                                <div class="col-md-5 firstp">
                                    <p>“Баластан” каналы 2013-жылы 1- октябрда ачылып, мектеп жашына чейинки жана мектептин башталгыч ошондой эле ортоңку класстарында окуган балдарга арналган республикадагы биринчи  канал,  күн сайын кыргыз жана орус тилдериндеги  (70% кыргыз, 30% орустилинде) билим,  таалим-тарбиялык мааниси  бар  программалар, кинолор, мультфильмдер көрсөтүлөт.</p><p>Программалардын контенти 6 саатка түзүлүп, 7:00дон 00:00го чейинки убакытар алыгында  3 жолукайталанып кичинекей көрөрмандарга сунушталат. Ошондой эле балдар каналы  бир гана балдар үчүн эмес,  ата-энелер үчүн  да  маанилүү маалымат булагы болуп саналат</p>

                                </div>
                                <div class="col-md-offset-2 col-md-5 pull-right secondp">
                                    <p>“Баластан”–это первый детский телеканал в Кыргызстане. Начал свое вещание  1 октября 2013 года.
                                        Основной контент телеканала – образовательные и познавательные передачи,  которые будут полезны не только для детей, но и для взрослых. Аудиторию канала составят дети дошкольного возраста, а также учащиеся младших и старших классов (7 до 15 лет). Телеканал вещает 70% на кыргызском и 30% русском языках.
                                        На телеканале представлены развивающие детские передачи, интересные программы и фильмы дающие возможность детям окунуться в удивительный мир открытий и знаний.  “Баластан” ответит на многие вопросы маленьких почемучек и  поделится интересными знаниями со своими друзьями. 
                                    </p>
                                </div>

                                <div class="row aboutkidfooter">
                                    <div class="col-md-4 firstp">
                                        <p>“Баластан” - счастливый смех детей и радость в каждую семью!
                                            Вещает по кабельным каналам в Чуйской области, в социальном пакете цифрового вещания “Кыргызтелеком” в Ошской и Джалал-Абадской области. С января 2014 года канал начал показывать в Баткенской области.  
                                        </p>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="{{asset('images/channels/balastan/birge.png')}}" alt="" style="margin:0px">

                                    </div>
                                    <div class="col-md-4 firstp">
                                        <p style="margin-top: 30px;">“Баластан” также знакомит своих юных зрителей с новостями, о том, что происходят в стране детей или же развлечет своими интересными яркими детскими шоу и концертами.</p>
                                    </div>
                                </div>
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

        <div class="container-fluid">
            <!--        <img src="{{ asset('images/channels/balastan/footer.png')}}" alt=""> -->
        </div>

        <script src="js/jquery-1.11.2.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/balastan/jquery.min.js" type="text/javascript"></script>
    </body>
</html>