@extends('layouts.app')
@section('content')
    <div class="c-layout-breadcrumbs-1 c-fonts-uppercase c-fonts-bold c-bordered c-bordered-both">
    	<div class="container">
    		<div class="c-page-title c-pull-left">
    			<h3 class="c-font-uppercase c-font-sbold">{{$content->title}}</h3>
    		</div>
    	</div>
    </div>
    <div class="c-content-box c-size-md">
    	<div class="container">
        {!! $content->body !!}
        </div>
    </div>
@endsection
