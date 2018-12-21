<?php
  $sectionid = $_GET['sectionid']; //***
  $cardno = $_GET['cardno'];
  $paymentdate = $_GET['paymentdate'];
  $paymenttype = $_GET['paymenttype'];
  $paymenttime = $_GET['paymenttime'];

  include 'connect.php';

  //find staff id
  $sql = "SELECT studentid FROM student WHERE cardno = '$cardno'";

  if (!mysqli_query($con,$sql)) {
      echo('Error: not find studentid ' . mysqli_error($con));
  }

  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_assoc($result);

  if($row['studentid']==NULL){
    echo "not found";
  }else{
    $studentid = $row['studentid']; //***
  }

  echo "studentid : ".$studentid."sectionid : "."$sectionid";
  //
  // $paymentdate = $_GET['paymentdate'];
  // $paymenttype = $_GET['paymenttype'];
  // $paymenttime = $_GET['paymenttime'];
  $sql = "INSERT INTO `enrollment` (`enrollmentid`,
    `paystatus`, `paymenttype`, `paymentdate`, `sectionid`, `studentid`, `paymenttime`)
    VALUES (NULL, 'notconfirmed', '$paymenttype', '$paymentdate', '$sectionid', '$studentid', '$paymenttime');";

  if (!mysqli_query($con,$sql)) {
      echo('Error: not insert enroll table ' . mysqli_error($con));
  }else {
    echo "Insert teaching Complete";
  }

 ?>
