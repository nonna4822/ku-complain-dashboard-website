<?php

require '../connect.php';


$stuid = $_GET['stuid'];

$sql = "SELECT * FROM complaint WHERE stuid = '$stuid' "; //where missing .
// $sql = "SELECT * FROM complaint"; //database testing
$result = mysqli_query($conn,$sql);

echo '<table class="table table-secondary table-hover">';
echo '<thead class="thead-dark">';
echo '<tr >';
echo  '<th width="200" height="">ความนิยม</th>';
echo  '<th >เรื่องร้องเรียน</th>';
echo  '<th width="200" >วันที่</th>';
echo  '<th width="200" >เยี่ยมชม</th>';
echo '</tr>';
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['score'] . "</td>";
    echo "<td>" . $row['comname'] . "</td>";
    echo "<td>" . $row['datetimes'] . "</td>";
    echo "<td>" . $row['stuid'] . "</td>";
    echo "</tr>";
}
echo "</thead>";
echo "</table>";


mysqli_close($conn);

?>
