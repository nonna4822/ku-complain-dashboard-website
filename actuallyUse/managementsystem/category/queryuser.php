<?php
require '../connect.php';

$sql = "SELECT * FROM student";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result)) {
    $selectObj = $selectObj."<tr>
      <td>".$row['stuid']."</td>
      <td>".$row['stuname']."</td>
      <td>".$row['stuLname']."</td>".
      "<td><center><button class='btn btn-outline-warning' style='width:100px; height:40px;' onclick=\"window.location = '../management/updateuser.php?stuid=" . $row['stuid'] ."';\">แก้ไข</button></center></td>".
      "<td><center><button class='btn btn-outline-danger' style='width:100px; height:40px;' onclick=\"window.location = '../management/deleteuser.php?stuid=" . $row['stuid'] ."';\">ลบ</button></center></td>".
    "</tr>";
}
echo $selectObj;

mysqli_close($conn);

 ?>
