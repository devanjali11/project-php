<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  
  <style type="">
  	.h1{
  		color: red;
  		margin-left: 20px;
  	}
  	.h2{
           font-size: 13px;
  	}
  	.h3{
  		font-size: 14px;
  	}
  	.input {
  border: 0;
  outline: 0;
  background: transparent;
  border-bottom: 1px solid black;
  width: 220px;
}
.input1{
	border: 0;
	outline: 0;
	background: transparent;
	border-bottom: 1px solid black;
	width: 220px;
	margin-top: 50px;
}
.input2{
border: 0;
  outline: 0;
  background: transparent;
  border-bottom: 1px solid black;
  width: 220px;

}
.input3{
	border: 0;
	outline: 0;
	background: transparent;
	border-bottom: 1px solid black;
	width: 220px;
	margin-top: 50px;
}
.input4{
	border: 0;
	outline: 0;
	background: transparent;
	border-bottom: 1px solid black;
	margin-left: 10px;
	width: 550px;
	margin-top: 50px;
}
.i1{
	height: 20px; width: 20px;
}
.i2{
	height: 20px; width: 20px;
}
.i3{
	height: 20px; width: 20px;
}
.btn1{
	background-color: red;
	 width: 550px; 
	 height: 40px;
	 border: 0;
	 margin-top: 20px;
}
.hr{
	transform: rotate(90deg);width: 1000px;
	position: absolute;
	
	margin-left: 150px;
	margin-top: 30px;
}
.hh1{
	color: red;
}
.hh2{
border: 0;
  outline: 0;
  background: transparent;
  border-bottom: 1px solid black;
  width: 320px;
  margin-top: 60px;
}
.hh3{
	border: 0;
  outline: 0;
  background: transparent;
  border-bottom: 1px solid black;
  width: 320px;
  margin-top: 60px;
}
.hh4{
	height: 15px;
	width: 15px;
}
.btn2{
	background: #2E434C;
	width: 350px;
	margin-top: 40px;
	height: 40px;
	border: 0;
}
.aa{
	color: red;
}
.fb{
	background-color: #3B5998;
    height: 50px;
    width: 150px;
    border: 0;
    margin-top: 20px;
    font-size: 20px;
}
.aa2{
	color: white;
	font-size: 20px;
}
.aa3{
	color: white;
	font-size: 20px;
}
.google{
	height: 50px;
    width: 150px;
    border: 0;
    margin-top: 20px;
    background-color: #CCCCCC;
    margin-left: 50px;
    font-size: 20px;
}
</style>

</head>
<body>
  
  <div class="container-fluid">
  	<div class="row">
  		<div class="col-md-7">
  			<h3 class="h1" style="color: red; margin-left: 20px;">New Customer?</h3>
  			<p style="margin-left: 20px;">Hurry! <b>Register Now</b> For <b>Unbelievable Discounts.</b></p>
  			<div class="container-fluid" style="margin-top: 50px;">
  			<div class="row">
  			<div class="col-md-4" style="border-right: 1px solid black; height: 80px; width: 190px;">
             <h4 >SAVE<span style="color: red"> Rs.10,000</span></h4>
             <p class="h2">30% Off + 10% Cashback</p>
  			</div>
  			<div class="col-md-4" style="border-right: 1px solid black; height: 80px; width: 220px;">
  				<h4>GET <span style="color: red">20% CASHBACK</span></h4>
  				<p class="h3">Across All Product</p>
  				</div>
  			<div class="col-md-4" style=" height: 80px; width: 150px;">
  				<p><b>AND ENJOY MORE <span style="color: red">OFFERS</span></b></p>
  				</div>
  			</div>
  		</div>
      <form action="loginlogic.php" method="POST">
  		<div class="container-fluid" style="margin-top: 30px;">
  			<div class="row">
  				<div class="col-md-5">
  					<input type="Email" name="email" class="input" placeholder="Email ID" required>
  					<input type="text" name="name1" class="input1" placeholder="First Name" required>
  				</div>
  				<div class="col-md-5" >
  					<input type="" name="mobile" class="input2" placeholder="Mobile" required>
  					<input type="text" name="name2" class="input3" placeholder="Last Name" required>
  				</div>
  			</div>
  		</div>
  		<input type="password" name="password" class="input4" placeholder="password" required><br>
  		<div class="container-fluid" style="margin-top: 30px;">
  		<div class="row">
  			<div class="col-md-4"> 
  		<input type="radio" name="gender" value="Female" class="i1" >Female
  	</div>
  	<div class="col-md-4">
  		<input type="radio" name="gender" value="Male" class="i2">Male
  	</div>
  	<div>
  		<input type="radio" name="gender" value="Transgender" class="i3">Other
  	</div>
  		</div>
  	</div>
  <button class="btn1"><span style="color: white">SIGN UP</span></button>
  </form>
  <p style="margin-left: 120px;">By signing up you agree to our <a href="#">terms</a></p>
  </div>
  <hr class="hr">
  <div class="col-md-5" style="margin-left: -90px;">
  	<h3 class="hh1">Already Have an Account?</h3>
  	<p><b>Sign In</b> To Track Your Order, Use Wishlist & More.</p>
     <form action="loginlogic.php" method="POST">
  	<input type="Email" name="email1" class="hh2" placeholder="Email ID" required>
  	<input type="password" name="pass1" class="hh3" placeholder="password" required><br>
  	<input type="checkbox" name="" class="hh4" value="keep"><span style="font-size: 20px; "> Keep me signed in</span>
  	<button class="btn2" type="submit"><span style="color: white">SIGN IN</span></button><br>
  </form>
  	<a href="#" class="aa">Forgot password?</a>
  	<h5 style="margin-left: 100px; margin-top: 20px;">OR CONTINUE WITH</h5>
  	<button class="fb"><span class="fa fa-facebook fa-fw" style="color: white;"></span>Facebook</button>
  	<button class="google"><span class="fa fa-google fa-fw"  style="color: white;"></span>Google</button>
  	<p style="color: red; margin-top: 25px; margin-left: 25px;"><b>User cancelled login or did not fully authorize.</b></p>
  </div>
  	</div>
  	
  </div>
</div>
</div>
</div></div>
</body>
</html> 