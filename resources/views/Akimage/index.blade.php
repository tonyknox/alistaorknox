@extends('layouts/app')

@section('content')
	<h1>Images</h1>

	@include('includes.searches', ['tble' => 'SearchImages'])

	@if( isset($noresult))
		<h3>{{ $noresult }}</h3>
	@else
		@foreach ($akimages as $img)
			@php
				list($big,$small,$thumb,$width) = imgsze($img->imgpath,$img->imgname,$img->imgextension);
		 	@endphp
			<div class="row">
				<div class="d-none d-sm-block col-2">
					
				</div>
			
				<div  class="col-sm-4">
					<p>
						<a href="{{ action('AkimagesController@show', [$img->imgid]) }}">
							<picture>
			   					<source srcset='{{ $small }}' media='(min-width: 150px)' > <img src='{{ $thumb }}' alt="{!! $img->alt !!}" width="{{ $width }}"  />	
							</picture> 
						</a>	
					</p>
				</div>


				<div class="col-sm-4">
					<p>
						@if(count($img->buildings))
							<a href="{{ action('AkimagesController@show', [$img->imgid]) }}">{!! $img->buildings->buildname !!}, Client: {!! $img->buildings->client !!}, {{  $img->alt }}</a>
						@endif
					</p>
				</div>
		
				<div class="d-none d-sm-block col-2">
				
				</div>
			</div>

		@endforeach

		{!! $akimages->render() !!}

	@endif

	@include ('errors.list')

@stop