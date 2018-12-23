<?php
  session_start();
  if(isset($_SESSION['firstname'])){
    $firstname = $_SESSION['firstname'];
    $lastname = $_SESSION['lastname'];
  } else {
    echo "ไม่ได้อยู่ในระบบ";
    echo "<script>setTimeout(\"location.href = 'login.html';\",3000);</script>";
  }
//connect
include 'connect.php';

// recive from form

$sectionname = mysqli_real_escape_string($con,$_POST['sectionname']);
$subjectid = mysqli_real_escape_string($con,$_POST['subjectid']);
$branchid = mysqli_real_escape_string($con,$_POST['branchid']);
$classno = mysqli_real_escape_string($con,$_POST['classno']);
$shift = mysqli_real_escape_string($con,$_POST['shift']);
$openday = mysqli_real_escape_string($con,$_POST['openday']);
$closeday = mysqli_real_escape_string($con,$_POST['closeday']);
$day = mysqli_real_escape_string($con,$_POST['day']);

// *********** check wether section exist ?
$sql= "SELECT sectionid FROM section WHERE sectionname='$sectionname' AND subjectid = '$subjectid' AND branchid = '$branchid'";

if (!mysqli_query($con,$sql)) {
    echo('error : sql section table ' . mysqli_error($con));
    // echo "<script>setTimeout(\"location.href = 'addsection.html';\",3000);</script>";
}

$result = mysqli_query($con, $sql);
$row_1 = mysqli_fetch_assoc($result);

if($row_1['sectionid'] != NULL){ //แสดงว่าลงซ้ำเซคชั่น
  mysqli_close($con);
  echo "มี Section นี้ในระบบแล้ว กรุณาอย่ากรอกซ้ำ" . "<br/>";
  echo "<script>setTimeout(\"location.href = 'addsection.html';\",3000);</script>";
}else {

  // ถ้าไม่มีก็เพิ่ม section //
  $sectionname = mysqli_real_escape_string($con,$_POST['sectionname']);
  $maxstudent = mysqli_real_escape_string($con,$_POST['maxstudent']);
  $cost = mysqli_real_escape_string($con,$_POST['cost']);
  $semester = mysqli_real_escape_string($con,$_POST['semester']);
  $subjectid = mysqli_real_escape_string($con,$_POST['subjectid']);
  $branchid = mysqli_real_escape_string($con,$_POST['branchid']);
  $shift = mysqli_real_escape_string($con,$_POST['shift']);

  $sql="INSERT INTO section(sectionname, maxstudent,cost,semester,subjectid,branchid,shift) VALUES
  ('$sectionname', '$maxstudent','$cost','$semester','$subjectid','$branchid','$shift')";

  if (!mysqli_query($con,$sql)) {
      echo('error : insert section ' . mysqli_error($con));
      echo "<script>setTimeout(\"location.href = 'addsection.html';\",3000);</script>";
  }else echo "เพิ่ม Section สำเร็จ"."<br/>";
}


// หยิบ sectionid ออกมา เตรียมนำไปใช้ต่อ
$sql= "SELECT sectionid FROM section WHERE sectionname='$sectionname' AND subjectid = '$subjectid' AND branchid = '$branchid'";

if (!mysqli_query($con,$sql)) {
    echo('error : inside#01 ' . mysqli_error($con));
    // echo "<script>setTimeout(\"location.href = 'addsection.html';\",3000);</script>";
}

$result = mysqli_query($con, $sql);
$row_1 = mysqli_fetch_assoc($result);
$q_sectionid = $row_1['sectionid'];

// *********** check class exist ? in class table ***************
$sql= "SELECT classid FROM class WHERE branchid='$branchid' AND classno = '$classno'";

if (!mysqli_query($con,$sql)) {
    echo('Error: check class table' . mysqli_error($con));
    // echo "<script>setTimeout(\"location.href = 'addsection.html';\",3000);</script>";
}

$result = mysqli_query($con, $sql);
$row_2 = mysqli_fetch_assoc($result);

if($row_2['classid'] != NULL){ //มีห้องนี้อยู่จริง
  echo "พบห้องเรียน จะตรวจสอบว่าว่างหรือไม่ในขั้นตอนต่อไป"."<br/>";
  // echo "<script>setTimeout(\"location.href = 'addsection.html';\",1500);</script>";
}else {
  // ไม่มีก็เพิ่มห้องเข้าไป
  $sql="INSERT INTO class(classno, branchid) VALUES ('$classno', '$branchid')";

  if (!mysqli_query($con,$sql)) {
      echo('error : insert class ' . mysqli_error($con));
      // echo "<script>setTimeout(\"location.href = 'addsection.html';\",3000);</script>";
  }else echo "เพิ่มห้องเข้าไปเรียบร้อย"."<br/>";
}

//หยิบ classid ออกมาเตรียมไปใช้
$sql= "SELECT classid FROM class WHERE branchid='$branchid' AND classno = '$classno'";

if (!mysqli_query($con,$sql)) {
    echo('Error: check class table' . mysqli_error($con));
    // echo "<script>setTimeout(\"location.href = 'addsection.html';\",3000);</script>";
}

$result = mysqli_query($con, $sql);
$row_2 = mysqli_fetch_assoc($result);
$q_classid = $row_2['classid'];


// ********** check same schedule ? ****************
$sql = "SELECT s.sectionid FROM section s LEFT join schedule sc on sc.sectionid = s.sectionid
WHERE s.shift = '$shift' AND sc.classid = '$q_classid' ";

if (!mysqli_query($con,$sql)) {
    echo('Error: section table' . mysqli_error($con));
    // echo "<script>setTimeout(\"location.href = 'addsection.html';\",3000);</script>";
}

$result = mysqli_query($con, $sql);
$row_3 = mysqli_fetch_assoc($result);

if($row_3['sectionid'] != NULL){ //แสดงว่ามีอยู่แล้ว
  echo "ห้องที่จะใช้นี้ ถูกเลือกไว้ใน Schedule อื่นแล้ว ( เต็มนั่นเอง ) กรุณาเลือกห้องใหม่ "."<br/>";
  echo "<script>setTimeout(\"location.href = 'addsection.html';\",3000);</script>";
}else {

  // เพิ่ม schedule
  $sql="INSERT INTO `schedule` (`scheduleid`, `sectionid`, `classid`, `openday`, `closeday`, `day`) VALUES
  (NULL, '$q_sectionid', '$q_classid', '$openday', '$closeday', '$day')";

  if (!mysqli_query($con,$sql)) {
      echo('error : insert schedule ' . mysqli_error($con));
      echo "<script>setTimeout(\"location.href = 'addsection.html';\",3000);</script>";
  }else {
    echo "เพิ่มลงไปใน schedule เรียบร้อยแล้ว "."<br/>";
    echo "<script>setTimeout(\"location.href = 'adminview.php';\",3000);</script>";
  }
}

?>
