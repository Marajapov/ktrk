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

                <div class="col-md-2">
                  <div class="row">
                    <nav class="navbar navbar-custom">
                      <div class="">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Меню</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                          <ul class="nav navbar-nav">
                            <li><a href="{{ route('front.ns.index') }}">{{ trans('site.BaikoochuKeneshMain') }}</a></li>
                            <li><a href="{{ route('front.ns.team') }}">{{ trans('site.BaikoochuKeneshTeam') }} </a></li>
                            <li><a href="{{ route('front.ns.posts') }}">{{ trans('site.BaikoochuKeneshNews') }}</a></li>
                            <li>
                              <a data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample" class="collapsed">
                                {{ trans('site.BaikoochuKeneshBase') }}
                                <i class="fa fa-chevron-right"></i>
                              </a>
                              <div class="collapse" id="collapseExample">
                                <ul>
                                  <li><a href="#">{{ trans('site.BaikoochuKeneshReglament') }}</a></li>
                                  {{--<li><a href="#">Положение о порядке проведения открытого конкурса на замещение должности Генерального Директора КТРК КР</a></li>--}}
                                </ul>
                              </div>
                            </li>
                            <li><a href="{{ route('front.ns.reports') }}">{{ trans('site.BaikoochuKeneshReports') }}</a></li>
                            <li><a href="{{ route('front.ns.galleries') }}">{{ trans('site.BaikoochuKeneshGallery') }}</a></li>
                            <li><a href="{{ route('front.ns.contacts') }}">{{ trans('site.BaikoochuKeneshContacts') }}</a></li>
                            {{--<li><a href="#">Сурамжылоо</a></li>--}}
                          </ul>

                        </div><!-- /.navbar-collapse -->
                      </div><!-- /.container-fluid -->
                    </nav>

                    <div class="panel-heading sidebar-panel-heading">
                      <h3 class="panel-title"><span>{{ trans('site.BaikoochuKeneshAsk') }}</span></h3>
                    </div>
                    <div class="panel-body sidebar-panel-body">
                      <h4><strong>Как Вы оцениваете работу НС КТРК?</strong></h4>

                      <div id="poll" class="poll">
                        <form >
                          <div class="radio">
                            <input type="radio" name="vote" id="radio1" value="1" onclick="getVote(this.value)">
                            <label for="radio1">
                              Отлично
                            </label>
                          </div>
                          <div class="radio">
                            <input type="radio" name="vote" id="radio2" value="2" onclick="getVote(this.value)">
                            <label for="radio2">
                              Хорошо
                            </label>
                          </div>
                          <div class="radio">
                            <input type="radio" name="vote" id="radio3" value="3" onclick="getVote(this.value)">
                            <label for="radio3">
                              Удовлетворительно
                            </label>
                          </div>
                        </form>
                      </div>

                    </div>

                  </div>
                </div>

                <div class="col-md-10">
                  <div class="row">
                    <div class="panel-heading second-panel-heading">
                      <h3 class="panel-title"><span>{{ trans('site.BaikoochuKeneshTeamTitle') }}</span></h3>
                    </div>
                    <div class="panel-body second-panel-body">

                      <div class="col-md-6 ns-team">
                        <div class="ns-photo">
                          <img src="{{ asset('static/images/ns/abdy_satarov.jpg') }}" alt=""/>
                        </div>
                        <div class="ns-info">
                          <span class="ns-name"><strong>Абды Сатаров</strong> / КТРКнын Байкоочу кеңешинин төрагасы </span>
                          <p class="ns-desc">Кесиби - журналист. 1973-жылы тележурналисттик кесипке келип, ошондон бери  Кыргызстандагы дээрлик бардык            телекомпанияларда иштеген. Мамлекеттик телерадиокомпаниядан тарта «Ош-3000», КООРТ, НТС, андан сырткары «ZAMAN Кыргызстан» эл аралык гезитинде, "Интерньюс-Кыргызстан" эл аралык медиа уюмунда эмгектенип келди. Учурда Кыргыз-Түрк «Манас» Университетинде журналистика боюнча сабак берүү менен бирге Коммуникация факультетинде  декандын орун басарынын кызматын аткарат.</p>
                          <p>Байкоочулар кеңешине президент тарабынан сунушталган. </p>
                        </div>
                      </div>

                      <div class="col-md-6 ns-team">
                        <div class="ns-photo">
                          <img src="{{ asset('static/images/ns/anatay_omurkanov.jpg') }}" alt=""/>
                        </div>
                        <div class="ns-info">
                          <span class="ns-name"><strong>Анатай Омурканов</strong></span>
                          <p class="ns-desc">Акын жана жазуучу. Бир нече жыйнактардын автору. “Советтик Кыргызстан” гезитинде, “Кыргызстан” жана “Адабият” басылмаларында иштеген.  Кыргызстан жазуучулар союзунун мурдагы жетекчиси.</p>
                          <p>Байкоочулар кеңешине президент тарабынан сунушталган. </p>
                        </div>
                      </div>

                      <div class="col-md-6 ns-team">
                        <div class="ns-photo">
                          <img src="{{ asset('static/images/ns/igor_shestakov.jpg') }}" alt=""/>
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
                          <img src="{{ asset('static/images/ns/zhyldyz_bakasheva.jpg') }}" alt=""/>
                        </div>
                        <div class="ns-info">
                          <span class="ns-name"><strong>Жылдыз Бакашева</strong></span>
                          <p class="ns-desc">Филология илимдеринин доктору, профессор. Кыргыз мамлекеттик улуттук Университеттин  журналистика бөлүмүн бүтүрүп, кийин илимий даражаларын жактаган. КМУда окутуучу, кафедра жетекчиси жана декан, Жогорку Кеңеште эксперт, Тышкы иштер министрлигинин дипломатиялык академиясында проректор болуп иштеген. Учурда улуттук китепканынын директору. 2010-жылы дайындалган биринчи байкоочу кеңештин мүчөсү.</p>
                          <p>Байкоочулар кеңешине президент тарабынан сунушталган.</p>
                        </div>
                      </div>

                      <div class="col-md-6 ns-team">
                        <div class="ns-photo">
                          <img src="{{ asset('static/images/ns/sabyrbek_mukambetov.jpg') }}" alt=""/>
                        </div>
                        <div class="ns-info">
                          <span class="ns-name"><strong>Сабырбек Мукамбетов</strong></span>
                          <p class="ns-desc">Саясий серепчи. Экономист адистигие ээ. 1990-жылдары Кыргызстан демократиялык кыймылында жооптуу катчы, кийинки мезгилерди президенттин алдындагы Адам укуктары боюнча комиссиянын төрагасынын орун басары болуп иштеген.Үй куруучулардын демократиялык союзунун төрагасы, Бириккен Элдик кыймылдын улуттук кеңешинин мүчөсү болгон. 2007-2012-ж.ж. «Ачык саясат», «Алиби», «Учур», «Назар», «Айгай», «Аалам» гезиттеринде саясий баяндамачы. Учурда  «Азия ньюс» гезитинин башкы редактору.</p>
                          <p>Байкоочулар кеңешине президент тарабынан сунушталган.</p>
                        </div>
                      </div>

                      <div class="col-md-6 ns-team">
                        <div class="ns-photo">
                          <img src="{{ asset('static/images/ns/tamara_zhamanbaeva.jpg') }}" alt=""/>
                        </div>
                        <div class="ns-info">
                          <span class="ns-name"><strong>Тамара Жаманбаева</strong></span>
                          <p class="ns-desc">Алгач медицина  окуу жайын,  КМУнун журналистика факультетин бүткөн. Кыргыз телекөрсөтүүсүнүн  тарыхындагы алгачкы, ошондой эле таланттуу алып баруучуларынын бири. Эмгек жолун 1959-ж. Кыргыз мамлекеттик телерадиокомитетине диктор-стажёрлуктан баштап, вице-президенттик кызматтарга чейин иштеген. Кийин "Замана" чыгармачыл-өндүрүштүк бирикмесинин директору, продюсери болду.</p>
                          <p>Байкоочулар кеңешине президент тарабынан сунушталган.</p>
                        </div>
                      </div>

                      <div class="col-md-6 ns-team">
                        <div class="ns-photo">
                          <img src="{{ asset('static/images/ns/tynchtykbek_chorotegin.jpg') }}" alt=""/>
                        </div>
                        <div class="ns-info">
                          <span class="ns-name"><strong>Тынчтыкбек Чоротегин</strong></span>
                          <p class="ns-desc">Тарыхчы, журналист, публицист. Тарых илимдеринин доктору, профессор. Бир нече илимий эмгектердин автору. Лондондо “Би-Би-Си” радиосунун Кыргыз кызматынын продюсери, андан кийин 11 жылга жакын убакыт  «Азаттык» үналгысынын Прагадагы баш кеңсесинде иштеген. Учурда Кыргыз Тарых Коомунун президенти.</p>
                          <p>Байкоочулар кеңешине президент тарабынан сунушталган.</p>
                        </div>
                      </div>

                      <div class="col-md-6 ns-team">
                        <div class="ns-photo">
                          <img src="{{ asset('static/images/ns/vyacheslav_goncharov.jpg') }}" alt=""/>
                        </div>
                        <div class="ns-info">
                          <span class="ns-name"><strong>Вячеслав Гончаров</strong></span>
                          <p class="ns-desc">«Доор медиа» коомдук фондунун директору, медиа-адис, окутуучу. БГУнун филология факультетин бүтүргөн.1999-жылдан бери журналистикада. ВОССТ, «Мир» телекомпанияларында, андан кийин «Интерньюс-Кыргызстан» эл аралык медиа уюмунда иштеп, «Зло перо» теле көрсөтүүсүн алып барып, кийинчерээк атайын репортаждар программасына продюсерлик кылат. Эл аралык уюмдар менен биргеликте долбоор иштелип чыгылган бир нече социалдык роликтердин жана документалдык фильмдердин автору.</p>
                          <p>Байкоочулар кеңешине президент тарабынан сунушталган.</p>
                        </div>
                      </div>

                      <div class="col-md-6 ns-team">
                        <div class="ns-photo">
                          <img src="{{ asset('static/images/ns/farhat_bekmambetov.jpg') }}" alt=""/>
                        </div>
                        <div class="ns-info">
                          <span class="ns-name"><strong>Фархад Бекманбетов</strong></span>
                          <p class="ns-desc">Юридика жана экономика жаатында билим алган. Улуттук Илимдер академиясында философия жана саясий-укуктук багытка кызыгып, изилдеп жүрөт.    «Айтыш» коомдук фондусунун директору жана тең төрагасы, «Айтыш-фильм» киностудиясынын продюсери, Кыргыз Республикасынын кинематографисттер союзунун мүчөсү. Байкоочулар кеңешине жарандык  коом тарабынан сунушталган.</p>
                          <p>Байкоочулар кеңешине президент тарабынан сунушталган.</p>
                        </div>
                      </div>

                      <div class="col-md-6 ns-team">
                        <div class="ns-photo">
                          <img src="{{ asset('static/images/ns/irina_abdyrahmanova.jpg') }}" alt=""/>
                        </div>
                        <div class="ns-info">
                          <span class="ns-name"><strong>Ирина Абдырахманова</strong></span>
                          <p class="ns-desc">Журналист -  Кыргыз Мамлекеттик педагогика институтунун филология факультетин бүтүргөн. Ал журналистик эмгек жолун алгач, 1993 – жылы Республикалык радиотеле борборунда магниттик жазуу боюнча оператор болуп баштаган.
                            Иш тажрыйбасы:
                            Ирина Абдырахманова “Кыргызстандагы демократиялык басмаларды колдоо” (Томпсон Фонду) борборунун окуу курсун, “Маалыматтык телеберүү журналистикасы” (KTV/DaniCom биргелешкен долбоор) курсун, “ТВ-журналистикасындагы жаңылыктар” (Телеберүү жана радио уктуруу Азия институту) тренингинде угуучу катары катышкан.
                            Ирина Абдырахманова өз өмүрүндө биртоп кызматтарды аркалаган. Алсак, Республикалык маалыматтык радиодо кабарчы, кийин ошол эле редакцияда серепчи, Кийин КТРКнын “Ала-Тоо” жана “Жетиген” программаларында алып баруучу жана коментатор, КООРТ каналынын жаңылыктар кызматында редактор болуп эмгектенген.
                            Учурда “PRconsult” коомдук бирикмесинде координатор.</p>
                          <p>Байкоочулар кеңешине президент тарабынан сунушталган.</p>
                        </div>
                      </div>

                      <div class="col-md-6 ns-team">
                        <div class="ns-photo">
                          <img src="{{ asset('static/images/ns/jenishgul_ozbekova.jpg') }}" alt=""/>
                        </div>
                        <div class="ns-info">
                          <span class="ns-name"><strong>Жеңишгүл Өзбекова</strong></span>
                          <p class="ns-desc">Кыргыз Республикасына эмгек сиңирген ишмери, "Кыргыз жаштар" сыйлыгынын лауреаты жана Кыргыз Республикасынын ардак грамотасынын ээси. КРнын жазуучулар кеңешинин, театралдык ишмердүүлүк боюнча кеңештин, театр, телеберүү жана киноматографтар кеңешинин мүчөсү жана коомдук ишмер. Учурда коомдук фондунун алдындагы "Кыргызстандагы кол өнөрчүлүктү колдоо Борбордук Азия ассоциациясынын ресурстук борборунда" арт менеджер кызматында иштейт. Кыргыз Улуттук университетинин филология факультетин бүтүргөн.</p>
                          <p>Байкоочулар кеңешине президент тарабынан сунушталган.</p>
                        </div>
                      </div>


                      <div class="col-md-6 ns-team">
                        <div class="ns-photo">
                          <img src="{{ asset('static/images/ns/alhojoev_timur.jpg') }}" alt=""/>
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