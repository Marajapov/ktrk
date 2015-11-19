@extends('Admin::layouts.default')
@section('title', "Передачи")

@section('content')
<div class="row modals">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<a href="{{ route('admin.project.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i>Создать</a>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
			<h2>Все передачи</h2>

				<div class="clearfix"></div>
				<div class="list-group">
					@foreach($projects as $project) 
					<a href="{{ route('admin.project.show', $project) }}" class="list-group-item">{{ $project->getName() }} ({{ $project->getNameRu() }})</a>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
@stop


