<div class="modal fade" id="tvModal" tabindex="-1" role="dialog" aria-labelledby="tvModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="tvModalLabel">Телеканалдар</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4 modal-block">
                        <div>
                            <a href="{{ route('balastan.home')}}">
                                <img src="images/channels/balastan.png" alt=""/>
                            </a>
                            <div class="options">
                                <a class="link" href="{{ route('balastan.home')}}">Баластан</a>
                                <span class="divider"></span>
                                <a class="live" href="{{ route('balastan.home')}}"><i class="fa fa-dot-circle-o"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 modal-block">
                       <div>
                           <a href="{{ route('muzkanal.home')}}">
                               <img src="images/channels/muztv.png" alt=""/>
                           </a>
                           <div class="options">
                               <a class="link" href="{{ route('muzkanal.home')}}">Музыка</a>
                               <span class="divider"></span>
                               <a class="live" href="{{ route('muzkanal.home')}}"><i class="fa fa-dot-circle-o"></i></a>
                           </div>
                       </div>
                    </div>
                    <div class="col-md-4 modal-block">
                        <div>
                            <a href="{{ route('madaniyat.home')}}">
                                <img src="images/channels/madaniyat.png" alt=""/>
                            </a>
                            <div class="options">
                                <a class="link" href="{{ route('madaniyat.home')}}">Маданият</a>
                                <span class="divider"></span>
                                <a class="live" href="{{ route('madaniyat.home')}}"><i class="fa fa-dot-circle-o"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="radioModal" tabindex="-1" role="dialog" aria-labelledby="radioModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="radioModalLabel">Радиостанциялар</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4 modal-block">
                        <a href="{{ route('kyrgyzradio.home') }}">
                            <img src="images/channels/kg-radio.png" alt=""/>
                        </a>
                    </div>
                    <div class="col-md-4 modal-block">
                        <a href="{{ route('birinchi.home') }}">
                            <img src="images/channels/1-radio.png" alt=""/>
                        </a>
                    </div>
                    <div class="col-md-4 modal-block">
                        <a href="{{ route('dostuk.home') }}">
                            <img src="images/channels/dostuk.png" alt=""/>
                        </a>
                    </div>
                    <div class="col-md-4 modal-block">
                        <a href="{{ route('minkiyal.home') }}">
                            <img src="images/channels/min-kiyal.png" alt=""/>
                        </a>
                    </div>
                    <div class="col-md-4 modal-block">
                        <a href="{{ route('baldar.home') }}">
                            <img src="images/channels/baldar.png" alt=""/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="liveModal" tabindex="-1" role="dialog" aria-labelledby="liveModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="liveModalLabel">Түз эфир - КТРК</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 modal-block">
                        <!-- the second player. uses the same video here but could be different -->
                        <a class="rtmp" href="mp4:bbb-800"
                           style="background-image:url(images/live_bg.png)">
                            <img src="images/live_play.png" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>