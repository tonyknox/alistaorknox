@extends('layouts/app')

@section('content')

	<div class="row">
		<div class="d-none d-sm-block col-2">
		</div>

		<div class="col"> <!-- col 2 -->
			@include('includes.searches', ['tble' => 'SearchChapters'])
		
			<h1>Do It Yourself</h1>

			<div class="block w25 left">
				<img src="images/buildings/600/eltham/king_st/drafting_office/knox-02.jpg" alt="The Knox drafting office" width="100%" />
				<span class="caption">The Knox drafting office. Photo: Tony Knox</span>
			</div>
			<h3>Design</h3>
				@foreach($design as $des)
					@include('includes.details.diy', ['type' => $des])<br />
				@endforeach
			<br />

			<div class="block w40 left">
				<img src="images/diy/building.jpg" alt="building mud brick house" width="100%" />
				<span class="caption">Photo: Alistair Knox</span>
			</div>
			<h3>Build</h3>

				@foreach($build as $bld)
					@include('includes.details.diy', ['type' => $bld])<br />
				@endforeach
			<br />

			<div class="block w25 left">
				<img src="images/books/alt_house/mud_bricks-002.jpg" alt="Making mud bricks" width="100%" />
			</div>
			<h3>Mud Bricks</h3>
				@foreach($mud as $mud)
					@include('includes.details.diy', ['type' => $mud])<br />
				@endforeach
			<br />			
			
		</div>

		<div class="d-none d-sm-block col-1">
		</div>

	</div>

	@include ('errors.list')

@endsection