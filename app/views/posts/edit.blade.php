@extends('layouts.master')
@section('content')

<h1>Edit Blog Post</h1>

<div class="col-md-6">
{{ Form::model($post, (array('action' => ['PostsController@update', $post->id], 'method' => 'PUT'))) }}
	<div class="form-group">
			{{ Form::label('name', 'Name') }}
			{{ Form::text('name', Input::old('name'), array('placeholder'=>'name')) }}
		</div>
		<div class="form-group">
			{{ Form::label('height', 'Height') }}
			{{ Form::text('height', Input::old('height'), array('placeholder'=>'height')) }}
		</div>
		<div class="form-group">
			{{ Form::label('width', 'Width') }}
			{{ Form::text('width', Input::old('width'), array('placeholder'=>'width')) }}
		</div>
		<div class="form-group">
			{{ Form::label('length', 'Length') }}
			{{ Form::text('length', Input::old('length'), array('placeholder'=>'length')) }}
		</div>
		<div class="form-group">
			{{ Form::label('windows', 'Windows') }}
			{{ Form::text('windows', Input::old('windows'), array('placeholder'=>'windows')) }}
		</div>
		<div class="form-group">
			{{ Form::label('ac', 'A/C') }}
			{{ Form::checkbox('ac', Input::old('ac'), array('value'=>true)) }}
<!-- 		</div>
		<div class="form-group"> -->
			{{ Form::label('bathroom', 'Bathroom') }}
			{{ Form::checkbox('bathroom', Input::old('bathroom'), array('value'=>true)) }}
<!-- 		</div>
		<div class="form-group"> -->
			{{ Form::label('kitchen', 'Kitchen') }}
			{{ Form::checkbox('kitchen', Input::old('kitchen'), array('value'=>true)) }}
<!-- 		</div>
		<div class="form-group"> -->
			{{ Form::label('security_lights', 'Security Lights') }}
			{{ Form::checkbox('security_lights', Input::old('security_lights'), array('value'=>true)) }}
		</div>
<!-- 		<div class="form-group">
			{{ Form::label('body', 'Body') }}
			{{ Form::textarea('body', Input::old('body'), array('placeholder'=>'body', 'cols'=>'100', 'rows'=>'20')) }}
		</div> -->

	{{ Form::submit('submit') }}

	{{ Form::close() }}
</div>
<div class="col-md-6">
</div>





@stop