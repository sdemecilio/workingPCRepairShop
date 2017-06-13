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
	
	//error_reporting(E_ALL);
?>

<!Doctype HTML>
<html>
	<head>
		<title>Green River Repair Shop</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="../assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="../assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="../assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="../assets/css/ie8.css" /><![endif]-->
		<link rel = "stylesheet" href = "https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css" />
		<link rel = "stylesheet" href = "../css/adminMenu.css">
		<link rel = "stylesheet" href = "../css/background.css">
	</head>
	
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<h1>Green River PC Repair Shop</h1>
					</header>

				<!-- Nav -->
					

				<!-- Main -->
					<div id="main">

						<!-- Introduction -->
							<section id="intro" class="main">
								<div class="content">


 
 <?php
		//pulling information from the db	
		$stmt = $conn->prepare("SELECT * FROM workOrder WHERE workOrderID='".$_GET['workOrderID']."'");
		
		$stmt->execute();
		
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		
		//setting variables
		$workOrderID = $row['workOrderID'];		
		$first_name= $row['first_name'];										
      		$last_name = $row['last_name'];									 		
            	$greenriverID = $row['greenriverID'];													
    		$email =  $row['email'];											
 		$phone_number = $row['phone_number'];																	 
 		$computer_language = $row['computer_language'];											
  		$computer_username =$row['computer_username'];															 																
		$computer_password = $row['computer_password'];																			
		$ccleaner = $row['ccleaner'];
                $customer_initials = $row['customer_initials'] ;
               	$issues = $row['issues'] ;	
               	
               	
               	//echoing the form 
               	echo "
               									<h3>Update Information</h3>
									
									<form name='updateform' method='post' action='updateSuccess.php'> 
									
									<input type='hidden' name='workOrderID' value='" . $workOrderID . "'>
									
									
									<label for='first_name'>First Name:</label><input type='text' name='first_name' id='first_name' value='".$first_name."'/><br>
									
									<label for='last_name'>Last Name:</label><input type='text' name='last_name' id='last_name' value='".$last_name."' /><br>
									
									<label for='greenriverID'>Greenriver ID:</label><input type='text' name='greenriverID' id='greenriverID' value='".$greenriverID."' /><br>
									
									<label for='email'>Email:</label><input type='text' name='email' id='email' value='".$email."' /><br>
									
									<label for='phone_number'>Phone Number:</label><input type='text' name='phone_number' id='phone_number' value='".$phone_number."'/><br>
									
									<label for='computer_language'>Computer language:</label><input type='text' name='computer_language' id='computer_language' value='".$computer_language."'/><br>
									
									<label for='computer_password'>Computer password:</label><input type='text' name='computer_password' id='computer_password' value='".$computer_password."'/><br>
									
									<label for='computer_username'>Computer username:</label><input type='text' name='computer_username' id='computer_username' value='".$computer_username."'/><br>
									
									<label for='ccleaner'>CCleaner:</label><input type='text' name='ccleaner' id='ccleaner' value='".$ccleaner."'/><br>
									<label for='customer_initials'>Customer initials:</label><input type='text' name='customer_initials' id='customer_initials' value='".$customer_initials."'/><br>
									
									<label for='issues'>Issues :</label><input type='text' name='issues' id='issues' value='".$issues."'/><br>
									
									<input type='submit' value='Update Record'>		
									</form> ";

               	
               	}	
              						 						               	
    
    
?>
										
									
								</div>
							</section>

					</div>

				<!-- Footer -->
				<footer id="footer">
                    <p class="copyright">&copy; 2017 Team SAS</a>.</p>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/jquery.scrollex.min.js"></script>
			<script src="../assets/js/jquery.scrolly.min.js"></script>
			<script src="../assets/js/skel.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="../assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="../assets/js/main.js"></script>
			<script src="//code.jquery.com/jquery-1.12.4.js"></script>
			<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
			<script src = "..js/admin.js"></script>
			<script src="js/WorkOrder.js"></script>
</body>
</html>