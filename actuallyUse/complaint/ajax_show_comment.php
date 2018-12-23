<?php

require '../connect.php';


$comid = $_GET['comid'];

$sql = "SELECT * FROM comment WHERE comid = '$comid'"; //where missing .

$result = mysqli_query($conn,$sql);

  while($row = mysqli_fetch_array($result)) {
    if( substr( strtolower( $row['username'] ), 0, 5 ) === "staff"){
      echo "<div class=\"card text-white bg-info mb-3\">";
      echo "<div class=\"card-body\"><strong> " . "ตอบโดยผู้ดูแล : เวลา ". $row['time'] ." </strong></div>";
      echo "<link href=\"//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css\" rel=\"stylesheet\">";
      echo "<div class=\"card-body\" style=\"padding-left: 8%\">" . $row['comment'] . "</div>";
      echo "</div>";
    }else {
      echo "<div class=\"card bg-light mb-3\">";
      echo "<div class=\"card-body\"><strong> " . "นักศึกษารหัส : " . $row['username'] . ": ได้แสดงความคิดเห็นเวลา ".$row['time']." </strong></div>";
      echo "<link href=\"//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css\" rel=\"stylesheet\">";
      echo "<div class=\"card-body\" style=\"padding-left: 8%\">" . $row['comment'] . "</div>";
      echo "</div>";
    }

  }

mysqli_close($conn);
?>
