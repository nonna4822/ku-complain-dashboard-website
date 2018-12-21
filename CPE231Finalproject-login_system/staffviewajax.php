<?php
  $cardno = $_GET['cardno'];

  include 'connect.php';

  //find teaching ***
  $sql = "SELECT t.teachingid,se.sectionname,s.subjecttitle ,se.shift,b.branchname,c.classno
  FROM section se LEFT join subject s on se.subjectid = s.subjectid
  LEFT join branch b on b.branchid = se.branchid
  LEFT join teaching t on t.sectionid = se.sectionid
  LEFT join schedule sch on sch.sectionid = se.sectionid
  LEFT join staff st on st.staffid = t.staffid
  LEFT join class c on sch.classid = c.classid
  WHERE t.status = 'confirmed' AND st.cardno = '$cardno'";

  if (!mysqli_query($con,$sql)) {
      echo('Error: search teacing id in staffviewajax ' . mysqli_error($con));
  }

  $result = mysqli_query($con, $sql);

  if($result==NULL){
    echo "not found";
  }else{
    echo "<tbody style=\"color:#4B4D4A;\" >";
    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['teachingid'] . "</td>";
        echo "<td>" . $row['sectionname'] . "</td>";
        echo "<td>" . $row['subjecttitle'] . "</td>";
        echo "<td>" . $row['shift'] . "</td>";
        echo "<td>" . $row['branchname'] . "</td>";
        echo "<td>" . $row['classno'] . "</td>";
        echo "</tr>";
    }
    echo "</tbody>";
  }

 ?>
