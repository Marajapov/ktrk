@include('Front::messages.flash')

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/build.css') }}"/>
@endsection

<div class="row">
  <div class="col-sm-6">
    <div class="form-group">
      <label class="control-label">{{ trans('site.TitleKG') }}</label>
      {!! Form::text('name', null, ["class" => "form-control", "required" => true, "title" => ""]) !!}
    </div>
  </div>

  <div class="col-sm-6">
    <div class="form-group">
      <label class="control-label">{{ trans('site.TitleRU') }}</label>
      {!! Form::text('nameRu', null, ["class" => "form-control", "required" => true, "title" => ""]) !!}
    </div>
  </div>

  <div class="col-sm-6">
    <div class="form-group">
      <label class="control-label">{{ trans('site.TextKG') }}</label>
      {!! Form::textarea('description', null, ["class" => "form-control", "required" => true, "title" => ""]) !!}
    </div>
  </div>

  <div class="col-sm-6">
    <div class="form-group">
      <label class="control-label">{{ trans('site.TextRU') }}</label>
      {!! Form::textarea('descriptionRu', null, ["class" => "form-control", "required" => true, "title" => ""]) !!}
    </div>
  </div>

  <div class="col-sm-12">
    <div class="form-group">
      <label class="control-label" style="display:block;">Миниатюра</label>
      <div class="fileinput fileinput-new" data-provides="fileinput">
        <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
        <div>
          <span class="btn btn-default btn-file">
            <span class="fileinput-new">{{ trans('site.AdminBackgroundSelect') }}</span>
            <span class="fileinput-exists">Заменить</span>
            {!! Form::file('thumbnail', null, []) !!}
          </span>
          <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Удалить</a>
        </div>
      </div>
    </div>
  </div>

  <div class="col-sm-12">

    <div class="form-group">
      <div class="checkbox checkbox-primary ">
        {!! Form::hidden('published', 0) !!}
        {!! Form::checkbox('published', 1, null, ["id" => "checkbox1", "class" => "form-control styled", "style" => "width: 34px; margin: 0"]) !!}
        <label for="checkbox1">
          {{ trans('site.Publish') }}
        </label>
      </div>
    </div>

  </div>

</div>

<button type="submit" class="btn btn-primary">{{ trans('site.Save') }}</button>
<a href="{{ route('admin.project.index') }}" class="btn btn-default">{{ trans('site.Back') }}</a>
