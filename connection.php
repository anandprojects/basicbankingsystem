<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "ads bank";
    $conn = mysqli_connect($server, $username, $password, $database);
    if(!$conn){
        die("connection failed due to the - " . mysqli_connect_error());
    }
?>