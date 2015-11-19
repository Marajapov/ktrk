@extends('Front::layouts.default')
@section('title', '2013 - 2015 - жылга карай КТРКнын Өнүгүү стратегиясынын долбоору | КТРК')
@section('styles')
  <link rel="stylesheet" type="text/css" href="{{ asset('static/css/styles.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/pages.css') }}">
@stop
@section('content')

  <div class="container main-wrapper">
    <div class="row">
      <section class="content clearfix">
        <div class="clearfix">
          <div class="top-left-block col-md-12">
            <div class="panel panel-default panel-page">
              <div class="panel-heading">
                <h3 class="panel-title"><span>2013 - 2015 - жылга карай КТРКнын Өнүгүү стратегиясынын долбоору</span></h3>
              </div>
              <div class="panel-body">
                <div class="rsarticles">

                  <div class="modal fade strategy" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="myModalLabel">Кыргыз Республикасынын Коомдук телерадиоберүү корпорациясы жөнүндө мыйзам</h4>
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
              </div>
            </div><!-- end panel default -->

          </div>
        </div>
      </section>
    </div>
  </div>
@stop