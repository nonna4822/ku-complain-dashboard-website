<?php
require '../connect.php';

$sql = "SELECT * FROM complaint";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result)) {
    $selectObj = $selectObj."<tr>
      <td>".$row['comname']."</td>
      <td>".$row['catname']."</td>
      <td>".$row['datetimes']."</td>
      <form action = '../management/deletecomplaint.php'>
      <td><center><button type='submit' class='btn btn-outline-danger' style='width:100px; height:40px;'>ลบ</button></center></td>
      </form>
    </tr>";
}
echo $selectObj;

mysqli_close($conn);
 ?>
