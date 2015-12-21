@extends('Admin::layouts.default')
@section('title', $schedule->date)

@section('content')
  <div class="row modals program-show">

    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>
            Программа передач {{ $schedule->getDay().'-'.mb_strtolower($schedule->getMonthFull()) }}
            {!! Form::open(['route' => ['admin.schedule.destroy', $schedule], 'method' => 'DELETE', 'class' => 'pull-right', 'onsubmit' => "return confirm('Вы уверены ?')"]) !!}
            <a class="btn btn-primary" href="{{ route('admin.schedule.edit', $schedule) }}"><i class="fa fa-edit"></i>{{ trans('site.Change') }}</a>
            <button class="btn btn-danger" type="submit"><i class="fa fa-times"></i>{{ trans('site.Delete') }}</button>

            {!! Form::close() !!}
          </h2>
        </div>
        <div class="x_content program">


          <table class="table table-bordered table-striped program">
            <tbody>
            @for($i=0; $i<count($program); $i++)
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

          <a href="{{ route('admin.schedule.index') }}" class="btn btn-default">{{ trans('site.Back') }}</a>

        </div>
      </div>
    </div>
  </div>

  </div>

@stop
