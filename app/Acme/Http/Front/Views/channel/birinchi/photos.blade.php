@extends('Front::channel.birinchi.default')
@section('title', "Фотогалерея | Биринчи Радио")
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
                <div class="panel anel-default ">
                    <div class="panel-heading">
                        <h3 class="panel-title"><span>Фотогалерея</span></h3>
                    </div>
					<div class="panel-body imagegrid">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="imagepad">       
                                        <div class="slider slider-for">
                                            <div class="imagebig"><img src="{{ asset('images/channels/muzkanal/12.png') }}" alt="..."> 
                                                <a class="btn btn-primary loopmode" href="#modal1" id="myModal1">
                                                    <i class="fa fa-search-plus"></i> Увеличить</a>
                                                <div class="imagegridtext">
                                                    <p>Описание картинки</p><span>Ресурс: КТРК</span>
                                                </div>                             
                                            </div>
                                            <div class="imagebig"><img src="{{ asset('images/channels/muzkanal/Music.jpg') }}" alt="..."> 
                                                <a class="btn btn-primary loopmode" href="#modal2" id="myModal2">
                                                    <i class="fa fa-search-plus"></i> Увеличить</a>
                                                <div class="imagegridtext">
                                                    <p>Описание картинки</p><span>Ресурс: КТРК</span>
                                                </div>                             
                                            </div>
                                            <div class="imagebig"><img src="{{ asset('images/channels/muzkanal/mirbek.jpg') }}" alt="..."> 
                                                <a class="btn btn-primary loopmode" href="#modal3" id="myModal3">
                                                    <i class="fa fa-search-plus"></i> Увеличить</a>
                                                <div class="imagegridtext">
                                                    <p>Описание картинки</p><span>Ресурс: КТРК</span>
                                                </div>                             
                                            </div>
                                            <div class="imagebig"><img src="{{ asset('images/channels/muzkanal/kalykov.jpg') }}" alt="..."> 
                                                <a class="btn btn-primary loopmode" href="#modal4" id="myModal4">
                                                    <i class="fa fa-search-plus"></i> Увеличить</a>
                                                <div class="imagegridtext">
                                                    <p>Описание картинки</p><span>Ресурс: КТРК</span>
                                                </div>                             
                                            </div>
                                            <div class="imagebig"><img src="{{ asset('images/channels/muzkanal/12.png') }}" alt="..."> 
                                                <a class="btn btn-primary loopmode" href="#modal5" id="myModal5">
                                                    <i class="fa fa-search-plus"></i> Увеличить</a>
                                                <div class="imagegridtext">
                                                    <p>Описание картинки</p><span>Ресурс: КТРК</span>
                                                </div>                             
                                            </div>
                                        </div>
                                        <div class="slider slider-nav imagesmall">
                                            <div><img src="{{ asset('images/channels/muzkanal/12.png') }}" alt="..."></div>
                                            <div><img src="{{ asset('images/channels/muzkanal/Music.jpg') }}" alt="..."></div>
                                            <div><img src="{{ asset('images/channels/muzkanal/mirbek.jpg') }}" alt="..."></div>
                                            <div><img src="{{ asset('images/channels/muzkanal/kalykov.jpg') }}" alt="..."></div>
                                            <div><img src="{{ asset('images/channels/muzkanal/12.png') }}" alt="..."></div>
                                        </div> 

                                        <!-- Button trigger modal -->

                                        <div id="modal1" class="modal-demo modal-lg">                             
                                            <button type="button" class="close" onclick="Custombox.close();">
                                                <span>×</span><span class="sr-only">Жабуу</span>
                                            </button>
                                            <h4 class="title">Маданият каналы</h4>
                                            <img src="{{ asset('images/channels/muzkanal/12.png') }}" alt="...">                       
                                        </div>

                                        <div id="modal2" class="modal-demo modal-lg">                             
                                            <button type="button" class="close" onclick="Custombox.close();">
                                                <span>×</span><span class="sr-only">Жабуу</span>
                                            </button>
                                            <h4 class="title">Маданият каналы</h4>
                                            <img src="{{ asset('images/channels/muzkanal/Music.jpg') }}" alt="...">                       
                                        </div>

                                        <div id="modal3" class="modal-demo modal-lg">                             
                                            <button type="button" class="close" onclick="Custombox.close();">
                                                <span>×</span><span class="sr-only">Жабуу</span>
                                            </button>
                                            <h4 class="title">Маданият каналы</h4>
                                            <img src="{{ asset('images/channels/muzkanal/mirbek.jpg') }}" alt="...">                       
                                        </div>

                                        <div id="modal4" class="modal-demo modal-lg">                             
                                            <button type="button" class="close" onclick="Custombox.close();">
                                                <span>×</span><span class="sr-only">Жабуу</span>
                                            </button>
                                            <h4 class="title">Маданият каналы</h4>
                                            <img src="{{ asset('images/channels/muzkanal/kalykov.jpg') }}" alt="...">                       
                                        </div>

                                        <div id="modal5" class="modal-demo modal-lg">                             
                                            <button type="button" class="close" onclick="Custombox.close();">
                                                <span>×</span><span class="sr-only">Жабуу</span>
                                            </button>
                                            <h4 class="title">Маданият каналы</h4>
                                            <img src="{{ asset('images/channels/muzkanal/12.png') }}" alt="...">                       
                                        </div>
                                    </div>
                                </div>                                
                                <div class="col-md-3 photosborder">
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <div class="panel-title">
                                                <h3 class="show-title">
                                                    <a href="#">Другие галереи</a> 

                                                </h3>
                                            </div>
                                        </div>
                                        <div class="panel-body imagegrid">
                                            <div class="row">
                                                <div class="col-md-12 otherphotos">

                                                    <div class="grid_gallery">
                                                        <div class="grid_item">
                                                            <a href="#" class="img-wrap">
                                                                <img src="{{ asset('images/channels/muzkanal/12.png') }}" alt=""/>
                                                                <span>Открыть галерею</span>
                                                                <div class="overlay"></div>
                                                            </a>
                                                        </div>
                                                        <div class=" grid_item">
                                                            <a href="#" class="img-wrap">
                                                                <img src="{{ asset('images/channels/muzkanal/mirbek.jpg') }}" alt=""/>
                                                                <span>Открыть галерею</span>
                                                                <div class="overlay"></div>
                                                            </a>
                                                        </div>
                                                        <div class=" grid_item">
                                                            <a href="#" class="img-wrap">
                                                                <img src="{{ asset('images/channels/muzkanal/kalykov.jpg') }}" alt=""/>
                                                                <span>Открыть галерею</span>
                                                                <div class="overlay"></div>
                                                            </a>
                                                        </div>


                                                    </div>
                                                </div>                               

                                            </div>                                         
                                        </div>                        
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
         <script type="text/javascript" src="{{ asset('js/jquery-migrate-1.2.1.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('slick/slick.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.roundabout.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/custombox.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/legacy.js') }}"></script>
        <script>
            $(document).ready(function () {
                $(".img-wrap img").each(function () {
                    var width = $(this).width();
                    var height = $(this).height();

                    if ((width > height)) {
                        $(this).css({
                            width: "auto",
                            height: "170px"
                        });
                    }
                    else {
                        $(this).css({
                            width: "100%",
                            height: "auto"
                        });
                    }
                });
            });
        </script>

        <script>
            $(function () {
                function galleryModal(button, target) {
                    $(button).on('click', function (e) {
                        Custombox.open({
                            target: target,
                            effect: 'fadein'
                        });
                        e.preventDefault();
                    });
                }

                galleryModal($('#myModal1'), '#modal1');
                galleryModal($('#myModal2'), '#modal2');
                galleryModal($('#myModal3'), '#modal3');
                galleryModal($('#myModal4'), '#modal4');
                galleryModal($('#myModal5'), '#modal5');
            });
        </script>

        <script>
            $('.slider-for').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                asNavFor: '.slider-nav'
            });
            $('.slider-nav').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                asNavFor: '.slider-for',
                dots: false,
                centerMode: true,
                focusOnSelect: true
            });
        </script>

        <script>
            $(document).ready(function () {
                $(".search-toggle").click(function () {
                    $(".logo-block").addClass("search-show");
                    $(".form-search").addClass("visible");
                });
                $(".close-search").click(function () {
                    $(".logo-block").removeClass("search-show");
                    $(".form-search").removeClass("visible");
                });
            });
        </script> 


@stop