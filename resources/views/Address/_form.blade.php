<div class="row">
	<div class="col">

<div class="form-group">
	{!! Form::label('adrid', 'ID:') !!}
	{!! Form::text('adrid', NULL, ['class' => 'form-control' ]) !!}
</div>
<div class="form-group">
	{!! Form::label('suite', 'Suite:') !!}
	{!! Form::text('suite', NULL, ['class' => 'form-control' ]) !!}
</div>

<div class="form-group">
	{!! Form::label('stnmbr', 'Street Number:') !!}
	{!! Form::text('stnmbr', NULL, ['class' => 'form-control' ]) !!}
</div>

<div class="form-group">
	{!! Form::label('lot_number', 'Lot Number:') !!}
	{!! Form::text('lot_number', NULL, ['class' => 'form-control' ]) !!}
</div>

<div class="form-group">
	{!! Form::label('street', 'Street:') !!}
	{!! Form::text('street', NULL, ['class' => 'form-control' ]) !!}
</div>

<div class="form-group">
	{!! Form::label('suburb', 'Suburb:') !!}
	{!! Form::text('suburb', NULL, ['class' => 'form-control' ]) !!}
</div>
<div class="form-group">
	{!! Form::submit($SubmitButtonText, ['class' => 'fbtn, btn-primary form-control' ]) !!}
</div>
</div>
<div class="col">
	
<div class="form-group">
	{!! Form::label('postcode', 'Postcode:') !!}
	{!! Form::text('postcode', NULL, ['class' => 'form-control' ]) !!}
</div>

<div class="form-group">
	{!! Form::label('state', 'State:') !!}
	{!! Form::text('state', NULL, ['class' => 'form-control' ]) !!}
</div>

<div class="form-group">
	{!! Form::label('municipality', 'Municipality:') !!}
	{!! Form::text('municipality', NULL, ['class' => 'form-control' ]) !!}
</div>

<div class="form-group">
	{!! Form::label('sla', 'SLA:') !!}
	{!! Form::text('sla', NULL, ['class' => 'form-control' ]) !!}
</div>

<div class="form-group">
	{!! Form::label('building_id', 'Building ID:') !!}
	{!! Form::text('building_id', NULL, ['class' => 'form-control' ]) !!}
</div>

<div class="form-group">
	{!! Form::label('plan_id', 'Plan ID:') !!}
	{!! Form::text('plan_id', NULL, ['class' => 'form-control' ]) !!}
</div>


</div>
</div>