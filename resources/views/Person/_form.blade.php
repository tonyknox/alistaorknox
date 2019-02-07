<div class="row">
	<div class="col">
		
		<div class="form-group">
			{!! Form::label('ppfirst_name', 'First Name:') !!}
			{!! Form::text('ppfirst_name', NULL, ['class' => 'form-control' ]) !!}
		</div>
	</div>
	<div class="col">
		<div class="form-group">
			{!! Form::label('ppname', 'Surname:') !!}
			{!! Form::text('ppname', NULL, ['class' => 'form-control' ]) !!}
		</div>
	</div>
</div>
<div class="row">
	<div class="col">
		<div class="form-group">
			{!! Form::label('ppinfo', 'Info:') !!}
			{!! Form::textarea('ppinfo', NULL, ['class' => 'form-control', 'rows' => 15 ]) !!}
		</div>
	</div>
</div>
<div class="row">
	<div class="col">
		<div class="form-group">
			{!! Form::label('ppdescription', 'Description:') !!}
			{!! Form::text('ppdescription', NULL, ['class' => 'form-control' ]) !!}
		</div>
	</div>
	<div class="col">
		<div class="form-group">
			{!! Form::label('pptype', 'Person or Place:') !!}
			{!! Form::text('pptype', NULL, ['class' => 'form-control' ]) !!}
		</div>
	</div>
</div>
<div class="row">
	<div class="col">
		<div class="form-group">
			{!! Form::label('ppimgpath', 'Image Name:') !!}
			{!! Form::text('ppimgpath', NULL, ['class' => 'form-control' ]) !!}
		</div>
	</div>
	<div class="col">
		<div class="form-group">
			{!! Form::label('ppimgname', 'Image Path:') !!}
			{!! Form::text('ppimgname', NULL, ['class' => 'form-control' ]) !!}
		</div>
	</div>
	<div class="col">
		<div class="form-group">
			{!! Form::label('ppimgext', 'Image Extension:') !!}
			{!! Form::text('ppimgext', NULL, ['class' => 'form-control' ]) !!}
		</div>
	</div>
</div>
<div class="row">
	<div class="col">
		<div class="form-group">
			{!! Form::label('ppalt', 'Image alt:') !!}
			{!! Form::text('ppalt', NULL, ['class' => 'form-control' ]) !!}
		</div>
	</div>
	<div class="col">
		<div class="form-group">
			{!! Form::label('ppcaption', 'Image Caption:') !!}
			{!! Form::text('ppcaption', NULL, ['class' => 'form-control' ]) !!}
		</div>
	</div>
</div>

<div class="row">
	<div class="col"> <br />
		<div class="form-group">
			{!! Form::submit($SubmitButtonText, ['class' => 'fbtn, btn-primary form-control' ]) !!}
		</div>
	</div>
</div>

