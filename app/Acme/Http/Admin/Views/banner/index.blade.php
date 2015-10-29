@extends('Admin::layouts.default')
@section('title', "Banner")

@section('content')

<div class="row modals">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<a href="{{ route('admin.banner.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i>Жаңы баннер</a>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<h2>Баннерлер</h2>

				<div class="clearfix"></div>
				<div class="list-group">
					@foreach($banners as $banner)
					<a href="{{ route('admin.banner.show', $banner) }}" class="list-group-item">{{ $banner->getName() }} ({{ $banner->category->getTitle()  }})</a>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>

@stop

