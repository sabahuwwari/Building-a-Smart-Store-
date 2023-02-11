<style>
h4{
color: black;
text-align:center; 
font-size:20px; 
font-family:Times New Roman;
}
.form-horizontal{
font-family : Times New Roman;
text-align : center;
font-size: 16px;
font-weight: bold;
float : center;
 padding: 4px;
margin: 5px;
width:90%;
}
body {
padding: 120px;
margin:150px;
width:50%;
float:center;
  background-color: lightgrey;
border:1px solid deeppink;
color:black;
}



 input[type = submit] {
            background-color: deeppink;
            border: none;
            text-decoration: none;
            color: white;
           
            cursor: pointer;
         }
</style>
<h4> Welcome Admin !</h4>
 <h4> Sign in To Acesss Your Functionalities </h4>



<script>
	function check(){
		if(document.getElementById("email").value=="" || document.getElementById("password").value=="")
			document.getElementById("submit").disabled=true;
		else document.getElementById("submit").disabled=false;
		
	}
	

</script>
<header class="w3-container w3-light-grey w3-center" style="padding:20px 10px">

	<form class="form-horizontal" method="post" action="admin_verify.php">
		<div class="form-group">
			<label for="name" class="control-label col-md-4">Email</label>
			<div class="col-md-4">
				<input type="text" name="email" id="email" class="form-control" onkeyup="check()">
			</div>
		</div>
		<div class="form-group">
			<label for="pass" class="control-label col-md-4">Password</label>
			<div class="col-md-4">
				<input type="password" name="password" id="password" class="form-control" onkeyup="check()">
			</div>
		</div> <br>
		<input type="submit" name="submit" id="submit" class="btn btn-primary" disabled>
	</form>

</header>