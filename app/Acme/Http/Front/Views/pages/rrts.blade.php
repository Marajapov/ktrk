@extends('Front::layouts.default')
@section('title', 'Редакциялык кеңешчи')
@sectin('styles')
	<link rel="stylesheet" type="text/css" href="{{ asset('/static/css/styles.css') }}">
@stop
@section('content')
	<style>
	.rsarticles blockquote a:focus, a:hover {
    color: #23527c !important;
    text-decoration: underline !important;
    cursor: pointer;
} 
	</style>
<div class="container main-wrapper">
    <div class="row">
        <section class="content clearfix">
            <div class="clearfix">
                <div class="top-left-block col-md-9">
                    <div class="panel panel-default">
                        <div class="panel-body">
                        <div class="panel-heading">
                            <h3 class="panel-title"><span>Редакциялык кеңешчи</span></h3>
                        </div>
                        <div class="mainnews">
                            <figure class="effect-zoe">
                                <a href="article.html" class="main-img"><img src="images/rs/1.jpg" alt="img26"></a>
                                <div class="news-channel">
                                    <a href="channel.html"><img src="images/logo_notext.png" alt=""/></a>
                                </div>
                                <figcaption>
                                    <h2><a href="article.html">КТРКнын Редакциялык Кеңешчисинин (Омбудсмен) институтунун иш-аракети</a></h2>
                                    <p class="calendar"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> 07.10.2015</p>
                                    <p class="views"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> 555</p>
                                    <p class="comments"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> 14</p>

                                </figcaption>
                            </figure>
                        </div>
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
                        </div><!-- end row -->
                        </div>    
                    </div><!-- end panel default -->
                </div>
            @include('Front::partials.leftCategories')
            </div>
        </section>
    </div>
</div>
@stop