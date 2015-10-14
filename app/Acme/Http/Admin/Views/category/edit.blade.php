@extends('Admin::layouts.default')
@section('title', $category->getName())

@section('content')

{!! Form::model($category, ['route' => ['admin.category.update', $category], 'method' => 'PUT']) !!}
@include('Admin::partials.forms.category', $category)
{!! Form::close() !!}

@stop

