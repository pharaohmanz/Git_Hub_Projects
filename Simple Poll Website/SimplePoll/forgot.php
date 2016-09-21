<!DOCTYPE html>
<html leng="en">

<head>

<title>simplePoll</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

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
		  <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
		  <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		</ul>
	  </div>
	</nav>
<!-- END NAVBAR CODE -->

<!-- HEADER CODE -->
	<div class="page-header">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<a href="index.html"><img class="img-responsive" src=".\media\simpleLogo.png"></a>
				</div>
			<div class="col-md-4"></div>
		</div>
	</div>
<!-- END HEADER CODE-->

<!-- GREET THE USER -->

<div><h2>Forgot your password?</h2></div>
<div>&nbsp;</div>

<!-- END GREET USER -->
	
<!-- LOGIN FORM -->

<div class = "row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<form role="form">
			<div class="form-group">
				<label for="email">Verify Email address:</label>
				<!-- USE THIS INPUT FORM TO PULL EMAIL TO PASS TO SERVER FOR VERIFICATION -->
				<input type="email" class="form-control" id="email">
			</div>
			<div>&nbsp;</div>
			<!-- ON CLICK, SEND INFO FROM BOTH FORMS TO SERVER FOR AUTHENTICATION -->
			<button type="submit" class="btn btn-default">Submit</button><div>&nbsp;</div>
			<!-- IF SUCCESSFUL PROCEED TO verify.html-->
			<!-- IF UNSUCCESSFUL DISPLAY ERROR SAYING NO MATCH FOUND
		</form>
	</div>
	<div class="col-md-4"></div>
</div>
<!-- END LOGIN FORM -->
	
</div>
</body>

</html>
