<?
ob_start();
header('Content-Type: text/html; charset=utf-8'); 
if($_COOKIE["colorName"] == null || $_POST["norc"] == null) {
echo "<h1>error</h1>";
exit();
}
if($_COOKIE["expired"] != null){
echo "<h1>เหลือเวลาอีก ".($_COOKIE["expired"]-time())." วินาที</h1>";
exit();
}
include "config.inc.php";
$chsql = "SELECT * FROM  dl_meeting3_setting";
$chresult = mysql_db_query($dbname,$chsql) or die("Error Connect Database0");
$check = mysql_fetch_row($chresult);
if($_POST["norc"] != $check[0]) {
echo "<font color=\"red\"><center><h1>ขณะนี้ต้องการให้หา RC ประจำจุดที่ ".$check[0]." อยู่ค่ะ</h1></center></font>";
exit();
}
?>
<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dollars[TH] Code Hunter</title>
	<link rel="stylesheet"  href="css/themes/default/jquery.mobile-1.3.0.css">
	<link rel="stylesheet" href="docs/_assets/css/jqm-demos.css">
	<link rel="shortcut icon" href="docs/favicon.ico">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="docs/_assets/js/jquery.mobile.demos.js"></script>
	<script src="js/jquery.mobile-1.3.0.js"></script>
</head>
<body><!-- Home -->
<div data-role="page" id="page1">
    <div data-theme="a" data-role="header">
        <h3>
            Code Hunter
        </h3>
    </div>
    <div data-role="content">
<?
	//get data
$norc = $_POST["norc"];
$sql = "SELECT * FROM  dl_meeting3_quiz WHERE  NoRC = $norc";
$result = mysql_db_query($dbname,$sql) or die("Error Connect Database1");
$row = mysql_fetch_array($result);
if($row['teamwin'] != null) {
echo "<font color=\"red\"><center><h1>ฐานนี้มีทีมได้ RC ไปแล้วค่ะ</h1></center></font>";
exit();
}
$timestamp = time()+60;
if($row['answer'] != $_POST["answer"]) {
if($norc!=99){
setcookie("expired",$timestamp,time()+60);
echo "<center><h1>คุณตอบผิด โดนงดตอบคำถาม 1 นาที<br>เมื่อหมดเวลากรุณากลับไปสแกนตอบใหม่</h1></center>";
} else {
echo "<center><h1>รหัสผ่านไม่ถูกต้องค่ะ<br><a href=\"javascript:history.back()\">Back</a></h1></center>";
}
} else {
if($norc==99){ 
$sql = "UPDATE dl_meeting3_quiz SET  teamwin =  '".$_COOKIE["colorName"]."', timewin =  '".date("Y-m-d H:i:s")."' WHERE  NoRC =".$norc." LIMIT 1";
echo "<h1>ยินดีด้วยทีม".$_COOKIE["colorNameThai"]." ถอดรหัสสำเร็จ</h1>"; 
exit();
}
$sql = "UPDATE dl_meeting3_quiz SET  teamwin =  '".$_COOKIE["colorName"]."', timewin =  '".date("Y-m-d H:i:s")."' WHERE  NoRC =".$norc." LIMIT 1";
//echo $sql;
$result = mysql_db_query($dbname,$sql) or die(mysql_error());
//send sms


//call phone
if($setting_sms) {
include("sms.class.php");
$sql2 = "SELECT * FROM  dl_meeting3_telphone";
$result2 = mysql_db_query($dbname,$sql2) or die("Error Connect Database1");

while($row2 = mysql_fetch_array($result2)) {
$sql3 = "SELECT * FROM  dl_meeting3_quiz where NoRC=".($norc+1);
$result3 = mysql_db_query($dbname,$sql3) or die("Error Connect Database2");
$row3 = mysql_fetch_array($result3);
$message = "ประกาศ! ขณะนี้ทีม".$_COOKIE["colorNameThai"]." ได้พิชิต RC จุด $norc สำเร็จแล้วคำใบ้ RC จุดที่ ".($norc+1)."คือ \"".$row3['hint']."\"";
//$message = "ประกาศ! ขณะนี้ทีม".$_COOKIE["colorNameThai"]." ได้ครอบครอง RC จุด $norc สำเร็จแล้ว";
$result_sms = sms::send_sms('0882288335','326207',$row2["phone"],$message,'THAIBULKSMS','','standard');
}
}
mysql_query("UPDATE dl_meeting3_setting SET `quiz` =   `quiz`+1");
//echo "<center><h2>ถูกต้อง! คำตอบก็คือ <u>$answer</u><br>อุปกรณ์ที่คุณได้รับคือ <font size=20>\"".$row['RC']."\"</font><br>สามารถหาตัวต่อไปได้เลย</h2></center>";
echo "<center><h2>ถูกต้อง! คำตอบก็คือ <u>$answer</u><br>สามารถหาตัวต่อไปได้เลย</h2></center>";
}

?>
	</div>
	
</div>

</body>
</html>
