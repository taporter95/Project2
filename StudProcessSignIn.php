<?php
session_start();

strtoupper($_POST["firstN"]);
strtoupper($_POST["lastN"]);
$_SESSION["studID"] = strtoupper($_POST["studID"]);
$_POST["email"];
$_POST["major"];

header('Location: 02StudHome.php');
?>