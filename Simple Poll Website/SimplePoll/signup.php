<?PHP
require_once("./include/membersite_config.php");

if(isset($_POST['submitted']))
{
   if($fgmembersite->RegisterUser())
   {
        $fgmembersite->RedirectToURL("acctSuccess.html");	
   }
   else
   {
        $fgmembersite->RedirectToURL("acctFail.html");
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

<div><h2>Tell us about yourself.</h2></div>

<div>&nbsp;</div>

<!-- END GREET USER -->

<!-- CREATE ACCOUNT FORM -->


<!-- NOTE, ALL INPUT BOXES MUST UTILIZE PREPARED STATEMENTS WHEN PULLING DATA TO PREVENT SQLInjection ATTACKS! -->
<!-- NOTE, SOME OR ALL "ID" OR "TYPES" MAY NEED TO BE CHANGED TO MATCH THE VARIABLES IN THE SQLDB -->

<div class = "row" id='fg_membersite'>
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<form class="form-horizontal" role="form" id='register' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
			<div class="form-group">
				<label class="control-label col-sm-3" for="fname">First Name:</label>
				<div class="col-sm-9">
					<input type="fname" class="form-control" id="fname" name="fname" value='<?php echo $fgmembersite->SafeDisplay('fname') ?>' maxlength="50" placeholder="Enter your first name" required>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3" for="lname">Last Name:</label>
				<div class="col-sm-9">
					<input type="lname" class="form-control" id="lname" name="lname" value='<?php echo $fgmembersite->SafeDisplay('lname') ?>' maxlength="50" placeholder="Enter your last name" required>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3" for="state">State:</label>
				<div class="col-sm-9">
					<select class="form-control" id="State" name="state" value='<?php echo $fgmembersite->SafeDisplay('state') ?>'>
						<option value="AL">Alabama</option>
						<option value="AK">Alaska</option>
						<option value="AZ">Arizona</option>
						<option value="AR">Arkansas</option>
						<option value="CA">California</option>
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
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3" for="email">Email:</label>
				<div class="col-sm-9">
					<input type="email" class="form-control" id="email" name="email" value='<?php echo $fgmembersite->SafeDisplay('email') ?>' maxlength="50" placeholder="Enter email" required>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3" for="Password">Password:</label>
				<div class="col-sm-9"> 
					<input type="password" class="form-control" id="password" name="password" value='<?php echo $fgmembersite->safeDisplay('password') ?>' maxlenght="50" placeholder="Enter password" required>
				</div>
			</div>
			
			<div>
				<h3>Birthdate:</h3>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3" for="month">Month:</label>
					<div class="col-sm-9">
					<select class="form-control" id="month" name="month" value='<?php echo $fgmembersite->safeDisplay('month') ?>'>
						<option>January</option>
						<option>February</option>
						<option>March</option>
						<option>April</option>
						<option>May</option>
						<option>June</option>
						<option>July</option>
						<option>August</option>
						<option>September</option>
						<option>October</option>
						<option>November</option>
						<option>December</option>
					</select>
					</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3" for="day">Day:</label>
					<div class="col-sm-9">
					<select class="form-control" id="day" name="day" value='<?php echo $fgmembersite->safeDisplay('day') ?>'>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>6</option>
						<option>7</option>
						<option>8</option>
						<option>9</option>
						<option>10</option>
						<option>11</option>
						<option>12</option>
						<option>13</option>
						<option>14</option>
						<option>15</option>
						<option>16</option>
						<option>17</option>
						<option>18</option>
						<option>19</option>
						<option>20</option>
						<option>21</option>
						<option>22</option>
						<option>23</option>
						<option>24</option>
						<option>25</option>
						<option>26</option>
						<option>27</option>
						<option>28</option>
						<option>29</option>
						<option>30</option>
						<option>31</option>
					</select>
					</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3" for="year">Year:</label>
					<div class="col-sm-9">
					<select class="form-control" id="year" name="year" value='<?php echo $fgmembersite->safeDisplay('year') ?>'>
						<option>2016</option>
						<option>2015</option>
						<option>2014</option>
						<option>2013</option>
						<option>2012</option>
						<option>2011</option>
						<option>2010</option>
						<option>2009</option>
						<option>2008</option>
						<option>2007</option>
						<option>2006</option>
						<option>2005</option>
						<option>2004</option>
						<option>2003</option>
						<option>2002</option>
						<option>2001</option>
						<option>2000</option>
						<option>1999</option>
						<option>1998</option>
						<option>1997</option>
						<option>1996</option>
						<option>1995</option>
						<option>1994</option>
						<option>1993</option>
						<option>1992</option>
						<option>1991</option>
						<option>1990</option>
						<option>1989</option>
						<option>1988</option>
						<option>1987</option>
						<option>1986</option>
						<option>1985</option>
						<option>1984</option>
						<option>1983</option>
						<option>1982</option>
						<option>1981</option>
						<option>1980</option>
						<option>1979</option>
						<option>1978</option>
						<option>1977</option>
						<option>1976</option>
						<option>1975</option>
						<option>1974</option>
						<option>1973</option>
						<option>1972</option>
						<option>1971</option>
						<option>1970</option>
						<option>1969</option>
						<option>1968</option>
						<option>1967</option>
						<option>1966</option>
						<option>1965</option>
						<option>1964</option>
						<option>1963</option>
						<option>1962</option>
						<option>1961</option>
						<option>1960</option>
						<option>1959</option>
						<option>1958</option>
						<option>1957</option>
						<option>1956</option>
						<option>1955</option>
						<option>1954</option>
						<option>1953</option>
						<option>1952</option>
						<option>1951</option>
						<option>1950</option>
						<option>1949</option>
						<option>1948</option>
						<option>1947</option>
						<option>1946</option>
						<option>1945</option>
						<option>1944</option>
						<option>1943</option>
						<option>1942</option>
						<option>1941</option>
						<option>1940</option>
						<option>1939</option>
						<option>1938</option>
						<option>1937</option>
						<option>1936</option>
						<option>1935</option>
						<option>1934</option>
						<option>1933</option>
						<option>1932</option>
						<option>1931</option>
						<option>1930</option>
						<option>1929</option>
						<option>1928</option>
						<option>1927</option>
						<option>1926</option>
						<option>1925</option>
						<option>1924</option>
						<option>1923</option>
						<option>1922</option>
						<option>1921</option>
						<option>1920</option>
						<option>1919</option>
						<option>1918</option>
						<option>1917</option>
						<option>1916</option>
						<option>1915</option>
						<option>1914</option>
						<option>1913</option>
						<option>1912</option>
						<option>1911</option>
						<option>1910</option>
						<option>1909</option>
						<option>1908</option>
						<option>1907</option>
						<option>1906</option>
						<option>1905</option>
						<option>1904</option>
						<option>1903</option>
						<option>1902</option>
						<option>1901</option>
						<option>1900</option>
					</select>
					</div>
				</div>
			</div>
			<div class="form-group"> 
				<div class="col-sm-offset-3 col-sm-9">
					<!-- ON CLICK, PULL EACH DATA FROM RELATIVE FIELD AND PASS TO SERVER ACCOUNT CREATION COMMAND -->
					<button type="submit" class="btn btn-default" name='Submit' value='Submit'>Submit</button>
					<input type='hidden' name='submitted' id='submitted' value='1'/>
					<!-- ON SUCCESSFUL CREATION, SEND TO acctSuccss.html -->
					<!-- ON CREATION FAILURE, SEND TO acctFail.html -->
				</div>
			</div>
		</form>
	</div>
	<div class="col-md-4"></div>
</div>

<script type='text/javascript'>
// <![CDATA[
	var frmvalidator  = new Validator("register");
	frmvalidator.EnableOnPageErrorDisplay();
	frmvalidator.EnableMsgsTogether();
	frmvalidator.addValidation("fname","req","Please provide your name");
	frmvalidator.addValidation("lname","req","Please provide your name");
	frmvalidator.addValidation("state","req","Please provide your name");
	frmvalidator.addValidation("email","req","Please provide your email address");
	frmvalidator.addValidation("email","email","Please provide a valid email address");    
	frmvalidator.addValidation("password","req","Please provide a password");

// ]]>
</script>

<!-- END CREATE ACCOUNT FORM -->
	
</div>
</body>
</html>


