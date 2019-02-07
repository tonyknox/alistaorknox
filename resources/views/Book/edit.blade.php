@if(Auth::check())

	@extends('layouts/app')


	@section('content2')

		<h1>Edit: {!! $book->bkname !!}</h1>

			{!! Form::model($book, ['method' => 'PATCH', 'action' => ['BooksController@update', $book->bkid]]) !!}

				@include ('Book._form', ['SubmitButtonText' => 'Update Book'])

			{!! Form::close() !!}
	
		
		@include ('errors.list')

	@stop

@endif