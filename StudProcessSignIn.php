<?php
session_start();
$debug = false;
include('../CommonMethods.php');
$COMMON = new Common($debug);

$first = strtoupper($_POST["firstN"]);
$last = strtoupper($_POST["lastN"]);
$_SESSION["studID"] = strtoupper($_POST["studID"]);
$email = $_POST["email"];
$major = $_POST["major"];

$sql = INSERT INTO `Proj2Students` (`FirstName`, `LastName`, `StudentID`, `Email`, `Major`) VALUES ($first, $last, $_SESSION["studID"], $email, $major);
$rs = $COMMON->executeQuery($sql, "new user");
header('Location: 02StudHome.php');
?>