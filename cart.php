<?php 
include ('db_connect.php');
session_start();

$uid=$_SESSION['ses_id'];

$mm=mysql_query("select * from login where user_id='$uid'");
$nn=mysql_fetch_array($mm);

$data=mysql_query("select * from cart where user_id='$uid'");


 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
 
.dropbtn {
  
  color: black;
  margin-left: 10px;
  font-size: 16px;
  border: none;
  width: 140px;
  background-color: white;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  
  min-width: 160px;
  background-color: white;
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
.imgsection{

height: 200px;
width: 50%;
margin-left: 100px;
margin-top: 50px;
float: left;
}
 .btn13{
    margin-top: 30px;
    margin-left: 20px;
   height: 50px;width: 150px;
   background-color: red;
   border: 0;
   font-size: 17px;
   color: white;

 }
 .btn11{
 	margin-left: 30px;
    margin-top: 30px;
   height: 50px;width: 150px;
   background-color: red;
   border: 0;
   font-size: 20px;
   color: white;
 }
 .con{


 }

.dropdown-content a:hover {background-color: white;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: white;}
</style>
</head>
<body>


<nav class="navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="color: red; font-size: 40px; margin-left: 70px;">pepperfry</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="font-size: 18px; color: black;"">Departments
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Kid's Interior</a></li>
          <li><a href="#">Furniture</a></li>
          <li><a href="#">Wall Art</a></li>
        </ul>
      </li>
      <li><a href="Interiordesign.php" style="font-size: 18px; color: black;">Interior Design <span class="badge" style="background-color: red;">new</span></a><br></li>
      <li><a href="#" style="font-size: 18px; color: black;">Studios</a></li>
      <li><a href="#" style="font-size: 18px; color: black;">What's More</a></li>
    </ul>
    <form class="navbar-form navbar-left" action="/action_page.php">
  <div class="input-group">
    <input type="text" class="form-control" placeholder="Search">
    <div class="input-group-btn">
      <button class="btn btn-default" type="submit">
        <i class="glyphicon glyphicon-search"></i>
      </button>
    </div>
     
     <div class="dropdown">
  <button class="dropbtn"><i class="glyphicon glyphicon-user hidden-xs" style="margin-left: 45px; font-size: 20px;"></i><?php echo $nn['first_name']; ?></button>
  <div class="dropdown-content">
    <a href="update_profile.php">my account</a>
    <a href="#">my wallet</a>
    <a href="#">my wishlist</a>
    <a href="#">Gift Registry</a>
    <a href="#">My Profile</a>
    <a href="new.php">Logout</a>
  </div>
</div>
     

  </div>
</form>
</div>
</nav>

<?php

while ($data1=mysql_fetch_array($data)) {
	# code...

?>
<div>
<div class="imgsection">

<img class="imgg" style="height: 200px; width: 220px;" src="<?php echo $data1['imagee']?>">

</div>
<div class="con">
  
  <h4 style="margin-top: 20px; color: red;"><?php echo $data1['product_name']?></h4>
  <h3><b>Offer Price: <?php echo $data1['price']?> </b></h3> 
  <h5>Free Delivery Over Rs. 10,000</h5>
    <a href="removecart.php?piid=<?php echo $data1['product_id']?>"><button class="btn13">remove from cart</button></a>
    
    <button class="btn11">Order Now</button>
</div>
</div>
<hr>
<?php

}
?>

</body>
</html>