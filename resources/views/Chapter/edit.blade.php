@if(Auth::check())

	@extends('layouts/app')


	@section('content2')

		<h1>Edit: {!! $chapter->chapname !!}</h1>
		<div style="margin-left:40px;margin-right:40px">
			{!! Form::model($chapter, ['method' => 'PATCH', 'action' => ['ChaptersController@update', $chapter->chapid]]) !!}

				@include ('Chapter._form', ['SubmitButtonText' => 'Update Chapter'])

			{!! Form::close() !!}
		</div>
		@include ('errors.list')

	@stop

@endif