<?php
  $sectionid = $_GET['sectionid']; //***
  $cardno = $_GET['cardno'];

  echo "sectionid"."cardno is ".$cardno;
  include 'connect.php';

  //find staff id
  $sql = "SELECT staffid FROM staff WHERE cardno = '$cardno'";

  if (!mysqli_query($con,$sql)) {
      echo('Error: not find staffid ' . mysqli_error($con));
  }

  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_assoc($result);

  if($row['staffid']==NULL){
    echo "not found";
  }else{
    $staffid = $row['staffid']; //***
  }

  echo "staffid : ".$staffid."sectionid : "."$sectionid";

  $sql = "INSERT INTO `teaching` (`teachingid`, `staffid`, `sectionid`) VALUES (NULL, '$staffid', '$sectionid')";

  if (!mysqli_query($con,$sql)) {
      echo('Error: not insert teaching table ' . mysqli_error($con));
  }else {
    echo "Insert teaching Complete";
  }

 ?>
