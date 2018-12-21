<?php

require 'connect.php';


$categoryId = intval($_GET['q']);



$sql = "SELECT * FROM complaint WHERE categoryId = $categoryId";
$result = mysqli_query($conn,$sql);

// echo "<table>
// <tr>
// <th>Topic</th>
// <th>Detial</th>
// <th>date</th>
// </tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['comTopic'] . "</td>";
    echo "<td>" . $row['comDetail'] . "</td>";
    echo "<td>" . $row['dateTime'] . "</td>";
    echo "</tr>";
}
// echo "</table>";
mysqli_close($con);
?>
