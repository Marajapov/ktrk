@extends('Admin::layouts.default')
@section('title', $project->getName())

@section('content')

<div class="row modals">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>{{ trans('site.AdminMediaCategoryChange') }}</h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				{!! Form::model($project, ['route' => ['admin.project.update', $project], 'method' => 'PUT']) !!}
				@include('Admin::partials.forms.project', $project)
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>


@stop

