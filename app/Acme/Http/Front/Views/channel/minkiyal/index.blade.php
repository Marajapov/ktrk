@extends('Front::channel.kyrgyzradio.default')
@section('title', "Миң Кыял ФМ")
@section('styles')
<link rel="stylesheet" href="{{ asset('css/radios.css')}}">
<link rel="stylesheet" href="{{ asset('css/landing/minkiyal.css')}}">
@endsection
@section('content')
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
               <a class="navbar-brand" href="#">
                  <img src="{{ asset('images/channels/min-kiyal.png')}}">
                  <h4>Миң кыял</h4>
               </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="menu">
               <ul class="nav navbar-nav channel_switch">
                  <li class="sitemenu" id="site-channel1">
                     <a href="{{ route('front.home') }}">
                        <img src="{{ asset('images/ktrk_last.svg')}}" style="height:40px;"><span>КТРК</span>
                        <h4>КТРК</h4>
                     </a>
                  </li>
                  <li class="sitemenu" id="site-channel1">
                     <a href="{{ route('birinchi.home') }}">
                        <img src="{{ asset('images/channels/1-radio.png')}}" ><span>Биринчи радио</span>
                        <h4>Биринчи радио</h4>
                     </a>
                  </li>
                  <li class="sitemenu" id="site-channel1">
                     <a href="{{ route('kyrgyzradio.home') }}">
                        <img src="{{ asset('images/channels/kg-radio.png')}}"><span>Кыргыз радиосу</span>
                        <h4>Кыргыз радиосу</h4>
                     </a>
                  </li>
                  <li class="sitemenu" id="site-channel1">
                     <a class="active" href="{{ route('minkiyal.home') }}">
                        <img src="{{ asset('images/channels/min-kiyal.png')}}"><span>Миң кыял FM</span>
                        <h4>Миң кыял FM</h4>
                     </a>
                  </li>
                  <li class="sitemenu" id="site-channel1">
                     <a href="{{ route('dostuk.home') }}">
                        <img src="{{ asset('images/channels/dostuk.png')}}"><span>Достук</span>
                        <h4>Достук</h4>
                     </a>
                  </li>
               </ul>
            </div>
            <!-- /.navbar-collapse -->
         </nav>
      </div>
      <header id="header">
         <nav id="main-menu" class="navbar navbar-default fixedheader2" role="banner">
            <div class="container">
               <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="sr-only">Меню</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="{{ route('dostuk.home') }}"><img src="{{ asset('images/channels/min-kiyal.png')}}" alt="logo">Миң кыял FM</a>
                 <div class="onetime"><a href="{{ asset('online/online-1000.php')}}" onclick="window.open(this.href, '', 'scrollbars=1,height='+Math.min(207, screen.availHeight)+',width='+Math.min(400, screen.availWidth)); return false;"><button class="btn"><i class="fa fa-microphone blink"></i><span>Түз эфир</span></button></a></div>
               </div>
               <div class="collapse navbar-collapse navbar-right">
                  <ul class="nav navbar-nav">
                     <li class="scroll active"><a href="#home">Башкы</a></li>
                     <li class="scroll"><a href="#services">Уктуруулар</a></li>
                     <li class="scroll"><a href="#portfolio">Фотогалерея</a></li>
                     <li class="scroll"><a href="#about">Радио жөнүндө</a></li>
                  </ul>
               </div>
            </div>
            <!--/.container-->
         </nav>
         <!--/nav-->
      </header>
      <!--/header-->
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
               </div>
               <!--/.item-->
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
               </div>
               <!--/.item-->
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
               </div>
               <!--/.item-->
            </div>
            <!--/.owl-carousel-->
         </section>
         <!--/#main-slider-->
         <section id="cta2">
            <div class="container">
               <div class="section-header2">
                  <h2 class="section-title text-center wow fadeInDown"></h2>
                  <h2 data-wow-duration="300ms" data-wow-delay="0ms"><span>Радио “Миң кыял FM”</span>- Кыялдар орундалат!!!</h2>
                  <h2 class="section-title text-center wow fadeInDown"></h2>
               </div>
            </div>
         </section>
         <section id="services" >
            <div class="container">
               <div class="section-header">
                  <h2 class="section-title text-center wow fadeInDown">Уктуруулар</h2>
                  <p class="text-center wow fadeInDown">“Миң кыял FM” Бишкек шаары жана Чүй облусу боюнча FM 103. 7 МГ ц жыштыгында,  “стерео” режиминде,  жалпы көлөмү 24 саат  бою  иш алып барат. Мындан сырткары,  радиостанция учурда Баткенде FM 102. 2 МГ ц, Ош жана Жалал Абад облустары боюнча  FM 106. 3 МГ ц, Нарын облусунда  FM 107. 7 МГ ц Талас облусунда FM 105.7 МГ ц, Ысык Көл облусунда FM 100. 6 МГ ц жыштыктарында уктурулат.</p>
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
                                       <a href="#tab01" role="tab" data-toggle="tab" aria-controls="tab01" aria-expanded="true">“БАЛ КАЙМАК” </a>
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
                                       <p>Мүнөзү боюнча куттуктоо программасы. Аталган программа күнүнө 3 жолу түз эфирде чыгат. “Бал каймак” аркылуу радионун угармандар менен тыгыз байланышы түзүлүп турат. Угармандар бул программанын алкагында түз эфирдеги телефон аркылуу байланышка чыгып, куттуктоо, салам жана каалоо-тилектерин айта алышат. Ошондой эле, 10 00 кыска номерине СМС-билдирүү жиберүү аркылуу да куттуктоолорун өз дарегине жеткире алышат.  
                                          08:00-10:00
                                          13:00-14:00
                                          22:00-23:00
                                       </p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--/.col-md-4-->
                     <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">
                        <div class="media service-box">
                           <div class="pull-left">
                              <i class="fa fa-bullhorn"></i>
                           </div>
                           <div class="media-body">
                              <div role="tabpanel">
                                 <ul class="nav main-tab nav-justified" role="tablist">
                                    <li role="presentation" class="active">
                                       <a href="#tab5" role="tab" data-toggle="tab" aria-controls="tab5" aria-expanded="true">“СВЕТ ЖОК” </a>
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
                                       <p>Мүнөзү боюнча таанышуу программасы. Жалгыздыктан тажаган угармандар үчүн жакшы мүмкүнчүлүк. Сүйүктүүсүн же жакшы дос, санаалаш, пикирлеш тапкысы келген угармандар түз эфирдеги телефон аркылуу байланышка чыгып, өзүнүн критерийлерин айтып, телефондорун таштайт. Ушул эле учурда бул программанын алкагында эң активдүү ролду 10 00 кыска номериндеги СМС-кызматы ойнойт.  
                                          Дүйшөмбү-Жума. 24:00-01:00
                                       </p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--/.col-md-4-->                    
                     <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">
                        <div class="media service-box">
                           <div class="pull-left">
                              <i class="fa fa-bullhorn"></i>
                           </div>
                           <div class="media-body">
                              <div role="tabpanel">
                                 <ul class="nav main-tab nav-justified" role="tablist">
                                    <li role="presentation" class="active">
                                       <a href="#tab7" role="tab" data-toggle="tab" aria-controls="tab7" aria-expanded="true">“BashBarmak-show” </a>
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
                                       <p>Мүнөзү боюнча көңүл ачуучу программа. Эфирдик классификациясы боюнча эки саатык кечки шоу. Бул программанын алкагында угармандар, эки саат бою бир катар шаттуу оюндарга катышып, керектүү кеңештерди, гороскопту угуп, программанын башталышында тандалып алынган күндүн темасы боюнча пикир алышат. 
                                          Дүйшөмбү-Жума. 17:00-19:00
                                       </p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--/.col-md-4-->
                     <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">
                        <div class="media service-box">
                           <div class="pull-left">
                              <i class="fa fa-bullhorn"></i>
                           </div>
                           <div class="media-body">
                              <div role="tabpanel">
                                 <ul class="nav main-tab nav-justified" role="tablist">
                                    <li role="presentation" class="active">
                                       <a href="#tab9" role="tab" data-toggle="tab" aria-controls="tab9" aria-expanded="true">“ПАТЕФОН” </a>
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
                                       <p>Мүнөзү боюнча көңүл ачуучу жана конкурстук программа. Уктурууга музыкалык аспаптардын биринде ойной алган 4 ырчы катышат. Булар эки-экиден командага бөлүнүп өз ара күч сынашат. Таймаштын талабына ылайык, катышуучулар музыкалык аспаптын коштоосунда жандуу үн менен бир куплеттен ырдап берүүлөрү керек. Тапшырма катары кайсыдыр бир тамга берилет, аткарыла турган чыгарманын биринчи куплети ушул тамгадан башталышы зарыл. Мисалы: к тамгасы берилсе, “кыргыз жери сүйөм сени”. Программанын жеңүүчүлөрү түз эфирдеги телефон аркылуу байланышка чыккан жети угармандын добушу менен аныкталат. Ошондой эле 1037 кыска номерине келген СМС-добуштар, студияга ырчыларга колдоо тобу катары келген 8 угармандардын добушу   да эсепке алынат. Программа негизинен кыргыз музыка дүйнөсү  жандуу үн менен ырдоого шыктуу таланттардан уучу кур эмес экендигин далилдөө. </p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--/.col-md-4--> 
                  </div>
               </div>
               <!--/.row-->    
            </div>
            <!--/.container-->
         </section>
         <!--/#services-->
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
                  </div>
                  <!--/.portfolio-item-->
                  <div class="portfolio-item">
                     <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{asset('images/channels/kyrgyzradio/ny.jpg')}}" alt="">
                        <div class="portfolio-info">
                           <h3>Галерея</h3>
                           <a class="preview" href="{{asset('images/channels/kyrgyzradio/ny.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                     </div>
                  </div>
                  <!--/.portfolio-item-->
                  <div class="portfolio-item">
                     <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{asset('images/channels/kyrgyzradio/ny.jpg')}}" alt="">
                        <div class="portfolio-info">
                           <h3>Галерея</h3>
                           <a class="preview" href="{{asset('images/channels/kyrgyzradio/ny.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                     </div>
                  </div>
                  <!--/.portfolio-item-->
                  <div class="portfolio-item">
                     <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{asset('images/channels/kyrgyzradio/ny.jpg')}}" alt="">
                        <div class="portfolio-info">
                           <h3>Галерея</h3>
                           <a class="preview" href="{{asset('images/channels/kyrgyzradio/ny.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                     </div>
                  </div>
                  <!--/.portfolio-item-->
                  <div class="portfolio-item">
                     <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{asset('images/channels/kyrgyzradio/ny.jpg')}}" alt="">
                        <div class="portfolio-info">
                           <h3>Галерея</h3>
                           <a class="preview" href="{{asset('images/channels/kyrgyzradio/ny.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                     </div>
                  </div>
                  <!--/.portfolio-item-->
                  <div class="portfolio-item">
                     <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{asset('images/channels/kyrgyzradio/ny.jpg')}}" alt="">
                        <div class="portfolio-info">
                           <h3>Галерея</h3>
                           <a class="preview" href="{{asset('images/channels/kyrgyzradio/ny.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                     </div>
                  </div>
                  <!--/.portfolio-item-->
                  <div class="portfolio-item">
                     <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{asset('images/channels/kyrgyzradio/ny.jpg')}}" alt="">
                        <div class="portfolio-info">
                           <h3>Галерея</h3>
                           <a class="preview" href="{{asset('images/channels/kyrgyzradio/ny.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                     </div>
                  </div>
                  <!--/.portfolio-item-->
                  <div class="portfolio-item">
                     <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{asset('images/channels/kyrgyzradio/ny.jpg')}}" alt="">
                        <div class="portfolio-info">
                           <h3>Галерея</h3>
                           <a class="preview" href="{{asset('images/channels/kyrgyzradio/ny.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                     </div>
                  </div>
                  <!--/.portfolio-item-->
               </div>
            </div>
            <!--/.container-->
         </section>
         <!--/#portfolio-->
         <section id="about">
            <div class="container">
               <div class="section-header">
                  <h2 class="section-title text-center wow fadeInDown">Миң Кыял радиосу тууралуу</h2>
                  <p class="text-center wow fadeInDown">Аталышы: Негизинен бул сөз айкашын чечмелеп келсек “миң”  көп же чексиз деген маанини берет. Ал эми “кыял” – адамдын жан-дүйнөсүндө жашаган эң бир жарык, эң бир сонун, адамды алдыга сүрөп, турмушунда не бир жаркын үмүттөрдү пайда кылган жакшы нерсе. “Кыргыз” деген түпкүлүктүү элдин кулундары болгонубуздан кийин, албетте улуттук колоритке да ылайыктуу келет. Эң негизгиси кыргыз музыкасынын корифейи Токтогул Сатылгановдун толуп-ташып турган жаштыктын символу болгон“Миң-кыял” аттуу күүсүнүн көп кырдуу маанисине таасирленип тандалып алынган.  </p>
               </div>
               <div class="row">
                  <div class="col-sm-6 wow fadeInLeft">
                     <h3 class="column-title">Тарыхы</h3>
                     <p>Кыргыз Коомдук Телерадиокорпорациянын 3-каналы болгон “Миң кыял FM” радиосу 2007-жылы 1-январда ачылган. Кыргыз улуттук Радиосунун 1, 2–программаларынан эфирдик классификациясы аркылуу кескин айырмаланат, тактап айтканда, “Миң-Кыял  FM” 80% музыкадан, 20%ы маалыматтан турат. Радио программаларын музыкалык-маалыматтык форматтын  принциптерин сактоо менен кыргыз тилинде гана даярдайт. Музыкалык саясаты боюнча Кыргызстандык гана аткаруучулардын кыргыз жана орус тилдүү чыгармаларын угармандар арасында жайылта турган алгачкы радиостанция. Ошондой эле рекламалык кызмат дагы эки тилде жүргүзүлөт. Маалымат таратууда “Миң кыял FM” радиосу “Би-Би-Си” Бүткүл дүйнөлүк  маалымат кызматы менен өнөктөш экендиги менен өзгөчөлүү. 
                        “Миң кыял FM” Бишкек шаары жана Чүй облусу боюнча FM 103. 7 МГ ц жыштыгында,  “стерео” режиминде,  жалпы көлөмү 24 саат  бою  иш алып барат. Мындан сырткары,  радиостанция учурда Баткенде FM 102. 2 МГ ц, Ош жана Жалал Абад облустары боюнча  FM 106. 3 МГ ц, Нарын облусунда  FM 107. 7 МГ ц Талас облусунда FM 105.7 МГ ц, Ысык Көл облусунда FM 100. 6 МГ ц жыштыктарында уктурулат. 
                     </p>
                  </div>
                  <div class="col-sm-6 wow fadeInRight">
                     <h3 class="column-title">Радиостанциянын концепциясы: </h3>
                     <p>- Радиоугармандардын маалыматтык, социалдык-этикалык жана маданий-эстетикалык талаптарын  канааттандыруу максатында жогорку сапаттагы радиоуктурууларды  даярдоо. </p>
                     <p>- Республика тургундарына ишенимдүү жана оперативдүү маалыматтарды жеткирүү.</p>
                     <p>- Өлкөнүн региондору арасында навигациялык көпүрөлөрдү түзүү.</p>
                     <p>- Угармандар менен,  жана угармандар арасында диалогду тереңдетүү жана кеңейтүү</p>
                     <p>- Коомчулукту  бириктирүү  каражаты катары  улуттук маданиятты, саясий маданиятты  өнүктүрүүгө көмөк көргөзүү.  </p>
                     <p>- Кыргыз тилдүү музыкага басым коюу, ата – мекендик аткаруучуларга колдоо көрсөтүү</p>
                  </div>
               </div>
            </div>
         </section>
         <!--/#about-->
         <section id="get-in-touch">
            <div class="container">
               <div class="section-header">
                  <h2 class="section-title text-center wow fadeInDown">Дареги:</h2>
                  <p class="text-center wow fadeInDown">Жаш Гвардия бульвары №59</p>
               </div>
               <div class="section-header">
                  <h2 class="section-title text-center wow fadeInDown">Түз эфир:</h2>
                  <p class="text-center wow fadeInDown">996 312 653 714 <br></p>
                  <p class="text-center wow fadeInDown">SMS Портал: 10 00 <br></p>
               </div>
               <div class="section-header">
                  <h2 class="section-title text-center wow fadeInDown">Электрондук дарек</h2>
                  <p class="text-center wow fadeInDown">е - mail: mkfmradio@gmail.com<br></p>
                  <p class="text-center wow fadeInDown">www.facebook.com/MinKyalFm<br></p>
               </div>
            </div>
         </section>
         <!--/#get-in-touch-->
      </div>
@stop