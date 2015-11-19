@extends('Admin::layouts.default')
@section('title', 'Создать')

@section('content')
<div class="row modals">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Создать</h2>

				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				{!! Form::model($project, ['route' => 'admin.project.store']) !!}
				@include('Admin::partials.forms.project', $project)
				{!! Form::close() !!}

			</div>
		</div>
	</div>
</div>
@stop

