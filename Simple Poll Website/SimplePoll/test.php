<?php 

$sql;
$query;


if(isset($_POST['Submit']))
{

$con = mysql_connect("localhost","team6","7ujy5tgf");


if (!$con) {
    die('Could not connect: ' . mysql_error());
}

mysql_select_db("team6", $con);

$sql = "INSERT INTO Results(voteID,candidate) VALUES(5,'Bernie')";

mysql_query($sql) or die ("Cannot Run Query");

header('Location: dash.php');

$con->close();



}

else

{

echo “error”;

}





  ?>
