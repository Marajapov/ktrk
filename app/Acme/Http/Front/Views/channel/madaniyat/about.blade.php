@extends('Front::channel.madaniyat.default')
@section('title', "Маданият")
@section('styles')
@endsection
@section('content')
    <body class="madaniyat">
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
                    <a class="navbar-brand" href="#"><img src="{{ asset('images/channels/madaniyat_white_notext.png')}}"><h4>Маданият</h4></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="menu">
                    <ul class="nav navbar-nav channel_switch">
                        <li class="sitemenu" id="site-channel1">
                            <a href="{{ route('front.home') }}"><img src="{{ asset('images/ktrk_last.svg')}}" style="height:40px;"><span>КТРК</span><h4>КТРК</h4></a></li>
                        <li class="sitemenu" id="site-channel1">
                            <a href="{{ route('muzkanal.home') }}"><img src="{{ asset('images/channels/muz_white_notext.png')}}" ><span>Музыка</span><h4>Музыка</h4></a></li>
                        <li class="sitemenu" id="site-channel1">
                            <a class="active"  href="{{ route('madaniyat.home') }}"><img src="{{ asset('images/channels/madaniyat_white_notext.png')}}"><span>Маданият</span><h4>Маданият</h4></a></li>
                        <li class="sitemenu" id="site-channel1">
                            <a href="{{ route('balastan.home') }}"><img src="{{ asset('images/channels/balastan_white_notext.png')}}"><span>Баластан</span><h4>Баластан</h4></a></li>
                    </ul>   
                </div><!-- /.navbar-collapse -->
            </nav>
        </div>

        <div class="container ">
            <div class="row fixedheader">

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
                            <a class="navbar-brand" href="{{ route('madaniyat.home') }}"> <i class="fa fa-home"></i>Башкы</a>
                        </div>



                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">                                           
                            <ul class="nav navbar-nav">
                                <li class="dropdown">
                                    <a href="{{ route('madaniyat.about') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-info-circle"></i>О канале <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ route('madaniyat.about') }}"><i class="fa fa-minus"></i>О телеканале</a></li>
                                        <li><a href="{{ route('madaniyat.contacts') }}"><i class="fa fa-minus"></i>Контакты</a></li>                                                
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="{{ route('madaniyat.broadcasts') }}" class="dropdown-toggle" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-television"></i>Передачи <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"><i class="fa fa-minus"></i>Тоолуктардын ток-шоусу</a></li>
                                        <li><a href="#"><i class="fa fa-minus"></i>Улутман</a></li>
                                        <li><a href="#"><i class="fa fa-minus"></i>Кыз-жигит. Сармерден</a></li>
                                        <li><a href="#"><i class="fa fa-minus"></i>Өмүр сызыгы - Линия жизни</a></li>
                                        <li><a href="#"><i class="fa fa-minus"></i>Улуу мурас</a></li>
                                        <li><a href="#"><i class="fa fa-minus"></i>Сүрөттөр сүйлөйт</a></li>
                                        <li><a href="#"><i class="fa fa-minus"></i>Доор инсаны: Алай ханышасы <br>Доор инсаны: Алымбек датка </a></li>
                                        <li><a href="#"><i class="fa fa-minus"></i>Салт-санат</a></li>
                                        <li><a href="#"><i class="fa fa-minus"></i>Өкүт</a></li>
                                        <li><a href="#"><i class="fa fa-minus"></i>ТВнын  казынасынан</a></li>                                                    
                                    </ul>
                                </li>

                                <li><a href="{{ route('madaniyat.photos') }}"><i class="fa fa-picture-o"></i>Фотогалерея</a></li>
                            </ul>

                            <ul class="nav navbar-nav navbar-right logo-block">
                                <ul class="soc socmuz">
                                    <li class="tw"><a href="#" title="Twitter"><i class="fa fa-twitter"></i> </a>  </li>
                                    <li class="fb"><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li class="ok"><a href="#" title="Odnoklassniki"><i class="fa fa-odnoklassniki"></i></a></li>
                                    <li class="yt"><a href="#" title="YouTube"><i class="fa fa-youtube"></i></a></li>
                                    <li class="in"><a href="#" title="Instagram"><i class="fa fa-instagram"></i></a></li>

                                </ul>
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
                                <button class="btn btn-danger btn-live" data-toggle="modal" data-target="#liveModal">
                                    <i class="fa fa-dot-circle-o"></i>
                                    түз эфир
                                </button>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div>
        </div>

        <div class="container">

            <div class="row">
                <section class="content clearfix">
                    <div class="col-md-12" style="padding:10px 0px;">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span>Маданият телеканалы</span></h3>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-12 mabout">
                                    <div class="row">
                                        <div class="col-md-5 mimage">
                                            <div class="mlogo">
                                                <img src="{{ asset('images/channels/madaniyat.png')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-7 mculture">
                                             <p>МАДАНИЯТ – абалкы менен азыркынын, эзелки менен эмикинин байланышы.</p>
                                             <p>МАДАНИЯТ – кыргыздын көрөӊгөсүн, улуттун жөрөлгөсүн камтыган канал.</p>
                                             <p>МАДАНИЯТ – көөнөргүс классика менен тарыхий тасмаларды, обологон опера жана балкыткан балетти, сезим козгогон спектакльдер менен  кайрыктуу концертти тартуулайт.</p>

                                         </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5 m1">
                                             <p>Маданият телеканалы Кыргыз Республикасынын Коомдук телерадиоберүү корпорациясынын курамындагы маданият, тил жана тарых багытындагы телекөрсөтүүлөрдү даярдаган жана  көрсөткөн канал болуп эсептелинет. </p>
                                        <p>Бүгүнкү күндө маданияттын  маанилүүлүгүн эске алуу менен МТ каналы Коомдук телерадиоберүү корпорациясы тарабынан Кыргызстандын калкы үчүн түзүлгөн.  </p>
                                           <p> -   Телекөрсөтүү торчосунун  негизги бөлүгү өздүк көрсөтүүлөрдөн  жана  дүйнөлүк  маданий мурастардан, окуялардан, жаңылыктардан түзүлмөкчү.</p> 
                                           <p>-   Маданияттын ар кыл  тармактарынын ишмердүүлүгү  чагылдырылмакчы. </p>                                          
                                        </div>
                                        <div class="col-md-7 m4">
                                            <iframe width="100%" height="450" src="https://www.youtube.com/embed/9WsRuMRxycE?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5 m2">
                                            <p>Каналдын негизги  иштөө принциптери:</p>
                                        </div>
                                        <div class="col-md-7 m3">
                                            <p>Кыргызстан жана  эл аралык  ММКарына   тийиштуу  стандарттын негизинде  иш алып баруу. Көрүүчүгө  таңуулабастан тандоо укугун берүү</p>
                                        </div>
                                    </div>
                                     <div class="row">
                                        <div class="col-md-5 m22">
                                            <p>Каналдын негизги максаты:</p>
                                        </div>
                                        <div class="col-md-7 m3">
                                            <p>Көрүүчүлөрдүн купулуна  толгон  мыкты берүүлөрдү даярдоо. Маданияттын ар тармагын аракеттуу  чагылдыруу.
                                         Тарбия багыты, тарыхты тактоо, баамдоо, таанып билүү, тил маселелери – МТ каналынын  көңүл чордонунда. Көрүүчунүн көңүлүн буруу менен аны бийик  нерсеге  шыктандыруу.</p>
                                        </div>
                                    </div>     
                                      
                              
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
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



   @stop
   @section('footerscript2')
        <script src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap-hover-dropdown.js') }}"></script>

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