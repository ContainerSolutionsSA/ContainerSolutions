<!DOCTYPE html>
<html lang="en">
<head>
    <title>Container Solutions</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/css/master.css">
    <link href="/css/dropzone.css" type="text/css" rel="stylesheet" />
   
@yield('topscript')
</head>

<body>
	@include('partials.navbar')
	<div class="container">
		@if (Session::has('successMessage'))
		    <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
		@endif
		@if (Session::has('errorMessage'))
		    <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
		@endif
		
		@yield('content')
    </div>


    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script src="/js/dropzone.js"></script>

</body>
@yield('bottomscript')
</html>