<?php
  $sectionid = $_GET['sectionid'];
  // $subjectid = $_GET['p2'];
  // echo "test";
  include 'connect.php';
  //
  //find section ***
  $sql = "DELETE FROM `section` WHERE `section`.`sectionid` = '$sectionid'";

  if (!mysqli_query($con,$sql)) {
      echo('Error: delte section ' . mysqli_error($con));
      // echo "<script>setTimeout(\"location.href = 'staffregister.php';\",1500);</script>";
  }
  //
  //
  // if($result==NULL){
  //   echo "All of secction have its time schedule.";
  // }else{
  //   echo "<table >";
  //   while($row = mysqli_fetch_array($result)) {
  //       echo "<tr>";
  //       echo "<td>" . $row['sectionid'] . "</td>";
  //       echo "<td>" . $row['sectionname'] . "</td>";
  //       echo "<td>" . $row['subjecttitle'] . "</td>";
  //       echo "<td>" . $row['shift'] . "</td>";
  //       echo "<td>" . $row['branchname'] . "</td>";
  //       echo "<td>" . "<button type=\"button\" name=\"button\" onclick=\"delete(".$row['sectionid'].")\">"."Manage".
  //       "</button>\"". "</td>";
  //       echo "</tr>";
  //   }
  //   echo "</table>";
  // }

 ?>
