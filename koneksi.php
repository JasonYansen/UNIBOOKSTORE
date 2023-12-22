<?php
	$username = "root";
	$password = "";
	$db	= "data";
	$server = "localhost";

	$conn= new mysqli($server, $username, $password, $db);

	if ($conn-> connect_error){
		die("Koneksi Error".$connect->connect_error);
	}
?>
