@extends('Admin::layouts.default')
@section('title', "Users")

@section('content')

<div>
    <a href="{{ route('admin.user.create') }}" class="btn btn-primary">create</a>
</div>
<hr>

@foreach($users as $user)
<div>
    <h3><a href="{{ route('admin.user.show', $user) }}">{{ $user->getName() }}</a></h3>

</div>
<hr>
@endforeach

@stop

