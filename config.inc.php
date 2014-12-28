<?

$dbhost = "localhost";
$dbuser = "dollarst_dl";
$dbpass = "Chan6568";
$dbname = "dollarst_dl";
$setting_sms = true;
/*$dbhost = "localhost";
$dbuser = "root";
$dbpass = "326207";
$dbname = "dollarsss3";*/

$link = mysql_connect($dbhost, $dbuser, $dbpass);
mysql_db_query($dbname,"SET NAMES utf8");
mysql_select_db($dbname, $link);

?>