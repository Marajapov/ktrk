@extends('Admin::layouts.default')
@section('title', $banner->getName())

@section('content')

<div class="row modals">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>{{ trans('site.AdminBannerChanged') }}</h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				{!! Form::model($banner, ['route' => ['admin.banner.update', $banner], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
				@include('Admin::partials.forms.banner', $banner)
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@stop


