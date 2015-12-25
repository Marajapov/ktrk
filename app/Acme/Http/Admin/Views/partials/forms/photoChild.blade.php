@include('Front::messages.flash')
@section('styles')
  <link rel="stylesheet" href="{{ asset('css/bootstrap-select.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/build.css') }}"/>
@endsection

<div class="panel panel-success">
    <div class="panel-body">

        <div class="form-group">
            <label class="col-sm-2 control-label">{{ trans('site.TitleKG') }}</label>
            <div class="col-sm-10">
                {!! Form::text('name', null, ["class" => "form-control", "required" => true, "title" => ""]) !!}
            </div>
        </div>

            
        <div class="form-group">
            <label class="col-sm-2 control-label">{{ trans('site.TitleRU') }}</label>
            <div class="col-sm-10">
                {!! Form::text('nameRu', null, ["class" => "form-control", "required" => true, "title" => ""]) !!}
            </div>
        </div>
            
         
        <div class="form-group">
            <label class="col-sm-2 control-label">{{ trans('site.AdminPhotoChildSelectGaller') }}</label>
            <div class="col-sm-10">
                {!! Form::select('parentId', array('0'=>'--Выберите--')+ $PhotoParentList, null, ["class" => "select2_group form-control", "title" => ""]) !!}
            </div>        
        </div>
            

        
        <div class="form-group">
            <label class="col-sm-2 control-label">Источник на кыргызском</label>
            <div class="col-sm-10">
                {!! Form::text('description', null, ["class" => "form-control", "title" => ""]) !!}
            </div>
        </div>
            

            
        <div class="form-group">
            <label class="col-sm-2 control-label">Источник на русском</label>
            <div class="col-sm-10">
                {!! Form::text('descriptionRu', null, ["class" => "form-control", "title" => ""]) !!}
            </div>
        </div>
           

            
        <div class="form-group">
            <label class="col-sm-2 control-label">Таг на кыргызском</label>
            <div class="col-sm-10">
                {!! Form::text('photoTag', null, ["class" => "form-control", "required" => true, "title" => ""]) !!}
            </div>
        </div>
            

            
        <div class="form-group">
            <label class="col-sm-2 control-label">Таг на русском</label>
            <div class="col-sm-10">
                {!! Form::text('photoTagRu', null, ["class" => "form-control", "required" => true, "title" => ""]) !!}
            </div>
        </div>
          
        <!--<div class="col-xs-12">
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

        </div>

    </div>
</div>

<button type="submit" class="btn btn-primary">{{ trans('site.Save') }}</button>

    <a href="{{ route('admin.photoChild.index') }}" class="btn btn-default">{{ trans('site.Back') }}</a>

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