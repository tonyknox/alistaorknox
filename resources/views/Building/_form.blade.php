
<div class="row">
	
	<div class="col">

		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		
		<div class="form-group">
			{!! Form::label('buildname', 'Name:') !!}
			{!! Form::text('buildname', NULL, ['class' => 'form-control' ]) !!}
		</div>
	</div>
	<div class="col">
		<div class="form-group">
			{!! Form::label('client', 'Client:') !!}
			{!! Form::text('client', NULL, ['class' => 'form-control' ]) !!}
		</div>
	</div>
</div>
<div class="row">
	<div class="col">
		<div class="form-group">
			{!! Form::label('date_built', 'Date Built:') !!}
			{!! Form::text('date_built', NULL, ['class' => 'form-control' ]) !!}
		</div>
	</div>
	<div class="col">
		<div class="form-group">
			{!! Form::label('year_built', 'Year Built:') !!}
			{!! Form::text('year_built', NULL, ['class' => 'form-control' ]) !!}
		</div>
	</div>
	<div class="col">
		<div class="form-group">
			{!! Form::label('jobnumber', 'Job Number:') !!}
			{!! Form::text('jobnumber', NULL, ['class' => 'form-control' ]) !!}
		</div>
	</div>
</div>
<div class="row">
	<div class="col">
		<div class="form-group">
			{!! Form::label('project_pjid', 'Project ID:') !!}
			{!! Form::text('project_pjid', NULL, ['class' => 'form-control' ]) !!}
		</div>
	</div>	
	<div class="col">
		<div class="form-group">
			{!! Form::label('address_adrid', 'Address ID:') !!}
			{!! Form::text('address_adrid', NULL, ['class' => 'form-control' ]) !!}
		</div>
	</div>
	<div class="col">
		<div class="form-group">
			{!! Form::label('numdrawings', 'Number of Drawings:') !!}
			{!! Form::text('numdrawings', NULL, ['class' => 'form-control' ]) !!}
		</div>	
	</div>
	<div class="col">
		<div class="form-group">
			{!! Form::label('buildsortnum', 'Building Sort:') !!}
			{!! Form::text('buildsortnum', NULL, ['class' => 'form-control' ]) !!}
		</div>
	</div>
</div>
<div class="row">
	<div class="col">
		<div class="form-group">
			{!! Form::label('keywords', 'Keywords:') !!}
			{!! Form::text('keywords', NULL, ['class' => 'form-control' ]) !!}
		</div>
	</div>
	<div class="col">
		<div class="form-group">
			{!! Form::label('drawinglocation', 'Drawing Location:') !!}
			{!! Form::text('drawinglocation', NULL, ['class' => 'form-control' ]) !!}
		</div>
	</div>
</div>
<div class="row">
	<div class="col">
		<div class="form-group">
			{!! Form::label('buildplan', 'Plan:') !!}
			{!! Form::text('buildplan', NULL, ['class' => 'form-control' ]) !!}
		</div>
	</div>
	<div class="col">
		<div class="form-group">
			{!! Form::label('otherprofessional', 'Other Professionals Employed:') !!}
			{!! Form::text('otherprofessional', NULL, ['class' => 'form-control' ]) !!}
		</div>
	</div>
</div>
<div class="row">
	<div class="col">
		<div class="form-group">
			{!! Form::label('builddescription', 'Description:') !!}
			{!! Form::textarea('builddescription', NULL, ['class' => 'form-control', 'rows' => 3 ]) !!}
		</div>
	</div>
	<div class="col">
		<div class="form-group">
			{!! Form::label('buildnote', 'Building Note:') !!}
			{!! Form::textarea('buildnote', NULL, ['class' => 'form-control', 'rows' => 3 ]) !!}
		</div>
	</div>
</div>
<div class="row">
	<div class="col">
		<div class="form-group">
			{!! Form::label('buildimage', 'Building Image:') !!}
			{!! Form::textarea('buildimage', NULL, ['class' => 'form-control', 'rows' => 2 ]) !!}
		</div>
	</div>
	<div class="col">
		<div class="form-group">
			{!! Form::label('drawingdescription', 'Drawing Description:') !!}
			{!! Form::textarea('drawingdescription', NULL, ['class' => 'form-control', 'rows' => 2 ]) !!}
		</div>
	</div>
</div>
<div class="row">
	<div class="col">
		<div class="form-group">
			{!! Form::label('manuscriptinfo', 'Manuscript Info:') !!}
			{!! Form::textarea('manuscriptinfo', NULL, ['class' => 'form-control', 'rows' => 2 ]) !!}
		</div>
	</div>
	<div class="col">
		<div class="form-group">
			{!! Form::label('manuscriptcomment', 'Manuscript Comment:') !!}
			{!! Form::textarea('manuscriptcomment', NULL, ['class' => 'form-control', 'rows' => 2 ]) !!}
		</div>
	</div>
</div>
<div class="row">
	<div class="col">
		<div class="form-group">
			{!! Form::label('manuscriptlocation', 'Manuscript Location:') !!}
			{!! Form::text('manuscriptlocation', NULL, ['class' => 'form-control' ]) !!}
		</div>
	</div>
	<div class="col">
		<div class="form-group">
			{!! Form::label('drawinglocation2', 'Drawing Location2:') !!}
			{!! Form::text('drawinglocation2', NULL, ['class' => 'form-control' ]) !!}
		</div>
	</div>
</div>
<div class="row">
	<div class="col">
		<div class="form-group">
			{!! Form::submit($SubmitButtonText, ['class' => 'fbtn, btn-primary form-control' ]) !!}
		</div>
	</div>
	<div class="col">
		<div class="form-group">
			{!! Form::label('buildplan2', 'Building Plan2:') !!}
			{!! Form::text('buildplan2', NULL, ['class' => 'form-control' ]) !!}
		</div>
	</div>
</div>




