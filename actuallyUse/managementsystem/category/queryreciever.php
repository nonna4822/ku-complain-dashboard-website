<?php
require '../connect.php';

$sql = "SELECT * FROM receiver";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result)) {
    $selectObj = $selectObj."<tr>
      <td>".$row['rid']."</td>
      <td>".$row['rname']."</td>
      <td>".$row['rLname']."</td>
      <td>".$row['catname']."</td>".
      "<td><center><button class='btn btn-outline-warning' style='width:100px; height:40px;' onclick=\"window.location = '../management/updaterecipient.php?rid=" . $row['rid'] ."';\">แก้ไข</button></center></td>".
      "<td><center><button class='btn btn-outline-danger' style='width:100px; height:40px;' onclick=\"window.location = '../management/deleterecipient.php?rid=" . $row['rid'] ."';\">ลบ</button></center></td>".
    "</tr>";
}
echo $selectObj;

mysqli_close($conn);
 ?>
