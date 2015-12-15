@extends('Front::channel.birinchi.default')
@section('title', "Биринчи Радио")

@section('styles')
<link rel="stylesheet" href="{{ asset('css/radios.css')}}">
@endsection
@section('content')
<div class="birinchiradio">
    <div class="container-fluid metatop">
        <div class="container onepadding">
            <nav class="top-nav">
                <ul>
                    @foreach(\Model\Menu\ModelName::code('main')->parent()->get() as $menu)
                    @if(count($menu->submenus) > 0)
                    <li>
                        <a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="100" data-close-others="false" role="button" aria-expanded="false">{{ $menu->getName() }}</a>
                        <ul class="dropdown-menu" role="menu">
                            @foreach($menu->submenus as $submenu)
                            <li><a href="{{ $submenu->getUrl() }}">{{ $submenu->getName() }}</a></li>
                            @endforeach
                        </ul>
                    </li>          
                    @else
                    <li><a href="{{ $menu->getUrl() }}">{{ $menu->getName() }}</a></li>    
                    @endif
                    @endforeach 
                </ul>
                <ul class="topradio pull-right">
                    <li><a href="{{ route('kyrgyzradio.home') }}">Кыргыз Радиосу</a></li>
                    <li><a href="{{ route('minkiyal.home') }}">Миң Кыял</a></li>
                    <li><a href="{{ route('dostuk.home') }}">Достук</a></li>
                </ul>


            </nav>
        </div>
    </div>
    <div class="container-fluid cffix">
        <div class="col-md-12 topheader">
            <div class="container onepadding">           
                <div class="col-md-3">
                    <nav>
                        <ul>
                            <li class="sitemenu" id="site-channel1">
                                <a href="{{ route('birinchi.home') }}">
                                    <img class="onelogos" src="{{ asset('images/channels/1-radio-notext.png')}}">
                                    <span>Биринчи радио</span>
                                    <h4>Биринчи ради</h4>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-9 oneheader onepadding">
                <ul class="nav navbar-nav chastota">
                    <li>Бишкек 104.1</li>
                    <li>Ыссык-Көл 102.4</li>
                    <li>Нарын 100.5</li>
                    <li>Ош 100.7</li>
                    <li>Баткен 104.2</li>
                    <li>Жалал-Абад 104.7</li>
                    <li>Талас 102.0</li>
                </ul>      
                    <ul class="nav navbar-nav oneline">
                        <li><a class="time" href="#"><time>11:15</time></a></li>
                        <li class="onetime"><a href=""><button class="btn"><i class="fa fa-microphone"></i><span>Прямой эфир</span></button></a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right onesoc">
                        <li class="onepost"><a href=""><i class="fa fa-facebook"></i><span>facebook</span></a></li>
                        <li class="onetwit"><a href=""><i class="fa fa-twitter"></i><span>twitter</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="row" style="margin:0px;">
                <nav class="navbar">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header oneheaderone">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="true">
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
                            <a class="navbar-brand" href="{{ route('birinchi.home') }}"> Башкы</a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav onenavbar">
                                <li><a href="{{ route('birinchi.about') }}">О радио</a></li>
                                <li class="dropdown">
                                    <a href="{{ route('birinchi.broadcasts') }}" class="dropdown-toggle" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Передачи <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Сереп</a></li>
                                        <li><a href="#">Аймактар үнү</a></li>
                                    </ul>
                                </li>                             
                                <li>
                                    <a href="{{ route('birinchi.broadcastsprogramm') }}">
                                        Программа передач <!-- <span class="caret"></span> -->
                                    </a>
                                </li>
                                <li><a href="{{ route('birinchi.photos') }}">Фотогалерея</a></li>
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
                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                    <!-- /.container-fluid -->
                </nav>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row" style="margin-top:10px;">
            <div class="col-md-12">
                <div class="row onepadding">
                    <div class="col-md-9 onepadding">
                        <aside class="dw_focus_widget_news_slider">
                            <div id="carousel-news-slider-2" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="item next left">
                                        <article class="carousel-entry">
                                            <a href="#"><img width="710" height="400" src="{{asset('images/gallery/001.jpg')}}" alt=""></a>
                                            <span class="cat-links "><a href="#" rel="category tag">Спорт</a></span>                     
                                            <div class="carousel-caption">
                                                <div class="entry-meta ">
                                                    <span class="entry-date"><i class="fa fa-clock-o"></i>2 Декабрь, 2015</span>
                                                </div>
                                                <h1 class="entry-title"><a href="#">Кыргыз бильярдчылар Орусияда күч сынашууда</a></h1>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="item">
                                        <article class="carousel-entry">
                                            <a href="#"><img width="710" height="400" src="{{asset('images/gallery/002.jpg')}}" alt=""></a>
                                            <span class="cat-links "><a href="#" rel="category tag">Эконоимка</a>, <a href="#" rel="category tag">Орусия</a></span>                     
                                            <div class="carousel-caption">
                                                <div class="entry-meta ">
                                                    <span class="entry-date"><i class="fa fa-clock-o"></i>2 Декабрь, 2015</span>
                                                </div>
                                                <h1 class="entry-title"><a href="#">Орусия тыюу салган түрк товарлардын тизмеси жарыяланды</a></h1>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="item">
                                        <article class="carousel-entry">
                                            <a href="#"><img width="710" height="400" src="{{asset('images/gallery/003.jpg')}}" alt=""></a>
                                            <span class="cat-links "><a href="#" rel="category tag">Кырсык</a></span>                     
                                            <div class="carousel-caption">
                                                <div class="entry-meta ">
                                                    <span class="entry-date"><i class="fa fa-clock-o"></i>2 Декабрь, 2015</span>
                                                </div>
                                                <h1 class="entry-title"><a href="#">Кечээ болгон жер титирөөдөн бир катар социалдык объекттер жабыркады</a></h1>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="item">
                                        <article class="carousel-entry">
                                            <a href="#"><img width="710" height="400" src="{{asset('images/gallery/004.jpg')}}" alt=""></a>
                                            <span class="cat-links "><a href="#" rel="category tag">Дүйнө жаңылыктары</a></span>                        
                                            <div class="carousel-caption">
                                                <div class="entry-meta">
                                                    <span class="entry-date"><i class="fa fa-clock-o"></i>2 Декабрь, 2015</span>                                             
                                                </div>
                                                <h1 class="entry-title"><a href="#">Стамбулдагы жарылуудан беш киши жаракат алды</a></h1>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="item active left">
                                        <article class="carousel-entry">
                                            <a href="#"><img width="710" height="400" src="{{asset('images/gallery/005.jpg')}}" alt=""></a>
                                            <span class="cat-links"><a href="#" rel="category tag">Экономика</a></span>                        
                                            <div class="carousel-caption">
                                                <div class="entry-meta">
                                                    <span class="entry-date"><i class="fa fa-clock-o"></i>2 Декабрь, 2015</span>                                                
                                                </div>
                                                <h1 class="entry-title"><a href="#">Доллардан баш тартууга мүмкүнбү?</a></h1>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                                <div class="carousel-navigation hidden-xs hidden-sm">
                                    <h2 class="widget-title">Главные новости</h2>
                                    <ol class="carousel-title-indicators">
                                        <li data-target="#carousel-news-slider-2" data-slide-to="0" class="">Кыргыз бильярдчылар Орусияда күч сынашууда</li>
                                        <li data-target="#carousel-news-slider-2" data-slide-to="1" class="">Орусия тыюу салган түрк товарлардын тизмеси жарыяланды</li>
                                        <li data-target="#carousel-news-slider-2" data-slide-to="2" class="">Кечээ болгон жер титирөөдөн бир катар социалдык объекттер жабыркады</li>
                                        <li data-target="#carousel-news-slider-2" data-slide-to="3" class="">Стамбулдагы жарылуудан беш киши жаракат алды</li>
                                        <li data-target="#carousel-news-slider-2" data-slide-to="4" class="active">Доллардан баш тартууга мүмкүнбү?</li>
                                    </ol>
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-news-slider-2" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-news-slider-2" data-slide-to="1" class=""></li>
                                        <li data-target="#carousel-news-slider-2" data-slide-to="2" class=""></li>
                                        <li data-target="#carousel-news-slider-2" data-slide-to="3" class=""></li>
                                        <li data-target="#carousel-news-slider-2" data-slide-to="4" class=""></li>
                                    </ol>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="col-md-3 onepadding">
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
                    <div class="col-md-9 onenews ">
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
                                                </p>
                                            </h5>
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
                                                </p>
                                            </h5>
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
                                                </p>
                                            </h5>
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
                                                </p>
                                            </h5>
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
                                                </p>
                                            </h5>
                                        </div>
                                    </div>
                                    <footer>
                                        <a href="#">Еще статьи</a>
                                    </footer>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 oneserep onefix">
                        <nav>
                            <ul>
                                <li><a href="{{ route('birinchi.news') }}">Выпуск новостей</a></li>
                            </ul>
                        </nav>
                              <iframe width="100%" height="280" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/171625446&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
                       
                          <nav>
                            <ul>
                                <li><a href="{{ route('birinchi.news') }}">Сереп</a></li>
                        </ul>
                        </nav>
                            <iframe width="100%" height="280" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/171625446&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
                        </div>
                </div>
            </div>
        </div>
        <div class="row specnews">
            <div class="panel onenews">
                <div class="panel-heading">
                    <h3 class="panel-title"><span>Передачи</span></h3>
                </div>
                <div class="panel-body">
                    <div class="row specpad">
                        <div class="blocks col-md-4 col-sm-6 col-xs-12">
                            <span class="cart-title category">
                                <a href="#">Спорт</a>
                            </span>
                            <article>
                                <a href="#" class="image-link">
                                    <img src="{{asset('images/gallery/001.jpg')}}">
                                    <span class="date">2 Декабрь, 2015</span>
                                </a>
                                <h2 class="name headline">
                                    <a href="#" title="Premiere for The Invisible Woman">
                                        Кыргыз бильярдчылар Орусияда күч сынашууда
                                    </a>
                                </h2>
                                <div class="description">
                                    <p>
                                        Кыргызстандык бильярдчылар Орусиянын  Томск шаарында отуп жаткан  бильярддын "эркин пирамида" түрү боюнча дүйнө чемпионатына катышууда. . 
                                    </p>
                                </div>
                            </article>
                        </div>
                        <div class="blocks col-md-4 col-sm-6 col-xs-12">
                            <span class="cart-title category">
                                <a href="#">Санкция</a>
                            </span>
                            <article>
                                <a href="#" class="image-link">
                                    <img src="{{asset('images/gallery/002.jpg')}}">
                                    <span class="date">2 Декабрь, 2015</span>
                                </a>
                                <h2 class="name headline">
                                    <a href="#" title="Premiere for The Invisible Woman">
                                        Орусия тыюу салган түрк товарлардын тизмеси жарыяланды
                                    </a>
                                </h2>
                                <div class="description">
                                    <p>
                                        Орус өкмөтү 2016-жылдын 1-январынан тарта Түркиядан алып келүүгө чек койгон азыктардын арасында түстүү капуста, бадыраң, апельсин, мандарин, жүзүм, өрүк,тоок жана үндү эти бар. 
                                    </p>
                                </div>
                            </article>
                        </div>
                        <div class="blocks col-md-4 col-sm-6 col-xs-12">
                            <span class="cart-title category">
                                <a href="#">Кырсык</a>
                            </span>
                            <article>
                                <a href="#" class="image-link">
                                    <img src="{{asset('images/gallery/003.jpg')}}">
                                    <span class="date">2 Декабрь, 2015</span>
                                </a>
                                <h2 class="name headline">
                                    <a href="#" title="Premiere for The Invisible Woman">
                                        Кечээ болгон жер титирөөдөн бир катар социалдык объекттер жабыркады
                                    </a>
                                </h2>
                                <div class="description">
                                    <p>
                                        Кечээ, 1-декабрда Жалал-Абад облусунун  аймагында  күчү 5,5 баллга  жеткен жер  титирөөдөн  Базар-Коргон жана Сузак райондорундагы  бир катар социалдык объекттер жабыркады 
                                    </p>
                                </div>
                            </article>
                        </div>
                        <div class="blocks col-md-4 col-sm-6 col-xs-12">
                            <span class="cart-title category">
                                <a href="#">Кырсык</a>
                            </span>
                            <article>
                                <a href="#" class="image-link">
                                    <img src="{{asset('images/gallery/003.jpg')}}">
                                    <span class="date">2 Декабрь, 2015</span>
                                </a>
                                <h2 class="name headline">
                                    <a href="#" title="Premiere for The Invisible Woman">
                                        Стамбулдагы жарылуудан беш киши жаракат алды
                                    </a>
                                </h2>
                                <div class="description">
                                    <p>
                                        Жергиликтүү бийлик өкүлүнүн айтымында, жасалма бомба метросундагы өткөөл жолдун жанына ташталган. 
                                    </p>
                                </div>
                            </article>
                        </div>
                        <div class="blocks col-md-4 col-sm-6 col-xs-12">
                            <span class="cart-title category">
                                <a href="#">Экономика</a>
                            </span>
                            <article>
                                <a href="#" class="image-link">
                                    <img src="{{asset('images/gallery/003.jpg')}}">
                                    <span class="date">2 Декабрь, 2015</span>
                                </a>
                                <h2 class="name headline">
                                    <a href="#" title="Premiere for The Invisible Woman">
                                        Доллардан баш тартууга мүмкүнбү?
                                    </a>
                                </h2>
                                <div class="description">
                                    <p>
                                        Мындан ары кыймылсыз жана кыймылдуу мүлктөр  улуттук валюта сом менен гана сатылып башташы ыктымал. 
                                    </p>
                                </div>
                            </article>
                        </div>
                        <div class="blocks col-md-4 col-sm-6 col-xs-12">
                            <span class="cart-title category">
                                <a href="#">Саясат</a>
                            </span>
                            <article>
                                <a href="#" class="image-link">
                                    <img src="{{asset('images/gallery/003.jpg')}}">
                                    <span class="date">2 Декабрь, 2015</span>
                                </a>
                                <h2 class="name headline">
                                    <a href="#" title="Premiere for The Invisible Woman">
                                        АКШ “ИМ”ге каршы күрөшкө жоокерлерин жиберет
                                    </a>
                                </h2>
                                <div class="description">
                                    <p>
                                        Иракка жибериле турган атайын бөлүктүн жоокерлери жергиликтүү күчтөргө колдоо көргөзүп, рейддерди өткөрөт, барымтада калгандарды куткарат, чалгын маалыматтарын жыйнайт, “Ислам мамлекети” тобунун лидерлерин колго түшүрүү же өлтүрүү максатын көздөйт. 
                                    </p>
                                </div>
                            </article>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row specnews">
            <div class="panel onenews ">
                <div class="panel-heading">
                    <h3 class="panel-title"><span>Фотогалерея</span></h3>
                </div>
                <div class="panel-body">
                    <div class="col-md-12 col-sm-6 col-xs-12 specpad">


                        <div class="featured_4 specpad" >
                            <div class="col-md-3 onepadding">
                                <div class="featured_element">
                                    <div class="featured_item"> <img width="267" height="267" src="{{asset('images/gallery/001.jpg')}}" class="attachment-thr-fa-quarter wp-post-image" alt="39"></div>
                                    <div class="featured_date">
                                        <p>2 Декарь, 2015</p>
                                    </div>
                                    <div class="featured_cat">
                                        <p>Спорт</p>
                                    </div>
                                    <a href="#" class="f_overlay"></a>
                                    <div class="featured_title_over" style="bottom: 0px;">
                                        <h2><a href="#">Кыргыз спортучлары Оаимпиадада 10 алытн медалге жетишишти</a></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 onepadding">
                                <div class="featured_element">
                                    <div class="featured_item"> <img width="267" height="267" src="{{asset('images/gallery/002.jpg')}}" class="attachment-thr-fa-quarter wp-post-image" alt="44"></div>
                                    <div class="featured_date">
                                        <p>2 Декарь, 2015</p>
                                    </div>
                                    <div class="featured_cat">
                                        <p>Тар дүйнө</p>
                                    </div>
                                    <a href="#" class="f_overlay"></a>
                                    <div class="featured_title_over" style="bottom: 0px;">
                                        <h2><a href="#" >Кыргыз кимди тандайт, же кимди тандатышат?</a></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 onepadding">
                                <div class="featured_element">
                                    <div class="featured_item"> <img width="267" height="267" src="{{asset('images/gallery/003.jpg')}}" class="attachment-thr-fa-quarter wp-post-image" alt="7"></div>
                                    <div class="featured_date">
                                        <p>2 Декарь, 2015</p>
                                    </div>
                                    <div class="featured_cat">
                                        <p>Саясат</p>
                                    </div>
                                    <a href="#" class="f_overlay"></a>
                                    <div class="featured_title_over" style="bottom: 0px;">
                                        <h2><a href="#">Саястачылардын биз билбеген сырлары</a></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 onepadding">
                                <div class="featured_element">
                                    <div class="featured_item"> <img width="267" height="267" src="{{asset('images/gallery/004.jpg')}}" class="attachment-thr-fa-quarter wp-post-image" alt="7"></div>
                                    <div class="featured_date">
                                        <p>2 Декарь, 2015</p>
                                    </div>
                                    <div class="featured_cat">
                                        <p>Шоу дүйнө</p>
                                    </div>
                                    <a href="#" class="f_overlay"></a>
                                    <div class="featured_title_over" style="bottom: 0px;">
                                        <h2><a href="#">Гүлжигит Калыков Кыргызстандын тарыхындагы эң чоң концерт койду</a></h2>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 onepadding">
                                <div class="featured_element">
                                    <div class="featured_item"> <img width="267" height="267" src="{{asset('images/gallery/005.jpg')}}" class="attachment-thr-fa-quarter wp-post-image" alt="39"></div>
                                    <div class="featured_date">
                                        <p>2 Декарь, 2015</p>
                                    </div>
                                    <div class="featured_cat">
                                        <p>Кырсык</p>
                                    </div>
                                    <a href="#" class="f_overlay"></a>
                                    <div class="featured_title_over" style="bottom: 0px;">
                                        <h2><a href="#">Стамбулдагы жарылуудан беш киши жаракат алды</a></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 onepadding">
                                <div class="featured_element">
                                    <div class="featured_item"> <img width="267" height="267" src="{{asset('images/gallery/006.jpg')}}" class="attachment-thr-fa-quarter wp-post-image" alt="44"></div>
                                    <div class="featured_date">
                                        <p>2 Декарь, 2015</p>
                                    </div>
                                    <div class="featured_cat">
                                        <p>Экономика</p>
                                    </div>
                                    <a href="#" class="f_overlay"></a>
                                    <div class="featured_title_over" style="bottom: 0px;">
                                        <h2><a href="#" >Доллардан баш тартууга мүмкүнбү?</a></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 onepadding">
                                <div class="featured_element">
                                    <div class="featured_item"> <img width="267" height="267" src="{{asset('images/gallery/007.jpg')}}" class="attachment-thr-fa-quarter wp-post-image" alt="7"></div>
                                    <div class="featured_date">
                                        <p>2 Декарь, 2015</p>
                                    </div>
                                    <div class="featured_cat">
                                        <p>Дүйнө жаңылыктары</p>
                                    </div>
                                    <a href="#" class="f_overlay"></a>
                                    <div class="featured_title_over" style="bottom: 0px;">
                                        <h2><a href="#">Орусия тыюу салган түрк товарлардын тизмеси жарыяланды</a></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 onepadding">
                                <div class="featured_element">
                                    <div class="featured_item"> <img width="267" height="267" src="{{asset('images/gallery/008.jpg')}}" class="attachment-thr-fa-quarter wp-post-image" alt="7"></div>
                                    <div class="featured_date">
                                        <p>2 Декарь, 2015</p>
                                    </div>
                                    <div class="featured_cat">
                                        <p>Дүйнө жаңылыктары</p>
                                    </div>
                                    <a href="#" class="f_overlay"></a>
                                    <div class="featured_title_over" style="bottom: 0px;">
                                        <h2><a href="#">Орусия тыюу салган түрк товарлардын тизмеси жарыяланды</a></h2>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @stop
    @section('footerscript2')
    <script src="{{ asset('js/newsslider.js') }}"></script>
    <script>
        if ($(window).width() > 768) {
            $('.carousel-slick-birinchi').slick({
                infinite: true,
                slidesToShow: 4,
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
        if ($(window).width() > 768) {
            $('.carousel-slick-peredacha').slick({
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 1,
            });
        }
        if ($(window).width() < 768) {
            $('.carousel-slick-peredacha').slick({
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