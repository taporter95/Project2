<?php
session_start();

$debug = false;
include('../CommonMethods.php');
$COMMON = new Common($debug);

$studid = $_SESSION["studID"];
$sql = "select * from Proj2Students where `StudentID` = '$studid'";
$rs = $COMMON->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);
$row3 = mysql_fetch_row($rs);
$major = $row3[5];
?>

<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title>Next Available Appointment</title>
		<link rel='stylesheet' type='text/css' href='../css/standard.css'/>
	</head>
	<body>
		<div id="login">
			<div id="form">
				<div class="top">
				<h2>Showing next Available appointment</h2>
				<div class="field">
				<form action ="10StudConfirmSch.php" method="post" name="confirm">
				<?php
					//Find the next available individual appointment
					$sql = "select * from `Proj2Appointments` where `Time` > Now() and `EnrolledNum` = 0 and `Max` = 1 and `Major` like '%$major%' order by `Time` asc limit 1";
					$rs = $COMMON->executeQuery($sql, $_SERVER["SCRIPT_NAME"]); 
					$row = mysql_fetch_row($rs);
					$appID = intval($row[2]);
					$time = strtotime($row[1]);
					//Find advisor associated with appointment
					$sql2 = "select * from `Proj2Advisors` where `id` = $appID";
					$rs2 = $COMMON->executeQuery($sql2, $_SERVER["SCRIPT_NAME"]);
					$row2 = mysql_fetch_row($rs2);
					$name = $row2[1] . " " . $row2[2];
					$location = $row2[3];
					//display
					echo "<label for='info'>";
					echo "Advisor: ", $name, "<br>";
					echo "Appointment: ", date('l, F d, Y g:i A', $time), "<br>";
					echo "Location: ", $location, "</label><br>";

					//Send parameters in hidden fields 
					echo "<input id='",$row2[0],"' type='hidden' name='advisor' required value='", $row2[0],"'>";
					echo "<input id='",$row[0],"' type='hidden' name='appTime' required value='",$row[1],"'>";
					
					echo "<input type='submit' name='next' class='button large go' value='Next'>";
				?>
				</form>
				</div>
				<form method="link" action="02StudHome.php">
					<input type="submit" name="home" class="button large" value="Cancle">
				</form>
				</div>
			</div>
		</div>
	</body>
</html>