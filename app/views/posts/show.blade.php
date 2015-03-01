@extends('layouts.master')
@section('content')
	<h3> {{ $post->name }} </h3>
	<p> {{ $post->height }} </p>
	<p> {{ $post->width }} </p>
	<p> {{ $post->length }} </p>
	<p> {{ $post->windows }} </p>
	<p> {{ $post->ac }} </p>
	<p> {{ $post->bathroom }} </p>
	<p> {{ $post->kitchen }} </p>
	<p> {{ $post->security_lights }} </p>
	{{ HTML::link('/posts', 'View All Posts', array('class' => 'btn btn-primary btn-xs')) }}
	@if (Auth::check())
		{{ HTML::link('/posts' . '/' . $post->id . '/edit', 'Edit', array('class' => 'btn btn-success btn-xs')) }}
		{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE', 'id'=>'delete-form')) }}
	    {{ Form::submit('Delete', ['class'=>'btn btn-danger btn-xs']) }}
    @endif
    {{ Form::close() }}
@stop

@section('bottomscript')
	<script type="text/javascript">
		$('.delete-form').submit(function(e)) {
			if(!confirm('Are you sure you want to delete this post?')) {
				e.preventDefault();
			}
		});
	</script>
@stop