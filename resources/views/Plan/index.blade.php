@extends('layouts/app')
@section('content')

	<div class="row">
		<div class="d-none d-sm-block col-2"> <!-- col 1 -->
			<div style="background-color: #eee">
				@include('includes.menus.plans')
			</div>
		</div>	<!-- end col 1 -->

		<div class="col"> <!-- col 2 -->
			@include('includes.searches', ['tble' => 'SearchPlans'])

			<h1>Plans</h1>
			@if( isset($noresult))
				<h3>{{ $noresult }}</h3>
			@else

				@if(isset($buildings))
					@if(count($plans->addresses->$buildings))
						@foreach ($buildings as $bld)

							@if(count($bld->plans))	
								@foreach($bld->plans as $pln)
									<p>
										{{ $bld->year_built }} <a href="{{ action('PlansController@show', [$pln->plid]) }}">{{ $bld->client }} &nbsp; &nbsp;{{  $pln->plname }}</a>
									</p>							
								@endforeach
							@endif
						@endforeach
					@endif

				@else

					@foreach ($plans as $pl)	
						<p>
							<a href="{{ action('PlansController@show', [$pl->plid]) }}"><strong>{{ $pl->plname }}</strong></a>  
							@if(count($pl->buildings))
								{!! $pl->buildings->buildname !!}: 
							@endif
							@if(count($pl->addresses) && strlen($pl->addresses->suburb))
								{!! $address = addressString($pl->addresses->suite,$pl->addresses->lot_number,$pl->addresses->stnmbr,$pl->addresses->street,$pl->addresses->suburb,$pl->addresses->postcode,$pl->addresses->state); !!}
							@endif 

							@if (Auth::check())
								<a href="{!!action('PlansController@edit', [$pl->plid])!!}">( Edit )</a> 
							@endif
						</p>
					@endforeach

				@endif
			
		{!! $plans->render() !!}
	@endif
	</div>


	<div class="col-1">
	

	</div>
</div>

	

@include ('errors.list')

@endsection