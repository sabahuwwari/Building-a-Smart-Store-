<style>
img{
float: left;
   display: block;
 padding: 80px;
}
.lead{
font-family : Times New Roman;
text-align : center;
font-size: 16px;
font-weight: bold;
}
h4{
font-family :  Times New Roman;
font-size: 20px;
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


<?php
  session_start();
  $product_id = $_GET['productid'];
  // connecto database
  require_once "./functions/database_functions.php";
  $conn = db_connect();

  $query = "SELECT * FROM clothes WHERE product_id = '$product_id'";
  $result = mysqli_query($conn, $query);
  if(!$result){
    echo "Can't retrieve data " . mysqli_error($conn);
    exit;
  }

  $row = mysqli_fetch_assoc($result);
  if(!$row){
    echo "Empty product";
    exit;
  }

  $title = $row['product_name'];

?>
      <!-- Example row of columns -->
      <p class="lead" style="margin: 25px 0  "><a href="clothes.php">Clothes </a> >> <?php echo $row['product_name']; ?></p>
	  <div class="w3-light-grey " style="padding:80px 16px">
      <div class="row">
        <div class="col-md-3 text-center">
          <img class="img-responsive img-thumbnail" src="./bootstrap/img/<?php echo $row['product_image']; ?>">
        </div>
        <div class="col-md-6">
        <br><br>  <h4><b>Product Description</b></h4>
          <p><?php echo $row['product_descr']; ?></p>
<h4>          <b>Product Details</b></h4>
        <table class="table">
          	<?php foreach($row as $key => $value){
              if($key == "product_descr" || $key == "product_image"  || $key == "product_name"){
                continue;
              }
              switch($key){
                case "product_id":
                  $key = "ID";
                  break;
                case "product_name":
                  $key = "Title";
                  break;
                
                case "product_price":
                  $key = "Price";
                  break;
              }
            ?>
            <tr>
              <td><?php echo $key; ?></td>
              <td><?php echo $value; ?></td>
            </tr>
            <?php 
              } 
              if(isset($conn)) {mysqli_close($conn); }
            ?>
          </table>
<br><br>
          <form method="post" action="cart.php">
            <input type="hidden" name="productid" value="<?php echo $product_id;?>">
            <input type="submit" value="Add to cart" name="cart" class="w3-button w3-pink">
          </form>
       	</div>
      </div>
	  </div>
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
