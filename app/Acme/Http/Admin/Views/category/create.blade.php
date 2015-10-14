@extends('Admin::layouts.default')
@section('title', $category->getName())

@section('content')

{!! Form::model($category, ['route' => 'admin.category.store']) !!}
@include('Admin::partials.forms.category', $category)
{!! Form::close() !!}

@stop

