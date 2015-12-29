@include('Front::messages.flash')

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/bootstrap-select.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/build.css') }}"/>
@endsection

<div class="panel panel-success">
    <div class="panel-body">
        <div class="form-group">
            <label class="col-sm-2 control-label">Канал</label>
            <div class="col-sm-10">
                {!! Form::select('channel_id', \Model\Channel\ModelName::lists('display', 'id')->toArray(), null, ["class" => "select2_group form-control", "required" => true, "title" => ""]) !!}               
            </div>
        </div>

        
        <div class="form-group">
            <label class="col-sm-2 control-label">{{ trans('site.Title') }}</label>
            <div class="col-sm-10">
                {!! Form::text('name', null, ["class" => "form-control", "required" => true, "title" => ""]) !!}
            </div>
        </div>
        

        
        <div class="form-group">
            <label class="col-sm-2 control-label">Ссылка</label>
            <div class="col-sm-10">
                {!! Form::text('linkTo', null, ["class" => "form-control", "required" => true, "title" => ""]) !!}
            </div>
        </div>
        
    <!--     <div class="col-xs-12">
            <div class="form-group">
                <label class="control-label">Файл</label>
                {!! Form::file('file', null, ["class" => "form-control", "required" => true]) !!}
            </div>
        </div> -->


        <div class="form-group">
            <label for="file" class="col-sm-2 control-label">Фото</label>
            <div class="col-sm-10">
                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                  <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                  <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">{{ trans('site.AdminBannerSelectImg') }}</span><span class="fileinput-exists">{{ trans('site.Change') }}</span>
                  {!! Form::file('file', null, ["class" => "form-control", "required" => true]) !!}
                </div>
            </div>
        </div>
      
        <div class="row">
            <div class="clearfix"></div>
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

            <div class="form-group">
                <label for="parentId" class="col-sm-2 control-label"></label>
                <div class="col-sm-2">
                  <div class="checkbox checkbox-primary ">
                    {!! Form::hidden('positionTop', 0) !!}         
                    {!! Form::checkbox('positionTop', 1, null, ["class" => " form-control", "style" => "width: 34px; margin: 0"]) !!}
                    <label for="extracolumn">
                      {{ trans('site.Top') }}
                    </label>
                  </div>
                </div>
            </div>

            <!-- <div class=" col-md-12 raspoloj">
                <div class="form-group">
                    <div class="checkbox checkbox-info">
                       <input id="checkbox2" type="checkbox">
                       <label class="control-label">Үстү жагында (top)</label>
                       {!! Form::hidden('positionTop', 0) !!}         
                       {!! Form::checkbox('positionTop', 1, null, ["class" => "form-control styled", "style" => "width: 34px; margin: 0"]) !!}
                       
                   </div>
               </div>
            </div> -->

            <div class=" col-sm-2">
                <div class="form-group">
                    <label class="control-label">{{ trans('site.Top') }}</label>
                    {!! Form::hidden('positionTop', 0) !!}         
                    {!! Form::checkbox('positionTop', 1, null, ["class" => " form-control", "style" => "width: 34px; margin: 0"]) !!}
                    <div class="topbanner"></div>
                </div>
            </div>

            <div class="col-sm-2">
                <div class="form-group">
                    <label class="control-label">{{ trans('site.Center') }}</label>
                    {!! Form::hidden('positionCenter', 0) !!}
                    {!! Form::checkbox('positionCenter', 1, null, ["class" => "form-control", "style" => "width: 34px; margin: 0"]) !!}
                    <div class="centerbanner"></div>
                </div>
            </div>

            <div class="col-sm-2">
                <div class="form-group">
                    <label class="control-label">{{ trans('site.Right') }}</label>
                    {!! Form::hidden('positionRight', 0) !!}
                    {!! Form::checkbox('positionRight', 1, null, ["class" => "form-control", "style" => "width: 34px; margin: 0"]) !!}
                    <div class="rightbanner"></div>
                </div>
            </div>

            <div class="col-sm-2">
                <div class="form-group">
                    <label class="control-label">{{ trans('site.Left') }}</label>
                    {!! Form::hidden('positionLeft', 0) !!}
                    {!! Form::checkbox('positionLeft', 1, null, ["class" => "form-control", "style" => "width: 34px; margin: 0"]) !!}
                    <div class="leftbanner"></div>
                </div>
            </div>


            <div class="col-sm-2">
                <div class="form-group">
                    <label class="control-label">{{ trans('site.Bottom') }}</label>
                    {!! Form::hidden('positionBottom', 0) !!}
                    {!! Form::checkbox('positionBottom', 1, null, ["class" => "form-control", "style" => "width: 34px; margin: 0"]) !!}
                    <div class="bottombanner"></div>
                </div>
            </div>
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