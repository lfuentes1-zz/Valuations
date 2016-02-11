<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>San Antonio Valuations</title>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="/css/main.css">
		@section('head')
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	   	@show
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<img src="/img/theAlamo.jpg" class="img-responsive" alt="Responsive image">
			</div>
		</div>
		<div class="container-fluid top-box">
			@yield('content')
		</div>
		<footer>
			@include('partials.prospect_footer')
		</footer>
	</body>
</html>

<!--
TODO:  Center elements inside form
*TODO:  vertically responsive
TODO:  Invalid address detection - not allowed to proceed..

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB_ltk7t5oRK_HAoJoo4JQh9R1vz4-1mnU&amp;libraries=places&amp;sensor=false"
	   			type="text/javascript"></script>
 -->