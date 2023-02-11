<?php
$section=$_REQUEST['section'];
$discount=$_REQUEST['discount'];
$submit=$_REQUEST['submit'];

if($_SERVER["REQUEST_METHOD"]=="POST") {//if1
$servername = "localhost";
$username = "root";
$password = "Your_Password" ;
$dbname="Your_Database";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

}//if1

if($submit="submit"){//if2

$qry = "SELECT SectionID FROM sections";
$result = $conn->query($qry);
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $S = $row["SectionID"];
	
if($S==$section && $section==1){
		echo"Discount on grocery".$discount;
		
	}
	
	if($S==$section && $section==2){
		echo"Discount on electronics".$discount;
	}
	
	if($S==$section && $section==3){
		echo"Discount on clothes".$discount;
	}
	
	
	if($S==$section && $section==4){
		echo"Discount on kitchen".$discount;
	}
	
	if($S==$section && $section==5){
		echo"Discount on home".$discount;
	}
	
   
  } //while
} //if
else
  echo "0 results";


$conn->close();
}
?>
















