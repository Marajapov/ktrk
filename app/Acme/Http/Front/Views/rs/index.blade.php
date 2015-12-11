@extends('Front::layouts.default')
@section('title', 'Редакционный советник | КТРК')
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
                      <h3 class="panel-title"><span>Новости</span></h3>
                    </div>
                    <div class="panel-body second-panel-body">

                      {{--@include('Front::ns.lastPosts')--}}

                      <div class="col-md-5 first-item">

                        <div class="row">

                            <a href="#" class="thumb">
                              <img src="{{ asset('images/11449585369.jpg') }}" alt=""/>
                            </a>
                            <h2>
                              <div class="extra">
                                <span class="e-datetime">18 Нояб , 12:22</span>
                                <span class="e-views"><i class="fa fa-eye"></i>17</span>
                              </div>
                              <a href="#">Атамбаев Кыргызстанда “кол тийбес” аткаминерлер жок экенин айтты</a>
                            </h2>

                        </div>

                        <div class="row">

                          <a href="#" class="thumb">
                            <img src="{{ asset('images/image.jpg') }}" alt=""/>
                          </a>
                          <h2>
                            <div class="extra">
                              <span class="e-datetime">18 Нояб , 12:22</span>
                              <span class="e-views"><i class="fa fa-eye"></i>17</span>
                            </div>
                            <a href="#">Атамбаев Кыргызстанда “кол тийбес” аткаминерлер жок экенин айтты</a>
                          </h2>

                        </div>

                      </div>

                      <div class="col-md-7">
                        @include('Front::rs.lastPosts')
                      </div>

                      <footer>
                        <a href="{{ route('front.rs.posts') }}">
                          <span>Все новости <i class="fa fa-arrow-circle-right"></i></span>
                        </a>
                      </footer>

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