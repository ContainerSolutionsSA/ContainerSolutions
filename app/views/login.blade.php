@extends('layouts.master')
@section('content')
	{{ Form::open(['action' => 'HomeController@doLogin']) }}

	{{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'eMail']) }}
	{{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'password']) }}
	{{ Form::submit('Log In', ['class' => 'btn btn-primary']) }}
	{{ Form::close() }}
@stop