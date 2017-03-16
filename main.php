<?php 
function Connect()
{
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "Acgchennai#1";
	$dbname = "asset";

	// Create connection
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);

	return $conn;
}


?>