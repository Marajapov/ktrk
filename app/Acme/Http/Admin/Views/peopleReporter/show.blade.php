@extends('Admin::layouts.default')
@section('title', trans('site.Reporter'))

@section('content')

  <div class="row modals">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">

        <div class="x_title clearfix">

          <h4>{{ trans('site.Info') }}</h4>

          <a href="{{ route('admin.project.index') }}" class="btn btn-default pull-right btn-back">{{ trans('site.Back') }}</a>

          {!! Form::open(['route' => ['admin.peopleReporter.destroy', $peopleReporter], 'method' => 'DELETE', 'onsubmit' => "return confirm('Вы уверены ?')"]) !!}
          <button type="submit" class="btn btn-danger" href="#">
            <i class="fa fa-times"></i>
            {{ trans('site.Delete') }}
          </button>
          {!! Form::close() !!}

          <a href="{{ route('admin.peopleReporter.edit', $peopleReporter) }}" class="btn btn-success pull-right">
            <i class="fa fa-edit"></i>
            {{ trans('site.Change') }}
          </a>

        </div>

        <div class="x_content post-info clearfix">

          <ul class="list-group">
            <li class="list-group-item">
              <p class="header">Автор</p>
              <p class="body">
                {{ $peopleReporter->getName() }}
              </p>
            </li>
            <li class="list-group-item">
              <p class="header">Телефон / Email</p>
              <p class="body">
                {{ $peopleReporter->getNameRu() }}
              </p>
            </li>
            <li class="list-group-item">
              <p class="header">{{ trans('site.Content') }}</p>
              <p class="body">
                {{ $peopleReporter->content }}
              </p>
            </li>
            @if($peopleReporter->thumbnail)
              <li class="list-group-item photos">
                <p class="header">{{ trans('site.Images') }}</p>
                <div class="body images">
                  @if($images != null)
                    @foreach($images as $row)
                      <div class="photo-child">
                        <img src="{{ asset('froala/uploads/'.$row->name) }} " alt="">
                      </div>
                    @endforeach
                  @endif
                </div>
              </li>
            @endif

          </ul>

        </div>

      </div>
    </div>
  </div>

@stop

