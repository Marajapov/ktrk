@include('Front::messages.flash')

<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label class="control-label">Канал</label>
            {!! Form::select('channel_id', \Model\Channel\ModelName::lists('display', 'id')->toArray(), null, ["class" => "select2_group form-control", "required" => true, "title" => ""]) !!}
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <label class="control-label">Категория</label>
            {!! Form::select('category_id', \Model\Category\ModelName::lists('title', 'id')->toArray(), null, ["class" => "select2_group form-control", "required" => true, "title" => ""]) !!}
        </div>
    </div>

    <div class="col-sm-8">
        <div class="form-group">
            <label class="control-label">{{ trans('site.Title') }}</label>
            {!! Form::text('name', null, ["class" => "form-control", "required" => true, "title" => ""]) !!}
        </div>
    </div>
<!--     <div class="col-xs-12">
        <div class="form-group">
            <label class="control-label">Файл</label>
            {!! Form::file('file', null, ["class" => "form-control", "required" => true]) !!}
        </div>
    </div> -->


    <div class="col-xs-8">
        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
          <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
          <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">{{ trans('site.AdminBannerSelectImg') }}</span><span class="fileinput-exists">{{ trans('site.Change') }}</span>
          {!! Form::file('file', null, ["class" => "form-control", "required" => true]) !!}
      </div>
  </div>
  
  <div class="clearfix"></div>
  <div class="col-sm-1">
    <div class="form-group">
        <label class="control-label">{{ trans('site.Publish') }}</label>
        {!! Form::hidden('published', 0) !!}
        {!! Form::checkbox('published', 1, null, ["class" => "form-control", "style" => "width: 34px; margin: 0"]) !!}
    </div>
</div>

<!-- <div class=" col-md-12 raspoloj">
    <div class="form-group">
        <div class="checkbox checkbox-info">
           <input id="checkbox2" type="checkbox">
           <label class="control-label">Үстү жагында (top)</label>
           {!! Form::hidden('positionTop', 0) !!}         
           {!! Form::checkbox('positionTop', 1, null, ["class" => "checkbox2 form-control", "style" => "width: 34px; margin: 0"]) !!}
           <div class="topbanner"></div>
       </div>
   </div>
</div> -->

<div class=" col-sm-1 ">
    <div class="form-group">
        <label class="control-label">{{ trans('site.Top') }}</label>
        {!! Form::hidden('positionTop', 0) !!}         
        {!! Form::checkbox('positionTop', 1, null, ["class" => " form-control", "style" => "width: 34px; margin: 0"]) !!}
        <div class="topbanner"></div>
    </div>
</div>

<div class="col-sm-1 ">
    <div class="form-group">
        <label class="control-label">{{ trans('site.Center') }}</label>
        {!! Form::hidden('positionCenter', 0) !!}
        {!! Form::checkbox('positionCenter', 1, null, ["class" => "form-control", "style" => "width: 34px; margin: 0"]) !!}
        <div class="centerbanner"></div>
    </div>
</div>

<div class="col-sm-1 ">
    <div class="form-group">
        <label class="control-label">{{ trans('site.Right') }}</label>
        {!! Form::hidden('positionRight', 0) !!}
        {!! Form::checkbox('positionRight', 1, null, ["class" => "form-control", "style" => "width: 34px; margin: 0"]) !!}
        <div class="rightbanner"></div>
    </div>
</div>

<div class="col-sm-1 ">
    <div class="form-group">
        <label class="control-label">{{ trans('site.Left') }}</label>
        {!! Form::hidden('positionLeft', 0) !!}
        {!! Form::checkbox('positionLeft', 1, null, ["class" => "form-control", "style" => "width: 34px; margin: 0"]) !!}
        <div class="leftbanner"></div>
    </div>
</div>


<div class="col-sm-1 ">
    <div class="form-group">
        <label class="control-label">{{ trans('site.Bottom') }}</label>
        {!! Form::hidden('positionBottom', 0) !!}
        {!! Form::checkbox('positionBottom', 1, null, ["class" => "form-control", "style" => "width: 34px; margin: 0"]) !!}
        <div class="bottombanner"></div>
    </div>
</div>
</div>

<button type="submit" class="btn btn-primary">{{ trans('site.Save') }}</button>
<a href="{{ route('admin.banner.index') }}" class="btn btn-default">{{ trans('site.Back') }}</a>

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