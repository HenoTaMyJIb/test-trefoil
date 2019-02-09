<div class="c-content-box c-no-padding  c-bg-img-center">
    <div class="c-content-feature-13">
        <div class="row c-reset c-bg-grey">
            <div class="col-md-6 c-bg-grey">
                <div class="c-feature-13-container">
                    <div class="c-content-title-1">
                        <h3 class="c-font-uppercase c-font-bold">Show rühm</h3>
                        <div class="c-line-left c-theme-bg"></div>
                    </div>
                    <div class="row">
                        <div class="c-feature-13-tile">
                            <i class="icon-info c-theme-font c-font-24"></i>
                            <div class="c-feature-13-content">
                                <h4 class="c-font-uppercase c-theme-font c-font-bold">Mis see on?</h4>
                                <p class="c-font-dark">
                                    Ootame trenni poisse ja tüdrukuid, kellele meeldib esineda ning kes tahab osa võtta ainulaadsest show programmist. Meie programmid
                                    ühendavad endas tantsu ja akrobaatilisi elemente.
                                </p>
                            </div>
                        </div>
                        <div class="c-feature-13-tile">
                            <div class="c-feature-13-content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul class="c-content-list-1 c-theme c-font-uppercase">
                                            <li>Akrobaatika</li>
                                            <li>Tantsud</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="c-content-list-1 c-theme c-font-uppercase">
                                            <li>Alates 12 aastast</li>
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
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/z3YxQn-K_q0" frameborder="0" allowfullscreen></iframe>
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