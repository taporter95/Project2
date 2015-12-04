<?php
session_start();
?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Select Advising Type</title>
	<link rel='stylesheet' type='text/css' href='../css/standard.css'/>
  </head>
  <body>
    <div id="login">
      <div id="form">
        <div class="top">
		<h1>Schedule Appointment</h1>
		<h2>What kind of advising appointment would you like?</h2><br>
	<form action="StudProcessType.php" method="post" name="SelectType">
	<div class="nextButton">
		<!-- Submit for individual -->
		<input type="submit" name="type" class="button large go" value="Individual"><br>
		<!-- Submit for group -->
		<input type="submit" name="type" class="button large go" value="Group"><br>
		<!-- Find next available appointment -->
		<input type="submit" name="type" class="button large go" value="Next Available">
	</div>
	</div>
	</form>


<br>
<br>
	<?php
		include("footer.html")
	?>