<style>


table{
  border: 2px pink;
  color: black;
  text-align: left;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
font-family : Times New Roman;
font-weight: bold;
float:center;
}

th{
padding: 40px 40px;
            margin: 40px 40px;
}
td{
padding: 40px 40px;
            margin: 40px 40px;
}



</style>


<?php
$servername = "localhost";
$username = "root";
$password = "Your_Password";
$dbname = "Your_Database";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
//echo "<br>";
//echo "Welcome To Grocery Sections";
//echo "<br>";
//echo "Observe the shelves situations from here:";
//echo "<br>";

$qry = "SELECT SensorID,Value FROM electronics";
 $result = $conn->query($qry);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
       
       $S=$row["SensorID"];
	    $V=$row["Value"];
	 
 if($S == 4 && !($V<"0")){  // Gas
	   $ultra=(int)$V;
	   //echo "Ultrasonic Value:".$ultra;
}
          
	}//while
}//if


  
  else echo "0 results";
   
$qry = "SELECT ItemID,MinValue FROM homitems";
 $result = $conn->query($qry);
if ($result->num_rows > 0) {
	echo "<table border>";
    while($row = $result->fetch_assoc()) {
        
       $Itm=$row["ItemID"];
	    $Val=$row["MinValue"];
		
		  echo "<tr>";
        echo "<tr><td>ID<td>" .$Itm;
		 echo "<tr><td>Min Distance <td>" .$Val;
		 
		 if($Itm == 1 ){
		   if($ultra > $Val){
		$u= "Vase Shelve needs to be refilled!";
	      }else{
		$u= "Vase shelve is ok";
		  }
		if($ultra==0){
			$u= "Vase shelve is full!";
		}
		 }
		 
		  if($Itm == 2 ){
		   if($ultra > $Val){
		$u= "Masterpieces Shelve needs to be refilled!";
	      }else{
		$u= "Masterpieces shelve is ok";
		  }
		if($ultra==0){
			$u= "Masterpieces shelve is full!";
		}
		 }
		 
		 echo "<tr><td>Ultrasonic  Says <td>" .$u;
		
}//while
echo "</table>";
}//if


	 else echo "0 results";


	$conn->close();
	
?>


