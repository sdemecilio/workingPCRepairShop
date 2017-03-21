<?php
  
  // request post method
  if($_SERVER["REQUEST_METHOD"] == "POST")
   {
            //not empty
              $errors = array(); // define an error array 
              $valid =true; // define boolean and set to true if validates
              $privacy=$_POST['privacy'];
              $security=$_POST['security'];
              $refund=$_POST['refund'];
              $backup=$_POST['backup'];
              $abandoned=$_POST['abandoned'];
              $payment=$_POST['payment'];
              $software=$_POST['software'];
              $payment_amount=$_POST['payment_amount'];

            //start validation
            if(empty($_POST['privacy'])){

                $errors['privacyErr'] = "Your initials cannot be empty";
                $valid=false;
             //if they intials do not match
            } else{
               $privacy=$_POST['privacy'];
               if($privacy != $security){
                    $errors['privacyErr']= "Initials do not match";
                    $valid=false;
                    }
            }
            //security initials
             if(empty($_POST['security'])){
                $errors['securityErr'] = "Your initials cannot be empty";
                $valid=false;
         
             }else{
               $security=$_POST['security'];
               if($security != $privacy){
                    $errors['securityErr']= "Initials do not match";
                    $valid=false;
                   }
             }
            //repair initials
             if(empty($_POST['repair'])){
                
                $errors['repairErr'] = "Your initials cannot be empty";
                $valid=false;
           
            }else{
              $repair=$_POST['repair'];
               if($repair != $privacy){
                $errors['repairErr']= "Initials do not match";
                $valid=false;
               }
            }
            //payment initial
            if(empty($_POST['payment'])){
                
                $errors['paymentErr'] = "Your initials cannot be empty";
                $valid=false;
                  
            } else {
                $payment=$_POST['payment'];
                if($payment != $privacy){
                $errors['paymentErr']= "Initials do not match";
                $valid=false;
               }
            }
            //refund initial
            if(empty($_POST['refund'])){
                
                $errors['refundErr'] = "Your initials cannot be empty";
                $valid=false;
            }else {
                $refund=$_POST['refund'];
                if($refund != $privacy){
                $errors['refundErr']= "Initials do not match";
                $valid=false;
               }
            }
            //back up initial
            if(empty($_POST['backup'])){
                
                $errors['backupErr'] = "Your initials cannot be empty";
                $valid=false;
            }else {
                $backup=$_POST['backup'];
                if($backup != $privacy){
                $errors['backupErr']= "Initials do not match";
                $valid=false;
               }
            }
            //abandoned initial 
            if(empty($_POST['abandoned'])){
                
                $errors['abandonedErr'] = "Your initials cannot be empty";
                $valid=false;
                
            }else {
                $abandoned=$_POST['abandoned'];
                if($abandoned != $privacy){
                $errors['abandonedErr']= "Initials do not match";
                $valid=false;
           
               }
            }
            //software initial 
            if(empty($_POST['software'])){
                
                $errors['softwareErr'] = "Your initials cannot be empty";
                $valid=false;
             
            }else {
                //$initials[] = $_POST['software'];
                $software=$_POST['software'];
                if($software != $privacy){
                $errors['softwareErr']= "Initials do not match";
                $valid=false;
               }
            }
            //payment amount 
            if(isset($_POST['payment_amount'])){
            if(!is_numeric($payment_amount) && $payment_amount ==0){
            echo $payment_amount;
                $errors['payment_amountErr'] = "Please enter the amount you wish to pay";
                $valid=false;
                }
            }
       
            if($valid){
                //connection to database 
                $servername="localhost";
                $username= "pcrepair";
                $password ="Capstone2017!";
                $dbname="pcrepair_shop";
   
                 $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

                 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
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
                
                // inserting data
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

                //redirect to work order
                header("Location: workOrderForms.php");
                exit;
                }
            }       

?>
    
	
   
 
