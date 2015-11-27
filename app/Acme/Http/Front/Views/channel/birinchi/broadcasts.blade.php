@extends('Front::channel.birinchi.default')
@section('title', "Биринчи Радио")
@stop

@section('styles')
<link rel="stylesheet" href="{{ asset('css/radios.css')}}">
@endsection


@section('content')
<div class="birinchiradio">

    <div class="container-fluid row">

        <div class="col-md-12 topheader">

            <div class="container">
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
                                <a href="{{ route('birinchi.home') }}">                                   
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
                    <div class="container">
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
                            <ul class="nav navbar-nav onenavbar">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-info-circle"></i>О радио <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ route('birinchi.about') }}"><i class="fa fa-minus"></i>О телеканале</a></li>
                                        <li><a href="#"><i class="fa fa-minus"></i>Контакты</a></li>                                                
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="{{ route('birinchi.broadcasts') }}" class="dropdown-toggle" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-info-circle"></i>Передачи <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"><i class="fa fa-minus"></i>О телеканале</a></li>
                                        <li><a href="#"><i class="fa fa-minus"></i>Контакты</a></li>                                                
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
<div class="container">
       <div class="row">
        <div class="col-md-12" style="padding: 10px 0px 0px 0px;">
            <div class="panel panel-carousel ">
                <div class="panel-heading">
                    <h3 class="panel-title"><span>Передачи</span></h3>
                </div>
                <div class="panel-body">
                    <div class="col-md-12 oneperedacha">
                        <div class="carousel-slick-peredacha">
                            <div class="col-md-4">
                                <a href="#">
                                    <img src="<!-- {{ asset('images/channels/culture/1.jpg')}} -->" alt=""/>
                                    <span>Күндүн темасы</span>                                  
                                </a>
                                <a href="#" class="overlay">Lorem ipsum dolor sit amet, sit amet</a>
                            </div>
                            <div class="col-md-4"><a href="#"><img src="images/gallery/002.jpg" alt=""/><span>Название</span><a href="#" class="overlay">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></a></div>
                            <div class="col-md-4"><a href="#"><img src="images/gallery/003.jpg" alt=""/><span>Название</span><a href="#" class="overlay">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></a></div>
                            <div class="col-md-4"><a href="#"><img src="images/gallery/004.jpg" alt=""/><span>Название</span><a href="#" class="overlay">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></a></div>
                            <div class="col-md-4"><a href="#"><img src="images/gallery/005.jpg" alt=""/><span>Название</span><a href="#" class="overlay">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></a></div>
                            <div class="col-md-4"><a href="#"><img src="images/gallery/006.jpg" alt=""/><span>Название</span><a href="#" class="overlay">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></a></div>
                            <div class="col-md-4"><a href="#"><img src="images/gallery/007.jpg" alt=""/><span>Название</span><a href="#" class="overlay">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></a></div>
                            <div class="col-md-4"><a href="#"><img src="images/gallery/008.jpg" alt=""/><span>Название</span><a href="#" class="overlay">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></a></div>
                            <div class="col-md-4"><a href="#"><img src="images/gallery/009.jpg" alt=""/><span>Название</span><a href="#" class="overlay">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></a></div>
                            <div class="col-md-4"><a href="#"><img src="images/gallery/010.jpg" alt=""/><span>Название</span><a href="#" class="overlay">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></a></div>
                            <div class="col-md-4"><a href="#"><img src="images/gallery/011.jpg" alt=""/><span>Название</span><a href="#" class="overlay">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></a></div>
                            <div class="col-md-4"><a href="#"><img src="images/gallery/012.jpg" alt=""/><span>Название</span><a href="#" class="overlay">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></a></div>
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