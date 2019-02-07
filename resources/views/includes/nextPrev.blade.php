<br />
<p >
	<strong><big>
		<a href="{!!action($tble.'Controller@show', [$id => $prevChap])!!}" > < Previous {{$textBook}}</a>
		<br />

		<a href="{!!action($tble.'Controller@show', [$id => $prevPage])!!}" > < Previous {{$textChap}}</a>
			&nbsp;:&nbsp;
		<a href="{!!action($tble.'Controller@show', [$id => $nextPage])!!}" > Next {{$textChap}} ></a>
		
		<br />
		<a href="{!!action($tble.'Controller@show', [$id => $nextChap])!!}" > Next {{$textBook}} ></a></big>
	</strong>

	@if (Auth::check())<br /><a href="{!!action($tble.'Controller@edit', [$editTable])!!}">( Edit )</a>@endif
</p>
