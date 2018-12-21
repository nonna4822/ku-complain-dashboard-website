<?php

require 'connect.php';


$categoryId = intval($_GET['q']);



$sql = "SELECT * FROM complaint WHERE categoryId = $categoryId";
$result = mysqli_query($conn,$sql);

echo '<table class="table table-secondary table-hover">' .
'<thead class="thead-dark">' .
'<tr >
  <th width="200" height="">ความนิยม</th>
  <th >รายละเอียด</th>
  <th width="200" >วันที่</th>
  <th width="200" >เยี่ยมชม</th>
</tr>'
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['score'] . "</td>";
    echo "<td>" . $row['comdetail'] . "</td>";
    echo "<td>" . $row['datetimes'] . "</td>";
    echo "<td>" . "button" . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($conn);
?>
