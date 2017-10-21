@extends('Front::layouts.default')
@section('title', trans('site.BaikoochuKeneshTeamTitle').' | КТРК')
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
            <div class="panel panel-default panel-kenesh">
              <div class="panel-heading">
                <h3 class="panel-title"><span>{{ trans('site.BaikoochuKeneshFull') }}</span></h3>
              </div>
              <div class="panel-body">

                @include('Front::ns.sidebar')

                <div class="col-md-10">
                  <div class="row">
                    <div class="panel-heading second-panel-heading">
                      <h3 class="panel-title"><span>{{ trans('site.BaikoochuKeneshTeamTitle') }}</span></h3>
                    </div>
                    <div class="panel-body second-panel-body">

                      <div class="clearfix">
                        <div class="col-md-6 ns-team">
                          <div class="ns-photo">
                            <img src="{{ asset('static/images/ns/ns_main.jpg') }}" alt=""/>
                          </div>
                          <div class="ns-info">
                            <span class="ns-name"><strong>Жыпар Жекшеев</strong> /
                            @if($lc == 'kg')
                              КТРКнын Байкоочу кеңешинин төрагасы
                            @else
                              Председатель НС КТРК 
                            @endif
                            </span>
                            @if($lc == 'kg')
                              <p class="ns-desc">
                                Филология илимдеринин доктору, профессор. Кыргыз мамлекеттик улуттук Университеттин  журналистика бөлүмүн бүтүрүп, кийин илимий даражаларын жактаган. КМУда окутуучу, кафедра жетекчиси жана декан, Жогорку Кеңеште эксперт, Тышкы иштер министрлигинин дипломатиялык академиясында проректор болуп иштеген. Учурда улуттук китепканынын директору. 2010-жылы дайындалган биринчи байкоочу кеңештин мүчөсү.
                                <span>Байкоочулар кеңешине Жогорку Кеңеш тарабынан сунушталган.</span>
                              </p>
                            @else
                              <p class="ns-desc">
                                Доктор филологических наук, профессор. Закончила факультет журналистики Кыргызского государственного университета, позже защитила диссертацию и получила научную степень. Работала преподавателем, заведующей кафедрой и деканом в КНУ, экспертом в Жогорку Кенеше, проректором в Дипломатической академии Министерства иностранных дел Кыргызской Республики. В настоящее время является директором Национальной библиотеки.
                                <span>В наблюдательный совет КТРК была предложена от Жогорку Кенеша.</span>
                              </p>
                            @endif
                          </div>
                        </div>

                        <div class="col-md-6 ns-team">
                          <div class="ns-photo">
                            <img src="{{ asset('static/images/ns/ns_16.jpg') }}" alt=""/>
                          </div>
                          <div class="ns-info">
                            <span class="ns-name">
                              <strong>Жылдыз Бакашова</strong>
                            </span>
                            @if($lc == 'kg')
                              <p class="ns-desc">
                                Филология илимдеринин доктору, профессор. Кыргыз мамлекеттик улуттук Университеттин  журналистика бөлүмүн бүтүрүп, кийин илимий даражаларын жактаган. КМУда окутуучу, кафедра жетекчиси жана декан, Жогорку Кеңеште эксперт, Тышкы иштер министрлигинин дипломатиялык академиясында проректор болуп иштеген. Учурда улуттук китепканынын директору. 2010-жылы дайындалган биринчи байкоочу кеңештин мүчөсү.
                                <span>Байкоочулар кеңешине Жогорку Кеңеш тарабынан сунушталган.</span>
                              </p>
                            @else
                              <p class="ns-desc">
                                Доктор филологических наук, профессор. Закончила факультет журналистики Кыргызского государственного университета, позже защитила диссертацию и получила научную степень. Работала преподавателем, заведующей кафедрой и деканом в КНУ, экспертом в Жогорку Кенеше, проректором в Дипломатической академии Министерства иностранных дел Кыргызской Республики. В настоящее время является директором Национальной библиотеки.
                                <span>В наблюдательный совет КТРК была предложена от Жогорку Кенеша.</span>
                              </p>
                            @endif
                          </div>
                        </div>
                      </div>

                      <div class="clearfix">

                        <div class="col-md-6 ns-team">
                          <div class="ns-photo">
                            <img src="{{ asset('static/images/ns/ns_2.jpg') }}" alt=""/>
                          </div>
                          <div class="ns-info">
                            <span class="ns-name"><strong>Анатай Омурканов</strong></span>
                            @if($lc == 'kg')
                              <p class="ns-desc">
                                Акын жана жазуучу. Бир нече жыйнактардын автору. “Советтик Кыргызстан” гезитинде, “Кыргызстан” жана “Адабият” басылмаларында иштеген.  Кыргызстан жазуучулар союзунун мурдагы жетекчиси.
                              <span>
                                Байкоочулар кеңешине президент тарабынан сунушталган.
                              </span>
                              </p>
                            @else
                              <p class="ns-desc">
                                Народный поэт Кыргызской Республики. Работал в редакциях газет «Советтик Кыргызстан», «Кыргызстан» и «Адабият». Председатель Союза писателей страны.
                                <span>
                                  В наблюдательный совет КТРК был предложен от Президента.
                                </span>
                              </p>
                            @endif
                          </div>
                        </div>
                        <div class="col-md-6 ns-team">
                          <div class="ns-photo">
                            <img src="{{ asset('static/images/ns/ns_10.jpg') }}" alt=""/>
                          </div>
                          <div class="ns-info">
                            <span class="ns-name"><strong>Игорь Шестаков</strong></span>
                            @if($lc == 'kg')
                              <p class="ns-desc">
                                Медиа-окутуучу, саясат таануучу.
                                Орусиялык  Гуманитардык университеттин юридикалык факультетин бүтүргөн.  Журналисттик ишмердүүлүгүн «Вечерний Бишкек» гезитинен баштаган. ОРТнын “Время” берүүсүнүн өз кабарчысы, “Интерфакс” маалымат агенттигинин Кыргызстандагы бюросунун шеф-редактору, «Российская газета» басылмасынын Борбор Азия боюнча боюнча өкүлчүлүгүнүн директору, «КирТАГ» маалымат агенттигинин башкы редактору болуп иштеген. Учурдааналитикалык «Регион.kg» сайтынын башкы редактору.
                                <span>Байкоочулар кеңешине президент тарабынан сунушталган.</span>
                              </p>
                            @else
                              <p class="ns-desc">
                                Медиа-тренер, политолог. Закончил юридический факультет Российского Гуманитарного университета. Журналистскую деятельность начал с газеты «Вечерний Бишкек». Работал собственным корреспондентом  программы «Время», шеф-редактором в кыргызстанском бюро информационного агентства «Интерфакс», директором представительства печатного издания «Российская газета» по Центральной Азии, главным редактором информационного агентства «КирТАГ». Сейчас является главным редактором аналитического сайта «region.kg».
                                <span>В наблюдательный совет КТРК был предложен от Президента.</span>
                              </p>
                            @endif
                          </div>
                        </div>
                      </div>

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

  <script src="{{ asset('js/readmore.js') }}"></script>
  <script>
    $('.ns-desc').readmore({
      speed: 500,
      moreLink: '<a href="#">{{ trans('site.ReadMore') }}</a>',
        lessLink: '<a href="#">{{ trans('site.ReadLess') }}</a>',
      collapsedHeight: 100,
      heightMargin: 20
    });
  </script>

@endsection