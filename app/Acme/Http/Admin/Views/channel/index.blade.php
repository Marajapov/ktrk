@extends('Admin::layouts.default')
@section('title', "Channels")

@section('content')
<div class="row modals">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<a href="{{ route('admin.channel.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i>{{ trans('site.AdminChannelNew') }}</a>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<h2>{{ trans('site.AdminChannels') }}</h2>

				<div class="clearfix"></div>
				<div class="list-group">
					@foreach($channels as $channel)
					<a href="{{ route('admin.channel.show', $channel) }}" class="list-group-item">{{ $channel->getDisplay() }}</a>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
@stop

