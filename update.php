<?php
	/*echo 	$_POST['id']."<br>";
	echo	$_POST['fname']."<br>";
	echo	$_POST['lname']."<br>";
	echo	$_POST['contact']."<br>";*/
	$id = $_POST['hid'];
	$fname = $_POST['efname'];
	$lname = $_POST['elname'];
	$contact = $_POST['econtact'];

	$sql ="UPDATE INTO members SET fname='$fname', lname='$lname', contact='$contact' WHERE id=$id ";

	echo  $sql;
	require_once 'db_config.php';
	$result=$conn->query($sql);
	if($result==TRUE){
		header("Location: http://localhost/crudexample");
	}else{
		die('Cannot Insert into database');
	}
	$conn->close();
?>
