<?php
require '../connect.php';

$sql = "SELECT * FROM complaint";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result)) {
    $selectObj = $selectObj."<tr>
      <td>".$row['comname']."</td>
      <td>".$row['catname']."</td>
      <td>".$row['datetimes']."</td>
      ".
      "<td><center><button class='btn btn-outline-danger' style='width:100px; height:40px;' onclick=\"window.location = '../management/deletecomplaint.php?comid=" . $row['comid'] ."';\">ลบ</button></center></td>".
    "</tr>";
}
echo $selectObj;

mysqli_close($conn);
 ?>
