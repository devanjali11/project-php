
<!DOCTYPE HTML>
<html>

<head>
	<title>Green </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Green login Form">
	
		<link href="css/font-awesome.css" rel="stylesheet">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
		<link href="//fonts.googleapis.com/css?family=Niconne" rel="stylesheet">
	<!-- body -->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
	<!--//fonts-->
</head>

<body>
	<h1>Login </h1>
	<div class="w3ls-login box box--big">
	
		<form action="loginlogic.php" method="POST">
			<img src="images/icon.png" alt="" />
			<div class="agile-field-txt">
				<label>
					<i class="fa fa-user" aria-hidden="true"></i> Email</label>
				<input type="text" name="email1" placeholder=" " required="" />
			</div>
			<div class="agile-field-txt">
				<label>
					<i class="fa fa-lock" aria-hidden="true"></i> password</label>
				<input type="password" name="pass1" placeholder=" " required="" id="myInput" />
				<div class="agile_label">
					
					<label><a href="newsignup.php">New User</a></label>
				</div>
				<div class="agile-right">
					<a href="#">forgot password?</a>
				</div>
			</div>
			<!-- script for show password -->
			
			
			<div class="w3ls-bot">
				
				<input type="submit" value="LOGIN">
			</div>
		</form>
	</div>
	