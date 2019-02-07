@if(Auth::check())

	@extends('layouts/app')


	@section('content2')

		<h1>New Building</h1>


			{!! Form::open(['url' => 'buildings']) !!}

				@include ('Building._form', ['SubmitButtonText' => 'Add Building'])

			{!! Form::close() !!}

			@include ('errors.list')



	@stop

@endif