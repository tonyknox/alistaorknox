@extends('layouts/app')

@section('content')

	<div class="row">
	
		<div class="col">
<!-- col 2 - main content -->
			<h1>{!! $plan->plname !!}</h1>
			@include('includes.searches', ['tble' => 'SearchPlans'])
			@if(count($plan->buildings))
				{!! $plan->buildings->buildname !!}<br />
			@endif
			@if(count($plan->addresses) && strlen($plan->addresses->suburb))
				Address:  {!! $address = addressString($plan->addresses->suite,$plan->addresses->lot_number,$plan->addresses->stnmbr,$plan->addresses->street,$plan->addresses->suburb,$plan->addresses->postcode,$plan->addresses->state); !!}<br />
			@endif
			
			<p>
				{!! $plan->plid  !!} : 
				{!! $plan->plname  ?? '' !!} <br />
				{!! $plan->plinfo !!}
			</p>
		
			<span style="text-align:center">@include('/includes.nextPrevMin',['tble'=>'Plans', 'editTable'=>$plan->plid, 'id'=>'plid', 'text'=>'Plan'])</span>
		
		</div>	
	</div>


<!-- - - - - -->	

<div id="disqus_thread"></div>
<script>

var disqus_config = function () {
this.page.url = 'http://alistairknox.org/plans/{{$plan->plid}}';  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = '/plans/{{$plan->plid}}'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
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
