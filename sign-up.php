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
float :center;
 padding: 20px;
margin: 100px;
width:60%;
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
    <a href="home.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Home</a>
    <a href="Login.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Signin</a>
    <a href="sign-up.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Signup</a>
    <a href="contactt.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Contact Us</a>
	<a href="#" class="w3-bar-item w3-button w3-right"><i class="fa fa-search"></i></a>

  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="Login.php" class="w3-bar-item w3-button w3-padding-large">Signin</a>
    <a href="sign-up.php" class="w3-bar-item w3-button w3-padding-large">Signup</a>
    <a href="contactt.php" class="w3-bar-item w3-button w3-padding-large">Contact Us</a>

  </div>
</div>


<!-- Header -->
  <header class="w3-container w3-center w3-padding-48 w3-white">
    <h1 class="w3-xxxlarge"><b>E-Shop</b></h1>
    <h6>Welcome to our <span class="w3-tag w3-pink">Smart Store</span></h6>
  </header>



<header class="w3-container w3-light-grey w3-center" style="padding:20px 10px">
<h1>Signup to see our products</h1>
<p style="color:deeppink;"><b>We would love to see you within our family</b></p>
           <img class="w3-imagegd w3-right" src="store16.png" style="padding:70px; width:40%;">
<form class="form-vertical" method="post" action ="verify.php" >
<fieldset >
				    <legend><b>Sign-up</b></legend>

                                                       <div class="form-group">
			<label for="name" class="control-label col-md-4">Name</label>
			<div class="col-md-4">
				<input type="text" name="name" id="name" class="form-control" onkeyup="check()">
			</div>
		</div>
		                <div class="form-group">
			<label for="email" class="control-label col-md-4">Email</label>
			<div class="col-md-4">
				<input type="text" name="email"  id="email" class="form-control" onkeyup="check()">
			</div>
		</div>


		                  <div class="form-group">
			<label for="password" class="control-label col-md-4">Password</label>
			<div class="col-md-4">
				<input type="password" name="password"  id="password" class="form-control" onkeyup="check()">
			</div>
		</div> 
                                                    <div class="form-group">
			<label for="address" class="control-label col-md-4">Address</label>
			<div class="col-md-4">
				<input type="text" name="address" id="address" class="form-control" onkeyup="check()">
			</div>
		</div><br>
		<input type="submit" name="submit" id="submit" class="w3-button w3-pink" disabled>
		</fieldset>
	</form>

<script>
	function check(){
		if( document.getElementById("name").value==""|| document.getElementById("email").value=="" || document.getElementById("password").value==""|| document.getElementById("address").value=="")
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
