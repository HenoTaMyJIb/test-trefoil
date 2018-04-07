@extends('layouts.app')
@section('content')
@include('fields._header')

<div class="c-content-box c-size-sm c-no-bottom-padding c-overflow-hide  c-bg-grey-1">
    <div class="c-container">
    <div class="c-content-title-1">
        <div class="c-content-tab-2 c-theme c-opt-1">
            @include('fields._tabs')

            <div class="c-tab-content c-bg-img-center1 c-bg-white">
                <div class="container">
                    <div class="tab-content" style="padding: 30px 0; overflow: unset;">
                        @include('fields._tab1')
                        @include('fields._tab2')
                        @include('fields._tab3')
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection
