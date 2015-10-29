@extends('Admin::layouts.default')
@section('title', $media->getName())

@section('content')

<div class="row modals">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Медиа макаланы өзгөртүү</h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				{!! Form::model($media, ['route' => ['admin.media.update', $media], 'method' => 'PUT']) !!}
				@include('Admin::partials.forms.media', $media)
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>


@stop

