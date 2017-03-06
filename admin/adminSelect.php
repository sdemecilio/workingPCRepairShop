<?php
	/**
	The MIT License (MIT)
	
	Copyright (c) 2017 Stacey Demecilio, Shimbey Assie, Axumawit Gebregorgis
	
	Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
	
	The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
	
	THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
	
	 */
	
	require('../../../databaseConnect.php');
	
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	 //echo 'Connected to database';
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	try
	{
	
		//Selecting data 
		$stmt = $conn->query("SELECT * FROM workOrder");
	  
		$stmt->setFetchMode(PDO::FETCH_OBJ); 
	  //$stmt->execute();
		 
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	 catch(PDOException $e) {
	 echo "Error: " . $e->getMessage();	
	}
	

?>
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
		<link rel = "stylesheet" href = "admin.css">
		<link rel = "stylesheet" href = "../css/background.css">
	</head>
	
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<span class="logo"><img src="../images/grcRepairLogo.jpg" alt="Repair Shop Logo" /></span>
						<h1>Green River PC Repair Shop</h1>
					</header>

				<!-- Nav -->
					<?php
						include ('adminMenu.php');
					?>

				<!-- Main -->
					<div id="main">

						<!-- Introduction -->
							<section id="intro" class="main">
								<div class="content">				
									<table id="example" class="display" cellspacing="0" width="100%">
										<thead>
											<tr>
												<th>OrderNumber</th>
												<th>First Name</th>
												<th>Last Name</th>
												<th>Green River ID</th>
												<th>Date</th>
												<th>View Work Order</th>
												<th>Edit Work Order</th>
											</tr>
										</thead>
										<?php
											foreach ($result as $row)
											{
												echo "<tr>";
													echo "<td>" . $row['workOrderID'] . "</td>";
													echo "<td>" . $row['first_name'] . "</td>";
													echo "<td>" . $row['last_name'] . "</td>";
													echo "<td>" . $row['greenRiverID'] . "</td>";
													echo "<td>" . $row['timestamp'] . "</td>";
													echo "<td align = 'center'><a href = '#'>View</a></td>";
													echo "<td align = 'center'><a href = 'editWorkOrder.php?workOrderID=" . $row['workOrderID'] . "'>Edit</a></td>";
												echo "</tr>";
											}
										?>
									</table>
								</div>
							</section>

					</div>

				<!-- Footer -->
<!--					<footer id="footer">
						<p class="copyright">&copy; Untitled. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
					</footer>-->

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
			<script src = "admin.js"></script>
</body>
</html>


