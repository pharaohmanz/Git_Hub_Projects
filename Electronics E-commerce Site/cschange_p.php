<?php
$id = $_POST['id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$city = $_POST['city'];
$zip = $_POST['zip'];
$state = $_POST['state'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$mysql_access = mysql_connect('localhost', 'group7', 'spring2016111265');
if(!mysql_access){
  die('Could not connect: ' . mysql_error());
}
mysql_select_db('group7');

$query = "UPDATE customer set firstName='$firstname', lastName='$lastname', emailAddress='$email', ";
$query = $query . "address1='$address1', address2='$address2', city='$city', zip='$zip', state='$state', ";
$query = $query . "phone='$phone', password='$password' ";
$query = $query . "WHERE customerID=$id";

$result = mysql_query($query, $mysql_access);
mysql_close($mysql_access);

header('Location: csadmin.php');
?>

