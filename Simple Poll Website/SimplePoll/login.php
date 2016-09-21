<?PHP
require_once("./include/membersite_config.php");

$fgmembersite->LogOut();

if(isset($_POST['submitted']))
{
   if($fgmembersite->Login())
   {
	if($fgmembersite->isUserAdmin() == 1)
	{
             $fgmembersite->RedirectToURL("adminDash.php");
	}
	else
	{
	     $fgmembersite->RedirectToURL("dash.php");
	}
   }
   else
   {
	$fgmembersite->RedirectToURL("loginFail.html");
   }
}

?>
<!DOCTYPE html>

<html leng="en">
<head>
<title>simplePoll</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type='text/javascript' src='scripts/gen_validatorv31.js'></script>

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
				<a href="index.php"><img class="img-responsive" src=".\media\simpleLogo.png"></a>
				</div>
			<div class="col-md-4"></div>
		</div>
	</div>

<!-- END HEADER CODE-->

<!-- GREET THE USER -->

<div><h2>Welcome back.</h2></div>

<div>&nbsp;</div>

<!-- END GREET USER -->

<!-- LOGIN FORM -->

<div class = "row" id='fg_membersite'>
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<form role="form" id='login' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
			<div class="form-group">
				<label for="email">Email address:</label>
				<input type="email" class="form-control" name="email" id="email" value='<?php echo $fgmembersite->SafeDisplay('email') ?>' maxlength="50">
			</div>
			<div class="form-group">
				<label for="pwd">Password:</label>
				<input type="password" class="form-control" name="password" id="password" value='<?php echo $fgmembersite->SafeDisplay('password') ?>' maxlength="50" />
			</div>
			<div>&nbsp;</div>
			<!-- ON CLICK, SEND INFO FROM BOTH FORMS TO SERVER FOR AUTHENTICATION -->
			<button type="submit" name="Submit" class="btn btn-default">Login</button><div>&nbsp;</div><a href="forgot.html">Forgot your password?</a>
			<input type='hidden' name='submitted' id='submitted' value='1'/>
			<!-- IF SUCCESSFUL && REGULAR USER THEN SEND TO dash.html -->
			<!-- IF SUCCESSFUL && ADMIN USER THEN SEND TO adminDash.html -->
			<!-- IFUNSUCCESFUL SEND TO loginFail.html --> 
		</form>
	</div>
	<div class="col-md-4"></div>
</div>

<!-- END LOGIN FORM -->

	

</div>
</body>
</html>
