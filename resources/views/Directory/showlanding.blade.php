@extends('layouts/app')

@section('vars')
	@if(count($akimage))
		@php
			list($big,$small) = bigSmall($akimage->imgpath,$akimage->imgname,$akimage->imgextension);
		@endphp
	@endif
@stop

@section('content')
	

<div class="row"><div class="col" style="max-width"520px>
	
	<h1><a href="/buildings">The Buildings of Alistair Knox</a></h1>

	@include('includes.searches', ['tble' => 'SearchBuildings'])
	
	<big> <a href="/buildings">Browse</a></big>
		<br />
		@if(!count($directory->section_1) || !count($directory->section_) || !count($directory->section_1))
			@if(count($akimage))
				<img src="{{$big}}" alt="{{$akimage->alt}}" width="100%" />
				<br />
				Photo: <i>{{$akimage->credit}}</i><br />{{$akimage->alt}}
			@endif
		@else
			<h3>{{ $directory->dirheader }}</h3>
		
			{!! isset($directory->section_2) ? $directory->section_2." " : '' !!}
			<br />
			{!! isset($directory->dirheader) ? $directory->dirheader." " : '' !!}
			{!! $directory->title_info or '' !!}
		@endif	

		<br /><br />
				
	@if (Auth::check())<a href="{{action('DirectoriesController@edit', [$directory->dirid])}}">( Edit )</a> @endif

</div></div>
	

@stop
@section('dummy')
@stop

