@if(Auth::check())

	@extends('layouts/app')


	@section('content')

		<h1>Edit: {!! $person->ppname !!}</h1>

			{!! Form::model($person, ['method' => 'PATCH', 'action' => ['PeopleController@update', $person->ppid]]) !!}

				@include ('Person._form', ['SubmitButtonText' => 'Update Person'])

			{!! Form::close() !!}
		

		@include ('errors.list')

	@stop

@endif