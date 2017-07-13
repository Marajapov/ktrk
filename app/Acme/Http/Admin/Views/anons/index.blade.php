@extends('Admin::layouts.default')
@section('title', "Анонсы")

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/admin/dataTables.bootstrap.css') }}"/>
@endsection

@section('content')
    <div class="row modals">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">

                <div class="x_title clearfix">
                    <h4>Анонс</h4>
                    <a href="{{ route('admin.anons.create') }}" class="btn btn-success pull-right">
                        <i class="fa fa-plus"></i>
                        {{ trans('site.AdminAnonsNew') }}
                    </a>
                </div>

                <div class="row">
                    <div class="col-xs-offset-9 col-xs-3">
                        <div class="form">
                            {!! Form::open(['route' => ['admin.anons.search'], 'method' => 'GET']) !!}
                                <div class="input-group" style="text-align:right; ">
                                    <input name="key" required="required" style="width:100%;" type="text" class="form-control">
                                    <span class="input-group-btn">
                                    <button type="submit" class="btn btn-primary">Поиск</button>
                                    </span>
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
              </div>

                <div class="x_content">

                    <table id="example" class="table table-bordered table-striped" data-order='[[ 0, "desc" ]]' data-page-length='10'>

                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Thumbnail</th>
                            <th>{{ trans('site.TitleKG') }}</th>
                            <th>{{ trans('site.TitleRU') }}</th>
                            <th>Канал</th>
                            <th>Действия</th>
                        </tr>
                        </thead>

                        <tbody>
                        @if($anons)
                            @foreach($anons as $row)
                                <tr>
                                    <td>{{ $row->id }}</td>
                                    <td class="table-img text-center">
                                        <img style="height: 80px;" src="{{ asset($row->thumbnail) }}" alt=""/>
                                    </td>
                                    <td class="table-title">
                                        <a href="{{ route('admin.anons.show', $row) }}">
                                            {{ $row->name }}
                                        </a>
                                    </td>
                                    <td class="table-title">
                                        <a href="{{ route('admin.anons.show', $row) }}">
                                            {{ $row->nameRu }}
                                        </a>
                                    </td>
                                    <td>
                                        @if($row->channel)
                                            {{ $row->channel()->first()->getNameOne() }}
                                        @else
                                            не определен
                                        @endif
                                    </td>
                                    <td>
                                        <a class="btn btn-default" href="{{ route('admin.anons.show', $row) }}">
                                            {{--<span class="glyphicon glyphicon-eye-open"></span>--}}
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a class="btn btn-default" href="{{ route('admin.anons.edit', $row) }}">
                                            {{--<span class="glyphicon glyphicon-pencil"></span>--}}
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        {!! Form::open(['route' => ['admin.anons.destroy', $row], 'method' => 'DELETE', 'onsubmit' => "return confirm('Вы уверены ?')"]) !!}
                                        <button type="submit" class="btn btn-default">
                                            {{--<span class="glyphicon glyphicon-trash"></span>--}}
                                            <i class="fa fa-trash"></i>
                                        </button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>

                    </table>

                    <nav>
                      <ul class="pagination">

                          <li>
                              <a href="{{ route('admin.anons.index', ['page' => 1]) }}" class="btn btn-default @if($anons->currentPage() == 1) disabled @endif">{{ trans('site.Start') }}</a>
                          </li>
                          <li>
                              <a href="{{ $anons->previousPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span></a>
                          </li>

                          @for($i = 0, $j = 1; $i < $anons->total(); $i+=$perPage)
                              <li class="@if(($j > $anons->currentPage()+10) || ($j < $anons->currentPage()-10)) hidden @endif">
                                  <a href="{{ route('admin.anons.index', ['page' => $j]) }}" class="btn btn-default @if($anons->currentPage() == $j) active @endif">
                                      {{ $j++ }}
                                  </a>
                              </li>
                          @endfor

                          <li>
                              <a href="{{ $anons->nextPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-right"></span></a>
                          </li>

                          <li>
                              <a href="{{ route('admin.anons.index', ['page' => ceil($anons->total()/$perPage)]) }}" class="btn btn-default @if($anons->currentPage() == ceil($anons->total()/$perPage)) disabled @endif">{{ trans('site.End') }}</a>
                          </li>

                      </ul>
                  </nav>

                </div>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <!-- <script src="{{ asset('js/admin/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('js/admin/dataTables.bootstrap.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                "language": {
                    "info": "_START_ - _END_ : {{ trans('site.DataTableTotal') }} _TOTAL_ ",
                    "lengthMenu" : "_MENU_ ",
                    "search" : "{{ trans('site.DataTableSearch') }} ",
                    "zeroRecords" : "{{ trans('site.DataTableNoResult') }}",
                    "infoEmpty" : "0-0: {{ trans('site.DataTableTotal') }} 0",
                    "infoFiltered" : "",

                    "paginate": {
                        "first": "{{ trans('site.DataTableFirstPage') }}",
                        "last": "{{ trans('site.DataTableLastPage') }}",
                        "next": "{{ trans('site.DataTableNextPage') }}",
                        "previous": "{{ trans('site.DataTablePreviousPage') }}"
                    }
                },
                "columnDefs": [
                    { "orderable": false, "targets": 1 },
                    { "orderable": false, "targets": 5 }
                ]
            });
        } );
    </script> -->
@endsection
