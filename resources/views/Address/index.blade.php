@extends('layouts/app')

@section('vars')
	@php
		if(!isset($addresses)){
			$addresses = $address;
		}
	@endphp
@stop
@section('content')

	<div class="row">
		<div class="d-none d-sm-block col-2">
			
		</div>
		
		<div class="col">
				
			<h1>Addresses</h1>
	
			@include('includes.searches', ['tble' => 'SearchAddresses'])<br />
	
			@foreach ($addresses as $adr)
				 
			<div class="row">
				<div class="col-1">
					{{ $adr->adrid}}
				</div>
					
				<div class="col">
					<p>
						<strong>
							<a href="{{ action('AddressesController@show', [$adr->adrid]) }}">{!! $adrs = addressString($adr->suite,$adr->stnmbr,$adr->lot_number,$adr->street,$adr->suburb,$adr->postcode,$adr->state) !!}</a>,
						</strong>

						@if(count($adr->buildings))
							&nbsp;<a href="{{ action('BuildingsController@show', [$adr->building_buildid]) }}">{{ $adr->buildings->buildname }}</a>
						@endif

						@if (Auth::check())
							<a href="{{action('AddressesController@edit', [$adr->adrid])}}">( Edit )</a>
						@endif
					</p>
				</div>
			</div>

		@endforeach

		</div>

		<div class="d-none d-sm-block col-1">
	
		</div>
	

	</div>
{!! $addresses->render() !!}
	@include ('errors.list')

@endsection