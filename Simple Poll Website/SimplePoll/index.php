<!DOCTYPE html>
<html leng="en">

<head>

<title>simplePoll</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/no-data-to-display.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="data.js"></script>
</head>

<body>

<div class="container">

<!-- NAVBAR CODE -->
	<nav class="navbar navbar">
	  <div class="container-fluid">
		<div class="navbar-header">
		  <a class="navbar-brand" href="#">simplePoll</a>
		</div>
		<ul class="nav navbar-nav">
		  <li class="active"><a href="index.php">Home</a></li>
		  <li><a href="localPoll.php">Local Poll</a></li> 
		</ul>
		<ul class="nav navbar-nav navbar-right">
		<?php 
		require_once("./include/membersite_config.php");
		if($fgmembersite->CheckLogin()) {
			if($fgmembersite->isUserAdmin() == 1)
        		{
             			echo "<li><a href='adminDash.php'><span class='glyphicon glyphicon-user'></span>Dashboard</a></li>";
        		}
        		else
        		{
             			echo "<li><a href='dash.php'><span class='glyphicon glyphicon-user'></span>Dashboard</a></li>";
        		}
                	echo "<li><a href='login.php'><span class='glyphicon glyphicon-log-in'></span>Logout</a></li>";
		} else {
			echo "<li><a href='signup.php'><span class='glyphicon glyphicon-user'></span>Sign Up</a></li>";
			echo "<li><a href='login.php'><span class='glyphicon glyphicon-log-in'></span>Login</a></li>";
		}
		 ?>
		</ul>
	  </div>
	</nav>
<!-- END NAVBAR CODE -->

<!-- HEADER CODE -->
	<div class="page-header">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<a href="index.php"><img class="img-responsive" src=".\media\simpleLogo.png"></a>
				</div>
			<div class="col-md-4"></div>
		</div>
	</div>
<!-- END HEADER CODE-->
	
<!-- POLL FILTER SECTION -->

<!-- HOW IT WORKS: -->
<!-- WHENEVER ANY FILTER IS APPLIED, IMMEDIATELY REFRESH AND DISPLAY RESULTS -->
<!-- DISPLAY ERROR MESSAGE IF ANY ERROR COMES FROM THE SERVER-->
<!-- BOOTSTRAP ERROR MESSAGE CODE SOURCE: http://www.w3schools.com/bootstrap/bootstrap_alerts.asp -->

<nav class="navbar navbar">

		<div class="navbar-header">
			<a class="navbar-brand"><strong>Filter</strong></a>
		</div>
		<ul class="nav navbar-nav">
                 <form class="form-inline">
				<div class="form-group">
					<div class="navbar-header">
						<a class="navbar-brand"><strong>Party</strong></a>
					</div>
					<select class="form-control" id="Party" name="party" onchange="createChart()">
						<option value="Dem">Democratic National Committee</option>
						<option value="Rep">Republican National Committee</option>
					</select>
				</div>
				<div class="form-group">
					<div class="navbar-header">
						<a class="navbar-brand"><strong>State</strong></a>
					</div>
					<select class="form-control" id="State" name="state" onchange="createChart()">
						<option value="AL">Alabama</option>
						<option value="AK">Alaska</option>
						<option value="AZ">Arizona</option>
						<option value="AR">Arkansas</option>
						<option value="CA" selected>California</option>
						<option value="CO">Colorado</option>
						<option value="CT">Connecticut</option>
						<option value="DE">Delaware</option>
						<option value="FL">Florida</option>
						<option value="GA">Georgia</option>
						<option value="HI">Hawaii</option>
						<option value="ID">Idaho</option>
						<option value="IL">Illinois</option>
						<option value="IN">Indiana</option>
						<option value="IA">Iowa</option>
						<option value="KS">Kansas</option>
						<option value="KY">Kentucky</option>
						<option value="LA">Louisiana</option>
						<option value="ME">Maine</option>
						<option value="MD">Maryland</option>
						<option value="MA">Massachusetts</option>
						<option value="MI">Michigan</option>
						<option value="MN">Minnesota</option>
						<option value="MS">Mississippi</option>
						<option value="MO">Missouri</option>
						<option value="MT">Montana</option>
						<option value="NE">Nebraska</option>
						<option value="NV">Nevada</option>
						<option value="NH">New Hampshire</option>
						<option value="NJ">New Jersey</option>
						<option value="NM">New Mexico</option>
						<option value="NY">New York</option>
						<option value="NC">North Carolina</option>
						<option value="ND">North Dakota</option>
						<option value="OH">Ohio</option>
						<option value="OK">Oklahoma</option>
						<option value="OR">Oregon</option>
						<option value="PA">Pennsylvania</option>
						<option value="RI">Rhode Island</option>
						<option value="SC">South Carolina</option>
						<option value="SD">South Dekota</option>
						<option value="TN">Tennessee</option>
						<option value="TX">Texas</option>
						<option value="UT">Utah</option>
						<option value="VT">Vermont</option>
						<option value="VA">Virginia</option>
						<option value="WA">Washington</option>
						<option value="WV">West Virginia</option>
						<option value="WI">Wisconsin</option>
						<option value="WY">Wyoming</option>
					</select>
				</div>
			</form>
		</ul>
		
		
		
	
</nav>




<!-- END POLL FILTER SECTION -->	
	
<!-- POLL DISPLAY SECTION -->

<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-4">
		<div id="chart" style="height: 500px; width: 800px; margin: 0 auto"></div>
		<script> $(createChart); </script>
	</div>
</div>

<!-- END POLL DISPLAY SECTION -->	
	
</div>
</body>

</html>

