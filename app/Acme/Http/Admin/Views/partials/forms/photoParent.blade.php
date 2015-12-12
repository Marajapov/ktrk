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

</div>

<button type="submit" class="btn btn-primary">{{ trans('site.Save') }}</button>

<a href="{{ route('admin.photoParent.index') }}" class="btn btn-default">{{ trans('site.Back') }}</a>
