<p >
	<strong><big>
		<a href="{{action('ChaptersController@show', ['chapid' => $prevChap])}}" >< Previous Book</a>
			<br />
		<a href="{{action('ChaptersController@show', ['chapid' => $prevPage])}}" >< Previous Chapter</a>
			&nbsp;:&nbsp;
		<a href="{{action('ChaptersController@show', ['chapid' => $nextPage])}}" >Next Chapter ></a>
		<br />
		<a href="{{action('ChaptersController@show', ['chapid' => $nextChap])}}" >Next  Book ></a></big>
	</strong>
	<br />
	@if (Auth::check())<a href="{!!action('ChaptersController@edit', [$chapter->chapid])!!}">( Edit )</a>@endif

</p>

