@extends('Admin::layouts.default')
@section('title', $schedule->date)

@section('content')
  <div class="row modals">
    <div class="x_panel">

      <div class="x_title">
        <h4>Программа передач {{ $schedule->getDay().'-'.mb_strtolower($schedule->getMonthFull()) }}</h4>
      </div>

      <div class="x_content program">

        {!! Form::model($schedule, ['route' => ['admin.schedule.update', $schedule], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}

          <table class="table table-bordered table-striped program">
            <tbody>
            @for($i=0; $i<count($program); $i++)
              <tr class="tele-row">
                <th class="tele-time">
                  {!! Form::text('time[]', $program[$i]->time, ["class" => "form-control", "title" => ""]) !!}
                </th>
                <td class="tele-show">
                  {{--<h4>{{ $program[$i]->name }}</h4>--}}
                  {!! Form::text('name[]', $program[$i]->name, ["class" => "form-control", "title" => ""]) !!}
                </td>
              </tr>
            @endfor
              <tr>
                <th class="tele-time">
                  {!! Form::text('time[]', null, ["class" => "form-control", "title" => ""]) !!}
                </th>
                <td class="tele-show">
                  {{--<h4>{{ $program[$i]->name }}</h4>--}}
                  {!! Form::text('name[]', null, ["class" => "form-control", "title" => ""]) !!}
                </td>
              </tr>
            </tbody>
          </table>

        {!! Form::hidden('date', $schedule->date) !!}

        <button type="submit" class="btn btn-primary">{{ trans('site.Save') }}</button>
        <a href="{{ route('admin.schedule.index') }}" class="btn btn-default">{{ trans('site.Back') }}</a>

        {!! Form::close() !!}

      </div>
    </div>
  </div>

@stop
