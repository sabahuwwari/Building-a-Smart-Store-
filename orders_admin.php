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
<!DOCTYPE html>
<html lang="en">
<head>
<title>Home Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
</head>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-pink w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-pink" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
        <a href="mypage.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Home</a>
	<a href="sections.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Sections Situation</a>
    <a href="myshelve.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Shelves Situation</a>
    <a href="mymessages.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Users Messages</a>
    <a href="orders_admin.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Users Orders</a>
		    <a href="admin.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Signout</a>

	<a href="#" class="w3-bar-item w3-button w3-right"><i class="fa fa-search"></i></a>

  </div>

 
</div>


<!-- Header -->
  <header class="w3-container w3-center w3-padding-48 w3-white">
    <h1 class="w3-xxxlarge"><b>E-Shop</b></h1>
    <h6>Hello, Admin </h6><h6>Welcome to your <span class="w3-tag w3-pink">Smart Store</span></h6>
  </header>


<header class="w3-container w3-light-grey w3-center" style="padding:80px 16px">
<h1>Checkout the new orders</h1>
<br><br>
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

$qry = "SELECT * FROM orders";
 $result = $conn->query($qry);
if ($result->num_rows > 0) {
	echo "<table border>";
    while($row = $result->fetch_assoc()) {
        
       $Itm=$row["orderid"];
	    $Val=$row["customerid"];
		$quantity=$row["amount"];
				$d=$row["date"];
						$n=$row["ship_name"];
								$ad=$row["ship_address"];
										$ct=$row["ship_city"];
												$z=$row["ship_zip_code"];
														$c=$row["ship_country"];






		
		  echo "<tr>";
        echo "<tr><td>Order ID<td>" .$Itm;
		 echo "<tr><td>Customer ID <td>" .$Val;
		 		 echo "<tr><td>Amount <td>" .$quantity;
				 
				 echo "<tr><td>Date<td>" .$d;
		 echo "<tr><td>Ship Name <td>" .$n;
		 		 echo "<tr><td>Ship Address <td>" .$ad;
				 
				 echo "<tr><td>Ship City<td>" .$ct;
		 echo "<tr><td>Ship ZIP <td>" .$z;
		 		 echo "<tr><td>Ship Country <td>" .$c;
}//while
echo "</table>";
}//if


	 else echo "0 results";


	$conn->close();
	
?>
</header>



<br><br><br><br>

<!-- Footer -->
<footer class="w3-container w3-white w3-padding-15 w3-center w3-opacity w3-white">  
  <div class="w3-xlarge w3-padding-10">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity "></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
 </div>
 <br><br>
    <a href="#" class="w3-button w3-pink w3-padding-large w3-margin-bottom"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>

 <b><p>All Rights Reserved To E-Shop</p></b>
 

</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>
