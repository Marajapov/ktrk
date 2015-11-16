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
                      <div data-live="true"
                           data-ratio="0.5625"
                           class="flowplayer fixed-controls">

                        <video data-title="Live stream">
                          <source type="application/x-mpegurl"
                                  src="http://wms.shared.streamshow.it/canale8/canale8/playlist.m3u8">
                        </video>

                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>