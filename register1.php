<!DOCTYPE html>
<html>
<head>
<title>Blend Login Form Flat Responsive Widget Template :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Blend  Login Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css1/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css1/font-awesome.css" rel="stylesheet"> <!-- Font-Awesome-Icons-CSS -->

<!-- //Custom Theme files -->
<!-- web font --> 
<link href="//fonts.googleapis.com/css?family=Vollkorn+SC:400,600,700,900&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Acme" rel="stylesheet"> 
<!-- //web font --> 
</head>
<body>
	<!-- main -->
	<div class="main">
		<h1>PedaGoggy</h1>
		<div class="main-w3lsrow">
			<!-- login form -->
			<div class="login-form login-form-left"> 
				<div class="agile-row">
					<h2>Register Here</h2> 
					<div class="login-agileits-top"> 	
						<form action="Register.php" method="post"> 
							<p>User Name </p>
							<input type="text" class="name" name="uname" required=""/>
							<p>Password</p>
							<input type="password" class="password" name="Password" required=""/>
                            <p>Confirm Password</p>
							<input type="password" class="password" name="CPassword" required=""/>
                            <p>Email</p>
							<input type="text" class="email" name="email" required=""/>
                            <p>Contact</p>
							<input type="text" class="contact" name="contact" required=""/>
                            
							<p>
                            <?php
                                if(isset($_POST['uname']) && isset($_POST['Password']) && isset($_POST['CPassword'])&& isset($_POST['email']) &&isset($_POST['contact']))
                                {
                                    
                                
                                    $connection = mysqli_connect("localhost:3309","pedagogy","Devanjali@jhs1234","pedagogy");
    
                                    $uname=$_POST['uname'];
                                    $password=$_POST['Password'];
                                    $email=$_POST['email'];
                                    $contact=$_POST['contact'];
                                    
                                   //$query="insert into register values(112,\'dev\',67888)";
                                    $q="insert into register values('{$uname}','{$password}','{$email}','{$contact}')";
                                   
                                    $result=$connection->query($q, MYSQLI_STORE_RESULT);
                                    if($result)
                                    {
                                        echo "User  sucessfully Registered.<br/><a href=\"login.php\">Click Here to Login</a>";
                                        
                                    }
                                    else
                                    {
                                        echo "Error in Registeration";
                                    }
                                }
                               
                            ?>
                            </p>
							<input type="submit" value="Register"> 
						</form> 	
					</div> 
				

				</div>  
			</div>  
		</div>	
	
	</div>	
	<!-- //main --> 
</body>