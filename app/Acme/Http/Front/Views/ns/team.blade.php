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
                            <img src="{{ asset('static/images/ns/ns_1.jpg') }}" alt=""/>
                          </div>
                          <div class="ns-info">
                          <span class="ns-name">
                            <strong>Абды Сатаров</strong> /
                            @if($lc == 'kg')
                              КТРКнын Байкоочу кеңешинин төрагасы
                            @else
                              Председатель НС КТРК
                            @endif
                          </span>
                            @if($lc == 'kg')
                              <p class="ns-desc">
                                Кесиби - журналист. 1973-жылы тележурналисттик кесипке келип, ошондон бери  Кыргызстандагы дээрлик бардык телекомпанияларда иштеген. Мамлекеттик телерадиокомпаниядан тарта «Ош-3000», КООРТ, НТС, андан сырткары «ZAMAN Кыргызстан» эл аралык гезитинде, "Интерньюс-Кыргызстан" эл аралык медиа уюмунда эмгектенип келди. Учурда Кыргыз-Түрк «Манас» Университетинде журналистика боюнча сабак берүү менен бирге Коммуникация факультетинде  декандын орун басарынын кызматын аткарат.
                                <span>
                                  Байкоочулар кеңешине президент тарабынан сунушталган.
                                </span>
                              </p>
                            @else
                              <p class="ns-desc">
                                Журналист. Бывший заместитель гендиректора НТРК КР. В тележурналистику пришел в 1973 году, с тех пор проработал во всех            телекомпаниях страны: НТРК, «Ош-3000», КООРТ, НТС, в международной газете «Заман Кыргызстан» и в медиа-организации «Интерньюс-Кыргызстан». В настоящее время преподаватель на кафедре журналистики Кыргызско-турецкого университета «Манас», заместитель декана факультета коммуникации.
                                <span>
                                  В наблюдательный совет КТРК был предложен от Президента.
                                </span>
                              </p>
                            @endif
                          </div>
                        </div>

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
                      </div>

                      <div class="clearfix">
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

                        <div class="col-md-6 ns-team">
                          <div class="ns-photo">
                            <img src="{{ asset('static/images/ns/ns_6.jpg') }}" alt=""/>
                          </div>
                          <div class="ns-info">
                            <span class="ns-name"><strong>Тамара Жаманбаева</strong></span>
                            @if($lc == 'kg')
                              <p class="ns-desc">
                                Алгач медицина  окуужайын,  КМУнун журналистика факультетин бүткөн. Кыргызтелекөрсөтүүсүнүн  тарыхындагы алгачкы, ошондой эле таланттуу алып баруучуларынын бири. Эмгек жолун 1959-ж. Кыргыз мамлекеттик телерадиокомитетине диктор-стажёрлуктан баштап, вице-президенттик кызматтарга чейин иштеген. Кийин "Замана" чыгармачыл-өндүрүштүк бирикмесинин директору, продюсери болду.
                                <span>
                                  Байкоочулар кеңешине Жогорку Кеңеш тарабынан сунушталган.
                                </span>
                              </p>
                            @else
                              <p class="ns-desc">
                                В 1959 году закончила медицинское училище, а в 1968 - отделение журналистики филологического факультета Кыргызского Национального университета.  Тамара Жаманбаева - одна из первых ведущих в истории телерадиовещания. Работала в Кыргызском государственном телерадиокомитете, занимала должности от стажера до вице-президента. В последнее время работала продюсером творческо-производственного объединения «Замана». Народная артистка КР, заслуженный деятель культуры, отличник телевидения СССР и Кыргызской Республики. Также является профессором кафедры журналистики Восточного университета.
                                <span>В наблюдательный совет КТРК была предложена от Жогорку Кенеша.</span>
                              </p>
                            @endif
                          </div>
                        </div>
                      </div>

                      <div class="clearfix">
                        <div class="col-md-6 ns-team">
                          <div class="ns-photo">
                            <img src="{{ asset('static/images/ns/ns_12.jpg') }}" alt=""/>
                          </div>
                          <div class="ns-info">
                            <span class="ns-name"><strong>Жылдыз Бакашева</strong></span>
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
                            <img src="{{ asset('static/images/ns/ns_11.jpg') }}" alt=""/>
                          </div>
                          <div class="ns-info">
                            <span class="ns-name"><strong>Сабырбек Мукамбетов</strong></span>
                            @if($lc == 'kg')
                              <p class="ns-desc">
                                Саясий серепчи. Экономист адистигине ээ. 1990-жылдары Кыргызстан демократиялык кыймылында жооптуу катчы, кийинки мезгилерди президенттин алдындагы Адам укуктары боюнча комиссиянын төрагасынын орун басары болуп иштеген.Үй куруучулардын демократиялык союзунун төрагасы, Бириккен Элдик кыймылдын улуттук кеңешинин мүчөсү болгон. 2007-2012-ж.ж. «Ачыксаясат», «Алиби», «Учур», «Назар», «Айгай», «Аалам» гезиттеринде саясий баяндамачы. Учурда «Азия ньюс» гезитинин башкы редактору.
                                <span>Байкоочулар кеңешине Жогорку Кеңеш тарабынан сунушталган.</span>
                              </p>
                            @else
                              <p class="ns-desc">
                                Политический эксперт. Экономист. В 1990-х годах ответственный секретарь демократического движения Кыргызстана (ДДК), позже зампредседателя комиссии по правам человека при президенте. Был председателем демократического союза строителей, членом национального  совета объединенного народного движения. В 2007-2009 годах работал политическим обозревателем в газетах «Ачыксаясат», «Алиби», «Учур», «Назар», «Айгай», «Аалам». В настоящее время главный редактор газеты «Азия Ньюс».
                                <span>В наблюдательный совет КТРК был предложен от Жогорку Кенеша.</span>
                              </p>
                            @endif
                          </div>
                        </div>
                      </div>

                      <div class="clearfix">
                        <div class="col-md-6 ns-team">
                          <div class="ns-photo">
                            <img src="{{ asset('static/images/ns/ns_3.jpg') }}" alt=""/>
                          </div>
                          <div class="ns-info">
                            <span class="ns-name"><strong>Тынчтыкбек Чоротегин</strong></span>
                            @if($lc == 'kg')
                              <p class="ns-desc">
                                Тарыхчы, журналист, публицист. Тарых илимдеринин доктору, профессор. Бир нече илимий эмгектердин автору. Лондондо “Би-Би-Си” радиосунун Кыргыз кызматынын продюсери, андан кийин 11 жылга жакын убакыт  «Азаттык» үналгысынын Прагадагы баш кеңсесинде иштеген. Учурда Кыргыз Тарых Коомунун президенти.
                                <span>
                                  Байкоочулар кеңешине Жогорку Кеңеш тарабынан сунушталган.
                                </span>
                              </p>
                              <p></p>
                            @else
                              <p class="ns-desc">
                                Историк, журналист, публицист. Доктор исторических наук, профессор. Автор нескольких учебных книг и научных работ. Был продюсером кыргызской службы радио «Би-Би-Си» в Лондоне, затем около 11 лет трудился на радио «Азаттык» в Праге, работав директором радио "Азаттык". В настоящее время президент общества истории.
                                <span>
                                  В наблюдательный совет КТРК был предложен от Жогорку Кенеша.
                                </span>
                              </p>
                            @endif
                          </div>
                        </div>

                        <div class="col-md-6 ns-team">
                          <div class="ns-photo">
                            <img src="{{ asset('static/images/ns/ns_15.jpg') }}" alt=""/>
                          </div>
                          <div class="ns-info">
                            <span class="ns-name"><strong>Вячеслав Гончаров</strong></span>
                            @if($lc == 'kg')
                              <p class="ns-desc">
                                «Доор медиа» коомдук фондунун директору, медиа-адис, окутуучу. БГУнун филология факультетин бүтүргөн. 1999-жылдан бери журналистикада. ВОССТ, «Мир» телекомпанияларында, андан кийин «Интерньюс-Кыргызстан» эл аралык медиа уюмунда иштеп, «Злое перо» телекөрсөтүүсүн алып барып, кийинчерээк атайын репортаждар программасына продюсерлик кылат. Эл аралык уюмдар менен биргеликте долбоор иштелип чыгылган бир нече социалдык роликтердин жана документалдык фильмдердин автору.
                                <span>Байкоочулар кеңешине жарандык коом тарабынан сунушталган.</span>
                              </p>
                            @else
                              <p class="ns-desc">
                                Директор фонда «Доор медиа», медиа-эксперт, преподаватель. Закончил факультет филологии БГУ. В журналистике с 1999 года. Работал в телекомпаниях ВОССТ, «Мир», затем в международной организации «Интерньюс Кыргызстан», вел передачу «Злое перо», позже был продюсером репортажных передач. Автор нескольких социальных роликов и документальных фильмов, подготовленных в рамках проектов международных организаций.
                                <span>В наблюдательный совет КТРК был предложен от гражданского общества.</span>
                              </p>
                            @endif
                          </div>
                        </div>
                      </div>

                      <div class="clearfix">
                        <div class="col-md-6 ns-team">
                            <div class="ns-photo">
                              <img src="{{ asset('static/images/ns/ns_14.jpg') }}" alt=""/>
                            </div>
                            <div class="ns-info">
                              <span class="ns-name"><strong>Ирина Абдырахманова</strong></span>
                              @if($lc == 'kg')
                                <p class="ns-desc">
                                  Журналист. Кыргыз Мамлекеттик педагогика институтунун филология факультетин бүтүргөн. Ал журналистик эмгек жолун алгач, 1993-жылы Республикалык радиотелеборборунда магнитик жазуу боюнча оператор болуп баштаган.
                                  Иш тажрыйбасы:
                                  Ирина Абдырахманова “Кыргызстандагы демократиялык басмаларды колдоо” (Томпсон Фонду) борборунун окуу курсун, “Маалыматтык телеберүү журналистикасы” (KTV/DaniCom биргелешкен долбоор) курсун, “ТВ-журналистикасындагы жаңылыктар” (Телеберүү жана радиоуктуруу Азия институту) тренингинде угуучу катары катышкан.
                                  Ирина Абдырахманова өз өмүрүндө бир топ кызматтарды аркалаган. Алсак, Республикалык маалыматтык радиодо кабарчы, кийин ошол эле редакцияда серепчи, кийин КТРКнын “Ала-Тоо” жана “Жетиген” программаларында алып баруучу жана коментатор, КООРТ каналынын жаңылыктар кызматында редактор болуп эмгектенген.
                                  Учурда “PRconsult” коомдук бирикмесинде координатор.
                                  <span>Байкоочулар кеңешине президент тарабынан сунушталган.</span>
                                </p>
                              @else
                                <p class="ns-desc">
                                  Журналист. Закончила филологический факультет Кыргызского государственного педагогического института. Журналистскую деятельность начала в 1993 году оператором магнитной записи Республиканского радиотелецентра. Стажировки: учебный курс «Поддержка демократической прессы в Кыргызстане»(Фонд Томпсона)”, курс ”Телевизионная информационная журналистика”(совместный проект KTV/DaniCom); тренинг ” ТВ-журналистика новостей”( Азиатский институт телевидения и радиовещания). Работала корреспондентом, затем обозревателем редакции информации республиканского радио; комментатором, ведущей программ КТР -“ Ала-Тоо” и “ Жетиген”; выпускающим редактором новостной службы АОЗТ КООРТ. Сейчас является координатором проектов ОО” PRconsult”.
                                  <span>В Наблюдательный совет КТРК была предложена от Президента.</span>
                                </p>
                              @endif
                            </div>
                          </div>
                        <div class="col-md-6 ns-team">
                          <div class="ns-photo">
                            <img src="{{ asset('static/images/ns/ns_7.jpg') }}" alt=""/>
                          </div>
                          <div class="ns-info">
                            <span class="ns-name"><strong>Женишгуль Озубекова</strong></span>
                            @if($lc == 'kg')
                              <p class="ns-desc">
                                Кыргыз Республикасына эмгек сиңирген ишмери, "Кыргыз жаштар" сыйлыгынын лауреаты жана Кыргыз Республикасынын ардак грамотасынын ээси. КРнын жазуучулар кеңешинин, театралдык ишмердүүлүк боюнча кеңештин, театр, телеберүү жана киноматографтар кеңешинин мүчөсү жана коомдук ишмер. Учурда коомдук фондунун алдындагы "Кыргызстандагы кол өнөрчүлүктү колдоо Борбордук Азия ассоциациясынын ресурстук борборунда" арт менеджер кызматында иштейт. Кыргыз Улуттук университетинин филология факультетин бүтүргөн.
                                <span>Байкоочулар кеңешине Жогорку Кеңеш тарабынан сунушталган.</span>
                              </p>
                            @else
                              <p class="ns-desc">
                                Заслуженный деятель КР, лауреат премии "Кыргызжаштар", награждена почетной грамотой Кыргызской Республики. Член союза писателей КР, член союза театральной деятельности; член союза кинематографов, театра и телевидения, общественный деятель. В настоящее время является арт-менеджером при Общественном фонде "Ресурсный центр Центрально-азиатской ассоциации в поддержку ремесел в Кыргызстане". Окончила филологический факультет Кыргызского Национального университета.
                                <span>В наблюдательный совет КТРК была предложена от Жогорку Кенеша.</span>
                              </p>
                            @endif
                          </div>
                        </div>
                        
                      </div>

                      <div class="clearfix">
                        <div class="col-md-6 ns-team">
                            <div class="ns-photo">
                              <img src="{{ asset('static/images/ns/ns_8.jpg') }}" alt=""/>
                            </div>
                            <div class="ns-info">
                              <span class="ns-name"><strong>Алхожоев Тимур</strong></span>
                              @if($lc == 'kg')
                                <p class="ns-desc">
                                  Кесиби юрист. Ж. Баласагын атындагы Кыргыз улуттук университетинин юридикалык факультетинен билим алган. Азыркы учурда КР Өкмөтүнүн алдындагы Кыргыз мамлекеттик юридикалык академиясынын аспиранты. Телекоммуникация тармагында эмгектенип, массалык маалымат каражаттарына байланышкан маселелерге өзгөчө көңүл буруп келет.
                                  <span>Байкоочулар кеңешине жарандык коом тарабынан сунушталган.</span>
                                </p>
                              @else
                                <p class="ns-desc">
                                  Юрист. Выпускник юридического факультета Кыргызского Национального Университета имени Ж.Баласагына. Аспирант Кыргызской государственной юридической академии при Правительстве Кыргызской Республики. Специализируется в области телекоммуникаций и деятельности средств массовой информации.
                                  <span>В Наблюдательный совет был предложен от гражданского общества.</span>
                                </p>
                              @endif
                            </div>
                          </div>
                        <div class="col-md-6 ns-team">
                          <div class="ns-photo">
                            <img src="{{ asset('static/images/ns/ns_4.jpg') }}" alt=""/>
                          </div>
                          <div class="ns-info">
                            <span class="ns-name"><strong>Досалиева Бүбүкан Акматжановна</strong></span>
                            @if($lc == 'kg')
                              <p class="ns-desc">
                                Белгилүү журналист. Саясий илимдеринин кандидаты. TOPNEWS.KG маалымат-аналитикалык порталынын башкы редактору;.
                                Мамлекеттик кызматтын 3-класстагы мамлекеттик кеңешчиси. Азыркы учурда Улуттук Илимдер Академиясынын философия жана саясий-укуктук изилдөөлөр институтунун ага илимий кызматкери. Коомдук ишмердиги: Айтматовдун Эл аралык Коомдук Академиянын журналистика боюнча академиги (1994-жылдан бери).
                                <span>Байкоочулар кеңешине жарандык коом тарабынан сунушталган.</span>
                              </p>
                            @else
                              <p class="ns-desc">
                                Журналист. Кандидат политических наук. Главный редактор информационно-аналитического портала TOPNEWS.KG. Государственный советник государственной службы 3 класса. “Заслуженный деятель культуры Кыргызской Республики”. В настоящее время старший научный сотрудник Института философии и политико-правовых исследований НАН КР.
                                Академик по журналистике Международной Айтматовской Академии (1994 г).
                                <span>В Наблюдательный совет была предложена от гражданского общества.</span>
                              </p>
                            @endif
                          </div>
                        </div>                        
                      </div>

                      <div class="cleafix">
                      <div class="col-md-6 ns-team">
                          <div class="ns-photo">
                            <img src="{{ asset('static/images/ns/ns_9.jpg') }}" alt=""/>
                          </div>
                          <div class="ns-info">
                            <span class="ns-name"><strong>Назаркул Ишекеев</strong></span>
                            @if($lc == 'kg')
                              <p class="ns-desc">
                                Ж.Баласагын атындагы Кыргыз улуттук университетинин мамлекеттиктилбоюнча проректору, педагогика илимдеринин доктору, профессор. Окутуунун жана тарбиялоонун теориясы менен методикасы илими боюнча республикадагы көрүнүктүү илимпоздордун бири. Жогорку аттестациялык коммиссиянын президиумунун мүчөсү.
                                <span>Байкоочулар кеңешине президент тарабынан сунушталган.</span>
                              </p>
                            @else
                              <p class="ns-desc">
                                Проректор Кыргызского Национального Университета им.Ж.Баласаныга по государственному языку, доктор педагогических наук, профессор. Академик Международной общественной академии им. Ч. Айтматова, лауреат премий им. Ж. Баласагына, отличник народного просвещения Кыргызской Республики, ученый-профессор по науке о теории и методике преподавания и воспитания. Глава Национального ученого совета по государственному языку при Президенте Кыргызской Республики, Общества кыргызского языка, секции кыргызского языка и литературы в республиканском научно-методическом совете при Министерстве образования и науки, главный редактор республиканского научного журнала "Кыргызтилжанаадабияты".
                                <span>В Наблюдательный совет КТРК был предложен от Президента.</span>
                              </p>
                            @endif
                          </div>
                        </div>
                        <div class="col-md-6 ns-team">
                          <div class="ns-photo">
                            <img src="{{ asset('static/images/ns/ns_5.jpg') }}" alt=""/>
                          </div>
                          <div class="ns-info">
                            <span class="ns-name"><strong>Халилов Абдыганы </strong></span>
                            @if($lc == 'kg')
                              <p class="ns-desc">
                                Кесиби журналист. Кыргыз улуттук университетинин журналистика факультетинин доценти. А.А.Жданов атындагы Ленинград шаарындагы мамлекеттик университетинин бүтүрүүчүсү. Журналистика боюнча жаңы муундагы мамлекеттик стандартынын негиздөөчүлөрүнүн бири.
                              </p>
                            @else
                              <p class="ns-desc">
                                Журналист. Доцент факультета журналистики Кыргызского Национального Университета. Выпускник Ленинградского государственного университета имени А.А. Жданова. Один из разработчиков государственного образовательного стандарта нового поколения по специальности  “журналистика”.
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