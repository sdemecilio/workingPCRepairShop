<?php

session_start();
if(isset($_SESSION['username'])){
    echo '<h3>success</h3>';
    echo '<h3> Logout</h3>';

}else{
    header("Location:login.php");
}
?>

