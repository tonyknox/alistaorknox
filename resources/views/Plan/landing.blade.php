@extends('layouts/app')

@section('content')
	<div class="row">
		<div class="col-2">
			@include('includes.menus.plans')
		</div>
		<div class="col">

			<h1>Plans</h1>

			@foreach ($buildings as $bld)

				@if(count($bld->plans))	
					@foreach($bld->plans as $pl)

						<p>
							{{ $bld->year_built }} <a href="{{ action('PlansController@show', [$pl->plid]) }}">{{ $bld->client }} &nbsp; &nbsp;{{  $pl->plname }}</a>
						</p>	
						
					@endforeach
				@endif

			@endforeach
			
			{!! $buildings->render() !!}
		</div>

		<div class="col-1">
			
		</div>
	</div>	
	
	@include ('errors.list')

@stop
