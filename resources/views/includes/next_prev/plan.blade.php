<p >
	<strong><big>
	
		<a href="{{action('PlansController@show', ['plid' => $prevPage])}}" >< Previous Plan</a>
			&nbsp;:&nbsp;
		<a href="{{action('PlansController@show', ['plid' => $nextPage])}}" >Next Plan ></a>

		<br />
	@if (Auth::check())<a href="{!!action('PlansController@edit', [$plan->plid])!!}">( Edit )</a>@endif

</p>

