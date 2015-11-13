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
                <section class="content clearfix">
	                <div class="clearfix">
                        <div class="top-left-block col-md-9">
                            <div class="panel panel-default">
		                        <div class="panel-body">
		                        	<div class="rsarticles">
                            <blockquote>Кыргыз Республикасынын Коомдук телерадиоберүү корпорациясы жөнүндө мыйзам</blockquote> 
                            <p>2011-жылдын 18-ноябрында Кыргыз Республикасынын Президенти Алмазбек Атамбаев  КРнын Жогорку Кеңеши тарабынан кабыл алынган "Кыргыз Республикасынын Коомдук телерадиоберүү корпорациясы тууралуу" мыйзамга кол койгон.</p>
                            <p>Шилтеме аркылуу мыйзамдын толук түрүнө өтүү <a data-toggle="modal" data-target=".zakon">Кыргыз Республикасынын Коомдук телерадиоберүү корпорациясы жөнүндө мыйзам</a></p>
                            <div class="modal fade zakon" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Кыргыз Республикасынын Коомдук телерадиоберүү корпорациясы жөнүндө мыйзам</h4>
                                        </div>
                                        <div class="modal-body">
                                            <iframe src="{{ asset('/static/files/zakon.pdf') }}" style="width:100%; height:700px;" frameborder="0"></iframe>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Жабуу</button>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <blockquote>Коомдук телерадиоберүү корпорациясынын Уставы</blockquote>
                            <p>Корпорация өз ишмердүүлүгүндө КРнын Конститутциясы, КРнын массалык маалымат каражаттар чөйрөсүндөгү мыйзамы, "Телекөрсөтүү жана радиоберүү тууралуу" мыйзамы, "Кыргыз Республикасында Коомдук телерадиоберүүнү түзүү тууралуу" Убактылуу өкмөттүн Декрети, жана башка укуктук-нормативдик акт, Уставдын жобо менен жетектелет.</p>
                            <p>Шилтеме аркылуу Уставдын толук түрүнө өтүү <a data-toggle="modal" data-target=".ustav">Кыргыз Республикасынын Коомдук телерадиоберүү корпорациясынын Уставы</a></p>
                            <div class="modal fade ustav" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Кыргыз Республикасынын Коомдук телерадиоберүү корпорациясынын Уставы</h4>
                                        </div>
                                        <div class="modal-body">
                                            <iframe src="{{ asset('/static/files/ustav.pdf') }}" style="width:100%; height:700px;" frameborder="0"></iframe>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Жабуу</button>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <blockquote>Коомдук телерадиоберүү корпорациясынын Редакциялык саясаты</blockquote>
                            <p>2011-жылдын 18-ноябрында Кыргыз Республикасынын Президенти Алмазбек Атамбаев  КРнын Жогорку Кеңеши тарабынан кабыл алынган "Кыргыз Республикасынын Коомдук телерадиоберүү корпорациясы тууралуу" мыйзамга кол койгон.</p>
                            <p>Шилтеме аркылуу документтин толук түрүнө өтүү <a data-toggle="modal" data-target=".politika">Кыргыз Республикасынын Коомдук телерадиоберүү корпорациясынын Редакциялык саясаты</a></p>
                            <div class="modal fade politika" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Кыргыз Республикасынын Коомдук телерадиоберүү корпорациясынын Редакциялык саясаты</h4>
                                        </div>
                                        <div class="modal-body">
                                            <iframe src="{{ asset('/static/files/politica.pdf') }}" style="width:100%; height:700px;" frameborder="0"></iframe>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Жабуу</button>
                                        </div>
                                    </div>
                                </div>
                            </div>                             
                            <blockquote><a data-toggle="modal" data-target=".structura">Коомдук телерадиоберүү корпорациясынын структурасы</a></blockquote>
                            <div class="modal fade structura" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Кыргыз Республикасынын Коомдук телерадиоберүү корпорациясынын Редакциялык саясаты</h4>
                                        </div>
                                        <div class="modal-body">
                                            <img src="{{ asset('/static/files/struktura.jpg') }}">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Жабуу</button>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                            <blockquote><a data-toggle="modal" data-target=".bs-example-modal-lg">Коомдук телерадиоберүү корпорациясынын эфирдик сеткасы</a></blockquote> 
                            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Коомдук телерадиоберүү корпорациясынын эфирдик сеткасы</h4>
                                        </div>
                                        <div class="modal-body">
                                            <iframe src="{{ asset('/static/files/setka.pdf') }}" style="width:100%; height:700px;" frameborder="0"></iframe>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Жабуу</button>
                                        </div>
                                    </div>
                                </div>
                            </div>                         
                        </div>
		                        </div>
                    		</div><!-- end panel default -->
                        </div>
	                @include('Front::partials.leftCategories')
	                </div>
                </section>
            </div>
        </div>
@stop