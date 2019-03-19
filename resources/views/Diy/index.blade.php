@extends('layouts/app')

@section('content')

	<div class="row">
		<div class="d-none d-sm-block col-2">
		</div>

		<div class="col" style="max-width:520px;"> <!-- col 2 -->
			<div class="d-sm-none">
				@include('includes.searches', ['tble' => 'SearchChapters'])<br />
			</div>
		
			<h1>Do It Yourself</h1>

			<div class="block w30 left">
				<img src="images/buildings/600/eltham/king_st/drafting_office/knox-02.jpg" alt="The Knox drafting office" width="100%" />
				<span class="caption">The Knox drafting office. Photo: Tony Knox</span>
			</div>
			<h3>Design</h3>
				@foreach($design as $des)
					<div class="hyphenate" style="text-align:justify">
						@include('includes.details.diy', ['type' => $des])<br />
					</div>
				@endforeach
			<br />

			<div class="block w45 left">
				<img src="images/diy/building.jpg" alt="building mud brick house" width="100%" />
				<span class="caption">Photo: Alistair Knox</span>
			</div>
			<h3>Build</h3>

				@foreach($build as $bld)
					<div class="hyphenate" style="text-align:justify">
						@include('includes.details.diy', ['type' => $bld])<br />
					<div>
				@endforeach
			<br />

			<div class="block w30 left">
				<img src="images/books/alt_house/mud_bricks-002.jpg" alt="Making mud bricks" width="100%" />
			</div>
			<h3>Mud Bricks</h3>
				@foreach($mud as $mud)
					<div class="hyphenate" style="text-align:justify">
						@include('includes.details.diy', ['type' => $mud])<br />
					</div>
				@endforeach
			<br />			
			
		</div>

		<div class="d-none d-sm-block col-2">	
			@include('includes.searches', ['tble' => 'SearchChapters'])<br />
		</div>

	</div>

	@include ('errors.list')

@endsection