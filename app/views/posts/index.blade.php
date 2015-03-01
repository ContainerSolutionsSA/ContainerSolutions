@extends('layouts.master')
@section('content')

<h1>My Blog</h1>

	@foreach($posts as $post)
		<div>
			<h3> {{ $post->name }} </h3>
			<p> {{ $post->height }} </p>
			<p> {{ $post->width }} </p>
			<p> {{ $post->length }} </p>
			<p> {{ $post->windows }} </p>
			<p> {{ $post->ac }} </p>
			<p> {{ $post->bathroom }} </p>
			<p> {{ $post->kitchen }} </p>
			<p> {{ $post->security_lights }} </p>

		<div>{{ HTML::link('/posts' . '/' . $post->id, 'View', array('class' => 'btn btn-primary btn-xs')) }}</div>
		@if (Auth::check())
			<div>{{ HTML::link('/posts' . '/' . $post->id . '/edit', 'Edit', array('class' => 'btn btn-success btn-xs')) }}</div>
			<button class="btn btn-danger delete-btn btn-xs" data-post-id="{{{ $post->id }}}">Delete</button>
		@endif
	@endforeach
	
	{{ Form::open(array('method' => 'DELETE', 'id'=>'delete-form')) }}
    {{ Form::close() }}

@stop

@section('bottomscript')

	<script type="text/javascript">
	$(".delete-btn").click(function() {
		var postId = $(this).data('post-id')

		$("#delete-form").attr('action', '/posts/' + postId);

		if(confirm('Are you sure you want to delete this post?')) {
			$("#delete-form").submit();
		}
	});
	</script>

@stop