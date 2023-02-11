<style>
h4{
color: black;
text-align:center; 
font-size:30px; 
font-family:Elephant;
}


.form-vertical{
font-family : Times New Roman;
text-align : center;
font-size: 16px;
font-weight: bold;
float :right;
 padding:10px;
margin: 100px;
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
    <a href="contact.php" class="w3-bar-item w3-button w3-padding-large">Contact Us</a>


  </div>
</div>


<!-- Header -->
  <header class="w3-container w3-center w3-padding-48 w3-white">
    <h1 class="w3-xxxlarge"><b>E-Shop</b></h1>
    <h6>Welcome to our <span class="w3-tag w3-pink">Smart Store</span></h6>
  </header>




<header class="w3-container w3-light-grey w3-center" style="padding:20px 10px">
<h1>Get In Touch</h1>
<p style="color:deeppink;"><b>We’d love to hear from you!</b></p>
           <img class="w3-imagegd w3-right" src="store22.png" style="  margin:40px; padding:4px; width:27%;">
		   
<div class="row">
        <div class="col-md-3"></div>
		<div class="col-md-6 text-center">
			<form class="form-vertical" method="post" action ="handel.php" >
			  	<fieldset>
				    <legend>Contact Us</legend>
				    <div class="form-group">
				      	<label for="name" class="col-lg-2 control-label">Name</label>
				      	<div class="col-lg-10">
				        	<input type="text" class="form-control" name="name" id="name" placeholder="Name" onkeyup="check()" >
				      	</div>
				    </div>
				    <div class="form-group">
				      	<label for="email" class="col-lg-2 control-label">Email</label>
				      	<div class="col-lg-10">
				        	<input type="text" class="form-control" name="email" id="email" placeholder="Email " onkeyup="check()">
				      	</div>
				    </div>
				    <div class="form-group">
				      	<label for="textArea" class="col-lg-2 control-label">Message</label>
				      	<div class="col-lg-10">
				        	<textarea class="form-control" rows="3" name="message" id="message" onkeyup="check()"></textarea>
				 
				      	</div>
				    </div>
<br>
				    <div class="form-group" >
				      	<div class="col-lg-10 col-lg-offset-2">
				        	<button type="submit" id="submit" class="w3-button w3-pink" disabled>Send</button>
				      	</div>
				    </div>
			  	</fieldset>
			</form>
		</div>
		<div class="col-md-3"></div>
    </div>


<script>
	function check(){
		if( document.getElementById("name").value==""|| document.getElementById("email").value=="" || document.getElementById("message").value=="")
			document.getElementById("submit").disabled=true;
		else document.getElementById("submit").disabled=false;
		
	}

</script>


</header>
<br><br>
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
