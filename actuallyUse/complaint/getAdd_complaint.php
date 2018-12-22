
<?php

//session
session_start();

$name = $_SESSION['name'];

if(empty($name)){
  echo "<script>window.location.href = \"../loginSystem/login.php\";</script>";
}

require '../connect.php';

$catname = mysqli_real_escape_string($conn, $_POST['catname']);//
$comname = mysqli_real_escape_string($conn, $_POST['comname']);//
$comdetail = mysqli_real_escape_string($conn, $_POST['comdetail']);//
$currenttime = date('Y-m-d H:i:s');
$stuid = $_SESSION['stuid'];

$sql = "INSERT INTO `complaint` (`comid`,
   `comname`, `comdetail`, `catname`, `stuid`,
   `score`, `statusid`, `datetimes`, `timetouch`)
   VALUES (NULL, '$comname', '$comdetail', '$catname',
     '$stuid', '0', '0', '$currenttime', NULL);";

if (!mysqli_query($conn,$sql)) {
    echo('Error can\'update : ' . mysqli_error($conn));
}else {
  echo "ส่งคำร้องเรียนสำเร็จแล้วค่ะ กรุณารอสักครู่ ระบบกำลังดำเนินการพาท่านไปยังหน้าร้อนเรียน";
  echo "<script>setTimeout(\"location.href = '../view_student/checkOwnComplaint.php';\",2000);</script>";
}

?>
