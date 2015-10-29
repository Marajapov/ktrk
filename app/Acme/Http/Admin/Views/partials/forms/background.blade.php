    @include('Front::messages.flash')

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label class="control-label">Канал</label>
                {!! Form::select('channel_id', \Model\Channel\ModelName::lists('display', 'id')->toArray(), null, ["class" => "form-control", "required" => true, "title" => ""]) !!}
            </div>
        </div>

        <div class="col-sm-10">
            <div class="form-group">
                <label class="control-label">Аталышы</label>
                {!! Form::text('name', null, ["class" => "form-control", "required" => true, "title" => ""]) !!}
            </div>
        </div>


 <!--    <div class="col-sm-2">
            <div class="form-group">
            <div class="checkbox checkbox-primary">
            <input id="checkbox2" type="checkbox">
                <label for="checkbox2">опубликовать</label>
                {!! Form::hidden('published', 0) !!}
                {!! Form::checkbox('published', 1, null, ["class" => "form-control", "style" => "width: 34px; margin: 0"]) !!}
            </div>
             </div>
         </div> -->

        <div class="col-sm-2">
            <div class="form-group">
                <label class="control-label">Жайгаштыруу</label>
                {!! Form::hidden('published', 0) !!}
                {!! Form::checkbox('published', 1, null, ["class" => "form-control", "style" => "width: 34px; margin: 0"]) !!}
            </div>
        </div>

        <div class="col-xs-12">
            <div class="form-group">
                <label class="control-label">Файл</label>
                {!! Form::file('file', null, ["class" => "form-control", "required" => true]) !!}
            </div>
        </div>

    </div>

    <button type="submit" class="btn btn-primary">сактоо</button>
    <a href="{{ route('admin.background.index') }}" class="btn btn-default">артка</a>
