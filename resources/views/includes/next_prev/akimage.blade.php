<p >
	<strong><big>
		<a href="{{action('AkimagesController@show', ['imgid' => $prevChap])}}" >< Previous Building</a>
			<br />
		<a href="{{action('AkimagesController@show', ['imgid' => $prevPage])}}" >< Previous Image</a>
			&nbsp;:&nbsp;
		<a href="{{action('AkimagesController@show', ['imgid' => $nextPage])}}" >Next Image ></a>
		<br />
		<a href="{{action('AkimagesController@show', ['imgid' => $nextChap])}}" >Next  Building ></a></big>
	</strong>
<br />

@if (Auth::check())<a href="{!!action('AkimagesController@edit', [$akimage->imgid])!!}">( Edit )</a>@endif
</p>