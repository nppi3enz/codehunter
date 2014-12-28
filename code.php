<?
if($_COOKIE["colorName"] == "") {
	header("Location: selectTeam.php");
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
        <h4><p align="right">
            [ <font color="<?=$_COOKIE["colorName"];?>">สี<?=$_COOKIE["colorNameThai"];?></font> ]
        </p></h4>
        <form method="get" action="QRCode.php">
		<center>
		 
	
            <div data-role="fieldcontain">
                <fieldset data-role="controlgroup">			
                    <label for="textinput1">
                       QRCode :
                    </label>
                    <input name="qrcode" id="textinput1" placeholder="" value="" type="text" maxlength="6" size="6">
                </fieldset>
            </div>
           <button type="submit" data-theme="b" name="submit" value="submit-value">ค้นหา</button>
			</center>
        </form>
    </div>
	
</div>

</body>
</html>
