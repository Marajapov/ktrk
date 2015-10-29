@extends('Admin::layouts.default')

@section('title', $mediaCategory->getName())

@section('content')

<div class="row modals">
 <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Маалымат</h2>
            <div class="clearfix"></div>
        </div>
        <div class="panel-body">
            <div class="col-md-5"><h3>{{ $mediaCategory->getName() }}</h3> ({{ $mediaCategory->getVideoType() }})</div>
            <div class="col-md-5">
                {!! Form::open(['route' => ['admin.mediaCategory.destroy', $mediaCategory], 'method' => 'DELETE', 'onsubmit' => 'return confirm("Өчүргөнгө макулсузбу")']) !!}
                <a href="{{ route('admin.mediaCategory.edit', $mediaCategory) }}" class="btn btn-primary">Өзгөртүү</a>
                <button class="btn btn-danger" type="submit">Өчүрүү</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
</div>
<h2><span class="label label-default">Бул категорияга тиешелүү баардык материалдар </span></h2>
<div class="list-group">
    @foreach($mediaCategory->medias as $media)        
    <a href="{{ route('admin.media.show', $media) }}" class="list-group-item">{{ $media->getName() }}</a>        
    @endforeach
</div>

@stop
