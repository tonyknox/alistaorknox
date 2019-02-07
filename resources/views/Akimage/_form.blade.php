<div class="row">
	<div class="col">
		
<div class="form-group">
	{!! Form::label('imgid', 'ID:') !!}
	{!! Form::text('imgid', NULL, ['class' => 'form-control' ]) !!}
</div>
<div class="form-group">
	{!! Form::label('imgname', 'Image Name:') !!}
	{!! Form::text('imgname', NULL, ['class' => 'form-control' ]) !!}
</div>
<div class="form-group">
	{!! Form::label('imgpath', 'Path:') !!}
	{!! Form::text('imgpath', NULL, ['class' => 'form-control' ]) !!}
</div>
<div class="form-group">
	{!! Form::label('imgextension', 'Extension:') !!}
	{!! Form::text('imgextension', NULL, ['class' => 'form-control' ]) !!}
</div>
<div class="form-group">
	{!! Form::label('alt', 'Alt:') !!}
	{!! Form::text('alt', NULL, ['class' => 'form-control' ]) !!}
</div>
<div class="form-group">
	{!! Form::label('caption', 'Caption:') !!}
	{!! Form::text('caption', NULL, ['class' => 'form-control' ]) !!}
</div>

</div>
<div class="col">
	
<div class="form-group">
	{!! Form::label('credit', 'Credit:') !!}
	{!! Form::text('credit', NULL, ['class' => 'form-control' ]) !!}
</div>
<div class="form-group">
	{!! Form::label('buildings_buildid', 'Buildings ID:') !!}
	{!! Form::text('buildings_buildid', NULL, ['class' => 'form-control' ]) !!}
</div>
<div class="form-group">
	{!! Form::label('people_ppid', 'People ID:') !!}
	{!! Form::text('people_ppid', NULL, ['class' => 'form-control' ]) !!}
</div>
<div class="form-group">
	{!! Form::label('directories_dirid', 'Directories ID:') !!}
	{!! Form::text('directories_dirid', NULL, ['class' => 'form-control' ]) !!}
</div>
<div class="form-group">
	{!! Form::label('chapters_chapid', 'Chapters ID:') !!}
	{!! Form::text('chapters_chapid', NULL, ['class' => 'form-control' ]) !!}
</div>
<div class="form-group">
	{!! Form::submit($SubmitButtonText, ['class' => 'fbtn, btn-primary form-control' ]) !!}
</div>
</div>
</div>
