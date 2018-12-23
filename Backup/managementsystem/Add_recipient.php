<?php

session_start();

if(session_status() == 0){
  header("location : ../loginSystem/login.php");
  exit;
}

require '../connect.php';
$catname = mysqli_real_escape_string($conn, $_GET['catname']);
$rid = mysqli_real_escape_string($conn, $_GET['rid']);
$rname = mysqli_real_escape_string($conn, $_GET['rname']);
$rLname = mysqli_real_escape_string($conn, $_GET['rLname']);
$rpassword = mysqli_real_escape_string($conn, $_GET['rpassword']);

$sql = "INSERT INTO `receiver` (`rid`, `rpassword`, `rname`, `rLname`, `catname`) VALUES ('$rid', '$rpassword', '$rname', '$rLname', '$catname')";

if (!mysqli_query($conn,$sql)) {
    echo('Error can\'update : ' . mysqli_error($conn));
}else {
  echo "<script>setTimeout(\"location.href = '../management/CRUDrecipient.php';\",0000);</script>";
}
?>
