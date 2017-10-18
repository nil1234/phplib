<?php

	$severname="127.0.0.1";
	$username = "root";
	$password = "";
	$dbname="cruddatabase";

		$conn = new mysqli($severname,$username,$password,$dbname);
	if($conn->connect_error){
		die("Connection failed: " .mysql_connect_error());
	}
	//echo "Connected successfully";
?>