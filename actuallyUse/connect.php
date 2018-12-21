<?php

$hostname = "localhost";
$username= "root";
$password = "";
$dbname="complaint";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//Ajax can use thai
mysqli_set_charset($conn,"utf8");
?>
