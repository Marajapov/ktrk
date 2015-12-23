@extends('Admin::layouts.default')
@section('title', "Программа передач")

@section('content')

  <div class="row modals">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title clearfix">

          <h4>Программа передач</h4>
          <a href="{{ route('admin.schedule.create') }}" class="btn btn-success pull-right">
            <i class="fa fa-plus"></i>
            Новая программа передач
          </a>
        </div>
        <div class="x_content program">

            @if($schedules)
              @foreach($schedules as $key=>$schedule)
                <div class="@if($key%13==0) first @endif program-block">
                  <div class="program-date">
                    <h4>{{ $schedule->getMonthFull() }}</h4>
                    <h1>{{ $schedule->getDay() }}</h1>
                    <h5>{{ $schedule->getWeekRuFull() }}</h5>
                    <a href="#">@if($schedule->channel_id) {{ $schedule->channel()->first()->display }} @endif</a>
                  </div>
                  <ul class="actions">
                    <li><a class="btn btn-default action-view" href="{{ route('admin.schedule.show', $schedule) }}"><i class="fa fa-eye"></i></a></li>
                    <li><a class="btn btn-default action-edit" href="{{ route('admin.schedule.edit', $schedule) }}"><i class="fa fa-edit"></i></a></li>
                    <li>
                      {!! Form::open(['route' => ['admin.schedule.destroy', $schedule], 'method' => 'DELETE', 'onsubmit' => "return confirm('Вы уверены ?')"]) !!}
                      <button type="submit" class="btn btn-default action-delete" href="#" style="margin: 0;padding: 5px 8px;font-size: 18px;">
                        {{--<span class="glyphicon glyphicon-trash"></span>--}}
                        <i class="fa fa-trash"></i>
                      </button>
                      {!! Form::close() !!}
                    </li>
                  </ul>
                </div>
              @endforeach
            @endif

          </div>
        </div>
      </div>
    </div>
  </div>

@stop

