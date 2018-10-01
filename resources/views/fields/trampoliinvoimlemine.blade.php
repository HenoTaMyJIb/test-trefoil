<div class="c-content-box c-no-padding  c-bg-img-center">
    <div class="c-content-feature-13">
        <div class="row c-reset c-bg-grey">
            <div class="col-md-6 c-bg-grey">
                <div class="c-feature-13-container">
                    <div class="c-content-title-1">
                        <h3 class="c-font-uppercase c-font-bold">ТRAMPOLIINVÕIMLEMINE</h3>
                        <div class="c-line-left c-theme-bg"></div>
                    </div>
                    <div class="row">
                        <div class="c-feature-13-tile">
                            <i class="icon-info c-theme-font c-font-24"></i>
                            <div class="c-feature-13-content">
                                <h4 class="c-font-uppercase c-theme-font c-font-bold">Mis see on?</h4>
                                <p class="c-font-dark">
                                    Trampoliinvõimlemine (varasema nimega batuudihüpped) on võimlemise ala, mis seisneb akrobaatikast batuudil hüppamise ajal.
                                </p>
                                <p class="c-font-dark">Koosneb kolmest erinevast alast: batuudihüpped, akroraja hüpped ja topelt-trampeti hüpped</p>
                                <p class="c-font-dark">Vaata ka <a href="www.trampolinefield.com">www.trampolinefield.com</a></p>
                                <ul class="c-content-list-1 c-theme c-font-uppercase">
                                        <li>Alates 7 aastat</li>
                                        <li>Tüdrukud ja poisid</li>
                                    </ul>
                            </div>
                        </div>
                        <a href="http://registreeri.trefoil.ee/registration" class="btn c-theme-btn c-btn-square btn-block">REGISTREERI TRENNI</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 c-bg-white" style="padding: 20px">
                <iframe width="800" height="450" src="https://www.youtube.com/embed/T3qzymwJEgA" frameborder="0" allowfullscreen></iframe>
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