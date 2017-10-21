@include('Front::messages.flash')
@section('styles')
    <meta name="_token" content="{!! csrf_token() !!}"/>

    <!-- Include Editor style. -->
    <link href="{{ asset('froala/css/froala_editor.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('froala/css/froala_style.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap-select.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/build.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/admin/tokenfield-typeahead.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/admin/bootstrap-tokenfield.css') }}"/>

    <!-- Include Editor Plugins style. -->
    <link rel="stylesheet" href="{{ asset('froala/css/plugins/char_counter.css')}}">
    <link rel="stylesheet" href="{{ asset('froala/css/plugins/code_view.css')}}">
    <link rel="stylesheet" href="{{ asset('froala/css/plugins/colors.css')}}">
    <link rel="stylesheet" href="{{ asset('froala/css/plugins/emoticons.css')}}">
    <link rel="stylesheet" href="{{ asset('froala/css/plugins/file.css')}}">
    <link rel="stylesheet" href="{{ asset('froala/css/plugins/fullscreen.css')}}">
    <link rel="stylesheet" href="{{ asset('froala/css/plugins/image.css')}}">
    <link rel="stylesheet" href="{{ asset('froala/css/plugins/image_manager.css')}}">
    <link rel="stylesheet" href="{{ asset('froala/css/plugins/line_breaker.css')}}">
    <link rel="stylesheet" href="{{ asset('froala/css/plugins/table.css')}}">
    <link rel="stylesheet" href="{{ asset('froala/css/plugins/video.css')}}">
@endsection

<div class="panel panel-success">
  <div class="panel-body">
      <div class="form-group">
          <label class="col-sm-2 control-label">Аталышы KG</label>
          <div class="col-sm-5">
            {!! Form::text('title', null, ["class" => "form-control", "required" => true, "title" => ""]) !!}
          </div>
      </div>
      <div class="form-group">
          <label class="col-sm-2 control-label">Аталышы RU</label>
          <div class="col-sm-5">
            {!! Form::text('titleRu', null, ["class" => "form-control", "required" => true, "title" => ""]) !!}
          </div>
      </div>
      <div class="form-group">
          <label class="col-sm-2 control-label">{{ trans('site.TextKG') }}</label>
          <div class="col-sm-10">
              {!! Form::textarea('content', null, ["class" => "form-control", "id" => "editKg"]) !!}
          </div>
      </div>
      <div class="form-group">
          <label class="col-sm-2 control-label">{{ trans('site.TextRU') }}</label>
          <div class="col-sm-10">
              {!! Form::textarea('contentRu', null, ["class" => "form-control", "id" => "editRu"]) !!}
          </div>
      </div>

      <!-- Thumb -->
      <div class="form-group">
          <label for="parentId" class="col-sm-2 control-label">Миниатюра</label>
          <div class="col-sm-10">
              <div class="fileinput fileinput-new" data-provides="fileinput">
                  <div class="fileinput-new thumbnail" style="width: 250px; height: 150px;">
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

      <div class="col-sm-2 col-sm-offset-2">
        <div class="form-group">
             <label class="control-label">{{ trans('site.Publish') }}</label>
             {!! Form::hidden('published', 0) !!}
             {!! Form::checkbox('published', 1, null, ["class" => "form-control", "style" => "width: 34px; margin: 0"]) !!}
         </div>
     </div>
  </div>
</div>


<button type="submit" class="btn btn-primary">{{ trans('site.Save') }}</button>
<a href="{{ route('admin.stream.index') }}" class="btn btn-default">{{ trans('site.Back') }}</a>


