<?php

/**
    The MIT License (MIT)

    Copyright (c) 2017 Stacey Demecilio, Shimbey Assie, Axumawit Gebregorgis

    Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

    The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

    THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

 */

?>
<?php
$servername="localhost";
$username= "pcrepair";
$password ="Capstone2017!";
$dbname="pcrepair_shop";


   
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    //echo 'Connected to database';
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//INSERT DATA

	if(isset($_POST['submit'])){
       
       $for_issues=""; 
        
	//Create Statement
	$student_faculty= $_POST['student_faculty'];
    $first_name =$_POST['first_name'];
    $last_name =$_POST['last_name'];
    $greenriverID =$_POST['greenriverID'];
    $email =$_POST['email'];
    $phone_number=$_POST['phone_number'];
    $computer_language=$_POST['computer_language'];
    $computer_username=$_POST['computer_username'];
    $computer_password=$_POST['computer_password'];
	$ccleaner=$_POST['ccleaner'];
    $customer_initals=$_POST['customer_initials'];
    $issues= $_POST['issues'];
   
   if(!empty($_POST['issues'])){
    foreach($_POST['issues'] as $issues){
        $for_issues .= $issues;
    }
   
   
	$stmt=$conn->prepare("INSERT into workOrder (student_faculty,first_name,last_name,greenriverID,email,phone_number,computer_language,computer_username,computer_password,ccleaner,customer_initials,issues) values(:student_faculty,:first_name,:last_name,:greenriverID,:email,:phone_number,:computer_language,:computer_username,:computer_password,:ccleaner,:customer_initials,:issues)");
	
	//Bind Values
	$stmt->bindParam(':student_faculty',$student_faculty);
	$stmt->bindParam(':first_name',$first_name);
	$stmt->bindParam(':last_name',$last_name);
	$stmt->bindParam(':greenriverID',$greenriverID);
	$stmt->bindParam(':phone_number',$phone_number);
	$stmt->bindParam(':email',$email);
	$stmt->bindParam(':computer_language',$computer_language);
	$stmt->bindParam(':computer_username',$computer_username);
	$stmt->bindParam(':computer_password',$computer_password);
    $stmt->bindParam(':ccleaner',$ccleaner);
    $stmt->bindParam(':customer_initials',$customer_initals);
    $stmt->bindParam(':issues',$issues);
	//Execute
	//foreach($_POST['issues'] as $value){
    //$issues=$value;
    
    $stmt->execute();
    //echo 'data added';
    //redirect to work order
   //header("location: success.php");
   // exit;
    }
    
    
    
    
    }	
?>
