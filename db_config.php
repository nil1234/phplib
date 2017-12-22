<?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "cruddatabase";

    $conn = new mysqli($servername, $username, $password,$dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . mysqli_connect_error());
    }
    // echo "Connection Success";

?>
