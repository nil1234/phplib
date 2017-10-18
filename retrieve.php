<?php
	require_once 'db_confic.php';



	$sql = " SELECT * FROM members ";
	$result = $conn->query($sql);
	//var
	while($row = $result->fetch_assoc()) {
		//var_dump($row);
		echo $row['id'] . " : " . $row['fname'] . " : " . $row['lname'] . " : " . $row['contact'] . "<br>";
	}

	$conn->close();
?>