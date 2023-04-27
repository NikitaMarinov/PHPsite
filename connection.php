<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db_name = "individualproject";
	$conn = mysqli_connect($servername, $username, $password, $db_name);
	if (!$conn)
		die("Not connection: " . mysqli_connect_error());	
?>
