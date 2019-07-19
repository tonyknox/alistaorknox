@extends('layouts/app')

@section('content')
	
	<div class="row">
		
	<div class="col-4">
	
		@if($address->building)
			@foreach($address as $address)
				<a href="{{action('BuildingsController@show', [$address->building_buildid])}}">@include('includes.address')</a><br />
			@endforeach
		@endif
	</div>
	<div class="col-7">

		<h3>
			@if(count($address->buildings))
				<a href="{{action('BuildingsController@show', [$address->building_buildid])}}">{{ $address->buildings->buildname }}</a>
			@endif
		</h3>
		@include('includes.searches', ['tble' => 'SearchAddresses'])<br />
		@include('includes.address')<br />
		
		<span style="text-align:center">@include('/includes.nextPrevMin',['tble'=>'Addresses', 'editTable'=>$address->adrid, 'id'=>'adrid', 'text'=>'Address'])</span>

	</div>	
	<div class="col">
			
		</div>	
	</div>

@stop
