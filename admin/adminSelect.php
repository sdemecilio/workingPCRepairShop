<?php
$servername="localhost";
$username= "pcrepair";
$password ="Capstone2017!";
$dbname="pcrepair_shop";


 
 
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
	  echo"<table>";
	  echo "<tr";
	  echo"<th>ORDER</th><br>";
	  echo"<th>NAME</th><br>";
	  echo"<th>DATE</th>";
	  echo"<tr>";
     
     foreach($result as $row){
        echo "<tr>";
		  echo "<td>". $row['workOrderID'] ."</td>";
		  echo "<td>". $row['first_name']."</td>";
		  echo "<td>".$row['timestamp']."</td>";
		  echo "</tr>";
//		  $row['greenriverID'] . ' &nbsp' .  $row['issues'] . ', '
//        . $row['computer_password'] . ' &nbsp' . $row['customer_initials'] . '<br><br>';
	 }
	 echo "</table>";
}
     
    catch(PDOException $e) {
    echo "Error: " . $e->getMessage();


}
	
?>
