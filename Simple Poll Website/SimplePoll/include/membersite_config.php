<?PHP
require_once("./include/fg_membersite.php");

$fgmembersite = new FGMembersite();

//Provide your site name here
$fgmembersite->SetWebsiteName('simplePoll');

//Provide the email address where you want to get notifications
$fgmembersite->SetAdminEmail('simplepollsuport@gmail.com');

//Provide your database login details here:
//hostname, user name, password, database name and table name
$fgmembersite->InitDB(/*hostname*/'localhost',
                      /*username*/'team6',
                      /*password*/'7ujy5tgf',
                      /*database name*/'team6',
                      /*table name*/'Users');

//For better security. Get a random string from this link: http://tinyurl.com/randstr
// and put it here
$fgmembersite->SetRandomKey('X0gc6dYb5ZJkZ5k');

?>
