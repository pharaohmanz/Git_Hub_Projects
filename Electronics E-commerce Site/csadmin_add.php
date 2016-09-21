<?php
$firstname = $_POST['firstName'];
$lastname = $_POST['lastName'];
$email = $_POST['emailAddress'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$city = $_POST['city'];
$zip = $_POST['zip'];
$state = $_POST['state'];
$phone = $_POST['phone'];
$username = $_POST['username'];
$password = $_POST['password'];
$mysql_access = mysql_connect('localhost', 'group7', 'spring2016111265');
if(!mysql_access){
  die('Could not connect: ' . mysql_error());
}
mysql_select_db('group7');
$query = "INSERT INTO customer ( firstName, lastName, emailAddress, address1, address2, city, zip, state, phone, username, password) ";
$query = $query . " VALUES ( '$firstname', '$lastname', '$email', '$address1', '$address2', '$city', '$zip', '$state', '$phone', '$username', '$password' ) ";
$result = mysql_query($query, $mysql_access);
mysql_close($mysql_access);
header('Location: csadmin.php');
?>
