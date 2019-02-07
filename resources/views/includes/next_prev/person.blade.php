<p >
	<strong><big>
	
		<a href="{{action('PeopleController@show', ['ppid' => $prevPage])}}" >< Previous Person</a>
			&nbsp;:&nbsp;
		<a href="{{action('PeopleController@show', ['ppid' => $nextPage])}}" >Next Person ></a>

		<br />
	@if (Auth::check())<a href="{!!action('PeopleController@edit', [$person->ppid])!!}">( Edit )</a>@endif

</p>

