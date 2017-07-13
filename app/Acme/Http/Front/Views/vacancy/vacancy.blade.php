@extends('Front::layouts.defaultInit')
@section('title', "Вакансия")

@section('styles')    
    <link rel="stylesheet" href="{{ asset('filter/css/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jasny-bootstrap.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/fileinput.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/test2.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/vertex.css') }}">
@endsection

@section('content')
    <div id="vacansy" class="container main-wrapper">
        <div class="row">
            <div class="v-slider">
                <div>
                    <div class="overlay"></div>
                    <div class="v-info">
                        <h4>Вакансии</h4>
                        <p>Кыргыз Теле Радио Корпорациясы адистерди иштешүүгө чакырат</p>
                    </div>
                    <img src="{{ asset('img/vacancy/work.png')}}" alt="">
                </div>
            </div>
            <div class="panel v-panel">
                <ul class="nav nav-tabs v-panel-tabs" role="tablist">
                    <li role="presentation" class="active">                    
                        <a href="#ads" data-second-tab="#ads1" aria-controls="ads" role="tab" data-toggle="tab">Обьявления</a>
                    </li>
                    <li role="presentation">
                        <a href="#news" data-second-tab="#news1" aria-controls="news" role="tab" data-toggle="tab">Новости</a>
                    </li>
                </ul>
            </div>
            <div class="panel v-panel-content">
                <div class="clearfix">
                    <div class="col-md-9 no-padding"> 
                        <div class="panel-heading tab-content">
                            <h3 role="tabpanel" class="panel-title tab-pane fade in active" id="ads"> 
                                Обьявления
                            </h3>
                            <h3 role="tabpanel" class="panel-title tab-pane fade" id="news"> 
                                Новости
                            </h3>
                        </div>
                    </div>
                    <div class="col-md-3 no-padding">
                        <div class="panel-heading">
                            <button class="btn btn-send">Отправить резюме</button>
                        </div>                          
                    </div>  
                </div>
            </div>
            <div class="panel tab-content v-panel-tab">
                <div role="tabpanel" class="tab-pane fade in active" id="ads1">
                    <ul>                   
                        @foreach($vacancy as $vac)
                        <li class="vacancy-item">
                            <div class="media">
                               <div class="media-left"> 
                                    <a href="{{ route('vacancy.job', [$vac, $lc]) }}"> 
                                        <img class="media-object"  src="{{ asset($vac->getFile()) }}"> 
                                    </a> 
                                </div>
                               <div class="media-body media-middle media-width">
                                    <a href="{{ route('vacancy.job', [$vac, $lc]) }}">
                                        <h5 class="media-heading">{{ $vac->getTitleOne() }}</h5>
                                    </a>                               
                                  <p>{{ $vac->getShortDescOne() }}</p>
                               </div>
                               <div class="media-body media-middle media-width-two">
                                  <span class="label label-v">{{ $vac->getWorktimeOne() }}</span>
                               </div>
                               <div class="media-body media-middle">
                                  <span class="v-point"><i class="fa fa-map-marker" aria-hidden="true"></i>{{ $vac->getLocationOne() }}</span>
                               </div>
                            </div>
                        </li>
                        @endforeach
                        <li class="article-item-footer">
                            <a href="{{ route('front.vacancy.vacancies') }}">Баардык вакансиялар <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="news1">
                   <ul>
                    @foreach($vacancynews as $vnews)
                       <li class="article-item">
                            <div class="media">
                               <div class="media-left"> 
                                    <a href="{{ route('vacancy.post', [$vnews, $lc]) }}"> 
                                        <img class="media-object"  src="{{  asset($vnews->thumbnail) }}"> 
                                    </a> 
                                </div>
                               <div class="media-body media-middle">
                                    <div class="card-info">
                                        <span class="date ">{{ $vnews->getDay() }} {{ $vnews->getMonthRu() }}, {{ $vnews->getYear() }}</span>
                                        <span class="view"><i class="fa fa-eye"></i>{{ $vnews->getViewed() }}</span>
                                    </div>
                                    <a href="{{ route('vacancy.post', [$vnews, $lc]) }}">
                                        <h5 class="media-heading">{{ $vnews->getTitleOne() }}</h5>
                                    </a>
                               </div>
                            </div>
                       </li>
                    @endforeach
                    <li class="article-item-footer">
                        <a href="{{ route('front.vacancy.news') }}">Баардык жаңылыктар <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </li>
                   </ul>

                </div>
            </div>
        </div>
    </div>
@stop

@section('footerScript')
<script>
    $('.v-slider').slick({
    });
</script>

<script>
    $('.nav-tabs a').click(function () {
        $(this).tab('show');
        $("<a>").data("target", $(this).data("second-tab")).tab("show")
    })
</script>
@stop