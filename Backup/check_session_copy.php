<?php
//session
session_start();

if(session_status() == 0){
  header("location : ../loginSystem/login.php");
  exit;
}

?>
