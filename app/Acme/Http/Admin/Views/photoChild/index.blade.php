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
				<div class="page-title">
                        <div class="title_left">
                            <h3>Баардык сүрөттөр</h3>
                        </div>
                        <div class="title_right">
                            <div class="col-md-4 col-sm-4 col-xs-12 form-group pull-right top_search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Издөө...">
                                    <span class="input-group-btn">
                            		<button class="btn btn-default" type="button">ОК!</button></span>
                                </div>
                            </div>
                        </div>
                    </div>

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

