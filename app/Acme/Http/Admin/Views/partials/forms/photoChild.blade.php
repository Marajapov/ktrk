@include('Front::messages.flash')

<div class="row">
    <div class="col-sm-10">
        <div class="form-group">
            <label class="control-label">Аталышы</label>
            {!! Form::text('name', null, ["class" => "form-control", "required" => true, "title" => ""]) !!}
        </div>
    </div>

    <div class="col-sm-10">
        <div class="form-group">
            <label class="control-label">Аталышы: Орусча</label>
            {!! Form::text('nameRu', null, ["class" => "form-control", "required" => true, "title" => ""]) !!}
        </div>
    </div>

    <div class="col-sm-10">
        <div class="form-group">
            <label class="control-label">Сүрөт галереясын тандаңыз</label>
            {!! Form::select('parentId', \Model\PhotoParent\ModelName::lists('name', 'id')->toArray(), null, ["class" => "select2_group form-control", "required" => true, "title" => ""]) !!}
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
          <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Сүрөттү тандоо</span><span class="fileinput-exists">Өзгөртүү</span>
          {!! Form::file('file', null, ["class" => "form-control", "required" => true]) !!}
      </div>
  </div>

</div>

<button type="submit" class="btn btn-primary">сактоо</button>

<a href="{{ route('admin.photoParent.index') }}" class="btn btn-default">артка</a>

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