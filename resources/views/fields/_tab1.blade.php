<div class="tab-pane fade active in" id="c-tab2-opt1-1">
    <div class="c-tab-pane">
    <h2 class="c-font-uppercase c-font-bold">{{$title}}</h2>
        @include('fields.'.$slug)


        @if(isset($photos))
        <div id="grid-container" class="cbp">
            @foreach($photos as $photo)
                <div class="cbp-item identity logos">
                    <a href="{{url('pages/'.$slug.'/'.$photo->getFilename())}}" class="cbp-caption cbp-lightbox">
                        <div class="cbp-caption-defaultWrap">
                            <img src="{{\Storage::url('pages/'.$slug.'/'.$photo->getFilename())}}" alt="">
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        @endif
    </div>
</div>
