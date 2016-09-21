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

<div><h2>Tell us about yourself.</h2></div>
<div>&nbsp;</div>

<!-- END GREET USER -->
	
<!-- CREATE ACCOUNT FORM -->

<!-- NOTE, ALL INPUT BOXES MUST UTILIZE PREPARED STATEMENTS WHEN PULLING DATA TO PREVENT SQLInjection ATTACKS! -->
<!-- NOTE, SOME OR ALL "ID" OR "TYPES" MAY NEED TO BE CHANGED TO MATCH THE VARIABLES IN THE SQLDB -->
<div class = "row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<form class="form-horizontal" role="form">
			<div class="form-group">
				<label class="control-label col-sm-3" for="pwd">New Password:</label>
				<div class="col-sm-9"> 
					<input type="password" class="form-control" id="pwd" placeholder="Enter password">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3" for="pwd">Verify New Password:</label>
				<div class="col-sm-9"> 
					<input type="password" class="form-control" id="pwd" placeholder="Enter password">
				</div>
			</div>
			<div>				
			<div class="form-group"> 
				<div class="col-sm-offset-3 col-sm-9">
					<!-- ON CLICK, MAKE SURE BOTH FIELDS MATCH -->
					<button type="submit" class="btn btn-default">Submit</button>
					<!-- ON SUCCESSFUL RESET, CLEAR USER SESSION, SEND TO pwdReset.html -->
					<!-- ON CREATION FAILURE, DISPLAY ERROR AND PROMPT FOR RETRY -->
				</div>
			</div>
		</form>
	</div>
	<div class="col-md-4"></div>
</div>
<!-- END CREATE ACCOUNT FORM -->
	
</div>
</body>

</html>
</html>
