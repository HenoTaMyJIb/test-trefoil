@extends('layouts.app') @section('content')

<div class="c-layout-breadcrumbs-1 c-fonts-uppercase c-fonts-bold c-bordered c-bordered-both">
	<div class="container">
		<div class="c-page-title c-pull-left">
			<h3 class="c-font-uppercase c-font-sbold">Uudised</h3>
		</div>
	</div>
</div>
<!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-1 -->
<!-- BEGIN: PAGE CONTENT -->
<!-- BEGIN: BLOG LISTING -->
<div class="c-content-box c-size-md">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<div class="c-content-blog-post-1-list">
					@foreach($posts as $post)
					<div class="c-media">
						<div class="c-content-media-2-slider">
							<img src="{{asset('storage/'.$post->image) }}" alt="" style="width:818px; height: 420px;">
						</div>
					</div>
					<div class="c-content-blog-post-1" style="background-color: #fbfbfb; padding: 20px;">
						<div class="c-title c-font-bold c-font-uppercase c-font-green-4">
							<p>{{$post->title}}</p>
						</div>

						<div class="c-panel" style="margin-bottom:20px;">
							<div class="c-date">
								<span class="c-font-uppercase">{{$post->created_at->format('D, d F Y') }}</span>
							</div>
							<ul class="c-tags c-theme-ul-bg">
								@foreach($kewords = explode(', ', $post->meta_keywords) as $keyword)
								<li>{{$keyword}}</li>
								@endforeach
							</ul>
						</div>

						<div class="c-desc">
							{!! $post->body !!}
						</div>


					</div>
					<hr style="border-top: 3px solid #84C68F;" />
					@endforeach {{ $posts->links('_pagination') }}

				</div>
			</div>
			<div class="col-md-3">
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
					<div class="c-content-title-1 c-theme c-title-md c-margin-t-40">
						<h3 class="c-font-bold c-font-uppercase">Kategooriad</h3>
						<div class="c-line-left c-theme-bg"></div>
					</div>
					<ul class="c-menu c-arrow-dot1 c-theme">
						<li>
							<a href="{{url('uudised/teamgym')}}">Teamgym</a>
						</li>
						<li>
							<a href="{{url('uudised/teamgym')}}">Võistlused</a>
						</li>
						<li>
							<a href="{{url('uudised/kids')}}">Kids</a>
						</li>
					</ul>

				</div>

			</div>
		</div>
	</div>
</div>
<!-- END: BLOG LISTING  -->
@endsection