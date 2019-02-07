@extends('layouts/app')

@section('content')

	<div class="row">
	<!-- start col 1 -->
		<div class="d-none d-sm-block col-2" style="background-color: #eee"> <!-- col 1 -->

			@include('includes.menus.books')	

		</div>	
	<!-- end col 1 -->
	<!-- start col 2 -->
		<div class="col"> 
			
			@include('includes.searches', ['tble' => 'SearchChapters'])

			<h1 style="margin-top:-4px;">Books &amp; Articles</h1>

			@foreach ($book as $bk)
				<div class="row"> 
					<div class="col-sm-3">
					<!-- image -->
						<img src="{{$bk->thumb}}" alt="{{$bk->bkname}}"  style="max-width:150px;max-height:150px" /><br /><br />
					</div>
						
					<div class="col-sm-9">
					<!-- book info -->
						<big><strong><a href="{{ action('BooksController@show', [$bk->bkid]) }}">{!!  $bk->bkname !!}</a></strong></big>
						
						@if(strlen($bk->author))	
							<br />Author: {!! $bk->author  !!}<br />
						@endif

						@if(count($bk->chapters))
							@foreach($bk->chapters as $chap)
								<small><a href="{{action('ChaptersController@show', [$chap->chapid])}}">{!! $chap->chapname !!}</a>, </small>	
							@endforeach
						@endif
						
					</div>
				</div>

			@endforeach
					
			{!! $book->render() !!}	
	<!-- end col 2 -->
	<!-- start col 3 -->
		<div class="d-none d-sm-block col-1"> 

		</div>	
	<!-- end col3 -->
	</div>
	
	@include ('errors.list')

@endsection