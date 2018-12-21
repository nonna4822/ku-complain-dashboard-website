<?php

session_start();
//connect
include 'connect.php';

//query sql to find
$cardno = $_POST['cardno'];
$sql= "SELECT cardno FROM staff WHERE cardno='$cardno'";

if (!mysqli_query($con,$sql)) {
    echo('Error: ' . mysqli_error($con));
    echo "<script>setTimeout(\"location.href = 'staffregister.php';\",1500);</script>";
}

$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);



if($row['cardno'] != NULL){
  mysqli_close($con);
  echo "เลชบัตรประชาชนนี้เคยใช้ในการสมัครแล้ว กรุณาติดต่อผู้ดูแลระบบ";
  echo "<script>setTimeout(\"location.href = 'studentsignup.php';\",1500);</script>";
}else {
  $firstname = mysqli_real_escape_string($con, $_POST['firstname']);//
  $lastname = mysqli_real_escape_string($con, $_POST['lastname']);//
  $cardno = mysqli_real_escape_string($con, $_POST['cardno']);//
  $birthday=mysqli_real_escape_string($con,$_POST['birthday']);//
  $gender=mysqli_real_escape_string($con,$_POST['gender']);//
  $tel = mysqli_real_escape_string($con,$_POST['tel']);//
  $address=mysqli_real_escape_string($con,$_POST['address']);//
  $province=mysqli_real_escape_string($con,$_POST['province']);//
  $zipcode=mysqli_real_escape_string($con,$_POST['zipcode']);//
  $graduate=mysqli_real_escape_string($con,$_POST['graduate']);//
  $position=mysqli_real_escape_string($con,$_POST['position']);//
  $branchid=mysqli_real_escape_string($con,$_POST['branchid']);// 12

  $sql="INSERT INTO staff(firstname, lastname,cardno,birthday,gender,tel,address,province,zipcode,graduate,position,branchid,status) VALUES
  ('$firstname', '$lastname','$cardno','$birthday','$gender','$tel','$address','$province','$zipcode','$graduate','$position','$branchid','notconfirm')";

  if (!mysqli_query($con,$sql)) {
      echo('Error na: ' . mysqli_error($con));
      echo "<script>setTimeout(\"location.href = 'staffregister.php';\",1500);</script>";
  }

  if (mysqli_query($con,$sql)){
    $_SESSION['firstname'] = $firstname;
    $_SESSION['lastname'] = $lastname;
    mysqli_close($con);
    header("Location: staffrecive.php");
    exit;
  }
  mysqli_close($con);
}


?>
