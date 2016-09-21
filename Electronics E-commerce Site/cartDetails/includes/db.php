<?php
	@mysql_connect("localhost","group7","spring2016111265") or die("Database not available, please try again later");
	@mysql_select_db("group7") or die("Db is not available, please try again later");
	session_start();
?>