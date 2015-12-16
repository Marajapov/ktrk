@include('Front::messages.flash')

<div class="row">
    <div class="col-sm-10">
        <div class="form-group">
            <label class="control-label">{{ trans('site.TitleKG') }}</label>
            {!! Form::text('name', null, ["class" => "form-control", "required" => true, "title" => ""]) !!}
        </div>
    </div>

    <div class="col-sm-10">
        <div class="form-group">
            <label class="control-label">{{ trans('site.TitleRU') }}</label>
            {!! Form::text('nameRu', null, ["class" => "form-control", "required" => true, "title" => ""]) !!}
        </div>
    </div>

    <div class="col-sm-10">
        <div class="form-group">
            <label class="control-label">Описание на кыргызском</label>
            {!! Form::text('description', null, ["class" => "form-control", "title" => ""]) !!}
        </div>
    </div>

    <div class="col-sm-10">
        <div class="form-group">
            <label class="control-label">Описание на русском</label>
            {!! Form::text('descriptionRu', null, ["class" => "form-control", "title" => ""]) !!}
        </div>
    </div>

    <div class="col-sm-10">
        <div class="form-group">
            <label class="control-label">Автор картинок на кыргызском</label>
            {!! Form::text('author', null, ["class" => "form-control", "title" => ""]) !!}
        </div>
    </div>

    <div class="col-sm-10">
        <div class="form-group">
            <label class="control-label">Автор картинок на русском</label>
            {!! Form::text('authorRu', null, ["class" => "form-control", "title" => ""]) !!}
        </div>
    </div>

    <div class="col-xs-12">
        <div class="form-group">
            <label class="control-label" style="display:block;">Миниатюра</label>
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
                <div>
                    <span class="btn btn-default btn-file"><span class="fileinput-new">{{ trans('site.AdminBackgroundSelect') }}</span>
                    <span class="fileinput-exists">{{ trans('site.Change') }}</span>
                    {!! Form::file('status', null, ["class" => "form-control"]) !!}
                </div>
            </div>
        </div>
    </div>

    <div class="col-xs-12">
        <div class="form-group">
            <label class="control-label">Картинки</label>
      <!--       {!! Form::file('file', array('multiple'=>true), ["class" => "form-control", "required" => true]) !!} -->
            {!! Form::file('images[]', array('multiple'=>true)) !!}
        </div>
    </div>

    <!-- main -->
      <div class="form-group">
        <label for="parentId" class="col-sm-2 control-label"></label>
        <div class="col-sm-10">
          <div class="checkbox checkbox-primary ">
            {!! Form::hidden('extracolumn', 0) !!}
            {!! Form::checkbox('extracolumn', 1, null, ["id" => "extracolumn", "class" => "form-control styled", "style" => "width: 34px; margin: 0"]) !!}
            <label for="extracolumn">
              {{ trans('site.AdminHomeTitle') }}
            </label>
          </div>
        </div>
      </div>

    <!-- ns -->
      <div class="form-group">
        <label for="parentId" class="col-sm-2 control-label"></label>
        <div class="col-sm-10">
          <div class="checkbox checkbox-primary ">
            {!! Form::hidden('ns', 0) !!}
            {!! Form::checkbox('ns', 1, null, ["id" => "ns", "class" => "form-control styled", "style" => "width: 34px; margin: 0"]) !!}
            <label for="ns">
              Наблюдательный совет
            </label>
          </div>
        </div>
      </div>

      <!-- rs -->
      <div class="form-group">
        <label for="parentId" class="col-sm-2 control-label"></label>
        <div class="col-sm-10">
          <div class="checkbox checkbox-primary ">
            {!! Form::hidden('rs', 0) !!}
            {!! Form::checkbox('rs', 1, null, ["id" => "rs", "class" => "form-control styled", "style" => "width: 34px; margin: 0"]) !!}
            <label for="rs">
              Редакционный совет
            </label>
          </div>
        </div>
      </div>

      <!-- director -->
      <div class="form-group">
        <label for="parentId" class="col-sm-2 control-label"></label>
        <div class="col-sm-10">
          <div class="checkbox checkbox-primary ">
            {!! Form::hidden('director', 0) !!}
            {!! Form::checkbox('director', 1, null, ["id" => "director", "class" => "form-control styled", "style" => "width: 34px; margin: 0"]) !!}
            <label for="director">
              Страница Ген. директора
            </label>
          </div>
        </div>
      </div>

      <!-- muzkanal -->
      <div class="form-group">
        <label for="parentId" class="col-sm-2 control-label"></label>
        <div class="col-sm-10">
          <div class="checkbox checkbox-primary ">
            {!! Form::hidden('muzkanal', 0) !!}
            {!! Form::checkbox('muzkanal', 1, null, ["id" => "muzkanal", "class" => "form-control styled", "style" => "width: 34px; margin: 0"]) !!}
            <label for="muzkanal">
              Муз канал
            </label>
          </div>
        </div>
      </div>

      <!-- kyrgyzradio -->
      <div class="form-group">
        <label for="parentId" class="col-sm-2 control-label"></label>
        <div class="col-sm-10">
          <div class="checkbox checkbox-primary ">
            {!! Form::hidden('kyrgyzradio', 0) !!}
            {!! Form::checkbox('kyrgyzradio', 1, null, ["id" => "kyrgyzradio", "class" => "form-control styled", "style" => "width: 34px; margin: 0"]) !!}
            <label for="kyrgyzradio">
              Кыргыз радио
            </label>
          </div>
        </div>
      </div>

      <!-- kyrgyzradio -->
      <div class="form-group">
        <label for="parentId" class="col-sm-2 control-label"></label>
        <div class="col-sm-10">
          <div class="checkbox checkbox-primary ">
            {!! Form::hidden('kyrgyzradio', 0) !!}
            {!! Form::checkbox('kyrgyzradio', 1, null, ["id" => "kyrgyzradio", "class" => "form-control styled", "style" => "width: 34px; margin: 0"]) !!}
            <label for="kyrgyzradio">
              Кыргыз радио
            </label>
          </div>
        </div>
      </div>

      <!-- birinchi -->
      <div class="form-group">
        <label for="parentId" class="col-sm-2 control-label"></label>
        <div class="col-sm-10">
          <div class="checkbox checkbox-primary ">
            {!! Form::hidden('birinchi', 0) !!}
            {!! Form::checkbox('birinchi', 1, null, ["id" => "birinchi", "class" => "form-control styled", "style" => "width: 34px; margin: 0"]) !!}
            <label for="birinchi">
              Биринчи радио
            </label>
          </div>
        </div>
      </div>

      <!-- balastan -->
      <div class="form-group">
        <label for="parentId" class="col-sm-2 control-label"></label>
        <div class="col-sm-10">
          <div class="checkbox checkbox-primary ">
            {!! Form::hidden('balastan', 0) !!}
            {!! Form::checkbox('balastan', 1, null, ["id" => "balastan", "class" => "form-control styled", "style" => "width: 34px; margin: 0"]) !!}
            <label for="balastan">
              Баластан
            </label>
          </div>
        </div>
      </div>

      <!-- madaniyat -->
      <div class="form-group">
        <label for="parentId" class="col-sm-2 control-label"></label>
        <div class="col-sm-10">
          <div class="checkbox checkbox-primary ">
            {!! Form::hidden('madaniyat', 0) !!}
            {!! Form::checkbox('madaniyat', 1, null, ["id" => "madaniyat", "class" => "form-control styled", "style" => "width: 34px; margin: 0"]) !!}
            <label for="madaniyat">
              Маданият
            </label>
          </div>
        </div>
      </div>

      <!-- minkiyal -->
      <div class="form-group">
        <label for="parentId" class="col-sm-2 control-label"></label>
        <div class="col-sm-10">
          <div class="checkbox checkbox-primary ">
            {!! Form::hidden('minkiyal', 0) !!}
            {!! Form::checkbox('minkiyal', 1, null, ["id" => "minkiyal", "class" => "form-control styled", "style" => "width: 34px; margin: 0"]) !!}
            <label for="minkiyal">
              Мин кыял
            </label>
          </div>
        </div>
      </div>



</div>

<button type="submit" class="btn btn-primary">{{ trans('site.Save') }}</button>

<a href="{{ route('admin.photoParent.index') }}" class="btn btn-default">{{ trans('site.Back') }}</a>
