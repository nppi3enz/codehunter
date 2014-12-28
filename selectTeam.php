<?
header('Content-Type: text/html; charset=utf-8'); 
if($_COOKIE["colorName"] != null) {
	echo "ไม่สามารถเปลี่ยนได้ โปรดติดต่อผู้ดูแลระบบ";
	exit();
}
?><!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Code Hunter Game</title>
	<link rel="stylesheet"  href="css/themes/default/jquery.mobile-1.3.0.css">
	<link rel="stylesheet" href="docs/_assets/css/jqm-demos.css">
	<link rel="shortcut icon" href="docs/favicon.ico">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="docs/_assets/js/jquery.mobile.demos.js"></script>
	<script src="js/jquery.mobile-1.3.0.js"></script>
</head>
<body>
<!-- Home -->
<div data-role="page" id="page1">

    <div data-theme="a" data-role="header">
        <h3>
            Code Hunter Game
        </h3>
    </div>
	<form method="post" action="sendTeam.php"  data-ajax="false" >
    <fieldset data-role="controlgroup">
	<legend>เลือกสีทีมที่ท่านประจำอยู่ :</legend>
     	<input type="radio" name="color" id="radio-choice-1" value="red" checked="checked" />
     	<label for="radio-choice-1">สีแดง</label>

     	<input type="radio" name="color" id="radio-choice-2" value="blue"  />
     	<label for="radio-choice-2">สีน้ำเงิน</label>

     	<input type="radio" name="color" id="radio-choice-3" value="green"  />
     	<label for="radio-choice-3">สีเขียว</label>

     	<input type="radio" name="color" id="radio-choice-4" value="orange"  />
     	<label for="radio-choice-4">สีส้ม</label>
</fieldset>
<button type="submit" data-theme="b" name="submit" value="submit-value">ส่งข้อมูล</button>
</form>
</div>
</body>
</html>
