@extends('Admin::layouts.default')
@section('title', trans('site.AdminMediaArticles'))

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/admin/dataTables.bootstrap.css') }}"/>
@endsection

@section('content')

    <div class="row modals">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">

                <div class="x_title clearfix">
                    <h4>{{ trans('site.AdminMediaArticles') }}</h4>
                    <a href="{{ route('admin.media.create') }}" class="btn btn-success pull-right">
                        <i class="fa fa-plus"></i>
                        {{ trans('site.AdminMediaNew') }}
                    </a>
                </div>

                <div class="row">
                    <div class="col-xs-offset-9 col-xs-3">
                        <div class="form">
                            {!! Form::open(['route' => ['admin.media.weekMediaSearch'], 'method' => 'GET']) !!}
                            <div class="form-group">
                                <p>Выбирайте дату от начало дня недели до конца следующей</p>
                            </div>
                            
                            <div class="form-group">
                              <label for="channel_id" class="col-sm-6 control-label">От</label>
                              <div class="col-sm-6">
                                {!! Form::text('from_date', null, ["class" => "form-control","id" => "from_date", "required" => true, "title" => ""]) !!}
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="channel_id" class="col-sm-6 control-label">До</label>
                              <div class="col-sm-6">
                                {!! Form::text('to_date', null, ["class" => "form-control","id" => "to_date", "required" => true, "title" => ""]) !!}
                              </div>
                            </div>

                            <div class="input-group" style="text-align:right; ">
                              <span class="input-group-btn">
                                <button type="submit" class="btn btn-primary">Поиск</button>
                              </span>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
                
                <div class="x_content">

                    <table id="example" class="table table-bordered table-striped" data-order='[[ 4, "desc" ]]' data-page-length='10'>
                        <thead>
                        <tr>
                            <th>Media ID</th>
                            <th>Названия</th>
                            <th>Нравится</th>
                            <th>От</th>
                            <th>До</th>
                            
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($table as $key => $row)
                            <tr class="">
                                <td class="table-id">{{ $row->media_id}}</td>
                                <td class="">{{ $row->media_name}}</td>
                                <td class="table-title">{{ $row->like_count}}</td>
                                <td class="hidden-xs">{{ $row->to_date }} </td>
                                <td class="hidden-xs">{{ $row->from_date }} </td>
                                
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

@stop

@section('scripts')
<script type="text/javascript" src="{{ asset('js/bootstrap-select.js') }}"></script>

  <script type="text/javascript" src="{{ asset('js/moment.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/ru.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/transition.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/collapse.js') }}"></script>
<script src="{{ asset('js/bootstrap-datetimepicker.js') }}"></script>
  <script>
    $('#to_date').datetimepicker({
      locale: 'ru',
      format: 'DD-MM-YYYY'
    });
  </script>
  <script>
      $('#from_date').datetimepicker({
      locale: 'ru',
      format: 'DD-MM-YYYY'
    });
  </script>
@endsection

