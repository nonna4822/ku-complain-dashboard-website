<?php

require '../connect.php';


$comid = $_GET['comid'];

$sql = "SELECT * FROM comment WHERE comid = '$comid'"; //where missing .

$result = mysqli_query($conn,$sql);

if( substr( strtolower( $row['username'] ), 0, 5 ) === "staff"){
  //staff
  while($row = mysqli_fetch_array($result)) {
    echo "<div class=\"card bg-light mb-3\">";
    echo "<div class=\"card-body\"><strong> " . $row['username'] . ":: ได้แสดงความคิดเห็น </strong></div>";
    echo "<link href=\"//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css\" rel=\"stylesheet\">";
    echo "<div class=\"card-body\" style=\"padding-left: 8%\">" . $row['comment'] . "</div>";
    echo "</div>";
  }
}else {
  //common

  while($row = mysqli_fetch_array($result)) {
    echo "<div class=\"card text-white bg-info mb-3\">";
    echo "<div class=\"card-body\"><strong> " . $row['username'] . ":: ได้แสดงความคิดเห็น </strong></div>";
    echo "<link href=\"//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css\" rel=\"stylesheet\">";
    echo "<div class=\"card-body\" style=\"padding-left: 8%\">" . $row['comment'] . "</div>";
    echo "</div>";
  }
}





mysqli_close($conn);
?>
