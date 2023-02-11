<?php

$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
$address=$_REQUEST['address'];
$submit=$_REQUEST['submit'];


if($_SERVER["REQUEST_METHOD"]=="POST") {//if1
$servername = "localhost";
$username = "root";
$password = "Your_Password" ;
$dbname= "Your_Database";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 




}//if1

if($submit="submit"){//if2
$sql = "INSERT INTO newuser(name,email, password,address)
VALUES ( '$name', '$email','$password', '$address' )";

if ($conn->query($sql) === TRUE) {
    echo "Signup done successfully , You can now Signin";  echo ' <a href="Login.php">Here</a>';; 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}//if2
?>




