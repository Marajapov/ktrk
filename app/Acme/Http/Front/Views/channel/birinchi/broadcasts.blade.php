@extends('Front::channel.birinchi.default')
@section('title', "Биринчи Радио")
@stop
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
                    <li></li>
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
</div>


@stop

@section('footerscript2')

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