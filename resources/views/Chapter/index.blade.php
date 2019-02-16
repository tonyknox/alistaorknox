@extends('layouts/app')

@section('content')

<div class="row">
	<div class="d-none d-sm-block col-3">

		@if(!isset($noresult))
			<h5>Publications</h5>
			@foreach($bks as $bk)
				<p><a href="/books/{{$bk->bkid}}">{{$bk->bkname}}</a></p>
			@endforeach
		@endif

	</div>

	<div class="col">  <!-- col 2 -->
		@include('includes.searches', ['tble' => 'SearchChapters'])
	
		@if( isset($noresult))
			<h3>{{ $noresult }}</h3>
		@else
			<h1>Chapters</h1>
		
				@foreach ($chapter as $chap)
					
					<p>
						<strong><a href="{!! action('ChaptersController@show', [$chap->chapid]) !!}">{!!  $chap->chapname !!}</a></strong><br /> 
						{!! $info  = abbreviate($chap->chapinfo,$chap->chapid,'chapters',240) !!}

						@if (Auth::check())
							<a href="{!!action('ChaptersController@edit', [$chap->chapid])!!}">( Edit )</a>
						@endif
					</p>
				@endforeach	
				
				{!! $chapter->render() !!}		
			@endif
		</div>
	</div>

	<div class="col"> <!-- col 1 -->
	
	</div>	<!-- end col 1 -->

</div>

@include ('errors.list')

@endsection