<?php

$hostname = "localhost";
$username= "se18_10";
$password = "se18_10";
$dbname="se18_10";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//Ajax can use thai
mysqli_set_charset($conn,"utf8");
?>
