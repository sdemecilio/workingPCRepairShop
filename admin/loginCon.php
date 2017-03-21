<?php
//connecting to database
$servername="localhost";
$username= "pcrepair";
$password ="Capstone2017!";
$dbname="pcrepair_shop";

try {

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch (PDOException $e){

    //echo "connection failed";
}



?>