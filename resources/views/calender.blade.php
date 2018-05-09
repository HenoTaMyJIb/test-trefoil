@extends('layouts.app')
@section('content')

    <div class="c-layout-breadcrumbs-1 c-fonts-uppercase c-fonts-bold c-bordered c-bordered-both">
    	<div class="container">
    		<div class="c-page-title c-pull-left">
    			<h3 class="c-font-uppercase c-font-sbold">Kalender</h3>
    		</div>
    	</div>
    </div>
    <div class="c-content-box c-size-md c-bg-white">
    	<div class="container">
            <h1 class="c-font-green-1">Kalender {{date('Y')}}</h1>
            <table class="table table-hover">
            <tbody>
                @foreach($events as $event)
                    <tr>
                            <th scope="row">{{$event->name}}</th>
                            <td>{{\Carbon\Carbon::parse($event->start_date)->format('d M Y')}}</td>
                            <td>{{$event->address}}</td>
                            <td>{{$event->type}}</td>
                        </tr>
                @endforeach
            </tbody>
			</table>
        </div>
    </div>
@endsection
