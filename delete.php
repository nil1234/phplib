<?php
    require_once 'db_config.php';
    $id = $_POST['mid'];
    $sql = "DELETE FROM members WHERE id = $id";
    echo $sql;
    $result=$conn->query($sql);
    if($result==TRUE){
  		header("Location: http://localhost/crudexample");
  	}else{
  		die('Cannot DELETE');
  	}
  	$conn->close();
?>
