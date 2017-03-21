<?php
//if login successful display message
session_start();
if(isset($_SESSION['username'])){
    
    echo '<a href="logout.php">Logout</a>';

}else{
    header("Location:login.php");
}
?>

