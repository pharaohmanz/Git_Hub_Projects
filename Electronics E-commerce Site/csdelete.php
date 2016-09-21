<?php
$id = $_GET['id'];
$mysql_access = mysql_connect('localhost', 'group7', 'spring2016111265');
if(!mysql_access){
  die('Could not connect: ' . mysql_error());
}
mysql_select_db('group7');
$query = "DELETE FROM customer WHERE customerID=" . $id;
$result = mysql_query($query, $mysql_access);
mysql_close($mysql_access);
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
