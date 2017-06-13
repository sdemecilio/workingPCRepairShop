<?php
	/**
    
    File Title: viewWorkOrder.php
    File Description: File allows for technician or manager to view work orders in database wiithout the worry of accidently editing. Also displays any information under office use section of work order. 
     
	The MIT License (MIT)
	
	Copyright (c) 2017 Stacey Demecilio, Shimbey Assie, Axumawit Gebregorgis
	
	Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
	
	The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
	
	THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
	
	 */
    
    // connections
    require('../../../databaseConnect.php');
	include('beginWorkCon.php');
    
    session_start();
	
	    // selection variable
    $id = $_GET['workOrderID'];
    
    try
    {
         $statement = $conn->query ("SELECT * FROM workOrder WHERE workOrderID =" . $id);
         $office_use = $conn->query ("SELECT * FROM office_use WHERE workOrderID = ". $id); 
		 
         $statement->setFetchMode(PDO::FETCH_OBJ);
         $office_use->setFetchMode(PDO::FETCH_OBJ);
         
         $result = $statement->fetchAll(PDO::FETCH_ASSOC);
         $office_result = $office_use->fetchAll(PDO::FETCH_ASSOC);
    }
    
    catch (PDOException $e)
    {
        echo "Error: " . $e->getMessage();
    }
    
    if($_SESSION['accessType'] != 'tech'){
		header("Location:login.php");
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
		<link rel = "stylesheet" href = "../css/adminMenu.css">
		<link rel = "stylesheet" href = "../css/background.css">
		<link rel = "stylesheet" href = "../css/admin.css">
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
                    	
                        include ('adminMenu2.php');
                     
                        
                    ?>
                    
                    <!-- Main -->
                    <div id = "main">
                        
                        <!-- Introduction -->
                        <section id = "intro" class = "main">
							<header class = "major">
								<h2>View Work Order</h2>
							</header>
							<div class = "content">
								
								<!-- show status of work order at the top -->
								<?php
									foreach ($result as $row)
									{
										echo "<h3>Status: " . $row['wo_status'] . "</h3>";
									}
									
									echo "<br>";
								?>
								
								<table>
									<tr>
										<th>Naviation</th>
										<th>Customer Information</th>
										<th>Office Use Only</th>
									</tr>
									<tr>
										<td>
											<p><a href = "adminSelect2.php">Back to Work Orders</a></p>
											<p><button id = "update-btn">Update</button></p>
											<?php
												echo "<p><a href = 'editWorkOrder2.php?workOrderID=" . $id . "'><button>Edit</button></a></p>";
												echo "<p><a href = '../pdfGenerate/pdfGenerate.php?workOrderID=" . $id . "' target = '_blank'><button>Print Work Order</button></p><br>";
											?>
										</td>
									<?php
									  echo "<td>";
										foreach ($result as $row)
										{
											echo "<b>First Name:</b> " . $row['first_name'] . "<br>";
											echo "<b>Last Name:</b> " . $row['last_name'] . "<br>";
											echo "<b>Green River ID:</b> " . $row['greenriverID'] . "<br>";
											echo "<b>Email:</b> " . $row ['email'] . "<br>";
											echo "<b>Phone Number:</b> " . $row['phone_number'] . "<br>";
											echo "<b>English Computer Language:</b> " , $row['computer_language'] . "<br>";
											echo "<b>Computer Username:</b> " . $row['computer_username'] . "<br>";
											echo "<b>Computer Password:</b> " . $row['computer_password'] . "<br>";
											echo "<b>Ccleaner Removal:</b> " . $row['ccleaner'] . "<br>";
											echo "<b>Customer Initials:</b> " . $row['customer_initials'] . "<br>";
											echo "<b>Computer Issues:</b> " . $row['issues'];
										}
										
										echo "</td><td>";
										
										if ($office_result != null)
										{                                                
											foreach ($office_result as $row)
											{
												echo "<b>Date Recieved:</b> " . $row['date_recieved'] . "<br>";
												echo "<b>Receipt Number:</b> " . $row['receipt_number'] . "<br>";
												echo "<b>Receiving Technician:</b> " . $row['receiving_tech'] . "<br>";
												echo "<b>Computer Manufacturer:</b> " . $row['manufacturer'] . "<br>";
												echo "<b>Operating System:</b> " . $row['operating_system'] . "<br>";
												echo "<b>PC SN:</b> " . $row['pc_sn'] . "<br>";
												echo "<b>Model:</b> " . $row['model'] . "<br>";
												echo "<b>OS Key:</b> " . $row['os_key'] . "<br>";
												echo "<b>Ledger Dropoff:</b> " . $row['ledger_dropoff'] . "<br>";
												echo "<b>Ledger Pickup:</b> " . $row['ledger_pickup'] . "<br>";
												echo "<b>Work Begin Date:</b> " . $row['work_began'] . "<br>";
												echo "<b>Work Finished:</b> " . $row['work_finished'] . "<br>";
											}                                                
										}
										
										else
										{
											echo "<b>Date Recieved:</b> <br>";
											echo "<b>Receipt Number:</b> <br>";
											echo "<b>Receiving Technician:</b> <br>";
											echo "<b>Computer Manufacturer:</b> <br>";
											echo "<b>Operating System:</b> <br>";
											echo "<b>PC SN:</b> <br>";
											echo "<b>Model:</b> <br>";
											echo "<b>OS Key:</b> <br>";
											echo "<b>Ledger Dropoff:</b> <br>";
											echo "<b>Ledger Pickup:</b> <br>";
											echo "<b>Work Begin Date:</b> <br>";
											echo "<b>Work Finished:</b> <br>";                                                
										}
										
										echo "</td>";		
									?>
								</tr></table>
								<div id = "updateSection">
								<h3><u>Update</u></h3>
								
								<table id = "update_section">
									<tr>
										<th><button id = "beginWork">Begin Work</button></th>
										<th><button id = "workFinished">Work Finished</button></th>
									</tr>
									
									<tr>
										<td>
											<form id = "begin_work_form" method = "POST" action = "">
												Please type date work started.<br>
												<input type = "date" name = "work_began" id = "work_began"><br>
												<input type = "submit" name = "begin-submit" value = "Submit" />
											</form>	
										</td>
										<td>
											<form id = "work_finished_form" method = "POST" action = "">
												Please type date work was finished.
												<p><input type = "date" name = "work_finished" id = "work_finished"></p>
												
												Was the ledger picked up?
												<label><input type = "radio" name = "ledger_pickup" id = "ledger_pickup_yes" value="Yes" <?php if (isset($_POST['ledger_pickup']) && $_POST['ledger_pickup']=='Yes') {echo 'checked="checked"';}?> >Yes</label>
												<label><input type = "radio" name = "ledger_pickup" id = "ledger_pickup_no" value="No" <?php if (isset($_POST['ledger_pickup']) && $_POST['ledger_pickup']=='No') {echo 'checked="checked"';}?> >No</label>
												
												<input type = "submit" name = "finish-submit" id = "finish-submit" value = "Submit" />
											</form>
										</td>
									</tr>
								</table>
									
								</div> <!-- end of update div -->

							</div> <!-- end of content div-->
                        </section>
                    </div> <!-- end of main div -->
            </div> <!-- end of wrapper div -->
			
			<script src = "../js/viewWorkOrder.js"></script>
    </body>
</html>
                
                        
                    
                                        