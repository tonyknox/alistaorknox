@if(strlen($building->client))	
	<strong>Client:</strong> {!!$building->client!!}
@endif
<!--address-->
@if(count($building->addresses) && strlen($building->addresses->suburb))<br />
	<strong>Address:</strong>  
	{!! isset($building->addresses->stnmbr) ? $building->addresses->stnmbr : $building->addresses->lot_number !!}  
	{!! $building->addresses->street !!}, 
	{!! $building->addresses->suburb !!}. 
	{!! strtoupper($building->addresses->state) !!}
	{!! $building->addresses->postcode !!}
@endif
@if(strlen($building->date_built)>1) <br />
	<strong>Plan Dated:</strong> {!! $building->date_built !!}
@endif
@if(strlen($building->jobnumber))<br />
	<strong>Job Number:</strong> {!!$building->jobnumber!!}
@endif
<!-- drawing info -->
@if(strlen($building->builddescription)>1)<br />
	<strong>Description:</strong> {!!$building->builddescription!!}
@endif
@if(strlen($building->builddescription2)>1)<br />
	<strong>Description:</strong> {!!$building->builddescription2!!}
@endif
@if(strlen($building->drawinglocation)>1)<br />
	<strong>Drawing Location:</strong> {!!$building->drawinglocation!!}
@endif
@if(strlen($building->drawinglocation2)>1)<br />
	<strong>Drawing Location:</strong> {!!$building->drawinglocation2!!}
@endif					
<!--manuscript info-->
@if(strlen($building->manuscriptlocation)>1)<br />
	<strong>Manuscript Location:</strong> {!!$building->manuscriptlocation!!}
@endif
@if(strlen($building->manuscriptinfo)>1)<br />
	<strong>Manuscript Info:</strong> {!!$building->manuscriptinfo!!}
@endif
@if(strlen($building->manuscriptcomment)>1)<br />
	<strong>Manuscript Comment:</strong> {!!$building->manuscriptcomment!!}
@endif 
<!--images-->
@if(strlen($building->buildplan)>6)<br />
	<strong>Plans:</strong><br />
	<div style="margin-left:20px">
		<a href="{!!action('BuildingsController@edit', [$building->buildid])!!}">{!!$building->buildplan!!}</a>
	</div>
@endif
@if(strlen($building->buildplan2)>1)<br />
	<strong>Plans:</strong> {!!$building->buildplan2!!}
@endif
<!--notes-->
@if(strlen($building->buildnote)>1)<br />
	<strong>Notes:</strong> {!!$building->buildnote!!}
@endif
@if(strlen($building->keywords)>1)<br />
	<strong>Keywords:</strong> {!!$building->keywords!!}
@endif
@if(strlen($building->otherprofessional)>1)<br />
	<strong>Other Professional Employed:</strong> {!!$building->otherprofessional!!}
@endif