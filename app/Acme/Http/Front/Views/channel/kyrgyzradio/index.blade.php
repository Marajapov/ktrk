<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Главная страница</title>

    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/font-awesome.css"/>
    <link rel="stylesheet" href="css/style.css"/>

    <link href="css/landing/animate.min.css" rel="stylesheet">
    <link href="css/landing/owl.carousel.css" rel="stylesheet">
    <link href="css/landing/owl.transitions.css" rel="stylesheet">
    <link href="css/landing/prettyPhoto.css" rel="stylesheet">
    <link href="css/landing/main.css" rel="stylesheet">
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
                    <a class="navbar-brand" href="#"><img src="{{ asset('images/channels/muz_white_notext.png')}}"><h4>Музыка</h4></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="menu">
                    <ul class="nav navbar-nav channel_switch">
                        <li class="sitemenu" id="site-channel1">
                            <a href="{{ route('front.home') }}"><img src="{{ asset('images/ktrk_last.svg')}}" style="height:40px;"><span>КТРК</span><h4>КТРК</h4></a></li>
                        <li class="sitemenu" id="site-channel1">
                            <a class="active" href="{{ route('muzkanal.home') }}"><img src="{{ asset('images/channels/muz_white_notext.png')}}" ><span>Музыка</span><h4>Музыка</h4></a></li>
                        <li class="sitemenu" id="site-channel1">
                            <a href="{{ route('madaniyat.home') }}"><img src="{{ asset('images/channels/madaniyat_white_notext.png')}}"><span>Маданият</span><h4>Маданият</h4></a></li>
                        <li class="sitemenu" id="site-channel1">
                            <a href="{{ route('balastan.home') }}"><img src="{{ asset('images/channels/balastan_white_notext.png')}}"><span>Баластан</span><h4>Баластан</h4></a></li>    
                    </ul>   
                </div><!-- /.navbar-collapse -->
            </nav>
    </div>
