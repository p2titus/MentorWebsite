<?php
session_start();
$_SESSION["uname"] = "testname";

$_SESSION["fname"] = "testy";
$_SESSION["lname"] = "mctestface";
header("Location: ./home.php");
die();
?>

