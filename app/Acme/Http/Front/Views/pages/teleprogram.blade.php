@extends('Front::layouts.default')
@section('title', 'Телепрограмма | КТРК')
@section('styles')
  {{--<link rel="stylesheet" type="text/css" href="{{ asset('/static/css/styles.css') }}">--}}
  <link rel="stylesheet" type="text/css" href="{{ asset('css/pages.css') }}">
@stop
@section('content')

  <div class="container main-wrapper">
    <div class="row">
      <div class="panel panel-default teleprogramm">
        <div class="panel-heading">
          <h3 class="panel-title">ТВ-программа</h3>
        </div>

        <div class="panel-body">

        </div>

        <div class="panel-body hidden">

          <ul id="tabs" class="nav nav-tabs teletabs" data-tabs="tabs">

            @foreach($programs as $key => $program)
              {{--{{ dd($program['date']) }}--}}
              @foreach($schedules as $schedule)
                @if($program['date'] == $schedule->date)
                  <li class="@if($currentDate == $program['date']) active @endif">
                    <a href="#{{ $program['date'] }}" data-toggle="tab">
                      @if($lc == 'kg')
                        {{ $schedule->getDay().' '.$schedule->getMonth().' - '.$schedule->getWeekKg() }}
                      @elseif($lc == 'ru')
                        {{ $schedule->getDay().' '.$schedule->getMonth().' - '.$schedule->getWeekRu() }}
                      @endif
                    </a>
                  </li>
                @endif
              @endforeach
            @endforeach

          </ul>

          <div id="my-tab-content" class="tab-content">

            @foreach($programs as $key => $program)

              @foreach($schedules as $schedule)

                @if($program['date'] == $schedule->date)

                  <div class="tab-pane @if($schedule->date == $currentDate) active @endif" id="{{ $schedule->date }}">

                    <table class="table program">
                      <tbody>
                      @for($i=0; $i<count($program)-1; $i++)

                        @if((strtotime($schedule->date) < strtotime($currentDate)))
                          <tr class="tele-row tele-passed">

                            @elseif(($schedule->date == $currentDate) && ($i < count($program)-2))

                              @if((strtotime($program[$i]->time) <= strtotime($currentTime)) && (strtotime($currentTime) < strtotime($program[$i+1]->time)))
                          <tr class="tele-row tele-live">
                            @elseif((strtotime($program[$i]->time) < strtotime($currentTime)) && ($program[$i]->time != '00:00'))
                          <tr class="tele-row tele-passed">
                            @endif

                            @elseif(($schedule->date == $currentDate) && ($i == count($program)-1))

                              @if((strtotime($program[$i]->time) <= strtotime($currentTime)))
                          <tr class="tele-row tele-live">
                            @elseif((strtotime($program[$i]->time) < strtotime($currentTime)) && ($program[$i]->time != '00:00'))
                          <tr class="tele-row tele-passed">
                        @endif

                        @else
                          <tr class="tele-row ">
                            @endif
                            <th class="tele-time">
                              {{ $program[$i]->time }}
                            </th>
                            <td class="tele-show">

                              @if(($schedule->date == $currentDate) && ($i < count($program)-2))

                                @if((strtotime($program[$i]->time) <= strtotime($currentTime)) && (strtotime($currentTime) < strtotime($program[$i+1]->time)))

                                  @if($lc == 'kg')
                                    <span id="bcLive"><i class="fa fa-circle"></i>азыр эфирде</span>
                                  @elseif($lc == 'ru')
                                    <span id="bcLive"><i class="fa fa-circle"></i>сейчас в эфире</span>
                                  @endif

                                @endif

                              @elseif(($schedule->date == $currentDate) && ($i == count($program)-1))

                                @if((strtotime($program[$i]->time) <= strtotime($currentTime)))

                                  @if($lc == 'kg')
                                    <span id="bcLive"><i class="fa fa-circle"></i>азыр эфирде</span>
                                  @elseif($lc == 'ru')
                                    <span id="bcLive"><i class="fa fa-circle"></i>сейчас в эфире</span>
                                  @endif

                                @endif

                              @endif

                              <h4>{{ $program[$i]->name }}</h4>
                              {{--<h5 class="tele-extra"><i class="fa fa-play-circle-o"></i>Сериал</h5>--}}
                            </td>
                          </tr>
                          @endfor
                      </tbody>
                    </table>

                  </div>

                @endif

              @endforeach

            @endforeach

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