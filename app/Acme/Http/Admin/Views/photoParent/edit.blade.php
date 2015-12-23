@extends('Admin::layouts.default')
@section('title', $photoParent->getName())

@section('content')

<div class="row modals">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>{{ trans('site.AdminPhotoParentChange') }}</h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				{!! Form::model($photoParent, ['route' => ['admin.photoParent.update', $photoParent], 'method' => 'PUT', 'enctype' => 'multipart/form-data',  'class'=>'form-horizontal']) !!}
				@include('Admin::partials.forms.photoParent', $photoParent)
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@stop

