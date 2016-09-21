<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<title>Modify Customer</title>
<link rel="stylesheet" href="style.css" \>
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

<h1>Modify Customer</h1>
<hr>
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

$id = $_GET['id'];
$mysql_access = mysql_connect('localhost', 'group7', 'spring2016111265');
if(!mysql_access){
  die('Could not connect: ' . mysql_error());
}
mysql_select_db('group7');
$query = "SELECT * FROM customer WHERE customerID=" . $id;
$result = mysql_query($query, $mysql_access);
mysql_close($mysql_access);
$row = mysql_fetch_row($result);

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
?>
<body>
<form action='cschange_p.php' method='post'>
<?php echo "<input type='hidden' name='id' value='$id'>"; ?>
<table>
  <tr>
    <td>First Name: </td><td><input type='text' name='firstname' value='<?php echo $firstname; ?>'></td>
  </tr>
  <tr>
    <td>Last Name: </td><td><input type='text' name='lastname' value='<?php echo $lastname; ?>'></td>
  </tr>
  <tr>
    <td>Email: </td><td><input type='text' name='email' value='<?php echo $email; ?>'></td>
  </tr>
  <tr>
    <td>Username: </td><td><?php echo $username; ?></td>
  </tr>
  <tr>
    <td>Password: </td><td><input type='password' name='password' value='<?php echo $password; ?>'></td>
  </tr>
  <tr>
    <td>Address1: </td><td><input type='text' name='address1' value='<?php echo $address1; ?>'></td>
  </tr>
  <tr>
    <td>Address2: </td><td><input type='text' name='address2' value='<?php echo $address2; ?>'></td>
  </tr>
  <tr>
    <td>City: </td><td><input type='text' name='city' value='<?php echo $city; ?>'></td>
  </tr>
  <tr>
    <td>Zip: </td><td><input type='text' name='zip' value='<?php echo $zip; ?>'></td>
  </tr>
  <tr>
    <td>State: </td><td><?php echostatelist($state); ?></td>
  </tr>
  <tr>
    <td>Phone: </td><td><input type='text' name='phone' value='<?php echo $phone; ?>'></td>
  </tr>
</table>
<input type=submit value='Modify User'>
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

