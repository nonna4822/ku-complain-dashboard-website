<?php
  $teachingid = $_GET['teachingid']; //***

  include 'connect.php';

  //find staff id
  $sql = "UPDATE `teaching` SET `status` = 'confirmed' WHERE `teaching`.`teachingid` = $teachingid";

  if (!mysqli_query($con,$sql)) {
      echo('Error: not confirm teachingID ' . mysqli_error($con));
  }else {
    echo "Update Confirm Complete";
  }

 ?>
