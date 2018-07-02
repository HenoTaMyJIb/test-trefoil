@extends('layouts.app')
@section('og-type'){{ 'article' }}@endsection
@section('og-title'){{ $post->title }}@endsection
@section('og-description'){{ str_limit(strip_tags($post->body), 500) }}@endsection
@section('og-image'){{asset('storage/'.$post->image) }}@endsection
@section('og-url'){{url()->current() }}@endsection     
@section('content')

<div class="c-layout-breadcrumbs-1 c-fonts-uppercase c-fonts-bold c-bordered c-bordered-both">
	<div class="container">
		<ul class="c-page-title c-pull-left c-page-breadcrumbs c-theme-nav c-fonts-regular">
			<li>
				<a href="/uudised">Uudised</a>
			</li>
			<li>/</li>
			<li class="c-state_active">{{$post->title}}</li>
		</ul>
	</div>
</div>
<!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-1 -->
<!-- BEGIN: PAGE CONTENT -->
<!-- BEGIN: BLOG LISTING -->
<div class="c-content-box c-size-md">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="c-content-blog-post-1-list">
					<div class="c-media">
						<div class="c-content-media-2-slider post-image">
							<img src="{{asset('storage/'.$post->image) }}" alt="{{$post->title}}">
						</div>
					</div>
					<div class="c-content-blog-post-1" style="background-color: #fbfbfb; padding: 20px;">
						<div class="c-title c-font-bold c-font-uppercase c-font-green-4">
							<p>{{$post->title}}</p>
						</div>

						<div class="c-panel" style="margin-bottom:20px;">
							<div class="c-date">
								<span class="c-font-uppercase">{{$post->created_at->formatLocalized('%A, %d %B %Y') }}</span>
							</div>
							<ul class="c-tags c-theme-ul-bg">
								@foreach($kewords = explode(', ', $post->meta_keywords) as $keyword)
								<li>{{$keyword}}</li>
								@endforeach
							</ul>
						</div>

						<div class="c-desc">
							{!! $post->body !!}

							<div class="fb-share-button" data-href="{{url('/uudised/' . $post->slug)}}" data-layout="button" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Поделиться</a></div>
						</div>
					</div>

					
				</div>
			</div>
			<div class="col-md-4">
					<div class="fb-page" data-height="550" data-href="https://www.facebook.com/SCTREFOIL" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/SCTREFOIL" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/SCTREFOIL">Sport club Trefoil</a></blockquote></div>
				<!-- BEGIN: CONTENT/BLOG/BLOG-SIDEBAR-1 -->
				{{--
				<form action="#" method="post">
					<div class="input-group">
						<input type="text" class="form-control c-square c-theme-border" placeholder="Search blog...">
						<span class="input-group-btn">
							<button class="btn c-theme-btn c-theme-border c-btn-square" type="button">Go!</button>
						</span>
					</div>
				</form> --}}

				<div class="c-content-ver-nav">
					
				</div>

			</div>
		</div>
	</div>
</div>
<!-- END: BLOG LISTING  -->
@endsection