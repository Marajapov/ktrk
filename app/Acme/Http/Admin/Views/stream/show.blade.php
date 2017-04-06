@extends('Admin::layouts.default')
@section('title', $stream->getTitleOne())

@section('content')
<div class="row modals">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title clearfix">
				<h4>{{ trans('site.Info') }}</h4>

	            <a href="{{ route('admin.stream.index') }}" class="btn btn-default pull-right btn-back">{{ trans('site.Back') }}</a>

	            {!! Form::open(['route' => ['admin.stream.destroy', $stream], 'method' => 'DELETE', 'onsubmit' => "return confirm('Вы уверены ?')"]) !!}
	            <button type="submit" class="btn btn-danger" href="#">
	              <i class="fa fa-times"></i>
	              {{ trans('site.Delete') }}
	            </button>
	            {!! Form::close() !!}

	            <a href="{{ route('admin.stream.edit', $stream) }}" class="btn btn-success pull-right">
	              <i class="fa fa-edit"></i>
	              {{ trans('site.Change') }}
	            </a>
			</div>

			<div class="x_content post-info clearfix">
				<ul class="list-group">
					<li class="list-group-item">
						<p class="header">Миниатюра</p>
						<p class="body">
							@if($stream->isImage())
							<img src="{{ asset($stream->getFile()) }}" width="auto" height="120">
							@else
							<object width="auto" height="120" type="application/x-shockwave-flash" data="{{ asset($stream->getFile()) }}"></object>
							@endif
						</p>
					</li>
					<li class="list-group-item">
						<p class="header">Обложка</p>
						<p class="body">
							@if($stream->isImage())
							<img src="{{ asset($stream->getFileBig()) }}" width="auto" height="180">
							@else
							<object width="auto" height="120" type="application/x-shockwave-flash" data="{{ asset($stream->getFileBig()) }}"></object>
							@endif
						</p>
					</li>
        			<li class="list-group-item">
			            <p class="header">Аталышы</p>
			            <p class="body">{{ $stream->getTitleOne() }}</p>
          			</li>
        			<li class="list-group-item">
			            <p class="header">Контент KG</p>
			            <p class="body">{{ $stream->content }}</p>
          			</li>
        			<li class="list-group-item">
			            <p class="header">Стрим</p>
			            <p class="body">{{ $stream->streamUrl }}</p>
          			</li>
        			<li class="list-group-item">
			            <p class="header">Контенt RU</p>
			            <p class="body">{{ $stream->contentRu }}</p>
          			</li>
				</ul>
			</div>
		</div>
	</div>
</div>

@stop
