@extends('Admin::layouts.default')

@section('title', $category->getTitle())

@section('content')

<div class="row modals">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Маалымат</h2>
        <div class="clearfix"></div>
      </div>      
      <div class="panel-body">
        <div class="col-md-5"><h3>{{ $category->getTitle() }}</h3>({{ $category->getName() }})</div>
        <div class="col-md-5">
         {!! Form::open(['route' => ['admin.category.destroy', $category], 'method' => 'DELETE', 'onsubmit' => 'return confirm("Вы уверены?")']) !!}
         <a href="{{ route('admin.category.edit', $category) }}" class="btn btn-primary">өзгөртүү</a>
         <button class="btn btn-danger" type="submit">өчүрүү</button>
         {!! Form::close() !!}
       </div>
     </div>
   </div>
 </div>
</div>

<h2><span class="label label-default">Бул категорияга тиешелүү баардык жаңылыктар (макалалар)</span></h2>
<div class="list-group">
  @foreach($category->posts as $post)

  <a href="{{ route('admin.post.show', $post) }}" class="list-group-item">{{ $post->getTitle() }} ({!! $post->getDescription() !!})</a>

  @endforeach

</div>


@stop
