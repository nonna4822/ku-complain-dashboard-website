<?php
//session
session_start();

//plus 3 , 34

$hostname = "localhost";
$username= "root";
$password = "";
$dbname="complaint";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Set php variables
$username = mysqli_real_escape_string($conn,$_GET['username']);
$password =  mysqli_real_escape_string($conn,$_GET['password']);

// queryWHERE cardno = '$cardno' AND tel = '$tel'"
$sql = "SELECT username, name , password FROM student WHERE username = '$username' AND password = '$password'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) == 1){
  $row = mysqli_fetch_assoc($result);

  if($row["password"] == $password){
    //add session var
    $_SESSION['name'] = $row['name'];
    $_SESSION['username'] = $row['username'];

    echo $row['username'] . " --> " . $row['name'];
  }else {
    echo "password is wrong";
  }
}else {
  echo "num_row != 1 ";
}

mysqli_close($conn);

 ?>
