<?php

require '../connect.php';


$comid = intval($_GET['comid']);
$comment = $_GET['comment'];
$username = $_GET['username'];
$time = date('Y-m-d H:i:s');

//insert to comment
$sql = "INSERT INTO `comment` (`username`, `comid`, `comment` , `time`) VALUES ('$username', '$comid', '$comment' , '$time')";
$result = mysqli_query($conn,$sql);

if (!mysqli_query($conn,$sql)) {
    echo('Error can\'update : ' . mysqli_error($conn));
}else {
    echo "update แล้ว";
}

//check comment

$sql = "SELECT * FROM complaint WHERE comid = '$comid'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) == 1){
  $row = mysqli_fetch_assoc($result);
}else {
  echo "not found any complaint like you. ";
}

//by staff
if( substr( strtolower( $username ), 0, 5 ) === "staff"){
  $sql1 =  "UPDATE complaint SET statusid = 3 , studentsee = 0 WHERE comid = '$comid'";
  $result = mysqli_query($conn,$sql1);
}else if( $row['stuid'] == $username ){ //by owner
  $sql1 =  "UPDATE complaint SET receiversee = 0 WHERE comid = '$comid'";
  $result = mysqli_query($conn,$sql1);
}else { //by another
  $sql1 =  "UPDATE complaint SET receiversee = 0 , studentsee = 0 WHERE comid = '$comid'";
  $result = mysqli_query($conn,$sql1);
}

mysqli_close($conn);
?>
