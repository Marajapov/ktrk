@extends('Front::layouts.default')
@section('title', "Генеральный директор КТРК")

@section('styles')
  <link rel="stylesheet" type="text/css" href="{{ asset('static/css/styles.css') }}">
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
              <h3 class="panel-title"><span>Генеральный директор КТРК: Карыпбеков Илим Майрамбекович</span></h3>
            </div>
            <div class="panel-body">
              <div class="persons">
                <div class="row">
                  <div class="col-md-4">
                    <img src="{{ asset('images/chief.jpg') }}" class="img-circle">
                  </div>
                  <div class="col-md-8 borders">
                    <table class="table table-hover borderless">
                      <br/><br/>
                      <tbody>
                      <tr>
                        <th scope="row">Аты жөнү:</th>
                        <td>Карыпбеков Илим Майрамбекович</td>
                      </tr>

                      <tr>
                        <th scope="row">Facebook баракчасы:</th>
                        <td class="textunder"><i class="fa fa-facebook-official"></i><a href="https://www.facebook.com/ilim.karypbekov">facebook.com/ilim.karypbekov</a></td>
                      </tr>
                      <tr>
                        <th scope="row">Twitter баракчасы:</th>
                        <td class="textunder"><i class="fa fa-twitter"></i><a href="https://twitter.com/ilimkm">twitter.com/ilimkm</a></td>
                      </tr>
                      </tbody>
                    </table>

                  </div>
                </div>
                <br/>
                <div class="row">
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


