@extends('Admin::layouts.default')
@section('title', $media->getName())

@section('content')
<div class="row modals">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Жаңы медиа макала жазуу</h2>

				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				{!! Form::model($media, ['route' => 'admin.media.store']) !!}
				@include('Admin::partials.forms.media', $media)
				{!! Form::close() !!}

			</div>
		</div>
	</div>
</div>

@stop

