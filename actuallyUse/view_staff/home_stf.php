<?php

session_start();

if(session_status() == 0){
  header("location : ../loginSystem/login.php");
  exit;
}

echo $_SESSION['name'] . "รับผิดชอบเรื่อง" .$_SESSION['catname'];


?>
