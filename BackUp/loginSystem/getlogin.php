<?php

//session
session_start();

require '../connect.php';

// Set php variables
$username = mysqli_real_escape_string($conn,$_GET['username']);
$password =  mysqli_real_escape_string($conn,$_GET['password']);

if( substr( strtolower( $username ), 0, 5 ) === "staff"){

  // queryWHERE cardno = '$cardno' AND tel = '$tel'"
  $sql = "SELECT * FROM receiver WHERE rid = '$username'";

  $result = mysqli_query($conn, $sql);

  if(mysqli_num_rows($result) == 1){
    $row = mysqli_fetch_assoc($result);
    if($row["rpassword"] == $password){
      //set session var
      $_SESSION['username'] = $row["rid"];
      $_SESSION['name'] = $row["rname"] . " " . $row["rLname"];
      $_SESSION['catname'] = $row["catname"];
      //go to homepage. ( logged )


      header("Location: ../view_staff/home_stf.php"); //go to staff view
      exit;
    }else {
      echo "username or password is wrong";
    }
  }else {
    echo "not found any staff like you. ";
  }

  mysqli_close($conn);

}else {

  // queryWHERE cardno = '$cardno' AND tel = '$tel'"
  $sql = "SELECT * FROM student WHERE stuid = '$username'";

  $result = mysqli_query($conn, $sql);

  if(mysqli_num_rows($result) == 1){
    $row = mysqli_fetch_assoc($result);
    if($row["spassword"] == $password){
      //set session var
      $_SESSION['username'] = $row["stuid"];
      $_SESSION['name'] = $row["stuname"] . " " . $row["stuLname"];
      // $_SESSION['name'] = $row["stuLname"];
      // echo $_SESSION['username'];
      //go to homepage. ( logged )
      header("Location: ../view_student/home_stu.php"); //go to student view
      exit;
    }else {
      echo "username or password is wrong";
    }
  }else {
    echo "not found any student like you. ";
  }

  mysqli_close($conn);
}

?>
