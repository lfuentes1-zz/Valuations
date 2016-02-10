<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>San Antonio Valuations</title>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<style>
			/*@import url(//fonts.googleapis.com/css?family=Lato:700);*/

			/*http://stackoverflow.com/questions/28144233/bootstrap-container-with-positionabsolute-loses-layout-inside*/
			.top-box {
			    position: absolute;
			    top: 100px;
			    right: 0;
			    left: 0;			
			}

			/*.center-block() {
			  display: block;
			  margin-left: auto;
			  margin-right: auto;
			}*/

			/*// Usage
			.ontop {
  				width: 940px;
  				.center-block();
			}*/

			.jumbotron {
				border: #5CB85C solid 5px;
 				border-radius:10px;
				background: rgb(51, 51, 51); /* This is for ie8 and below */
				background: rgba(51, 51, 51, 0.5); 
			}

			.jumbotron-heading {
				color: #FFFFFF;
			}

			.jumbotron-subheading {
				color: #FBFCB9;
			}

			.jumbotron-special-txt {
				color: #F92C07;
			}

		</style>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB_ltk7t5oRK_HAoJoo4JQh9R1vz4-1mnU&amp;libraries=places&amp;sensor=false"
	   			type="text/javascript"></script>
		<script src="/js/main.js"></script>

	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<img src="/img/theAlamo.jpg" class="img-responsive" alt="Responsive image">
			</div>
		</div>
		<div class="container-fluid top-box">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 col-xs-12 col-sm-6 col-sm-offset-3 jumbotron">
					<div class="jumbotron-heading text-center">
						<h2>What is your San Antonio home worth?</h2>
					</div>
					<div class="jumbotron-subheading text-center">
						<h3>Get your <span class="jumbotron-special-txt">FREE</span> Home Market Analysis Report</h3>
					</div>
					<form class="form-inline">
						<div class="form-group">
					    	<label for="prospect-address"></label>
					    	<input type="text" class="form-control" id="prospect-address" placeholder="Address" autocomplete="on" size="55">
					  	</div>
					  	<div class="form-group">
					    	<label for="prospect-unit-number"></label>
					    	<input type="text" class="form-control" id="prospect-unit-number" placeholder="Unit #">
					  	</div>
					  	<button type="submit" class="btn btn-success">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>

<!--
TODO:  Center elements inside form
TODO:  separate CSS file
*TODO:  vertically responsive
TODO:  Add footer with contact info
TODO:  Invalid address detection - not allowed to proceed
TODO:  Convert the file to a blade
 -->