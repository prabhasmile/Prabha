<?php
require 'main.php';
$conn    = Connect();
$categories   = $conn->real_escape_string($_POST['categories']);
$type 	   = $conn->real_escape_string($_POST['type']);
$quantity    = $conn->real_escape_string($_POST['quantity']);
$query   = "INSERT into asset (categories,type,quantity) VALUES('" . $categories . "','" . $type . "','" . $quantity . "')";
$success = $conn->query($query);

if (!$success) {
	die("Couldn't enter data: ".$conn->error);

}

echo "Your Input is Saved successfully!  \n";

$conn->close();
?>