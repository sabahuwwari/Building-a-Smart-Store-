<?php

$pir=$_REQUEST['pir'];
$humidity=$_REQUEST['humidity'];
$gas=$_REQUEST['gas'];
$id=$_REQUEST['id'];
$submit=$_REQUEST['submit'];


if($_SERVER["REQUEST_METHOD"]=="POST") {//if1
$servername = "localhost";
$username = "root";
$password = "Your_Password";
$dbname="Your_Database";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 




}//if1

if($submit="submit"){//if2
$sql = "update sections set MinPeople='$pir',MaxHum='$humidity', MaxGa='$gas' WHERE SectionID=$id";

if ($conn->query($sql) === TRUE) {
    echo "Updated successfully !";  echo 'Thanks';; 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}//if2
?>

