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
                    <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
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
                                <div class="col-xs-12" style="margin-top:10px;">
                                    <table class="table table-striped programmshow ">
                                        <thead >
                                            <tr>
                                                <th class="col-xs-1">Время</th>
                                                <th class="col-xs-10">Названия передач</th>
                                                <th class="col-xs-10">Линк</th>       
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">6:57</th>
                                                <td>Кыргыз Республикасынын гимни</td> 
                                                <td><i class="fa fa-link"></i></td>                                     
                                            </tr>
                                            <tr>
                                                <th scope="row">7:00</th>
                                                <td>Күндарек</td>
                                                <td><i class="fa fa-link"></i></td>                                       
                                            </tr>
                                            <tr>
                                                <th scope="row">7:10</th>
                                                <td>Замана</td>
                                                <td><i class="fa fa-link"></i></td>                                        
                                            </tr>
                                            <tr>
                                                <th scope="row">9:00</th>
                                                <td>Күндарек</td>
                                                <td><i class="fa fa-link"></i></td>                                        
                                            </tr> 
                                            <tr>
                                                <th scope="row">9:10</th>
                                                <td>Замана</td>
                                                <td><i class="fa fa-link"></i></td>                                        
                                            </tr> 
                                            <tr>
                                                <th scope="row">10:00</th>
                                                <td>"Март аттуу падыша". Мультфильм</td>
                                                <td><i class="fa fa-link"></i></td>                                        
                                            </tr> 
                                            <tr>
                                                <th scope="row">10:15</th>
                                                <td>"Улыбка на камне". Художественный фильм (реж. У.Ибрагимов, "Кыргызфильм")</td>                                      
                                                <td><i class="fa fa-link"></i></td>  
                                            </tr> 
                                            <tr>
                                                <th scope="row">11:00</th>
                                                <td>Новости</td>
                                                <td><i class="fa fa-link"></i></td>                                        
                                            </tr> 
                                            <tr>
                                                <th scope="row">11:15</th>
                                                <td>"Улыбка на камне" (продолжение)</td>
                                                <td><i class="fa fa-link"></i></td>                                        
                                            </tr> 
                                            <tr>
                                                <th scope="row">11:50</th>
                                                <td>Время Евразии</td>
                                                <td><i class="fa fa-link"></i></td>                                        
                                            </tr> 
                                            <tr>
                                                <th scope="row">12:05</th>
                                                <td>Жыргал LIFE</td> 
                                                <td><i class="fa fa-link"></i></td>                                       
                                            </tr> 
                                            <tr>
                                                <th scope="row">12:25:</th>
                                                <td>"Снова слышу голос твой". Телефильм-концерт</td> 
                                                <td><i class="fa fa-link"></i></td>                                       
                                            </tr> 
                                            <tr>
                                                <th scope="row">13:00</th>
                                                <td>Күндарек</td> 
                                                <td><i class="fa fa-link"></i></td>                                       
                                            </tr> 
                                            <tr>
                                                <th scope="row">13:15</th>
                                                <td>"Даңазалуу доор". Сериал. 208-бөлүм(Түркия)</td> 
                                                <td><i class="fa fa-link"></i></td>                                       
                                            </tr> 
                                            <tr>
                                                <th scope="row">14:10</th>
                                                <td>"Ырдагым келет, ырдагым"</td> 
                                                <td><i class="fa fa-link"></i></td>                                       
                                            </tr> 
                                            <tr>
                                                <th scope="row">14:25</th>
                                                <td>Узоры Ала-Тоо. (Кыргызтелефильм)</td>
                                                <td><i class="fa fa-link"></i></td>                                        
                                            </tr> 
                                            <tr>
                                                <th scope="row">14:35</th>
                                                <td>Ак илбирстин тукуму. (Уландысы)</td>
                                                <td><i class="fa fa-link"></i></td>                                        
                                            </tr> 
                                            <tr>
                                                <th scope="row">15:00</th>
                                                <td>Новости</td>                      
                                                <td><i class="fa fa-link"></i></td>                  
                                            </tr>                                
                                            <tr>
                                                <th scope="row">15:20</th>
                                                <td>Ак илбирстин тукуму (уландысы)</td>
                                                <td><i class="fa fa-link"></i></td>                                        
                                            </tr> 
                                            <tr>
                                                <th scope="row">17:00</th>
                                                <td>Күндарек</td>                     
                                                <td><i class="fa fa-link"></i></td>                   
                                            </tr>      
                                            <tr>
                                                <th scope="row">17:20</th>
                                                <td>Булбул. Мультфильм</td>           
                                                <td><i class="fa fa-link"></i></td>                             
                                            </tr>
                                            <tr>
                                                <th scope="row">17:35</th>
                                                <td>Песнь Айши. Документальный фильм</td>
                                                <td><i class="fa fa-link"></i></td>                                        
                                            </tr>
                                            <tr>
                                                <th scope="row">17:45</th>
                                                <td>"Биринчи кадр". Көркөм фильм (реж. Садык Шер-Нияз, М.Жанталиев, "Айтыш фильм")</td>                                      
                                                <td><i class="fa fa-link"></i></td>  
                                            </tr>
                                            <tr>
                                                <th scope="row">18:55</th>
                                                <td>Мээрим</td>                     
                                                <td><i class="fa fa-link"></i></td>                   
                                            </tr>
                                            <tr>
                                                <th scope="row">19:30</th>
                                                <td>Информационная программа "Ала-Тоо"</td> 
                                                <td><i class="fa fa-link"></i></td>                                       
                                            </tr>
                                            <tr>
                                                <th scope="row">20:10</th>
                                                <td>Стратегия 2017</td>               
                                                <td><i class="fa fa-link"></i></td>                         
                                            </tr>
                                            <tr>
                                                <th scope="row">20:40</th>
                                                <td>Мар Байжиевдин  мезгил барактары</td>   
                                                <td><i class="fa fa-link"></i></td>                                     
                                            </tr>
                                            <tr>
                                                <th scope="row">21:30</th>
                                                <td>Ала-Тоо маалымат программасы</td>  
                                                <td><i class="fa fa-link"></i></td>                                      
                                            </tr>
                                            <tr>
                                                <th scope="row">22:00</th>
                                                <td>"Би-Би-Сиден" дүйнөлүк жаңылыктар</td>   
                                                <td><i class="fa fa-link"></i></td>                                     
                                            </tr> 
                                            <tr>
                                                <th scope="row">22:17</th>
                                                <td>Трибуна КТРК</td>   
                                                <td><i class="fa fa-link"></i></td>                                     
                                            </tr> 
                                            <tr>
                                                <th scope="row">22:20</th>
                                                <td>Аймакка сапар</td>     
                                                <td><i class="fa fa-link"></i></td>                                   
                                            </tr>  
                                            <tr>
                                                <th scope="row">22:30</th>
                                                <td>"Бейне". Окумуштуу, адабиятчы С.Иптаров </td> 
                                                <td><i class="fa fa-link"></i></td>                                       
                                            </tr> 
                                            <tr>
                                                <th scope="row">23:05</th>
                                                <td>"Келин". Сериал. 100-бөлүм(Индия)</td>  
                                                <td><i class="fa fa-link"></i></td>                                      
                                            </tr> 
                                            <tr>
                                                <th scope="row">23:50</th>
                                                <td>Аба-ырайы</td>    
                                                <td><i class="fa fa-link"></i></td>                                    
                                            </tr>
                                            <tr>
                                                <th scope="row">23:55</th>
                                                <td>Кыргыз Республикасынын гимни</td>  
                                                <td><i class="fa fa-link"></i></td>                                      
                                            </tr>  

                                        </tbody>
                                    </table>

                                </div>
                            </div>

                        </div>
                        <div class="tab-pane" id="tuesday">
                            <h1>Вторник</h1>
                            <p>Вторник</p> 
                          
                            <script language="JavaScript">  
                                var h=(new Date()).getHours();  
                                if (h > 23,00 || h <7,00) document.write('Привет лунатикам! :dfgd)') ;
                                if (h > 7,00 || h <8,00) document.write('Привет лунатикам! :)') ;    
                                if (h > 6,00 && h < 12,00) document.write('Доброе утро! Как спалось? :)');  
                                if (h > 11,00 && h < 17,00) document.write('Добрый день!');   
                                if (h > 17,00 && h < 19,00) document. write('Привет! Уже вечер...');
                                if (h > 20,00 && h < 20,30) document. write('Привет! Уже вечер...');                                    
                            </script>                         
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