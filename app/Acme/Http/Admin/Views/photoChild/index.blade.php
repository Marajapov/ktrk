@extends('Admin::layouts.default')
@section('title', "Фотогалерея")

@section('content')

<div class="row modals">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<a href="{{ route('admin.photoChild.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i>Жаңы сүрөт кошуу</a>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<h2>Сүрөттөр</h2>

				<div class="clearfix"></div>
				<div class="list-group">
					@foreach($photoChilds as $photoChild)
					<a href="{{ route('admin.photoChild.show', $photoChild) }}" class="list-group-item">{{ $photoChild->getName() }}</a>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>

@stop

