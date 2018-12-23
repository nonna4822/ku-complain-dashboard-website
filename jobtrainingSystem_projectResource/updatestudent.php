<?php
session_start();
if(isset($_SESSION['firstname'])){
  $firstname = $_SESSION['firstname'];
  $lastname = $_SESSION['lastname'];
  $cardno = $_SESSION['cardno'];
} else {
  header("location : login.html");
  exit;
}

//connect
include 'connect.php';

  $firstname = mysqli_real_escape_string($con, $_POST['firstname']);//
  $lastname = mysqli_real_escape_string($con, $_POST['lastname']);//
  $birthday=mysqli_real_escape_string($con,$_POST['birthday']);//
  $gender=mysqli_real_escape_string($con,$_POST['gender']);//
  $tel = mysqli_real_escape_string($con,$_POST['tel']);//
  $address=mysqli_real_escape_string($con,$_POST['address']);//
  $province=mysqli_real_escape_string($con,$_POST['province']);//
  $zipcode=mysqli_real_escape_string($con,$_POST['zipcode']);//

  $sql = "UPDATE `student` SET `firstname` = '$firstname',
   `lastname` = '$lastname', `birthday` = '$birthday',
    `tel` = '$tel', `address` = '$address',
     `province` = '$province', `zipcode` = '$zipcode',
      `gender` = '$gender' WHERE `cardno` = '$cardno'";

  if (!mysqli_query($con,$sql)) {
      echo('Error can\'update : ' . mysqli_error($con));
      echo "<script>setTimeout(\"location.href = 'studentview.php';\",3000);</script>";
  }else {
    echo "Update Complate !";
    echo "<script>setTimeout(\"location.href = 'studentview.php';\",3000);</script>";
  }

 ?>
