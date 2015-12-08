<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Create New Admin</title>
	<link rel='stylesheet' type='text/css' href='./css/standard.css'/>

     <script type="text/javascript">
    //   window.onload = function () {
    //       document.getElementById("PassW").onchange = validatePassword;
    //       document.getElementById("ConfP").onchange = validatePassword;
    //   }
    //   function validatePassword(){
    //     var pass2=document.getElementById("ConfP").value;
    //     var pass1=document.getElementById("PassW").value;
    //     if(pass1!=pass2)
    //         document.getElementById("ConfP").setCustomValidity("Passwords Don't Match");
    //     else
    //         document.getElementById("PassW").setCustomValidity('');  
    //     //empty string means no validation error
    //   }
    // </script>
  </head>
   <body>
    <div id="login">
      <div id="form">
        <div class="top">
		<h2>Create New Advisor Account</h2>

	<?php
		//AdminProcessCreateNew.php will redirect back here if password and confirm password do not match
      if($_SESSION["PassCon"] == true){
        echo "<h3 style='color:red'>Passwords do not match!!</h3>";
      }
    	?>

    	<!--get values here,
    		password will be checked in AdminProcessCreateNew.php,
    		data will be entered into db in AdminCreateNew.php-->
		<form action="AdminProcessCreateNew.php" method="post" name="Create">
		<div class="field">
	      		<label for="firstN">First Name</label>
	      		<input id="firstN" size="20" maxlength="50" type="text" name="firstN" required autofocus>
	    	</div>

	    	<div class="field">
	     		<label for="lastN">Last Name</label>
	      		<input id="lastN" size="20" maxlength="50" type="text" name="lastN" required>
	   	</div>	

	   	<div class="field">
	   			<label for="OfficeLoc">Office Location</label>
	   			<input id="OfficeLoc" size "20" maxlength="50" type="text" name="OfficeLoc" required>
	   	</div>

	   	<div class="field">
	   			<label for="AppointLoc">Appointment Location</label>
	   			<input id="AppointLoc" size "20" maxlength="50" type="text" name="AppointLoc" required>
	   	</div>


		<div class="field">
	     		<label for="UserN">Username</label>
	      		<input id="UserN" size="20" maxlength="50" type="text" name="UserN" required>
	   	</div>	 

		<div class="field">
	     		<label for="PassW">Password</label>
	      		<input id="PassW" size="20" maxlength="50" type="password" name="PassW" required>
	   	</div>	

		<div class="field">
	     		<label for="ConfP">Confirm Password</label>
	      		<input id="ConfP" size="20" maxlength="50" type="password" name="ConfP" required>
	   	</div>	
		<br>

		<div class="nextButton">
			<input type="submit" name="next" class="button large go" value="Submit">
	   	 </div>
		</form>

		<?php include('AdminCancelFooter.html'); ?>

	</div>
	</div>
	</div>
  </body>
</html>
