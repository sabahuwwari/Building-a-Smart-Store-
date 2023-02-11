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

$password=$_REQUEST['password'];
$email=$_REQUEST['email'];

$qry = "SELECT email,password FROM customers";
 $result = $conn->query($qry);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
       
       $S=$row["email"];
	    $V=$row["password"];
		
		if($email ==$S && $password==$V){
		header("Location: index.php");
	}
	else{
		echo"Wrong Email Or Password";
	}
}

}else 
    echo "Error: " . $sql . "<br>" . $conn->error;


$conn->close();		
		
?>
