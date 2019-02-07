@if(Auth::check())

	@extends('layouts/app')


	@section('content')

		<h1>New Person</h1>

		

			{!! Form::open(['url' => 'people']) !!}

				@include ('Person._form', ['SubmitButtonText' => 'Add Person'])

			{!! Form::close() !!}



		@include ('errors.list')

	@stop

@endif