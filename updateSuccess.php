<?php

	/**
	The MIT License (MIT)
	
	Copyright (c) 2017 Stacey Demecilio, Shimbey Assie, Axumawit Gebregorgis
	
	Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
	
	The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
	
	THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
	
	 */
	 session_start();
	//including db connection
	require('../../databaseConnect.php');
	
	    	
	    	//setting the variables
		$form = $_POST;
		//var_dump($_POST);
		//var_dump($form);
		$workOrderID = $form['workOrderID'];		
		$first_name= $form['first_name'];										
      		$last_name = $form['last_name'];									 		
            	$greenriverID = $form['greenriverID'];													
    		$email =  $form['email'];											
 		$phone_number = $form['phone_number'];																	 
 		$computer_language = $form['computer_language'];											
  		$computer_username =$form['computer_username'];															 																
		$computer_password = $form['computer_password'];																			
		$ccleaner = $form['ccleaner'];
                $customer_initials = $form['customer_initials'] ;
               	$issues = $form['issues'] ;	
               	
               	
               	//sql to update database 
               	$sql = "UPDATE workOrder SET workOrderID = :workOrderID, first_name = :first_name, last_name = :last_name, greenriverID = :greenriverID , email = :email, phone_number = :phone_number, computer_language = :computer_language, computer_username = :computer_username, computer_password = :computer_password, ccleaner = :ccleaner, customer_initials = :customer_initials, issues = :issues WHERE workOrderID = :workOrderID";
               	
               	$stmt = $conn->prepare($sql);
               	
               	
               	//biding param
               	$stmt->bindParam(':workOrderID', $_POST['workOrderID'], PDO::PARAM_INT);
               	
               	$stmt->bindParam(':first_name',$_POST['first_name'], PDO::PARAM_STR);
               	
               	$stmt->bindParam(':last_name',$_POST['last_name'], PDO::PARAM_STR);   
               	
               	$stmt->bindParam(':greenriverID',$_POST['greenriverID'], PDO::PARAM_INT);   
               	
               	$stmt->bindParam(':email',$_POST['email'], PDO::PARAM_STR);
               	
               	$stmt->bindParam(':phone_number',$_POST['phone_number'], PDO::PARAM_INT); 
               	
                $stmt->bindParam(':computer_language',$_POST['computer_language'], PDO::PARAM_STR);
                
                
                $stmt->bindParam(':computer_username',$_POST['computer_username'], PDO::PARAM_STR);
                
                $stmt->bindParam(':computer_password',$_POST['computer_password'], PDO::PARAM_STR);
                
                $stmt->bindParam(':ccleaner',$_POST['ccleaner'], PDO::PARAM_STR);
                
                $stmt->bindParam(':customer_initials',$_POST['customer_initials'], PDO::PARAM_STR);
                
                $stmt->bindParam(':issues',$_POST['issues'], PDO::PARAM_STR);
                
                $stmt->execute();
                
                
                
                //setting variable sessions 
                $_SESSION['first_name'] = $first_name;
	        $_SESSION['last_name'] = $last_name;
	        $_SESSION['greenriverID'] = $greenriverID;
	        $_SESSION['email'] = $email;
	        $_SESSION['phoneNumber'] = $phone_number;
	        $_SESSION['computer_language'] = $computer_language;
	        $_SESSION['computer_username'] = $computer_username;
	        $_SESSION['computer_password'] = $computer_password;
	        $_SESSION['cleaner'] = $ccleaner;
	        $_SESSION['customer_initials'] = $customer_initials;
	        $_SESSION['issuses'] = $issues;
	         
	        //redirecting to success               
                header("Location: success.php?workOrderID=".$workOrderID."");
                exit();
                
                
                
                 
               	             	
?>

