<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Print Schedule</title>
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
		      <h1>Print Schedule</h1>
          <!--start form-->
          <form action="AdminPrintResults.php" method="post" name="Confirm">
	         <div class="field">
	     	     <label for="date">Date</label>
             <input id="date" type="date" name="date" placeholder="mm/dd/yyyy" required autofocus> (mm/dd/yyyy)
	         </div>

	         <div class="field">
        		<label for="Type">Type of Appointment</label>
            <!--select type of appointment -->
            <select id="type" name = "type">
					    <option>Both</option>
        			<option>Individual</option>
        			<option>Group</option>
        		</select>
	         </div>

	         <br>
           <!-- next button -->
    	    <div class="nextButton">
    			<input type="submit" name="next" class="button large go" value="Next">
        </form>
        <!-- home button -->
        <form method='link' action='AdminUI.php'>
          <input type='submit' name='home' class='button large' value='Cancle'>
        </form>
	</div>
	</div>
	<?php include('./workOrder/workButton.php'); ?>

  </body>
</html>
