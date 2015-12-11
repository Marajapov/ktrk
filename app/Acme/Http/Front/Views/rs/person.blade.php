@extends('Front::layouts.default')
@section('title', 'Валиева Тамара Бектурсуновна | Редакционный советник | КТРК')
@section('styles')
  {{--<link rel="stylesheet" type="text/css" href="{{ asset('/static/css/styles.css') }}">--}}
  <link rel="stylesheet" href="{{ asset('css/articles.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/pages.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/build.css') }}"/>
@stop
@section('content')

  <div class="container main-wrapper">
    <div class="row">
      <section class="content clearfix">
        <div class="clearfix">
          <div class="top-left-block col-xs-12 col-sm-12 col-md-12">
            <div class="panel panel-default panel-kenesh panel-rs">
              <div class="panel-heading">
                <h3 class="panel-title"><span>Редакционный советник</span></h3>
              </div>
              <div class="panel-body">

                @include('Front::rs.sidebar')

                <div class="col-md-9">
                  <div class="row">
                    <div class="panel-heading second-panel-heading">
                      <h3 class="panel-title"><span>Валиева Тамара Бектурсуновна</span></h3>
                    </div>
                    <div class="panel-body second-panel-body panel-person">

                      <p class="text-center">
                        <img class="img-thumbnail" src="{{ asset('static/images/rs/tamara1.jpg') }}" alt=""/>
                      </p>

                      <p class="text-center"><strong>Редакционный советник КТРК (Омбудсмен)</strong></p>

                    </div>

                  </div>
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
@endsection