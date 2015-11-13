@extends('Front::layouts.default')
@section('title', 'Жетекчилер')
@sectin('styles')
	<link rel="stylesheet" type="text/css" href="{{ asset('/static/css/styles.css') }}">
@stop
@section('content')
	 <div class="container main-wrapper">
            <div class="row">
                <section class="content clearfix">
	                <div class="clearfix">
                        <div class="top-left-block col-md-9">
                            <div class="panel panel-default panel-related">
                                <div class="panel-body">                         
		                            <div class="row">
		                                <div class="top-left-block col-xs-12 col-sm-6 col-md-6 directors">
		                                    <div class="dir-box">
		                                        <img src="{{ asset('static/images/persons/ilim.jpg') }}"  class="img-thumbnail">
		                                        <div class="dir-button"><a class="btn btn-primary" href="#" role="button">Толук маалымат</a></div>

		                                        <div class="caption">
		                                            <h4>Карыпбеков Илим Майрамбекович</h4>
		                                            <p>КТРК башкы директору</p>
		                                        </div>
		                                    </div>
		                                </div>
		                                <div class="top-left-block col-xs-12 col-sm-6 col-md-6 directors">
		                                    <div class="dir-box">
		                                        <img src="{{ asset('static/images/persons/img_2.jpg') }}"  class="img-thumbnail">   
		                                        <div class="dir-button"><a class="btn btn-primary" href="#" role="button">Толук маалымат</a></div>
		                                        <div class="caption">
		                                            <h4>Асылбашев Калыйбек Шаршеналиевич</h4>
		                                            <p>КТРК башкы директорунун телеберүүлөр боюнча орун басары</p>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                            <div class="row">
		                                <div class="top-left-block col-xs-12 col-sm-6 col-md-6 directors">
		                                    <div class="dir-box">
		                                        <img src="{{ asset('static/images/persons/img3.jpg') }}"  class="img-thumbnail">
		                                        <div class="dir-button"><a class="btn btn-primary" href="#" role="button">Толук маалымат</a></div>

		                                        <div class="caption">
		                                            <h4>Иманалиев Кайрат Олжобаевич</h4>
		                                            <p>КТРК башкы директорунун радио уктуруулар боюнча орун басары</p>
		                                        </div>
		                                    </div>
		                                </div>
		                                <div class="top-left-block col-xs-12 col-sm-6 col-md-6 directors">
		                                    <div class="dir-box">
		                                        <img src="{{ asset('static/images/persons/img4.jpg') }}"  class="img-thumbnail"> 
		                                        <div class="dir-button"><a class="btn btn-primary" href="#" role="button">Толук маалымат</a></div>
		                                        <div class="caption">
		                                            <h4>Алиев Бактияр Жеңишбекович</h4>
		                                            <p>КТРКнын Республикалык радио телеборборунун директору</p>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                        </div><!-- end panel body-->
                            </div>

                        </div>
	                @include('Front::partials.leftCategories')
	                </div>
                </section>
            </div>
        </div>
@stop