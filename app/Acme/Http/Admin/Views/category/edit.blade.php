@extends('Admin::layouts.default')
@section('title', $category->getTitle())

@section('content')
<div class="row modals">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>{{ trans('site.AdminCategoryChanged') }}</h2>

				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				{!! Form::model($category, ['route' => ['admin.category.update', $category], 'method' => 'PUT']) !!}
				@include('Admin::partials.forms.category', $category)
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@stop


