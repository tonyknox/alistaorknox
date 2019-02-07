
<div class="form-group">
	{!! Form::label('plinfo', 'Info:') !!}
	{!! Form::textarea('plinfo', NULL, ['class' => 'form-control' ]) !!}
</div>
<div class="form-group">
	{!! Form::label('thumbs', 'Thumbnails:') !!}
	{!! Form::text('thumbs', NULL, ['class' => 'form-control' ]) !!}
</div>
<div class="form-group">
	{!! Form::label('plname', 'Name:') !!}
	{!! Form::text('plname', NULL, ['class' => 'form-control' ]) !!}
</div>
<div class="form-group">
	{!! Form::label('adress_adrid', 'Address ID:') !!}
	{!! Form::text('adress_adrid', NULL, ['class' => 'form-control' ]) !!}
</div>
<div class="form-group">
	{!! Form::label('building_buildid', 'Building ID:') !!}
	{!! Form::text('building_buildid', NULL, ['class' => 'form-control' ]) !!}

<div class="form-group">
	{!! Form::submit($SubmitButtonText, ['class' => 'fbtn, btn-primary form-control' ]) !!}
</div>