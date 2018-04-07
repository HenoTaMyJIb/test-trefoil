@extends('layouts.app')
@section('content')

    <div class="c-layout-breadcrumbs-1 c-fonts-uppercase c-fonts-bold c-bordered c-bordered-both">
    	<div class="container">
    		<div class="c-page-title c-pull-left">
    			<h3 class="c-font-uppercase c-font-sbold">Kontakt</h3>
    		</div>
    	</div>
    </div>
    <div class="c-content-box c-size-md c-bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div><i class="icon-pointer c-theme-font"></i> {{ setting('site.address') }}</div>
                    <div><i class="icon-call-end c-theme-font"></i> {{ setting('site.phone') }}</div>
                    <div><i class="icon-envelope c-theme-font"></i> {{ setting('site.email') }}</div>
                    <div><i class="socicon socicon-skype c-theme-font"></i> {{ setting('site.skype') }}</div>
                    <div>{!! setting('site.address_iframe') !!}</div>
                </div>
                <div class="col-md-5">
                    <div class="c-contact">
						<div class="c-content-title-1">
							<h3 class="c-font-uppercase c-font-bold">Küsimused?</h3>
							<div class="c-line-left"></div>
							<p class="c-font-lowercase">Kirjuta meile, kui sul on küsimusi või предложения.
							Kindlasti vaata üle võib olla Sinu küsimusele on juba vastus <a href="{{url('kkk')}}">KKK lehel</a>.</p>
						</div>
						<form action="#">
							<div class="form-group">
                        		<input type="text" placeholder="Nimi" class="form-control c-square c-theme input-lg">
                        	</div>
                        	<div class="form-group">
                        		<input type="text" placeholder="E-post" class="form-control c-square c-theme input-lg">
                        	</div>
		                   	<div class="form-group">
                        	   	<textarea rows="8" name="message" placeholder="Sõnum" class="form-control c-theme c-square input-lg"></textarea>
		                    </div>
		                    <button type="submit" class="btn c-theme-btn c-btn-uppercase btn-lg c-btn-bold c-btn-square">Saada</button>
	                   	</form>
					</div>
                </div>
            </div>
        </div>
    </div>
@endsection
