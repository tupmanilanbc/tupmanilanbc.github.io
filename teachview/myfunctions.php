<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

	$conn = mysqli_connect("localhost", "root", "", "registration");
	if (!$conn) {
		die("connection failed: ".mysqli_connect_error());
	}
	function test_input($data){
		$data = htmlentities($data);
		$data = stripslashes($data);
		$data = trim($data);
		return $data;
	}
?>
