<?php
	/**
	 *	File name: success.php
	 *	Description: File shows the last data row inputted into database. Gives users an option to edit data, go back to Tech Shop website, or go to Green River's website.
	/**
	
	The MIT License (MIT)
	
	Copyright (c) 2017 Stacey Demecilio, Shimbey Assie, Axumawit Gebregorgis
	
	Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
	
	The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
	
	THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
	
	 */
	require('../../databaseConnect.php');
	//include('pdfGenerate/pdfGenerate.php');

	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	//echo 'Connected to database';
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>

<html>
	<head>
		<title>Green River Repair Shop</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<link rel = "stylesheet" href = "css/background.css">
       
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<h1>Green River PC Repair Shop</h1>
					</header>

				<!-- Nav -->
				<?php
					include ('indexMenu.php');
				?>

				<!-- Main -->
					<div id="main">

						<!-- Introduction -->
							<section id="intro" class="main">
								<div class="spotlight">
									<div class="content">
										<header class="major">
											<h2>Submission accepted!</h2>
										</header>
										<p>Your submission was accepted. Please review the information to verify that it is correct. </p>
										
<!--										<form action = "pdfGenerate/pdfGenerate.php?workOrderID=" target = "_blank">
											<button type = "submit" value = "Print Work Order">
										</form>-->
										
										<?php											
											try{
												//Selecting data 
												$stmt = $conn->query("SELECT * FROM workOrder ORDER BY `workOrderID` DESC LIMIT 1");
											      
												$stmt->setFetchMode(PDO::FETCH_OBJ);									      
												 $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
												     												 
												 //printing out the results
												 foreach($result as $row){
													echo "<h3>";
													echo "<a href = 'pdfGenerate/pdfGenerate.php?workOrderID=" . $row['workOrderID'] . "' target = '_blank'>Print Work Order</a>";
													echo "</h3>";
													
													 echo "<p>";
													 echo "<b>First Name: </b>" . $row['first_name'] . "<br>";
													 echo "<b>Last Name: </b>" . $row['last_name'] . "<br>";
													 echo "<b>Green River ID: </b>" . $row['greenriverID'] . "<br>";
													 echo "<b>Email: </b>".$row['email'] . "<br>";
													 echo "<b>Phone number: </b>" .$row['phone_number'] . " <br>";
													 echo "<b>Computer Language, English: </b>" . $row['computer_language'] . "<br>";
													 echo "<b>Computer Username: </b>" . $row['computer_username'] . "<br>";
													 echo "<b>Computer Password: </b>" . $row['computer_password'] . "<br>";
													 echo "<b>C-Cleaner Approval: </b>" . $row['ccleaner'] . "<br>";
													 echo "<b>Customer Initials: </b>" . $row['customer_initials'] . "<br>";
													 echo "<b>Issues: </b>" . $row['issues'] . "<br>";
													 echo "<a href = 'index.php'>Return to Tech Shop Website</a> <br>";
													 echo "<a href = 'https://www.greenriver.edu'>Go to Green River College Website</a>";
													 
												    }
												    
												    echo "</p>";
												}
												catch(PDOException $e) {
													echo "Error: " . $e->getMessage();
												}
										?>
	
									</div>
								</div>
							</section>

					</div>

				<!-- Footer -->
					<footer id="footer">
						</section>
						<p class="copyright">&copy; Untitled. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
 