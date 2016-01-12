@extends('Admin::layouts.default')
@section('title', "Channels")

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/admin/dataTables.bootstrap.css') }}"/>
@endsection

@section('content')
    <div class="row modals">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">

                <div class="x_title clearfix">
                    <h4>{{ trans('site.AdminChannels') }}</h4>
                    <a href="{{ route('admin.channel.create') }}" class="btn btn-success pull-right">
                        <i class="fa fa-plus"></i>
                        {{ trans('site.AdminChannelNew') }}
                    </a>
                </div>

                <div class="x_content">

                    <table id="example" class="table table-bordered table-striped" data-order='[[ 1, "asc" ]]' data-page-length='10'>

                        <thead>
                        <tr>
                            <th>Миниатюра</th>
                            <th>{{ trans('site.Title') }}</th>
                            <th>Действия</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($channels as $channel)
                            <tr>
                                <td class="table-img text-center">
                                    <img style="height: 80px;" src="{{ asset($channel->file) }}" alt=""/>
                                </td>
                                <td class="table-title">
                                    <a href="{{ route('admin.channel.show', $channel) }}">
                                        {{ $channel->display }}
                                    </a>
                                </td>
                                <td>
                                    <a class="btn btn-default" href="{{ route('admin.channel.show', $channel) }}">
                                        {{--<span class="glyphicon glyphicon-eye-open"></span>--}}
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a class="btn btn-default" href="{{ route('admin.channel.edit', $channel) }}">
                                        {{--<span class="glyphicon glyphicon-pencil"></span>--}}
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    {!! Form::open(['route' => ['admin.channel.destroy', $channel], 'method' => 'DELETE', 'onsubmit' => "return confirm('Вы уверены ?')"]) !!}
                                    <button type="submit" class="btn btn-default">
                                        {{--<span class="glyphicon glyphicon-trash"></span>--}}
                                        <i class="fa fa-trash"></i>
                                    </button>
                                    {!! Form::close() !!}
                                </td>
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
    <script src="{{ asset('js/admin/jquery.dataTables.js') }}"></script>
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
                    { "orderable": false, "targets": 0 },
                    { "orderable": false, "targets": 2 }
                ]
            });
        } );
    </script>
@endsection
