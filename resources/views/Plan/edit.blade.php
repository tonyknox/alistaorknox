@if(Auth::check())

	@extends('layouts/app')


	@section('content2')

		<h1>Edit: {!! $plans->plname !!}</h1>

			{!! Form::model($plans, ['method' => 'PATCH', 'action' => ['PlansController@update', $plans->plid]]) !!}

				@include ('Plan._form', ['SubmitButtonText' => 'Update Plan'])

			{!! Form::close() !!}
		

		@include ('errors.list')


	@stop

@endif