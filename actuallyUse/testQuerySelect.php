<?php
require 'connect.php';

$sql = "SELECT * FROM complaint";
$result = mysqli_query($conn,$sql);

$selectObj = "<select name=\"cds\" onchange=\"showCD(this.value)\">"
.<option value="">Select a CD:</option>;

while($row = mysqli_fetch_array($result)) {
    $selectObj = ."<option value=\".$row['idcat'].\">.$row['catname'].</option>"
}

$selectObj = ."</select>";

echo $selectObj;

mysqli_close($conn);
echo "narawit";
 ?>
