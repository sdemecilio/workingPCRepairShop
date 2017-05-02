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
                        include ('adminMenu.php');
                    ?>
                    
                    <!-- Main -->
                    <div id = "main">
                        
                        <!-- Introduction -->
                        <section id = "intro" class = "main">
                            <div class = "spotlight">
                                <header class = "major">
                                    <h2>View Work Order</h2>
                                </header>
                                <div class = "content">                                        
                                        <?php
                                            echo "<h3><a href = 'adminSelect.php'> << Back</a></h3>";
                                            
                                            foreach ($result as $row)
                                            {
                                                echo "First Name: " . $row['first_name'] . "<br>";
                                                echo "Last Name: " . $row['last_name'] . "<br>";
                                                echo "Green River ID: " . $row['greenriverID'] . "<br>";
                                                echo "Email: " . $row ['email'] . "<br>";
                                                echo "Phone Number: " . $row['phone_number'] . "<br>";
                                                echo "English Computer Language: " , $row['computer_language'] . "<br>";
                                                echo "Computer Username: " . $row['computer_username'] . "<br>";
                                                echo "Computer Password: " . $row['computer_password'] . "<br>";
                                                echo "Ccleaner Removal: " . $row['ccleaner'] . "<br>";
                                                echo "Customer Initials: " . $row['customer_initials'] . "<br>";
                                                echo "Computer Issues: " . $row['issues'];
                                            }
                                            
                                            echo "<br>";
                                            echo "<i><b><u>Office Use</u></b></i>";
                                            echo "<br>";
                                            
                                            if ($office_result != null)
                                            {                                                
                                                foreach ($office_result as $row)
                                                {
                                                    echo "Date Recieved " . $row['date_recieved'] . "<br>";
                                                    echo "Receipt Number: " . $row['receipt_number'] . "<br>";
                                                    echo "Receiving Technician: " . $row['receiving_tech'] . "<br>";
                                                    echo "Computer Manufacturer: " . $row['manufacturer'] . "<br>";
                                                    echo "Operating System: " . $row['operating_system'] . "<br>";
                                                    echo "PC SN: " . $row['pc_sn'] . "<br>";
                                                    echo "Model: " . $row['model'] . "<br>";
                                                    echo "OS Key: " . $row['os_key'] . "<br>";
                                                    echo "Ledger Dropoff: " . $row['ledger_dropoff'] . "<br>";
                                                    echo "Ledger Pickup: " . $row['ledger_pickup'] . "<br>";
                                                    echo "Work Begin Date: " . $row['work_began'] . "<br>";
                                                    echo "Work Finished: " . $row['work_finished'] . "<br>";
                                                }                                                
                                            }
                                            
                                            else
                                            {
                                                echo "Date Recieved: <br>";
                                                echo "Receipt Number: <br>";
                                                echo "Receiving Technician: <br>";
                                                echo "Computer Manufacturer: <br>";
                                                echo "Operating System: <br>";
                                                echo "PC SN: <br>";
                                                echo "Model: <br>";
                                                echo "OS Key: <br>";
                                                echo "Ledger Dropoff: <br>";
                                                echo "Ledger Pickup: <br>";
                                                echo "Work Begin Date: <br>";
                                                echo "Work Finished: <br>";                                                
                                            }
                                        ?>
                                </div> <!-- end of content div-->
                            </div> <!-- end of spotlight div -->
                        </section>
                    </div> <!-- end of main div -->
            </div> <!-- end of wrapper div -->
    </body>
</html>
                
                        
                    
                                        