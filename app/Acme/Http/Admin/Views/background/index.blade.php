@extends('Admin::layouts.default')
@section('title', "Backgrounds")

@section('content')

<div>
    <a href="{{ route('admin.background.create') }}" class="btn btn-primary">create</a>
</div>
<hr>

@foreach($backgrounds as $background)
<div>
    <h3><a href="{{ route('admin.background.show', $background) }}">{{ $background->getName() }}</a> </h3>
</div>
<hr>
@endforeach

@stop

