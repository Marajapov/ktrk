@include('Front::messages.flash')

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/build.css') }}"/>
@endsection

<div class="panel panel-success">
  <div class="panel-body">

    <div class="form-group">
      <label for="channel_id" class="col-sm-2 control-label">{{ trans('site.TitleKG') }}</label>
      <div class="col-sm-10">
        {!! Form::text('name', null, ["class" => "form-control", "required" => true, "title" => ""]) !!}
      </div>
    </div>

    <div class="form-group">
      <label for="channel_id" class="col-sm-2 control-label">{{ trans('site.TextKG') }}</label>
      <div class="col-sm-10">
        {!! Form::textarea('description', null, ["class" => "form-control", "title" => ""]) !!}
      </div>
    </div>

    <div class="form-group">
      <label for="channel_id" class="col-sm-2 control-label">{{ trans('site.TitleRU') }}</label>
      <div class="col-sm-10">
        {!! Form::text('nameRu', null, ["class" => "form-control", "required" => true, "title" => ""]) !!}
      </div>
    </div>

    <div class="form-group">
      <label for="channel_id" class="col-sm-2 control-label">{{ trans('site.TextRU') }}</label>
      <div class="col-sm-10">
        {!! Form::textarea('descriptionRu', null, ["class" => "form-control", "title" => ""]) !!}
      </div>
    </div>

    <div class="form-group">
      <label for="parentId" class="col-sm-2 control-label">Миниатюра</label>
      <div class="col-sm-10">
        <div class="fileinput fileinput-new" data-provides="fileinput">
          <div class="fileinput-new thumbnail" style="width: 250px; height: 150px;">
            @if(isset($project->thumbnail))<img src="{{ asset($project->thumbnail) }}" alt="...">@endif
          </div>
          <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 250px; max-height: 150px;"></div>
          <div>
                <span class="btn btn-default btn-file">
                  <span class="fileinput-new">{{ trans('site.AdminBackgroundSelect') }}</span>
                  <span class="fileinput-exists">{{ trans('site.Change') }}</span>
                  {!! Form::file('thumbnail', null, ["class" => "form-control"]) !!}
                </span>
            <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">{{ trans('site.Delete') }}</a>
          </div>
        </div>
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
<a href="{{ route('admin.project.index') }}" class="btn btn-default">{{ trans('site.Back') }}</a>
