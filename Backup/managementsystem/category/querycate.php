<?php
require '../connect.php';

$sql = "SELECT * FROM category";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result)) {
    $selectObj = $selectObj."<tr>
      <td>".$row['catname']."</td>
      <form action = '../management/updatecategory.php'>
      <td><center><button type='submit' class='btn btn-outline-warning' style='width:100px; height:40px;'>แก้ไข</button></center></td>
      </form>
      <form action = '../management/deletecategory.php'>
      <td><center><button type='submit' class='btn btn-outline-danger' style='width:100px; height:40px;'>ลบ</button></center></td>
      </form>
    </tr>";
}
echo $selectObj;

mysqli_close($conn);
 ?>
