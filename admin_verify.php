 <style>
body {
padding: 120px;
margin: 150px;
width:50%;
  background-color: lightgrey;
border:1px solid deeppink;
color: black;
text-align : center;
font-family: Times New Roman;
font-size: 20px;
float:center;
}

</style>

<header class="w3-container w3-light-grey w3-center" style="padding:20px 10px">

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

$qry = "SELECT email,password FROM admin";
 $result = $conn->query($qry);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
       
       $S=$row["email"];
	    $V=$row["password"];
		
		if($email ==$S && $password==$V){
		header("Location: mypage.php");
	}
	else{
		echo"Wrong Email Or Password";
	}
}

}else 
    echo "Error: " . $sql . "<br>" . $conn->error;


$conn->close();		
		
?>
</header>