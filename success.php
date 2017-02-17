<?php
//$servername="localhost";
//$username= "pcrepair";
//$password ="Capstone2017!";
//$dbname="pcrepair_shop";

require('../../databaseConnect.php');

 
 
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    //echo 'Connected to database';
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//INSERT DATA

	
	
	try{
   
    //Selecting data 
    $stmt = $conn->query("SELECT * FROM workOrder");
   
    $stmt->setFetchMode(PDO::FETCH_OBJ); 
   //$stmt->execute();
   
     
     $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
       echo "<h2>Your papers were successfully submitted!</h2>";
	  //echo"<table>";
	  //echo "<tr";
	  //echo"<th>ORDER</th>";
	  //echo"<th>NAME</th>";
	  //echo"<th>DATE</th>";
	  //echo"<tr>";
     
     //printing out the results
     foreach($result as $row){
        
            echo "<p>";
            echo "<b>Name:</b>" . $row['first_name'] . "<br>";
            echo "<b>Email: </b>".$row['email'] . "<br>";
            echo "<b>Phone number: </b>" .$row['phone_number'] . " <br>";
            echo "<a href = 'index.php'>Return to Tech Shop Website</a> <br>";
            echo "<a href = 'https://www.greenriver.edu'>Go to Green River College Website</a>";
   
            
        }
        
        echo "</p>";
    }
    catch(PDOException $e) {
    echo "Error: " . $e->getMessage();


}
	
?>
 