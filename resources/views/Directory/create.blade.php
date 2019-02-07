@if(Auth::check())

	@extends('layouts/app')


	@section('content')

		<h1>New Directory</h1>

		<div style="margin-left:40px;margin-right:40px">

			{!! Form::open(['url' => 'directories']) !!}

				@include ('Directory._form', ['SubmitButtonText' => 'Add Directory'])

			{!! Form::close() !!}

		</div>

		@include ('errors.list')

	@stop

@endif