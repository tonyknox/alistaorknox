@extends('layouts/app')

@section('content')
	<div class="row">
		<div class="col-2">
		</div>

		<div class="col">
			
			<h1>Directories</h1>
	
			@foreach($directory as $dir) 
				<div class="row">
					<div class="col-1">
						{{ $dir->dirid }} 
					</div>

					<div class="col">
						
						<h4><a href="{{ action('DirectoriesController@show', [$dir->dirid]) }}">{{  $dir->dirname }}</a></h4> 
						@if (Auth::check())<a href="{{action('DirectoriesController@edit', [$dir->dirid])}}">( Edit )</a>@endif
					</div>
						
				</div>

			@endforeach
			{!! $directory->render() !!}
		</div>
		<div class="col-1">
			
	</div>


	

	@include ('errors.list')

@endsection