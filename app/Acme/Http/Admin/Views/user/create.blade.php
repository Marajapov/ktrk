@extends('Admin::layouts.default')
@section('title', $user->getName())

@section('content')

<div class="row modals">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
			<h2>Жаңы колдонуучуну кошуу</h2>

				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				{!! Form::model($user, ['route' => 'admin.user.store']) !!}
				@include('Admin::partials.forms.user', $user)
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@stop


