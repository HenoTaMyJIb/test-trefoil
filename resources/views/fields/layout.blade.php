@extends('layouts.app') 

@section('content') 

@include('fields._header') 

@include('fields.'.$slug)

<div class="c-content-box c-size-md c-bg-grey-1">
    <div class="container">
        <!-- Begin: Testimonals 1 component -->
        <div class="c-content-team-1-slider" data-slider="owl" data-items="3">
            <div class="c-content-title-1">
                <h3 class="c-font-uppercase c-font-bold">Treenerid</h3>
                <div class="c-line-left c-theme-bg"></div>
            </div>
            @foreach ($coaches->chunk(4) as $chunk)
            <div class="row">
                @foreach ($chunk as $coach)
                <div class="col-md-3 col-sm-6">
                    <div class="c-content-person-1 c-option-2">
                        <div class="c-caption c-content-overlay">
                            <img class="c-overlay-object img-responsive" src="{{\Storage::url($coach->picture)}}" alt="">
                        </div>
                        <div class="c-body">
                            <div class="c-head">
                                <div class="c-name c-font-uppercase c-font-bold">
                                    {{$coach->name}}
                                </div>
                            </div>
                            <p>
                                Tel. {{$coach->phone}}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endforeach
        </div>
    </div>
    <!-- END: CONTENT/MISC/TEAM-3 -->
</div>
@endsection