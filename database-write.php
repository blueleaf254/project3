<?php
$first_name = Trim(stripslashes($_POST['first_name']));
$last_name = Trim(stripslashes($_POST['last_name']));
$phone = Trim(stripslashes($_POST['phone']));
$email = Trim(stripslashes($_POST['email']));
$message = Trim(stripslashes($_POST['message']));

include "db-info.php";

	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	
	$query = "INSERT INTO leads (first_name, last_name, phone, email, message)VALUES ('$first_name', '$last_name', '$phone', '$email', '$message')";
	
	$result = mysqli_query($connection, $query);
	
	$NumberOfRowsAffected = mysqli_affected_rows($connection);
		if($NumberOfRowsAffected < 1 ) {
			die('No records were written to the database. Try again - Meliora!');
		}

	mysqli_close($connection);
	
	header("Location: database-read.php");
?>