@extends('layouts.app') @section('content')

<div class="c-layout-breadcrumbs-1 c-fonts-uppercase c-fonts-bold c-bordered c-bordered-both">
	<div class="container">
		<div class="c-page-title c-pull-left">
			<h3 class="c-font-uppercase c-font-sbold">Treenerid</h3>
		</div>
	</div>
</div>
<div class="c-content-box c-size-md c-bg-grey-1">

	<div class="container">
		<div class="c-content-title-1">
			<h3 class="c-center c-font-uppercase c-font-bold">Treenerid</h3>
			<div class="c-line-center c-theme-bg"></div>
		</div>
		@foreach ($coaches->chunk(4) as $chunk)
		<div class="row">
			@foreach ($chunk as $coach)
			<div class="col-md-3 col-sm-6 c-margin-b-30">
				<div class="c-content-person-1 c-option-2">
					<div class="c-caption c-content-overlay">
						<img class="c-overlay-object img-responsive" src="{{\Storage::url($coach->picture)}}" alt="">
					</div>
					<div class="c-body card-coach">
						<div class="c-head">
							<div class="c-name c-font-uppercase c-font-bold">
								{{$coach->name}}
							</div>
						</div>
						<div class="c-position" style="white-space: pre-wrap">{{$coach->description}}</div>
						<p>
							Tel. {{$coach->phone}}
						</p>
						<p>
							<strong>Alad:</strong> {{ implode(', ', $coach->fields->pluck('name')->toArray()) }}</p>
					</div>
				</div>
			</div>
			@endforeach
		</div>
		@endforeach
	</div>
</div>
@endsection