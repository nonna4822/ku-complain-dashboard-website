<?php

session_start();

if(session_status() == 0){
  header("location : ../loginSystem/login.php");
  exit;
}

require '../connect.php';
$stuid = mysqli_real_escape_string($conn, $_GET['stuid']);

$sql = "DELETE FROM `student` WHERE `student`.`stuid` = '$stuid'";

if (!mysqli_query($conn,$sql)) {
    echo('Error can\'update : ' . mysqli_error($conn));
}else {
  echo "<script>setTimeout(\"location.href = '../management/CRUDuser.php';\",0000);</script>";
}

?>
