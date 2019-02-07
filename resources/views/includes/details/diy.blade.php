<h5><a href="{!! action('ChaptersController@show', [$type->chapid]) !!}">{!!  $type->chapname !!}</a></h5>

@foreach($book as $bk)
	@if($bk->bkid == $type->book_bkid)
		<strong>Author:</strong> {{$bk->author}}	<br />
	@endif
@endforeach

{!! $info  = abbreviate($type->chapinfo,$type->chapid,'chapters',240) !!}

@if (Auth::check())
	<a href="{!!action('ChaptersController@edit', [$type->chapid])!!}">( Edit )</a>
@endif
<p style="margin-bottom:-.5em"></p>