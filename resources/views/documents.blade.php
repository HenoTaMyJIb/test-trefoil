@extends('layouts.app')
@section('content')

    <div class="c-layout-breadcrumbs-1 c-fonts-uppercase c-fonts-bold c-bordered c-bordered-both">
    	<div class="container">
    		<div class="c-page-title c-pull-left">
    			<h3 class="c-font-uppercase c-font-sbold">Dokumendid</h3>
    		</div>
    	</div>
    </div>
    <div class="c-content-box c-size-md c-bg-white">
    	<div class="container">
            @foreach($finder as $file)
                <p>
                    <a href="{{url('storage/Documents/'.$file->getFilename())}}">
                        <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                        {{$file->getFilename()}}
                    </a>
                </p>
            @endforeach
        </div>
    </div>
@endsection
