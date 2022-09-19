<?php
session_start();
$_SESSION["uname"] = "testname";
header("Location: ./home.php");
die();
?>

