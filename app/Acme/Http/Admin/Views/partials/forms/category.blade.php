@include('Front::messages.flash')

<div class="row">
    <div class="col-sm-10">
        <div class="form-group">
            <label class="control-label">{{ trans('site.AdminCategoryTitlekg') }}</label>
            {!! Form::text('title', null, ["class" => "form-control", "required" => true, "title" => ""]) !!}
        </div>
    </div>

    <div class="col-sm-10">
        <div class="form-group">
            <label class="control-label">{{ trans('site.AdminCategoryTitleru') }}</label>
            {!! Form::text('titleRu', null, ["class" => "form-control", "required" => true]) !!}
        </div>
    </div>


    <div class="col-sm-2">
        <div class="form-group">
               <label class="control-label">{{ trans('site.Publish') }}</label>
               {!! Form::hidden('published', 0) !!}
               {!! Form::checkbox('published', 1, null, ["class" => "form-control", "style" => "width: 34px; margin: 0"]) !!}
           </div>
       </div>
   </div>


</div>

<button type="submit" class="btn btn-primary">{{ trans('site.Save') }}</button>
<a href="{{ route('admin.category.index') }}" class="btn btn-default">{{ trans('site.Back') }}</a>
