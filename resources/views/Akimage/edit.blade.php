@if(Auth::check())

	@extends('layouts/app')


	@section('content')

			<h1>Edit: {!! $akimage->imgname !!}</h1>
			<div style="margin-left:40px;margin-right:40px">
				{!! Form::model($akimage, ['method' => 'PATCH', 'action' => ['AkimagesController@update', $akimage->imgid]]) !!}

					@include ('Akimage._form', ['SubmitButtonText' => 'Update Image'])

				{!! Form::close() !!}
			</div>
			

			@include ('errors.list')
		

	@stop

@endif