<?php

require '../connect.php';


$comid = $_GET['comid'];
$comment = $_GET['comment'];
$username = $_GET['username'];
//
// $sql = "SELECT * FROM comment WHERE comid = '$comid'"; //where missing .
//
// $result = mysqli_query($conn,$sql);
//
// while($row = mysqli_fetch_array($result)) {
//   echo "<div class=\"card bg-success text-white\">";
//   echo "<div class=\"card-body\"><strong> " . $row['username'] . ":: ได้แสดงความคิดเห็น </strong></div>";
//   echo "<link href=\"//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css\" rel=\"stylesheet\">";
//   echo "<div class=\"card-body\" style=\"padding-left: 8%\">" . $row['comment'] . "</div>";
//   echo "</div>";
// }

echo "Narawit" . ":" . $comid . $comment . $username;

mysqli_close($conn);
?>
