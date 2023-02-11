
<?php
  session_start();
  $count = 0;
  // connecto database
  $title = "Index";
  require_once "./functions/database_functions.php";
  $conn = db_connect();
      $row = select4Latestproducts($conn);

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1"
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
padding: 70px 70px;
            margin: 70px 70px;
}
td{
padding: 70px 70px;
            margin: 70px 70px;
}




</style>
</head>
<body>

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
    <a href="index.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Home</a>
    <a href="products.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Products</a>
    <a href="cart.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">My Cart</a>
    <a href="orders.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">My Orders</a>
    <a href="contact.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Contact Us</a>
			    <a href="Logout.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Signout</a>

	<a href="#" class="w3-bar-item w3-button w3-right"><i class="fa fa-search"></i></a>

  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="showproducts.php" class="w3-bar-item w3-button w3-padding-large">Products</a>
    <a href="Login.php" class="w3-bar-item w3-button w3-padding-large">My Cart</a>
    <a href="sign-up.php" class="w3-bar-item w3-button w3-padding-large">My Orders</a>
    <a href="contactt.php" class="w3-bar-item w3-button w3-padding-large">Contact Us</a>

  </div>
</div>


<!-- Header -->
  <header class="w3-container w3-center w3-padding-48 w3-white">
    <h1 class="w3-xxxlarge"><b>E-Shop</b></h1>
    <h6>Welcome to our <span class="w3-tag w3-pink">Smart Store</span></h6>
  </header>

<header class="w3-container w3-light-grey w3-center" style="padding:20px 10px">
<h3>Summary Of Your Orders</h3>
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

$qry = "SELECT * FROM order_items";
 $result = $conn->query($qry);
if ($result->num_rows > 0) {
	echo "<table border>";
    while($row = $result->fetch_assoc()) {
        
       $Itm=$row["orderid"];
	    $Val=$row["item_price"];
		$quantity=$row["quantity"];
		
		  echo "<tr>";
        echo "<tr><td>ID<td>" .$Itm;
		 echo "<tr><td>item price <td>" .$Val;
		 		 echo "<tr><td>quantity <td>" .$quantity;
}//while
echo "</table>";
}//if


	 else echo "0 results";


	$conn->close();
	
?>
</div>

<br><br><br><br><br>
	<!-- Footer -->
<footer class="w3-container w3-white w3-padding-15 w3-center w3-opacity w3-white">  
<br><br>
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
