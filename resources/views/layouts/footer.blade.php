<div class="c-prefooter c-bg-white" style="margin-bottom: 0">
<div class="container">
			<div class="c-head">
				<div class="row">
					<div class="col-md-6">
						<div class="c-left">
							<div class="socicon">
								<a href="{{setting('site.facebook_link')}}" target="_blank" class="socicon-btn socicon-btn-circle socicon-solid c-bg-grey-1 c-font-grey-2 c-theme-on-hover socicon-facebook tooltips" data-original-title="Facebook" data-container="body"></a>
								<a href="{{setting('site.youtube_link')}}" target="_blank" class="socicon-btn socicon-btn-circle socicon-solid c-bg-grey-1 c-font-grey-2 c-theme-on-hover socicon-youtube tooltips" data-original-title="Youtube" data-container="body"></a>
								<a href="{{setting('site.instagram_link')}}" target="_blank" class="socicon-btn socicon-btn-circle socicon-solid c-bg-grey-1 c-font-grey-2 c-theme-on-hover socicon-instagram tooltips" data-original-title="Instagram" data-container="body"></a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="c-line"></div>

			<div class="c-body">
				<div class="row">
					<div class="col-md-9 col-sm-6 col-xs-12 partners">
						<div class="c-content-title-1 c-title-md">
							<h3 class="c-title c-font-uppercase c-font-bold">Meie partnerid</h3>
							<div class="c-line-left hide"></div>
						</div>
						@foreach($partners as $partner)
							<div class="col-sm-2 partner">
								@if($partner->url)
									<a href="{{$partner->url}}" target="_blank">
										<img src="{{\Storage::url($partner->logo)}}"  width="140">
									</a>
								@else
									<img src="{{\Storage::url($partner->logo)}}" width="140">
								@endif
							</div>


						@endforeach
					</div>
					<div class="col-md-3 col-sm-12 col-xs-12">
						<div class="c-content-title-1 c-title-md">
							<h3 class="c-title c-font-uppercase c-font-bold">Võta ühendust</h3>
							<div class="c-line-left hide"></div>
						</div>
						<p class="c-address c-font-16">
							<div><i class="icon-pointer c-theme-font"></i> {{ setting('site.address') }}</div>
			                <div><i class="icon-call-end c-theme-font"></i> {{ setting('site.phone') }}</div>
			                <div><i class="icon-envelope c-theme-font"></i> {{ setting('site.email') }}</div>
			                <div><i class="socicon socicon-skype c-theme-font"></i> {{ setting('site.skype') }}</div>
						</p>
					</div>
				</div>
			</div>

			<div class="c-line"></div>
	</div>
		</div>
