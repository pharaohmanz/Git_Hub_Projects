<html>
<head>
</head>
<?php
$mysql_access = mysql_connect('localhost', 'group7', 'spring2016111265');
        if(!mysql_access){
                die('Could not connect: ' . mysql_error());
        }
			 mysql_select_db('group7');
	$query = "SELECT * FROM product";
	$result = mysql_query($query, $mysql_access);
?>
<body>

<form action='' name='myForm' method='get'>
<?php

	while ($row = mysql_fetch_row($result))
	{
		$productID = $row[0];
                $productName = $row[1];
                $productDesc = $row[2];
                $productWeight = $row[3];
                $productPrice = $row[4];
                $productManufacturer = $row[5];

	}

	echo "</table>";
	$productID = 1;
	echo"<header><h1>$productName</h1></header>";
	echo"<img src=http://192.168.100.66/~group7/project/images/product/$productID.jpg alt=$productName style=&quotwidth:304px;height:228px;&quot>";
	echo"<p>$productDesc</p>";
	echo"<p>Weight: $productWeight</p>";
	echo"<p>Price: $$productPrice</p>";
	mysql_close($mysql_access);
?>
 
</form>
</body>
</html>