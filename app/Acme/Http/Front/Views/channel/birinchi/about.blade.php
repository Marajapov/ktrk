@extends('Front::channel.birinchi.default')
@section('title', "About")
@section('styles')
@endsection
@section('content')
<div class="birinchiradio">

 @include('Front::channel.birinchi.nav')
    <div class="container">
      <div class="row">
         <div class="col-md-12">            
            <div class="row">
              <div class="panel">
                 <div class="panel-heading">
                    <h3 class="panel-title"><span>{{ trans('radiopages.About') }}</span></h3>
                 </div>
                  <div class="panel-body aboutnumber" style="padding:10px">
                    <p>{{ trans('radiopages.AboutText1') }} </p>
                    <p>{{ trans('radiopages.AboutText2') }}</p>    
                    <p>{{ trans('radiopages.AboutText3') }}</p>    
                    <p>{{ trans('radiopages.AboutText4') }}</p>    
                    <p><h3 class="text-center">{{ trans('radiopages.AboutText5') }}</h3></p>
                    <p>{{ trans('radiopages.AboutText6') }}</p>
                    <p>{{ trans('radiopages.AboutText7') }}</p>
                    <p>{{ trans('radiopages.AboutText8') }}</p>  
                  </div>
              </div> 
            </div>    
         </div>
      </div>
   </div>
</div>

@stop