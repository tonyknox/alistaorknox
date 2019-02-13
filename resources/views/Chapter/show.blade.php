@extends('layouts/app')

@section('content')
	
	<div class="row">
<!-- col 1 - sidebar -->
				
		<div class="d-none d-sm-block col-3">
			
			<h5>Chapters</h5>
		
			@foreach ($chaps as $chap)
				<p><a href="{{action('ChaptersController@show', [$chap->chapid])}}">{!! $chap->chapname !!}</a></p>
			@endforeach
			
		</div>

		<!-- col 2 - main content -->
		<div class="col" style="max-width:520px;">	

			@include('includes.searches', ['tble' => 'SearchChapters'])
				
			<h2>{!! $bks->bkname !!}
			<h5>Author: {{ $bks->author }}</h5>
			<br />
			
			<h3>{!! $chapter->chapname !!}</h3>

			<p>
				{!! $chapter->chapinfo ?? '' !!}	
			</p>

			<span style="text-align:center">@include('/includes.nextPrev',['tble'=>'Chapters', 'editTable'=>$chapter->chapid, 'id'=>'chapid', 'textBook'=>'Book', 'textChap'=>'Chapter'])</span>
		
		</div> 
	
<!-- col 3  -->

	<div class="d-none d-sm-block col-1">
		
	</div>
</div>

<!-- - - - - -->		

<div id="disqus_thread"></div>
<script>

var disqus_config = function () {
this.page.url = 'http://alistairknox.org/chapters/{{$chapter->chapid}}';  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = '/chapters/{{$chapter->chapid}}'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
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
