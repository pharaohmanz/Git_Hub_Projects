<?php
 ob_start();
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>
easyBuy SignIn
</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<?php
$errormsg="";
$errorpwd="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$username=$_POST["username"];
$password=$_POST["password"];
	
	if (empty($username)&(empty($password)))
	{
		$errormsg="Please Enter Username";
		$errorpwd="Please Enter Password";
	}
	
	else
	{
		$_SESSION['username']=$username;
		header("Location:Homepage.php");     
	}
}

?>
<script>
function userRegister()
	{
		document.myForm.action='csuadd.php';
		document.myForm.submit();
	}
</script>
</head>
<body>
	<div class="header">
	<nav id="cssmenu">
	<label class="msg-heading">
	<a class="link-heading" href="Homepage.php" title="Goto easyBuy Home Page">
	easyBuy</a>
	</label>
	</nav>
	</div>
<br><br>

<center>
<div id="formborder">
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name='myForm'>
<table>
<tr>
<td>
<center><h3>SignIn</h3></center></td></tr>
<tr>
<td>
	<b>UserName</b><br>
	<input type="textbox" name="username" id="username" size="35" class="txtbox"><br><br>
	<span class="error"><?php echo $errormsg; ?></span>
</td>
</tr>

<tr>
<td>
	<b>Password</b><br>
	<input type="password" name="password" id="password" size="35" class="txtbox">
	<br>
	<span class="error"><?php echo $errorpwd; ?></span>
</td>
</tr>

<tr>
<td>
	<br><a href="forgetpg.html" style="float:right">Forgot Password?</a>
</td>
</tr>

<tr>
<td>
	<center><input type="submit" value="Sign In" class="signin"></center>
</td>
</tr>

<tr>
<td>
	<center><h3>New to easyBuy?</h3></center>
	<center><input type="button" value="Register" class="signin" onClick='userRegister()'></center>
</td>
</tr>

</table>
</form>
</div>
</center>
</body>
</html>
