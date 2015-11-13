@include('Front::messages.flash')

<div class="row">
    <div class="col-sm-10">
        <div class="form-group">
            <label class="control-label">Тема на кыргызском</label>
            {!! Form::text('title', null, ["class" => "form-control", "required" => true, "title" => ""]) !!}
        </div>
    </div>

    <div class="col-sm-10">
        <div class="form-group">
            <label class="control-label">Тема на русском</label>
            {!! Form::text('titleRu', null, ["class" => "form-control", "required" => true]) !!}
        </div>
    </div>


    <div class="col-sm-2">
        <div class="form-group">
               <label class="control-label">Жайгаштыруу</label>
               {!! Form::hidden('published', 0) !!}
               {!! Form::checkbox('published', 1, null, ["class" => "form-control", "style" => "width: 34px; margin: 0"]) !!}
           </div>
       </div>
   </div>


</div>

<button type="submit" class="btn btn-primary">сактоо</button>
<a href="{{ route('admin.category.index') }}" class="btn btn-default">артка</a>
