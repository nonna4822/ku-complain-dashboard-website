<?php
require '../connect.php';

$sql = "SELECT * FROM category";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result)) {
    $selectObj = $selectObj."<tr>
      <td>".$row['catname']."</td>".
      "<td><center><button class='btn btn-outline-warning' style='width:100px; height:40px;' onclick=\"window.location = '../management/updatecategory.php?catname=" . $row['catname'] ."';\">แก้ไข</button></center></td>".
      "<td><center><button class='btn btn-outline-danger' style='width:100px; height:40px;' onclick=\"window.location = '../management/deletecategory.php?catname=" . $row['catname'] ."';\">ลบ</button></center></td>".
    "</tr>";
}
echo $selectObj;

mysqli_close($conn);
 ?>
