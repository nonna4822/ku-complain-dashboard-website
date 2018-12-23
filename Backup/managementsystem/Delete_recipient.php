<?php

session_start();

if(session_status() == 0){
  header("location : ../loginSystem/login.php");
  exit;
}

require '../connect.php';
$rid = mysqli_real_escape_string($conn, $_GET['rid']);

$sql = "DELETE FROM `receiver` WHERE `receiver`.`rid` = '$rid'";

if (!mysqli_query($conn,$sql)) {
    echo('Error can\'update : ' . mysqli_error($conn));
}else {
  echo "<script>setTimeout(\"location.href = '../management/CRUDrecipient.php';\",0000);</script>";
}

?>
