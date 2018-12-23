
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
$stuid = $_SESSION['username'];

$sql = "INSERT INTO `complaint` (`comid`, `comname`, `comdetail`,
`catname`, `stuid`, `score`, `statusid`, `datetimes`,
`timetouch`, `studentsee`, `receiversee`) VALUES
(NULL, '$comname', '$comdetail', '$catname',
'$stuid', '0', '1', '2018-12-12 11:28:29', NULL, '1', '0');";

if (!mysqli_query($conn,$sql)) {
    echo('คุณพิมพ์คำร้องเรียนเกิน 300 ตัวอักษร นะค่ะ หรือไม่ก็อาจเกิดข้อผิดพลาดอื่นๆ กรุณากรอกใหม่อีกครั้งค่ะ' . mysqli_error($conn));
    echo "<script>setTimeout(\"location.href = '../complaint/add_complaint.php';\",3000);</script>";
}else {
  echo "ส่งคำร้องเรียนสำเร็จแล้วค่ะ กรุณารอสักครู่ ระบบกำลังดำเนินการพาท่านไปยังหน้าร้องเรียนของท่าน";
  echo "<script>setTimeout(\"location.href = '../view_student/checkOwnComplaint.php';\",2000);</script>";
}

?>
