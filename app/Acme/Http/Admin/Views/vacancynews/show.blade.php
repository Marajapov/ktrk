@extends('Admin::layouts.default')
@section('title', $vacancynews->getTitleOne())

@section('content')
<div class="row modals">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title clearfix">
				<h4>{{ trans('site.Info') }}</h4>

	            <a href="{{ route('admin.vacancynews.index') }}" class="btn btn-default pull-right btn-back">{{ trans('site.Back') }}</a>

	            {!! Form::open(['route' => ['admin.vacancynews.destroy', $vacancynews], 'method' => 'DELETE', 'onsubmit' => "return confirm('Вы уверены ?')"]) !!}
	            <button type="submit" class="btn btn-danger" href="#">
	              <i class="fa fa-times"></i>
	              {{ trans('site.Delete') }}
	            </button>
	            {!! Form::close() !!}

	            <a href="{{ route('admin.vacancynews.edit', $vacancynews) }}" class="btn btn-success pull-right">
	              <i class="fa fa-edit"></i>
	              {{ trans('site.Change') }}
	            </a>
			</div>

			<div class="x_content post-info clearfix">
				<ul class="list-group">
					<li class="list-group-item">
						<p class="header">Миниатюра</p>
						<p class="body">
							@if($vacancynews->isImage())
							<img src="{{ asset($vacancynews->getFile()) }}" width="auto" height="120">
							@else
							<object width="auto" height="120" type="application/x-shockwave-flash" data="{{ asset($vacancynews->getFile()) }}"></object>
							@endif
						</p>
					</li>
        			<li class="list-group-item">
			            <p class="header">Аталышы</p>
			            <p class="body">{{ $vacancynews->getTitleOne() }}</p>
          			</li>
        			<li class="list-group-item">
			            <p class="header">Контент KG</p>
			            <p class="body">{{ $vacancynews->content }}</p>
          			</li>
        			<li class="list-group-item">
			            <p class="header">Контенt RU</p>
			            <p class="body">{{ $vacancynews->contentRu }}</p>
          			</li>
				</ul>
			</div>
		</div>
	</div>
</div>

@stop
