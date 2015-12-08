<?php 
session_start();
$debug = false;

if($debug) { echo("Session variables-> ".var_dump($_SESSION)); }
//connect to db
include('../CommonMethods.php');
$COMMON = new Common($debug);
$_SESSION["PassCon"] = false;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Admin Home</title>
	<link rel='stylesheet' type='text/css' href='../css/standard.css'/>
  </head>
  <body>
    <div id="login">
      <div id="form">
        <div class="top">
	<h2> Hello 
	<?php

	if(!isset($_SESSION["ID"])) // someone landed this page by accident
	{
		return;
	}		
        //Get current user from db 
		//$User = $_SESSION["UserN"];
		//$Pass = $_SESSION["PassW"];
		$id = $_SESSION["ID"];
		$sql = "SELECT `firstName` FROM `Proj2Advisors` 
			WHERE `id` = $id";

		$rs = $COMMON->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);
		$row = mysql_fetch_row($rs);
		echo $row[0];
	?>
	</h2>
	<!-- Form for home actions -->
	<form action="AdminProcessUI.php" method="post" name="UI">
  
		<input type="submit" name="next" class="button large selection" value="Schedule appointments"><br>
		<input type="submit" name="next" class="button large selection" value="Print schedule for a day"><br>
		<input type="submit" name="next" class="button large selection" value="Edit appointments"><br>
		<input type="submit" name="next" class="button large selection" value="Search for an appointment"><br>
		<input type="submit" name="next" class="button large selection" value="Create new Admin Account"><br>
	
	</form>
	<br>

	<form method="link" action="Logout.php">
		<input type="submit" name="next" class="button large go" value="Log Out">
	</form>
          
        </div>
        <div class="field">
          
        </div>
	</div>

	<?php include('./workOrder/workButton.php'); ?>

</body>
  
</html>
