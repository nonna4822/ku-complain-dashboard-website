<?php
require '../connect.php';

$sql = "SELECT * FROM category";
$result = mysqli_query($conn,$sql);

$selectObj = '<select onload="showComplaint(this.value)" onchange="showComplaint(this.value)" class="selectpicker">';

while($row = mysqli_fetch_array($result)) {
    $selectObj = $selectObj.'<option value="'.$row['catname'].'">'.$row['catname'].'</option>';
}

$selectObj = $selectObj . '</select>';

mysqli_close($conn);

// echo $selectObj;
 ?>
