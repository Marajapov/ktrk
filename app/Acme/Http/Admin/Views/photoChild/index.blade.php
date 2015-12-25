@extends('Admin::layouts.default')
@section('title', "Фотогалерея")

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/admin/dataTables.bootstrap.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/build.css') }}"/>
@endsection

@section('content')

<div class="row modals">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title clearfix">
                <h4>{{ trans('site.AdminPhotochildAllImg') }}</h4>                    
				<a href="{{ route('admin.photoChild.create') }}" class="btn btn-success pull-right">
					<i class="fa fa-plus"></i>
					{{ trans('site.AdminPhotochildAddNewImg') }}
				</a>
			</div>
			<div class="x_content">				

	        	<table id="example" class="table table-bordered table-striped" data-order='[[ 1, "asc" ]]' data-page-length='10'>
		            <thead>
		              <tr>
		                <th>Файл</th>
			            <th>{{ trans('site.TitleKG') }}</th>
			            <th>{{ trans('site.TitleRU') }}</th>
		                <th class="hidden-xs">{{ trans('site.AdminPostCreatedDate') }}</th>
		                <th>Действия</th>
		              </tr>
		            </thead>
		            <tbody>		            
		            @foreach($photoChilds as $photoChild)
			            <tr class="@if($photoChild->published == 1) success @elseif($photoChild->published == 0) danger @endif">
			              <td class="table-img text-center">
			                <img src="{{ asset($photoChild->file) }}" alt=""/>
			              </td>
			              <td class="table-title">
			                <a href="{{ route('admin.photoChild.show', $photoChild) }}">
			                  {{ $photoChild->name }}
			                </a>
			              </td>
			              <td class="table-title">
			                <a href="{{ route('admin.photoChild.show', $photoChild) }}">
			                  {{ $photoChild->nameRu }}
			                </a>
			              </td>
			              <td>
			                {{ $photoChild->getDateFormatted() }}
			              </td>
			              
			              <td>
			                <a class="btn btn-default" href="{{ route('admin.photoChild.show', $photoChild) }}">
			                  {{--<span class="glyphicon glyphicon-eye-open"></span>--}}
			                  <i class="fa fa-eye"></i>
			                </a>
			                <a class="btn btn-default" href="{{ route('admin.photoChild.edit', $photoChild) }}">
			                  {{--<span class="glyphicon glyphicon-pencil"></span>--}}
			                  <i class="fa fa-pencil"></i>
			                </a>
			                {!! Form::open(['route' => ['admin.photoChild.destroy', $photoChild], 'method' => 'DELETE', 'onsubmit' => "return confirm('Вы уверены ?')"]) !!}
			                <button type="submit" class="btn btn-default" href="#">
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
          { "orderable": false, "targets": 3 },
          { "orderable": false, "targets": 4 }
        ]
      });
    } );
  </script>
@endsection
