
<?php

session_start();

if(session_status() == 0){
  header("location : ../loginSystem/login.php");
  exit;
}

require '../connect.php';

$catname = mysqli_real_escape_string($conn, $_POST['catname']);//
$comname = mysqli_real_escape_string($conn, $_POST['comname']);//
$comdetail = mysqli_real_escape_string($conn, $_POST['comdetail']);//
$currenttime = date('Y-m-d H:i:s');
$stuid = $_SESSION['stuid'];

echo $stuid;

$sql = "INSERT INTO `complaint` (`comid`,
   `comname`, `comdetail`, `catname`, `stuid`,
   `score`, `statusid`, `datetimes`, `timetouch`)
   VALUES (NULL, '$comname', '$comdetail', '$catname',
     '$stuid', '0', '0', '$currenttime', NULL);";

echo $sql;
// $sql = "UPDATE `staff` SET `firstname` = '$firstname',
//  `lastname` = '$lastname', `birthday` = '$birthday',
//   `tel` = '$tel', `address` = '$address',
//     `province` = '$province', `zipcode` = '$zipcode',
//       `gender` = '$gender',
//         `graduate` = '$graduate' WHERE `cardno` = '$cardno'";
//
// if (!mysqli_query($con,$sql)) {
//     echo('Error can\'update : ' . mysqli_error($con));
//     echo "<script>setTimeout(\"location.href = 'staffview.php';\",3000);</script>";
// }else {
//   echo "Update Complate !";
//   echo "<script>setTimeout(\"location.href = 'staffview.php';\",3000);</script>";
// }

echo "Narawit";

?>