<div class="container">
    <header id="header">
        <nav id="main-menu" class="container-fluid navbar navbar-default fixedheader2 " role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Меню</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="{{asset('images/channels/kg-radio.png')}}" alt="logo">Кыргыз Радиосу</a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll active"><a href="#home">Башкы</a></li>
                        <li class="scroll"><a href="#about">Радио жөнүндө</a></li>
                        <li class="scroll"><a href="#services">Уктуруулар</a></li>
                        <li class="scroll"><a href="#portfolio">Фотогалерея</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->

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

    <section id="cta" class="wow fadeIn">
        <div class="container">
            <div class="row">
            <div class="col-md-6">            
                <div class="col-sm-9">
                    <h2>Чынгыз Айтматов</h2>
                    <p>Дос, кыйынчылыкта билинет дешет. Менимче, бактылуу кезиңде да билинет..
                    </p>
                </div>
            <div class="col-sm-3">
                <img src="{{asset('images/channels/kyrgyzradio/aitmatov.jpg')}}" height="100" width="100" alt="">
                    
                </div>
            </div>  
            <div class="col-md-6">            
                <div class="col-sm-9">
                    <h2>Чынгыз Айтматов</h2>
                    <p>Словно люди не понимают, сколько несчастий и убожества в их жизни поистекает и проистекало во все времена от лени.
                    </p>
                </div>
                <div class="col-sm-3">
                <img src="{{asset('images/channels/kyrgyzradio/aitmatov.jpg')}}" height="100" width="100" alt="">
                    
                </div>
            </div>
            </div>

        </div>
    </section><!--/#cta-->

    <section id="about">
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Кыргыз Радиосу жөнүндө</h2>
                <p class="text-center wow fadeInDown">Радионун негизги урааны “Кыргыз радиосу - жан дүйнөнүн азыгы”. <br> “Кыргыз радиосу көөнөрбөс мурастар казынасы!”</p>
            </div>

            <div class="row">
                <div class="col-sm-6 wow fadeInLeft">
                    <h3 class="column-title">Видео промо</h3>
                    <!-- 16:9 aspect ratio -->               
                    <div class="embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item" src="//www.youtube.com/embed/e1pCK8aAyvA" allowfullscreen=""></iframe>
                    </div>
                </div>

                <div class="col-sm-6 wow fadeInRight">
                    <h3 class="column-title">Тарыхы</h3>
                        <p>Кыргыз радиосу мурдагы Улуттук мамлекеттик радионун курамынан 2009-жылы июнь айында өзүнчө адабий-музыкалык канал катары бөлүнүп чыккан. Кыргыз радиосу улуттук идеологияны жүргүзгөн, калкка рухий азык тараткан, элибиздин көркөм дөөлөттөрүн жайылткан, адабий-музыкалык багытта жан дүйнөнү тазарткан, адеп-ахлак, каада-салттын мектеби болгон уникалдуу радио. Кыргыз радиосунун концепциясы  - көркөм өнөрдүн таасири аркылуу жалпы угармандардын жан дүйнөсүн байытуу, тарбиялоо. </p> 
                        <p>Ырасында эле “Адабият –элдин сезими, элдин рухий турмушунун жемиши” (В.Белинский) же болбосо музыканын тили көтөрүлбөй турган тил. Ал жандын тили (А.Ауэрбах) - деп таамай айтылгандай, адабият менен музыка бүтүндөй элди тазалыкка, адамгерчиликке тарбиялай турган курал. Кыргыз радиосу ушул улуу максатты аркалайт. </p>
                </div>                
            </div>
             <div class="section-header">             
                <p class="text-justify wow fadeInDown">Радионун негизги багыттары: Улуттук адабият менен искусствонун татыктуу өкүлдөрүн угармандага таанытуу. (“Бейне”, “Түз эфирдеги жолугушуу”, “Жарыгы калган жылдыздар”, “Инсан” ж.б) Ата-бабалардан калган көркөм мурастарыбызды, кол өнөрчүлүгүбүздү угармандарга жайылтуу. (Кыргыз радиосунун алтын казынасынан “Мен кыргызмын”, “Мурас”, “Көөнө тарых”, “Өнөркана” ж.б) Маданият тармагындагы күнүмдүк иш-чаралар, жаңылыктар менен угармандарды тааныштыруу. (“Кутман таңың менен Кыргызстан”, “Маданий жаңылыктар”, “Муз обо” ж.б) Таанытып билдирүүчү, агартуучу, тарбия берүүчү багыттыгы уктуруулар. (“Асыл ойлор”, “Мен билген улут каадасы”, “Адеп”, “Унутта калган уютку”, “Адистин пикири”, “Театр микрофондо” ж.б) Кыргыз радиосунун негизги байлыгы – 80 жыл бою топтолуп келаткан алтын казынадагы баалуу уктуруулар. (Атактуу инсандар менен маектер, көркөм окуулар, музыкалык чыгармалар ж.б) Редакция андагы уктурууларды ылайыгына жараша эфирге жайгаштырат. Ошол эле учурда баалуулугун, актуалдуулугун жоготпой турган мазмундук жана көркөмдүк жактан мыкты даярдалган программаларды Алтын казынага кабыл алууга Көркөм кеңешке сунуштап турат.<br> Күн сайын 12(он эки) саттык уктуруулар эфирге чыгат. Уктуруулар жалаң кыргыз тилинде даярдалат. Уктуруулардын сапатын жакшыртып, угармандардын катарын көбөйтүү максатында редакция жамааты ар убакта талкууларды, талдоолорду өткөрүп, өз кызматын өтөп бүткөн уктурууларды жаап, жаңы долбоорлордун үстүндө изденип, эфирге даярдап келишет. Ошол эле учурда Радионун жүзүн чагылдырып турган роликтер маал-маалы менен жаңыланып турат. Бүгүнкүдөй саясатташкан , күнүмдүк көйгөйлөр адамдын адамдын акыл-эсин чарчатып турган кымгуут заманда угармандардын жан дүйнөсүнө азык берип, эс алууга багыттап, жакшылыкка үндөп келаткан Кыргыз Радиосунун келечеги алдыда.</p>
            </div>
        </div>
    </section><!--/#about-->

    <section id="cta" class="wow fadeIn">
        <div class="container">
            <div class="row">
            <div class="col-md-6">            
                <div class="col-sm-9">
                    <h2>Чынгыз Айтматов</h2>
                    <p>Дос, кыйынчылыкта билинет дешет. Менимче, бактылуу кезиңде да билинет..
                    </p>
                </div>
            <div class="col-sm-3">
                <img src="{{asset('images/channels/kyrgyzradio/aitmatov.jpg')}}" height="100" width="100" alt="">
                    
                </div>
            </div>  
            <div class="col-md-6">            
                <div class="col-sm-9">
                    <h2>Чынгыз Айтматов</h2>
                    <p>Словно люди не понимают, сколько несчастий и убожества в их жизни поистекает и проистекало во все времена от лени.
                    </p>
                </div>
                <div class="col-sm-3">
                <img src="{{asset('images/channels/kyrgyzradio/aitmatov.jpg')}}" height="100" width="100" alt="">
                    
                </div>
            </div>
            </div>

        </div>
    </section><!--/#cta-->

    <section id="services" >
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Уктуруулар</h2>
          </div>

            <div class="row">
                <div class="features">

                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-bullhorn"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">“Өмүрлөш  элек...”  уктуруусу.</h4>
                                <p>Көзү  өтүп  кеткен  белгилүү  инсандардын  жубайлары  менен  маек. Баш  кошкон  мезгилинен  тартып, бирге  жашаган  турмушундагы  кубаныч, өкүнүчтөрү  менен  бирдикте, өмүрлүк  жарынын  кандай  адам  болгонун  кеңири  айтып  беришет.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-bullhorn"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">“Тагдыр  тамчылары”  уктуруусу.</h4>
                                <p>“Канча  адам  болсо, ошончо  тагдыр  бар”  дегендей, адам  тагдырлары  тууралуу, оор  тагдырларын  жеңип  чыккан  эрки  бекем  инсандар  тууралуу  жана  түрдүү  тагдырларды   баяндаган  көркөм  текст  аркылуу  чагылдырат.</p> 
                            </div>
                        </div>
                    </div><!--/.col-md-4-->               

                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-bullhorn"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">“Бейпил  түн”  уктуруусу.</h4>
                                <p>Түнкү  адабий-музыкалуу  уктуруусу. Жашоо, турмуш, сүйүү, мамилелер  тууралуу  чакан  аңгеме, новелла  жанрындагы  көркөм  баяндар, ой-толгоолор  </p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="500ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-bullhorn"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">“ Тилим башка, бирок дилим бир”, </h4>
                                <p>Рубрикаларында кесиби башка болсо да кыргыздын ыргактарын созолонткон ыр жандуу башка улуттун  өкүлдөрүн жана  жаңы жазылган ырларды жарыка алып чыккан “Музыкалык аялдама” уктуруусу Кыргыз радиосунун толкунунда  </p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-bullhorn"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading"> “Биз  экөөбүз...”  уктуруусу.</h4>
                                <p>Элге  кеңири  белгилүү   болгон  маданий  жана  коомдук  инсандардын  жубайлары  менен  биргеликтеги  маектери. Алар  бирге  жашаган  турмушундагы  жубайлык  мамилелери, турмуштук  кырдаалдардагы  ийгилик-кемчилдиктери, бактылуу  үй-бүлөлүк  турмушу  тууралуу  бөлүшүшөт.</p>
                           </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-bullhorn"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">“Дин  таануу”  уктуруусу.</h4>
                                <p>Азыр  диний  сабатсыздыктан  туура  эмес  секталарга  кирип, тыюу  салынган  агымдарды  тандап  алган  учурлар  көп  кездешүүдө. Мунун  негизинде  үй-бүлөдө  чыр-чатактар  орун  алып, ата-бала  ортосунда  пикир  келишпеген  көйгөйлөр  жаралууда. “Дин  таануу”  уктуруусу  дүйнөдөгу  бардык  диндердин  тарыхын, алардан  агылып  чыккан  агымдардын  максатын, багытын, ишмердигин  баяндап, ар  бир  динге  жана  анын  келип  чыгуу  тарыхына  кеңири  токтолууда.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-bullhorn"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">“Биздин айыл”</h4>
                                <p>Кыргызстандын кереметтүү жерлери ар бир айылдын жаратылышы, анда жашаган адамдардын пейили, жашоо шартын чагылдырган “Биздин айыл” уктуруусунда.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->                  

                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-bullhorn"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">“Адеп ” уктуруусу.</h4>
                                <p>Балдардын адептик түшүнүктөрүн байытуу, ата-энелердин, жалпы эле коомдун адептик маданиятын көтөрүү максатында  адистердин кенештери  “Адеп ” долбоорунда.   Адеп сабагы-мезгил талабы”!</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->                      

                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-bullhorn"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">“Ата-эне мектеби” </h4>
                                <p>Бул программада ата-энелердин үй бүлөдөгү,коомдогу орду, бала тарбиялоогоморалдык,психологиялыкдаярдыгы, жоопкерчилиги, өзүнүнүстүнөништөөсүтууралуубелгилүү педагог, инсандык жеке сапаттарды өнүктүрүү адиси Асылбек Жоодонбеков кеңеш берет. Дүйшөмбү күндөрү  саат 16 05 16 25 те эфирге чыгат.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->                   

                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-bullhorn"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">“Тарыхый инсан” уктуруусу.</h4>
                                <p>Кыргыз элинин тарыхына,көөнөрбөс маданиятына   опол-тоодой иш жасап, мамлекеттүүлүктү сактоого , агартууга  салым кошкон  тарыхта аты алтын тамгалар менен жазылып, изи калган  баатырлар, акылмандар, илимпоздор, элчилер, мамлекеттик ишмерлер  тууралуу маалыматтар  Кыргыз радиосунун “Тарыхый инсан” уктуруусунда.
                                    Ар бейшемби күнү 16 05 16 25 чейин  уксаңыздар болот.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->                    

                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-bullhorn"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">“Радио Бейтапкана” уктуруусу.</h4>
                                <p>Бул уктуруунун максаты жарандарыбыздын ден соолугуна кам коруп, ооруларды алдына алуу жана адистердин кеңешин сунуштоо  .
                                     “Радио Бейтапкана” сиздин ден соолугуңузга кам көрөт!</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->                    

                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-bullhorn"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">“Ой талкуу” ток-шоу программасы.</h4>
                                <p>Учурда  маданияттагы ,адабияттагы,коомдогу  орчундуу социалдык көйгөлөрдү адисттер жана жарандар менен бирге талкуулоо. Эгер сизде да айта турган көйгөй барбы? Кайда кайрыла турганыңызды билбей турасызбы? Анда бизге кайрылып ой бөлүшүңүз. Байланыш телефонубуз: 39 21 85.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->                    

                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-bullhorn"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Түз эфирден жолугушуу  </h4>
                                <p>Кыргыз маданиятындагы талантту инсандардын бейнесин ачып берүү.Чыгармачылыгын жайылтуу.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->                    

                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-bullhorn"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Ой  талкуу </h4>
                                <p>Учурдагы маданияттагы ,адабияттагы жана жашоо турмуштагы орчундуу социалдык проблемаларды талкууга салуу. </p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->                    

                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-bullhorn"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">“Таңшы комуз”  </h4>
                                <p>Улуу залкар комузчулардантартып бүгүнкү күндун комузчуларына чейин  өнөрүн элге таанытуу.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->                    

                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-bullhorn"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">“Музыкалык обо” </h4>
                                <p>радио журналы Кыргыз искусствосу менен маданиятындагы маданий жаңылыктарды оперативдүү түрдө элге жеткирүү Талкуу, баяндама, анкытама, маек түрүндө түз эфирде эфирге чыгат.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->                    

                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-bullhorn"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">“Улут сыймыгы”</h4>
                                <p>Кыргыз элине өнөрү менен өрнөк болгон залкар таланттардын чыгрмачылыгын элге жайылтуу</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->                    

                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-bullhorn"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">“Эл ичи -өнөр кенчи” </h4>
                                <p>Республиканын баардык аймактарындагы элдик таланттарды элге алып чыгуу.Айыл маданиятынын өсүшүнө көмөк кошуу.Маек, иликтөөнүн негизинде даярдалат.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->                    

                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-bullhorn"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">“Ансамблдер баяны” </h4>
                                <p>Баардык жанрдагы ансамблдердин чыгармачылыгын жайылтуу. Эмгегин элге жеткирүү. Орду, аткарган ишин ачып берүү</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->                    

                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-bullhorn"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">“Сөз дүйнө” </h4>
                                <p>Бул уктурууда, эне тилибиздин  лексикасына  маданияттын, илимдин, техниканын  өнүгүшү менен жаңыдан кирип жаткан  НЕОЛОГИЗМ сөздөрүнө саякат жасайбыз</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->                    

                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-bullhorn"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">“Саякат” </h4>
                                <p>Бул уктурууда Кыргызстандын ажайып кооз, көздүн жоосун алган керемет, ошону менен бирге ары сырдуу жерлерине саякат жасап, угармандарга маалымат беребиз.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->                    

                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-bullhorn"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">“Табият сырлары” </h4>
                                <p>Бул уктурууда, угармандар менен айлана-чөйрөгө, асман-жерге, жана андагы өсүмдүктөгө, жаратылыш кубулуштарына саресеп салып, байкоо жургузуу менен бирге аларды жатык тил менен кызыктуу баяндап бергенге</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                </div>
            </div><!--/.row-->    
        </div><!--/.container-->
    </section><!--/#services-->

    <section id="cta" class="wow fadeIn">
        <div class="container">
            <div class="row">
            <div class="col-md-6">            
                <div class="col-sm-9">
                    <h2>Чынгыз Айтматов</h2>
                    <p>Дос, кыйынчылыкта билинет дешет. Менимче, бактылуу кезиңде да билинет..
                    </p>
                </div>
            <div class="col-sm-3">
                <img src="{{asset('images/channels/kyrgyzradio/aitmatov.jpg')}}" height="100" width="100" alt="">
                    
                </div>
            </div>  
            <div class="col-md-6">            
                <div class="col-sm-9">
                    <h2>Чынгыз Айтматов</h2>
                    <p>Словно люди не понимают, сколько несчастий и убожества в их жизни поистекает и проистекало во все времена от лени.
                    </p>
                </div>
                <div class="col-sm-3">
                <img src="{{asset('images/channels/kyrgyzradio/aitmatov.jpg')}}" height="100" width="100" alt="">
                    
                </div>
            </div>
            </div>

        </div>
    </section><!--/#cta-->

    <section id="portfolio">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Сүрөт галереясы</h2>
            </div>

            <div class="portfolio-items">
                <div class="portfolio-item creative">
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

    <section id="cta2">
        <div class="container">
            <div class="text-center">
                <h2 class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms"><span>Кыргыз радиосу</span> - жан дүйнөнүн азыгы </h2>
                <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">“Кыргыз радиосу көөнөрбөс мурастар казынасы</p>
            </div>
        </div>
    </section>
  
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

<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
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