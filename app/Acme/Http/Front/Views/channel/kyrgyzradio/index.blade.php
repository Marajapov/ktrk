@extends('Front::channel.kyrgyzradio.default')
@section('title', "Кыргыз Радио")
@section('styles')
<link rel="stylesheet" href="{{ asset('css/radios.css')}}">
<link rel="stylesheet" href="{{ asset('css/landing/main.css')}}">
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
                    <a class="navbar-brand" href="#"><img src="{{ asset('images/channels/kg-radio.png')}}"><h4>Кыргыз радиосу</h4></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="menu">
                    <ul class="nav navbar-nav channel_switch">
                        <li class="sitemenu" id="site-channel1">
                            <a href="{{ route('front.home') }}"><img src="{{ asset('images/ktrk_last.svg')}}" style="height:40px;"><span>КТРК</span><h4>КТРК</h4></a></li>
                        <li class="sitemenu" id="site-channel1">
                            <a href="{{ route('birinchi.home') }}"><img src="{{ asset('images/channels/1-radio.png')}}" ><span>Биринчи радио</span><h4>Биринчи радио</h4></a></li>
                        <li class="sitemenu" id="site-channel1">
                            <a class="active" href="{{ route('kyrgyzradio.home') }}"><img src="{{ asset('images/channels/kg-radio.png')}}"><span>Кыргыз радиосу</span><h4>Кыргыз радиосу</h4></a></li>
                        <li class="sitemenu" id="site-channel1">
                            <a href="{{ route('minkiyal.home') }}"><img src="{{ asset('images/channels/min-kiyal.png')}}"><span>Миң кыял FM</span><h4>Миң кыял FM</h4></a></li>
                        <li class="sitemenu" id="site-channel1">
                            <a href="{{ route('dostuk.home') }}"><img src="{{ asset('images/channels/dostuk.png')}}"><span>Достук</span><h4>Достук</h4></a></li>    
                    </ul>   
                </div><!-- /.navbar-collapse -->
            </nav>
    </div>

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
                    <a class="navbar-brand" href="{{ route('kyrgyzradio.home') }}"><img src="{{asset('images/channels/kg-radio.png')}}" alt="logo">Кыргыз Радиосу</a>
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
            <div class="text-center">
                <h2 class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms"><span>Кыргыз радиосу</span> - жан дүйнөнүн азыгы </h2>
                <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">“Кыргыз радиосу көөнөрбөс мурастар казынасы</p>
            </div>
        </div>
    </section>
    <br>
    <section><div id="player"></div></section>

    <section id="cta" class="wow fadeIn">
        <div class="container">
            <div class="row">
            <div class="col-md-6 col-xs-12">            
                <div class="col-xs-9">
                    <h2>Чынгыз Айтматов</h2>
                    <p><span></span>Дос, кыйынчылыкта билинет дешет. Менимче, бактылуу кезиңде да билинет.. 
                    </p>
                </div>
                <div class="righter"><i class="fa fa-play"></i></div>
            <div class="col-xs-3">
                <img class="img-responsive" src="{{asset('images/channels/kyrgyzradio/aitmatov.jpg')}}" height="100" width="100" alt="">
                    
                </div>
            </div>  
            <div class="col-md-6 col-xs-12">            
                <div class="col-xs-9">
                    <h2>Чынгыз Айтматов</h2>
                    <p><span></span>«Человек не умирает до тех пор, пока живут знавшие его». </p>
                </div>
                <div class="righter"><i class="fa fa-play"></i></div>
                <div class="col-xs-3">
                <img class="img-responsive" src="{{asset('images/channels/kyrgyzradio/aitmatov.jpg')}}" height="100" width="100" alt="">
                    
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
                                <div role="tabpanel">
                                    <ul class="nav main-tab nav-justified" role="tablist">
                                        <li role="presentation" class="active">
                                            <a href="#tab01" role="tab" data-toggle="tab" aria-controls="tab01" aria-expanded="true">“Өмүрлөш  элек...”  уктуруусу.</a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#tab02" role="tab" data-toggle="tab" aria-controls="tab02" aria-expanded="false">Уктуруу жөнүндө</a>
                                        </li>
                                    </ul>
                                    <div id="tab-content" class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade active in" id="tab01" aria-labelledby="tab01">
                                            <p><iframe width="100%" height="100" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/235888059&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe></p>
                                            <p>Соңку чыгарылыш</p>
                                            <div class="onenews">
                                               <div class="panel panel-articles">
                                                  <div class="panel-body">
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
                                                              <a class="media-heading" href="#">КТРК: из-за работы я стал изгоем для родственников</a>
                                                           </div>
                                                        </div>

                                                        <footer>
                                                           <a href="#">{{ trans('radiopages.Morenews') }}</a>
                                                        </footer>
                                                     </div>
                                                  </div>
                                               </div>
                                            </div>
                                        </div>

                                        <div role="tabpanel" class="tab-pane fade" id="tab02" aria-labelledby="tab02">
                                           <p>Көзү  өтүп  кеткен  белгилүү  инсандардын  жубайлары  менен  маек. Баш  кошкон  мезгилинен  тартып, бирге  жашаган  турмушундагы  кубаныч, өкүнүчтөрү  менен  бирдикте, өмүрлүк  жарынын  кандай  адам  болгонун  кеңири  айтып  беришет.</p>
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
                                            <a href="#tab5" role="tab" data-toggle="tab" aria-controls="tab5" aria-expanded="true">“Тагдыр  тамчылары”</a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#tab6" role="tab" data-toggle="tab" aria-controls="tab6" aria-expanded="false">Уктуруу жөнүндө</a>
                                        </li>
                                    </ul>
                                    <div id="tab-content" class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade active in" id="tab5" aria-labelledby="tab5">
                                            <p><iframe width="100%" height="100" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/235888059&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe></p>
                                            <p>Соңку чыгарылыш</p>
                                            <div class="onenews">
                                               <div class="panel panel-articles">
                                                  <div class="panel-body">
                                                     <div class="panel-body">
                                                        <div class="media">
                                                           <div class="media-left">
                                                              <a href="#">
                                                              <img class="media-object thumb" src="http://ktrk.kg/sites/default/files/styles/juicebox_medium/public/gallery/album/fotos/_mg_9802.jpg" alt="image">
                                                              </a>
                                                           </div>
                                                           <div class="media-body">
                                                              <div class="extra">
                                                                 <span class="e-datetime">18 Нояб , 12:22</span>
                                                                 <span class="e-views"><i class="fa fa-eye"></i>17</span>
                                                              </div>
                                                              <a class="media-heading" href="#">КТРКнын жаңыланган заманбап кеңсеси</a>
                                                           </div>
                                                        </div>
                                                        <footer>
                                                           <a href="#">{{ trans('radiopages.Morenews') }}</a>
                                                        </footer>
                                                     </div>
                                                  </div>
                                               </div>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab6" aria-labelledby="tab6">
                                           <p>Көзү  өтүп  кеткен  белгилүү  инсандардын  жубайлары  менен  маек. Баш  кошкон  мезгилинен  тартып, бирге  жашаган  турмушундагы  кубаныч, өкүнүчтөрү  менен  бирдикте, өмүрлүк  жарынын  кандай  адам  болгонун  кеңири  айтып  беришет.</p>
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
                                            <a href="#tab7" role="tab" data-toggle="tab" aria-controls="tab7" aria-expanded="true">“Бейпил  түн”  уктуруусу.</a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#tab8" role="tab" data-toggle="tab" aria-controls="tab8" aria-expanded="false">Уктуруу жөнүндө</a>
                                        </li>
                                    </ul>
                                    <div id="tab-content" class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade active in" id="tab7" aria-labelledby="tab7">
                                        <div class="onenews">
                                           <div class="panel panel-articles">
                                              <div class="panel-body">
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
                                                          <a class="media-heading" href="#">КТРК: из-за работы я стал изгоем для родственников</a>
                                                       </div>
                                                    </div>
                                                    
                                                    <footer>
                                                       <a href="#">{{ trans('radiopages.Morenews') }}</a>
                                                    </footer>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab8" aria-labelledby="tab8">
                                            <p>Түнкү  адабий-музыкалуу  уктуруусу. Жашоо, турмуш, сүйүү, мамилелер  тууралуу  чакан  аңгеме, новелла  жанрындагы  көркөм  баяндар, ой-толгоолор  </p>
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
                                            <a href="#tab9" role="tab" data-toggle="tab" aria-controls="tab9" aria-expanded="true">Тилим башка, бирок дилим бир.</a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#tab10" role="tab" data-toggle="tab" aria-controls="tab10" aria-expanded="false">Уктуруу жөнүндө</a>
                                        </li>
                                    </ul>
                                    <div id="tab-content" class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade active in" id="tab9" aria-labelledby="tab9">
                                        <div class="onenews">
                                           <div class="panel panel-articles">
                                              <div class="panel-body">
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
                                                          <a class="media-heading" href="#">КТРК: из-за работы я стал изгоем для родственников</a>
                                                       </div>
                                                    </div>
                                                    
                                                    <footer>
                                                       <a href="#">{{ trans('radiopages.Morenews') }}</a>
                                                    </footer>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab10" aria-labelledby="tab10">
                                            <p>Рубрикаларында кесиби башка болсо да кыргыздын ыргактарын созолонткон ыр жандуу башка улуттун  өкүлдөрүн жана  жаңы жазылган ырларды жарыка алып чыккан “Музыкалык аялдама” уктуруусу Кыргыз радиосунун толкунунда  </p>
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
                                            <a href="#tab11" role="tab" data-toggle="tab" aria-controls="tab11" aria-expanded="true">Биз  экөөбүз...</a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#tab12" role="tab" data-toggle="tab" aria-controls="tab12" aria-expanded="false">Уктуруу жөнүндө</a>
                                        </li>
                                    </ul>
                                    <div id="tab-content" class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade active in" id="tab11" aria-labelledby="tab11">
                                            <p>Sound Cloud</p>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab12" aria-labelledby="tab12">
                                            <p>Элге  кеңири  белгилүү   болгон  маданий  жана  коомдук  инсандардын  жубайлары  менен  биргеликтеги  маектери. Алар  бирге  жашаган  турмушундагы  жубайлык  мамилелери, турмуштук  кырдаалдардагы  ийгилик-кемчилдиктери, бактылуу  үй-бүлөлүк  турмушу  тууралуу  бөлүшүшөт.</p>
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
                                            <a href="#tab13" role="tab" data-toggle="tab" aria-controls="tab13" aria-expanded="true">Дин  таануу</a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#tab14" role="tab" data-toggle="tab" aria-controls="tab14" aria-expanded="false">Уктуруу жөнүндө</a>
                                        </li>
                                    </ul>
                                    <div id="tab-content" class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade active in" id="tab13" aria-labelledby="tab13">
                                            <p>Sound Cloud</p>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab14" aria-labelledby="tab14">
                                            <p>Азыр  диний  сабатсыздыктан  туура  эмес  секталарга  кирип, тыюу  салынган  агымдарды  тандап  алган  учурлар  көп  кездешүүдө. Мунун  негизинде  үй-бүлөдө  чыр-чатактар  орун  алып, ата-бала  ортосунда  пикир  келишпеген  көйгөйлөр  жаралууда. “Дин  таануу”  уктуруусу  дүйнөдөгу  бардык  диндердин  тарыхын, алардан  агылып  чыккан  агымдардын  максатын, багытын, ишмердигин  баяндап, ар  бир  динге  жана  анын  келип  чыгуу  тарыхына  кеңири  токтолууда.</p>
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
                                            <a href="#tab15" role="tab" data-toggle="tab" aria-controls="tab15" aria-expanded="true">Биздин айыл</a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#tab16" role="tab" data-toggle="tab" aria-controls="tab16" aria-expanded="false">Уктуруу жөнүндө</a>
                                        </li>
                                    </ul>
                                    <div id="tab-content" class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade active in" id="tab15" aria-labelledby="tab15">
                                            <p>Sound Cloud</p>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab16" aria-labelledby="tab16">
                                            <p>Кыргызстандын кереметтүү жерлери ар бир айылдын жаратылышы, анда жашаган адамдардын пейили, жашоо шартын чагылдырган “Биздин айыл” уктуруусунда.</p>
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
                                            <a href="#tab18" role="tab" data-toggle="tab" aria-controls="tab18" aria-expanded="false">Уктуруу жөнүндө</a>
                                        </li>
                                    </ul>
                                    <div id="tab-content" class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade active in" id="tab17" aria-labelledby="tab17">
                                            <p>Sound Cloud</p>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab18" aria-labelledby="tab18">
                                            <p>Балдардын адептик түшүнүктөрүн байытуу, ата-энелердин, жалпы эле коомдун адептик маданиятын көтөрүү максатында  адистердин кенештери  “Адеп ” долбоорунда.   Адеп сабагы-мезгил талабы”!</p>
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
                                            <a href="#tab19" role="tab" data-toggle="tab" aria-controls="tab19" aria-expanded="true">“Ата-эне мектеби” </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#tab20" role="tab" data-toggle="tab" aria-controls="tab20" aria-expanded="false">Уктуруу жөнүндө</a>
                                        </li>
                                    </ul>
                                    <div id="tab-content" class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade active in" id="tab19" aria-labelledby="tab19">
                                            <p>Sound Cloud</p>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab20" aria-labelledby="tab20">
                                            <p>Бул программада ата-энелердин үй бүлөдөгү,коомдогу орду, бала тарбиялоогоморалдык,психологиялыкдаярдыгы, жоопкерчилиги, өзүнүнүстүнөништөөсүтууралуубелгилүү педагог, инсандык жеке сапаттарды өнүктүрүү адиси Асылбек Жоодонбеков кеңеш берет. Дүйшөмбү күндөрү  саат 16 05 16 25 те эфирге чыгат.</p>
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
                                            <a href="#tab21" role="tab" data-toggle="tab" aria-controls="tab21" aria-expanded="true">Тарыхый инсан</a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#tab22" role="tab" data-toggle="tab" aria-controls="tab22" aria-expanded="false">Уктуруу жөнүндө</a>
                                        </li>
                                    </ul>
                                    <div id="tab-content" class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade active in" id="tab21" aria-labelledby="tab21">
                                            <p>Sound Cloud</p>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab22" aria-labelledby="tab22">
                                            <p>Кыргыз элинин тарыхына,көөнөрбөс маданиятына   опол-тоодой иш жасап, мамлекеттүүлүктү сактоого , агартууга  салым кошкон  тарыхта аты алтын тамгалар менен жазылып, изи калган  баатырлар, акылмандар, илимпоздор, элчилер, мамлекеттик ишмерлер  тууралуу маалыматтар  Кыргыз радиосунун “Тарыхый инсан” уктуруусунда.
                                    Ар бейшемби күнү 16 05 16 25 чейин  уксаңыздар болот.</p>
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
                                            <a href="#tab23" role="tab" data-toggle="tab" aria-controls="tab23" aria-expanded="true">Радио Бейтапкана</a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#tab24" role="tab" data-toggle="tab" aria-controls="tab24" aria-expanded="false">Уктуруу жөнүндө</a>
                                        </li>
                                    </ul>
                                    <div id="tab-content" class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade active in" id="tab23" aria-labelledby="tab23">
                                            <p>Sound Cloud</p>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab24" aria-labelledby="tab24">
                                            <p>Бул уктуруунун максаты жарандарыбыздын ден соолугуна кам коруп, ооруларды алдына алуу жана адистердин кеңешин сунуштоо  .
                                     “Радио Бейтапкана” сиздин ден соолугуңузга кам көрөт!</p>
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
                                            <a href="#tab27" role="tab" data-toggle="tab" aria-controls="tab27" aria-expanded="true">Түз эфирден жолугушуу</a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#tab28" role="tab" data-toggle="tab" aria-controls="tab28" aria-expanded="false">Уктуруу жөнүндө</a>
                                        </li>
                                    </ul>
                                    <div id="tab-content" class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade active in" id="tab27" aria-labelledby="tab27">
                                            <p>Sound Cloud</p>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab28" aria-labelledby="tab28">
                                            <p>Кыргыз маданиятындагы талантту инсандардын бейнесин ачып берүү.Чыгармачылыгын жайылтуу.</p>
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
                                            <a href="#tab29" role="tab" data-toggle="tab" aria-controls="tab29" aria-expanded="true">Ой  талкуу </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#tab30" role="tab" data-toggle="tab" aria-controls="tab30" aria-expanded="false">Уктуруу жөнүндө</a>
                                        </li>
                                    </ul>
                                    <div id="tab-content" class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade active in" id="tab29" aria-labelledby="tab29">
                                            <p>Sound Cloud</p>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab30" aria-labelledby="tab30">
                                            <p>Учурдагы маданияттагы ,адабияттагы жана жашоо турмуштагы орчундуу социалдык проблемаларды талкууга салуу. </p>
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
                                            <a href="#tab30" role="tab" data-toggle="tab" aria-controls="tab30" aria-expanded="true">Таңшы комуз</a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#tab31" role="tab" data-toggle="tab" aria-controls="tab31" aria-expanded="false">Уктуруу жөнүндө</a>
                                        </li>
                                    </ul>
                                    <div id="tab-content" class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade active in" id="tab30" aria-labelledby="tab30">
                                            <p>Sound Cloud</p>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab31" aria-labelledby="tab31">
                                            <p>Улуу залкар комузчулардантартып бүгүнкү күндун комузчуларына чейин  өнөрүн элге таанытуу.</p>
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
                                            <a href="#tab32" role="tab" data-toggle="tab" aria-controls="tab32" aria-expanded="true">Музыкалык обо</a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#tab33" role="tab" data-toggle="tab" aria-controls="tab33" aria-expanded="false">Уктуруу жөнүндө</a>
                                        </li>
                                    </ul>
                                    <div id="tab-content" class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade active in" id="tab32" aria-labelledby="tab32">
                                            <p>Sound Cloud</p>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab33" aria-labelledby="tab33">
                                            <p>Кыргыз искусствосу менен маданиятындагы маданий жаңылыктарды оперативдүү түрдө элге жеткирүү Талкуу, баяндама, анкытама, маек түрүндө түз эфирде эфирге чыгат.</p>
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
                                            <a href="#tab34" role="tab" data-toggle="tab" aria-controls="tab34" aria-expanded="true">Эл ичи -өнөр кенчи</a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#tab35" role="tab" data-toggle="tab" aria-controls="tab35" aria-expanded="false">Уктуруу жөнүндө</a>
                                        </li>
                                    </ul>
                                    <div id="tab-content" class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade active in" id="tab34" aria-labelledby="tab34">
                                            <p>Sound Cloud</p>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab35" aria-labelledby="tab35">
                                            <p>Республиканын баардык аймактарындагы элдик таланттарды элге алып чыгуу.Айыл маданиятынын өсүшүнө көмөк кошуу.Маек, иликтөөнүн негизинде даярдалат.</p>
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
                                            <a href="#tab36" role="tab" data-toggle="tab" aria-controls="tab36" aria-expanded="true">Ансамблдер баяны</a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#tab37" role="tab" data-toggle="tab" aria-controls="tab37" aria-expanded="false">Уктуруу жөнүндө</a>
                                        </li>
                                    </ul>
                                    <div id="tab-content" class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade active in" id="tab36" aria-labelledby="tab36">
                                            <p>Sound Cloud</p>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab37" aria-labelledby="tab37">
                                            <p>Баардык жанрдагы ансамблдердин чыгармачылыгын жайылтуу. Эмгегин элге жеткирүү. Орду, аткарган ишин ачып берүү</p>
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
                                            <a href="#tab38" role="tab" data-toggle="tab" aria-controls="tab38" aria-expanded="true">Сөз дүйнө</a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#tab39" role="tab" data-toggle="tab" aria-controls="tab39" aria-expanded="false">Уктуруу жөнүндө</a>
                                        </li>
                                    </ul>
                                    <div id="tab-content" class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade active in" id="tab38" aria-labelledby="tab38">
                                            <p>Sound Cloud</p>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab39" aria-labelledby="tab39">
                                            <p>Бул уктурууда, эне тилибиздин  лексикасына  маданияттын, илимдин, техниканын  өнүгүшү менен жаңыдан кирип жаткан  НЕОЛОГИЗМ сөздөрүнө саякат жасайбыз</p>
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
                                            <a href="#tab40" role="tab" data-toggle="tab" aria-controls="tab40" aria-expanded="true">“Саякат”</a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#tab41" role="tab" data-toggle="tab" aria-controls="tab41" aria-expanded="false">Уктуруу жөнүндө</a>
                                        </li>
                                    </ul>
                                    <div id="tab-content" class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade active in" id="tab40" aria-labelledby="tab40">
                                            <p>Sound Cloud</p>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab41" aria-labelledby="tab41">
                                            <p>Бул уктурууда Кыргызстандын ажайып кооз, көздүн жоосун алган керемет, ошону менен бирге ары сырдуу жерлерине саякат жасап, угармандарга маалымат беребиз.</p>
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
                                            <a href="#tab42" role="tab" data-toggle="tab" aria-controls="tab42" aria-expanded="true">Табият сырлары</a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#tab43" role="tab" data-toggle="tab" aria-controls="tab43" aria-expanded="false">Уктуруу жөнүндө</a>
                                        </li>
                                    </ul>
                                    <div id="tab-content" class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade active in" id="tab42" aria-labelledby="tab42">
                                            <p>Sound Cloud</p>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab43" aria-labelledby="tab43">
                                            <p>Бул уктурууда, угармандар менен айлана-чөйрөгө, асман-жерге, жана андагы өсүмдүктөгө, жаратылыш кубулуштарына саресеп салып, байкоо жургузуу менен бирге аларды жатык тил менен кызыктуу баяндап бергенге</p>
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

    <section id="cta" class="wow fadeIn">
        <div class="container">
            <div class="row">
            <div class="col-md-6 col-xs-12">            
                <div class="col-xs-9">
                    <h2>Чынгыз Айтматов</h2>
                    <p><span></span>Дос, кыйынчылыкта билинет дешет. Менимче, бактылуу кезиңде да билинет.. 
                    </p>
                </div>
                <div class="righter"><i class="fa fa-play"></i></div>
            <div class="col-xs-3">
                <img class="img-responsive" src="{{asset('images/channels/kyrgyzradio/aitmatov.jpg')}}" height="100" width="100" alt="">
                    
                </div>
            </div>  
            <div class="col-md-6 col-xs-12">            
                <div class="col-xs-9">
                    <h2>Чынгыз Айтматов</h2>
                    <p><span></span>«Человек не умирает до тех пор, пока живут знавшие его». </p>
                </div>
                <div class="righter"><i class="fa fa-play"></i></div>
                <div class="col-xs-3">
                <img class="img-responsive" src="{{asset('images/channels/kyrgyzradio/aitmatov.jpg')}}" height="100" width="100" alt="">
                    
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

    <section id="cta" class="wow fadeIn">
        <div class="container">
            <div class="row">
            <div class="col-md-6 col-xs-12">            
                <div class="col-xs-9">
                    <h2>Чынгыз Айтматов</h2>
                    <p><span></span>Дос, кыйынчылыкта билинет дешет. Менимче, бактылуу кезиңде да билинет.. 
                    </p>
                </div>
                <div class="righter"><i class="fa fa-play"></i></div>
            <div class="col-xs-3">
                <img class="img-responsive" src="{{asset('images/channels/kyrgyzradio/aitmatov.jpg')}}" height="100" width="100" alt="">
                    
                </div>
            </div>  
            <div class="col-md-6 col-xs-12">            
                <div class="col-xs-9">
                    <h2>Чынгыз Айтматов</h2>
                    <p><span></span>«Человек не умирает до тех пор, пока живут знавшие его». </p>
                </div>
                <div class="righter"><i class="fa fa-play"></i></div>
                <div class="col-xs-3">
                <img class="img-responsive" src="{{asset('images/channels/kyrgyzradio/aitmatov.jpg')}}" height="100" width="100" alt="">
                    
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
                <div class="col-sm-3 wow fadeInLeft">
                    <h3 class="column-title">Логотип</h3>
                    <!-- 16:9 aspect ratio -->               
                    <div class="img-responsive">
                      <img src="{{asset('images/channels/kg-radio.png')}}" alt="">
                    </div>
                </div>

                <div class="col-sm-9 wow fadeInRight">
                    <h3 class="column-title">Тарыхы</h3>
                        <p>Кыргыз радиосу мурдагы Улуттук мамлекеттик радионун курамынан 2009-жылы июнь айында өзүнчө адабий-музыкалык канал катары бөлүнүп чыккан. Кыргыз радиосу улуттук идеологияны жүргүзгөн, калкка рухий азык тараткан, элибиздин көркөм дөөлөттөрүн жайылткан, адабий-музыкалык багытта жан дүйнөнү тазарткан, адеп-ахлак, каада-салттын мектеби болгон уникалдуу радио. Кыргыз радиосунун концепциясы  - көркөм өнөрдүн таасири аркылуу жалпы угармандардын жан дүйнөсүн байытуу, тарбиялоо. </p> 
                        <p>Ырасында эле “Адабият –элдин сезими, элдин рухий турмушунун жемиши” (В.Белинский) же болбосо музыканын тили көтөрүлбөй турган тил. Ал жандын тили (А.Ауэрбах) - деп таамай айтылгандай, адабият менен музыка бүтүндөй элди тазалыкка, адамгерчиликке тарбиялай турган курал. Кыргыз радиосу ушул улуу максатты аркалайт. </p>
                        <p>Күн сайын 12(он эки) саттык уктуруулар эфирге чыгат. Уктуруулар жалаң кыргыз тилинде даярдалат. Уктуруулардын сапатын жакшыртып, угармандардын катарын көбөйтүү максатында редакция жамааты ар убакта талкууларды, талдоолорду өткөрүп, өз кызматын өтөп бүткөн уктурууларды жаап, жаңы долбоорлордун үстүндө изденип, эфирге даярдап келишет. Ошол эле учурда Радионун жүзүн чагылдырып турган роликтер маал-маалы менен жаңыланып турат. Бүгүнкүдөй саясатташкан , күнүмдүк көйгөйлөр адамдын адамдын акыл-эсин чарчатып турган кымгуут заманда угармандардын жан дүйнөсүнө азык берип, эс алууга багыттап, жакшылыкка үндөп келаткан Кыргыз Радиосунун келечеги алдыда</p>
                </div>                
            </div>
             <div class="section-header">             
                <p class="text-justify wow fadeInDown">.</p>
            </div>
        </div>
    </section><!--/#about-->
