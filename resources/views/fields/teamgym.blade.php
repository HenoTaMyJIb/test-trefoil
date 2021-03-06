<div class="c-content-box c-no-padding  c-bg-img-center">
    <div class="c-content-feature-13">
        <div class="row c-reset c-bg-grey">
            <div class="col-md-6 c-bg-grey">
                <div class="c-feature-13-container">
                    <div class="c-content-title-1">
                        <h3 class="c-font-uppercase c-font-bold">TeamGym</h3>
                        <div class="c-line-left c-theme-bg"></div>
                    </div>
                    <div class="row">
                        <div class="c-feature-13-tile">
                            <i class="icon-info c-theme-font c-font-24"></i>
                            <div class="c-feature-13-content">
                                <h4 class="c-font-uppercase c-theme-font c-font-bold">Mis see on?</h4>
                                <p class="c-font-dark">
                                    Akrobaatiline rühmvõimlemine, Euroopas tuntud TeamGym nime all, on oma alguse saanud Põhjamaades, kus seda ala on harrastatud
                                    ligikaudu kolmkümmend aastat. Eestis on alaga tegeletud alates 1995 aastast.
                                </p>
                                <p class="c-font-dark">
                                    Vaata veel 
                                </p>
                                <p style="margin-bottom: 0"><a href="http://tgestonia.trefoil.ee" target="_blank">http://tgestonia.trefoil.ee</a></p>
                                <p><a href="http://www.ueg.org/en/teamgym-ueg" target="_blank">http://www.ueg.org/en/teamgym-ueg</a></p>
                            </div>
                        </div>
                        <div class="c-feature-13-tile">
                            <div class="c-feature-13-content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul class="c-content-list-1 c-theme c-font-uppercase">
                                            <li>Akrobaatika</li>
                                            <li>Trampett</li>
                                            <li>Vabaharjutus</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="c-content-list-1 c-theme c-font-uppercase">
                                            <li>Alates 7 aastat</li>
                                            <li>Tüdrukud ja poisid</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="https://registreeri.trefoil.ee" class="btn c-theme-btn c-btn-square btn-block">REGISTREERI PROOVITRENNI</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 c-bg-white" style="padding: 20px">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Di2_FYoRUnI" frameborder="0" allowfullscreen></iframe>
                </div>
                @if(isset($photos))
                    <div id="gallery-container" class="justified-gallery">
                        @foreach($photos as $photo)
                            <a href="{{url('storage/pages/'.$slug.'/'.$photo->getFilename())}}" class="" rel="gallery1">
                                <img src="{{\Storage::url('pages/'.$slug.'/'.$photo->getFilename())}}" alt="">
                            </a>
                        @endforeach
                    </div>
                @endif 
            </div>
        </div>
    </div>
</div>