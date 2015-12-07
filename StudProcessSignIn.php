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

$sql = "INSERT INTO `Proj2Students` (`FirstName`, `LastName`, `StudentID`, `Email`, `Major`) VALUES ('$first', '$last', '$studID', '$email', '$major')";
$rs = $COMMON->executeQuery($sql, "Advising Appointments");
header('Location: 02StudHome.php');
?>