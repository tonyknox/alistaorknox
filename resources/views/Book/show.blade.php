@extends('layouts/app')
@section('content')

<div class="row">
	
	<div class="d-none d-sm-block col-3"> <!-- col 1 -->
		<div style="background-color: #eee">
			<h5>Other Publications</h5>
			@foreach($bks as $bk)
				<p><a href="{{action('BooksController@show',[$bk->bkid])}}">{{ $bk->bkname }}</a></p>
			@endforeach

		</div>
	</div>	<!-- end col 1 -->

	<div class="col" style="max-width:520px"> <!-- col 2 -->

		<div class="d-sm-none">
			@include('includes.searches', ['tble' => 'SearchChapters'])<br />
		</div>

		<h1>{!! $book->bkname ?? '' !!}</h1>
		<!-- book info -->
		<h5>
			@if($book->author)
				Author: {!! $book->author !!}<br />
			@endif
			@if($book->bkdescription)
				{!! $book->bkdescription !!}<br />
			@endif
			@if($book->bkinfo)
				<div class="hyphenate" style="text-align:justify;">
					{!! $book->bkinfo !!}<br />
				</div>
			@endif
			<br />
		</h5>

		@if(count($book->chapters) > 1)
		<!-- book contents	 -->
			@foreach($book->chapters as $chap)	
				<p>
				<div class="hyphenate" style="text-align:justify;">	
				<strong><a href="{!!action('ChaptersController@show', [$chap->chapid])!!}">{!! $chap->chapname !!}</a></strong>
					{!! $info  = abbreviate($chap->chapinfo,$chap->chapid,'chapters',240) !!}
</div>
				</p>
			@endforeach
			
		@elseif(count($book->chapters)==1)

			@foreach($book->chapters as $chapter)
				<div class="hyphenate" style="text-align:justify;">
					{!! $chapter->chapinfo !!}
				</div>
			@endforeach
	
		@endif

		<span style="text-align:center">@include('/includes.nextPrevMin',['tble'=>'Books', 'editTable'=>$book->bkid, 'id'=>'bkid', 'text'=>'Book'])</span>

	</div>


<div class="d-none d-sm-block col-1"> <!-- col 3 -->
	
</div>	<!-- end col3 -->
</div>
<div id="disqus_thread"></div>
<script>

var disqus_config = function () {
this.page.url = 'http://alistairknox.org/books/{{$book->bkid}}';  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = '/books/{{$book->bkid}}'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};

(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = '//alistairknox-org.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

@stop
