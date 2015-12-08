<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Schedule Individual Appointment</title>
    <script type="text/javascript">
    function saveValue(target){
	var stepVal = document.getElementById(target).value;
	alert("Value: " + stepVal);
    }
    </script>
	<link rel='stylesheet' type='text/css' href='./css/standard.css'/>
  </head>
  <body>
    <div id="login">
      <div id="form">
        <div class="top">
		    <h1>Schedule Individual Appointments</h1>
        <form action="AdminConfirmScheIndApp.php" method="post" name="Confirm">
	    <div class="field">
	      <label for="Date">Date</label>

		<!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
		<!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->

		<!-- I had to change this for every semester!!!  Lupoli, 8/18/15 -->

		<!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
		<!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->

	      <input id="Date" type="date" name="Date" placeholder="mm/dd/yyyy" min="2015-08-01" max="2015-10-30" required autofocus> (mm/dd/yyyy)
	    </div>
      <!-- form section for time -->
	    <div class="field">
	      <label for="Time">Times</label>
        <input type="checkbox" name="time[]" value="08:00:00"> 8:00AM - 8:30AM <br>
        <input type="checkbox" name="time[]" value="08:30:00"> 8:30AM - 9:00AM <br>
        <input type="checkbox" name="time[]" value="09:00:00"> 9:00AM - 9:30AM <br>
        <input type="checkbox" name="time[]" value="09:30:00"> 9:30AM - 10:00AM <br>
        <input type="checkbox" name="time[]" value="10:00:00"> 10:00AM - 10:30AM <br>
        <input type="checkbox" name="time[]" value="10:30:00"> 10:30AM - 11:00AM <br> 
        <input type="checkbox" name="time[]" value="11:00:00"> 11:00AM - 11:30AM <br>
        <input type="checkbox" name="time[]" value="11:30:00"> 11:30AM - 12:00PM <br>
        <input type="checkbox" name="time[]" value="12:00:00"> 12:00PM - 12:30PM <br>
        <input type="checkbox" name="time[]" value="12:30:00"> 12:30PM - 1:00PM <br>
        <input type="checkbox" name="time[]" value="13:00:00"> 1:00PM - 1:30PM <br>
        <input type="checkbox" name="time[]" value="13:30:00"> 1:30PM - 2:00PM <br>
        <input type="checkbox" name="time[]" value="14:00:00"> 2:00PM - 2:30PM <br>
        <input type="checkbox" name="time[]" value="14:30:00"> 2:30PM - 3:00PM <br>
        <input type="checkbox" name="time[]" value="15:00:00"> 3:00PM - 3:30PM <br>
        <input type="checkbox" name="time[]" value="15:30:00"> 3:30PM - 4:00PM <br>
	     
	    </div>
      <!-- form section for majors -->
      <div class="field">
        <label for="Majors">Majors</label>
          <input type="checkbox" name="major[]" value="CMPE" checked>Computer Engineering
          <input type="checkbox" name="major[]" value="CMSC" checked>Computer Science
          <input type="checkbox" name="major[]" value="MENG" checked>Mechanical Engineering
          <input type="checkbox" name="major[]" value="CENG" checked>Chemical Engineering
          <input type="checkbox" name="major[]" value="ENGR" checked>Engineering Undecided
      </div>
        <!-- form section for repeat weekly -->
        <div class="field">
            <label for="Repeat">Repeat Weekly</label>
            <input type="checkbox" name="repeat[]" value="Monday">Monday
            <input type="checkbox" name="repeat[]" value="Tuesday">Tuesday
            <input type="checkbox" name="repeat[]" value="Wednesday">Wednesday
            <input type="checkbox" name="repeat[]" value="Thursday">Thursday
            <input type="checkbox" name="repeat[]" value="Friday">Friday
        </div>

        <div class="field">
        	<h3>Repeat for
          <!-- select value 1 - 4 -->
        	<input type="number" id="stepper" name="stepper" min="0" max="4" value="0" />
		      more week(s)</h3>
        </div>
	    <div class="nextButton">
			<input type="submit" name="next" class="button large go" value="Create">
	</div>
	</div>
	</form>
	<?php include('AdminFooter.html'); ?>

	<?php include('../workOrder/workButton.php'); ?>

  </body>
  
</html>
