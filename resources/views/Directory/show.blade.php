@extends('layouts/app')

@section('content')
	<div class="row">
		
			<div class="d-none d-sm-block col-sm-3">
				<h5>Biography</h5>
					@include('includes.menus.bio')	
			</div>
		
		<div class="col" style="max-width:520px;">
			<div class="d-sm-none">
				@include('includes.searches', ['tble' => 'SearchChapters'])<br />
			</div>
				@if($directory->dirid == 31)
					<h1>{!! $directory->dirheader !!}</h1>
				@else
					<h3>{!! $directory->dirheader !!}</h3>
				@endif
				<div class="hyphenate" style="text-align:justify;"> 
					{!! isset($directory->section_2) ? $directory->section_2." " : '' !!}
				</div>
				<br />				
		</div>	
	<!-- </div>		 -->
	<div class="d-none d-sm-block col-sm-1">
		@include('includes.searches', ['tble' => 'SearchChapters'])
	</div>
</div>
@stop

