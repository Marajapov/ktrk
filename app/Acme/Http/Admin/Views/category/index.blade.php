@extends('Admin::layouts.default')
@section('title', "Categories")

@section('content')

<div class="row modals">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<div>
					<a href="{{ route('admin.category.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i>{{ trans('site.AdminCategoryAddNew') }}
</a>
				</div>
			
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<div class="list-group">
				<p class="list-group-item active">{{ trans('site.AdminCategories') }}</p>
					@foreach($categories as $category)
					<a href="{{ route('admin.category.show', $category) }}" class="list-group-item">{{ $category->getTitle() }}</a>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>


@stop


