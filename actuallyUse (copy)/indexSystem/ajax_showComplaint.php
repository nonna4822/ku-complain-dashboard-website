<?php

require '../connect.php';


$categoryName = $_GET['q'];

<<<<<<< HEAD
// $sql = "SELECT * FROM complaint "; //for database testing
$sql = "SELECT * FROM complaint WHERE catname = '$categoryName'"; //where missing .
=======
$sql = "SELECT * FROM complaint"; //where missing .
>>>>>>> 897fbbd051820a0a182bdc30eedb347e7fb89557
$result = mysqli_query($conn,$sql);

echo '<table class="table table-secondary table-hover">';
echo '<thead class="thead-dark">';
echo '<tr >';
echo  '<th width="200" height="">ความนิยม</th>';
echo  '<th >รายละเอียด</th>';
echo  '<th width="200" >วันที่</th>';
echo  '<th width="200" >เยี่ยมชม</th>';
echo '</tr>';
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['score'] . "</td>";
    echo "<td>" . $row['comdetail'] . "</td>";
    echo "<td>" . $row['datetimes'] . "</td>";
    echo "<td>" . "button" . "</td>";
    echo "</tr>";
}
echo "</thead>";
echo "</table>";


mysqli_close($conn);
?>
