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