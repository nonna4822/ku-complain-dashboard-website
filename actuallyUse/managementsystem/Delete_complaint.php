<?php

session_start();

if(session_status() == 0){
  header("location : ../loginSystem/login.php");
  exit;
}

require '../connect.php';
$comid = mysqli_real_escape_string($conn, $_GET['comid']);

$sql = "DELETE FROM `complaint` WHERE `complaint`.`comid` = '$comid'";

if (!mysqli_query($conn,$sql)) {
    echo('Error can\'update : ' . mysqli_error($conn));
}else {
  echo "<script>setTimeout(\"location.href = '../management/CRUDcomplaint.php';\",0000);</script>";
}

?>
