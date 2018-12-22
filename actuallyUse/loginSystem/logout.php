<?php
  session_start();
  // destroy the session
  session_destroy();

  header("Location: indexSystem/index.php"); //go to homepage
  exit;
 ?>
