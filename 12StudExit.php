<?php
session_start();
?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Exit Message</title>
    <link rel='stylesheet' type='text/css' href='../css/standard.css'/>
  </head>
  <body>
    <div id="login">
      <div id="form">
        <div class="top">
	    <div class="statusMessage">
	    <?php
			$_SESSION["resch"] = false;	
			//display different messages based on $_SESSION["status"]		
			if($_SESSION["status"] == "complete"){
				echo "You have completed your sign-up for an advising appointment.";
			}
			elseif($_SESSION["status"] == "none"){
				echo "You did not sign up for an advising appointment.";
			}
			if($_SESSION["status"] == "cancel"){
				echo "You have cancelled your advising appointment.";
			}
			if($_SESSION["status"] == "resch"){
				echo "You have changed your advising appointment.";
			}
			if($_SESSION["status"] == "keep"){
				echo "No changes have been made to your advising appointment.";
			}
		?>
        </div>
		</div>
		<?php
			include("footer.html");
		?>
		</html>