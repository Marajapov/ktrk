@extends('Admin::layouts.default')
@section('title', $user->getName())

@section('content')

    <div>
        {!! Form::open(['route' => ['admin.user.destroy', $user], 'method' => 'DELETE', 'onsubmit' => 'return confirm("Вы уверены?")']) !!}
        <a href="{{ route('admin.user.edit', $user) }}" class="btn btn-primary">Редактировать</a>
        <button class="btn btn-danger" type="submit">Удалить</button>
        {!! Form::close() !!}
    </div>


    <div>
        <h3>{{ $user->getName() }}</h3>
        
        <p>Канал: 
            <a href="{{ route('admin.channel.show', $user->channel) }}">
                {!! $user->channel->getDisplay() !!}
            </a>
        </p>



    </div>

@stop