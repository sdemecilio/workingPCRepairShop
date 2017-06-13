<?php

    require '../../databaseConnect.php';
    session_start();
    
if($_SERVER["REQUEST_METHOD"] == "POST")
{

    //not empty
    $errors = array();
    $issues="";
    $valid=true;

    //start validation
    //validate first name
    if(empty($_POST['first_name'])){

        $errors['first_nameErr'] = "Your First name cannot be empty";
    }else {
        $first_name=$_POST['first_name'];
        if(!preg_match("/^[a-zA-Z ]*$/",$first_name)){
            $errors['first_nameErr']= "Only letters and white space allowed";
            $valid=false;
        }
    }

    //validate last name
    if(empty($_POST['last_name'])){
        $errors['last_nameErr'] = "Your Last name cannot be empty";
    }else {
        $last_name=$_POST['last_name'];
        if(!preg_match("/^[a-zA-Z ]*$/",$last_name)){
            $errors['last_nameErr']= "Only letters and white space allowed";
            $valid=false;
        }
    }

    //validate grc id
    if(empty($_POST['greenriverID'])){

        $errors['greenriverIDErr'] = "Your Green River ID cannot be empty";

    }else{
        $greenriverID=$_POST['greenriverID'];
        if(!preg_match("/^[0-9]*$/", $greenriverID)){
            $errors['greenriverIDErr']="Invalid GRC ID, numbers only";
            $valid=false;
        }
    }
    
    //validate email
    if(empty($_POST['email'])){

        $errors['emailErr'] = "Your email cannot be empty";

    }else{
        $email= $_POST['email'];
        
        if(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)){
            $errors['emailErr']="Invalid email format";
            $valid=false;
        }
        
        // get student id number
        $ID = $_POST['greenriverID'];
        
        // if customer has greenriver id
        if ($ID != null)
        {
            // accepted domains
            $allowed = array('mail.greenriver.edu', 'greenriver.edu');
        
            // make sure address is valid
            if (filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                $explodeEmail = explode('@', $email);
                $domain = array_pop($explodeEmail);
                
                // error message
                if (! in_array($domain, $allowed))
                {
                    $errors['emailErr'] = "Email must be school email address.";
                    $valid = false;
                }
            }
        }
        
    }

    //validate phone number
    if(empty($_POST['phone_number'])){

        $errors['phone_numberErr'] = "Your phone number cannot be empty";
    }else{
        $phone_number= $_POST['phone_number'];
        if(!preg_match("/^(?:(?:\+?1\s*(?:[.-]\s*)?)?(?:\(\s*([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9])\s*\)|([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9]))\s*(?:[.-]\s*)?)?([2-9]1[02-9]|[2-9][02-9]1|[2-9][02-9]{2})\s*(?:[.-]\s*)?([0-9]{4})(?:\s*(?:#|x\.?|ext\.?|extension)\s*(\d+))?$/",$phone_number)){
            $errors['phone_numberErr']="Invalid phone number format";
            $valid=false;
        }
    }
    
    if (empty($_POST['computer_language'])) {
        $errors['comp_lanaguageError'] = "You must put what your computer's language is set to.";
        $valid = false;
    }

    //validate username
    if(empty($_POST['computer_username'])){

        $errors['computer_usernameErr'] = "Your username cannot be empty";
        $valid=false;
    }

    //validate customer password
    if(empty($_POST['computer_password'])){

        $errors['computer_passwordErr'] = "Your password cannot be empty";
        $valid=false;
    }

    //validate customer initials
    if(empty($_POST['customer_initials'])){

        $errors['customer_initialsErr']="Please enter your initials";
        $valid=false;
    }

    //validate computer language radio button
    if(empty($_POST['computer_language'])){

        $errors['computer_languageErr'] = "Enter yes or no";
        $valid=false;
    } else{
        $compLang=($_POST['computer_language']);
    }

    //validate ccleaner radio buttons
    if(empty($_POST['ccleaner'])){

        $errors['ccleanerErr'] = "Enter yes or no";
        $valid=false;
    } else{
        $compLang=($_POST['ccleaner']);
    }

    //validate student faculty radio buton
    if(empty($_POST['student_faculty'])){

        $errors['student_facultyErr'] = "Enter yes or no";
        $valid=false;
    } else{
        $compLang=($_POST['student_faculty']);
    }

    //validate issues checkbox
    if(isset($_POST['issues'])){
        if(!empty($_POST['issues'])){
            $issues=$_POST['issues'];
        }else{
            $errors['issuesErr']='Select all that apply';
            $valid=false;

        }
    }

    //if its valid connect to database
    if($valid){

        $for_issues="";

        //Create Statement
        $student_faculty= $_POST['student_faculty'];
        $first_name=$_POST['first_name'];
        $last_name=$_POST['last_name'];
        $greenriverID=$_POST['greenriverID'];
        $email=$_POST['email'];
        $phone_number=$_POST['phone_number'];
        $computer_language=$_POST['computer_language'];
        $computer_username=$_POST['computer_username'];
        $computer_password=$_POST['computer_password'];
        $ccleaner=$_POST['ccleaner'];
        $customer_initials=$_POST['customer_initials'];
        $issues= $_POST['issues'];

        if(!empty($_POST['issues'])){

            $for_issues = "No issues selected";

            $for_issues=implode(" , ", $issues);

            //inserting data
            $stmt=$conn->prepare("INSERT into workOrder (student_faculty,first_name,last_name,greenriverID,email,phone_number,computer_language,computer_username,computer_password,ccleaner,customer_initials,issues) values(:student_faculty,:first_name,:last_name,:greenriverID,:email, :phone_number, :computer_language, :computer_username, :computer_password, :ccleaner, :customer_initials, :issues)");
		//echo 'phone'.$phone_number;
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
	          $stmt->bindParam(':customer_initials',$customer_initials);
	          $stmt->bindParam(':issues',$for_issues);
	
            //Execute
            $stmt->execute();
            
             // Session variables
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
	        $_SESSION['issuses'] = $for_issues;

            //redirect to work order
            header("location: success.php");
            exit;
        }
    }
}


?>