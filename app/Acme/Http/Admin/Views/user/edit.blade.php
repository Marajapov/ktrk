@extends('Admin::layouts.default')
@section('title', $user->getName())

@section('content')
<div class="row modals">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h4>{{ trans('site.AdminUserChange') }}</h4>

				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				{!! Form::model($user, ['route' => ['admin.user.update', $user], 'method' => 'PUT', 'class'=>'form-horizontal']) !!}
				@include('Admin::partials.forms.user', $user)
				{!! Form::close() !!}

			</div>
		</div>
	</div>
</div>

@stop

