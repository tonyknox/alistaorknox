<br />
<p >
	<strong><big>
		<a href="{!!action($tble.'Controller@show', [$id => $prevPage])!!}" > < Previous {{$text}}</a>
			&nbsp;:&nbsp;
		<a href="{!!action($tble.'Controller@show', [$id => $nextPage])!!}" > Next {{$text}} ></a>
	</strong></big>
	
	@if (Auth::check())<br /><a href="{!!action($tble.'Controller@edit', [$editTable])!!}">( Edit )</a>@endif
</p>

