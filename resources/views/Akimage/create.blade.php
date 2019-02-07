@if(Auth::check())

	@extends('layouts/app')


	@section('content')

		<h1>New Image</h1>

		<div style="margin-left:40px;margin-right:40px">

			{!! Form::open(['url' => 'image']) !!}

				@include ('Akimage._form', ['SubmitButtonText' => 'Add Image'])

			{!! Form::close() !!}

		</div>

		@include ('errors.list')

	@stop
	
@endif