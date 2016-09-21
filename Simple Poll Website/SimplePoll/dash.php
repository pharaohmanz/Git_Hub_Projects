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
		  <li><a href="dash.php"><span class="glyphicon glyphicon-user"></span>Dashboard</a></li>
		  <!-- ON LOGOUT CLICK, END USER SESSION AND RETURN TO LOGIN PAGE -->
		  <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>
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

<!-- USER GREETING -->

	<div class="row"> 
		<!-- INSERT CODE TO INJECT USER'S FNAME INTO GREETING -->
		<div class="col-md-4"><h2>Hello, $Fname</h2></div>
	</div>
	
	<div>&nbsp;</div>
	
<!-- END USER GREETING -->

<!-- USER NAVBAR -->

	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<ul class="nav navbar-nav">
				<li class="active"><a href="dash.php">Account Dashboard</a></li>
				<li><a href="acctmgt.html">Account Management</a></li>
			</ul>
		</div>
	</nav>

<!-- END USER NAVBAR -->		

<!-- LOCAL POLL VOTE SECTION -->

<!-- JAVASCRIPT WILL BE NECESSARY TO EVALUATE SERVERSIDE DATA AND UPDATE TEXT HERE -->
<!-- INSERT CODE INTO PAGE THAT AUTO-PULLS USER'S LAST SELECTION FOR THE LOCAL POLL -->
<!-- IF USER HAS VOTED, POPULATE RELEVANT FIELD FOR LAST SELECTION -->
<!-- IF USER HAS NOT YET VOTED, DISPLAY MESSAGE SAYING SO IN SELECTED CANDIDATE SECTION -->
<!-- USER MAY UPDATE AT ANY TIME USING SUBMIT BUTTON -->

	<div class="row">
		<div class="col-sm-4"><h2>Local Poll Vote:</h2></div>		
	</div>
	<div>&nbsp;</div>
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><strong>Last Candidate Selected:</strong></div>	
		<div class="col-sm-4">You haven't voted yet!</div>
	</div>
	<div>&nbsp;</div>
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><strong>Select Candidate:</strong></div>
		<div class="col-sm-4"></div>
<form action="poll.php" method = "post">
	<select name = “candidate">
	<option value = "" selected ="selected" </option>
	<option value = “Donald”>Donald Trump</option>
	<option value = “Hillary”>Hillary Clinton</option>
	<option value = “Ted”>Ted Cruz</option>
	<option value = “Bernie”>Bernie Sanders</option>
	<option value = “John">John Kasich</option>
<br>

	</select>
	<br><br>
<br>
<div class="row">
		<div class="form-group"> 
				<div class="col-sm-offset-4 col-sm-8">
<input type="submit" name = "Submit">

</form>	

		</div>
	</div>
		</div>
			</div>
	</div>

<!-- END LOCAL POLL VOTE SECTION -->

</div>
</body>

</html>
