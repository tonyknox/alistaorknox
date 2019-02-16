@extends('layouts/app')

@section('content')

	<div class="row">
	<!-- start col 1 -->
		<div class="d-none d-sm-block col-2" style="background-color: #eee"> 
			@include('includes.menus.books')	
		</div>
	<!-- end col 1 -->

	<!-- start col 2 -->
		<div class="col" > 
			
			@include('includes.searches', ['tble' => 'SearchChapters'])

			<h1 style="margin-top:-4px;padding-bottom:16px">Books &amp; Articles</h1>
			
				@foreach ($book as $bk)
					<div class="row"> 
						<div class="col-sm-3"  >
						<!-- image -->
						<br />
							<img class="img-fluid max-width:100% height:auto" src="{{$bk->thumb}}" alt="{{$bk->bkname}}"  /><br /><br />
						</div>
							
						<div class="col" style="max-width:500px">
						<!-- book info -->
							<br />
							<h5><a href="{{ action('BooksController@show', [$bk->bkid]) }}">{!!  $bk->bkname !!}</a></h5>
							
							@if(strlen($bk->author))	
								Author: {!! $bk->author  !!}<br />
							@endif

							@if(count($bk->chapters))
								@foreach($bk->chapters as $chap)
									<small><a href="{{action('ChaptersController@show', [$chap->chapid])}}">{!! $chap->chapname !!}</a>, </small>	
								@endforeach
							@endif
						</div>
						<br /><br />
					</div>
				@endforeach
			{!! $book->render() !!}	
		</div>	
	<!-- end col 2 -->	
		

		<div class="col-2">

		</div>
	</div>

	
	@include ('errors.list')

@endsection