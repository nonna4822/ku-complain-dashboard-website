<!DOCTYPE html>
<html>
<body>

<?php

require('connect.php');
    
if (!$conn) {
    die('Could not connect: ' . mysqli_error($conn));
}
echo "<table>";
$sql="SELECT * FROM category";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['idcat'] . "</td>";
    echo "<td>" . $row['catname'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($conn);
?>
</body>
</html>