<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Create New Admin</title>
    <script type="text/javascript">
    function saveValue(target){
	var stepVal = document.getElementById(target).value;
	alert("Value: " + stepVal);
    }
    </script>
    <link rel='stylesheet' type='text/css' href='../css/standard.css'/>
  </head>
  <body>
    <div id="login">
      <div id="form">
        <div class="top">
		<h2>New Advisor has been created:</h2>

		<?php

		if($_POST["PassW"] != $_POST["ConfP"]){
			echo "<h3 style='color:red'>Passwords do not match!!</h3>";
			header('Location: AdminCreateNewAdv.php');
		}

			$first = $_POST["firstN"];
			$last = $_POST["lastN"];
			$user = $_POST["UserN"];
			$pass = $_POST["PassW"];
      			$Office = $_POST["OfficeLoc"];
			$Location = $_POST["AppointLoc"];

			include('../CommonMethods.php');
			$debug = false;
			$Common = new Common($debug);

      $sql = "SELECT * FROM `Proj2Advisors` WHERE `Username` = '$user' AND `FirstName` = '$first' AND  `LastName` = '$last'";
      $rs = $Common->executeQuery($sql, "Advising Appointments");
      $row = mysql_fetch_row($rs);
      if($row){
        echo("<h3>Advisor $first $last already exists</h3>");
      }
      else{
  			$sql = "INSERT INTO `Proj2Advisors`(`FirstName`, `LastName`, `Office`, `Username`, `Password`, `Location`) 
  			VALUES ('$first', '$last', '$Office', '$user', '$pass', '$Location')";
        echo ("<h3>$first $last<h3>");
        $rs = $Common->executeQuery($sql, "Advising Appointments");
      }
		?>
		<form method="link" action="AdminUI.php">
			<input type="submit" name="next" class="button large go" value="Return to Home">
		</form>
	</div>
	</div>
	</div>
	</form>
  </body>
  
</html>
