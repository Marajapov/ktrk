@extends('Admin::layouts.default')
@section('title', $mediaCategory->getName())

@section('content')
<div class="row modals">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Медиа макалаларга жаңы категория ачуу</h2>

				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				{!! Form::model($mediaCategory, ['route' => 'admin.mediaCategory.store']) !!}
				@include('Admin::partials.forms.mediaCategory', $mediaCategory)
				{!! Form::close() !!}

			</div>
		</div>
	</div>
</div>
@stop

