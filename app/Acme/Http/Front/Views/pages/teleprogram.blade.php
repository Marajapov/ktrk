@extends('Front::layouts.default')
@section('title', 'Телепрограмма | КТРК')
@section('styles')
  {{--<link rel="stylesheet" type="text/css" href="{{ asset('/static/css/styles.css') }}">--}}
  <link rel="stylesheet" type="text/css" href="{{ asset('css/pages.css') }}">
@stop
@section('content')

  <div class="container main-wrapper">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default teleprogramm">
          <div class="panel-heading">
            <h3 class="panel-title">ТВ-программа</h3>
          </div>
          <div class="panel-body">

            <ul id="tabs" class="nav nav-tabs teletabs" data-tabs="tabs">
              <li class="active"><a href="#monday" data-toggle="tab">Понедельник</a></li>
              <li><a href="#tuesday" data-toggle="tab">Вторник</a></li>
              <li><a href="#wednesday" data-toggle="tab">Среда</a></li>
              <li><a href="#thursday" data-toggle="tab">Четверг</a></li>
              <li><a href="#friday" data-toggle="tab">Пятница</a></li>
              <li><a href="#saturday" data-toggle="tab">Суббота</a></li>
              <li><a href="#sunday" data-toggle="tab">Вокресенье</a></li>
            </ul>

            <div id="my-tab-content" class="tab-content">
              <div class="tab-pane active" id="monday">

                <table class="table">
                  <h4 class="tele-title">Коомдук каналдын 17-ноябрь шейшемби күндөгү көрсөтүүлөр программасы</h4>
                  <tbody>
                    <tr class="tele-row tele-passed">
                      <th class="tele-time">6:57</th>
                      <td class="tele-show">
                        <h4>Кыргыз Республикасынын гимни</h4>
                        {{--<h5 class="tele-extra"><i class="fa fa-play-circle-o"></i>Сериал</h5>--}}
                      </td>
                    </tr>
                    <tr class="tele-row tele-passed">
                      <th class="tele-time">6:57</th>
                      <td class="tele-show">
                        <h4>Кыргыз Республикасынын гимни</h4>
                        {{--<h5 class="tele-extra"><i class="fa fa-play-circle-o"></i>Сериал</h5>--}}
                      </td>
                    </tr>
                    <tr class="tele-row tele-passed">
                      <th class="tele-time">6:57</th>
                      <td class="tele-show">
                        <h4>Кыргыз Республикасынын гимни</h4>
                        {{--<h5 class="tele-extra"><i class="fa fa-play-circle-o"></i>Сериал</h5>--}}
                      </td>
                    </tr>
                    <tr class="tele-row tele-passed">
                      <th class="tele-time">6:57</th>
                      <td class="tele-show">
                        <h4>Кыргыз Республикасынын гимни</h4>
                        {{--<h5 class="tele-extra"><i class="fa fa-play-circle-o"></i>Сериал</h5>--}}
                      </td>
                    </tr>
                    <tr class="tele-row tele-live">
                      <th class="tele-time">7:00</th>
                      <td class="tele-show">
                        <span id="bcLive"><i class="fa fa-circle"></i>сейчас в эфире</span>
                        <h4>Новости <span></span></h4>
                      </td>
                    </tr>
                    <tr class="tele-row">
                      <th class="tele-time">7:10</th>
                      <td class="tele-show">
                        <h4>“Замана”</h4>
                      </td>
                    </tr>
                    <tr class="tele-row">
                      <th class="tele-time">7:10</th>
                      <td class="tele-show">
                        <h4>“Замана”</h4>
                      </td>
                    </tr>
                    <tr class="tele-row">
                      <th class="tele-time">7:10</th>
                      <td class="tele-show">
                        <h4>“Замана”</h4>
                      </td>
                    </tr>
                    <tr class="tele-row">
                      <th class="tele-time">7:10</th>
                      <td class="tele-show">
                        <h4>“Замана”</h4>
                      </td>
                    </tr>
                    <tr class="tele-row">
                      <th class="tele-time">7:10</th>
                      <td class="tele-show">
                        <h4>“Замана”</h4>
                      </td>
                    </tr>
                    <tr class="tele-row">
                      <th class="tele-time">7:10</th>
                      <td class="tele-show">
                        <h4>“Замана”</h4>
                      </td>
                    </tr>
                    <tr class="tele-row">
                      <th class="tele-time">7:10</th>
                      <td class="tele-show">
                        <h4>“Замана”</h4>
                      </td>
                    </tr>
                    <tr class="tele-row">
                      <th class="tele-time">7:10</th>
                      <td class="tele-show">
                        <h4>“Замана”</h4>
                      </td>
                    </tr>
                    <tr class="tele-row">
                      <th class="tele-time">7:10</th>
                      <td class="tele-show">
                        <h4>“Замана”</h4>
                      </td>
                    </tr>

                  </tbody>
                </table>

              </div>
              <div class="tab-pane" id="tuesday">
                <h1>Вторник</h1>
                <p>Вторник</p>
              </div>
              <div class="tab-pane" id="wednesday">
                <h1>Среда</h1>
                <p>Среда</p>
              </div>
              <div class="tab-pane" id="thursday">
                <h1>Четверг</h1>
                <p>Четверг</p>
              </div>
              <div class="tab-pane" id="friday">
                <h1>Пятница</h1>
                <p>Пятница</p>
              </div>
              <div class="tab-pane" id="saturday">
                <h1>Суббота</h1>
                <p>Суббота</p>
              </div>
              <div class="tab-pane" id="sunday">
                <h1>Воскресенье</h1>
                <p>Суббота</p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

@stop

@section('footerScript')

  <script type="text/javascript">
    jQuery(document).ready(function ($) {
      $('#tabs').tab();

      blink($('#bcLive'), -1, 500);

      function blink(elem, times, speed) {
        if (times > 0 || times < 0) {
          if ($(elem).hasClass("blink"))
            $(elem).removeClass("blink");
          else
            $(elem).addClass("blink");
        }
        clearTimeout(function () {
          blink(elem, times, speed);
        });
        if (times > 0 || times < 0) {
          setTimeout(function () {
            blink(elem, times, speed);
          }, speed);
          times -= .5;
        }
      }
    });
  </script>

@endsection