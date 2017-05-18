@extends('Front::layouts.default')
@section('title', trans('site.BaikoochuKeneshReportsTitle').' | КТРК')
@section('styles')
  {{--<link rel="stylesheet" type="text/css" href="{{ asset('/static/css/styles.css') }}">--}}
  <meta name="_token" content="{!! csrf_token() !!}"/>
  <link rel="stylesheet" href="{{ asset('css/articles.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/pages.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/build.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/sweetalert.css') }}">
@stop
@section('content')

  <div class="container main-wrapper">
    <div class="row">
      <section class="content clearfix">
        <div class="clearfix">
          <div class="top-left-block col-xs-12 col-sm-12 col-md-12">
            <div class="panel panel-default panel-kenesh panel-ns-reports">
              <div class="panel-heading">
                <h3 class="panel-title"><span>{{ trans('site.BaikoochuKeneshFull') }}</span></h3>
              </div>
              <div class="panel-body">

                @include('Front::ns.sidebar')

                <div class="col-md-10">
                  <div class="row">
                    <div class="panel-heading second-panel-heading">
                      <h3 class="panel-title"><span>{{ trans('site.BaikoochuKeneshReportsTitle') }}</span></h3>
                    </div>
                    <div class="panel-body second-panel-body">

                      <ul class="list-group first-level">

                        @if($lc == 'kg')

                          <li>
                            <p>
                              Документтин негизги максаты – Коомдук телерадиокорпорациянын 2012 – 2013-жылдардагы ишин көрсөтүү, отчеттук мезгилде КТРК реформалоонун жетишкен натыйжаларын чагылдыруу, ошондой эле КТРК алдында пайда болгон проблемаларга көңүл буруу, аларды биргелешип чечүүнүн жолдорун издөө.
                            </p>
                          </li>

                          <li class="list-group-item col-md-6">
                            <a target="_blank" href="{{ asset('static/files/ns/ns-report-2012.pdf') }}">2012 жылдын отчету менен танышуу</a>
                            <ul class="list-group second-level">
                              <li class="list-group-item">
                                <div class="media">
                                  <div class="media-body">
                                    <a target="_blank" href="{{ asset('static/files/ns/ns-report-2012.pdf') }}" class="btn btn-default"><i class="fa fa-file-pdf-o"></i></a>
                                    {{--<a target="_blank" class="otchet" href="{{ asset('static/files/report/tender.pdf') }}"> Республикалык радиотелеборбордун 2012-жылдагы тендердин жеңүүчүлөрү тууралуу маалымдама</a>--}}
                                  </div>
                                </div>
                              </li>
                            </ul>
                          </li>
                          

                          <li class="list-group-item col-md-6">
                            <a target="_blank" href="{{ asset('static/files/ns/ns-report-kg-2013.pdf') }}">2013 жылдын отчету менен танышуу</a>
                            <ul class="list-group second-level">
                              <li class="list-group-item">
                                <div class="media">
                                  <div class="media-body">
                                    <a target="_blank" href="{{ asset('static/files/ns/ns-report-kg-2013.pdf') }}" class="btn btn-default"><i class="fa fa-file-pdf-o"></i></a>
                                    {{--<a target="_blank" class="otchet" href="{{ asset('static/files/report/tender.pdf') }}"> Республикалык радиотелеборбордун 2012-жылдагы тендердин жеңүүчүлөрү тууралуу маалымдама</a>--}}
                                  </div>
                                </div>
                              </li>
                            </ul>
                          </li>

                          <li class="list-group-item col-md-6">
                            <a target="_blank" href="{{ asset('static/files/ns/report-2014-nsKG.pdf') }}">2014 жылдын отчету менен танышуу</a>
                            <ul class="list-group second-level">
                              <li class="list-group-item">
                                <div class="media">
                                  <div class="media-body">
                                    <a target="_blank" href="{{ asset('static/files/ns/report-2014-nsKG.pdf') }}" class="btn btn-default"><i class="fa fa-file-pdf-o"></i></a>
                                    {{--<a target="_blank" class="otchet" href="{{ asset('static/files/report/tender.pdf') }}"> Республикалык радиотелеборбордун 2012-жылдагы тендердин жеңүүчүлөрү тууралуу маалымдама</a>--}}
                                  </div>
                                </div>
                              </li>
                            </ul>
                          </li>

                          <li class="list-group-item col-md-6">
                            <a target="_blank" href="{{ asset('static/files/ns/report-2015-kg.pdf') }}">2015 жылдын отчету менен танышуу</a>
                            <ul class="list-group second-level">
                              <li class="list-group-item">
                                <div class="media">
                                  <div class="media-body">
                                    <a target="_blank" href="{{ asset('static/files/ns/report-2015-kg.pdf') }}" class="btn btn-default"><i class="fa fa-file-pdf-o"></i></a>
                                    {{--<a target="_blank" class="otchet" href="{{ asset('static/files/report/tender.pdf') }}"> Республикалык радиотелеборбордун 2012-жылдагы тендердин жеңүүчүлөрү тууралуу маалымдама</a>--}}
                                  </div>
                                </div>
                              </li>
                            </ul>
                          </li>

                          <li class="list-group-item col-md-6">
                            <a target="_blank" href="{{ asset('static/files/ns/report-2016-kg.pdf') }}">2016 жылдын отчету менен танышуу</a>
                            <ul class="list-group second-level">
                              <li class="list-group-item">
                                <div class="media">
                                  <div class="media-body">
                                    <a target="_blank" href="{{ asset('static/files/ns/report-2016-kg.pdf') }}" class="btn btn-default"><i class="fa fa-file-pdf-o"></i></a>
                                    {{--<a target="_blank" class="otchet" href="{{ asset('static/files/report/tender.pdf') }}"> Республикалык радиотелеборбордун 2012-жылдагы тендердин жеңүүчүлөрү тууралуу маалымдама</a>--}}
                                  </div>
                                </div>
                              </li>
                            </ul>
                          </li>


                        @elseif($lc == 'ru')

                          <li>
                            <p>
                              Основная цель документа - представить информацию о деятельности Общественной телерадиокорпорации КР за 2012-2013 годы, показать достигнутые результаты по реформированию КТРК за отчетный период, а также обратить внимание  на проблемы, возникающие перед КТРК для дальнейшего изыскания путей их совместного решения.
                            </p>
                          </li>

                          <li class="list-group-item col-md-6">
                            <a target="_blank" href="{{ asset('static/files/ns/ns-report-2012.pdf') }}">Отчет НС за 2012 год</a>
                            <ul class="list-group second-level">
                              <li class="list-group-item">
                                <div class="media">
                                  <div class="media-body">
                                    <a target="_blank" href="{{ asset('static/files/ns/ns-report-2012.pdf') }}" class="btn btn-default"><i class="fa fa-file-pdf-o"></i></a>
                                    {{--<a target="_blank" class="otchet" href="{{ asset('static/files/report/tender.pdf') }}"> Республикалык радиотелеборбордун 2012-жылдагы тендердин жеңүүчүлөрү тууралуу маалымдама</a>--}}
                                  </div>
                                </div>
                              </li>
                            </ul>
                          </li>

                          <li class="list-group-item col-md-6">
                            <a target="_blank" href="{{ asset('static/files/ns/ns-report-kg-2013.pdf') }}">Отчет НС за 2013 год</a>
                            <ul class="list-group second-level">
                              <li class="list-group-item">
                                <div class="media">
                                  <div class="media-body">
                                    <a target="_blank" href="{{ asset('static/files/ns/ns-report-kg-2013.pdf') }}" class="btn btn-default"><i class="fa fa-file-pdf-o"></i></a>
                                    {{--<a target="_blank" class="otchet" href="{{ asset('static/files/report/tender.pdf') }}"> Республикалык радиотелеборбордун 2012-жылдагы тендердин жеңүүчүлөрү тууралуу маалымдама</a>--}}
                                  </div>
                                </div>
                              </li>
                            </ul>
                          </li>

                          <li class="list-group-item col-md-6">
                            <a target="_blank" href="{{ asset('static/files/ns/report-2014-nsRu.pdf') }}">Отчет НС за 2014 год</a>
                            <ul class="list-group second-level">
                              <li class="list-group-item">
                                <div class="media">
                                  <div class="media-body">
                                    <a target="_blank" href="{{ asset('static/files/ns/report-2014-nsRu.pdf') }}" class="btn btn-default"><i class="fa fa-file-pdf-o"></i></a>
                                    {{--<a target="_blank" class="otchet" href="{{ asset('static/files/report/tender.pdf') }}"> Республикалык радиотелеборбордун 2012-жылдагы тендердин жеңүүчүлөрү тууралуу маалымдама</a>--}}
                                  </div>
                                </div>
                              </li>
                            </ul>
                          </li>

                          <li class="list-group-item col-md-6">
                            <a target="_blank" href="{{ asset('static/files/ns/report-2015-ru.pdf') }}">Отчет НС за 2015 год</a>
                            <ul class="list-group second-level">
                              <li class="list-group-item">
                                <div class="media">
                                  <div class="media-body">
                                    <a target="_blank" href="{{ asset('static/files/ns/report-2015-ru.pdf') }}" class="btn btn-default"><i class="fa fa-file-pdf-o"></i></a>
                                    {{--<a target="_blank" class="otchet" href="{{ asset('static/files/report/tender.pdf') }}"> Республикалык радиотелеборбордун 2012-жылдагы тендердин жеңүүчүлөрү тууралуу маалымдама</a>--}}
                                  </div>
                                </div>
                              </li>
                            </ul>
                          </li>

                          <li class="list-group-item col-md-6">
                            <a target="_blank" href="{{ asset('static/files/ns/report-2016-ru.pdf') }}">Отчет НС за 2016 год</a>
                            <ul class="list-group second-level">
                              <li class="list-group-item">
                                <div class="media">
                                  <div class="media-body">
                                    <a target="_blank" href="{{ asset('static/files/ns/report-2016-ru.pdf') }}" class="btn btn-default"><i class="fa fa-file-pdf-o"></i></a>
                                    {{--<a target="_blank" class="otchet" href="{{ asset('static/files/report/tender.pdf') }}"> Республикалык радиотелеборбордун 2012-жылдагы тендердин жеңүүчүлөрү тууралуу маалымдама</a>--}}
                                  </div>
                                </div>
                              </li>
                            </ul>
                          </li>

                        @endif

                      </ul>

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

  <script src="{{ asset('js/sweetalert.min.js') }}"></script>

  <script>
    function getVote(vote){
      $.ajaxSetup({
        headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
      });

      var dataString = 'vote='+vote;
      var url = "{{ route('front.poll_vote') }}";
      var parent = $('#poll');

      $.ajax({
          type: "POST",
          url: url,
          data: dataString,
          cache: false,
          success: function(data)
          {
            if(data['status'] == false){
              swal("", "С одного IP-адреса можно голосовать 1 РАЗ!", "error");
            }
            else{
              swal("Спасибо!", "Ваш голос учтен!", "success");
              parent.html(data['html']);
            }
          }
      });
    }
  </script>

@endsection