@extends('Front::layouts.default')
@section('title', '2013 - 2015 - жылга карай КТРКнын Өнүгүү стратегиясынын долбоору | КТРК')
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

    <div class="row">
        <section class="content clearfix">
            <div class="clearfix">
                <div class="top-left-block col-md-9">
                    <div class="panel panel-default">
                        
            		</div><!-- end panel default -->
                </div>
            @include('Front::partials.leftCategories')
            </div>
        </section>
    </div>
</div><!-- end container main-wrapper-->
@stop