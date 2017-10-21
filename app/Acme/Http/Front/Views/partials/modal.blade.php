@if(session('flag') == 1 )
<div class="modal fade" id="liveModal" tabindex="-1" role="dialog" aria-labelledby="liveModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button id="playerStop" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="liveModalLabel">{{ trans('site.Live') }} - КТРК</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 modal-block">
                      <div id="player"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@else
<div class="modal fade" id="liveModal" tabindex="-1" role="dialog" aria-labelledby="liveModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button id="playerStop" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="liveModalLabel">{{ trans('site.Live') }} - КТРК</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 modal-block">
                      <div style="height: 200px; width: 100%; text-align: center; padding-top: 100px;">
                          Трансляция заблокирована в Вашей стране!
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif