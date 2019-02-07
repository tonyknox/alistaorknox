@if(Auth::check())

	@extends('layouts/app')


	@section('content2')

		<h1>Edit: {!! $building->buildname !!}</h1>

			{!! Form::model($building, ['method' => 'PATCH', 'action' => ['BuildingsController@update', $building->buildid]]) !!}

				@include ('Building._form', ['SubmitButtonText' => 'Update Building'])

			{!! Form::close() !!}
		
		@include ('errors.list')

	@stop

@endif