</div>
@stop
@section('footerscript2')
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>

   <script src="{{ asset('jwplayer/jwplayer.js') }}"></script>
   // <script>jwplayer.key = "tmEO2SU8NzqLBoHr2Vq6nV13XCyfo8xbdiCb/Q==";</script>
   <!-- <script type="text/javascript">
      var playerInstance = jwplayer("player");
      
      //    $('#playerPlay').click(function(){
      //        playerInstance.play();
      //    });
      
      playerInstance.setup({
          autostart: true,
          playlist: [{
                  image: "{{ asset('images/channels/muztv.png') }}",
                  sources: [{
                          file: "http://212.112.96.232:8083;stream.nsv"
                      }]
              }],
          width: "100%",
          height: "100%",
          aspectratio: "16:9",
          primary: "flash",
          skin: {
              name: "five"
          },
          stretching: "exactfit"
      });
   </script>



<script type='text/javascript'>
jwplayer('player').setup({
'author': 'Kyrgyz',
'description': 'Kyrgyz',
'file': 'http://server1.cityedv.at:9036/64kbps',
'type': 'mp3',
'provider': 'sound',
'autostart': 'true',
'controlbar': 'bottom',
'width': '470',
'height': '20',
'skin': 'bekle',
});
</script>-->

<script type='text/javascript'>
jwplayer('player').setup({
'author': 'Kyrgyz',
'description': 'Kyrgyz',
'file': 'http://server1.cityedv.at:9036/64kbps',
'type': 'mp3',
'provider': 'sound',
'autostart': 'true',
'controlbar': 'bottom',
'width': '470',
'height': '20',
'skin': 'bekle',
});
</script>

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

@stop