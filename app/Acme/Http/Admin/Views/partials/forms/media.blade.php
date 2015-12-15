@include('Front::messages.flash')

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/bootstrap-select.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/build.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/admin/tokenfield-typeahead.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/admin/bootstrap-tokenfield.css') }}"/>
@endsection

<div class="panel panel-success">
  <div class="panel-body">

    <div class="form-group">
      <label for="channel_id" class="col-sm-2 control-label">{{ trans('site.Title') }}</label>
      <div class="col-sm-10">
        {!! Form::text('name', null, ["class" => "form-control", "required" => true, "title" => ""]) !!}
      </div>
    </div>

    {{--<div class="form-group">--}}
      {{--<label for="channel_id" class="col-sm-2 control-label">{{ trans('site.TitleRU') }}</label>--}}
      {{--<div class="col-sm-10">--}}
        {{--{!! Form::text('nameRu', null, ["class" => "form-control", "required" => true, "title" => ""]) !!}--}}
      {{--</div>--}}
    {{--</div>--}}

    <div class="form-group">
      <label for="channel_id" class="col-sm-2 control-label">Категория</label>
      <div class="col-sm-10">
        {!! Form::select('videoType', \Model\MediaCategory\ModelName::lists('name', 'videoType')->toArray(), null, ["class" => "selectpicker","data-live-search"=>"true", "required" => true, "title" => "-- Выберите --"]) !!}
      </div>
    </div>

    <div class="form-group">
      <label for="channel_id" class="col-sm-2 control-label">{{ trans('site.AdminMediaProject') }}</label>
      <div class="col-sm-10">
        {!! Form::select('program', $projectList, null, ["class" => "selectpicker","data-live-search"=>"true", "title" => "-- Выберите --"]) !!}
      </div>
    </div>

    <div class="form-group">
      <label for="channel_id" class="col-sm-2 control-label">{{ trans('site.Content') }}</label>
      <div class="col-sm-10">
        {!! Form::textarea('description', null, ["class" => "form-control","data-live-search"=>"true", "title" => ""]) !!}
      </div>
    </div>

    <div class="form-group">
      <label for="channel_id" class="col-sm-2 control-label">{{ trans('site.AdminMediaURL') }}</label>
      <div class="col-sm-10">
        {!! Form::text('url', null, ["class" => "form-control", "title" => ""]) !!}
      </div>
    </div>

    <div class="form-group">
      <label for="parentId" class="col-sm-2 control-label"></label>
      <div class="col-sm-10">
        <div class="checkbox checkbox-primary ">
          {!! Form::hidden('published', 0) !!}
          {!! Form::checkbox('published', 1, null, ["id" => "checkboxPublished", "class" => "form-control styled", "style" => "width: 34px; margin: 0"]) !!}
          <label for="checkboxPublished">
            {{ trans('site.Publish') }}
          </label>
        </div>
      </div>
    </div>

  </div>
</div>

<button type="submit" class="btn btn-primary">{{ trans('site.Save') }}</button>
<a href="{{ route('admin.media.index') }}" class="btn btn-default">{{ trans('site.Back') }}</a>
