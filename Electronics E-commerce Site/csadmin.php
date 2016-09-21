<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<title>Customer Service Module</title>
<link rel="stylesheet" href="style.css" \>
<script>
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
function changeRecord()
{
   document.myForm.action='cschange.php';
   document.myForm.submit();
}
function deleteRecord()
{
   document.myForm.action='csdelete.php';
   document.myForm.submit();
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
$mysql_access = mysql_connect('localhost', 'group7', 'spring2016111265');
if(!mysql_access){
  die('Could not connect: ' . mysql_error());
}
mysql_select_db('group7');
$query = "SELECT * FROM customer";
$result = mysql_query($query, $mysql_access);
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
<h1>Customer Service Administration Module</h1>

<hr>

<form action='csadmin_add.php' method='post'>
<table>
<tr><td>First Name: </td><td><input type='text' name='firstName'></td></tr>
<tr><td>Last Name: </td><td><input type='text' name='lastName'></td></tr>
<tr><td>Email: </td><td><input type='text' name='emailAddress'></td></tr>
<tr><td>Address1: </td><td><input type='text' name='address1'></td></tr>
<tr><td>Address2: </td><td><input type='text' name='address2'></td></tr>
<tr><td>City: </td><td><input type='text' name='city'></td></tr>
<tr><td>Zip: </td><td><input type='text' name='zip'></td></tr>
<tr><td>State: </td><td><?php echostatelist(); ?></td></tr>
<tr><td>Phone: </td><td><input type='text' name='phone'></td></tr>
<tr><td>Username: </td><td><input type='text' id='username' name='username' onkeyup='ajaxFunction()'><span id='userresult'></span></td></tr>
<tr><td>Password: </td><td><input type='password' id='password' name='password'></td></tr>
<tr><td>Confirm Password: </td><td><input type='password' id='cpassword' name='cpassword' onkeyup="checkPass(); return false;"><span id="confirmMessage"></span></td></tr>
<tr><td colspan='2'><input type='submit' value='Add New Customer'></td></tr>
</table>
</form>
<hr>
<br>
<form action='' name='myForm' method='get'>
<?php
echo "<table border='1'>";
while ($row = mysql_fetch_row($result))
{
  $id = $row[0];        //  customerID   | int(11)      | NO   | PRI | NULL    | auto_increment |
  $firstname = $row[1]; //| firstName    | varchar(255) | YES  |     | NULL    |                |
  $lastname = $row[2];  //| lastName     | varchar(255) | YES  |     | NULL    |                |
  $email = $row[3];     //| emailAddress | varchar(255) | YES  |     | NULL    |                |
  $address1 = $row[4];  //| address1     | varchar(255) | YES  |     | NULL    |                |
  $address2 = $row[5];  //| address2     | varchar(255) | YES  |     | NULL    |                |
                      //| image        | blob         | YES  |     | NULL    |                |
  $zip = $row[7];        //| zip          | varchar(255) | YES  |     | NULL    |                |
  $city = $row[8];       //| city         | varchar(255) | YES  |     | NULL    |                |
  $username = $row[9];   //| username     | varchar(255) | YES  |     | NULL    |                |
  $password = $row[10];  //| passwordHash | char(120)    | YES  |     | NULL    |                |
  $phone = $row[11];     //| phone        | varchar(255) | YES  |     | NULL    |                |
  $state = $row[12];
  
  echo "<tr>";
  echo "<td><input type='radio' name='id' value='$id'></td>";
  echo "<td>$firstname $lastname</td>";
  echo "<td>$username</td>";
  echo "<td>$email</td>";
  echo "<td>$address1</td>";
  echo "<td>$address2</td>";
  echo "<td>$city</td>";
  echo "<td>$zip</td>";
  echo "<td>$state</td>";
  echo "<td>$phone</td>";
  echo "</tr>";
}

echo "</table>";
mysql_close($mysql_access);
?>
<br>
<input type='button' value='Modify Customer' onClick='changeRecord()'>
<input type='button' value='Delete Customer' onClick='deleteRecord()'>
<input type='button' value='View Order History' onClick='viewOrderHistoryRecord()'>
</form>
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
