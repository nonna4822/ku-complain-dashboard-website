<?php
  $branchid = $_GET['p1'];
  $subjectid = $_GET['p2'];
  echo "<table style=\"width:100%\"><tr>
    <th>Teaching id</th>
    <th>Section Name</th>
    <th>Subject</th>
    <th>Shift</th>
    <th>branchid</th>
    <th>FirstName</th>
    <th>Lastname</th>
    </th>
  </tr>";

  include 'connect.php';

  //find section ***
  // $sql = "SELECT se.sectionid,se.sectionname,s.subjecttitle ,se.shift,b.branchname,t.teachingid
  // FROM section se LEFT join subject s on se.subjectid = s.subjectid
  // LEFT join branch b on b.branchid = se.branchid ";
  $sql = "SELECT t.teachingid,se.sectionname,s.subjecttitle ,se.shift,b.branchname,st.firstname,st.lastname
  FROM section se LEFT join subject s on se.subjectid = s.subjectid
  LEFT join branch b on b.branchid = se.branchid
  LEFT join teaching t on t.sectionid = se.sectionid
  LEFT join staff st on st.staffid = t.staffid
  WHERE b.branchid = '$branchid' AND s.subjectid = '$subjectid' AND t.status = 'notconfirmed'";

  if (!mysqli_query($con,$sql)) {
      echo('Error: search teacing id ' . mysqli_error($con));
  }

  $result = mysqli_query($con, $sql);

  if($result==NULL){
    echo "not found";
  }else{
    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['teachingid'] . "</td>";
        echo "<td>" . $row['sectionname'] . "</td>";
        echo "<td>" . $row['subjecttitle'] . "</td>";
        echo "<td>" . $row['shift'] . "</td>";
        echo "<td>" . $row['branchname'] . "</td>";
        echo "<td>" . $row['firstname'] . "</td>";
        echo "<td>" . $row['lastname'] . "</td>";
        echo "<td>" . "<button type=\"button\" name=\"button\" onclick=\"confirm(".$row['teachingid'].")\">"."Confirm".
        "</button>\" ". "</td>";
        echo "</tr>";
    }
    echo "</table>";
  }

 ?>
