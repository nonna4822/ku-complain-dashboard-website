<?php
session_start();

echo $_SESSION['name'] . " by using username : ". $_SESSION['username'];
?>
