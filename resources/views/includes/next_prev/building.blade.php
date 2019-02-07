<p >
	<strong><big>
		
		<a href="{{action('BuildingsController@show', ['buildid' => $prevPage])}}" >< Previous Building</a>
			&nbsp;:&nbsp;
		<a href="{{action('BuildingsController@show', ['buildid' => $nextPage])}}" >Next Building ></a>

		<br />
	@if (Auth::check())<a href="{!!action('BuildingsController@edit', [$building->buildid])!!}">( Edit )</a>@endif

</p>

