@if(Auth::check())

	@extends('layouts/app')


	@section('content2')

		<h1>New Chapter</h1>

		<div style="margin-left:40px;margin-right:40px">

			{!! Form::open(['url' => 'chapters']) !!}

				@include ('Chapter._form', ['SubmitButtonText' => 'Add Chapter'])

			{!! Form::close() !!}

		</div>

		@include ('errors.list')

	@stop

@endif