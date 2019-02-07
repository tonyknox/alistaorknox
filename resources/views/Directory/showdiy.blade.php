@extends('layouts/app')

@section('content')
	<div class="row">
		
			<div class="d-none d-sm-block col-sm-2">
				<h5>Biography</h5>
					@include('includes.menus.diy')	
			</div>


		
		<div class="col">
			@include('includes.searches', ['tble' => 'SearchChapters'])
			
				@if($directory->dirid == 31)
					<h1>{!! $directory->dirheader !!}</h1>
				@else
					<h3>{!! $directory->dirheader !!}</h3>
				@endif
			
				{!! isset($directory->section_2) ? $directory->section_2." " : '' !!}
				
				<br />
				
		</div>	
	<!-- </div>		 -->
	<div class="d-none d-sm-block col-sm-1">

	</div>
</div>
@stop

