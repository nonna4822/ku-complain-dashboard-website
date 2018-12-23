<?php

session_start();

if(session_status() == 0){
  header("location : ../loginSystem/login.php");
  exit;
}

require '../connect.php';
$catname = mysqli_real_escape_string($conn, $_GET['catname']);
$id = $_GET['id'];

$sql = "UPDATE `category` SET `catname`='$catname' WHERE catname = '$id'";

if (!mysqli_query($conn,$sql)) {
    echo('Error can\'update : ' . mysqli_error($conn));
}else {
  echo "<script>setTimeout(\"location.href = '../management/CRUDcategory.php';\",0000);</script>";
}

?>
