@extends('Admin::layouts.default')
@section('title', "Media Categories")

@section('content')
<div class="row modals">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<a href="{{ route('admin.mediaCategory.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i>Жаңы категория</a>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
			<h2>Медиа категориялар</h2>

				<div class="clearfix"></div>
				<div class="list-group">
					@foreach($mediaCategories as $mediaCategory)
					<a href="{{ route('admin.mediaCategory.show', $mediaCategory) }}" class="list-group-item">{{ $mediaCategory->getName() }}</a>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
@stop


