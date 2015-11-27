@extends('Front::layouts.default')
@section('title', trans('site.Managers')." | КТРК")
@section('styles')
  <link rel="stylesheet" href="{{ asset('css/pages.css') }}"/>
@endsection

@section('content')
  <div class="container main-wrapper">
    <div class="row">
      <section class="content clearfix">
        <div class="clearfix">
          <div class="top-left-block col-md-12">
            <div class="panel panel-default panel-managers">
              <div class="panel-heading">
                <h3 class="panel-title">{{ trans('site.Managers') }}</h3>
              </div>
              <div class="panel-body">

                <div class="col-md-12 directors">
                  <div class="col-md-6">
                    <div class="row">
                      <img src="{{ asset('images/managers/1.png') }}" >
                    </div>
                  </div>
                  <div class="col-md-6 director-info">
                    <div class="row">
                      <h4>Карыпбеков Илим Майрамбекович</h4>
                      <h5>КТРКнын башкы директору</h5>
                      <a href="{{ route('front.pages.director') }}" class="btn btn-default">Толук маалымат</a>
                    </div>
                  </div>
                </div>

                <div class="col-md-4 directors directors-small">
                  <div class="col-md-12 director-thumb">
                    <div class="row">
                      <img src="{{ asset('images/managers/2.jpg') }}">
                    </div>
                  </div>
                  <div class="col-md-6 director-info">
                    <div class="row">
                      <h4>Асылбашев Калыйбек Шаршеналиевич</h4>
                      <h5>КТРКнын башкы директорунун телеберүүлөр боюнча орун басары</h5>
                    </div>
                  </div>
                </div>

                <div class="col-md-4 directors directors-small">
                  <div class="col-md-12 director-thumb">
                    <div class="row">
                      <img src="{{ asset('images/managers/3.jpg') }}">
                    </div>
                  </div>
                  <div class="col-md-6 director-info">
                    <div class="row">
                      <h4>Иманалиев Кайрат Олжобаевич</h4>
                      <h5>КТРКнын башкы директорунун радио уктуруулар боюнча орун басары</h5>
                    </div>
                  </div>
                </div>

                <div class="col-md-4 directors directors-small">
                  <div class="col-md-12 director-thumb">
                    <div class="row">
                      <img src="{{ asset('images/managers/4.jpg') }}">
                    </div>
                  </div>
                  <div class="col-md-6 director-info">
                    <div class="row">
                      <h4>Алиев Бактияр Жеңишбекович</h4>
                      <h5>КТРКнын Республикалык радио телеборборунун директору</h5>
                    </div>
                  </div>
                </div>

              </div><!-- end panel body-->
            </div>

          </div>
        </div>
      </section>
    </div>
  </div>
@stop