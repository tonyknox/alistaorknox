@extends('layouts/app')

@section('content')
	<div class="row">
		<div class="d-none d-sm-block col-3">
			<h5>Other People</h5>
			@foreach($ppl as $ppl) 
				@if(!isset($ppl->ppfirst_name) && isset($ppl->ppname))
					<p><a href="{{action('PeopleController@show', [$ppl->ppid])}}">{{$ppl->ppname}}</a></p>
				@elseif(isset($ppl->ppfirst_name))
					<p><a href="{{action('PeopleController@show', [$ppl->ppid])}}">{{$ppl->ppfirst_name}} {{$ppl->ppname}}</a></p>
				@endif
			@endforeach
		</div>

		<div class="col" style="max-width:520px;"> <!-- col 2 - main content -->
			<div class="d-sm-none">
				@include('includes.searches', ['tble' => 'SearchPeople'])
			</div>
			<h1>
				@if(isset($person->ppfirst_name))
					{{ $person->ppfirst_name }} {{ $person->ppname }}
				@else
					{!! $person->ppname !!}
				@endif
			</h1>

			
			<div class="block w60
			 right">
				<figure class="figure">
					<img src="{{$person->ppimgpath}}/{{$person->ppimgname}}.{{$person->ppimgext}}" class="figure-img img-fluid alt="{{$person->ppalt}}" width="100%" />
					<figcaption class="figure-caption">{{$person->ppcaption}}</figcaption>
				</figure>
			</div>
			<p>
				<div class="hyphenate" style="text-align:justify">
					{!! $person->ppinfo ?? '' !!}	
				</div>
			</p>
			<span style="text-align:center">@include('/includes.nextPrevMin',['tble'=>'People', 'editTable'=>$person->ppid, 'id'=>'ppid', 'text'=>'Person'])</span>
		</div>		

		<!-- col 1 - sidebar -->
		
	<!-- col 3 - search -->
		<div class="d-none d-sm-block col-2">
		@include('includes.searches', ['tble' => 'SearchPeople'])
		</div>
	</div>
<!-- - - - - -->	

<div id="disqus_thread"></div>
<script>

var disqus_config = function () {
this.page.url = 'http://alistairknox.org/people/{{$person->ppid}}';  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = '/people/{{$person->ppid}}'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
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
