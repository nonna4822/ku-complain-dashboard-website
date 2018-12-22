<?php

require '../connect.php';


$stuid = $_GET['stuid'];

$sql = "SELECT * FROM complaint WHERE stuid = '$stuid' "; //where missing .
// $sql = "SELECT * FROM complaint"; //database testing
$result = mysqli_query($conn,$sql);

echo '<table class="table table-secondary table-hover">';
echo '<thead class="thead-dark">';
echo '<tr >';
echo  '<th width="200" height="">จำนวนการเข้าชม</th>';
echo  '<th width="200" >เรื่องร้องเรียน</th>';
echo  '<th width="200" >วันที่</th>';
echo  '<th width="200" >สถานการดำเนินการ</th>';
echo  '<th width="200" >ดูรายละเอียด</th>';
echo '</tr>';
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['score'] . "</td>";
    echo "<td>" . $row['comname'] . "</td>";
    echo "<td>" . $row['datetimes'] . "</td>";
    // echo "<td>" . $row['statusid'] . "</td>";
    if($row['statusid'] == 0){
      echo "<td>" . ยังไม่ได้รับการพิจารณา . "</td>";
    }else {
      echo "<td>" . กำลังพิจารณา . "</td>";
    }
    echo "<td>" . "<a href = '../complaint/detail_a_complaint.php?comid=".$row['comid']."'> Click </a>" . "</td>";
    echo "</tr>";
}
echo "</thead>";
echo "</table>";


mysqli_close($conn);

?>
