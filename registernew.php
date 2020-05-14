<!DOCTYPE html>
<html>	
<head>
<title> Signup Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
 <meta name="keywords" content="" />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="//fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900" rel="stylesheet">
</head>
<body>
 <h1></h1>
 <div class="w3_frm">
 <!---728x90---> 
  <form action="newsignup.php" method="post">
			<h3>Signup Form</h3>
			<div class="field-w3-agile-grid leftf">	
				<input type="text" name="UserName" class="name" placeholder="UserName" required="" />
			</div>
			<div class="field-w3-agile-grid leftf">	
				<input type="text" name="FirstName" class="name" placeholder="FirstName" required="" />
			</div>
			<!---728x90---> 
			<div class="field-w3-agile-grid leftf">	
				<input type="text" name="LastName" class="name" placeholder="LastName" required="" />
			</div>
			<div class="w3l_gen">
			<h5>Gender :</h5>
			<div class="w3_ml">
			<!---728x90---> 
			<input type="radio" name="Gender" class="Gender"  value="">
				<label for="brand"><span></span>Male</label>
			</div>
			
			<div class="w3_fl">
			<input type="radio" name="Gender" class="Gender" value="">
				<label for="brand"><span></span>Female</label>
			</div>
			</div>
			
			
			<div class="field-w3-agile-grid leftf">	
				<input type="text" name="PhoneNumber" class="number" placeholder="PhoneNumber" required="" />
			</div>
			<div class="field-w3-agile-grid rightf">
				<input type="password" name="PassWord" class="password" placeholder="PassWord" required="" />
			</div>
			<div class="field-w3-agile-grid rightf">
				<input type="password" name="Confirm PassWord" class="password" placeholder="Confirm PassWord" required="" />
			</div>
            <p>
			<?php
               
              
                  $UserName=$_POST['UserName'];
                  $FirstName=$_POST['FirstName'];
                  $LastName=$_POST['LastName'];
                  $Gender=$_POST['Gender'];
                  $PhoneNumber=$_POST['PhoneNumber'];
                  $PassWord=$_POST['PassWord'];
                  
                   $conn = mysqli_connect('localhost','root','','minorproject');
                   
                        $stmt = $conn->prepare("insert into registration(UserName,FirstName,LastName,Gender,PhoneNumber,PassWord,confirmPassWord) values(?,?,?,?,?,?,?)"); 
                        $stmt=bind_param("sssiss",$UserName,$FirstName,$LastName,$Gender,$PhoneNumber,$PassWord,$confirmPassWord);
                        $stmt=execute();
                        echo "registered successfully";
                        stmt->close();
                        conn->close();
                    
                   
                  
                  
                  
               ?>
               </p>
			<input type="submit" value="Signup">
		</form>
	</div>
</body>
</html>