<?php
//log out
session_start();

header("Location:login.php");
unset($_SESSION['accessType']);

session_destroy();
?>