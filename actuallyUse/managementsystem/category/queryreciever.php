<?php
require '../connect.php';

$sql = "SELECT * FROM receiver";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result)) {
    $selectObj = $selectObj."<tr>
      <td>".$row['rid']."</td>
      <td>".$row['rname']."</td>
      <td>".$row['rLname']."</td>
      <td>".$row['catname']."</td>
      <form action = '../management/updaterecipient.php'>
      <td><center><button type='submit' class='btn btn-outline-warning' style='width:100px; height:40px;'>แก้ไข</button></center></td>
      </form>
      <form action = '../management/deleterecipient.php'>
      <td><center><button type='submit' class='btn btn-outline-danger' style='width:100px; height:40px;'>ลบ</button></center></td
      </form>
    </tr>";
}
echo $selectObj;

mysqli_close($conn);
 ?>
