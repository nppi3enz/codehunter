<?
header('Content-Type: text/html; charset=utf-8'); 
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
	<table data-role="table" id="table-column-toggle" data-mode="columntoggle" class="ui-responsive table-stroke">
              <thead>
                <tr>
                  <th data-priority="2">#NoRC</th>
                  <th data-priority="3">ทีมที่ได้</th>
                  <th data-priority="5">เมื่อเวลา</th>
                </tr>
              </thead>
			  <?			  
$sql2 = "SELECT * FROM  dl_meeting3_quiz ORDER BY  NoRC ASC ";
$result2 = mysql_db_query($dbname,$sql2) or die("Error Connect Database");

while($row2 = mysql_fetch_array($result2)) {
echo "<tbody>";
                echo "<tr>";
                  echo "<th>".$row2["NoRC"]."</th>";
                  echo "<td>".$row2["teamwin"]."</td>";
                  echo "<td>".$row2["timewin"]."</td>";
                echo "</tr>";
              echo "</tbody>";
}
			  ?>
			  
              
            </table>
    </div>
	
</div>

</body>
</html>
