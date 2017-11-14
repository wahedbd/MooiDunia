<?php 
ob_start(); // Turns on output buffering
session_start();

$timezone = date_default_timezone_set("Europe/Berlin");

$servername = "localhost";
$username = "root";
$password = "";
$DBName = "social";

// Create Connection
$con = new mysqli($servername, $username, $password, $DBName); 

// Check Connection
if ($con -> connect_error) {
	die("Connection failed: " . $con -> connect_error);
}
?>

