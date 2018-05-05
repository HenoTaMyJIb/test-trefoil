@extends('layouts.app') @section('content')

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
				<div>
					<i class="icon-pointer c-theme-font"></i> {{ setting('site.address') }}</div>
				<div>
					<i class="icon-call-end c-theme-font"></i> {{ setting('site.phone') }}</div>
				<div>
					<i class="icon-envelope c-theme-font"></i> {{ setting('site.email') }}</div>
				<div>
					<i class="socicon socicon-skype c-theme-font"></i> {{ setting('site.skype') }}</div>
				<div>{!! setting('site.address_iframe') !!}</div>
			</div>
			<div class="col-md-5">
				<div class="c-contact">
					<div class="c-content-title-1">
						<h3 class="c-font-uppercase c-font-bold">Kirjuta meile</h3>
						<div class="c-line-left"></div>
					</div>
					<form action="#" v-cloak>
						<div class="form-group" :class="{'has-error': nameHasErrors}">
							<input type="text" v-model="contactName" placeholder="Nimi" class="form-control c-square c-theme input-lg" @keyup="prepare">
						</div>
						<div class="form-group" :class="{'has-error': emailHasErrors}">
							<input type="text" v-model="contactEmail" placeholder="E-post" class="form-control c-square c-theme input-lg" @keyup="prepare">
						</div>
						<div class="form-group" :class="{'has-error': messageHasErrors}">
							<textarea rows="8" name="message" v-model="contactMessage" placeholder="Sõnum" class="form-control c-theme c-square input-lg"
							 @keyup="prepare"></textarea>
						</div>
						<div class="alert alert-success alert-dismissible" role="alert" v-if="showSentAlert">
							Aitäh! Teie sõnum on saadetud.
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>

						<g-recaptcha data-sitekey="6Ld0alcUAAAAAA7vWBrwj9ld-X64xAGQ93AsZlIR" :data-validate="prepare" :data-callback="sendFeedback"
						 data-btn-class="btn c-theme-btn c-btn-uppercase btn-lg c-btn-bold c-btn-square"
						 :data-btn-disabled="contactLoading">
							Saada
						</g-recaptcha>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection