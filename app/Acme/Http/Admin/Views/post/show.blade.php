@extends('Admin::layouts.default')
@section('title', $post->getTitle())

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

      <div class="extra">
        <p class="post-cat">
          <a href="{{ route('admin.category.show', $post->category) }}">
            {{ $post->category->getTitle() }}
          </a>
        </p>
        <p class="post-date">{{ $post->getTime().', '.$post->getDay().' '.$post->getMonthRu() }}</p>
      </div>

      <h4 class="post-title">
        {{ $post->getTitleRuOrKg() }}
      </h4>

      @if($post->isImage())
        <img src="{{ asset($post->getFile()) }}" alt="" class="img-thumbnail"/>
      @endif

      <h4 class="tags">

        <span class="tags-title">{{ trans('site.Tags') }}:</span>
        {{--{{ dd($post->getTagListAttribute()) }}--}}
        @foreach($post->getTagListAttribute() as $tag)
          <span class="label">{{ $tag }}</span>
        @endforeach

      </h4>

    </div>

  </div>

</div>

@stop

