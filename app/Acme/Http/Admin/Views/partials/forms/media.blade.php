@include('Front::messages.flash')

<div class="row">
    <div class="col-sm-10">
        <div class="form-group">
            <label class="control-label">{{ trans('site.Title') }}</label>
            {!! Form::text('name', null, ["class" => "form-control", "required" => true, "title" => ""]) !!}
        </div>
    </div>

    <div class="col-sm-10">
        <div class="form-group">
            <label class="control-label">{{ trans('site.AdminMediaTypeSelect') }}</label>
            {!! Form::select('videoType', \Model\MediaCategory\ModelName::lists('name', 'videoType')->toArray(), null, ["class" => "select2_group form-control", "required" => true, "title" => ""]) !!}
        </div>
    </div>

    <div class="col-sm-10">
        <div class="form-group">
            <label class="control-label">{{ trans('site.Content') }}</label>
            {!! Form::textarea('description', null, ["class" => "form-control", "title" => ""]) !!}
        </div>
    </div>

    <div class="col-sm-10">
        <div class="form-group">
            <label class="control-label">{{ trans('site.AdminMediaURL') }}</label>
            {!! Form::text('url', null, ["class" => "form-control", "title" => ""]) !!}
        </div>
    </div>

    <div class="col-sm-10">
        <div class="form-group">
            <label class="control-label">Тип :{{ trans('site.AdminMediaIMGorVideo') }}</label>
            {!! Form::select('type', ['image'=>'Картинка','video'=>'Видео'], null, ["class" => "select2_group form-control", "required" => true, "title" => ""]) !!}
        </div>
    </div>
    <div class="col-sm-12">
        <div class="form-group">
               <label class="control-label">{{ trans('site.Publish') }}</label>
               {!! Form::hidden('published', 0) !!}
               {!! Form::checkbox('published', 1, null, ["class" => "form-control", "style" => "width: 34px; margin: 0"]) !!}
           </div>
       </div>
   </div>

</div>

<button type="submit" class="btn btn-primary">{{ trans('site.Save') }}</button>

<a href="{{ route('admin.media.index') }}" class="btn btn-default">{{ trans('site.Back') }}</a>

<!-- select2 -->
<script>
    $(document).ready(function () {
        $(".select2_single").select2({
            placeholder: "Select a state",
            allowClear: true
        });
        $(".select2_group").select2({});
        $(".select2_multiple").select2({
            maximumSelectionLength: 4,
            placeholder: "With Max Selection limit 4",
            allowClear: true
        });
    });
</script>
        <!-- /select2 -->