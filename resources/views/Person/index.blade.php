@extends('layouts/app')
@section('content')

	<div class="row">
		<div class="d-none d-sm-block col-2">
			<div style="background-color: #eee">
				@include('includes.menus.people')
			</div>
		</div>	<!-- end col 1 -->

		<div class="col"> <!-- col 2 -->
			
			@include('includes.searches', ['tble' => 'SearchPeople'])

			@if( isset($noresult))
				<h3>{{ $noresult }}</h3>
			@else

				<h1 >People &amp; Places</h1>
	
				@foreach ($person as $pp)
					<div class="row">
						<div class="col-sm-3">	
							<img src="{{$pp->ppimgpath}}/{{$pp->ppimgname}}.{{$pp->ppimgext}}" alt="{{$pp->ppalt}}" width="100%" /><br/><br />
						</div>
						<div class="col">
			
							<h4><a href="{{ action('PeopleController@show', [$pp->ppid]) }}">{{ $pp->ppfirst_name  ?? ''}} {{  $pp->ppname }}</a></h4> 

							{!! $info  = abbreviate($pp->ppinfo,$pp->ppid,'people',240) !!} <a href="/people/{{$pp->ppid}}"> </a><br />

							@if (Auth::check())<a href="{{action('PeopleController@edit', [$pp->ppid])}}">( Edit )</a>@endif

						</div>
					</div>	
				@endforeach
	
				{!! $person->render() !!}
			@endif
		
		</div>	
<!-- end col 2-->

		<div class="col-1">
	
	</div>
</div>

@include ('errors.list')

@endsection