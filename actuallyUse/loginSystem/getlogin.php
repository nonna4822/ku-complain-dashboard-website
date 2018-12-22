<?php

//session
session_start();

require '../connect.php';

// Set php variables
$username = mysqli_real_escape_string($conn,$_GET['username']);
$password =  mysqli_real_escape_string($conn,$_GET['password']);

// queryWHERE cardno = '$cardno' AND tel = '$tel'"
$sql = "SELECT * FROM student WHERE stuid = '$username'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) == 1){
  $row = mysqli_fetch_assoc($result);
  if($row["spassword"] == $password){
    //set session var
    $_SESSION['stuid'] = $row["stuid"];
    $_SESSION['name'] = $row["stuname"] . " " . $row["stuLname"];
    // $_SESSION['name'] = $row["stuLname"];

    //go to homepage. ( logged )
    header("Location: ../view_student/home_stu.php"); //go to student view
    exit;
  }else {
    echo "username or password is wrong";
  }
}else {
  echo "not found anyone ";
}

mysqli_close($conn);

?>
