@if(Auth::check())

	@extends('layouts/app')


	@section('content2')
		<h1>New Address</h1>

	

		{!! Form::open(['url' => 'addresses']) !!}

			@include ('Address._form', ['SubmitButtonText' => 'Add Address'])

		{!! Form::close() !!}

		@include ('errors.list')
	

	@stop

@endif
