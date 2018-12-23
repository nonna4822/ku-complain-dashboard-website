<?php

session_start();

if(session_status() == 0){
  header("location : ../loginSystem/login.php");
  exit;
}

require '../connect.php';
$stuid = mysqli_real_escape_string($conn, $_GET['stuid']);
$stuname = mysqli_real_escape_string($conn, $_GET['stuname']);//
$stuLname = mysqli_real_escape_string($conn, $_GET['stuLname']);//
$spassword = mysqli_real_escape_string($conn, $_GET['spassword']);//

$sql = "INSERT INTO `student` (`stuid`, `spassword`, `stuname`, `stuLname`)
VALUES ('$stuid', '$spassword', '$stuname', '$stuLname')";

if (!mysqli_query($conn,$sql)) {
    echo('Error can\'update : ' . mysqli_error($conn));
}else {
  echo "<script>setTimeout(\"location.href = '../management/CRUDuser.php';\",0000);</script>";
}

?>
