@extends('Admin::layouts.default')
@section('title', "Channels")

@section('content')


    <div>
        <a href="{{ route('admin.channel.create') }}" class="btn btn-primary">create</a>
    </div>
    <hr>

    
    <div class="list-group">
    @foreach($channels as $channel)
        
            <a href="{{ route('admin.channel.show', $channel) }}" class="list-group-item">{{ $channel->getDisplay() }}</a>
    @endforeach
    </div>


@stop

