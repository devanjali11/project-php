
<!DOCTYPE html>
<html>	
<head>
<title> Signup Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
 <meta name="keywords" content="" />
<link href="style.css" rel='stylesheet' type='text/css' />
<link href="//fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900" rel="stylesheet">
</head>
<body>
 <h1></h1>
 <div class="w3_frm">
 <!---728x90---> 
  <form action="registerlogic.php" method="post">
			<h3>Signup Form</h3>
			<div class="field-w3-agile-grid leftf">	
				<input type="text" name="email" class="name" placeholder="email" required="" />
			</div>
            	<div class="field-w3-agile-grid leftf">	
				<input type="text" name="mobile" class="number" placeholder="PhoneNumber" required="" />
			</div>
			<div class="field-w3-agile-grid leftf">	
				<input type="text" name="name1" class="name" placeholder="FirstName" required="" />
			</div>
			<!---728x90---> 
			<div class="field-w3-agile-grid leftf">	
				<input type="text" name="name2" class="name" placeholder="LastName" required="" />
			</div>
            <div class="field-w3-agile-grid rightf">
				<input type="password" name="password" class="password" placeholder="PassWord" required="" />
			</div>
			<div class="w3l_gen">
			<h5>Gender :</h5>
			<div class="w3_ml">
			<!---728x90---> 
			<input type="radio" name="gg" class="Gender"  value="">
				<label for="brand"><span></span>Male</label>
			</div>
			
			<div class="w3_fl">
			<input type="radio" name="gg" class="Gender" value="">
				<label for="brand"><span></span>Female</label>
			</div>
			</div>
			
            
			<input type="submit" value="Signup">
		</form>
	</div>
</body>
</html>