
<?php
include 'connect.php';
$FirstName = mysqli_real_escape_string($con, $_POST['FirstName']);
$LastName = mysqli_real_escape_string($con, $_POST['LastName']);
$CardNo = mysqli_real_escape_string($con, $_POST['CardNo']);
$DateofBirth=mysqli_real_escape_string($con,$_POST['DateofBirth']);
$Gender=mysqli_real_escape_string($con,$_POST['Gender']);
// $Tel=mysqli_real_escape_string($con,$_POST['Tel']);
// $Email=mysqli_real_escape_string($con,$_POST['Email']);
 $Address=mysqli_real_escape_string($con,$_POST['Address']);
// $Province=mysqli_real_escape_string($con,$_POST['Province']);
// $ZIPcode=mysqli_real_escape_string($con,$_POST['ZipCode']);
// $StudentPic=mysqli_real_escape_string($con,$_POST['StudentPic']);
$sql="INSERT INTO student(FirstName, LastName,CardNo,Address) VALUES ('$FirstName', '$LastName','$CardNo','$Address')";
if (!mysqli_query($con,$sql)) {
    die('Error: ' . mysqli_error($con));
}
mysqli_close($con);
?> 
