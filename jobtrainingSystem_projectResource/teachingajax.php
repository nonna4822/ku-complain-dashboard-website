<?php
  $branchid = $_GET['p1'];
  $subjectid = $_GET['p2'];
  echo "<table style=\"width:100%\"><tr>
    <th>Section Id.</th>
    <th>Section Name</th>
    <th>Subject</th>
    <th>Shift</th>
    <th>branchname</th>
    <th>Select Button</th>
    </th>
  </tr>";

  include 'connect.php';

  //find section ***
  $sql = "SELECT se.sectionid,se.sectionname,s.subjecttitle ,se.shift,b.branchname
  FROM section se LEFT join subject s on se.subjectid = s.subjectid
  LEFT join branch b on b.branchid = se.branchid
  WHERE b.branchid = '$branchid' AND s.subjectid = '$subjectid'";

  if (!mysqli_query($con,$sql)) {
      echo('Error: select section ' . mysqli_error($con));
      // echo "<script>setTimeout(\"location.href = 'staffregister.php';\",1500);</script>";
  }

  $result = mysqli_query($con, $sql);

  if($result==NULL){
    echo "not found";
  }else{
    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['sectionid'] . "</td>";
        echo "<td>" . $row['sectionname'] . "</td>";
        echo "<td>" . $row['subjecttitle'] . "</td>";
        echo "<td>" . $row['shift'] . "</td>";
        echo "<td>" . $row['branchname'] . "</td>";
        echo "<td>" . "<button type=\"button\" name=\"button\" onclick=\"regissection(".$row['sectionid'].")\">"."Register".
        "</button>\" ". "</td>";
        echo "</tr>";
    }
    echo "</table>";
  }

 ?>
