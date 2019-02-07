@if(Auth::check())

	@extends('layouts/app')

		@section('content2')
			<h1>New Book</h1>


				{!! Form::open(['url' => 'books']) !!}

					@include ('Book._form', ['SubmitButtonText' => 'Add Book'])

				{!! Form::close() !!}

				@include ('errors.list')
		
		@stop

@endif