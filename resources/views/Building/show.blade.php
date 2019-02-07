@extends('layouts/app')

@section('content')
<div class="row">
	<!-- col 1 - sidebar -->
	<div class="d-none d-sm-block col-3">
		@if(count($builds) == 1)
			<p><a href="/buildings/{{ $builds->buildid }}">{{$builds->buildname}}</a></p>
		@elseif(count($builds) > 1)
			@foreach($builds as $bld)
				<p><a href="/buildings/{{ $bld->buildid }}">{{$bld->buildname}}</a></p>
			@endforeach
		@endif
	</div>

	<div class="col">	<!-- col 2 - main content -->
		
		@include('includes.searches', ['tble' => 'SearchBuildings'])
						
		@if(!count($building))
			<h3>No building matches your query. Try again . . .<br /></h3>
		@else
			<h3>{!! $building->buildname !!}</h3>	

			@include('includes/details.buildings')


			<div class="row">
						
				<!-- images -->
				
				<div class="col">
					<br />
					@if($building->akimages)
						@foreach($building->akimages as $img)
							<div class="left" style="max-width:175px;height:190px;" >
								<a href="{!! action('AkimagesController@show', [$img->imgid]) !!}">
									<img src="{!! $img->imgpath !!}/{!! $img->imgname !!}.{!! $img->imgextension !!}" alt="{!! $img->alt !!}" />
									<span class="caption">
										{!! $img->caption !!}  @if(strlen($img->credit))<i>Photo: {{ $img->credit }}</i>@endif
									</span>
								</a>
							</div>			
						@endforeach
					@endif
				</div>
			</div>
		@endif
	</div>
</div>
<span style="text-align:center">@include('/includes.nextPrevMin',['tble'=>'Buildings', 'editTable'=>$building->buildid, 'id'=>'buildid', 'text'=>'Building'])</span>
	

<!-- - - - - -->


		
			
<script>

var disqus_config = function () {
this.page.url = 'http://alistairknox.org/buildings/{{$building->buildid}}';  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = 'http://alistairknox.org/buildings/{{$building->buildid}}'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};

(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = '//alistairknox-org.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
</div>	<div id="disqus_thread">
	
</div>
@stop
