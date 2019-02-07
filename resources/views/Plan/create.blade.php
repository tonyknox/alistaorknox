@if(Auth::check())

	@extends('layouts/app')


	@section('content2')

		<h1>New Plan</h1>


			{!! Form::open(['url' => 'plan']) !!}

				@include ('Plan._form', ['SubmitButtonText' => 'Add Plan'])

			{!! Form::close() !!}

		@include ('errors.list')

	@stop

@endif