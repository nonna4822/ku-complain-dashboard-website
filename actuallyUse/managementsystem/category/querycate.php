<?php
require '../connect.php';

$sql = "SELECT * FROM category";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result)) {
    $selectObj = $selectObj."<tr>
      <td>".$row['catname']."</td>
      <td><center><button type='button' class='btn btn-outline-success' style='width:100px; height:40px;'>เพิ่มหมวด</button></center></td>
      <td><center><button type='button' class='btn btn-outline-warning' style='width:100px; height:40px;'>แก้ไข</button></center></td>
      <td><center><button type='button' class='btn btn-outline-danger' style='width:100px; height:40px;'>ลบ</button></center></td>
    </tr>";
}
echo $selectObj;

mysqli_close($conn);
 ?>
