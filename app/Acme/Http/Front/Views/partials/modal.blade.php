<!-- Modals -->
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
                        <a href="{{ route('balastan.home')}}">
                            <img src="{{ asset('images/channels/balastan.jpg') }}" alt=""/>
                        </a>
                    </div>
                    <div class="col-md-4 modal-block">
                        <a href="{{ route('muzkanal.home')}}">
                            <img src="{{ asset('images/channels/muztv.jpg') }}" alt=""/>
                        </a>
                    </div>
                    <div class="col-md-4 modal-block">
                        <a href="{{ route('madaniyat.home')}}">
                            <img src="{{ asset('images/channels/madaniyat.jpg') }}" alt=""/>
                        </a>
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
                            <img src="{{ asset('images/channels/kg-radio.png') }}" alt=""/>
                        </a>
                    </div>
                    <div class="col-md-4 modal-block">
                        <a href="#">
                            <img src="{{ asset('images/channels/1-radio.png') }}" alt=""/>
                        </a>
                    </div>
                    <div class="col-md-4 modal-block">
                        <a href="#">
                            <img src="{{ asset('images/channels/dostuk.png') }}" alt=""/>
                        </a>
                    </div>
                    <div class="col-md-4 modal-block">
                        <a href="#">
                            <img src="{{ asset('images/channels/min-kiyal.png') }}" alt=""/>
                        </a>
                    </div>
                    <div class="col-md-4 modal-block">
                        <a href="#">
                            <img src="{{ asset('images/channels/baldar.png') }}" alt=""/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>