<div class="c-content-box c-no-padding  c-bg-img-center">
    <div class="c-content-feature-13">
        <div class="row c-reset c-bg-grey">
            <div class="col-md-6 c-bg-grey">
                <div class="c-feature-13-container">
                    <div class="c-content-title-1">
                        <h3 class="c-font-uppercase c-font-bold">Trefoil Kids</h3>
                        <div class="c-line-left c-theme-bg"></div>
                    </div>
                    <div class="row">
                        <div class="c-feature-13-tile">
                            <i class="icon-info c-theme-font c-font-24"></i>
                            <div class="c-feature-13-content">
                                <h4 class="c-font-uppercase c-theme-font c-font-bold">Mis see on?</h4>
                                <p class="c-font-dark">
                                    Üldarendav, väga mänguline võimlemiselementidega muusika saatel toimuv tegevus. Kasutatakse erinevaid väikelastele sobivaid
                                    vahendeid, õpitakse väga lihtsaid, juurdeviivaid harjutusi akrobaatika algõppeks, tehakse
                                    vanusele sobivaid koordinatsiooni- ja rütmiharjutusi.
                                </p>
                                <p class="c-font-dark">
                                    Tund algab soojendusega ning sellele järgneb liikuv põhiosa, mis on enamasti poolmänguline. Tunni lõpuosa sisaldab lõdvestus
                                    ja venitusharjutusi.
                                </p>
                                <p class="c-font-dark"> Füüsiline aktiivsus on lapse arengule tähtis, kuna see tugevdab immunsüsteemi, parandab rühti,
                                    parandab keha kontrolli ja annab hea enesetunde.
                                </p>
                                <p>Tunni eesmärk on arendada laste kehalisi võimeid: tasakaal, painduvus, koordinatsioon</p>
                                <ul class="c-content-list-1 c-theme  c-font-uppercase">
                                    <li>2 - 4 aastat</li>
                                    <li>Tüdrukud ja poisid</li>
                                    <li>Trenn üks kord nädalas</li>
                                </ul>
                            </div>
                        </div>
                        <a href="http://registreeri.trefoil.ee" class="btn c-theme-btn c-btn-square btn-block">REGISTREERI TRENNI</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 c-bg-white" style="padding: 20px">
                <iframe width="800" height="450" src="https://www.youtube.com/embed/yeSP0w6LcrM" frameborder="0" allowfullscreen></iframe>
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