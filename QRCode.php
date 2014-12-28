<?
header('Content-Type: text/html; charset=utf-8'); 
if($_COOKIE["colorName"] == null) {
header("Location: index.php");
}
if($_COOKIE["expired"] != null){
echo "<h1>เหลือเวลาอีก ".($_COOKIE["expired"]-time())." วินาที</h1>";
exit();
}
include "config.inc.php";
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

$QR = $_GET["qrcode"];
$sql = "SELECT * FROM  dl_meeting3_quiz WHERE  QRCode =  '$QR'";
$result = mysql_db_query($dbname,$sql) or die("Error Connect Database");
$ckrow = mysql_num_rows($result);
if($ckrow == 0) {
echo "<center><h1>ไม่มีข้อมูล</h1></center>";
exit();
}
$row = mysql_fetch_array($result);
//check uplevel
$chsql = "SELECT * FROM  dl_meeting3_setting";
$chresult = mysql_db_query($dbname,$chsql) or die("Error Connect Database");
$check = mysql_fetch_row($chresult);
if($row['NoRC'] != $check[0]) {
echo "<font color=\"red\"><center><h1>ขณะนี้ต้องการให้หา RC ประจำจุดที่ ".$check[0]." อยู่ค่ะ</h1></center></font>";
exit();
}

if($row['teamwin'] != null) {
echo "<font color=\"red\"><center><h1>ฐานนี้มีทีมได้ RC ไปแล้วค่ะ</h1></center></font>";
exit();
}
?>
        <h4><p align="right">
            [ <font color="<?=$_COOKIE["colorName"];?>">สี<?=$_COOKIE["colorNameThai"];?></font>  : RC ตัวที่ <?=$row['NoRC'];?> ]
        </p></h4>
        <h2><center>
            ภารกิจที่ <?=$row['NoRC'];?> : <?=$row['mission'];?>
        </center></h2>
        <form method="post" action="sendAns.php"  data-ajax="false" >
		<center>
		<? if((int)$row['type'] == 2) {
		$choice = explode("|", $row['choice']);
		foreach($choice as $n){
		echo "<label><input type=\"radio\" name=\"answer\" id=\"radio-choice-0a\" value=\"$n\">$n</label>";
		}
		
		} else if((int)$row['type'] == 1) {?>
            <div data-role="fieldcontain">
                <fieldset data-role="controlgroup">			
                    <label for="textinput1">
                        คำตอบ :
                    </label>
                    <input name="answer" id="textinput1" placeholder="" value="" type="text">
                </fieldset>
            </div>
			<?
			}
			?>
			<input type="hidden" name="norc" value="<?=$row['NoRC'];?>">
            <button type="submit" data-theme="b" name="submit" value="submit-value">ส่งคำตอบ</button>
			</center>
        </form>
    </div>
	
</div>

</body>
</html>
