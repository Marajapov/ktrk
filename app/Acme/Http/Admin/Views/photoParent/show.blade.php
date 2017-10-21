@extends('Admin::layouts.default')
@section('title', $photoParent->getName())

@section('styles')
    <meta name="_token" content="{!! csrf_token() !!}"/>

    <link href="{{ asset('froala/css/froala_style.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    <div class="row modals">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">

                <div class="x_title clearfix">

                    <h4>{{ trans('site.Info') }} - {{count($images)}} файл</h4>

                    <a href="{{ route('admin.photoParent.index') }}" class="btn btn-default pull-right btn-back">{{ trans('site.Back') }}</a>

                    {!! Form::open(['route' => ['admin.photoParent.destroy', $photoParent], 'method' => 'DELETE', 'onsubmit' => "return confirm('Вы уверены ?')"]) !!}
                    <button type="submit" class="btn btn-danger" href="#">
                        <i class="fa fa-times"></i>
                        {{ trans('site.Delete') }}
                    </button>
                    {!! Form::close() !!}

                    <a href="{{ route('admin.photoParent.edit', $photoParent) }}" class="btn btn-success pull-right">
                        <i class="fa fa-edit"></i>
                        {{ trans('site.Change') }}
                    </a>

                </div>

                <div class="x_content post-info clearfix">

                    <ul class="list-group">
                        <li class="list-group-item">
                            <p class="header">Миниатюра</p>
                            <p class="body">
                                <img src="{{ asset($photoParent->getThumbnail()) }}" alt=""/>
                            </p>
                        </li>
                        <li class="list-group-item">
                            <p class="header">{{ trans('site.AdminPhotoParentLocation') }}</p>
                            <p class="body">
                                {{ $photoParent->getLocation() }}
                            </p>
                        </li>
                        <li class="list-group-item">
                            <p class="header">{{ trans('site.Title') }}</p>
                            <p class="body">
                                {{ $photoParent->getNameKg() }}
                            </p>
                        </li>
                        <li class="list-group-item">
                            <p class="header">{{ trans('site.TitleRU') }}</p>
                            <p class="body">
                                {!! $photoParent->getNameRu() !!}
                            </p>
                        </li>
                        <li class="list-group-item">
                            <p class="header">{{ trans('site.AdminPostCreatedDate') }}</p>
                            <p class="body tags">
                                {{ $photoParent->getTime().', '.$photoParent->getDateFormatted() }}
                            </p>
                        </li>
                        <li class="list-group-item">
                            <p class="header">{{ trans('site.PublishStatus') }}</p>
                            <p class="body tags">
                                @if($photoParent->published == '1')
                                    опубликован
                                @elseif($photoParent->published == '0')
                                    не опубликован
                                @endif
                            </p>
                        </li>
                        <li class="list-group-item photos">
                            <p class="header" style="min-width: 200px;">{{ trans('site.Images') }}</p>
                            <div class="body images" style="width: 10000px;">
                                @if($images != null)
                                    @foreach($images as $row)
                                        <div class="photo-child">
                                            {!! Form::open(['route' => ['admin.photoParent.photodelete', $row->id], 'method' => 'get', 'onsubmit' => "return confirm('Вы уверены ?')"]) !!}

                                            <img src="{{ asset('/froala/uploads/'.$row->name) }} " alt="">
                                            <input type="hidden" value="{{ $row->id }}" name="photoDeleteId">
                                            <input type="hidden" value="{{ $photoParent->id }}" name="photoParentId">
                                            <button type="submit"><i class="fa fa-times"></i></button>
                                            {!! Form::close() !!}
                                        </div>
                                    @endforeach
                                @endif
                                <form style="margin-top: 15px;" action="{{route('admin.photoParent.addImages', $photoParent)}}" enctype="multipart/form-data" method="POST">

                                    <input name="_token" hidden value="{!! csrf_token() !!}" />

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                <div class="form-control" data-trigger="fileinput">
                                                    <i class="glyphicon glyphicon-file fileinput-exists"></i>
                                                    <span class="fileinput-filename"></span>
                                                </div>
                                                <span class="input-group-addon btn btn-default btn-file" style="padding: 6px 12px;">
                                                    <span class="fileinput-new">Выберите файлы</span>
                                                    <input id="images" type="file" name="images[]" multiple>
                                                </span>
                                                <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Удалить</a>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <button type="submit" class="btn btn-primary">Добавить</button>
                                        </div>

                                    </div>

                                </form>
                            </div>
                        </li>
                    </ul>

                </div>

            </div>

        </div>
    </div>
@stop
