@extends('Admin::layouts.default')

@section('title', $project->getName())

@section('content')

<div class="row modals">
 <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>{{ trans('site.Info') }}</h2>
            <div class="clearfix"></div>
        </div>
        <div class="panel-body">
            <div class="col-md-5"><h3>{{ $project->getName() }}</h3></div>
            <div class="col-md-5">
                {!! Form::open(['route' => ['admin.project.destroy', $project], 'method' => 'DELETE', 'onsubmit' => "return confirm('Вы уверены ?')"]) !!}
                <a href="{{ route('admin.project.edit', $project) }}" class="btn btn-labeled btn-success"><span class="btn-label"><i class="glyphicon glyphicon-cog"></i></span>{{ trans('site.Change') }}</a>
                <button class="btn btn-labeled btn-danger" type="submit"><span class="btn-label"><i class="glyphicon glyphicon-remove"></i></span>{{ trans('site.Delete') }}</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
</div>    
    <a href="{{ route('admin.project.show', $project) }}" class="list-group-item">{{ $project->getName() }}</a>        
@stop
