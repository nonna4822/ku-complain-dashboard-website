<?php
  
  include 'connect.php';
  //find class availble


  //find section ***
    $sql = "SELECT se.sectionid,se.sectionname,s.subjecttitle ,se.shift,b.branchname
    FROM section se LEFT join schedule sc on se.sectionid = sc.sectionid
    left join subject s on s.subjectid = se.subjectid
    LEFT join branch b on b.branchid = se.branchid
    WHERE sc.scheduleid IS NULL";

  if (!mysqli_query($con,$sql)) {
      echo('Error: select section ' . mysqli_error($con));
      // echo "<script>setTimeout(\"location.href = 'staffregister.php';\",1500);</script>";
  }
  //
  $result = mysqli_query($con, $sql);

  if($result==NULL){
    echo "All of secction have its time schedule.";
  }else{
    echo " <center><h1>Section ที่ยังไม่มีตาราง Schedule เป็นของตัวเอง</h1> ";
    echo "<table >"."<th>Section Id.</th>
    <th>Section Name</th>
    <th>Subject</th>
    <th>Shift</th>
    <th>branchid</th>
    <th>Select Button</th>";
    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['sectionid'] . "</td>";
        echo "<td>" . $row['sectionname'] . "</td>";
        echo "<td>" . $row['subjecttitle'] . "</td>";
        echo "<td>" . $row['shift'] . "</td>";
        echo "<td>" . $row['branchname'] . "</td>";
        echo "<td>" . "<button type=\"button\" name=\"button\" onclick=\"delete(".$row['sectionid'].")\">"."Select ห้องว่าง".
        "</button>". "</td>";
        echo "</tr>";
    }
    echo "</table></center>";
  }



 ?>
