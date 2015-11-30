@extends('Admin::layouts.default')
@section('title', $photoParent->getName())

@section('content')

<div class="row modals">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>{{ trans('site.Info') }}</h2>
        <div class="clearfix"></div>
      </div>      
      <div class="panel-body">
          <h2><span class="label label-default"></span>{{ $photoParent->getName() }}</h2>
        </div>

        <div class="col-md-4">
          {!! Form::open(['route' => ['admin.photoParent.destroy', $photoParent], 'method' => 'DELETE', 'onsubmit' => "return confirm('Вы уверены ?')"]) !!}
          <a href="{{ route('admin.photoParent.edit', $photoParent) }}" class="btn btn-labeled btn-success"><span class="btn-label"><i class="glyphicon glyphicon-cog"></i></span>{{ trans('site.Change') }}</a>

          <button class="btn btn-labeled btn-danger" type="submit"><span class="btn-label"><i class="glyphicon glyphicon-remove"></i></span>{{ trans('site.Delete') }}</button>
          {!! Form::close() !!}
        </div>
      </div>
      <div class="col-md-12"><hr></div>
      <div class="panel-body">
        @if($images != null)
          @foreach($images as $row)

            <p>   
              <img width="250" height="200" src="{{ asset('froala/uploads/'.$row->name) }} " alt="">
              

              {!! Form::open(['route' => ['admin.photoParent.photodelete', $row->id], 'method' => 'get', 'onsubmit' => "return confirm('Вы уверены ?')"]) !!}
              <input type="hidden" value="{{ $row->id }}" name="photoDeleteId">
              <input type="hidden" value="{{ $photoParent->id }}" name="photoParentId">
              
              <button class="btn btn-labeled btn-danger" type="submit"><span class="btn-label"><i class="glyphicon glyphicon-remove"></i></span>{{ trans('site.Delete') }}</button>
              {!! Form::close() !!}
            </p>
          @endforeach
        @endif

      </div>
    </div>
  </div>
@stop

