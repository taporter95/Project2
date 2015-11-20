<?php
session_start();

$first = strtoupper($_POST["firstN"]);
$last = strtoupper($_POST["lastN"]);
$_SESSION["studID"] = strtoupper($_POST["studID"]);
$email = $_POST["email"];
$major = $_POST["major"];

header('Location: 02StudHome.php');
?>