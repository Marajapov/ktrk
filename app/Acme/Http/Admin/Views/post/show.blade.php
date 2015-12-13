@extends('Admin::layouts.default')
@section('title', $post->getTitleRuOrKg())

@section('content')
<div class="row modals">

  <div class="x_panel">

    <div class="x_title clearfix">

      <h4>{{ trans('site.Articles') }}</h4>

      <a href="{{ route('admin.post.index') }}" class="btn btn-default pull-right btn-back">{{ trans('site.Back') }}</a>

      {!! Form::open(['route' => ['admin.post.destroy', $post], 'method' => 'DELETE', 'onsubmit' => "return confirm('Вы уверены ?')"]) !!}
      <button type="submit" class="btn btn-danger" href="#">
        <i class="fa fa-times"></i>
        {{ trans('site.Delete') }}
      </button>
      {!! Form::close() !!}

      <a href="{{ route('admin.post.edit', $post) }}" class="btn btn-success pull-right">
        <i class="fa fa-edit"></i>
        {{ trans('site.Change') }}
      </a>

    </div>

    <div class="x_content post-info clearfix">

      <ul class="list-group">
        <li class="list-group-item">
          <p class="header">{{ trans('site.Title') }}</p>
          <p class="body">
            {{ $post->getTitleRuOrKg() }}
          </p>
        </li>
        <li class="list-group-item">
          <p class="header">Миниатюра</p>
          <p class="body">
            <img src="{{ asset($post->getFile()) }}" alt="" class="img-thumbnail"/>
          </p>
        </li>
        <li class="list-group-item">
          <p class="header">Категория</p>
          <p class="body">
            <a href="{{ route('admin.category.show', $post->category) }}">
              {{ $post->category->getTitle() }}
            </a>
          </p>
        </li>
        <li class="list-group-item">
          <p class="header">{{ trans('site.Tags') }}</p>
          <p class="body tags">
            @foreach($post->getTagListAttribute() as $tag)
              <span class="label">{{ $tag }}</span>
            @endforeach
          </p>
        </li>
        <li class="list-group-item">
          <p class="header">Автор</p>
          <p class="body tags">
            {{ $post->owner()->first()->name }}
          </p>
        </li>
        <li class="list-group-item">
          <p class="header">{{ trans('site.AdminPostCreatedDate') }}</p>
          <p class="body tags">
            {{ $post->getTime().', '.$post->getDateFormatted() }}
          </p>
        </li>
      </ul>

    </div>

  </div>

</div>

@stop

