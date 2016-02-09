<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Laravel PHP Framework</title>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<style>
			@import url(//fonts.googleapis.com/css?family=Lato:700);

			/*http://stackoverflow.com/questions/28144233/bootstrap-container-with-positionabsolute-loses-layout-inside*/
			.ontop {
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
				border: #f76c6c solid 5px;
 				border-radius:10px;
				background: rgb(51, 51, 51); /* This is for ie8 and below */
				background: rgba(51, 51, 51, 0.5); 
			}

		</style>
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<img src="/img/theAlamo.jpg" class="img-responsive" alt="Responsive image">
			</div>
		</div>
		<div class="container-fluid ontop opacity">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 col-xs-12 col-sm-6 col-sm-offset-3 jumbotron">
					<form class="form-inline">
						<div class="form-group">
					    	<label for="prospect-address"></label>
					    	<input type="text" class="form-control" id="prospect-address" placeholder="Address">
					  	</div>
					  	<div class="form-group">
					    	<label for="prospect-unit-number"></label>
					    	<input type="text" class="form-control" id="prospect-unit-number" placeholder="Unit #">
					  	</div>
					  	<button type="submit" class="btn btn-default">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
