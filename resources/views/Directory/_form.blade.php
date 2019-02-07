
<div class="row">
	<div class="col">	

		<div class="form-group">
			{!! Form::label('dirname', 'Name:') !!}
			{!! Form::text('dirname', NULL, ['class' => 'form-control' ]) !!}
		</div>
	</div>
	<div class="col">
		<div class="form-group">
			{!! Form::label('dirheader', 'Header:') !!}
			{!! Form::text('dirheader', NULL, ['class' => 'form-control' ]) !!}
		</div>
	</div>
</div>
<div class="row">
	<div class="col">
		<div class="form-group">
			{!! Form::label('section_2', 'Section2:') !!}
			{!! Form::textarea('section_2', NULL, ['class' => 'form-control', 'rows' => 18 ]) !!}
		</div>
		<div class="form-group">
			{!! Form::label('title_info', 'Title Info:') !!}
			{!! Form::textarea('title_info', NULL, ['class' => 'form-control', 'rows' => 2 ]) !!}
		</div>
		<div class="form-group">
			{!! Form::submit($SubmitButtonText, ['class' => 'fbtn, btn-primary form-control' ]) !!}
		</div>
	</div>
</div>