@extends('layouts/app')
@section('vars')
	@if(count($akimage))
		@php
			list($big,$small) = bigSmall($akimage->imgpath,$akimage->imgname,$akimage->imgextension);
		@endphp
	@endif
@stop
@section('content')
	

<div>
	@include('includes.searches', ['tble' => 'SearchImages'])

	<h1><a href="/akimages">Images</a></h1>
	<big> <a href="/akimages">Browse</a></big>
	<br />			
	@if(count($akimage))
				<img src="{{$big}}" alt="{{$akimage->alt}}" width="100%" />
				<br />
				Photo: <i>{{$akimage->credit}}</i><br />{{$akimage->alt}}
			@endif
	<br /><br /><br />
					
	<form id="elasticScout" action="/SearchImages" method="get">
		<div class="mysearchbar">
	 		<input name="search" placeholder="Search..."> &nbsp; &nbsp; &nbsp; <big> <a href="/akimages">Browse</a></big>
	 	</div>
	</form>
	<br /><br />
	@if (Auth::check())<a href="{{action('DirectoriesController@edit', [$directory->dirid])}}">( Edit )</a> @endif

</div>
	
@stop