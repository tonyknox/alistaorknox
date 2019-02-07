<div class="row">
	<div class="col">
		


<div class="form-group">
	{!! Form::label('bkname', 'Name:') !!}
	{!! Form::text('bkname', NULL, ['class' => 'form-control' ]) !!}
</div>

<div class="form-group">
	{!! Form::label('bkdescription', 'Description:') !!}
	{!! Form::textarea('bkdescription', NULL, ['class' => 'form-control' ]) !!}
</div>

<div class="form-group">
	{!! Form::label('bkinfo', 'Info:') !!}
	{!! Form::textarea('bkinfo', NULL, ['class' => 'form-control' ]) !!}
</div>

</div>
<div class="col">
	
	<div class="form-group">
	{!! Form::label('author', 'Author:') !!}
	{!! Form::text('author', NULL, ['class' => 'form-control' ]) !!}
</div>
<div class="form-group">
	{!! Form::label('book_sort', 'Sort:') !!}
	{!! Form::text('book_sort', NULL, ['class' => 'form-control' ]) !!}
</div>

<div class="form-group">
	{!! Form::label('bktype', 'Type:') !!}
	{!! Form::text('bktype', NULL, ['class' => 'form-control' ]) !!}
</div>

	<div class="form-group">
	{!! Form::label('thumb', 'Thumbnail:') !!}
	{!! Form::text('thumb', NULL, ['class' => 'form-control' ]) !!}
</div>

<div class="form-group">
	{!! Form::label('created_at', 'Created:') !!}
	{!! Form::text('created_at', NULL, ['class' => 'form-control' ]) !!}
</div>

<div class="form-group">
	{!! Form::label('updated_at', 'Updated:') !!}
	{!! Form::text('updated_at', NULL, ['class' => 'form-control' ]) !!}
</div>

<div class="form-group">
	{!! Form::submit($SubmitButtonText, ['class' => 'fbtn, btn-primary form-control' ]) !!}
</div>
</div>
</div>