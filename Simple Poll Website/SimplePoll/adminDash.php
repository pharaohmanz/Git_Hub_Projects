<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
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
		  <li><a href="adminDash.php"><span class="glyphicon glyphicon-user"></span>Dashboard</a></li>
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
				<a href="index.php"><img class="img-responsive" src=".\media\simpleLogo.png"></a>
				</div>
			<div class="col-md-4"></div>
		</div>
	</div>
<!-- END HEADER CODE-->

<!-- USER GREETING -->

	<div class="row"> 
		<!-- INSERT CODE TO INJECT USER'S FNAME INTO GREETING -->
		<div class="col-md-4"><h2>ADMIN CONTROL PANEL</h2></div>
	</div>
	
	<div>&nbsp;</div>
	
<!-- END USER GREETING -->

<!-- USER SEARCH SECTION -->

<!-- A BLANK SEARCH CAN RETURN ALL RESULTS, WHICH COULD BE DANGEROUS, IMPLEMENT CODE TO PREVENT WILDCARD (*) STYLE SEARCHES -->
<!-- CODE WILL BE NEEDED TO LOOKUP ACCOUNTS WITH MATCHING EMAIL IN THE SQLDB -->
<!-- IF MATCHING ACCOUNT IS FOUND, POPULATE TABLE DATA WITH RELEVANT VARIABLE DATA -->
<!-- IF NO MATCH, DISPLAY ERROR -->
<!-- CODE WILL BE IMPLEMENTED TO ALLOW FOR MULTIPLE RESULTS, IF BY MISTAKE A USER HAS MULTIPLE ACCOUNTS UNDER ONE EMAIL -->
<!-- THIS CAN'T HAPPEN ACCORDING TO DB RULES, BUT YOU NEVER KNOW -->

<div class="row">
	<div>&nbsp;</div><div>&nbsp;</div>
	<div class="col-sm-offset-1 col-sm-11">
		<table class="table table-hover">
			<thead>
			  <tr>
				<th>Account ID</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Email</th>
				<th>State</th>
				<th>Month</th>
				<th>Day</th>
				<th>Year</th>
			  </tr>
			</thead>
			<tbody>
			  <?php
			       //print the rows
				$data = $fgmembersite->getUsers();
			       foreach($data as $row)
				       {
			          echo "<tr>";
			          foreach($colNames as $colName)
			          {
			             echo "<td>".$row[$colName]."</td>";
			          }
			          echo "</tr>";
			       }
			    ?>
			</tbody>
		</table>
	</div>
	<div>&nbsp;</div><div>&nbsp;</div>
	<div class="col-sm-offset-1 col-sm-11">
		<!-- ACCOUNT SETTINGS FORM -->
<!-- NOTE: DUPLICATE OF ACCOUNT CREATION FORM -->
<!-- NOTE: PREPOPULATE FIELDS ON LOAD W/ USER'S DATA -->
<!-- TABLE VIEW IS FOR EASY TOP-LEVEL VIEW OF FOUND USER ACCOUNT -->
<!-- EMAIL AND PASSWORD FIELDS CAN BE USED TO MANUALLY CHANGE USER'S DATA, FOR SECURITY REASONS OR IF YOU ARE IN TALKS W/ USER -->
<!-- DELETE BUTTON PERMANENTLY DELETES USER ACCOUNT, ONLY USE BY REQUEST OF FOR SECURITY REASONS (e.g. IT IS A SPAM OR HACKED ACCOUNT) -->

<!-- NOTE, ALL INPUT BOXES MUST UTILIZE PREPARED STATEMENTS WHEN PULLING DATA TO PREVENT SQLInjection ATTACKS! -->
<!-- NOTE, SOME OR ALL "ID" OR "TYPES" MAY NEED TO BE CHANGED TO MATCH THE VARIABLES IN THE SQLDB -->
<div class = "row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<form class="form-horizontal" role="form">
			<div class="form-group">
				<label class="control-label col-sm-3" for="email">Email:</label>
				<div class="col-sm-9">
					<input type="email" class="form-control" id="email" placeholder="Enter email">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3" for="pwd">Password:</label>
				<div class="col-sm-9"> 
					<input type="password" class="form-control" id="pwd" placeholder="Enter password">
				</div>
			</div>
			<div class="form-group"> 
				<div class="col-sm-offset-3 col-sm-9">
					<!-- ON CLICK, UPDATE SERVERSIDE DATA -->
					<button type="submit" class="btn btn-default">Save changes</button>
					<!-- ON SUCCESSFUL UPDATE, SEND TO acctUpdated.html -->
					<!-- ON CREATION FAILURE, SEND TO updateFail.html -->
				</div>
			</div>
			<div>&nbsp;</div>
			<div class="form-group"> 
				<div class="col-sm-offset-3 col-sm-9">
					<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Delete Account</button>
				</div>
			</div>
		</form>
	</div>
	<div class="col-md-4"></div>
</div>

<!-- ACCOUNT DELETE MODAL -->
<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Are you sure you want to delete your account?</h4>
		</div>
		<div class="modal-body">
			<p>Once an account is deleted, it cannot be recovered and is lost forever.</p>
		</div>
		<div class="modal-footer">
			<!-- ON CLICK YES, DELETE ACCOUNT DATA FROM SQLDB, REFRESH USER MANAGEMENT PAGE -->
			<button type="button" class="btn btn-default" data-dismiss="modal">Yes</button>
			<!-- ON CLICK NO, DISMISS MODAL, DO NOT DELETE ACCOUNT DATA -->
			<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
		</div>
    </div>

  </div>
</div>

<!-- END ACCOUNT SETTINGS FORM -->
	</div>
</div>

<!-- END USER SEARCH SECTION -->		

</div>
</body>

</html>
