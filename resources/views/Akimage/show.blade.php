@extends('layouts/app')

@section('vars')
	
@stop

@section('content')	
								

<div class="block" style="max-width:90vh;margin:auto">
	<div style="float:right">
		@include('includes.searches', ['tble' => 'SearchImages'])
	</div>
	<picture>
	   <source srcset='{{ $big }}' media='(min-width: 640px)' > <img src='{{ $small }}' alt="{!! $akimage->alt !!}" width="{{ $width }}" />	
	</picture> 
<br />
	<div class="caption">
		@if(strlen($akimage->caption))
			{!! $akimage->caption!!}. 
		@endif
		{!! "Photo: ",$akimage->credit ?? '' !!}</i> 
	</div>
	
	<br /><br />

	@if(strlen($akimage->buildings))
		<h3 style="text-align:center">
			@if(preg_match('/$akimage->buildings->buildname/',$akimage->buildings->client))
				{!! $akimage->buildings->buildname !!}, {!!$akimage->buildings->client!!}
			@else
				{!! $akimage->buildings->buildname !!}
			@endif
		</h3>
	@endif

	<span style="text-align:center">@include('/includes.nextPrev', ['tble'=>'Akimages', 'editTable'=>$akimage->imgid, 'id'=>'imgid', 'textBook'=>'Building', 'textChap'=>'Image'])</span>
</div>
	



<div id="disqus_thread"></div>
<script>

var disqus_config = function () {
this.page.url = 'http://alistairknox.org//akimages/{{$akimage->imgid}}';  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = '/akimages/{{$akimage->imgid}}'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};

(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = '//alistairknox-org.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

</div>                                
@stop
