@extends('Front::channel.birinchi.default')
@section('title', "Биринчи Радио")
@stop

@section('styles')
<link rel="stylesheet" href="{{ asset('css/radios.css')}}">
@endsection


@section('content')
<div class="container birinchiradio">

    <div class="row">
        <div class="col-md-12 topheader">
            <div class="row">
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
                <div class="col-md-5">
                    <nav>
                        <ul>
                            <li class="sitemenu" id="site-channel1">
                                <a href="#">                                   
                                    <img class="onelogos" src="{{ asset('images/channels/1-radio-notext.png')}}">
                                    <span>Биринчи радио</span>
                                    <h4>Биринчи радио</h4></a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="col-md-7 oneheader">
                    <ul class="nav navbar-nav oneline">
                        <li><a class="time" href="#"><time>11:15</time></a></li>
                        <li class="onetime"><a href=""><button class="btn btn-danger btn-one"><i class="fa fa-microphone"></i><span>Прямой эфир</span></button></a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right onesoc">                       
                        <li class="onepost"><a href=""><i class="fa fa-facebook"></i><span>facebook</span></a></li>
                        <li class="onetwit"><a href=""><i class="fa fa-twitter"></i><span>twitter</span></a></li>
                    </ul>
                </div>

            </div>
            <div class="row">
                <nav class="navbar">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Меню</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="logo-block search-block">
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
                            </div>
                            <a class="navbar-brand" href="{{ route('birinchi.home') }}"> <i class="fa fa-home"></i>Башкы</a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">                                           
                            <ul class="nav navbar-nav">
                                <li class="dropdown">
                                    <a href="{{ route('birinchi.about') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-info-circle"></i>О радио <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"><i class="fa fa-television"></i>О телеканале</a></li>
                                        <li><a href="#"><i class="fa fa-envelope-o"></i>Контакты</a></li>                                                
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="{{ route('birinchi.broadcasts') }}" class="dropdown-toggle" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-info-circle"></i>Передачи <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"><i class="fa fa-television"></i>О телеканале</a></li>
                                        <li><a href="#"><i class="fa fa-envelope-o"></i>Контакты</a></li>                                                
                                    </ul>
                                </li>   
                                <li>
                                    <a href="{{ route('birinchi.broadcastsprogramm') }}"><i class="fa fa-microphone"></i>Программа передач <!-- <span class="caret"></span> --></a>

                                </li>
                                <li><a href="{{ route('birinchi.photos') }}"><i class="fa fa-picture-o"></i>Фотогалерея</a></li>
                            </ul>

                            <ul class="nav navbar-nav navbar-right logo-block onesearch">

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


                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 ">
            <div class="row">
                <div class="col-md-9 onenewsslider">
                    <div class="bhoechie-tab-container">
                        <div class="col-xs-5 bhoechie-tab-menu">
                            <div class="list-group">
                                <a href="#" class="list-group-item active text-center">                              
                                    <span><p>6 миллионунчу жаран Ош шаарында төрөлдү</p></span>
                                    <span>Биз 6 миллионго жеттик. "Элдин санынын өсүшү жарандардын өлкө келечегине терең ишенээрин билдирет". Бул туурасында президент премьер-министр Темир Сариевди кабыл алганда билдирди. Өкмөт жетекчинин маалыматы боюнча, көптөн күтүлгөн 6 миллионунчу жаран кыз бала.</span>
                                </a>
                                <a href="#" class="list-group-item text-center">
                                    <span><p>Кыргызстандын "мыкты футболчу" тандоосу жүрүп жатат</p></span>
                                    <span>Кыргызстанда мыкты футболчу наамына улуттук команданын беш оюнчусу ат салышууда. Ага ылайык Футбол федерациясы жыл жыйынтыгы менен Sport Awards сыйылыгынын талапкер оюнчулардын аты аталганын кабарлайт.</span>
                                </a>
                                <a href="#" class="list-group-item text-center">
                                    <span><p>Жаш ишкерлер: шартка жараша иштеп көнөлү</p></span>
                                    <span>Акча капчыкта сакталып тура бербей, тез-тезден иштетилип турушу керек. Мындай пикирин 2-декабрда өткөрүлө турган Бишкек инвестициялык форумунун уюштуруучулары билдиргени жатышат.</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-7 bhoechie-tab">
                            <!-- flight section -->
                            <div class="bhoechie-tab-content active">
                                <center>
                                    <img src="{{ asset('images/channels/culture/1.jpg')}}" alt="">

                                </center>
                            </div>
                            <!-- train section -->
                            <div class="bhoechie-tab-content">
                                <center>
                                    <img src="{{ asset('images/channels/balastan.png')}}" alt="">
                                </center>
                            </div>
                            <!-- hotel search -->
                            <div class="bhoechie-tab-content">
                                <center>
                                    <img src="{{ asset('images/channels/madaniyat.png')}}" alt="">
                                </center>
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
                <div class="col-md-3 oneserep onefix">
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

<script>
    $(document).ready(function () {
        $("div.bhoechie-tab-menu>div.list-group>a").click(function (e) {
            e.preventDefault();
            $(this).siblings('a.active').removeClass("active");
            $(this).addClass("active");
            var index = $(this).index();
            $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
            $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
        });
    });
</script>

@stop