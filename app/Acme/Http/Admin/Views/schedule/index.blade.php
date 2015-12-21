@extends('Admin::layouts.default')
@section('title', "Schedule")

@section('content')

  <div class="row modals">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <a href="{{ route('admin.schedule.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i>Новая программа передач</a>
          <div class="clearfix"></div>
        </div>
        <div class="x_content program">
          <h2>Программа передач</h2>

            @foreach($schedules as $key=>$schedule)
              <div class="col-md-1 @if($key%13==0) first @endif program-block">
                <div class="program-date">
                  <h4>{{ $schedule->getMonthFull() }}</h4>
                  <h1>{{ $schedule->getDay() }}</h1>
                  <h5>{{ $schedule->getWeekRuFull() }}</h5>
                </div>
                <ul class="actions">
                  <li><a class="btn btn-default action-view" href="{{ route('admin.schedule.show', $schedule) }}"><i class="fa fa-eye"></i></a></li>
                  <li><a class="btn btn-default action-edit" href="{{ route('admin.schedule.edit', $schedule) }}"><i class="fa fa-edit"></i></a></li>
                  <li>
                    {!! Form::open(['route' => ['admin.schedule.destroy', $schedule], 'method' => 'DELETE', 'onsubmit' => "return confirm('Вы уверены ?')"]) !!}
                    <button type="submit" class="btn btn-default" href="#" style="margin: 0;padding: 5px 8px;font-size: 18px;">
                      {{--<span class="glyphicon glyphicon-trash"></span>--}}
                      <i class="fa fa-trash"></i>
                    </button>
                    {!! Form::close() !!}
                  </li>
                </ul>
              </div>
            @endforeach





          <ul id="tabs" class="nav nav-tabs teletabs hidden" data-tabs="tabs">
            @foreach($programs as $key => $program)
              @foreach($schedules as $schedule)
                @if($program['date'] == $schedule->date)
                  <li class="@if($key == 0) active @endif"><a href="#{{ $program['date'] }}" data-toggle="tab">{{ $schedule->getDay().' '.$schedule->getMonth().' - '.$schedule->getWeekRu() }}</a></li>
                @endif
              @endforeach
            @endforeach
          </ul>

          <div id="my-tab-content" class="tab-content hidden">

            @foreach($programs as $key => $program)

              @foreach($schedules as $schedule)

                @if($program['date'] == $schedule->date)

                  <div class="tab-pane @if($key == 0) active @endif" id="{{ $schedule->date }}">

                    <table class="table table-bordered table-striped program">
                      <tbody>
                        @for($i=0; $i<count($program)-1; $i++)
                          <tr class="tele-row">
                            <th class="tele-time">{{ $program[$i]->time }}</th>
                            <td class="tele-show">
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
  </div>

@stop

