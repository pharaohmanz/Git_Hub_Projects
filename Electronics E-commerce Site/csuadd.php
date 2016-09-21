<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<title>User Regisration</title>
<link rel="stylesheet" type="text/css" href="style.css" >
<script type="text/javascript">
function ajaxFunction(){
  var ajaxRequest;  // The variable that makes Ajax possible!
  try {
    ajaxRequest = new XMLHttpRequest();
  } catch (e){
    try {
      ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
      try {
        ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
      } catch (e) {
        alert("Your browser broke!");
        return false;
      }
    }
  }
  var goodColor = '#66cc66';
  var badColor = '#ff6666';
  ajaxRequest.onreadystatechange = function() {
    if(ajaxRequest.readyState == 4) {
       ur = document.getElementById('userresult');
       un = document.getElementById('username');
       var message = ajaxRequest.responseText;
       var patt = new RegExp("Already");
       if(patt.test(message)) {
         ur.style.color = badColor;
         un.style.backgroundColor = badColor;
       } else { 
         ur.style.color = goodColor;
         un.style.backgroundColor = goodColor;
       } 
       ur.innerHTML = message;
    }
  }
  var selection = document.getElementById('username').value;
  ajaxRequest.open("GET", "username-checker.php?username=" + selection, true);
  ajaxRequest.send(null);
}

function checkPass() {
  var pass1 = document.getElementById('password');
  var pass2 = document.getElementById('cpassword');
  var message = document.getElementById('confirmMessage');
  var goodColor = "#66cc66";
  var badColor = "#ff6666";
  if(pass1.value == pass2.value){
    pass2.style.backgroundColor = goodColor;
    message.style.color = goodColor;
    message.innerHTML = "Passwords Match!"
  }else{
    pass2.style.backgroundColor = badColor;
    message.style.color = badColor;
    message.innerHTML = "Passwords Do Not Match!"
  }
}  
</script>
</head>
<?php
function echostatelist()
{
  $selected = 'AL';
  $states = array ('AL'=>'Alabama','AK'=>'Alaska','AZ'=>'Arizona','AR'=>'Arkansas','CA'=>'California','CO'=>'Colorado','CT'=>'Connecticut','DE'=>'Delaware','DC'=>'District Of Columbia','FL'=>'Florida','GA'=>'Georgia','HI'=>'Hawaii','ID'=>'Idaho','IL'=>'Illinois','IN'=>'Indiana','IA'=>'Iowa','KS'=>'Kansas','KY'=>'Kentucky','LA'=>'Louisiana','ME'=>'Maine','MD'=>'Maryland','MA'=>'Massachusetts','MI'=>'Michigan','MN'=>'Minnesota','MS'=>'Mississippi','MO'=>'Missouri','MT'=>'Montana','NE'=>'Nebraska','NV'=>'Nevada','NH'=>'New Hampshire','NJ'=>'New Jersey','NM'=>'New Mexico','NY'=>'New York','NC'=>'North Carolina','ND'=>'North Dakota','OH'=>'Ohio','OK'=>'Oklahoma','OR'=>'Oregon','PA'=>'Pennsylvania','RI'=>'Rhode Island','SC'=>'South Carolina','SD'=>'South Dakota','TN'=>'Tennessee','TX'=>'Texas','UT'=>'Utah','VT'=>'Vermont','VA'=>'Virginia','WA'=>'Washington','WV'=>'West Virginia','WI'=>'Wisconsin','WY'=>'Wyoming'); 
  echo "<select name='state'>";
  foreach( $states as $abbr => $name ) {
    echo "  <option value='$abbr' ";
    if($selected == "$abbr") {
      echo("selected");
    }; 
    echo ">$name</option>";
  }
  echo "</select>";       
}
?>
<body>
      
 <div class="header">
        <nav id="cssmenu">
        <label class="msg-heading">
        <a class="link-heading" href="Homepage.php" title="Goto easyBuy Home Page">
        easyBuy</a>
        </label>
        </nav>
        </div>
 
<center><h2>Create Account</h2></center>
<center>
<form name='myForm' action='csadd.php' method='post'>
<table>
<tr><td>First Name: </td><td><input type='text' name='firstName' required></td></tr>
<tr><td>Last Name: </td><td><input type='text' name='lastName' required></td></tr>
<tr><td>Email: </td><td><input type='text' name='emailAddress' required></td></tr>
<tr><td>Address1: </td><td><input type='text' name='address1' required></td></tr>
<tr><td>Address2: </td><td><input type='text' name='address2'></td></tr>
<tr><td>City: </td><td><input type='text' name='city' required></td></tr>
<tr><td>Zip: </td><td><input type='text' name='zip' required></td></tr>
<tr><td>State: </td><td><?php echostatelist(); ?></td></tr>
<tr><td>Phone: </td><td><input type='text' name='phone' required></td></tr>
<tr><td>Username: </td><td><input type='text' id='username' name='username' onkeyup='ajaxFunction()' required><span id='userresult'></span></td></tr>
<tr><td>Password: </td><td><input type='password' id='password' name='password' required></td></tr>
<tr><td>Confirm Password: </td><td><input type='password' id='cpassword' name='cpassword' onkeyup="checkPass(); return false;" required><span id="confirmMessage"></span></td></tr>
<tr><td colspan='2'><input class="signin" type='submit' value='Add New Customer'></td></tr>
<tr><td><br>Already Have An Account?<a href="login.php"> Sign In</a></td></tr>
</table>
</form>
</center>
<br>
<footer class="footer_bg">
<span class="copy_span">
<center>
<br>
<a class="head_h1" href="privacystmt.php">Privacy Statement</a>
<hr>
copyright &copy; 2016 easyBuy.com All Rights Reserved
</center>
</span>
</footer>

</body>
</html>
