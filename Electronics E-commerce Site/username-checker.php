<?php
  $username = $_GET['username'];
  $mysql_access = mysql_connect('localhost', 'group7', 'spring2016111265');
  if(!mysql_access){
    die('Could not connect: ' . mysql_error());
  }
  mysql_select_db('group7');
  $query = "select * from customer where username='$username'";
  $res = mysql_query($query, $mysql_access);
  if(mysql_num_rows($res)>0){
    echo 'Already exists';
  } else {
    echo 'Available';
  }
?>
