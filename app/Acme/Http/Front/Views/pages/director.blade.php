@extends('Front::layouts.default')
@section('title', trans('site.DirectorPage')." | КТРК")

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/custombox.css') }}"/>
  {{--<link rel="stylesheet" type="text/css" href="{{ asset('static/css/styles.css') }}">--}}
  <link rel="stylesheet" type="text/css" href="{{ asset('css/articles.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/pages.css') }}">
@stop

@section('content')
  <div class="container main-wrapper directorpages">

    <div class="row">
      <section class="content clearfix">

        <div id="main-content" class="top-left-block col-md-8">

          <div class="panel panel-default panel-page-withsidebar panel-articles">
            <div class="panel-heading">
              <h3 class="panel-title"><span>{{ trans('site.DirectorPage') }}: Карыпбеков Илим Майрамбекович</span></h3>
            </div>
            <div class="panel-body">
              <div class="persons">
                <div class="row">
                  <div class="media media-director">
                    <div class="media-left media-middle text-center">
                      <img src="{{ asset('images/chief.jpg') }}" class="img-circle">

                      <button class="btn btn-default" id="button" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Толук маалымат</button>
                    </div>
                    <div class="media-body media-middle">
                      <ul class="list-group">
                        <li class="list-group-item">
                          Карыпбеков Илим Майрамбекович
                        </li>
                        <li class="list-group-item">
                          <span class="list-extra">Facebook</span>
                          <span class="list-info"><a href="https://www.facebook.com/ilim.karypbekov">facebook.com/ilim.karypbekov</a></span>
                        </li>
                        <li class="list-group-item">
                          <span class="list-extra">Twitter</span>
                          <span class="list-info"><a href="https://twitter.com/ilimkm">twitter.com/ilimkm</a></span>
                        </li>
                        <li class="list-group-item">
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="collapse" id="collapseExample">

                    <ul class="list-group first-level">
                      <li class="list-group-item">
                        Жеке Маалымат
                        <ul class="list-group second-level">
                          <li class="list-group-item">
                            1979-жылы 13-августта туулган.
                          </li>
                        </ul>
                      </li>
                      <li class="list-group-item">
                        Билими
                        <ul class="list-group second-level">
                          <li class="list-group-item">
                            <span class="list-extra">2001- ж.</span>
                            <span class="list-info">Кыргыз мамлекеттик улуттук университетинин укук факультетин артыкчылык менен бүтүргөн</span>
                          </li>
                          <li class="list-group-item">
                            <span class="list-extra">2007 -ж.</span>
                            <span class="list-info">Варшавадагы (Польша) адам укуктары боюнча жогорку эл аралык мектепти аяктаган</span>
                          </li>
                        </ul>
                      </li>
                      <li class="list-group-item">
                        Эмгек жолу
                        <ul class="list-group second-level">
                          <li class="list-group-item">
                            <span class="list-extra">1997-1999ж.</span>
                            <span class="list-info">«Ренессанс» студенттик илимий коомунун президенти, Бишкек</span>
                          </li>
                          <li class="list-group-item">
                            <span class="list-extra">Январь 1999-ж. - июнь 2000-ж. </span>
                            <span class="list-info">«BNS - Securities» ЖЧКнун юристи, Бишкек</span>
                          </li>
                          <li class="list-group-item">
                            <span class="list-extra">Июнь 2000-ж. - июнь 2001-ж.</span>
                            <span class="list-info">Сорос-Кыргызстан фондунун укуктук программалары боюнча кызматкери.</span>
                          </li>
                          <li class="list-group-item">
                            <span class="list-extra">Июнь 2001-ж. - октябрь 2001-ж. </span>
                            <span class="list-info">БУУнун өнүктүрүү программасы,Кочкор району. БУУнун улуттук ыктыярчысы</span>
                          </li>
                          <li class="list-group-item">
                            <span class="list-extra">Февраль 2002-ж. - январь 2003-ж.  </span>
                            <span class="list-info">«Сорос-Кыргызстан» фонду, Бишкек. «Коомдук башкаруу»,«Этникалык азчылык», «Коомдук саясатты иштеп чыгуу» программаларынын кызматкери.</span>
                          </li>
                          <li class="list-group-item">
                            <span class="list-extra">Январь 2003-ж. - 2004-ж.</span>
                            <span class="list-info">«LARC» укуктук долбоорунун юристи, Кара-Балта</span>
                          </li>
                          <li class="list-group-item">
                            <span class="list-extra">Июль 2003-ж.</span>
                            <span class="list-info">Адвокат болуп иштөөгө укук берүү  лицензиясы № 1051, Бишкек шаары</span>
                          </li>
                          <li class="list-group-item">
                            <span class="list-extra">Январь 2004-ж. - июнь 2004-ж.</span>
                            <span class="list-info">«ЛАРК» АК филиалынын директору, Түп району</span>
                          </li>
                          <li class="list-group-item">
                            <span class="list-extra">Июнь 2004–ж. - июнь 2006–ж.</span>
                            <span class="list-info">Медиаөкүл институту/ Интерньюс-Кыргызстан, ага юрист.</span>
                          </li>
                          <li class="list-group-item">
                            <span class="list-extra">Июнь 2006-ж. - учурда </span>
                            <span class="list-info">КР президентине караштуу башкаруу академиясы, окутуучу. (Жарандык жана эмгек укугу, бейөкмөт уюмдардын укуктук негиздери)</span>
                          </li>
                          <li class="list-group-item">
                            <span class="list-extra">Июнь 2006-ж. - февраль 2009-ж.</span>
                            <span class="list-info">«Медиа-өкүл институту» коомдук фондунун директору</span>
                          </li>
                          <li class="list-group-item">
                            <span class="list-extra">Июнь 2008-ж. - февраль 2009-ж.</span>
                            <span class="list-info">КР акыйкатчысынын медиа-өкүлү</span>
                          </li>
                          <li class="list-group-item">
                            <span class="list-extra">Февраль 2009-ж. - октябрь 2009-ж.  </span>
                            <span class="list-info">Кыргыз Республикасынын президентинин катчылыгынын референти</span>
                          </li>
                          <li class="list-group-item">
                            <span class="list-extra">Октябрь 2009-ж -апрель 2010-ж. </span>
                            <span class="list-info">КыргызРеспубликасынын президентинин катчылыгы, көмөк көрсөтүү кызматынын жетекчиси</span>
                          </li>
                          <li class="list-group-item">
                            <span class="list-extra">Февраль 2011-ж.-июль 2011-ж. </span>
                            <span class="list-info">«Альфа Телеком» (соода маркасы «MegaCom») Жабык акционердик коому, «Альфа Телеком» Жабык акционердик коомунун укук маселелери боюнча башкы директорунун орун басары</span>
                          </li>
                          <li class="list-group-item">
                            <span class="list-extra">Апрель 2010-ж. - учурда    </span>
                            <span class="list-info">«Кеңеш берүү жана укук институту» Коомдук фондунун директору</span>
                          </li>
                          <li class="list-group-item">
                            <span class="list-extra">Апрель 2010-ж. - учурда</span>
                            <span class="list-info">«Ин.Консалт»Кеңеш берүү компаниясынын директору</span>
                          </li>
                          <li class="list-group-item">
                            <span class="list-extra">Апрель 2010-2013-ж.</span>
                            <span class="list-info">Америка Борбор Азия университети, окутуучу (адвокатура,  укук клиникасы, ишкерлер укугу)</span>
                          </li>
                          <li class="list-group-item">
                            <span class="list-extra">Июль 2011-ж. - февраль 2012-ж.</span>
                            <span class="list-info">Кыргыз Республикасынын мамлекеттик мүлк министрлиги, «Альфа Телеком» ЖАК сырттан башкаруучу</span>
                          </li>
                          <li class="list-group-item">
                            <span class="list-extra">Октябрь 2011-ж. -учурда</span>
                            <span class="list-info">Кыргыз мамлекеттик юридикалык академиясы, ага окутуучу  (Экономикалык сот, Инвестициялык укук)</span>
                          </li>
                          <li class="list-group-item">
                            <span class="list-extra">Апрель 2013-ж. - февраль 2015-ж.</span>
                            <span class="list-info">КТРКнын башкы директордун милдетин аткаруучу</span>
                          </li>
                          <li class="list-group-item">
                            <span class="list-extra">Февраль 2015-ж.</span>
                            <span class="list-info">КТРКнын башкы директордун милдетин аткаруучу</span>
                          </li>
                          <li class="list-group-item">
                            <span class="list-extra">Март 2015-ж. - учурда</span>
                            <span class="list-info">КТРК башкы директору</span>
                          </li>
                        </ul>
                      </li>
                      <li class="list-group-item">
                        Кошумча маалымат
                        <ul class="list-group second-level">
                          <li class="list-group-item">
                            «K-News», www.knews.kg маалымат агенттигинин негиздөөчүсү
                          </li>
                          <li class="list-group-item">
                            «Svoboda», www.svoboda.kg укук коргоо сайтынын негиздөөчүсү
                          </li>
                          <li class="list-group-item">
                            «Институт Медиа Полиси» коомдук фондунун уюштуруучусу
                          </li>
                          <li class="list-group-item">
                            «Институт Консалтинга и Права» коомдук фондунун уюштуруучусу
                          </li>
                          <li class="list-group-item">
                            «Де-Факто»  гезитинин уюштуруучусу
                          </li>
                        </ul>
                      </li>
                      <li class="list-group-item">
                        Коомдук иштери
                        <ul class="list-group second-level">
                          <li class="list-group-item">
                            Бишкек шаары жана Чүй облусунун адвокаттар  коллегиясынын мүчөсү
                          </li>
                          <li class="list-group-item">
                            Бишкек пресс-клубунун мүчөсү
                          </li>
                          <li class="list-group-item">
                            Маалымдоо каражаттарына келген арыздарды кароочу комиссия мүчөсү
                          </li>
                          <li class="list-group-item">
                            Сорос-Кыргызстан фондунун башкармалыгынын мүчөсү
                          </li>
                          <li class="list-group-item">
                            КТРК көркөм кеңешинин мүчөсү
                          </li>
                          <li class="list-group-item">
                            КР маданият жана маалымат министрлигинин алдындагы “Телекорсөтүү жана радиоуктуруулар жөнүндө” мыйзамдаргаөзгөртүүлөр жана оңдоолорду иштеп чыгуу боюнча жумушчу топтун мүчөсү
                          </li>
                          <li class="list-group-item">
                            КТРКны реформалоо боюнча жумушчу топтун төрагасы
                          </li>
                          <li class="list-group-item">
                            Адам укуктары жана эл аралык укуктар боюнча эксперт
                          </li>
                          <li class="list-group-item">
                            КР президент  институтун реформалоо боюнча жумушчу топтун мүчөсү
                          </li>
                          <li class="list-group-item">
                            Санариптик берүүгө өтүү боюнча мамлекеттик программаны иштеп чыгуу жумушчу тобунун төрагасы
                          </li>
                          <li class="list-group-item">
                            КР өкмөтүн реформалоо боюнча жумушчу топтун мүчөсү
                          </li>
                          <li class="list-group-item">
                            КР жаштар саясатын өнүктүрүү стратегиясын иштеп чыгуу боюнча жумушчу топтун төрагасы
                          </li>
                          <li class="list-group-item">
                            КР Коомдук телерадиоберүү корпорациясынын Байкоочу кеңешинин төрагасы
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div>

                  <div class="panel-heading">
                    <h3 class="panel-title"><span>Жаңылыктар</span></h3>
                  </div>
                  <div class="panel-body">
                    <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object thumb" src="http://sputnik.kg/images/102017/14/1020171449.jpg" alt="image">
                        </a>
                      </div>
                      <div class="media-body">
                        <div class="extra">
                          <span class="e-datetime">18 Нояб , 12:22</span>
                          <span class="e-views"><i class="fa fa-eye"></i>17</span>
                        </div>
                        <a class="media-heading" href="http://1000.ktrk.kg/post/1">КТРК: из-за работы я стал изгоем для родственников</a>

                        <h5 class="media-desc">
                          <p>Кабинет, как у бизнесмена средней руки. Нет ни мебели красного дерева, как в вотчинах других чиновников высокого ранга, ни канцелярского набора из бирюзы. Из роскоши — 6 плазменных телевизоров на стене. Под столом склад жестянок с безалкогольным энергетиком.
                          </p></h5>
                      </div>
                    </div>
                    <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object thumb" src="http://ktrk.kg/sites/default/files/styles/juicebox_medium/public/gallery/album/fotos/_mg_9802.jpg?itok=YROMXAeD" alt="image">
                        </a>
                      </div>
                      <div class="media-body">
                        <div class="extra">
                          <span class="e-datetime">18 Нояб , 12:22</span>
                          <span class="e-views"><i class="fa fa-eye"></i>17</span>
                        </div>
                        <a class="media-heading" href="http://1000.ktrk.kg/post/1">КТРКнын жаңыланган заманбап кеңсеси</a>

                        <h5 class="media-desc">
                          <p>Бүгүн, 6-ноябрда Коомдук телерадиоберүү корпорациясында жаңыланган заманбап үлгүдөгү иш кабинеттеринин ачылышы болду.
                          </p></h5>
                      </div>
                    </div>
                    <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object thumb" src="http://1000.ktrk.kg/img/thumbnail/11447849392.png" alt="image">
                        </a>
                      </div>
                      <div class="media-body">
                        <div class="extra">
                          <span class="e-datetime">18 Нояб , 12:22</span>
                          <span class="e-views"><i class="fa fa-eye"></i>17</span>
                        </div>
                        <a class="media-heading" href="http://1000.ktrk.kg/post/1">КМЮА: ректор шайланды</a>

                        <h5 class="media-desc">
                          <p>Кыргызстандын жогорку окуу жайларында ректорду шайлоо өтүп жатат. Бүгүн кыргыз мамлекеттик юридикалык академиясы өзүнүн жетекчисин шайлады. Ага беш талапкер катышып, ар бири өзүнүн иш пландары менен тааныштырды.
                          </p></h5>
                      </div>
                    </div>
                    <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object thumb" src="http://sputnik.kg/images/102017/14/1020171449.jpg" alt="image">
                        </a>
                      </div>
                      <div class="media-body">
                        <div class="extra">
                          <span class="e-datetime">18 Нояб , 12:22</span>
                          <span class="e-views"><i class="fa fa-eye"></i>17</span>
                        </div>
                        <a class="media-heading" href="http://1000.ktrk.kg/post/1">КТРК: из-за работы я стал изгоем для родственников</a>

                        <h5 class="media-desc">
                          <p>Кабинет, как у бизнесмена средней руки. Нет ни мебели красного дерева, как в вотчинах других чиновников высокого ранга, ни канцелярского набора из бирюзы. Из роскоши — 6 плазменных телевизоров на стене. Под столом склад жестянок с безалкогольным энергетиком.
                          </p></h5>
                      </div>
                    </div>
                    <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object thumb" src="http://ktrk.kg/sites/default/files/styles/juicebox_medium/public/gallery/album/fotos/_mg_9802.jpg?itok=YROMXAeD" alt="image">
                        </a>
                      </div>
                      <div class="media-body">
                        <div class="extra">
                          <span class="e-datetime">18 Нояб , 12:22</span>
                          <span class="e-views"><i class="fa fa-eye"></i>17</span>
                        </div>
                        <a class="media-heading" href="http://1000.ktrk.kg/post/1">КТРКнын жаңыланган заманбап кеңсеси</a>

                        <h5 class="media-desc">
                          <p>Бүгүн, 6-ноябрда Коомдук телерадиоберүү корпорациясында жаңыланган заманбап үлгүдөгү иш кабинеттеринин ачылышы болду.
                          </p></h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="right-sidebar" class="top-right-block col-md-4">

          <div class="panel panel-default panel-page-sidebar">

            <div class="panel-heading">
              <h3 class="panel-title"><span>Твиттер</span></h3>
            </div>

            <div class="panel-body">
              <a class="twitter-timeline" href="https://twitter.com/ilimkm" data-widget-id="667225139168337920">Твиты от @ilimkm</a>
              <script>!function (d, s, id) {
                  var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                  if (!d.getElementById(id)) {
                    js = d.createElement(s);
                    js.id = id;
                    js.src = p + "://platform.twitter.com/widgets.js";
                    fjs.parentNode.insertBefore(js, fjs);
                  }
                }(document, "script", "twitter-wjs");
              </script>
            </div>

            <div class="panel-heading">
              <h3 class="panel-title"><span>Facebook</span></h3>
            </div>

            <div class="panel-body">
              <div class="fb-post" data-href="https://www.facebook.com/ilim.karypbekov/posts/10153204500493016?pnref=story" data-width="300">

              </div>
            </div>

          </div>
        </div>
      </section>
    </div>
  </div>
@endsection


@section('footerScript')

  <div id="fb-root"></div>
  <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.5&appId=977320525631518";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

  <script src="{{ asset('js/custombox.js') }}"></script>
  <script>

    var finished_rendering = function() {
      var height = $('#right-sidebar').height()+37;
      $('#main-content .panel-articles').css('min-height',height);
    }

    $(window).load(function() {
      FB.Event.subscribe('xfbml.render', finished_rendering);
    });
  </script>

@endsection


