@extends('Admin::layouts.default')
@section('title', "Backgrounds")

@section('content')

<div class="row modals">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<a href="{{ route('admin.background.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i>Жаңы фон сүрөтү</a>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<h2>Фон сүрөттөрү</h2>

				<div class="clearfix"></div>
				<div class="list-group">
					@foreach($backgrounds as $background)
					<div>
						<h3><a href="{{ route('admin.background.show', $background) }}">{{ $background->getName() }}</a> </h3>
					</div>
					<hr>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
@stop

