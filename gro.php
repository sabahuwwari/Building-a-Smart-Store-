<?php
  session_start();
  $count = 0;
  // connecto database
  $title = "Index";
  require_once "./functions/database_functions.php";
  $conn = db_connect();
    $row = select3Latestproducts($conn);

?>
<style>

.col-md-3{
float: left;
   display: block;
 padding: 10px;
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
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Home</a>
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




<!-- Header -->
<header class="w3-container w3-light-grey w3-center" style="padding:80px 16px">
<h1> Start Exploring Our Special Products!</h1>
<h3>	  <b>Grocery</b></h3>

<div class="w3-white w3-margin w3-left">
        <div class="w3-container w3-padding w3-pink ">
          <h4>Categories</h4>
        </div>
        <ul class="w3-ul w3-hoverable w3-white">
          <li class="w3-padding-5"> <a href="gro.php">
            <span class="w3-large">Grocery</span>
            <br>
            </a><span>All types of grocery</span>
          </li>
          <li class="w3-padding-5"><a href="electronics.php">
            <span class="w3-large">Electronics</span>
            <br>
            </a><span>Every electronic piece you need </span>
          </li>
		  <li class="w3-padding-5"><a href="clothes.php">
            <span class="w3-large">Clothes</span>
            <br>
            </a><span>Offering clothes for famous brands</span>
          </li>

          <li class="w3-padding-5"><a href="hom.php">
            <span class="w3-large">Home</span>
            <br>
            </a><span>Design your home</span>
          </li>
        </ul>
      </div>
	  <?php
  session_start();
  $count = 0;
  // connecto database
  require_once "./functions/database_functions.php";
  $conn = db_connect();

  $query = "SELECT product_id, product_image FROM grocery";
  $result = mysqli_query($conn, $query);
  if(!$result){
    echo "Can't retrieve data " . mysqli_error($conn);
    exit;
  }

  $title = "All Products";

?>
       <?php for($i = 0; $i < mysqli_num_rows($result); $i++){ ?>
      <div class="row">
        <?php while($query_row = mysqli_fetch_assoc($result)){ ?>
          <div class="col-md-3">
            <a href="product.php?productid=<?php echo $query_row['product_id']; ?>">
              <img class="img-responsive img-thumbnail" src="./bootstrap/img/<?php echo $query_row['product_image']; ?>">
            </a>
          </div>
        <?php
          $count++;
          if($count >= 4){
              $count = 0;
              break;
            }
          } ?> 
      </div>
<?php
      }
  if(isset($conn)) { mysqli_close($conn); }
  
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
