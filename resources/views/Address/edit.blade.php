
@if(Auth::check())

	@extends('layouts/app')

	@section('content2')


		<h1>Edit: {!! $address->street !!} {!! $address->suburb !!}</h1>

		
			{!! Form::model($address, ['method' => 'PATCH', 'action' => ['AddressesController@update', $address->adrid]]) !!}

				@include ('Address._form', ['SubmitButtonText' => 'Update Address'])

			{!! Form::close() !!}
			
		

		@include ('errors.list')


	@stop

@endif