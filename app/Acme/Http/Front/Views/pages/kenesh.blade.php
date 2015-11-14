@extends('Front::layouts.default')
@section('title', '2013 - 2015 - жылга карай КТРКнын Өнүгүү стратегиясынын долбоору | КТРК')
@section('styles')
	<link rel="stylesheet" type="text/css" href="{{ asset('/static/css/styles.css') }}">
@stop
@section('content')

<div class="container main-wrapper">
     <div class="row">
        <div class="top-left-block col-md-12 panel-top-news">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><span>Байкоочу кеңеш</span></h3>
                </div>                                         
                <div class="ns">
                    <figure class="effect-zoe">
                        <a href="article.html" class="main-img"><img src="{{ asset('static/images/ns/1.png') }}" alt="img26"></a>
                        <div class="news-channel">
                            <a href="channel.html"><img src="{{ asset('static/images/logo_notext.png') }}" alt=""/></a>
                        </div>
                        <figcaption>
                            <h2><a href="article.html">КТРКнын Редакциялык Кеңешчисинин (Омбудсмен) институтунун иш-аракети</a></h2>
                            <p class="calendar"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> 07.10.2015</p>
                            <p class="views"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> 555</p>
                            <p class="comments"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> 14</p>

                        </figcaption>
                    </figure>
                </div><!-- end class ns-->
            </div>
        </div>                
    </div><!-- end row -->
</div>


<div class="container main-wrapper">
            <div class="row">
                <section class="content clearfix">
                    <div class="clearfix">
                        <div class="top-left-block col-xs-12 col-sm-12 col-md-12 nsmenu">
                            <nav class="navbar navbar-custom">
                                <div class="container-fluid">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                            <span class="sr-only">Меню</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                        <a class="navbar-brand" href="#">Негизги бет</a>
                                    </div>

                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                        <ul class="nav navbar-nav">
                                            <li><a href="#">Курамы </a></li>
                                            <li><a href="#">Жаңылыктар</a></li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Нормативдик база <span class="caret"></span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Регламент</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#">ПОЛОЖЕНИЕ О ПОРЯДКЕ ПРОВЕДЕНИЯ ОТКРЫТОГО КОНКУРСА НА ЗАМЕЩЕНИЕ ДОЛЖНОСТИ ГЕНЕРАЛЬНОГО ДИРЕКТОРА КТРК КР</a></li>                                                   
                                                </ul>
                                            </li>
                                            <li><a href="#">Отчеттор</a></li>
                                            <li><a href="#">Сүрөт көргөзмө</a></li>
                                            <li><a href="#">Байланыш</a></li>
                                            <li><a href="#">Сурамжылоо</a></li>
                                        </ul>

                                    </div><!-- /.navbar-collapse -->
                                </div><!-- /.container-fluid -->
                            </nav>
                        </div>
                    </div>
                </section>
            </div>

            <div class="row ">
                <div class="top-left-block col-md-9 panel-top-news nsarticles">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><span>Жанылыктар</span></h3>
                        </div>
                        <div class="row "> 
                            <div class="rsnews">
                                <div class="col-xs-12 col-sm-4 col-md-4 rsimg">
                                    <figure class="effect-zoe">
                                        <a href="article.html" class="main-img"><img src="images/image.jpeg" alt="img26"><i class="fa fa-image"></i></a>
                                    </figure>
                                </div>
                                <div class="col-xs-12 col-sm-8 col-md-8 rsanons">
                                    <h2><a href="article.html">Теледебаты КТРК помогли кыргызстанцам с выбором</a></h2>
                                    <h3> Прошедшие в эфире Общественного телерадиоканала теледебаты кандидатов в депутаты ЖК показали не только мастерство журналистов, режиссеров, телеоператоров КТРК, но и помогли телезрителям лучше узнать героев дебатных сражений? </h3>
                                    <div class="rscounters">
                                        <p class="calendar"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> 07.10.2015</p>
                                        <p class="views"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> 555</p>
                                        <p class="comments"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> 14</p> 
                                    </div>
                                </div>                        
                            </div>
                            <div class="rsnews">                              
                                <div class="col-xs-12 col-sm-4 col-md-4 rsimg">
                                    <figure class="effect-zoe">
                                        <a href="article.html" class="main-img"><img src="images/logo_notext.png" alt="img26"><i class="fa fa-play-circle-o"></i></a>
                                    </figure>
                                </div>
                                <div class="col-xs-12 col-sm-8 col-md-8 rsanons">
                                    <h2><a href="article.html">Вместо казахского радио, зазвучало кыргызское</a></h2>
                                    <h3> С жалобой на то, что в Манасском районе Таласской области, в течении недели вместо привычных программ “Биринчи радио ” и “Кыргыз радио ” звучит казахская радиостанция, в институт Редакционного Советника КТРК обратилась жительница села Арал Карачач Кочорбаева.</h3>
                                    <div class="rscounters">
                                        <p class="calendar"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> 07.10.2015</p>
                                        <p class="views"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> 555</p>
                                        <p class="comments"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> 14</p> 
                                    </div>
                                </div>                       
                            </div>
                            <div class="rsnews">                              
                                <div class="col-xs-12 col-sm-4 col-md-4 rsimg">
                                    <figure class="effect-zoe">
                                        <a href="article.html" class="main-img"><img src="images/channels/1-radio.png" alt="img26"><i class="fa fa-link"></i></a>
                                    </figure>
                                </div>
                                <div class="col-xs-12 col-sm-8 col-md-8 rsanons">
                                    <h2><a href="article.html">Кыргызские новости на китайском радио, в русском выпуске новостей</a></h2>
                                    <h3> Согласно жалобе жителя села Гульча Алайского района Абдысатара Абдылдаева, с которой он 17 августа этого года, обратился в институт Редакционного советника КТРК , в течении августа месяца в их селе не было сигнала "Биринчи радио" Общественного телерадиоканала..</h3>
                                    <div class="rscounters">
                                        <p class="calendar"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> 07.10.2015</p>
                                        <p class="views"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> 555</p>
                                        <p class="comments"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> 14</p> 
                                    </div>
                                </div>                       
                            </div>
                        </div>
                    </div>
                </div>
                <div class="top-right-block col-md-3 nsarticles">
                     @include('Front::partials.leftCategories')                          
                </div>
            </div>
        </div>
  
           

@stop