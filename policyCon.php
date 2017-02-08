<?php
$servername="localhost";
$username= "pcrepair";
$password ="Capstone2017!";
$dbname="pcrepair_shop";

  
 
   
   
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
   // echo 'Connected to database';
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//INSERT DATA

	if(isset($_POST['submit'])){
       
   
	//Create Statement
	$privacy= $_POST['privacy'];
    $security =$_POST['security'];
    $repair =$_POST['repair'];
    $payment =$_POST['payment'];
    $payment_amount =$_POST['payment_amount'];
    $refund =$_POST['refund'];
    $abandoned=$_POST['abandoned'];
    $backup=$_POST['backup'];
    $software=$_POST['software'];
	
	$stmt=$conn->prepare("INSERT into policy (privacy,security,repair,payment,payment_amount,refund,abandoned,backup,software) values(:privacy,:security,:repair,:payment,:payment_amount,:refund,:abandoned,:backup,:software)");
	
	//Bind Values
	$stmt->bindParam(':privacy',$privacy);
	$stmt->bindParam(':security',$security);
	$stmt->bindParam(':repair',$repair);
	$stmt->bindParam(':payment',$payment);
	$stmt->bindParam(':payment_amount',$payment_amount);
	$stmt->bindParam(':refund',$refund);
	$stmt->bindParam(':abandoned',$abandoned);
	$stmt->bindParam(':backup',$backup);
	$stmt->bindParam(':software',$software);
	//Execute
	$stmt->execute();
    //echo 'data added';
    
	}
	
   
 
	
?>