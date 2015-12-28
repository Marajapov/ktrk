@extends('Admin::layouts.default')
@section('title', $photoChild->getName())

@section('content')

<div class="row modals">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h4>{{ trans('site.AdminPhotochildImgChange') }}</h4>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				{!! Form::model($photoChild, ['route' => ['admin.photoChild.update', $photoChild], 'method' => 'PUT', 'enctype' => 'multipart/form-data', 'class'=>'form-horizontal']) !!}
				@include('Admin::partials.forms.photoChild', $photoChild)
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@stop

