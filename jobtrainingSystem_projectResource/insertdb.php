<?php
$firstname = mysqli_real_escape_string($con, $_POST['firstname']);
$lastname = mysqli_real_escape_string($con, $_POST['lastname']);
$cardno = mysqli_real_escape_string($con, $_POST['cardno']);
$birthday=mysqli_real_escape_string($con,$_POST['birthday']);
$tel=mysqli_real_escape_string($con,$_POST['tel']);
$address=mysqli_real_escape_string($con,$_POST['address']);
$province=mysqli_real_escape_string($con,$_POST['province']);
$zipcode=mysqli_real_escape_string($con,$_POST['zipcode']);
$occupation=mysqli_real_escape_string($con,$_POST['occupation']);
// $StudentPic=mysqli_real_escape_string($con,$_POST['StudentPic']);
$sql="INSERT INTO student(firstname, lastname,cardno,birthday,tel,address,province,zipcode,occupation) VALUES
('$firstname', '$lastname','$cardno','$birthday','$tel','$address','$province','$zipcode','$occupation')";
// $sql="INSERT INTO student(firstname, lastname) VALUES
// ('$FirstName', '$LastName')";

if (!mysqli_query($con,$sql)) {
    die('Error: ' . mysqli_error($con));
    // mysqli_close($con);
    // include 'signupsuccess.php';
}
mysqli_close($con);

?>
