<?
ob_start();
header('Content-Type: text/html; charset=utf-8'); 
//echo "คุณเลือกสี".$_POST["color"];
$color = $_POST["color"];
setcookie("colorName",$color,time()+3600*4);
if($color=="red") {
setcookie("colorNameThai","แดง",time()+3600*4);
} else if($color=="blue") {
setcookie("colorNameThai","น้ำเงิน",time()+3600*4);
} else if($color=="green") {
setcookie("colorNameThai","เขียว",time()+3600*4);
} else if($color=="orange") {
setcookie("colorNameThai","ส้ม",time()+3600*4);
}
header("Location: code.php");
?>