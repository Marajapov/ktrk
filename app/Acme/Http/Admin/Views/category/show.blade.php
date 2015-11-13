@extends('Admin::layouts.default')

@section('title', $category->getTitle())

@section('content')

<div class="row modals">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>{{ trans('site.Info') }}</h2>
        <div class="clearfix"></div>
      </div>      
      <div class="panel-body">
        <div class="col-md-5"><h3>{{ $category->getTitle() }}</h3>({{ $category->getTitle() }})</div>
        <div class="col-md-5">
{!! Form::open(['route' => ['admin.category.destroy', $category], 'method' => 'DELETE', 'onsubmit' => "return confirm('Вы уверены ?')" ]) !!}
         <a href="{{ route('admin.category.edit', $category) }}" class="btn btn-labeled btn-success"><span class="btn-label"><i class="glyphicon glyphicon-cog"></i></span>{{ trans('site.Change') }}</a>
         <button class="btn btn-labeled btn-danger" type="submit"><span class="btn-label"><i class="glyphicon glyphicon-remove"></i></span>{{ trans('site.Delete') }}</button>
         {!! Form::close() !!}
       </div>
     </div>
   </div>
 </div>
</div>

<h2><span class="label label-default">{{ trans('site.AdminCategoryTekteshArticles') }}</span></h2>
<div class="list-group">
  @foreach($category->posts as $post)
  <a href="{{ route('admin.post.show', $post) }}" class="list-group-item">{{ $post->getTitle() }}</a>
  @endforeach
</div>
@stop

