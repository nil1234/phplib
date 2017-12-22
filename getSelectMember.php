<?php
	require_once 'db_config.php';
	$id=$_POST['mid'];
	$sql = "SELECT * FROM members WHERE id = $id";
	//$sql = "DELETE FROM members WHERE id = $id";
    //echo $sql;
    $require = $conn -> query($sql);
    $result = $require -> fetch_assoc();

	echo json_encode($result);
    //var_dump($result);


    $conn->close();

?>