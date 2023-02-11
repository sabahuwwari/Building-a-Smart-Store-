<?php

$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$message=$_REQUEST['message'];
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
$sql = "INSERT INTO message(name,email, message)
VALUES ( '$name', '$email','$message' )";

if ($conn->query($sql) === TRUE) {
    echo "Sent  Successfully"; 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}//if2
?>

