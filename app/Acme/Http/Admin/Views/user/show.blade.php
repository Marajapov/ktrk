@extends('Admin::layouts.default')
@section('title', $user->getName())

@section('content')

<div class="row modals">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Колдонуучу жөнүндө маалымат</h2>
        <div class="clearfix"></div>
    </div>      
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <h3>{{ $user->getName() }}</h3>            
            <p>Канал: 
                <a href="{{ route('admin.channel.show', $user->channel) }}">
                    {!! $user->channel->getDisplay() !!}
                </a>
            </p>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
            {!! Form::open(['route' => ['admin.user.destroy', $user], 'method' => 'DELETE', 'onsubmit' => 'return confirm("Чын элеби?")']) !!}
            <a href="{{ route('admin.user.edit', $user) }}" class="btn btn-primary">Өзгөртүү</a>
            <button class="btn btn-danger" type="submit">Өчүрүү</button>
            {!! Form::close() !!}
        </div>
    </div>

</div>
</div>
</div>

@stop




