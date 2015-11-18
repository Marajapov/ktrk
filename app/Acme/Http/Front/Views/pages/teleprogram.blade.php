@extends('Front::layouts.default')
@section('title', '2013 - 2015 - жылга карай КТРКнын Өнүгүү стратегиясынын долбоору | КТРК')
@sectin('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('/static/css/styles.css') }}">
@stop
@section('content')

<div class="container main-wrapper">
    <div class="row">
        <div class="col-md-9 teleprogramm">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">ТВ-программа</h3>
                </div>
                <div class="panel-body">
                    <ul id="tabs" class="nav nav-tabs teletabs" data-tabs="tabs">
                        <li class="active"><a href="#monday" data-toggle="tab">Понедельник</a></li>
                        <li><a href="#tuesday" data-toggle="tab">Вторник</a></li>
                        <li><a href="#wednesday" data-toggle="tab">Среда</a></li>
                        <li><a href="#thursday" data-toggle="tab">Четверг</a></li>
                        <li><a href="#friday" data-toggle="tab">Пятница</a></li>
                        <li><a href="#saturday" data-toggle="tab">Суббота</a></li>
                        <li><a href="#sunday" data-toggle="tab">Вокресенье</a></li>
                    </ul>
                    <div id="my-tab-content" class="tab-content">
                        <div class="tab-pane active" id="monday">
                            <div class="row">
                                <div class="col-xs-12 programmshow" style="margin-top:10px;">
                                    <table class="table table-striped">
                                    <h4>Коомдук каналдын 17-ноябрь шейшемби күндөгү көрсөтүүлөр программасы</h4>
                                        <thead >
                                            <tr class="teletitle">
                                                <th class="col-xs-1">Время</th>
                                                <th class="col-xs-9 telemiddle">Названия передач</th>
                                                <th class="col-xs-2">Описание</th>       
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">6:57</th>
                                                <td>Кыргыз Республикасынын гимни</td> 
                                                <td class="telelink"></td>                                     
                                            </tr>
                                            <tr>
                                                <th scope="row">7:00</th>
                                                <td>Күндарек</td>
                                                <td class="telelink"></td>                                       
                                            </tr>
                                            <tr>
                                                <th scope="row">7:10</th>
                                                <td>Замана</td>
                                                <td class="telelink"></td>                                        
                                            </tr>
                                            <tr>
                                                <th scope="row">9:00</th>
                                                <td>Күндарек</td>
                                                <td class="telelink"><i class="fa fa-language"></i>На русском</td>                                        
                                            </tr> 
                                            <tr>
                                                <th scope="row">9:10</th>
                                                <td>Замана</td>
                                                <td class="telelink"></td>                                        
                                            </tr> 
                                            <tr>
                                                <th scope="row">10:00</th>
                                                <td>"Март аттуу падыша". Мультфильм</td>
                                                <td class="telelink"></td>                                        
                                            </tr> 
                                            <tr>
                                                <th scope="row">10:15</th>
                                                <td>"Улыбка на камне". Художественный фильм (реж. У.Ибрагимов, "Кыргызфильм")</td>                                      
                                                <td class="telelink"></td>  
                                            </tr> 
                                            <tr>
                                                <th scope="row">11:00</th>
                                                <td>Новости</td>
                                                <td class="telelink"></td>                                        
                                            </tr> 
                                            <tr>
                                                <th scope="row">11:15</th>
                                                <td>"Улыбка на камне" (продолжение)</td>
                                                <td class="telelink"></td>                                        
                                            </tr> 
                                            <tr>
                                                <th scope="row">11:50</th>
                                                <td>Время Евразии</td>
                                                <td class="telelink"></td>                                        
                                            </tr> 
                                            <tr>
                                                <th scope="row">12:05</th>
                                                <td>Жыргал LIFE</td> 
                                                <td class="telelink"></td>                                       
                                            </tr> 
                                            <tr>
                                                <th scope="row">12:25:</th>
                                                <td>"Снова слышу голос твой". Телефильм-концерт</td> 
                                                <td class="telelink"></td>                                       
                                            </tr> 
                                            <tr>
                                                <th scope="row">13:00</th>
                                                <td>Күндарек</td> 
                                                <td class="telelink"></td>                                       
                                            </tr> 
                                            <tr>
                                                <th scope="row">13:15</th>
                                                <td>"Даңазалуу доор". 208-бөлүм(Түркия)</td> 
                                                <td class="telelink"><i class="fa fa-youtube-play"></i>Сериал</td>                                       
                                            </tr> 
                                            <tr>
                                                <th scope="row">14:10</th>
                                                <td>"Ырдагым келет, ырдагым"</td> 
                                                <td class="telelink"></td>                                       
                                            </tr> 
                                            <tr>
                                                <th scope="row">14:25</th>
                                                <td>Узоры Ала-Тоо. (Кыргызтелефильм)</td>
                                                <td class="telelink"></td>                                        
                                            </tr> 
                                            <tr>
                                                <th scope="row">14:35</th>
                                                <td>Ак илбирстин тукуму. (Уландысы)</td>
                                                <td class="telelink"></td>                                        
                                            </tr> 
                                            <tr>
                                                <th scope="row">15:00</th>
                                                <td>Новости</td>                      
                                                <td class="telelink"></td>                  
                                            </tr>                                
                                            <tr>
                                                <th scope="row">15:20</th>
                                                <td>Ак илбирстин тукуму (уландысы)</td>
                                                <td class="telelink"></td>                                        
                                            </tr> 
                                            <tr>
                                                <th scope="row">17:00</th>
                                                <td>Күндарек</td>                     
                                                <td class="telelink"></td>                   
                                            </tr>      
                                            <tr>
                                                <th scope="row">17:20</th>
                                                <td>Булбул. Мультфильм</td>           
                                                <td class="telelink"></td>                             
                                            </tr>
                                            <tr>
                                                <th scope="row">17:35</th>
                                                <td>Песнь Айши.</td>
                                                <td class="telelink"><i class="fa fa-video-camera"></i>Док.фильм</td>                                        
                                            </tr>
                                            <tr>
                                                <th scope="row">17:45</th>
                                                <td>"Биринчи кадр". Көркөм фильм (реж. Садык Шер-Нияз, М.Жанталиев, "Айтыш фильм")</td>                                      
                                                <td class="telelink"></td>  
                                            </tr>
                                            <tr>
                                                <th scope="row">18:55</th>
                                                <td>Мээрим</td>                     
                                                <td class="telelink"></td>                   
                                            </tr>
                                            <tr>
                                                <th scope="row">19:30</th>
                                                <td>Информационная программа "Ала-Тоо"</td> 
                                                <td class="telelink"></td>                                       
                                            </tr>
                                            <tr>
                                                <th scope="row">20:10</th>
                                                <td>Стратегия 2017</td>               
                                                <td class="telelink"></td>                         
                                            </tr>
                                            <tr>
                                                <th scope="row">20:40</th>
                                                <td>Мар Байжиевдин  мезгил барактары</td>   
                                                <td class="telelink"><i class="fa fa-bullhorn"></i>Премьера</td>                                     
                                            </tr>
                                            <tr class="telelive">
                                                <th scope="row">21:30</th>
                                                <td>Ала-Тоо маалымат программасы</td>  
                                                <td class="telelink"><i class="fa fa-play"></i><span>Азыр эфирде</span></td>                                      
                                            </tr>
                                            <tr>
                                                <th scope="row">22:00</th>
                                                <td>"Би-Би-Сиден" дүйнөлүк жаңылыктар</td>   
                                                <td class="telelink"></td>                                     
                                            </tr> 
                                            <tr>
                                                <th scope="row">22:17</th>
                                                <td>Трибуна КТРК</td>   
                                                <td class="telelink"></td>                                     
                                            </tr> 
                                            <tr>
                                                <th scope="row">22:20</th>
                                                <td>Аймакка сапар</td>     
                                                <td class="telelink"></td>                                   
                                            </tr>  
                                            <tr>
                                                <th scope="row">22:30</th>
                                                <td>"Бейне". Окумуштуу, адабиятчы С.Иптаров </td> 
                                                <td class="telelink"></td>                                       
                                            </tr> 
                                            <tr>
                                                <th scope="row">23:05</th>
                                                <td>"Келин".100-бөлүм(Индия)</td>  
                                                <td class="telelink"><i class="fa fa-youtube-play"></i>Сериал</td>                                      
                                            </tr> 
                                            <tr>
                                                <th scope="row">23:50</th>
                                                <td>Аба-ырайы</td>    
                                                <td class="telelink"></td>                                    
                                            </tr>
                                            <tr>
                                                <th scope="row">23:55</th>
                                                <td>Кыргыз Республикасынын гимни</td>  
                                                <td class="telelink"></td>                                      
                                            </tr>  

                                        </tbody>
                                    </table>

                                </div>
                            </div>

                        </div>
                        <div class="tab-pane" id="tuesday">
                            <div class="row">
                                <div class="col-xs-12 programmshow" style="margin-top:10px;">
                                    <table class="table table-striped">
                                    <h4>Коомдук каналдын 18-ноябрь шейшемби күндөгү көрсөтүүлөр программасы</h4>
                                        <thead >
                                            <tr class="teletitle">
                                                <th class="col-xs-1">Время</th>
                                                <th class="col-xs-9 telemiddle">Названия передач</th>
                                                <th class="col-xs-2">Описание</th>       
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">6:57</th>
                                                <td>Кыргыз Республикасынын гимни</td> 
                                                <td class="telelink"></td>                                     
                                            </tr>
                                            <tr>
                                                <th scope="row">7:00</th>
                                                <td>Күндарек</td>
                                                <td class="telelink"></td>                                       
                                            </tr>
                                            <tr>
                                                <th scope="row">7:10</th>
                                                <td>Замана</td>
                                                <td class="telelink"></td>                                        
                                            </tr>
                                            <tr>
                                                <th scope="row">9:00</th>
                                                <td>Күндарек</td>
                                                <td class="telelink"><i class="fa fa-language"></i>На русском</td>                                        
                                            </tr> 
                                            <tr>
                                                <th scope="row">9:10</th>
                                                <td>Замана</td>
                                                <td class="telelink"></td>                                        
                                            </tr> 
                                            <tr>
                                                <th scope="row">10:00</th>
                                                <td>"Март аттуу падыша". Мультфильм</td>
                                                <td class="telelink"></td>                                        
                                            </tr> 
                                            <tr>
                                                <th scope="row">10:15</th>
                                                <td>"Улыбка на камне". Художественный фильм (реж. У.Ибрагимов, "Кыргызфильм")</td>                                      
                                                <td class="telelink"></td>  
                                            </tr> 
                                            <tr>
                                                <th scope="row">11:00</th>
                                                <td>Новости</td>
                                                <td class="telelink"></td>                                        
                                            </tr> 
                                            <tr>
                                                <th scope="row">11:15</th>
                                                <td>"Улыбка на камне" (продолжение)</td>
                                                <td class="telelink"></td>                                        
                                            </tr> 
                                            <tr>
                                                <th scope="row">11:50</th>
                                                <td>Время Евразии</td>
                                                <td class="telelink"></td>                                        
                                            </tr> 
                                            <tr>
                                                <th scope="row">12:05</th>
                                                <td>Жыргал LIFE</td> 
                                                <td class="telelink"></td>                                       
                                            </tr> 
                                            <tr>
                                                <th scope="row">12:25:</th>
                                                <td>"Снова слышу голос твой". Телефильм-концерт</td> 
                                                <td class="telelink"></td>                                       
                                            </tr> 
                                            <tr>
                                                <th scope="row">13:00</th>
                                                <td>Күндарек</td> 
                                                <td class="telelink"></td>                                       
                                            </tr> 
                                            <tr>
                                                <th scope="row">13:15</th>
                                                <td>"Даңазалуу доор". 208-бөлүм(Түркия)</td> 
                                                <td class="telelink"><i class="fa fa-youtube-play"></i>Сериал</td>                                       
                                            </tr> 
                                            <tr>
                                                <th scope="row">14:10</th>
                                                <td>"Ырдагым келет, ырдагым"</td> 
                                                <td class="telelink"></td>                                       
                                            </tr> 
                                            <tr>
                                                <th scope="row">14:25</th>
                                                <td>Узоры Ала-Тоо. (Кыргызтелефильм)</td>
                                                <td class="telelink"></td>                                        
                                            </tr> 
                                            <tr>
                                                <th scope="row">14:35</th>
                                                <td>Ак илбирстин тукуму. (Уландысы)</td>
                                                <td class="telelink"></td>                                        
                                            </tr> 
                                            <tr>
                                                <th scope="row">15:00</th>
                                                <td>Новости</td>                      
                                                <td class="telelink"></td>                  
                                            </tr>                                
                                            <tr>
                                                <th scope="row">15:20</th>
                                                <td>Ак илбирстин тукуму (уландысы)</td>
                                                <td class="telelink"></td>                                        
                                            </tr> 
                                            <tr>
                                                <th scope="row">17:00</th>
                                                <td>Күндарек</td>                     
                                                <td class="telelink"></td>                   
                                            </tr>      
                                            <tr>
                                                <th scope="row">17:20</th>
                                                <td>Булбул. Мультфильм</td>           
                                                <td class="telelink"></td>                             
                                            </tr>
                                            <tr>
                                                <th scope="row">17:35</th>
                                                <td>Песнь Айши.</td>
                                                <td class="telelink"><i class="fa fa-video-camera"></i>Док.фильм</td>                                        
                                            </tr>
                                            <tr>
                                                <th scope="row">17:45</th>
                                                <td>"Биринчи кадр". Көркөм фильм (реж. Садык Шер-Нияз, М.Жанталиев, "Айтыш фильм")</td>                                      
                                                <td class="telelink"></td>  
                                            </tr>
                                            <tr>
                                                <th scope="row">18:55</th>
                                                <td>Мээрим</td>                     
                                                <td class="telelink"></td>                   
                                            </tr>
                                            <tr>
                                                <th scope="row">19:30</th>
                                                <td>Информационная программа "Ала-Тоо"</td> 
                                                <td class="telelink"></td>                                       
                                            </tr>
                                            <tr>
                                                <th scope="row">20:10</th>
                                                <td>Стратегия 2017</td>               
                                                <td class="telelink"></td>                         
                                            </tr>
                                            <tr>
                                                <th scope="row">20:40</th>
                                                <td>Мар Байжиевдин  мезгил барактары</td>   
                                                <td class="telelink"><i class="fa fa-bullhorn"></i>Премьера</td>                                     
                                            </tr>
                                            <tr class="telelive">
                                                <th scope="row">21:30</th>
                                                <td>Ала-Тоо маалымат программасы</td>  
                                                <td class="telelink"><i class="fa fa-play"></i><span>Азыр эфирде</span></td>                                      
                                            </tr>
                                            <tr>
                                                <th scope="row">22:00</th>
                                                <td>"Би-Би-Сиден" дүйнөлүк жаңылыктар</td>   
                                                <td class="telelink"></td>                                     
                                            </tr> 
                                            <tr>
                                                <th scope="row">22:17</th>
                                                <td>Трибуна КТРК</td>   
                                                <td class="telelink"></td>                                     
                                            </tr> 
                                            <tr>
                                                <th scope="row">22:20</th>
                                                <td>Аймакка сапар</td>     
                                                <td class="telelink"></td>                                   
                                            </tr>  
                                            <tr>
                                                <th scope="row">22:30</th>
                                                <td>"Бейне". Окумуштуу, адабиятчы С.Иптаров </td> 
                                                <td class="telelink"></td>                                       
                                            </tr> 
                                            <tr>
                                                <th scope="row">23:05</th>
                                                <td>"Келин".100-бөлүм(Индия)</td>  
                                                <td class="telelink"><i class="fa fa-youtube-play"></i>Сериал</td>                                      
                                            </tr> 
                                            <tr>
                                                <th scope="row">23:50</th>
                                                <td>Аба-ырайы</td>    
                                                <td class="telelink"></td>                                    
                                            </tr>
                                            <tr>
                                                <th scope="row">23:55</th>
                                                <td>Кыргыз Республикасынын гимни</td>  
                                                <td class="telelink"></td>                                      
                                            </tr>  

                                        </tbody>
                                    </table>

                                </div>
                            </div>                          
                                   
                        </div>
                        <div class="tab-pane" id="wednesday">
                            <h1>Среда</h1>
                            <p>Среда</p>
                        </div>
                        <div class="tab-pane" id="thursday">
                            <h1>Четверг</h1>
                            <p>Четверг</p>
                        </div>
                        <div class="tab-pane" id="friday">
                            <h1>Пятница</h1>
                            <p>Пятница</p>
                        </div>
                        <div class="tab-pane" id="saturday">
                            <h1>Суббота</h1>
                            <p>Суббота</p>
                        </div>
                        <div class="tab-pane" id="sunday">
                            <h1>Воскресенье</h1>
                            <p>Суббота</p>
                        </div>
                    </div>


                </div>              
            </div>

        </div>

        <div class="col-md-3 teleblock">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Телеанонсы</h3>
                </div>
                <div class="panel-body">

                </div>              
            </div>
        </div>

    </div>
</div>

<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $('#tabs').tab();
    });
</script> 
@stop