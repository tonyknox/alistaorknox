@extends('layouts/app')
@section('content')
	

<div style="margin-left:2%;margin-right:2%">

	<h1><a href="/plans">The Plans of Alistair Knox</a></h1>
	
	@include('includes.searches', ['tble' => 'SearchPlans'])

	<br />			
	{!! $plan->plinfo !!}
	<br /><br /><br />
					
	
	
	@if (Auth::check())<a href="{{action('DirectoriesController@edit', [$directory->dirid])}}">( Edit )</a> @endif

</div>
	
@stop