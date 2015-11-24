@extends('Front::layouts.default')
@section('title', "Биринчи Радио")
@stop


@section('content')
<div class="container birinchiradio">

    <div class="row">
        <div class="col-md-12 topheader">
            <div class="row">
                <div class="col-md-5">
                    <nav>
                        <ul>
                            <li class="sitemenu" id="site-channel1">
                                <a href="#">
                                    <span>Биринчи радио</span>
                                    <h4>Биринчи радио</h4></a>
                                <img class="onelogos" src="{{ asset('images/channels/1-radio-notext.png')}}">
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="col-md-7">
                    <ul class="nav navbar-nav oneline">
                        <li><a href="#"><time>11:15</time></a></li>
                        <li><a href=""><button class="btn btn-danger btn-one">Прямой эфир</button></a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right oneline onesoc">                       
                        <li><a href="">Facebook</a></li>
                        <li><a href="">Twitter</a></li>
                    </ul>
                </div>

            </div>
            <div class="row">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Меню</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#"><i class="fa fa-home"></i>Главная</a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#"><i class="fa fa-home"></i>О радио <span class="sr-only">(current)</span></a></li>  
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-home"></i>Передачи <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#">One more separated link</a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="fa fa-home"></i>Программа передач</a></li>
                                <li><a href="#"><i class="fa fa-home"></i>Фотогалерея</a></li>
                            </ul>
                            <!--              <ul class="nav navbar-nav navbar-right">
                                             <li><a href="#"><time>11:15</time></a></li>
                                             <li><a href=""><button>Прямой эфир</button></a></li>
                                             <li><a href="">Facebook</a></li>
                                             <li><a href="">Twitter</a></li>
                                         </ul> -->
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-9">
                    <div class="panel onemainnew">
                    <div class="panel-body">
                        <div class="oneslider">
                        <img src="{{ asset('images/channels/culture/1.jpg')}}" alt="">
                        <article>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro labore ab voluptatem. Ut obcaecati quasi ullam eaque deserunt itaque soluta, alias in voluptates adipisci nihil nostrum! Optio sapiente incidunt numquam.</article>
                        <article>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro labore ab voluptatem. Ut obcaecati quasi ullam eaque deserunt itaque soluta, alias in voluptates adipisci nihil nostrum! Optio sapiente incidunt numquam.</article>
                        <article>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro labore ab voluptatem. Ut obcaecati quasi ullam eaque deserunt itaque soluta, alias in voluptates adipisci nihil nostrum! Optio sapiente incidunt numquam.</article>
                        </div>
                    </div>
                        
                    </div>
                </div>
                <div class="col-md-3 onefix">
                    <div class="panel panel-default onelist">
                        <div class="panel-heading">
                            <h3 class="panel-title">Категории</h3>
                        </div>
                        <div class="panel-body">
                            <nav>
                                <ul>
                                    <li><a href="">Политика</a></li>
                                    <li><a href="">Общество</a></li>
                                    <li><a href="">Эконоимка</a></li>                                    
                                    <li><a href="">Культура</a></li>
                                    <li><a href="">Спорт</a></li>
                                    <li><a href="">Происшествия</a></li>
                                    <li><a href="">Наука и образование</a></li>
                                    <li><a href="">Туризм</a></li>
                                    <li><a href="">Граница</a></li>
                                    <li><a href="">Сельское хозяйство</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-9 onenews">
                    <div class="panel panel-articles">
                        <div class="panel-heading">
                            <h3 class="panel-title">Лента новостей</h3>
                        </div>
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
                        <a class="media-heading" href="http://1000.ktrk.kg/post/1">КТРК: из-за работы я стал изгоем для родственников</a>

                        <h5 class="media-desc">
                          <p>Кабинет, как у бизнесмена средней руки. Нет ни мебели красного дерева, как в вотчинах других чиновников высокого ранга, ни канцелярского набора из бирюзы. Из роскоши — 6 плазменных телевизоров на стене. Под столом склад жестянок с безалкогольным энергетиком.
                          </p></h5>
                      </div>
                    </div>
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
                <div class="col-md-3 oneserep">
                    <nav>
                        <ul>
                            <li><a href="">Выпуск новостей</a></li>
                            <li><a href="">Сереп</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12" style="padding: 10px 0px 0px 0px;">
            <div class="panel panel-default panel-carousel ">
                <div class="panel-heading madaniyatcolor">
                    <h3 class="panel-title"><span>Фотогалерея</span></h3>
                </div>
                <div class="panel-body">
                    <div class="col-md-12 broadimages">
                        <div class="carousel-slick-birinchi">
                            <div class="col-md-4"><a href="#"><img src="images/gallery/001.jpg" alt=""/><span>Название</span><div class="overlay"></div></a></div>
                            <div class="col-md-4"><a href="#"><img src="images/gallery/002.jpg" alt=""/><span>Название</span><div class="overlay"></div></a></div>
                            <div class="col-md-4"><a href="#"><img src="images/gallery/003.jpg" alt=""/><span>Название</span><div class="overlay"></div></a></div>
                            <div class="col-md-4"><a href="#"><img src="images/gallery/004.jpg" alt=""/><span>Название</span><div class="overlay"></div></a></div>
                            <div class="col-md-4"><a href="#"><img src="images/gallery/005.jpg" alt=""/><span>Название</span><div class="overlay"></div></a></div>
                            <div class="col-md-4"><a href="#"><img src="images/gallery/006.jpg" alt=""/><span>Название</span><div class="overlay"></div></a></div>
                            <div class="col-md-4"><a href="#"><img src="images/gallery/007.jpg" alt=""/><span>Название</span><div class="overlay"></div></a></div>
                            <div class="col-md-4"><a href="#"><img src="images/gallery/008.jpg" alt=""/><span>Название</span><div class="overlay"></div></a></div>
                            <div class="col-md-4"><a href="#"><img src="images/gallery/009.jpg" alt=""/><span>Название</span><div class="overlay"></div></a></div>
                            <div class="col-md-4"><a href="#"><img src="images/gallery/010.jpg" alt=""/><span>Название</span><div class="overlay"></div></a></div>
                            <div class="col-md-4"><a href="#"><img src="images/gallery/011.jpg" alt=""/><span>Название</span><div class="overlay"></div></a></div>
                            <div class="col-md-4"><a href="#"><img src="images/gallery/012.jpg" alt=""/><span>Название</span><div class="overlay"></div></a></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>



    </div>    
</div>

@stop


@section('footerscript2')

<script>
    if ($(window).width() > 768) {
        $('.carousel-slick-birinchi').slick({
            infinite: true,
            slidesToShow: 6,
            slidesToScroll: 1,
        });
    }
    if ($(window).width() < 768) {
        $('.carousel-slick-birinchi').slick({
            infinite: true,
            slidesToShow: 2,
            slidesToScroll: 1,
        });
    }
</script>

@stop