@extends('Front::layouts.default')
@section('title', trans('site.Strategy').' | КТРК')
@section('styles')
    {{--<link rel="stylesheet" type="text/css" href="{{ asset('static/css/styles.css') }}">--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages.css') }}">

    <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
    <script type="text/javascript">stLight.options({publisher: "79400afe-6dec-4a9a-959c-75aae52269a9", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
@stop
@section('content')

    <div class="container main-wrapper">
        <div class="row">
            <section class="content clearfix">
                <div class="clearfix">
                    <div class="top-left-block col-md-12">
                        <div class="panel panel-default panel-page">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span>Стратегия</span></h3>
                            </div>
                            <div class="panel-body">
                                <div class="rsarticles">

                                    @if($lc == 'kg')

                                        <div class="modal fade strategy" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="myModalLabel">Стратегия</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <iframe src="{{ asset('/static/files/strategy.pdf') }}" style="width:100%; height:700px;" frameborder="0"></iframe>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Жабуу</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a data-toggle="modal" data-target=".strategy" class="titlelink">
                                            <i class="fa fa-file-text"></i>
                                            <span>2013-2015-жылга карай Кыргыз Республикасынын Коомдук телерадиоберүү корпорациясынын Өнүгүү стратегиясы</span>
                                        </a>
                                        <p>2012-жылдын 6-декабрында КТРКнын Байкоочу кеңеши тарабынан колдоого алынып,
                                            2013-2015-жылга карай Кыргыз Республикасынын Коомдук телерадиоберүү корпорациясынын Өнүгүү стратегиясы каналдын менеджменти тарабынан иштелип чыкты.</p>

                                        <p>Аталган документти иштеп чыгууда, өлкөнүн негизги каналын өнүктүрүү максатында коомдук жана жарандык коомчулук өкүлдөрүнөн кеңири масштабдагы кеңештер, ой-пикирлер кабыл алынып, документке камтылды. </p>
                                        <p>КТРКнын Өнүгүү стратегиясы алдыдагы үч жылга карай милдеттерди жана максаттарды камтыйт. Эң негизгиси, коомдук берүүнүн принциптерине жараша корпорациянын өнүгүүсүнө карай максаттуу кадамдар каралган.</p>
                                        <p>Өнүгүү стратегиясында төмөнкүдөй милдеттер коюлган: эффективдүү менеджмент, санариптик берүүгө өтүү, контентти жакшыртуу, каражат табуу булактарын көбөйтүү, кызматкерлердин кесиптик чеберчилигин жогорулатуу жана каналдын техникалык жабдыктарын жаңылоо.</p>
                                </div>
                                @elseif($lc == 'ru')
                                    <div class="modal fade strategy" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="myModalLabel">Стратегия</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <iframe src="{{ asset('/static/files/strategy.pdf') }}" style="width:100%; height:700px;" frameborder="0"></iframe>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Жабуу</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a data-toggle="modal" data-target=".strategy" class="titlelink">
                                        <i class="fa fa-file-text"></i>
                                        <span>Стратегия развития Общественной телерадиовещательной корпорации Кыргызской Республики на 2013-2015 гг.</span>
                                    </a>
                                    <p>6 декабря 2012 года Наблюдательным советом КТРК одобрена Стратегия развития Общественной телерадиовещательной корпорации Кыргызской Республики на 2013-2015 гг., разработанный менеджментом канала.</p>

                                    <p>В процессе разработки документа были проведены масштабные консультации с представителями общественности и гражданского сектора, по обсуждению идей и мнений развития главного канала страны.</p>
                                    <p>Стратегия развития КТРК определяет приоритеты и задачи на грядущие три года. И главным образом, предусматривает целенаправленные шаги для развития корпорации согласно принципам общественного вещания.</p>
                                    <p>Документ предусматривает такие задачи, как эффективный менеджмент, переход на цифровое вещание, улучшение контента, диверсификация источников финансирования, развитие человеческого ресурса и техническая модернизация канала.</p>
                                @endif
                            </div>
                        </div><!-- end panel default -->

                        <div class="panel panel-default panel-comments">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    {{ trans('site.Comments') }}
                                    <a class="commentadd" href="#respond">Оставить комментарий</a>
                                </h3>
                            </div>
                            <div class="panel-body">

                                <ul class="comment-list">
                                    <li class="comment">
                                        <article>
                                            <footer class="comment-meta">
                                                <div class="comment-author">
								                    <span class="commentthumb">
									                    <img alt="" src="{{ asset('images/extra/profile.png') }}" class="avatar">
                                                    </span>
                                                    <span class="commentauthorname">Author Name</span>
                                                    <p href="#" class="commenttime">
                                                        <span>6 янв, 2016 13:43</span>
                                                    </p>
                                                </div>
                                            </footer>

                                            <div class="commentcontent">
                                                <p>Thank you for sharing,<br>
                                                    New year first article is really great !!</p>
                                                <p>Thanks you :)</p>
                                            </div>

                                            <div class="commentreply">
                                                <a class="comment-reply-link" href="#" aria-label="Reply to Author Name">Ответить</a>
                                            </div>
                                        </article>
                                    </li>
                                    <li class="comment">
                                        <article>
                                            <footer class="comment-meta">
                                                <div class="comment-author">
								                    <span class="commentthumb">
									                    <img alt="" src="{{ asset('images/extra/profile-2.png') }}" class="avatar">
                                                    </span>
                                                    <span class="commentauthorname">Author Name</span>
                                                    <p href="#" class="commenttime">
                                                        <span>6 янв, 2016 13:43</span>
                                                    </p>
                                                </div>
                                            </footer>

                                            <div class="commentcontent">
                                                <p>Thank you for sharing,<br>
                                                    New year first article is really great !!</p>
                                                <p>Thanks you :)</p>
                                            </div>

                                            <div class="commentreply">
                                                <a class="comment-reply-link" href="#" aria-label="Reply to Author Name">Ответить</a>
                                            </div>
                                        </article>
                                    </li>
                                </ul>

                            </div>
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    Оставить комментарий
                                </h3>
                            </div>
                            <div class="panel-body">

                                <div class="comment-block">
                                    <div id="respond" class="comment-respond">
                                        {!! Form::open(array('route' => 'front.comment', 'method' => 'post', 'id'=>'commentform', 'enctype' => 'multipart/form-data', 'class'=>'comment-form')) !!}
                                            <p class="comment-form-author">
                                                <label for="author">Имя <span class="required">*</span></label>
                                                <input id="author" name="author" type="text" value="" size="30" aria-required="true" required="required">
                                            </p>
                                            <p class="comment-form-email">
                                                <label for="email">Email <span class="required">*</span></label>
                                                <input id="email" name="email" type="text" value="" size="30" aria-required="true" required="required">
                                            </p>
                                            <p class="comment-form-comment">
                                                <label for="comment">Комментарий</label>
                                                <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" required="required"></textarea>
                                            </p>
                                            <div class="captcha">
                                                <label for="comment">&nbsp;</label>
                                                <div class="g-recaptcha" data-sitekey="6LcBGBUTAAAAAIuKMiXH16edZGH4hRR58GJgqeDq"></div>
                                            </div>
                                            <p class="form-submit">
                                                <button type="submit" id="submit" class="submit">Отправить</button>
                                            </p>
                                        {!! Form::close() !!}
                                    </div><!-- #respond -->
                                    <div class="clr"></div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </div>
@stop

@section('footerScript')
    <script src='https://www.google.com/recaptcha/api.js'></script>
@endsection