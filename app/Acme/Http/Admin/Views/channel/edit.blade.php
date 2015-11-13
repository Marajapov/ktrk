@extends('Admin::layouts.default')
@section('title', $channel->getName())

@section('content')

<div class="row modals">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>{{ trans('site.AdminChannelChange') }}</h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				{!! Form::model($channel, ['route' => ['admin.channel.update', $channel], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
				@include('Admin::partials.forms.channel', $channel)
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@stop

