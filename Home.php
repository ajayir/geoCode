<!DOCTYPE html>
<html>
<head>
	<?php include "stylesheet_JS_MIME.php"; ?>
</head>
<body>
	<div class="container-fluid">
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-brand"><h3>Reub Mapping</h3></div>		
  		</nav>
  	</div>
  	<div class="container">
  		<div class="row container">
  			<div class="col-md-9 panel panel-body" style="background-color: #006699; margin-top: 15%;">
  				<form action="" method="POST" id="FormID">
  					<b>Enter location 1 </b><input type="text" name="location_One" placeholder="latitude, longitude"><br><br>
  					<b>Enter location 2 </b><input type="text" name="location_Two" placeholder="latitude, longitude">
			  		<!--<div class="container">-->
			  		<div class="col-md-9 panel-body" style="background-color: #329FB0; margin-top: 9%;">
		  				<button type="submit" class="btn btn-primary btn-block" value="Submit">Get Address</button>	
			  		</div>
			  		<!--</div>-->
  				</form>
  			</div>
  		</div>

		<div class="row container" id="location_div">
			<div class="col-md-9 panel-body panel" style="background-color: #996633; margin-top: 5%;">
				<h5><b><?php include "get_coordinates.php";  ?></b></h5>
			</div>
		</div>
  	</div>
</body>
</html>
