@extends('Admin::layouts.default')
@section('title', "Posts")

@section('content')
  <div class="row modals">

    <div class="x_panel">

      <div class="x_title clearfix">
        <h4>{{ trans('site.Articles') }}</h4>
        <a href="{{ route('admin.post.create') }}" class="btn btn-success pull-right">
          <i class="fa fa-plus"></i>
          {{ trans('site.NewArticle') }}
        </a>
      </div>

      <div class="x_content clearfix">

        <div class="clearfix">
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

        <table class="table table-striped">
          <thead>
            <tr>
              <th>Миниатюра</th>
              <th>Название</th>
              <th class="hidden-xs">Автор</th>
              <th class="hidden-xs">Дата добавления</th>
              <th class="hidden-xs">Статус</th>
              <th>Действия</th>
            </tr>
          </thead>
          <tbody>
            @foreach($posts as $key => $post)
              <tr>
                <td class="table-img">
                  <img src="{{ asset($post->thumbnail) }}" alt=""/>
                </td>
                <td class="table-title">
                  <a href="{{ route('admin.post.show', $post) }}">
                    {{ $post->getTitleRuOrKg() }}
                  </a>
                </td>
                <td class="hidden-xs">{{ $post->owner()->first()->name }}</td>
                <td class="hidden-xs">{{ $post->getTime().', '.$post->getDateFormatted() }} </td>
                <td class="hidden-xs">
                  @if($post->published == '1')
                    опубликован
                  @elseif($post->published == '0')
                    не опубликован
                  @endif
                </td>
                <td>
                  <a class="btn btn-default" href="{{ route('admin.post.show', $post) }}">
                    {{--<span class="glyphicon glyphicon-eye-open"></span>--}}
                    <i class="fa fa-eye"></i>
                  </a>
                  <a class="btn btn-default" href="{{ route('admin.post.edit', $post) }}">
                    {{--<span class="glyphicon glyphicon-pencil"></span>--}}
                    <i class="fa fa-pencil"></i>
                  </a>
                  {!! Form::open(['route' => ['admin.post.destroy', $post], 'method' => 'DELETE', 'onsubmit' => "return confirm('Вы уверены ?')"]) !!}
                  <button type="submit" class="btn btn-default" href="#">
                    {{--<span class="glyphicon glyphicon-trash"></span>--}}
                    <i class="fa fa-trash"></i>
                  </button>
                  {!! Form::close() !!}
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>

        <div class="list-group hidden">
          @foreach($posts as $post)
            <div class="@if(!$post->isPublished()) alert alert-danger list-group-item @endif list-group-item">
              <i>
                {{ $post->id() }}. </i><a href="{{ route('admin.post.show', $post) }}">{{ $post->getTitleRuOrKg() }}</a>
              ({{ $post->category->getTitle()  }}) <span class="pull-right">Кто добавил: {{ $post->owner()->first()->name }}, Дата: {{ $post->getDate() }}</span>
            </div>
          @endforeach
        </div>

      </div>

      <a href="{{ route('admin.post.index', ['page' => 1]) }}" class="btn btn-default @if($posts->currentPage() == 1) disabled @endif">{{ trans('site.Start') }}</a>
      <a href="{{ $posts->previousPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a href="{{ $posts->nextPageUrl() }}" class="btn btn-default"><span class="glyphicon glyphicon-chevron-right"></span></a>

      @for($i = 0, $j = 1; $i < $posts->total(); $i+=$perPage)
        <a href="{{ route('admin.post.index', ['page' => $j]) }}" class="btn btn-default @if($posts->currentPage() == $j) disabled @endif">{{ $j++ }}</a>
      @endfor

      <a href="{{ route('admin.post.index', ['page' => ceil($posts->total()/$perPage)]) }}" class="btn btn-default @if($posts->currentPage() == ceil($posts->total()/$perPage)) disabled @endif">{{ trans('site.End') }}</a>


    </div>
  </div>

@stop

