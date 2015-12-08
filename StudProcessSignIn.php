<?php
session_start();
$debug = false;
include('../CommonMethods.php');
$COMMON = new Common($debug);

$first = strtoupper($_POST["firstN"]);
$last = strtoupper($_POST["lastN"]);
$studID = strtoupper($_POST["studID"]);
$email = $_POST["email"];
$major = $_POST["major"];

$_SESSION["studID"] = $studID;

$sql1 = "SELECT * FROM `Proj2Students` WHERE `StudentID` = '$studID'";
$rs1 = $COMMON->executeQuery($sql1, "Advising Appointments");
$row = mysql_fetch_row($rs1);

if($row){
	header('location: 02StudHome.php');
}
else{
	$sql2 = "INSERT INTO `Proj2Students` (`FirstName`, `LastName`, `StudentID`, `Email`, `Major`) VALUES ('$first', '$last', '$studID', '$email', '$major')";
	$rs2 = $COMMON->executeQuery($sql2, "Advising Appointments");
	header('Location: 02StudHome.php');
}
?>
