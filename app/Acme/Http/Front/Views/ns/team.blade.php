@extends('Front::layouts.default')
@section('title', trans('site.BaikoochuKeneshTeamTitle').' | КТРК')
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

                      <div class="col-md-6 ns-team">
                        <div class="ns-photo">
                          <img src="{{ asset('static/images/ns/ns_1.jpg') }}" alt=""/>
                        </div>
                        <div class="ns-info">
                          <span class="ns-name"><strong>Абды Сатаров</strong> / КТРКнын Байкоочу кеңешинин төрагасы </span>
                          <p class="ns-desc">
                            <?php
                            $content = 'Кесиби - журналист. 1973-жылы тележурналисттик кесипке келип, ошондон бери  Кыргызстандагы дээрлик бардык телекомпанияларда иштеген. Мамлекеттик телерадиокомпаниядан тарта «Ош-3000», КООРТ, НТС, андан сырткары «ZAMAN Кыргызстан» эл аралык гезитинде, "Интерньюс-Кыргызстан" эл аралык медиа уюмунда эмгектенип келди. Учурда Кыргыз-Түрк «Манас» Университетинде журналистика боюнча сабак берүү менен бирге Коммуникация факультетинде  декандын орун басарынын кызматын аткарат.';
                            $pos=strpos($content, ' ', 200);
                            echo substr($content,0,$pos );
                            ?></p>
                          <p>Байкоочулар кеңешине президент тарабынан сунушталган. </p>
                        </div>
                      </div>

                      <div class="col-md-6 ns-team">
                        <div class="ns-photo">
                          <img src="{{ asset('static/images/ns/ns_2.jpg') }}" alt=""/>
                        </div>
                        <div class="ns-info">
                          <span class="ns-name"><strong>Анатай Омурканов</strong></span>
                          <p class="ns-desc">Акын жана жазуучу. Бир нече жыйнактардын автору. “Советтик Кыргызстан” гезитинде, “Кыргызстан” жана “Адабият” басылмаларында иштеген.  Кыргызстан жазуучулар союзунун мурдагы жетекчиси.</p>
                          <p>Байкоочулар кеңешине президент тарабынан сунушталган. </p>
                        </div>
                      </div>

                      <div class="col-md-6 ns-team">
                        <div class="ns-photo">
                          <img src="{{ asset('static/images/ns/ns_3.jpg') }}" alt=""/>
                        </div>
                        <div class="ns-info">
                          <span class="ns-name"><strong>Игорь Шестаков</strong></span>
                          <p class="ns-desc">Медиа-окутуучу, саясат таануучу. Орусиялык  Гуманитардык университеттин юридикалык факультетин бүтүргөн.  Журналисттик ишмердүүлүгүн «Вечерний Бишкек» гезитинен баштаган. ОРТнын “Время” берүүсүнүн өз кабарчысы, “Интерфакс” маалымат агенттигинин Кыргызстандагы бюросунун шеф-редактору, «Российская газета» басылмасынын Борбор Азия боюнча боюнча өкүлчүлүгүнүн директору, «КирТАГ» маалымат агенттигинин башкы редактору болуп иштеген. Учурда аналитикалык «Регион.kg» сайтынын башкы редактору.
                          </p>
                          <p>Байкоочулар кеңешине президент тарабынан сунушталган.</p>
                        </div>
                      </div>

                      <div class="col-md-6 ns-team">
                        <div class="ns-photo">
                          <img src="{{ asset('static/images/ns/ns_4.jpg') }}" alt=""/>
                        </div>
                        <div class="ns-info">
                          <span class="ns-name"><strong>Жылдыз Бакашева</strong></span>
                          <p class="ns-desc">Филология илимдеринин доктору, профессор. Кыргыз мамлекеттик улуттук Университеттин  журналистика бөлүмүн бүтүрүп, кийин илимий даражаларын жактаган. КМУда окутуучу, кафедра жетекчиси жана декан, Жогорку Кеңеште эксперт, Тышкы иштер министрлигинин дипломатиялык академиясында проректор болуп иштеген. Учурда улуттук китепканынын директору. 2010-жылы дайындалган биринчи байкоочу кеңештин мүчөсү.</p>
                          <p>Байкоочулар кеңешине президент тарабынан сунушталган.</p>
                        </div>
                      </div>

                      <div class="col-md-6 ns-team">
                        <div class="ns-photo">
                          <img src="{{ asset('static/images/ns/ns_5.jpg') }}" alt=""/>
                        </div>
                        <div class="ns-info">
                          <span class="ns-name"><strong>Сабырбек Мукамбетов</strong></span>
                          <p class="ns-desc">Саясий серепчи. Экономист адистигие ээ. 1990-жылдары Кыргызстан демократиялык кыймылында жооптуу катчы, кийинки мезгилерди президенттин алдындагы Адам укуктары боюнча комиссиянын төрагасынын орун басары болуп иштеген.Үй куруучулардын демократиялык союзунун төрагасы, Бириккен Элдик кыймылдын улуттук кеңешинин мүчөсү болгон. 2007-2012-ж.ж. «Ачык саясат», «Алиби», «Учур», «Назар», «Айгай», «Аалам» гезиттеринде саясий баяндамачы. Учурда  «Азия ньюс» гезитинин башкы редактору.</p>
                          <p>Байкоочулар кеңешине президент тарабынан сунушталган.</p>
                        </div>
                      </div>

                      <div class="col-md-6 ns-team">
                        <div class="ns-photo">
                          <img src="{{ asset('static/images/ns/ns_6.jpg') }}" alt=""/>
                        </div>
                        <div class="ns-info">
                          <span class="ns-name"><strong>Тамара Жаманбаева</strong></span>
                          <p class="ns-desc">Алгач медицина  окуу жайын,  КМУнун журналистика факультетин бүткөн. Кыргыз телекөрсөтүүсүнүн  тарыхындагы алгачкы, ошондой эле таланттуу алып баруучуларынын бири. Эмгек жолун 1959-ж. Кыргыз мамлекеттик телерадиокомитетине диктор-стажёрлуктан баштап, вице-президенттик кызматтарга чейин иштеген. Кийин "Замана" чыгармачыл-өндүрүштүк бирикмесинин директору, продюсери болду.</p>
                          <p>Байкоочулар кеңешине президент тарабынан сунушталган.</p>
                        </div>
                      </div>

                      <div class="col-md-6 ns-team">
                        <div class="ns-photo">
                          <img src="{{ asset('static/images/ns/ns_7.jpg') }}" alt=""/>
                        </div>
                        <div class="ns-info">
                          <span class="ns-name"><strong>Тынчтыкбек Чоротегин</strong></span>
                          <p class="ns-desc">Тарыхчы, журналист, публицист. Тарых илимдеринин доктору, профессор. Бир нече илимий эмгектердин автору. Лондондо “Би-Би-Си” радиосунун Кыргыз кызматынын продюсери, андан кийин 11 жылга жакын убакыт  «Азаттык» үналгысынын Прагадагы баш кеңсесинде иштеген. Учурда Кыргыз Тарых Коомунун президенти.</p>
                          <p>Байкоочулар кеңешине президент тарабынан сунушталган.</p>
                        </div>
                      </div>

                      <div class="col-md-6 ns-team">
                        <div class="ns-photo">
                          <img src="{{ asset('static/images/ns/ns_9.jpg') }}" alt=""/>
                        </div>
                        <div class="ns-info">
                          <span class="ns-name"><strong>Вячеслав Гончаров</strong></span>
                          <p class="ns-desc">«Доор медиа» коомдук фондунун директору, медиа-адис, окутуучу. БГУнун филология факультетин бүтүргөн.1999-жылдан бери журналистикада. ВОССТ, «Мир» телекомпанияларында, андан кийин «Интерньюс-Кыргызстан» эл аралык медиа уюмунда иштеп, «Зло перо» теле көрсөтүүсүн алып барып, кийинчерээк атайын репортаждар программасына продюсерлик кылат. Эл аралык уюмдар менен биргеликте долбоор иштелип чыгылган бир нече социалдык роликтердин жана документалдык фильмдердин автору.</p>
                          <p>Байкоочулар кеңешине президент тарабынан сунушталган.</p>
                        </div>
                      </div>


                      <div class="col-md-6 ns-team">
                        <div class="ns-photo">
                          <img src="{{ asset('static/images/ns/ns_8.jpg') }}" alt=""/>
                        </div>
                        <div class="ns-info">
                          <span class="ns-name"><strong>Алхожоев Тимур</strong></span>
                          <p class="ns-desc">Кесиби юрист. Ж. Баласагын атындагы Кыргыз улуттук университетинин юридикалык факультетинен билим алган. Азыркы учурда КР Өкмөтүнүн алдындагы Кыргыз мамлекеттик юридикалык академиясынын аспиранты. Телекоммуникация тармагында эмгектенип, массалык маалымат каражаттарына байланышкан маселелерге өзгөчө көңүл буруп келет.</p>
                          <p>Байкоочулар кеңешине президент тарабынан сунушталган.</p>
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

  <script>
    function getVote(int) {
      if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
      } else {  // code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange=function() {
        if (xmlhttp.readyState==4 && xmlhttp.status==200) {
          document.getElementById("poll").innerHTML=xmlhttp.responseText;
        }
      }
      xmlhttp.open("GET","{{ asset('poll_vote.php') }}?vote="+int,true);
      xmlhttp.send();
    }

    var count = $("div[class*='ns-team']").length;

//    for(var i=0; i<count/2; i++){
      $('.ns-team').each(function(i, el){
        if(i % 2 == 0){
          var currentElement = $(this);
          var nextElement = $(this).next();
          var currentElementHeight = currentElement.height();
          var nextElementHeight = nextElement.height();

          if(currentElementHeight>nextElementHeight){
            nextElement.height(currentElementHeight);
          } else {
            currentElement.height(nextElementHeight);
          }

//          $(this).append('<span> '+currentElementHeight+'-'+nextElementHeight+'</span>');
        }
         else{
          var currentElementHeight = $(this).height();

//          $(this).append('<span> '+currentElementHeight+'</span>');
        }
      });
//    }

  </script>

@endsection