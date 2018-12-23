<?php

require '../connect.php';


$comid = intval($_GET['comid']);
$comment = $_GET['comment'];
$username = $_GET['username'];
$time = date('Y-m-d H:i:s');

// http://158.108.207.4/se18_10/complaint/ajax_add_comment.php?comid=37&username=590414&comment=55555
$sql = "INSERT INTO `comment` (`username`, `comid`, `comment` , `time`) VALUES ('$username', '$comid', '$comment' , '$time')";
//
$result = mysqli_query($conn,$sql);

if (!mysqli_query($conn,$sql)) {
    echo('Error can\'update : ' . mysqli_error($conn));
}else {
    echo "update แล้ว";
}

// echo "Narawit" . ":" . $comid . $comment . $username;

mysqli_close($conn);
?>
