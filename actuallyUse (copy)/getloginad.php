<?php

//session
session_start();

require 'connect.php';

// Set php variables
$username = mysqli_real_escape_string($conn,$_GET['username']);
$password =  mysqli_real_escape_string($conn,$_GET['password']);

// queryWHERE cardno = '$cardno' AND tel = '$tel'"
$sql = "SELECT * FROM admin WHERE adminid = '$username'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) == 1){
  $row = mysqli_fetch_assoc($result);
  if($row["adminpassword"] == $password){
    //set session var
    $_SESSION['username'] = $row["adminid"];
    $_SESSION['name'] = $row["adminname"];

    //go to homepage. ( logged )
    header("Location: management.php"); //go to student view
    exit;
  }else {
    echo "username or password is wrong";
  }
}else {
  echo "not found anyone ";
}

mysqli_close($conn);

?>
