<style>

.table{
  border: none;
  color: black;
  text-align: left;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
font-family : Times New Roman;
font-weight: bold;
}
th{
padding: 20px 20px;
            margin: 20px 20px;
}
td{
padding: 20px 20px;
            margin: 20px 20px;
}
.form-vertical{
font-family : Times New Roman;
text-align : center;
font-size: 16px;
font-weight: bold;
float :right;
 padding:4px;
margin: 5px;
width:40%;
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

<h3>Fill the form and press Purchase to confirm your process.</h3>
<br><br>

<?php
	
	session_start();
	require_once "./functions/database_functions.php";
	// print out header here
	$title = "Checking out";
	

	if(isset($_SESSION['cart']) && (array_count_values($_SESSION['cart']))){
?>
	<table class="table">
		<tr>
			<th>Item</th>
			<th>Price</th>
	    	<th>Quantity</th>
	    	<th>Total</th>
	    </tr>
	    	<?php
			    foreach($_SESSION['cart'] as $id => $qty){
					$conn = db_connect();
					$product = mysqli_fetch_assoc(getproductById($conn, $id));
			?>
		<tr>
			<td><?php echo $product['product_title']; ?></td>
			<td><?php echo "$" . $product['product_price']; ?></td>
			<td><?php echo $qty; ?></td>
			<td><?php echo "$" . $qty * $product['product_price']; ?></td>
		</tr>
		<?php } ?>
		<tr>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
			<th><?php echo $_SESSION['total_items']; ?></th>
			<th><?php echo "$" . $_SESSION['total_price']; ?></th>
		</tr>
	</table>
	<form method="post" action="purchase.php" class="form-vertical">
	<fieldset>
				    <legend>Checkout</legend>
		<?php if(isset($_SESSION['err']) && $_SESSION['err'] == 1){ ?>
			<p class="text-danger">All fields have to be filled</p>
			<?php } ?>
		<div class="form-group">
			<label for="name" class="control-label col-md-4">Name</label>
			<div class="col-md-4">
				<input type="text" name="name" id="name" class="col-md-4" class="form-control" onkeyup="check()">
			</div>
		</div>
		<div class="form-group">
			<label for="address" class="control-label col-md-4">Address</label>
			<div class="col-md-4">
				<input type="text" name="address" id="address" class="col-md-4" class="form-control" onkeyup="check()">
			</div>
		</div>
		<div class="form-group">
			<label for="city" class="control-label col-md-4">City</label>
			<div class="col-md-4">
				<input type="text" name="city" id="city" class="col-md-4" class="form-control" onkeyup="check()">
			</div>
		</div>
		<div class="form-group">
			<label for="zip_code" class="control-label col-md-4">Zip Code</label>
			<div class="col-md-4">
				<input type="text" name="zip_code" id="zip_code" class="col-md-4" class="form-control" onkeyup="check()">
			</div>
		</div>
		<div class="form-group">
			<label for="country" class="control-label col-md-4">Country</label>
			<div class="col-md-4">
				<input type="text" name="country" id="country" class="col-md-4" class="form-control" onkeyup="check()">
			</div>
		</div>
		<div class="form-group">
			<input type="submit" name="submit" id="submit" value="Purchase" class="w3-button w3-pink" disabled>
		</div>
		</fieldset>
	</form>
	
	<script>
	function check(){
		if( document.getElementById("name").value==""|| document.getElementById("city").value=="" || document.getElementById("country").value==""|| document.getElementById("address").value=="" || document.getElementById("zip_code").value=="")
			document.getElementById("submit").disabled=true;
		else document.getElementById("submit").disabled=false;
		
	}
	

</script>


<?php
	} else {
		echo "<p class=\"text-warning\">Your cart is empty! Please make sure you add some products in it!</p>";
	}
	?>
	</div>
	<br><br><br><br><br><br><br>
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
