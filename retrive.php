<?php
	$severname="127.0.0.1";
	$username = "root";
	$password = "";
	$dbname="cruddatabase";

	$conn = mysql_connect($severname,$username,$password,$dbname);
	if(!$conn){
		die("Connection failed: " .mysql_connect_error())
	}
	echo "Connected successfully";
>