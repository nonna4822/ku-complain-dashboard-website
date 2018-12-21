<?php
// *********** check class exist ? in class table ***************
$sql= "SELECT classid FROM class WHERE branchid='$branchid' AND classno = '$classno'";

if (!mysqli_query($con,$sql)) {
    echo('Error: check class table' . mysqli_error($con));
    // echo "<script>setTimeout(\"location.href = 'addsection.html';\",3000);</script>";
}

$result = mysqli_query($con, $sql);
$row_2 = mysqli_fetch_assoc($result);

if($row_2['classid'] != NULL){ //มีห้องนี้อยู่จริง
  echo "พบห้องเรียน จะตรวจสอบว่าว่างหรือไม่ในขั้นตอนต่อไป";
  // echo "<script>setTimeout(\"location.href = 'addsection.html';\",1500);</script>";
}else {

  $sql="INSERT INTO class(classno, branchid) VALUES ('$classno', '$branchid')";

  if (!mysqli_query($con,$sql)) {
      echo('error : insert class ' . mysqli_error($con));
      // echo "<script>setTimeout(\"location.href = 'addsection.html';\",3000);</script>";
  }

  $sql= "SELECT classid FROM class WHERE branchid='$branchid' AND classno = '$classno'";

  if (!mysqli_query($con,$sql)) {
      echo('Error: check class table' . mysqli_error($con));
      // echo "<script>setTimeout(\"location.href = 'addsection.html';\",3000);</script>";
  }

  $result = mysqli_query($con, $sql);
  $row_2 = mysqli_fetch_assoc($result);
  $q_classid = $row_2['classid'];

}
 ?>
