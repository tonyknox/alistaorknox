@extends('layouts/app')

@section('content')

<div class="row">
	
	<div class="col-1"> <!-- col 1 -->	


	</div>	<!-- end col 1 -->

	<div class="col"> <!-- col 2 -->

		@include('includes.searches', ['tble' => 'SearchBuildings'])
		<h1>Buildings</h1>			

		<div class="dropdown">
			<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
				Buildings
			</button>
			@include('includes.menus.buildings-dropdown')
		</div>

		@if( isset($noresult))
			<h3>{{ $noresult }}</h3>
		@else

			@foreach($buildings as $build) 

				<div class="row">
					<div class="col-sm-3">
						
						@if(count($build->akimages))
			
							<img style="max-width:150px" src="{{$build->akimages[0]['imgpath']}}/{{$build->akimages[0]['imgname']}}.{{$build->akimages[0]['imgextension']}}" alt="{{$build->akimages[0]['alt'] }}" width="100%" /><br /><br />

						@elseif(count($build->plans))
							
							<div style="max-width:150px">
								{!! $build->plans[0]['thumbs'] !!}
							</div>

						@endif
					</div>

					<div class="col-sm-8">
						
						<p>
							<strong><a href="{{ action('BuildingsController@show', [$build->buildid]) }}">{{ $build->buildname }}</a> Client: {{ $build->client }}</strong> 
							
							@if($build->addresses)
								
									{!! $address = addressString($build->addresses->suite,$build->addresses->lot_number,$build->addresses->stnmbr,$build->addresses->street,$build->addresses->suburb,$build->addresses->postcode,$build->addresses->state); !!}
								
							@endif
						
							@if(count($build->projects))
								<br />
								{{ $build->projects[0]['pjname'] }}	

							@endif

							@if (Auth::check())<br /><a href="{{action('BuildingsController@edit', [$build->buildid])}}">( Edit )</a>@endif
						</p>

					</div>
					<div class="col">
					</div>
				</div>
					
			@endforeach
			<br />
			{!! $buildings->render() !!}
		</div>
			
		@endif
	</div>
	<div class="col-2">
		<div class="d-none d-sm-block">
		
			
		</div>
	</div>
	

	@include ('errors.list')

@stop