<p >
	<strong><big>
	
		<a href="{{action('BooksController@show', ['bkid' => $prevPage])}}" >< Previous Book</a>
			&nbsp;:&nbsp;
		<a href="{{action('BooksController@show', ['bkid' => $nextPage])}}" >Next Book ></a>

		<br />
	@if (Auth::check())<a href="{!!action('BooksController@edit', [$book->bkid])!!}">( Edit )</a>@endif

</p>

