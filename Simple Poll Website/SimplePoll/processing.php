<?php
$party = 'Dem';
$state = 'FL';		
$candidate_array = [];
$sql;
$query;

if(isset($_POST['party']))
{
    $party = $_POST['party'];
}
if(isset($_POST['state']))
{
    $state = $_POST['state'];
}
$con = mysql_connect("localhost","team6","7ujy5tgf");

if (!$con) {
    die('Could not connect: ' . mysql_error());
}

mysql_select_db("team6", $con);

$sql = "select candidate, ".
"SUM(JAN2015) AS JAN2015, ".
"SUM(FEB2015) AS FEB2015, ".
"SUM(MAR2015) AS MAR2015, ".
"SUM(APR2015) AS APR2015, ".
"SUM(MAY2015) AS MAY2015, ".
"SUM(JUN2015) AS JUN2015, ".
"SUM(JUL2015) AS JUL2015, ".
"SUM(AUG2015) AS AUG2015, ".
"SUM(SEP2015) AS SEP2015, ".
"SUM(OCT2015) AS OCT2015, ".
"SUM(NOV2015) AS NOV2015, ".
"SUM(DEC2015) AS DEC2015, ".
"SUM(JAN2016) AS JAN2016, ".
"SUM(FEB2016) AS FEB2016, ".
"SUM(MAR2016) AS MAR2016, ".
"SUM(APR2016) AS APR2016 ".
"FROM ".
"(SELECT candidate, ".
"(CASE WHEN month = 1 THEN ".
"(CASE WHEN year = 2015 THEN tbl.val ELSE NULL END) ".
"ELSE NULL END) AS JAN2015, ".
"(CASE WHEN month = 2 THEN ".
"(CASE WHEN year = 2015 THEN tbl.val ELSE NULL END) ".
"ELSE NULL END) AS FEB2015, ".
"(CASE WHEN month = 3 THEN ".
"(CASE WHEN year = 2015 THEN tbl.val ELSE NULL END)  ".
"ELSE NULL END) AS MAR2015, ".
"(CASE WHEN month = 4 THEN ".
"(CASE WHEN year = 2015 THEN tbl.val ELSE NULL END)  ".
"ELSE NULL END) AS APR2015, ".
"(CASE WHEN month = 5 THEN ".
"(CASE WHEN year = 2015 THEN tbl.val ELSE NULL END)  ".
"ELSE NULL END) AS MAY2015, ".
"(CASE WHEN month = 6 THEN ".
"(CASE WHEN year = 2015 THEN tbl.val ELSE NULL END)  ".
"ELSE NULL END) AS JUN2015, ".
"(CASE WHEN month = 7 THEN ".
"(CASE WHEN year = 2015 THEN tbl.val ELSE NULL END)  ".
"ELSE NULL END) AS JUL2015, ".
"(CASE WHEN month = 8 THEN ".
"(CASE WHEN year = 2015 THEN tbl.val ELSE NULL END)  ".
"ELSE NULL END) AS AUG2015, ".
"(CASE WHEN month = 9 THEN ".
"(CASE WHEN year = 2015 THEN tbl.val ELSE NULL END)  ".
"ELSE NULL END) AS SEP2015, ".
"(CASE WHEN month = 10 THEN ".
"(CASE WHEN year = 2015 THEN tbl.val ELSE NULL END)  ".
"ELSE NULL END) AS OCT2015, ".
"(CASE WHEN month = 11 THEN ".
"(CASE WHEN year = 2015 THEN tbl.val ELSE NULL END)  ".
"ELSE NULL END) AS NOV2015, ".
"(CASE WHEN month = 12 THEN ".
"(CASE WHEN year = 2015 THEN tbl.val ELSE NULL END)  ".
"ELSE NULL END) AS DEC2015, ".
"(CASE WHEN month = 1 THEN ".
"(CASE WHEN year = 2016 THEN tbl.val ELSE NULL END)  ".
"ELSE NULL END) AS JAN2016, ".
"(CASE WHEN month = 2 THEN ".
"(CASE WHEN year = 2016 THEN tbl.val ELSE NULL END)  ".
"ELSE NULL END) AS FEB2016, ".
"(CASE WHEN month = 3 THEN ".
"(CASE WHEN year = 2016 THEN tbl.val ELSE NULL END)  ".
"ELSE NULL END) AS MAR2016, ".
"(CASE WHEN month = 4 THEN ".
"(CASE WHEN year = 2016 THEN tbl.val ELSE NULL END)  ".
"ELSE NULL END) AS APR2016 ".
"FROM (SELECT primaryID,chartID,state,party,day,month,year,candidate,AVG(value) AS val ".
"FROM Chart ".
"WHERE party = '$party' ".
"AND state = '$state' ".
"GROUP BY candidate,month,year ".
"ORDER BY year ASC,month ASC,day ASC) as tbl) AS fn ".
"WHERE ".
"APR2016 IS NOT NULL ".
"OR MAR2016 IS NOT NULL ".
"OR FEB2016 IS NOT NULL ".
"OR JAN2016 IS NOT NULL ".
"OR JAN2015 IS NOT NULL ".
"OR FEB2015 IS NOT NULL ".
"OR MAR2015 IS NOT NULL ".
"OR APR2015 IS NOT NULL ".
"OR MAY2015 IS NOT NULL ".
"OR JUN2015 IS NOT NULL ".
"OR JUL2015 IS NOT NULL ".
"OR AUG2015 IS NOT NULL ".
"OR SEP2015 IS NOT NULL ".
"OR OCT2015 IS NOT NULL ".
"OR NOV2015 IS NOT NULL ".
"OR DEC2015 IS NOT NULL ".
"GROUP BY candidate; ";

$result = mysql_query($sql) or die ("Cannot Run Query");

while($row = mysql_fetch_array($result)) {
    $query = $row['candidate'] . "/" . $row['SEP2015'] . "/" . $row['OCT2015'] . "/" . $row['NOV2015'] . "/" . $row['DEC2015'] . "/" . $row['JAN2016'] . "/" . $row['FEB2016'] . "/" . $row['MAR2016'] . "/" . $row['APR2016'] . "/";
    echo $query;
}


mysql_close($con);
?>

