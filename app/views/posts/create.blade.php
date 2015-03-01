@extends('layouts.master')

@section('content')

	<div class="col-md-6">
	{{ Form::open(array('action' => 'PostsController@store', 'class' => 'dropzone')) }}
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
@stop

@section('bottomscript')
	
	<script type="text/javascript">
	Dropzone.options.myAwesomeDropzone = { // The camelized version of the ID of the form element

	  // The configuration we've talked about above
	  autoProcessQueue: false,
	  uploadMultiple: true,
	  parallelUploads: 100,
	  maxFiles: 100,

	  // The setting up of the dropzone
	  init: function() {
	    var myDropzone = this;

	    // First change the button to actually tell Dropzone to process the queue.
	    this.element.querySelector("button[type=submit]").addEventListener("click", function(e) {
	      // Make sure that the form isn't actually being sent.
	      e.preventDefault();
	      e.stopPropagation();
	      myDropzone.processQueue();
	    });

	    // Listen to the sendingmultiple event. In this case, it's the sendingmultiple event instead
	    // of the sending event because uploadMultiple is set to true.
	    this.on("sendingmultiple", function() {
	      // Gets triggered when the form is actually being sent.
	      // Hide the success button or the complete form.
	    });
	    this.on("successmultiple", function(files, response) {
	      // Gets triggered when the files have successfully been sent.
	      // Redirect user or notify of success.
	    });
	    this.on("errormultiple", function(files, response) {
	      // Gets triggered when there was an error sending the files.
	      // Maybe show form again, and notify user of error
	    });
	  }

	}
	</script>
@stop