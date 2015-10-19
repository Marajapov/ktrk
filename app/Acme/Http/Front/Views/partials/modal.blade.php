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
                                <a class="link" href="#">Баластан</a>
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
                               <a class="live" href="#"><i class="fa fa-dot-circle-o"></i></a>
                           </div>
                       </div>
                    </div>
                    <div class="col-md-4 modal-block">
                        <div>
                            <a href="#">
                                <img src="images/channels/madaniyat.png" alt=""/>
                            </a>
                            <div class="options">
                                <a class="link" href="{{ route('madaniyat.home')}}">Маданият</a>
                                <span class="divider"></span>
                                <a class="live" href="#"><i class="fa fa-dot-circle-o"></i></a>
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
                        <a href="#">
                            <img src="images/channels/kg-radio.png" alt=""/>
                        </a>
                    </div>
                    <div class="col-md-4 modal-block">
                        <a href="#">
                            <img src="images/channels/1-radio.png" alt=""/>
                        </a>
                    </div>
                    <div class="col-md-4 modal-block">
                        <a href="#">
                            <img src="images/channels/dostuk.png" alt=""/>
                        </a>
                    </div>
                    <div class="col-md-4 modal-block">
                        <a href="#">
                            <img src="images/channels/min-kiyal.png" alt=""/>
                        </a>
                    </div>
                    <div class="col-md-4 modal-block">
                        <a href="#">
                            <img src="images/channels/baldar.png" alt=""/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>