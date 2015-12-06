@include('Front::messages.flash')

<div class="row">

  <div class="form-group col-md-4">
    <label class="control-label">Дата</label>
    {!! Form::text('date', null, ["class" => "form-control", "id" => "dateMonday", "required" => true, "title" => ""]) !!}
  </div>

  <div class="form-group col-md-12">
    <label class="control-label">Программа</label>
    {!! Form::textarea('program', null, ["class" => "form-control"]) !!}
  </div>

</div>

<button type="submit" class="btn btn-primary">{{ trans('site.Save') }}</button>
<a href="{{ route('admin.schedule.index') }}" class="btn btn-default">{{ trans('site.Back') }}</a>