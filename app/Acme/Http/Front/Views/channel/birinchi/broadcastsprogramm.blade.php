@extends('Front::channel.birinchi.default')
@section('title', "Биринчи Радио")
@section('styles')
  <link rel="stylesheet" href="{{ asset('css/radios.css')}}">
  <link rel="stylesheet" href="{{ asset('css/pages.css')}}">
@endsection
@section('content')
  <div class="birinchiradio">
    <div class="container-fluid metatop">
      <div class="container onepadding">
        <nav class="top-nav">
          <ul>
            @foreach(\Model\Menu\ModelName::code('main')->parent()->get() as $menu)
              @if(count($menu->submenus) > 0)
                <li>
                  <a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="100" data-close-others="false" role="button" aria-expanded="false">{{ $menu->getName() }}</a>
                  <ul class="dropdown-menu" role="menu">
                    @foreach($menu->submenus as $submenu)
                      <li><a href="{{ $submenu->getUrl() }}">{{ $submenu->getName() }}</a></li>
                    @endforeach
                  </ul>
                </li>
              @else
                <li><a href="{{ $menu->getUrl() }}">{{ $menu->getName() }}</a></li>
              @endif
            @endforeach
          </ul>
          <ul class="topradio pull-right">
            <li><a href="{{ route('kyrgyzradio.home') }}">Кыргыз Радиосу</a></li>
            <li><a href="{{ route('minkiyal.home') }}">Миң Кыял FM</a></li>
            <li><a href="{{ route('dostuk.home') }}">Достук</a></li>
            <li></li>
          </ul>


        </nav>
      </div>
    </div>
    <div class="container-fluid cffix">
      <div class="col-md-12 topheader">
        <div class="container onepadding">
          <div class="col-md-3">
            <nav>
              <ul>
                <li class="sitemenu" id="site-channel1">
                  <a href="{{ route('birinchi.home') }}">
                    <img class="onelogos" src="{{ asset('images/channels/1-radio-notext.png')}}">
                    <span>Биринчи радио</span>
                    <h4>Биринчи ради</h4>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
          <div class="col-md-9 oneheader onepadding">
            <ul class="nav navbar-nav chastota">
              <li>Бишкек 104.1</li>
              <li>{{ trans('radiopages.Issyk') }} 102.4</li>
              <li>Нарын 100.5</li>
              <li>Ош 100.7</li>
              <li>Баткен 104.2</li>
              <li>Жалал-Абад 104.7</li>
              <li>Талас 102.0</li>
            </ul>
            <ul class="nav navbar-nav oneline">
              <li><a class="time" href="#"><time>11:15</time></a></li>
              <li class="onetime"><a href=""><button class="btn"><i class="fa fa-microphone"></i><span>{{ trans('radiopages.Live') }}</span></button></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right onesoc">
              <li class="onepost"><a href=""><i class="fa fa-facebook"></i><span>facebook</span></a></li>
              <li class="onetwit"><a href=""><i class="fa fa-twitter"></i><span>twitter</span></a></li>
            </ul>
          </div>
        </div>
        <div class="row" style="margin:0px;">
          <nav class="navbar">
            <div class="container">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header oneheaderone">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="true">
                  <span class="sr-only">Меню</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <div class="logo-block search-block">
                  <a class="search-toggle"><i class="fa fa-search"></i></a>
                  <form class="form-search" action="{{ route('front.search') }}" method="get">
                    <div class="form-group pull-right">
                      <input type="text" name="search" class="form-control" placeholder="Издөө"/>
                    </div>
                    <a class="btn close-search">
                      <i class="fa fa-close"></i>
                    </a>
                    <button class="btn submit-search" type="submit">
                      <i class="fa fa-search"></i>
                    </button>
                  </form>
                </div>
                <a class="navbar-brand" href="{{ route('birinchi.home') }}">{{ trans('radiopages.Home') }}</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav onenavbar">
                  <li><a href="{{ route('birinchi.about') }}">{{ trans('radiopages.About') }}</a></li>
                  <li class="dropdown">
                    <a href="{{ route('birinchi.allbroadcasts') }}" class="dropdown-toggle" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ trans('radiopages.Peredachi') }} <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                         @if($birinchiProjects) 
                         @foreach($birinchiProjects as $birinchiProject)
                         <li>
                            <a href="{{ route('birinchi.broadcasts', $birinchiProject) }}">{{ $birinchiProject->getName() }}</a>
                         </li>
                         @endforeach
                         @endif
                    </ul>
                  </li>
                  <li>
                    <a class="active" href="{{ route('birinchi.broadcastsprogramm') }}">
                      {{ trans('radiopages.Prperedach') }}
                    </a>
                  </li>
                  <li><a href="{{ route('birinchi.allphotos') }}"> {{ trans('radiopages.Photos') }}</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right logo-block onesearch">
                    <div class="language">
                        <ul>
                            <li @if(app()->getlocale() == 'kg') class="active" @endif><a href="/locale/kg">кырг</a></li>
                            <li @if(app()->getlocale() == 'ru') class="active" @endif><a href="/locale/ru">рус</a></li>
                        </ul>
                    </div>                
                  <a class="search-toggle"><i class="fa fa-search"></i></a>
                  <form class="form-search" action="{{ route('front.search') }}" method="get">
                    <div class="form-group pull-right">
                      <input type="text" name="search" class="form-control" placeholder="Издөө"/>
                    </div>
                    <a class="btn close-search">
                      <i class="fa fa-close"></i>
                    </a>
                    <button class="btn submit-search" type="submit">
                      <i class="fa fa-search"></i>
                    </button>
                  </form>
                </ul>

              </div>
              <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
          </nav>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12" style="padding: 10px 0px 0px 0px;">
          <div class="panel onenews teleprogramm">
            <div class="panel-heading">
              <h3 class="panel-title"><span>{{ trans('radiopages.Teleperedachi') }}</span></h3>
            </div>

            <div class="panel-body">

              <ul id="tabs" class="nav nav-tabs teletabs" data-tabs="tabs">

                @foreach($programs as $key => $program)
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

              @if($programs)

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

              @endif
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

@stop

@section('footerScript2')

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