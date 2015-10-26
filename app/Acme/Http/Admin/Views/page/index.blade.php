@extends('Admin::layouts.default')
@section('title', "Pages")

@section('content')

<div>
    <a href="{{ route('admin.page.create') }}" class="btn btn-primary">Создать</a>
</div>
<hr>

@foreach($pages as $page)
<div class="@if(!$page->isPublished()) alert alert-danger @endif">
    <h3><a href="{{ route('admin.page.show', $page) }}">{{ $page->getName() }}</a></h3>

</div>
<hr>
@endforeach

@stop

