@extends('Front::layouts.default')
@section('title', 'Отчет | Коомдук телерадиоберүү корпорациясынын Байкоочу кеңешинин курамы')
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
                                        <h3 class="panel-title"><span>Кыргыз Республикасынын Коомдук телерадиоберүү корпорациясынын 2013-2012-2011-2010-жылдарга карай жылдык ишинин отчеттору.</span></h3>
                                    </div>
                                    <div class="rsarticles">                            
                                        <blockquote>Кыргыз Республикасынын телерадиоберрүү корпорациясынын 2014-жылдык ишинин отчету.</blockquote> 
                                        <p>Отчетто Корпорациянын жетекчилиги жана каржылануусу тууралуу маалыматта, КТРКнын өнүгүү стратегиясын иш жүзүнө ашыруунун 2013-2015-жж каралган планына ылайык максаттарга жана милдеттерге жетишүү боюнча ишмердигин сыпаттоо, «КТРК жөнүндө» мыйзамда корпорациянын алдына коюлган милдеттер жана алардын аткарылуу даражасы, санариптик берүүлөргө өтүүгө карата даярдоо жана техникалык модернизациялоо боюнча милдеттер камтылган.</p>                          
                                        <p>Шилтеме аркылуу отчеттун толук түрүнө өтүү <a data-toggle="modal" data-target=".otchet">Кыргыз Республикасынын Коомдук телерадиоберүү корпорациясынын 2014-жылдык ишинин отчету</a></p>  
                                        <div class="modal fade otchet" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="myModalLabel">Кыргыз Республикасынын Коомдук телерадиоберүү корпорациясынын 2014-жылдык ишинин отчету</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <iframe src="{{ asset('static/files/godovoy_otchet_za_2014_god_kyrg.pdf') }}" style="width:100%; height:700px;" frameborder="0"></iframe>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Жабуу</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <blockquote>Кыргыз Республикасынын Коомдук телерадиоберүү корпорациясынын 2013- жылдык ишинин отчету</blockquote>
                                        <p>Отчетто Корпорациянын жетекчилиги, курамы жана ага караштуу түзүлүштөрү жөнүндө маалыматтар, милдети жана аткарган иштери, 2013-2015-жылдарга белгиленген өнүгүү стратегиясынын ишке ашыруу жаатындагы ишмердиги, ошондой эле киреше менен чыгашалар боюнча жалпы маалыматтары, корпорациянын каржылык-чарбалык иштеринин жыйынтыктары камтылган, КТРК каналдарынын көрүүчүлөрү, 2014-2015-жылдарга карата максаттары менен милдеттери чагылдырылган.</p>
                                        <p>Шилтеме аркылуу отчеттун толук түрүнө өтүү <a data-toggle="modal" data-target=".otchetru">Кыргыз Республикасынын Коомдук телерадиоберүү корпорациясынын 2013-жылдык ишинин отчету</a></p>
                                        <div class="modal fade otchetru" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="myModalLabel">Кыргыз Республикасынын Коомдук телерадиоберүү корпорациясынын 2013-жылдык ишинин отчету</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <iframe src="{{ asset('static/files/otchet_ru_2013.pdf') }}" style="width:100%; height:700px;" frameborder="0"></iframe>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Жабуу</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <blockquote>Кыргыз Республикасынын Коомдук телерадиоберүү корпорациясынын 2012- жылдык ишинин отчету</blockquote>
                                        <p>Бул документтин негизги максаты - КРнын Коомдук телерадио берүү корпорациясынын 2012-жылдагы ишмердүүлүгү тууралуу маалымат берүү. Мисалы, отчеттук мөөнөттөгү КТРКда жүргүзүлгөн реформанын  жыйынтыгындагы  жетишкендиктер, жана келечектеги өнүгүү жолундагы жаралган маселелерди бирдиктүү чечүү. Төмөнкү отчетту даярдоо максатында маалымат топтоодо 2012-жылга карай КТРКнын бөлүмдөрүнүн, структуралык курамдарынын аткарган иштери тууралуу документтер жана маалыматтар колдонулган. Андан тышкаары, уюштуруучулук мүнөздөгү эфирден сырткаркы маанилүү иш-чаралар жөнүндө маалыматтар камтылган.</p>
                                        <p>Шилтеме аркылуу отчеттун толук түрүнө өтүү <a data-toggle="modal" data-target=".otchet2012">Кыргыз Республикасынын Коомдук телерадиоберүү корпорациясынын 2012-жылга карай жылдык ишинин отчету.</a></p>
                                        <div class="modal fade otchet2012" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="myModalLabel">Кыргыз Республикасынын Коомдук телерадиоберүү корпорациясынын 2012-жылга карай жылдык ишинин отчету</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <iframe src="{{ asset('static/files/otchet2012kg.pdf') }}" style="width:100%; height:700px;" frameborder="0"></iframe>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Жабуу</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <blockquote>Кыргыз Республикасынын Коомдук телерадиоберүү корпорациясынын 2011- жылдык ишинин отчету</blockquote>
                                        <p>Отчетто КТРКнын 2011-жыл ичинде аткарган иштери тууралуу толук маалымат камтылган. Мисалы, көрсөтүлгөн аз убакыттын ичинде эң негизги документтер, өлкөнүн медиа-ресурсун өнүктүрүү жана реформалоо боюнча программалар изилденип, иштелип чыкты. Бул  көрүнүштү  Борбордук Азия аймагы боюнча  көзкарандысыз коомдук телеберүүнүн өнүгүү этабындагы биринчи кадамы катары бааласа болот.</p>
                                        <p>Шилтеме аркылуу отчеттун толук түрүнө өтүү <a data-toggle="modal" data-target=".otchet2011">Кыргыз Республикасынын Коомдук телерадиоберүү корпорациясынын 2011-жылга карай жылдык ишинин отчету</a></p>
                                        <div class="modal fade otchet2011" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="myModalLabel">Кыргыз Республикасынын Коомдук телерадиоберүү корпорациясынын 2011-жылга карай жылдык ишинин отчету</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <iframe src="{{ asset('static/files/otchet2011.pdf') }}" style="width:100%; height:700px;" frameborder="0"></iframe>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Жабуу</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <blockquote>Кыргыз Республикасынын Коомдук телерадиоберүү корпорациясынын Байкоочу кеңешинин 2010- жылдык иш отчету</blockquote>
                                        <p>Төмөнкү документти даярдоодо өлкөдөгү башкы маалымат булагы болгон КТРКны  коомдук берүүгө айланткан маанилүү  эки датага өзгөчө көңүл бурулган.Бул 2010-жылдын 10-апрелиндеги Убактылуу өкмөт тарабынан кабыл алынган "Кыргыз Республикасынын Коомдук телерадиоберүү корпорациясын  түзүү тууралуу" Декрети жана 2010-жылдын 25-августундагы  КР КТРКнын Байкоочу кеңешинин мүчөлөрүнүн  Кыргыз Республикасынын Президентинин Буйругу менен бекитилиши. Жылдык отчетто да так ошол мезгилге,  өзгөрүүлөргө басым жасалат. Жылдык отчеттун структурасы Кыргыз Республикасынын Коомдук телерадиоберүү корпорациясы тууралуу жободогу көрсөтүлгөн маалымдамаларды камтыйт.</p>
                                        <p>Шилтеме аркылуу отчеттун толук түрүнө өтүү  <a data-toggle="modal" data-target=".otchet2010">Кыргыз Республикасынын Коомдук телерадиоберүү корпорациясынын Байкоочу кеңешинин 2010-жылга карай жылдык иш отчету</a></p>
                                        <div class="modal fade otchet2010" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="myModalLabel">Кыргыз Республикасынын Коомдук телерадиоберүү корпорациясынын 2010-жылга карай жылдык ишинин отчету</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <iframe src="{{ asset('static/files/otchet2011.pdf') }}" style="width:100%; height:700px;" frameborder="0"></iframe>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Жабуу</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <blockquote>Республикалык радиотелеборбордун 2012-жылдагы тендердин жеңүүчүлөрү тууралуу маалымдама</blockquote>
                                        <p>Шилтеме аркылуу отчеттун толук түрүнө өтүү  <a data-toggle="modal" data-target=".tender">Республикалык радиотелеборбордун 2012-жылдагы тендердин жеңүүчүлөрү тууралуу маалымдама</a></p>
                                        <div class="modal fade tender" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="myModalLabel">Республикалык радиотелеборбордун 2012-жылдагы тендердин жеңүүчүлөрү тууралуу маалымдама</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <iframe src="{{ asset('static/files/tender.pdf') }}" style="width:100%; height:700px;" frameborder="0"></iframe>
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